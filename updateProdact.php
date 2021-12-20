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
//$product = functionProduct();

//$catalogArray = getJson();
$productOOP = new Products();
$database = new Databasea();
$product = $productOOP->Getdata($_POST);
//json_decode(file_get_contents('php://input'), true)
$productUpdate = $database->UpdateProdact($product['name'], $product['category'], $product['sku'], $product['price'], $product['quantity']);
//$productUpdated = false;


//foreach ($catalogArray['products'] as $key => $value) {
//    if (IsExistProduct ($product, $value)) {
//        $catalogArray['products'][$key]['price'] = $product['price'];
//        $catalogArray['products'][$key]['sku'] = $product['sku'];
//        $catalogArray['products'][$key]['quantity'] = $product['quantity'];
//        putJson($catalogArray);
//        $productUpdated = true;
//        $productUpdated = $connection->prepare('UPDATE products SET price = :price, sku = :sku, quantity = :quantity
//        where name = :name and category = :category');
//        $productUpdated ->execute(
//            [
//                ':name' => $product['name'],
//                ':category' => $product['category'],
//                ':price' => $product['price'],
//                ':sku' => $product['sku'],
//                ':quantity' => $product['quantity'],
//            ]
//        );
//        $count =$productUpdated->rowCount();
        //$productUpdated = true;

    //}
//}

if ($productUpdate === false) {
    echo "Продукт не существует";
}




