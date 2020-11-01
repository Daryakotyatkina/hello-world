<?php
$store = [
    'Milk products' =>[
        [
            'name' => 'milk',
            'cost' => '2_in stock',
            'presence' => 'in_stock'
        ],
        [
            'name' => 'cheese',
            'cost' => '8_in stock',
            'presence' => 'in stock'
        ],
        [
            'name' => 'cottage_cheese',
            'cost' => '6_in stock',
            'presence' => 'in stock'
        ],
    ],

    'Soda' =>[
        [
            'name' => 'sprite',
            'cost' => '2_not presence',
            'presence' => 'not presence'
        ],
        [
            'name' => 'coca-cola',
            'cost' => '2_not presence',
            'presence' => 'not presence'
        ],
        [
            'name' => 'fanta',
            'cost' => '2_in stock',
            'presence' => 'in stock'
        ],
    ],

    'Meat' =>[
        [
            'name' => 'chicken',
            'cost' => '15_in stock',
            'presence' => 'in stock'
        ],
        [   'name' => 'pork',
            'cost' => '21_not presence',
            'presence' => 'not presence'
        ],
        [
            'name' => 'beef',
            'cost' => '38_not presence',
            'presence' => 'not presence'
        ],
    ],
];
foreach ($store as $category => $stores) {
    echo($category);
    echo(':');
    echo('<br>');
    foreach ($stores as $key => $storeapp) {
        if($storeapp['presence'] == 'in stock'){
            echo ($storeapp['name']);echo(' ');
            echo($storeapp['cost']);echo(' ');
            echo('<br>');
        }
    }
}
