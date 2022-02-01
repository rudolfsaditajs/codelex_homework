<?php
###### Exercise 1
function getsmart( $a)
{

    $a = $a . " codelex";
    return $a;

     }

echo getsmart("all"),"\n";
echo PHP_EOL;

###### Exercise 2

function mult( $s, $c){
    return $s*$c;
}
echo mult(9, 11),"\n";
echo PHP_EOL;

###### Exercise 3

$man = new stdClass();
$man->name = "John";
$man->surname = "Doe";
$man->age = 50;



function isAdult(int $a):bool{
    if($a>18){
        return true;
    }else return false;
}
if (isAdult($man->age)){
    echo "This person is at least 18 years old","\n";

}else{
    echo "This person is not 18 years old","\n";
}

echo PHP_EOL;

###### Exercise 4
class person
{
    public $name;
    public $surname;
    public $age;
    public $birthday;
}
$human = array();

$human[0] = new person();
$human[0] ->name = 'John';
$human[0] ->surname ='Doe';
$human[0] ->age = 55;
$human[0] ->birthday = '20.06.1991';

$human[1] = new person();
$human[1] ->name = 'Jane';
$human[1] ->surname = 'Doe';
$human[1] ->age = 49;
$human[1] ->birthday = '01.04.1976';

$human[2] = new person();
$human[2] ->name = 'Jeff';
$human[2] ->surname = 'Bezos';
$human[2] ->age = 50;
$human[2] ->birthday = '09.11.1845';

function isBAdult(int $a):bool{
    if($a>18){
        return true;
    }else return false;
}

for( $x=0; $x < count($human);$x ++){

    if (isBAdult($human[$x]->age)){
        echo $human[$x]->name." is at least 18 years old","\n";

    }else{
        echo $human[$x]->name." is not 18 years old","\n";
    }
}




