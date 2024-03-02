<?php

require_once __DIR__ . '/Category.php';

class Product
{
    public $id;
    public $name;
    public $image;
    public $category;

    public function __construct($id, $name, $image, Category $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->category = $category;
    }
}