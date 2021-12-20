<?php
//$string = file_get_contents(__DIR__ . '/catalog.json');
//$catalogArrey = json_decode($string, true);
require_once 'Databasea.php';

//$host = 'mysql';require_once 'ProductInfo.php';
//$port = 3306;
//$dbname = 'study';
//$username = 'root';
//$password = 'root';
//
//$connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

//$catalogArray = getJson();
//$category = []; // создали массив
$database = new Databasea();
$category = $database->getCategory();
//$statement = $connection->query('select distinct category  from products');
//$category = $statement->fetchAll();
?>

<html>
<body>
<ul>
    <?php
//    while ($valuecategory = $statement->fetchColumn()) {
        foreach ($category as $valuecategory) {
//    foreach ($catalogArray['products'] as $product) { //перебрали массив продуктов по продуктам
//        $category[] = $product['category']; //записали в пустой массив категории продукта
//    }
//
//    $category = array_unique($category); // функция не допускает дубляжа
//    foreach ($category as $categoryName) :  //перебрали названия категорий
     echo

            '<li><a href="CategoryWithProduct.php?category=' .  $valuecategory['category'] . '">'
            . $valuecategory['category'] . '</li> </a>';
        };

echo
'</ul>

</body>
</html> '
    ?>
