<?php

declare(strict_types=1);

class Products
{
    public function GetdataForDelete ($data)
    {
        $productfordelete = [
            'name' => $data["name"],
            'category' => $data["category"]
        ];
        return $productfordelete;
    }
    public function Getdata ($data)
    {
        //$data = $_POST;
        $product = [
            'name' => $data['name'],
            'category' => $data["category"],
            'sku' => $data["sku"],
            'price' => $data["price"],
            'quantity' => $data["quantity"]];
        return $product;
    }
     public function IsExistProductOOP (array  $product, array $value) {
        return $product['name'] === $value['name'] && $product['category'] === $value ['category'];
         }
    public function getJson () {
        $catalog = file_get_contents(__DIR__ . '/catalog.json');
        return json_decode($catalog, true);
    }
}
