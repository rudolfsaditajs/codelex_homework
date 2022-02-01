<?php
$select = ['rock','paper','scissors','lizard','Spock'];
echo "[0] = rock".PHP_EOL;
echo "[1] = paper".PHP_EOL;
echo "[2] = scissors".PHP_EOL;
echo "[3] = lizard".PHP_EOL;
echo "[4] = Spock".PHP_EOL;

$choice =readline();
$player = $select[$choice];


$computer = $select[array_rand($select)];

echo $player." VS ".$computer.PHP_EOL;

$combinations= [
    'rock' => ['scissors','lizard'],
    'paper' => ['rock','Spock'],
    'scissors' => ['paper','lizard'],
    'lizard' => ['paper','Spock'],
    'Spock' => ['scissors','rock']
];

if($player === $computer){
    echo "Its a tie !!!!".PHP_EOL;
    exit;
}

if(in_array($computer,$combinations[$player])){
    echo "you won".PHP_EOL;
}else{
    echo "you lost".PHP_EOL;
}