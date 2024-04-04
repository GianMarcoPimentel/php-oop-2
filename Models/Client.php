<?php

require_once __DIR__ . '/Product.php';
class Client {
    public $email;
    public $address;

    // tutti i prodotti che l'utente ha intenzione di acquistare
    protected $cart = [];
    
    /**
     * __construct
     *
     * @param  string $email
     * @param  string $address
     */
    function __construct($email, $address) {
        $this->email = $email;
        $this->address = $address;
    }

    
    /**
     * Aggiunge il prodotto passato come parametro al carrello dell'utente
     *
     * @param  Product $product
     * @return void
     */
    public function addToCart(Product $product) {
        $this->cart[] = $product;
    }
    
    /**
     * restituisce il totale del carrello dell'utente
     *
     * @return float
     */
    public function getCartTotal() {
        $total = 0;
        // scorre tra tutti i prodotti del carrello e somma i prezzi tra di loro
        foreach ($this->cart as $product) {
            $total += $product->prezzo;
        }

        return $total;
    }
}