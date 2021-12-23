<?php
//require_once 'ProductInfo.php';
require_once 'Databasea.php';
require_once 'Products.php';
$database = new Databasea();
$products = new Products();
$ErrorsArray = [];

$catalogArray = $products->getJson();

foreach ($catalogArray['users'] as $value) {
    $database->CreatUser($value['name'], $value['email']);
}
