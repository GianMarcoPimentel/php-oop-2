<?php

require_once __DIR__ ."/Product.php";
require_once __DIR__ ."/Traits/Dimensionable.php";
class Accessori extends Product {
    
    use Dimensionable;

    /**
     * __construct
     *
     * @param  string $_image
     * @param  string $_titolo
     * @param  float $_prezzo
     * @param  Categoria $_categoria
     * @param  bool $is_valid
     * @param  int $quantita
     * @param  string $size
     * @param  string $material
     * @return void
     */
    public function __construct($_image, $_titolo, $_prezzo, Categoria $_categoria, $is_valid, $quantita,$size, $material) {
            parent::__construct($_image, $_titolo, $_prezzo, $_categoria, $is_valid, $quantita,);
            $this->size = $size;
            $this->material = $material;
    }
}