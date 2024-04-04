<?php

require_once __DIR__ ."/Product.php";
class Accessori extends Product {
    public $size;
    public function __construct($_image, $_titolo, $_prezzo, Categoria $_categoria, $is_valid, $quantita,$size) {
            parent::__construct($_image, $_titolo, $_prezzo, $_categoria, $is_valid, $quantita);
            $this->size = $size;
    }
}