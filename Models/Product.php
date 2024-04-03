<?php
include './Models/Categoria.php';

$categoria = new Categoria('Cane', '<i class="fa-solid fa-dog"></i>');
$categoria2 = new Categoria('Gatto', '<i class="fa-solid fa-cat"></i>');

var_dump( $categoria);
var_dump( $categoria2);

/**
 * Product
 * caratteristiche prodotto
 */
class Product {
    public $image;
    public $titolo;
    public $prezzo;
    public $categoria;
    
    /**
     * __construct
     *
     * @param  string $_titolo
     * @param  int $_prezzo
     * @param  Categoria $_categoria
     * @return void
     */
    public function __construct($_image, $_titolo, $_prezzo, Categoria $_categoria) {
        $this->image = $_image;
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }
    
}
