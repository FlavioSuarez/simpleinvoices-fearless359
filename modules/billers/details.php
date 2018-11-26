<?php

use Inc\Claz\Biller;
use Inc\Claz\CustomFields;
use Inc\Claz\Extensions;
use Inc\Claz\Util;

/*
 * Script: details.php
 *   Biller details page
 *
 * Authors:
 *   Justin Kelly, Nicolas Ruflin
 *
 * Last edited:
 *   2007-07-19 
 *
 * License:
 *   GPL v2 or above
 *
 * Website:
 *   https://simpleinvoices.group
 */
global $smarty;

//stop the direct browsing to this file - let index.php handle which files get displayed
Util::isAccessAllowed();

//get the invoice id
$biller_id = $_GET['id'];
$biller = Biller::select($biller_id);

// Drop down list code for invoice logo
$files = Util::getLogoList();
// end logo stuff

$customFieldLabel = CustomFields::getLabels(true);
$smarty->assign('biller', $biller);
$smarty->assign('files', $files);
$smarty->assign('customFieldLabel', $customFieldLabel);

$smarty->assign('pageActive', 'biller');
$subPageActive = $_GET['action'] =="view"  ? "biller_view" : "biller_edit" ;
$smarty->assign('subPageActive', $subPageActive);
$smarty->assign('active_tab', '#people');
