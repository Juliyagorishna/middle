<?php
//require_once 'ProductInfo.php';
require_once 'Databasea.php';
require_once 'Products.php';
$database = new Databasea();
$products = new Products();

//$host = 'mysql';
//$port = 3306;
//$dbname = 'study';
//$username = 'root';
//$password = 'root';

//$connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

$ErrorsArray = [];

$catalogArray = $products->getJson();

//foreach ($catalogArray['products'] as $value) {
    //$ExistProductFromJson = $connection->prepare('INSERT INTO products (name , category, sku, price, quantity)
 //values (:name, :category, :sku, :price, :quantity);');
   // $ExistProductFromJson->execute(
       // [
           // ':name' => $value['name'],
           // ':category' => $value['category'],
          //  ':sku' => $value['sku'],
           // ':price' => $value['price'],
           // ':quantity' => $value['quantity'],
       // ]
    //);
   // $database->CreatProduct($value['name'], $value['category'], $value['sku'], $value['price'], $value['quantity']);
//}
foreach ($catalogArray['users'] as $value) {
    $database->CreatUser($value['name'], $value['email']);
}
