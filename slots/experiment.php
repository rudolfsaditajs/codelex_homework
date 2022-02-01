<?php
$totalCash = 0;
$bet = 0;
$spinCash = 0;

$symbols =['!','@'];
$one = 5;
$two = 10;
$win1=[];
$board = [];
$boardFields =[3,4];

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

function winner($board,$combinations,$win1)
{
    foreach ($combinations as $combination) {
        foreach ($combination as $item) {
            [$row,$collumn] = $item;

            if ($board[$row][$collumn] !== $board[$row][0]) {
                break;
            }

            if (end($combination) === $item) {

                $win1[] = $board[$row][0];


            }








        }
        return $win1;
    }
    return null;
}


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

echo "Please enter cash".PHP_EOL;
$totalCash= (int)readline().PHP_EOL;
echo "please enter cash per game".PHP_EOL;
echo "[1] = 1".PHP_EOL;
echo "[2] = 2".PHP_EOL;
$spinCash = (int)readline();


echo "Select bet level" . PHP_EOL;
echo "[1] = 1" . PHP_EOL;
echo "[2] = 2" . PHP_EOL;
echo "[3] = 3" . PHP_EOL;

$bet = (int) readline() . PHP_EOL;




while($totalCash>=1){
    echo "[1] == spin".PHP_EOL;
    echo "[any] == exit".PHP_EOL;
    $f = (int) readline("Select option").PHP_EOL;
    switch ($f) {
        case 1 :
            if ($totalCash < 1) {
                echo "insufficient funds" . PHP_EOL;
                exit;
            }


            $totalCash = $totalCash - ($spinCash * $bet);
            for ($x = 0; $x < $boardFields[0]; $x++) {
                for ($y = 0; $y < $boardFields[1]; $y++) {
                    $board[$x][$y] = $symbols[rand(0, (count($symbols) - 1))];
                }
            }

            display_board($board, $boardFields) . PHP_EOL;


            if (winner($board, $combinations,$win1) !== null) {
                var_dump(winner($board,$boardFields,$win1));
                $win1 = winner($board,$boardFields,$win1);

                foreach ($win1 as $value){
                    print $value." has Won".PHP_EOL;
                }


                /*

                if (winner($board, $combinations,$win) == '!') {
                    echo " You won " . ($bet * $one * $spinCash) . " monies" . PHP_EOL;
                    $totalCash += ($bet * $one * $spinCash);
                    echo "total cash = " . $totalCash . PHP_EOL;
                    break;
                }
                if (winner($board, $combinations,$win) == '@') {
                    echo " You won " . ($bet * $two * $spinCash) . " monies" . PHP_EOL;
                    $totalCash += ($bet * $two * $spinCash);
                    echo "total cash = " . $totalCash . PHP_EOL;
                    break;
                }

                */
            }

                echo "you lost" . PHP_EOL;
                echo "Your total is = " . $totalCash . PHP_EOL;
                break;
            default:
                echo "Your total is = " . $totalCash . PHP_EOL;
                exit;



    }
}