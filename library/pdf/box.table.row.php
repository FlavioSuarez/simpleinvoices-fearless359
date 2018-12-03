<?php
// $Header: /cvsroot/html2ps/box.table.row.php,v 1.29 2007/01/24 18:55:45 Konstantin Exp $

class TableRowBox extends GenericContainerBox
{
    var $rows;
    var $colspans;
    var $rowspans;

    public function __construct()
    {
        parent::__construct();
    }

    public static function &create(&$root, &$pipeline)
    {
        $box = new TableRowBox();
        $box->readCSS($pipeline->getCurrentCSSState());

        $child = $root->first_child();
        while ($child) {
            $child_box =& create_pdf_box($child, $pipeline);
            $box->add_child($child_box);

            $child = $child->next_sibling();
        }

        return $box;
    }

    public function add_child(&$item)
    {
        if ($item->isCell()) {
            GenericContainerBox::add_child($item);
        }
    }

    // Normalize colspans by adding fake cells after the "colspanned" cell
    // Say, if we've got the following row:
    // <tr><td colspan="3">1</td><td>2</td></tr>
    // we should get row containing four cells after normalization;
    // first contains "1"
    // second and third are completely empty
    // fourth contains "2"
    public function normalize(&$pipeline)
    {
        for ($i = 0, $size = count($this->content); $i < $size; $i++) {
            for ($j = 1; $j < $this->content[$i]->colspan; $j++) {
                $this->add_fake_cell_after($i, $pipeline);
                // Note that add_fake_cell_after will increase the length of current row by one cell,
                // so we must increase $size variable
                $size++;
            }
        }
    }

    public function add_fake_cell_after($index, &$pipeline)
    {
        $root = null; // Added by RCR 20180918
        array_splice($this->content, $index + 1, 0, array(FakeTableCellBox::create($root, $pipeline)));
    }

    public function add_fake_cell_before($index, &$pipeline)
    {
        $root = null; // Added by RCR 20180918
        array_splice($this->content, $index, 0, array(FakeTableCellBox::create($root, $pipeline)));
    }

    public function append_fake_cell(&$pipeline)
    {
        $root = null; // Added by RCR 20180918
        $this->content[] = FakeTableCellBox::create($root, $pipeline);
    }

    // Table specific

    public function table_resize_row($height, $top)
    {
        // Do cell vertical-align
        // Calculate row baseline

        $baseline = $this->get_row_baseline();

        // Process cells contained in current row
        for ($i = 0, $size = count($this->content); $i < $size; $i++) {
            $cell =& $this->content[$i];

            // Offset cell if needed
            $cell->offset(0,
                $top -
                $cell->get_top_margin());

            // Vertical-align cell (do not apply to rowspans)
            if ($cell->rowspan == 1) {
                $va = $cell->getCSSProperty(CSS_VERTICAL_ALIGN);
                $va_fun = CSSVerticalAlign::value2pdf($va);
                $va_fun->apply_cell($cell, $height, $baseline);

                // Expand cell to full row height
                $cell->put_full_height($height);
            }
        }
    }

    public function get_row_baseline()
    {
        $baseline = 0;
        for ($i = 0, $size = count($this->content); $i < $size; $i++) {
            $cell = $this->content[$i];
            if ($cell->rowspan == 1) {
                $baseline = max($baseline, $cell->get_cell_baseline());
            }
        }
        return $baseline;
    }

    public function get_colspans($row_index)
    {
        $colspans = array();

        for ($i = 0, $size = count($this->content); $i < $size; $i++) {
            // Check if current colspan will run off the right table edge
            if ($this->content[$i]->colspan > 1) {
                $colspan = new CellSpan;
                $colspan->row = $row_index;
                $colspan->column = $i;
                $colspan->size = $this->content[$i]->colspan;

                $colspans[] = $colspan;
            }
        }

        return $colspans;
    }

    public function get_rowspans($row_index)
    {
        $spans = array();

        for ($i = 0; $i < count($this->content); $i++) {
            if ($this->content[$i]->rowspan > 1) {
                $rowspan = new CellSpan;
                $rowspan->row = $row_index;
                $rowspan->column = $i;
                $rowspan->size = $this->content[$i]->rowspan;
                $spans[] = $rowspan;
            }
        }

        return $spans;
    }

    // Column widths
    public function get_table_columns_max_widths(&$context)
    {
        $widths = array();
        for ($i = 0; $i < count($this->content); $i++) {
            // For now, colspans are treated as zero-width; they affect
            // column widths only in parent *_fit function
            if ($this->content[$i]->colspan > 1) {
                $widths[] = 0;
            } else {
                $widths[] = $this->content[$i]->get_max_width($context);
            }
        }

        return $widths;
    }

    public function get_table_columns_min_widths(&$context)
    {
        $widths = array();
        for ($i = 0; $i < count($this->content); $i++) {
            // For now, colspans are treated as zero-width; they affect
            // column widths only in parent *_fit public function
            if ($this->content[$i]->colspan > 1) {
                $widths[] = 0;
            } else {
                $widths[] = $this->content[$i]->get_min_width($context);
            }
        }

        return $widths;
    }

    public function row_height()
    {
        // Calculate height of each cell contained in this row
        $height = 0;
        for ($i = 0; $i < count($this->content); $i++) {
            if ($this->content[$i]->rowspan <= 1) {
                $height = max($height, $this->content[$i]->get_full_height());
            }
        }

        return $height;
    }

    /**
     * Note that we SHOULD override the show method inherited from GenericContainerBox,
     * as it MAY draw row background in case it was set via CSS rules. As row box
     * is a "fake" box and will never have reasonable size and/or position in the layout,
     * we should prevent this
     * @param OutputDriver $viewport
     * @return bool|null
     */
    public function show(&$viewport)
    {
        // draw content
        $size = count($this->content);

        for ($i = 0; $i < $size; $i++) {
            /**
             * We'll check the visibility property here
             * Reason: all boxes (except the top-level one) are contained in some other box,
             * so every box will pass this check. The alternative is to add this check into every
             * box class show member.
             *
             * The only exception of absolute positioned block boxes which are drawn separately;
             * their show method is called explicitly; the similar check should be performed there
             */

            $cell =& $this->content[$i];
            $visibility = $cell->getCSSProperty(CSS_VISIBILITY);

            if ($visibility === VISIBILITY_VISIBLE) {
                if (is_null($cell->show($viewport))) {
                    return null;
                }
            }
        }

        return true;
    }

    public function isTableRow()
    {
        return true;
    }
}
