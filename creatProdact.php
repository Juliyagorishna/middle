<?php
var_dump($_POST);
//require_once 'ProductInfo.php';
require_once 'Databasea.php';
require_once 'Products.php';
$database = new Databasea();
$productOOP = new Products();
//$host = 'mysql';
//$port = 3306;
//$dbname = 'study';
//$username = 'root';
//$password = 'root';
//
//$connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

//$product = functionProduct($_POST);
$productArray = $productOOP->Getdata($_POST);
$ErrorsArray = [];

//$catalogArray = getJson();


//foreach ($catalogArray['products'] as $value) {
//    if (IsExistProduct($product, $value)) {
//        $ErrorsArray = "Продукт уже существует";
//    }
//}
 if ($Getproduct = $database->getProduct($productArray['name'], $productArray['category'])) {
     $ErrorsArray = "Продукт уже существует";

 };


if (empty($ErrorsArray)) {

    $database->CreatProduct($productArray['name'], $productArray['category'], $productArray['sku'], $productArray['price'], $productArray['quantity']);
    //$catalogArray['products'][] = $product;
    //putJson($catalogArray);
//    $newProduct = $connection->prepare('INSERT INTO products (name , category, sku, price, quantity)
// values ( :name , :category, :sku, :price, :quantity);');
//    $newProduct->execute(
//        [
//            ':name' => $product ['name'],
//            ':category' => $product['category'],
//            ':sku' => $product['sku'],
//            ':price' => $product['price'],
//            ':quantity' => $product['quantity'],
//        ]
//    );
} else {
    echo "Продукт уже существует";
}
