<?php

require_once __DIR__ . '/Product.php';

class KennelProduct extends Product
{
    public $size;

    public function __construct($id, $name, $image, Category $category, $size)
    {
        parent::__construct($id, $name, $image, $category);
        $this->size = $size;
    }
}