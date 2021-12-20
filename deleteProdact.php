<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//require_once 'ProductInfo.php';
require_once 'Databasea.php';
require_once 'Products.php';
//$host = 'mysql';
//$port = 3306;
//$dbname = 'study';
//$username = 'root';
//$password = 'root';
//
//$connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
//$product = ($_POST);
$productOOP = new Products();
$product = $productOOP->GetdataForDelete(json_decode(file_get_contents('php://input'), true));

//$catalogArray = getJson();
$database = new Databasea();
$deleteProduct = $database->DeleteProduct($product['name'], $product['category']);


//foreach ($catalogArray['products'] as $key => $value) {
    //if (IsExistProduct($product, $value)) {
        //unset ($catalogArray['products'][$key]);
        //putJson($catalogArray);

//        $productDelete = $connection->prepare('Delete from products
//        where name = :name and category = :category');
//        $productDelete ->execute(
//            [
//                ':name' => $product['name'],
//                ':category' => $product['category'],
//
//            ]
//        );

   // }
//}







