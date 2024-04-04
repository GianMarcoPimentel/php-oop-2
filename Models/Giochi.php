<?php

require_once __DIR__ ."/Product.php";

class Gioco extends Product {

    public $materiale;
    public function __construct($_image, $_titolo, $_prezzo, Categoria $_categoria, $is_valid, $_quantita, $_materiale) {
            parent::__construct($_image, $_titolo, $_prezzo, $_categoria, $is_valid, $_quantita);
            $this->materiale = $_materiale;
    }
}