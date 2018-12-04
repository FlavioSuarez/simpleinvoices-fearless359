<?php
// $Header: /cvsroot/html2ps/css.text-align.inc.php,v 1.10 2006/09/07 18:38:14 Konstantin Exp $

define('TA_LEFT', 0);
define('TA_RIGHT', 1);
define('TA_CENTER', 2);
define('TA_JUSTIFY', 3);

class CSSTextAlign extends CSSPropertyStringSet
{
    public function __construct()
    {
        parent::__construct(true,
            true,
            array('inherit' => CSS_PROPERTY_INHERIT,
                'left' => TA_LEFT,
                'right' => TA_RIGHT,
                'center' => TA_CENTER,
                'middle' => TA_CENTER,
                'justify' => TA_JUSTIFY));
    }

    public static function default_value()
    {
        return TA_LEFT;
    }

    public static function value2pdf($value)
    {
        switch ($value) {
            case TA_LEFT:
                return "ta_left";
            case TA_RIGHT:
                return "ta_right";
            case TA_CENTER:
                return "ta_center";
            case TA_JUSTIFY:
                return "ta_justify";
            default:
                return "ta_left";
        }
    }

    public static function getPropertyCode()
    {
        return CSS_TEXT_ALIGN;
    }

    public static function getPropertyName()
    {
        return 'text-align';
    }
}

$css_text_align_inc_reg1 = new CSSTextAlign();
CSS::register_css_property($css_text_align_inc_reg1);
