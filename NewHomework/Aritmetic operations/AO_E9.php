<?php
function BMI(float $a,float $b):string
{
    $a = $a * 39.37;
    $b = $b * 2.204;
    $c = ($b * 703) / ($a ^ 2);
    if($c<18.5){
        return "Underweight";
    }if($c>=18.5&&$c<=25){
        return "Normal weight";
}if($c>25){
        return "Overweight";
}
}

echo BMI(1.95,116);


