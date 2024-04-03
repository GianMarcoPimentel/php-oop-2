<?php
class Accessori extends Product {
    public function __construct($_image, $_titolo, $_prezzo, Categoria $_categoria, $is_valid, $quantita) {
            parent::__construct($_image, $_titolo, $_prezzo, $_categoria, $is_valid, $quantita);
    }
}