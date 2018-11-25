<?php
use Inc\Claz\Util;

/*
 *  Script: consulting.php
 * 	    consulting invoice page
 *
 *  Authors:
 *	    Justin Kelly, Nicolas Ruflin
 *
 *  Last edited:
 * 	    2007-07-19
 *
 *  License:
 *	    GPL v3 or above
 *
 *  Website:
 * 	    https://simpleinvoices.group
 */

//stop the direct browsing to this file - let index.php handle which files get displayed
Util::directAccessAllowed();

jsBegin();
jsFormValidationBegin("frmpost");
jsTextValidation("biller_id","Biller Name",1,1000000);
jsTextValidation("customer_id","Customer Name",1,1000000);
jsValidateIfNumZero("i_quantity0","Quantity");
jsValidateIfNum("i_quantity0","Quantity");
jsValidateRequired("select_products0","Product");
jsTextValidation("select_tax","Tax Rate",1,100);
jsPreferenceValidation("select_preferences","Invoice Preference",1,1000000);
jsFormValidationEnd();
jsEnd();

$pageActive = "invoices";

include('./modules/invoices/invoice.php');
