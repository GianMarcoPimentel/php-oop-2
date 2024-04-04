<?php

require_once __DIR__ ."/Product.php";
class Cibo extends Product {

    public $weight;
    public $mainIngredient;
    public $expireDate;


    public function __construct($_image, $_titolo, $_prezzo, Categoria $_categoria, $is_valid, $quantita, $weight, $mainIngredient , $expireDate) {
            parent::__construct($_image, $_titolo, $_prezzo, $_categoria, $is_valid, $quantita,);
            $this->weight = $weight;
            $this->mainIngredient = $mainIngredient;
            $this->expireDate = $expireDate;
    }
}