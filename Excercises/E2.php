<?php

//Exercise 1
$x = 10;
$u ="10";
if($x===$u){
    echo "Same";

}else echo "Not same","\n";
echo PHP_EOL;

//Exercise 2


$f = 50;
if ($f >=1 && $f<=100){
    echo "True ","\n";
}else echo "False","\n";
echo PHP_EOL;

//Exercise 3


$g ="hello";
if($g === "hello"){
    echo "world","\n";
}
echo PHP_EOL;

//Exercise 4

$r = 50;
if($r >10 && $r< 75 && $r%2 ==0){
    echo "viss ok","\n";
}
echo PHP_EOL;

//Exercise 5


$n =50;
$y = 10;
$z = 987;
if($n > $y && $n < $z){
    echo "correct","\n";
}
echo PHP_EOL;

//Exercise 6



$plateNumber = "MG70";
switch ($plateNumber){
    case "MG70":
        echo "I'ts my car","\n";
        break;
    case "BM84":
        echo "Not my car","\n";
        break;
}
echo PHP_EOL;
//Exercise 7


$number = 75;
switch ($number){
    case ($number<50) :
        echo "low","\n";
        break;
    case ($number>50 && $number<100) :
        echo "medium","\n";
        break;
    case ($number>100) :
        echo "high","\n";
        break;
}
