<?php

trait HasWeight {
    public $weight;

    public function __construct($weight){
        $this->weight = $weight;
    }
}