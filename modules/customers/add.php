<?php

use Inc\Claz\CustomFields;
use Inc\Claz\DomainId;
use Inc\Claz\DynamicJs;
use Inc\Claz\Util;

/*
 * Script: add.php
 * 	    Customers add page
 *
 * Authors:
 *	    Justin Kelly, Nicolas Ruflin
 *
 * Last edited:
 * 	    2016-07-27
 *
 * License:
 *	    GPL v3 or above
 *
 * Website:
 * 	    https://simpleinvoices.group
 */
global $smarty;

//stop the direct browsing to this file - let index.php handle which files get displayed
Util::isAccessAllowed();

//if valid then do save
if (!empty($_POST['op']) && $_POST['op'] == 'add') {
    include("modules/customers/save.php");
} else {
    DynamicJs::begin();
    DynamicJs::formValidationBegin("frmpost");
    DynamicJs::validateRequired("name",$LANG['name']);
    DynamicJs::validateIfEmail("email", "true");
    DynamicJs::formValidationEnd();
    DynamicJs::end();

    $customFieldLabel = CustomFields::getLabels(true);
    $smarty->assign('customFieldLabel', $customFieldLabel);
    $smarty->assign('domain_id', DomainId::get());

    $smarty->assign('pageActive', 'customer');
    $smarty->assign('subPageActive', 'customer_add');
    $smarty->assign('active_tab', '#people');
}