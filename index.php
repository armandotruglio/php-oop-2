<?php

require_once __DIR__ . "/classes/category/Category.php";
require_once __DIR__ . "/classes/category/Cats.php";
require_once __DIR__ . "/classes/category/Dogs.php";
require_once __DIR__ . "/classes/product/Product.php";
require_once __DIR__ . "/classes/product/Food.php";
require_once __DIR__ . "/classes/product/Kennel.php";
require_once __DIR__ . "/classes/product/Toy.php";



$product = new Toy("Osso", "https://www.wowgrooming.co.uk/cdn/shop/articles/Long_Pin_Brush_800x.png?v=1620598039", "15,55$", new Dogs());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $product->getTitle() ?></h1>
    <h3><?= $product->getType() ?></h3>
    <img src="<?= $product->getImage() ?>" alt="<?= $product->getTitle() ?>">
    <h5><?= $product->getPrice() ?></h5>
</body>

</html>