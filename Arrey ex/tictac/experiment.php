<?php

// TicTacToe

$myfile = fopen("gameFile.txt", "r");
// Output one line until end-of-file
$firstLine = fgets($myfile);

$secondLine = fgets($myfile);


$board = [];

$one =explode(":",$firstLine);
$two = explode(",",$one[1]);

for($x=0;$x<(int)$two[0];$x++){
    for($y =0; $y<(int)$two[1];$y++){
        $board[$x][$y] = "-";
    }
    PHP_EOL;
}




$getComb =explode(" ",$secondLine);
$getcomb1 = explode("|",$getComb[1]);
for($x=0;$x<count($getcomb1);$x++){
    $getcomb1[$x]=explode(";",$getcomb1[$x]);
    for($y = 0;$y<count($getcomb1[$x]);$y++){
        $getcomb1[$x][$y] = explode(",",$getcomb1[$x][$y]);
    }
}




function display_board($board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}

echo "Player 1 symbol is : " . PHP_EOL;
$player1 = readline();
echo "Player 2 symbol is : " . PHP_EOL;
$player2 = readline();

$activePlayer = $player1;



function winnerWinnerChickenDinner(array $getcomb1, array $board, string $activePlayer): bool
{
    foreach ($getcomb1 as $combination) {
        foreach ($combination as $item) {
            [$row, $column] = $item;
            if ($board[$row][$column] !== $activePlayer) {
                break;
            }

            if (end($combination) === $item) {
                return true;
            }
        }
    }

    return false;
}

function isBoardFull(array $board): bool
{
    foreach ($board as $row) {
        if (in_array('-', $row)) return false;
    }
    return true;
}

// X
// $board[0][0] = X
while (!isBoardFull($board) && !winnerWinnerChickenDinner($getcomb1, $board, $activePlayer)) {
    display_board($board);
    echo "Player :" . $activePlayer . PHP_EOL;
    $position = readline('Enter position: ');
    [$row, $column] = explode(',', $position);

    if ($board[$row][$column] !== '-') {
        echo 'Invalid position. its taken!' . PHP_EOL;
        continue;
    }

    $board[$row][$column] = $activePlayer;

    if (winnerWinnerChickenDinner($getcomb1, $board, $activePlayer)) {
        echo 'Winner is ' . $activePlayer . PHP_EOL;
        display_board($board);
        echo PHP_EOL;
        exit;
    }

    $activePlayer = $player1 === $activePlayer ? $player2 : $player1;
}

echo 'The game was tied.';
echo PHP_EOL;

