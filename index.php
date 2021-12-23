<?php



try {
    $string = file_get_contents(__DIR__ . '/catalog.json');
    $json_a = json_decode($string, true);
} catch (Throwable $exception) {
    var_dump($exception->getMessage());
    exit;
}

?>
<html>

<body>


<table>
    <tr>
        <td>name</td>
        <td>catalog</td>
        <td>sku</td>
        <td>price</td>
        <td>quantity</td>
    </tr>
    <?php
    foreach ($json_a as $key => $value) : ?>
    <tr>
        <td><?= $key; ?></td>
        <td><?= $value; ?></td>
        <?php
        endforeach;
        ?>
</table>

</body>

</html>
