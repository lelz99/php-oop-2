<?php

require_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{
    public $expiration;

    public function __construct($id, $name, $image, Category $category, $expiration)
    {
        parent::__construct($id, $name, $image, $category);
        $this->expiration = $expiration;
    }
}