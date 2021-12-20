<?php
require_once 'ProductInfo.php';
function functionProduct($data)
{
    //$data = json_decode(file_get_contents('php://input'), true); // Postman
    //$data = $_POST; // из формочки
     $product = array(
        'name' => $data['name'],
        'category' => $data["category"],
        'sku' => $data["sku"],
        'price' => $data["price"],
        'quantity' => $data["quantity"]);
    return $product;
}


function getJson ()
{
    $catalog = file_get_contents(__DIR__ . '/catalog.json');
    return json_decode($catalog, true);
}

//function putJson (array $catalogArray) {
//    $catalogJson = json_encode($catalogArray, JSON_PRETTY_PRINT);
//    file_put_contents ('catalog.json', $catalogJson);
//}

//function IsExistProduct (array  $product, array $value) {
   //return $product['name'] === $value['name'] && $product['category'] === $value ['category'];

//}
