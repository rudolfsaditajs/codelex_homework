<?php

//Exercise 7**
$person = new stdClass();
$person->name= 'Ivars';
$person ->cash = 2050;
$person -> licenses =['A','C'];


function createWeapon(string $name,int $price,string $license =  null):stdClass{
    $weapon = new stdClass();
    $weapon-> name = $name;
    $weapon->license = $license;
    $weapon-> price = $price;
    return $weapon;

}

$weapons =[
    createWeapon('AK47',1000,'C'),
    createWeapon('Deagle',500,'A'),
    createWeapon('Knife',100),
    createWeapon('Glock',250,'A'),
];

echo $person->name." has ".$person->cash."money";

$basket=[];

while($person->cash>=100) {
    echo "[1]purchase".PHP_EOL;
    echo "[2] checkout".PHP_EOL;
    echo "[Any] exit".PHP_EOL;

    $f = (int) readline("Select option").PHP_EOL;
    switch ($f){

    case 1 :

    foreach ($weapons as $index => $weapon) {
        echo $index . " " . $weapon->name . " " . $weapon->license . " " . $weapon->price . PHP_EOL;

    }
    $selectedWeaponsIndex = (int)readline('Select weapon');

    $weapon = $weapons[$selectedWeaponsIndex] ?? null;

    if ($weapon === null) {
        echo "Weapon not found" . PHP_EOL;
        exit;
    }

    if ($weapon->license !== null && !in_array($weapon->license, $person->licenses)) {
        echo "Invalid license" . PHP_EOL;
        exit;
    }

    $basket[]=$weapon;
    echo "added to cart".PHP_EOL;
    break;

    case 2 :
        $total = 0;
        foreach ($basket as $weapon){
            $total +=$weapon->price;
            echo $weapon->name .PHP_EOL;
        }
        echo "Total sum: ".$total." Euros ".PHP_EOL;

        if($person->cash>=$total){
            echo "Payment successful".PHP_EOL;
        }else{
            echo" insufficient funds".PHP_EOL;
        }
        exit;
        break;


    defoult: exit;
    break;
}
}