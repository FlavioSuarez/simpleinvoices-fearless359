<?php

use Inc\Claz\ProductAttributes;
use Inc\Claz\ProductAttributeType;
use Inc\Claz\Util;

global $smarty;

//stop the direct browsing to this file - let index.php handle which files get displayed
Util::isAccessAllowed();

$smarty->assign('product_attribute', ProductAttributes::getOne($_GET['id']));
$smarty->assign("types", ProductAttributeType::getAll());

$smarty->assign('pageActive', 'product_attribute_manage');
$smarty->assign('active_tab', '#product');

