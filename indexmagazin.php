<?php
$storearr = [
    'clothes'=> [
        'name'=>'coat',
        'coat'=> [
            'name'=>'elongated coat',
            'prise'=>['130$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'short coat'=> [
            'name'=>'short coat',
            'prise'=>['100$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'jacket'=> [
            'name'=>'windbreaker',
            'price'=> ['50$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'suit W'=> [
            'name'=>'womens tracksuit',
            'price'=> ['80$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'suit M'=> [
            'name'=>'mans tracksuit',
            'price'=> ['90$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'jackets for children'=> [
            'name' => 'jacket kids',
            'prise'=> ['50$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'baby suit Girl'=> [
            'name'=> 'costume for girl',
            'prise'=> ['50$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'baby suit Boy'=> [
            'name'=> 'costume for boy',
            'prise'=> ['50$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'pullover W'=> [
            'name'=> 'woman pullover',
            'prise'=> ['70$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'pullover M'=> [
            'name'=> 'man pullover',
            'prise'=> ['90$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
        'childrens pullover'=> [
            'name'=> 'childrens pullover',
            'prise'=> ['30$'],
            'availabilty'=> [
                'true'=>'в наличии',
                'falce'=>'нет в наличии',
            ]
        ],
    ]
];
echo $storearr ['clothes']['name'];
echo "\r\n";
echo $storearr ['clothes']['coat']['name'];
echo "\r\n";
