<?php
namespace Inc\Claz;

/**
 * Class CaseStmt
 * @package Inc\Claz
 */
class CaseStmt {
    private $field;
    private $when;
    private $alias;
    private $end;


    /**
     * Class constructor
     * @param string $field The table field to be Tests. Include the table name (or alias) with it.
     * @param string $alias (Optional) Alias for field generated by this <b>CASE</b> statement.
     */
    public function __construct($field, $alias=null) {
        $this->field = $field;
        $this->alias = $alias;
        $this->when = array();
        $this->end = false;
    }

    /**
     * Add a <b>WHEN</b> condition.
     * @param string $operator Limited to <b>=</b>, <b>!=</b>, <b>&lt;=</b>, <b>&lt;&gt;</b>, <b>&lt;</b>,
     *        <b>&gt;</b> and <b>&gt;=</b>.
     * @param string $value Value or field to place on the right side of the operator.
     * @param string $result Value to assign if the test is true.
     * @param boolean $end (Optional) Defaults to <b>false</b>. Specify <b>true</b> when the last
     *        <b>WHEN</b> test is specified.
     * @throws PdoDbException When called after the end has been flagged.
     */
    public function addWhen($operator, $value, $result, $end = false) {
        if ($this->end) {
            throw new PdoDbException("CaseStmt - addWhen(): Attempt to add after end specified.");
        }

        $this->when[] = new When($this->field, $operator, $value, $result);
        $this->end = $end;
    }

    /**
     * Builds the formatted <b>CASE</b> for this object.
     * @param array $keypairs (Optional) Parameter exists for function call compatibility
     *        with other <i>PdoDb</i> class SQL build objects. 
     * @return string Formatted <b>CASE</b> statement this criterion.
     * @throws PdoDbException
     */
    public function build($keypairs=null) {
        if (!$this->end) {
            throw new PdoDbException("CaseStmt - build(): End of CASE statement not specified.");
        }

        $case = "(CASE ";
        foreach($this->when as $when) {
            $case .= $when->build($keypairs);
        }
        $case .= "END)";
        if (empty($this->alias)) {
            $case .= " as " . $this->field;
        } else {
            $case .= " AS " . $this->alias;
        }

        return $case;
    }
}
