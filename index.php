<?php

require   './Models/Product.php';
require   './Models/Categoria.php';
require   './Models/Cibo.php';
require   './Models/Giochi.php';
require   './Models/Accessori.php';

// inserisco le categorie
$cani = new Categoria('Cane', 'fa-solid fa-dog');
$gatti = new Categoria('Gatto', 'fa-solid fa-cat');


// creo oggetti individuali (istanze) 

$accessorio = new Accessori('https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTyxDlC5CNtrS9aMH1ZWO761HYIKglsHyRxs9dBz4I9z_7lhurXbCWjmJCZihdymYZ-sTZaUgWNSrTrrErOGOdoivIPLtmzh-4rst7qTDjWEAO1dh0NVRhB8LGjRxRPKX774fvKtvuuzQ&usqp=CAc','Guinzaglio', 12.33, $cani,true,1);
$cibo = new Cibo ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVZ-yQb2N7RbOuCZJAx0XPBDb_9bw1FogFkg&s", "Crocchette", 20.99, $gatti,true,3);
$gioco = new Gioco ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdWaPUUFX8JQn5jTfuaQIHi-BctMfhgOqBQQ&s","Osso di plastica", 10.55, $cani,true,10);


$products = [
    $accessorio,
    $cibo,
    $gioco,
];

/* var_dump($product);
var_dump($product2); */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center p-3 text-uppercase ">
        <h1 class="" >E-Commerce</h1>
    </div>
    <div class="container my-bg">

        <div class="d-flex align-items-center justify-content-between container p-5">
    <?php foreach ($products as $product){ 
        ?>

            <div class="container">
            <div class="card col-6" style="width: 18rem;">
                <img src='<?= $product->image ?>' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title product-titolo text-primary fs-3"> <?= $product->titolo ?> </h5>
                    <p class="card-text product-price fs-2"> € : <?= $product->prezzo ?>  </p>
                    <p class="card-text product-price text-secondary "> Categoria: <?= $product->categoria->name ?>  </p>
                    <p class="card-text product-icon d-flex align-items-center justify-content-center">  <?= $product->getCategoria(); ?> </p>
                </div>
            </div>
            </div>
            <?php
                }
                ?>
        </div>

    </div>
        <style>

            .my-bg{
                width: 100%;
                background-image: url("https://www.maniarreda.it/img_up/prop/big/20190227174612-225.jpg");
                
               
            }
            img{
                height: 500px;
                width: 100%;
                object-fit: contain;
            }

           .product-price{
            font-size: 15px;
           }
            .product-icon{
                position: absolute;
                top:10px;
                right:20px;

                width: 50px;
                height: 50px;
                border-radius: 50%;
                padding: 5px;
                background-color: red;
                font-size: 20px;
            }

        </style>
</body>
</html>