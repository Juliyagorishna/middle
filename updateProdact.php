<?php

require_once 'Databasea.php';
require_once 'Products.php';

$productOOP = new Products();
$database = new Databasea();
$product = $productOOP->Getdata($_POST);

$productUpdate = $database->UpdateProdact($product['name'], $product['category'], $product['sku'], $product['price'], $product['quantity']);


if ($productUpdate === false) {
    echo "Продукт не существует";
}




