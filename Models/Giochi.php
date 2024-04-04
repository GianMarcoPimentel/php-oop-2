<?php

require_once __DIR__ ."/Product.php";

require_once __DIR__ . '/Traits/Dimensionable.php';

require_once __DIR__ . '/Traits/HasWeight.php';


class Gioco extends Product {

   use Dimensionable;
   use HasWeight;
    public function __construct($_image, $_titolo, $_prezzo, Categoria $_categoria, $is_valid, $_quantita,$_weight, $_size, $_material) {
            parent::__construct($_image, $_titolo, $_prezzo, $_categoria, $is_valid, $_quantita);
            $this->weight = $_weight;
            $this->size = $_size;
            $this->material = $_material;
    }

}