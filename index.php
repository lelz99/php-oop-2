<?php
require __DIR__ . '/data/products.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($products as $product) : ?>
            <li>
                <h2><?= $product->name ?></h2>
                <img src=<?= $product->image ?> alt="">
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>