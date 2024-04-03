<?php

require './Models/Product.php';

$product = new Product("https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTyxDlC5CNtrS9aMH1ZWO761HYIKglsHyRxs9dBz4I9z_7lhurXbCWjmJCZihdymYZ-sTZaUgWNSrTrrErOGOdoivIPLtmzh-4rst7qTDjWEAO1dh0NVRhB8LGjRxRPKX774fvKtvuuzQ&usqp=CAc","Guinzaglio", 12, $categoria);
$product2 = new Product("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVZ-yQb2N7RbOuCZJAx0XPBDb_9bw1FogFkg&s", "Crocchette", 20, $categoria2);

var_dump($product);
var_dump($product2);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>E-Commerce</h1>
    </div>
    <div class="container">
    <div class="card" style="width: 18rem;">
        <img src='https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTyxDlC5CNtrS9aMH1ZWO761HYIKglsHyRxs9dBz4I9z_7lhurXbCWjmJCZihdymYZ-sTZaUgWNSrTrrErOGOdoivIPLtmzh-4rst7qTDjWEAO1dh0NVRhB8LGjRxRPKX774fvKtvuuzQ&usqp=CAc' class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title product-titolo"> <?= $product->titolo ?> </h5>
            <p class="card-text product-price"> <?= $product->prezzo ?>  </p>
            <p class="card-text product-price"> Categoria: <?= $product->categoria->name ?>  </p>
            <p class="card-text product-price">  <?= $product->categoria->icon ?> </p>
        </div>
    </div>
    </div>
</body>
</html>