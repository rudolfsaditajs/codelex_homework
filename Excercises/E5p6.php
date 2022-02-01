<?php
###### Exercise 6

function double($z){
    $z=2*$z;
    return $z;
}

$a = array(10, 15, 30, 18.5, 'string');
for( $x=0; $x < count($a);$x ++){
    if(is_int($a[$x])){
        $a[$x]= double($a[$x]);
        echo " ".PHP_EOL;
        print_r($a[$x]).PHP_EOL;
    }
}