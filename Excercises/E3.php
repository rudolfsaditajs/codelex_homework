<?php

//Exercise 1


$viens = [4 , 8 , 12];
echo $viens[0] + $viens[1] + $viens[2],"\n";
echo PHP_EOL;
//Exercise 2

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($person);
echo PHP_EOL;
//Exercise 3

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;
var_dump($person);
echo PHP_EOL;
//Exercise 4

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
echo $items[0][1]['name']." " .$items[0][1]['surname']." ". $items[0][1]['age'],"\n";
echo PHP_EOL;

//Exercise 5

$items = [
    [
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ],
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ]
    ]
];
echo $items[0][0]['name']." " .$items[0][0]['surname']." ". $items[0][0]['age'],"\n";
echo $items[0][1]['name']." " .$items[0][1]['surname']." ". $items[0][1]['age'],"\n";