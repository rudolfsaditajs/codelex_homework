<?php
$symbols =['!'];

$board = [];
$boardFields =[3,4];
for($x=0;$x<$boardFields[0];$x++){
    for($y =0; $y<$boardFields[1];$y++){
        $board[$x][$y] = "-";
        echo " {$board[$x][$y]} ";
    }
    echo PHP_EOL;
    echo "__________________".PHP_EOL;
}

$combinations = [
    [
        [0, 0], [0, 1], [0, 2],[0,3]
    ],
    [
        [1, 0], [1, 1], [1, 2],[1,3]
    ],
    [
        [2, 0], [2, 1], [2, 2],[2,3]
    ],
    [
        [0, 0], [1, 1], [2, 2],[1,3]
    ],
    [
        [2, 0], [1, 1], [0, 2],[1,3]
    ],
];

function display_board($board,$boardFields)
{
    for ($x = 0; $x <$boardFields[0]; $x++) {
        for ($y = 0; $y < $boardFields[1]; $y++) {

            echo " {$board[$x][$y]} ";
        }
        echo PHP_EOL;
        echo "__________________" . PHP_EOL;

    }
}
for($x=0;$x<$boardFields[0];$x++){
    for($y=0;$y<$boardFields[1];$y++){
        $board[$x][$y] = $symbols[rand(0,(count($symbols)-1))];
    }
}



display_board($board,$boardFields).PHP_EOL;

function winner($board,$combinations,$boardFields)
{
    $win = [];
    foreach ($combinations as $combination) {
        foreach ($combination as $item) {
            [$row, $collumn] = $item;

            if ($board[$row][$collumn] !== $board[$row][0]) {
                break;
            }

            if (end($combination) === $item) {

                return $board[$row][0];

            }





        }
        return null;
    }


    if (winner($board, $combinations,$boardFields) !== null) {



        echo winner($board, $combinations,$boardFields) . " win " . PHP_EOL;


    } else {
        echo "lose" . PHP_EOL;
    }
    var_dump($win);
}