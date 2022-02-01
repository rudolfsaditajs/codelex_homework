<?php

$game = [
    [' ',' ',' '],
    [' ',' ',' '],
    [' ',' ',' '],
];


function display_board($game)
{
    echo " {$game[0][0]} | {$game[0][1]} | {$game[0][2]} \n";
    echo "---+---+---\n";
    echo " {$game[1][0]} | {$game[1][1]} | {$game[1][2]} \n";
    echo "---+---+---\n";
    echo " {$game[2][0]} | {$game[2][1]} | {$game[2][2]} \n";
}




for($x=1;$x<=9;$x++){


        if ($game[0][0] == $game[0][1] && $game[0][1] == $game[0][2]&&$game[0][0]!==' ') {
            echo "Player {$game[0][0]} wins!!!" . PHP_EOL;
            break;
        }
        if ($game[1][0] == $game[1][1] && $game[0][1] == $game[1][2]&&$game[1][0]!==' ') {
            echo "Player {$game[1][0]} wins!!!" . PHP_EOL;
            break;
        }
        if ($game[2][0] == $game[2][1] && $game[2][1] == $game[2][2]&&$game[2][0]!==' ') {
            echo "Player {$game[2][0]} wins!!!" . PHP_EOL;
            break;
        }
        if ($game[0][0] == $game[1][0] && $game[0][1] == $game[2][0]&&$game[0][0]!==' ') {
            echo "Player {$game[0][0]} wins!!!" . PHP_EOL;
            break;
        }
        if ($game[0][1] == $game[1][1] && $game[1][1] == $game[2][1]&&$game[0][1]!==' ') {
            echo "Player {$game[0][1]} wins!!!" . PHP_EOL;
            break;
        }
        if ($game[0][2] == $game[1][2] && $game[1][2] == $game[2][2]&&$game[0][2]!==' ') {
            echo "Player {$game[0][2]} wins!!!" . PHP_EOL;
            break;
        }
        if ($game[0][0] == $game[1][1] && $game[1][1] == $game[2][2]&&$game[0][0]!==' ') {
            echo "Player {$game[0][0]} wins!!!" . PHP_EOL;
            break;
        }
        if ($game[0][2] == $game[1][1] && $game[1][1] == $game[2][0]&&$game[0][2]!==' ') {
            echo "Player {$game[0][0]} wins!!!" . PHP_EOL;
            break;
        }



    if($x%2==0){
        echo "'X', choose your location (row, column)".PHP_EOL;
         $z = readline('enter row').PHP_EOL;
         $y = readline('enter column').PHP_EOL;
         if($game[(int)$z][(int)$y] =="X"||$game[(int)$z][(int)$y] =="O"){
             echo "Already full space".PHP_EOL;
             continue;
         }
         $game[(int)$z][(int)$y] = "X";

        display_board($game);
    }else{
        echo "'O', choose your location (row, column)".PHP_EOL;
        $z = readline('enter row').PHP_EOL;
        $y = readline('enter column').PHP_EOL;
        if($game[(int)$z][(int)$y] =="X"||$game[(int)$z][(int)$y] =="O"){
            echo "Already full space".PHP_EOL;
            continue;
        }
        $game[(int)$z][(int)$y] = "O";

        display_board($game);
    }
    if(in_array(' ',$game)){
        echo "It is a draw".PHP_EOL;
    }
/*
    if($x = 9){
        echo "It is a draw.".PHP_EOL;
    }
*/
}


display_board($game);




