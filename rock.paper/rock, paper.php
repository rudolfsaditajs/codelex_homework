<?php
$game = ["rock","paper","scissors","lizard","Spock"];
echo "[0] = rock".PHP_EOL;
echo "[1] = paper".PHP_EOL;
echo "[2] = scissors".PHP_EOL;
echo "[3] = lizard".PHP_EOL;
echo "[4] = Spock".PHP_EOL;

$choice =readline();
$player = $game[$choice];
$c = rand(0,(count($game)-1));
$computer = $game[$c];



if($player == $computer) {
    echo " you played {$player}" . PHP_EOL;
    echo "computer played {$computer}" . PHP_EOL;
    echo "It`s a draw" . PHP_EOL;
    $result = "{$choice}, {$c} |";
    file_put_contents('results.txt',$result);
    exit;
}
$winningCombinations = [
    [0,2],
    [1,0],
    [2,1],
    [0,3],
    [1,4],
    [2,3],
    [3,4],
    [3,1],
    [4,2],
    [4,0]

];




function Winner($choice,$c,$winningCombinations){
    foreach ($winningCombinations as $win) {
        [$play, $comp] = $win;
        if ((int)$play === (int)$choice && (int)$comp === (int)$c) {
            return true;
        } else {
            return false;
        }

    }
}

if(Winner($choice,$c,$winningCombinations)){
    echo "You played {$player}".PHP_EOL;
    echo "computer played {$computer} ".PHP_EOL;
    echo "You won".PHP_EOL;
}
else{
    echo "You played {$player}".PHP_EOL;
    echo "computer played {$computer} ".PHP_EOL;
    echo "you lost".PHP_EOL;
};
$result = "{$choice}, {$c} |";
file_put_contents('results.txt',$result);