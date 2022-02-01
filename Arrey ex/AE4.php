<?php


for($x=0;$x<=9;$x++){
    $numbers[$x] = rand(1 , 100);
    $bumbers[$x] = $numbers[$x];
}
$numbers[(count($numbers))-1]= -7;

echo "Array 1 : ";
for($y=0;$y<count($numbers);$y++){
    echo $numbers[$y]." ";
}

echo PHP_EOL;

echo "Array 2 : ";
for($y=0;$y<count($bumbers);$y++){
    echo $bumbers[$y]." ";
}


//print_r($numbers).PHP_EOL;


//print_r( $bumbers).PHP_EOL;