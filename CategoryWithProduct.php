<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Databasea.php';
$database = new Databasea();
$products = $database->getProducts($_GET['category']);
?>
<html>
<body>
<ul>
    <?php

        foreach ($products as $valueproducts) {
     echo

            '<li>' . $valueproducts['name'] . '</li>';
            };

echo
'</ul>

</body>
</html> '
    ?>
