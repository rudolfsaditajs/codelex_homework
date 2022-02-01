<?php
###### Exercise 1
$numbers = [1 , 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $value) {
    echo "$value","\n";
}
echo PHP_EOL;
###### Exercise 2
$bumbers = [1 , 2, 3, 4, 5, 6, 7, 8, 9, 10];

for( $x=0; $x < count($bumbers);$x ++){
    echo $bumbers[$x],"\n";
}

echo PHP_EOL;
###### Exercise 3
$z = 0;
while($z<10){
    echo "codelex","\n";
    $z++;
}
echo PHP_EOL;
###### Exercise 4
$cumbers = [1 , 2, 3, 4, 5, 6, 7, 8, 9, 10];
for( $x=0; $x < count($cumbers);$x ++){
    if($cumbers[$x]%3==0) {
        echo $cumbers[$x], "\n";
    }

}
echo PHP_EOL;


###### Exercise 5
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


//print_r($human);

for( $x=0; $x < count($human);$x ++){
    print_r($human[$x]);
}

