<?php

require_once 'Databasea.php';

$database = new Databasea();
$category = $database->getCategory();

?>

<html>
<body>
<ul>
    <?php

        foreach ($category as $valuecategory) {
     echo

            '<li><a href="CategoryWithProduct.php?category=' .  $valuecategory['category'] . '">'
            . $valuecategory['category'] . '</li> </a>';
        };

echo
'</ul>

</body>
</html> '
    ?>
