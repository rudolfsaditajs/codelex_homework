<?php


$hangman = ['apple','beans','orange','lightsabre'];
$word = $hangman[rand(0,3)];
$answer = str_split($word);
$sum1 =[];
$guess = null;
foreach ($answer as $item){
    $sum1[] = " _ ";
    echo " _ ";
}
function defWord($answer,$z,$sum1):array{
    for ($y =0; $y < count($answer); $y++){
        if($sum1[$y]!=" _ "){
            continue;
        }
        if ($answer[$y] == $z) {
            $sum1[$y] = "{$z}";


        }else{
            $sum1[$y] = " _ ";
        }
    }
    return $sum1;
}
for($x=0;$x<= (strlen($word)+6);$x++) {

    if($word == implode("",$sum1)){
        echo "Congats, you have won.".PHP_EOL;
        exit;
    }
    echo "please enter a letter " . PHP_EOL;
    $z = readline('Letter :');
    for ($y = 0; $y < (count(defWord($answer, $z, $sum1))) ; $y++) {
        echo defWord($answer, $z, $sum1)[$y];
    }
    echo PHP_EOL;
    echo "_=_=_=_=_=_=_=_=_=_=_=_=_=_=_".PHP_EOL;
    $guess .= $z.", ";
    echo  "Guessed letters: ".$guess.PHP_EOL;
    if($x ==(strlen($word)+6)){
        echo "You have run out of guesses ".PHP_EOL;
        exit;
    }
    $sum1=defWord($answer,$z,$sum1);
}







