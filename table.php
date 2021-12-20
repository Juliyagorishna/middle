<?php
//var_dump($_POST);
require_once 'Databasea.php';
session_start();
if (isset($_COOKIE['user'])) {
    echo "Привет, " . $_COOKIE['user'] . " Добро пожаловать";
}


//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//$host = 'mysql';
//$port = 3306;
//$dbname = 'study';
//$username = 'root';
//$password = 'root';
//
//$connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

//$catalogArrey = getJson();


?>
<html>

<body>


<table>
    <tr>
        <td>name</td>
        <td>category</td>
        <td>sku</td>
        <td>price</td>
        <td>quantity</td>
    </tr>
<!--    --><?php
//
//    foreach ($catalogArrey['products'] as $value) : ?>
<!--    <tr>-->
<!--        <td>--><?//= $value['name']; ?><!--</td>-->
<!--        <td>--><?//= $value['category']; ?><!--</td>-->
<!--        <td>--><?//= $value['sku']; ?><!--</td>-->
<!--        <td>--><?//= $value['price']; ?><!--</td>-->
<!--        <td>--><?//= $value['quantity']; ?><!--</td>-->
<!--    </tr>-->
<!--        --><?php
//        endforeach;
//        ?>
           <?php
           //foreach ($catalogArrey['products'] as $value)
//$statement = $connection->query('select * from products');
//$products = $statement->fetchAll();
           $database = new Databasea();
           $products = $database->getAll();
           $user = $database->GetUserCookie($_COOKIE['user']);

foreach ($products as $valueProduct) {
    echo
    '<tr>';
    if ($user != 0) {
        echo
            '<td> <a href="FormForUpdate.php?name=' . $valueProduct['name'] . '">' . $valueProduct['name'] . '</a> </td>';
    } else {
        echo
            '<td> ' . $valueProduct['name'] . '</td>' ;
}
    echo
        '<td> ' . $valueProduct['category'] . '</td>
        <td> ' . $valueProduct['sku'] . '</td>
        <td> ' . $valueProduct['price'] . '</td>
        <td> ' . $valueProduct['quantity'] . '</td>
    </tr>';

    }
    if ($user != 0) {
        echo
        '</table>
<form method="post" action="creatProdact.php" target="_blank">
<label>
        Name
        <input type="text" name="name"/>
    </label><br>
    <label>
        Category
        <input type="text" name="category"/>
    </label><br>
    <label>
        Sku
        <input type="text" name="sku"/>
    </label><br>
    <label>
        Price
        <input type="text" name="price"/>
    </label><br>
    <label>
        Quantity
        <input type="text" name="quantity"/>
    </label><br>
   <input type="submit" Создать новый продукт</>
   </form>
</body>
</html>';
    }
?>
