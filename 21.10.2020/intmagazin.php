<?php

$score = [
    'clothes' => [
        'name'=> 'coat',
        'coat'=> [
            'name'=> 'coat',
            'price'=> '130$',
            'presence'=> [
                'true' => 'there is',
                'false'=> 'absent',
            ]
        ]
    ]
];
echo $score['clothes']['name'];echo " ";
echo $score['clothes']['coat']['name'];echo " ";
echo $score['clothes']['coat']['price'];echo " ";
echo $score['clothes']['coat']['presence']['false'];echo " ";
echo '<br>';

$score = [
    'clothes' => [
        'name'=> 'clothes',
        'short coat'=> [
            'name'=> 'short coat',
            'price'=> '100$',
            'presence'=> [
                'true' => 'there is',
                'false'=> 'absent',
            ]
        ]
    ]
];
echo $score ['clothes']['name'];echo " ";
echo $score['clothes']['short coat']['name'];echo " ";
echo $score['clothes']['short coat']['price'];echo " ";
echo $score['clothes']['short coat']['presence']['true'];echo " ";
echo '<br>';

$score = [
    'clothes' => [
        'name'=> 'clothes',
        'windbreaker'=> [
            'name'=> 'windbreaker',
            'price'=> '100$',
            'presence'=> [
                'true' => 'there is',
                'false'=> 'absent',
            ]
        ]
    ]
];
echo $score ['clothes']['name'];echo " ";
echo $score['clothes']['windbreaker']['name'];echo " ";
echo $score['clothes']['windbreaker']['price'];echo " ";
echo $score['clothes']['windbreaker']['presence']['true'];echo " ";
echo '<br>';

$score = [
    'clothes' => [
        'name'=> 'clothes',
        'womens tracksuit'=> [
            'name'=> 'womens tracksuit',
            'price'=> '800$',
            'presence'=> [
                'true' => 'there is',
                'false'=> 'absent',
            ]
        ]
    ]
];
echo $score ['clothes']['name'];echo " ";
echo $score['clothes']['womens tracksuit']['name'];echo " ";
echo $score['clothes']['womens tracksuit']['price'];echo " ";
echo $score['clothes']['womens tracksuit']['presence']['true'];echo " ";
echo '<br>';

$score = [
    'clothes' => [
        'name'=> 'clothes',
        'mans tracksuit'=> [
            'name'=> 'mans tracksuit',
            'price'=> '90$',
            'presence'=> [
                'true' => 'there is',
                'false'=> 'absent',
            ]
        ]
    ]
];
echo $score ['clothes']['name'];echo " ";
echo $score['clothes']['mans tracksuit']['name'];echo " ";
echo $score['clothes']['mans tracksuit']['price'];echo " ";
echo $score['clothes']['mans tracksuit']['presence']['true'];echo " ";
echo '<br>';

$score = [
    'clothes' => [
        'name'=> 'clothes',
        'jacket kids'=> [
            'name'=> 'jacket kids',
            'price'=> '50$',
            'presence'=> [
                'true' => 'there is',
                'false'=> 'absent',
            ]
        ]
    ]
];
echo $score ['clothes']['name'];echo " ";
echo $score['clothes']['jacket kids']['name'];echo " ";
echo $score['clothes']['jacket kids']['price'];echo " ";
echo $score['clothes']['jacket kids']['presence']['false'];echo " ";
echo '<br>';

$score = [
    'clothes' => [
        'name'=> 'clothes',
        'childrens pullover'=> [
            'name'=> 'childrens pullover',
            'price'=> '50$',
            'presence'=> [
                'true' => 'there is',
                'false'=> 'absent',
            ]
        ]
    ]
];

echo $score ['clothes']['name']; echo " ";
echo $score['clothes']['childrens pullover']['name']; echo " ";
echo $score['clothes']['childrens pullover']['price'];echo " ";
echo $score['clothes']['childrens pullover']['presence']['true'];echo " ";
echo '<br>';
