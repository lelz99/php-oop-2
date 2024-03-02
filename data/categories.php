<?php

require_once __DIR__ . '/../models/Category.php';

$categories = [
    'dog' => new Category('Dogs'),
    'cat' => new Category('Cats'),
    'fish' => new Category('Fishes'),
    'bird' => new Category('Birds')
];