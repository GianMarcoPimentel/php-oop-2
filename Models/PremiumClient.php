<?php

require_once __DIR__ . '/Client.php';
class PremiumClient extends Client {
    public $username;
    public $discount = 20;

    function __construct($email, $address, $username) {
        parent::__construct($email, $address);
        $this->username = $username;
    }

    public function getCartTotal() {
        $total = 0;
        // scorre tra tutti i prodotti del carrello e somma i prezzi tra di loro
        foreach ($this->cart as $product) {
            $total += $product->prezzo;
        }

        // applico lo sconto al totale
        return $total - $total / 100 * $this->discount;
    }
}