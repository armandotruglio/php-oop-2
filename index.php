<?php

require_once __DIR__ . "/classes/category/Category.php";
require_once __DIR__ . "/classes/category/Cats.php";
require_once __DIR__ . "/classes/category/Dogs.php";
require_once __DIR__ . "/classes/product/Product.php";
require_once __DIR__ . "/classes/product/Food.php";
require_once __DIR__ . "/classes/product/Kennel.php";
require_once __DIR__ . "/classes/product/Toy.php";



$products = [new Product("Spazzola", "https://www.wowgrooming.co.uk/cdn/shop/articles/Long_Pin_Brush_800x.png?v=1620598039", "15,55$", new Dogs())];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-COMMERCE</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="main">
        <h1 class="fw-bold text-center p-5">ANIMAL STORE</h1>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?= $product->getImage() ?>" alt="<?= $product->getTitle() ?>" class="img-fluid">
                            </div>
                            <div class="card-title text-center fw-bold">
                                <span><?= $product->getTitle() ?></span>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <span><?= $product->getType() ?></span>
                                <span class="fw-bold"><?= $product->getPrice() ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>