<?php

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
