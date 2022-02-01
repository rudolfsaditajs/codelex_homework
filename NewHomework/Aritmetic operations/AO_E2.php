<?php

function CheckOddEven($number){
    if($number%2==0){
        return "Even Number";

    }else{
        return "Odd Number";

    }

}


echo CheckOddEven(40)."Bye".PHP_EOL;
echo CheckOddEven(11)."Bye".PHP_EOL;


