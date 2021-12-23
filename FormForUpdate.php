<?php

require_once 'Databasea.php';
$database = new Databasea();
$products = $database->getProductForUpdate($_GET['name']);
?>
    <html>
    <body>
    <form method="post" action="updateProdact.php" target="_blank">
<?php

foreach ($products as $valueProduct) {
    echo
        '<label>  Name 
<input type="text" name="name" value="' . $valueProduct['name'] . '"> </label> <br>
<label> Category
<input type="text" name="category" value="' . $valueProduct['category'] . '"> </label> <br>
<label> Sku
<input type="text" name="sku" value="' . $valueProduct['sku'] . '"> </label> <br>
<label> Price
<input type="text" name="price" value="' . $valueProduct['price'] . '"> </label> <br>
<label> Quantity
<input type="text" name="quantity" value="' . $valueProduct['quantity'] . '"> </label> <br>
<input type="submit" Обновить продукт/> <br>

';
}
echo
'</form>

</body>
</html> '
    ?>
