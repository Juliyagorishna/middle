<?php
var_dump($_POST);
require_once 'Databasea.php';
require_once 'Products.php';
$database = new Databasea();
$productOOP = new Products();

$productArray = $productOOP->Getdata($_POST);
$ErrorsArray = [];

 if ($Getproduct = $database->getProduct($productArray['name'], $productArray['category'])) {
     $ErrorsArray = "Продукт уже существует";

 };
if (empty($ErrorsArray)) {

    $database->CreatProduct($productArray['name'], $productArray['category'], $productArray['sku'], $productArray['price'], $productArray['quantity']);

} else {
    echo "Продукт уже существует";
}

