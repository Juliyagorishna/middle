<?php
//if($_GET['action'] === 'show-product-table') {
  //  require_once 'table.php';
//} elseif ($_GET ['action'] === 'show-form-for-update') {
  //  require_once 'FormForUpdate.php';
//} elseif ($_GET['action'] === 'show-list-of-category') {
  //  require_once 'listOfCategory.php';
//} elseif ($_GET['action'] === 'show-category-with-product') {
  //  require_once 'CategoryWithProduct.php';
//}
//else {
  //  require_once 'login.php';
//}
switch ($_GET['action']) {
    case 'show-product-table':
        require_once 'table.php';
        break;
    case 'show-form-for-update':
        require_once 'FormForUpdate.php';
        break;
    case 'show-list-of-category':
        require_once 'listOfCategory.php';
        break;
    case 'show-category-with-product':
        require_once 'CategoryWithProduct.php';
        break;
    default:
        require_once 'login.php';
}
