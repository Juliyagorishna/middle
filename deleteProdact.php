<?php

require_once 'Databasea.php';
require_once 'Products.php';

$productOOP = new Products();
$product = $productOOP->GetdataForDelete(json_decode(file_get_contents('php://input'), true));

$database = new Databasea();
$deleteProduct = $database->DeleteProduct($product['name'], $product['category']);










