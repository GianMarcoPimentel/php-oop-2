<?php

/* require  __DIR__ . '/Categoria.php'; */
//posso dichiarare il percorso anceh cosi , cancellandolo dall'index.php

/**
 * Product
 * caratteristiche prodotto
 */
class Product {
    /* public $id; */
    public $image;
    public $titolo;
    public $prezzo;
    public $categoria;
    public $is_valid;
    public $quantita;
  
    /**
     * __construct
     *
     * @param  string $_image
     * @param  string $_titolo
     * @param  float $_prezzo
     * @param  Categoria $_categoria
     * @param  boolean $is_valid
     * @param  int $quantita
     * @return void
     */
    public function __construct($_image, $_titolo, $_prezzo, Categoria $_categoria, $is_valid, $quantita) {
        $this->image = $_image;
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }
    
    public function getCategoria(){
        $icon= $this->categoria->icon;
        return "<i class='$icon'></i>";

    }
}
