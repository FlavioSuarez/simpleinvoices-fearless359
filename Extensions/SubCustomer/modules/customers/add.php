<?php

use Inc\Claz\Customer;
use Inc\Claz\DomainId;

/*
 * Script: add.php
 * 	Customers add page
 *
 * Authors:
 *	 Justin Kelly, Nicolas Ruflin
 *
 * Last edited:
 * 	 2016-07-27
 *
 * License:
 *	 GPL v3 or above
 *
 * Website:
 * 	https://simpleinvoices.group
 */
global $smarty;

//stop the direct browsing to this file - let index.php handle which files get displayed
checkLogin();

$customFieldLabel = getCustomFieldLabels(true);

//if valid then do save
if (!empty($_POST['name'])) {
	include("Extensions/SubCustomer/modules/customers/save.php");
}
$smarty->assign('customFieldLabel',$customFieldLabel);

$parent_customers = Customer::get_all(true);
$smarty->assign('parent_customers', $parent_customers);

$smarty->assign('pageActive'      , 'customer');
$smarty->assign('subPageActive'   , 'customer_add');
$smarty->assign('active_tab'      , '#people');

