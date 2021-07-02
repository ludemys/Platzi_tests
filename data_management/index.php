<?php

$array =
    [
        'Frontend' => 'Javascript',
        'Backend' => 'PHP',
        'Mobile' => 'Java'
    ];
$array1 =
    [
        'Javascript',
        'PHP',
        'Java',
        'C++',
        'C#'
    ];
$array1_keys =
    [
        'frontend',
        'backend',
        'mobile',
        'desktop',
        'videogames'
    ];

$array2 =
    [
        'Mobile' => 'red',
        'blue',
        'brown',
        'yellow'
    ];


echo '<pre><h3>';
var_dump(array_combine($array1_keys, $array1));
echo '</h3></pre>';
