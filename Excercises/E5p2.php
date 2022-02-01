<?php
###### Exercise 5


$fruits =[
    [ "fruit" => "banana",
      "weight" => 5

    ],
    [
        "fruit" => "apple",
        "weight" => 7
    ],
    [
        "fruit" =>"orange",
        "weight" => 11
    ]
];

$costs = [
    "under10" => 1,
    "over10" => 2
];

foreach ($fruits as $fruit){
    if($fruit["weight"]>10){
        echo $fruit['fruit']." is ".$fruit['weight']." kg in weight, and it would cost ".$costs["over10"]." euros to ship.".PHP_EOL;
    }else{
        echo $fruit['fruit']." is ".$fruit['weight']." kg in weight, and it would cost ".$costs["under10"]." euros to ship.".PHP_EOL;
    }
};







