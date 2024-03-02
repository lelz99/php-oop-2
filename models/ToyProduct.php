<?php

require_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{
    public $materials;

    public function __construct($id, $name, $image, Category $category, $materials)
    {
        parent::__construct($id, $name, $image, $category);
        $this->materials = $materials;
    }
}