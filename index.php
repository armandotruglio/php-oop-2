<?php

require_once __DIR__ . "/classes/category/Category.php";
require_once __DIR__ . "/classes/category/Cats.php";
require_once __DIR__ . "/classes/category/Dogs.php";
require_once __DIR__ . "/classes/product/Product.php";
require_once __DIR__ . "/classes/product/Food.php";
require_once __DIR__ . "/classes/product/Kennel.php";
require_once __DIR__ . "/classes/product/Toy.php";


$json = json_decode(file_get_contents("db/data.json"), true);

$products = [];

foreach ($json as $product) {
    $category;
    if ($product["categoria"] === "Cani") {
        $category = new Dogs();
    } else {
        $category = new Cats();
    }

    switch ($product["tipo"]) {
        case "Prodotto Generico":
            $products[] = new Product($product["titolo"], $product["immagine"], $product["prezzo"], $category);
            break;
        case "Cibo":
            $products[] = new Food($product["titolo"], $product["immagine"], $product["prezzo"], $category);
            break;
        case "Cuccia":
            $products[] = new Kennel($product["titolo"], $product["immagine"], $product["prezzo"], $category);
            break;
        case "Giochi":
            $products[] = new Toy($product["titolo"], $product["immagine"], $product["prezzo"], $category);
            break;
    }
}

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
    <link href="./css//style.css" rel="stylesheet">
</head>

<body>
    <div class="main">
        <h1 class="fw-bold text-center p-5">ANIMAL STORE</h1>
        <div class="container pb-5">
            <div class="row g-5">
                <?php foreach ($products as $product) { ?>
                    <div class="col-3">
                        <div class="card">
                            <div class="category d-flex justify-content-between align-items-center p-2">
                                <span class="fw-bold"> Categoria: </span>
                                <div class="category-icon">
                                    <img src="<?= $product->getCategory()->getImage() ?>"
                                        alt="<?= $product->getCategory()->getType() ?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="card-body">
                                <img src="<?= $product->getImage() ?>" alt="<?= $product->getTitle() ?>" class="img-fluid">
                            </div>
                            <div class="card-title text-center fw-bold">
                                <span><?= $product->getTitle() ?></span>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <span><?= $product->getType() ?></span>
                                <span class="fw-bold"><?= $product->getPrice() ?> €</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>