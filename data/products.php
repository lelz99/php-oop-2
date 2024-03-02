<?php 
require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/../models/FoodProduct.php';
require_once __DIR__ . '/../models/ToyProduct.php';
require_once __DIR__ . '/../models/KennelProduct.php';

$products = [
    new FoodProduct(
        1,
        'Royal Canin Mini Adult',
        'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',
        $categories['dog'],
        '2028-02-11'
    ),
    new FoodProduct(
        2,
        'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
        $categories['dog'],
        '2026-07-10'
    ),
    new FoodProduct(
        3,
        'Almo Nature Cat Daily Lattina',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
        $categories['cat'],
        '2024-02-11'
    ),
    new FoodProduct(
        4,
        'Mangime per Pesci Guppy in Fiocchi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
        $categories['fish'],
        '2022-02-11'
    ),
    new KennelProduct(
        5,
        'Voliera Wilma in Legno',
        'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
        $categories['bird'],
        'M'
    ),
    new KennelProduct(
        6,
        'Cartucce Filtranti per Filtro EasyCrystal',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
        $categories['fish'],
        'L'
    ),
    new ToyProduct(
        7,
        'Kong Classic',
        'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
        $categories['dog'],
        'Plastic'
    ),
    new ToyProduct(
        8,
        'Topini di peluche Trixie',
        'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
        $categories['cat'],
        'Lana'
    )
];