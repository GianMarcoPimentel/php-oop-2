<?php

// lo chiamo dimensionabile

trait Dimensionable {
    public $size;
    public $material;

    public function __construct($size, $material) {
        $this->size = $size;
        $this->material = $material;
    }
}