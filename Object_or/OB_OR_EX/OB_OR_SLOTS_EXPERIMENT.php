<?php
$bannedPlayers = ["Julius Ceasar","Marcus Aurelius"];
echo " Please enter your name and surname:".PHP_EOL;
$playerName = readline();
if (in_array($playerName,$bannedPlayers)){
    echo "You are banned from this casino".PHP_EOL;
    exit;
}else{
    echo "Welcome {$playerName} !".PHP_EOL;
}



echo "Please choose symbols :".PHP_EOL;
echo "[1] for [ ! , @ ] ".PHP_EOL;
echo "[2] for [ ! , @ , # ]".PHP_EOL;
$choice1 = readline();

echo "Please choose board size :".PHP_EOL;
echo "[1] for 3x3".PHP_EOL;
echo "[2] for 4x3".PHP_EOL;
$choice2 =readline();


class Symbols{
    private array $symbolsA = ["!","@"];
    private array $symbolsB = ["!","@","#"];

    public function getSymbols($choice1){
        if($choice1 ==1) {
            return $this->symbolsA;
        }
        if($choice1 == 2){
            return $this->symbolsB;
        }
        else return null;
    }

}

$symbol1 = new Symbols($choice1);


class Combinations
{
    private array $combinationsA = [
        [
            [0, 0], [0, 1], [0, 2], [0, 3]
        ],
        [
            [1, 0], [1, 1], [1, 2], [1, 3]
        ],
        [
            [2, 0], [2, 1], [2, 2], [2, 3]
        ],
        [
            [0, 0], [1, 1], [2, 2], [1, 3]
        ],
        [
            [2, 0], [1, 1], [0, 2], [1, 3]
        ],
    ];
    private array $combinationsB = [
        [
            [0, 0], [0, 1], [0, 2]
        ],
        [
            [1, 0], [1, 1], [1, 2]
        ],
        [
            [2, 0], [2, 1], [2, 2]
        ],
        [
            [0, 0], [1, 1], [2, 2]
        ],
        [
            [2, 0], [1, 1], [0, 2]
        ],
    ];

    public function addCombinations($b)
    {
        $this->combinations[] = $b;
    }

    public function getCombinations($choice2)
    {
        if ($choice2 == 1) {
            return $this->combinationsB;
        }
        if ($choice2 == 2) {
            return $this->combinationsA;
        }

    }

    public function winner($choice2, $gg): array
    {
        if ($choice2 == 1) {
            $newCombo = [];
            foreach ($this->combinationsB as $index => $combination) {


                foreach ($combination as $combo => $item) {
                    [$row, $column] = $item;
                    $newCombo[$index][$combo] = $gg[$row][$column];
                }
            }
            $winnercombo = [];
            foreach ($newCombo as $combination) {
                if ((count(array_unique($combination)) === 1)) {
                    $winnercombo[] = $combination[0];
                }
            }
            return $winnercombo;
        }
       else {
            $newCombo = [];
            foreach ($this->combinationsA as $index => $combination) {


                foreach ($combination as $combo => $item) {
                    [$row, $column] = $item;
                    $newCombo[$index][$combo] = $gg[$row][$column];
                }
            }
            $winnercombo = [];
            foreach ($newCombo as $combination) {
                if ((count(array_unique($combination)) === 1)) {
                    $winnercombo[] = $combination[0];
                }
            }
            return $winnercombo;


        }



    }
}
$combination1= new Combinations();


class board{
    private array $board;
    private array $dd;
    private array $boardFieldsA= [3,4];
    private array $boardFieldsB = [3,3];

    public function __construct($board)
    {
        $this->board = $board;
    }

    public function getBoard($z,$choice2,$choice1){
        if($choice2==1) {

            for ($x = 0; $x < $this->boardFieldsB[0]; $x++) {
                for ($y = 0; $y < $this->boardFieldsB[1]; $y++) {


                    $this->board[$x][$y] = $z->getSymbols($choice1)[rand(0, (count($z->getSymbols($choice1)) - 1))];
                    echo " {$this->board[$x][$y]} ";
                    $this->dd [$x][$y] = $this->board[$x][$y];

                }
                echo PHP_EOL;
                echo "__________________" . PHP_EOL;

            }
            return $this->dd;
        }
        if($choice2 == 2){

            for ($x = 0; $x < $this->boardFieldsA[0]; $x++) {
                for ($y = 0; $y < $this->boardFieldsA[1]; $y++) {


                    $this->board[$x][$y] = $z->getSymbols($choice1)[rand(0, (count($z->getSymbols($choice1)) - 1))];
                    echo " {$this->board[$x][$y]} ";
                    $this->dd [$x][$y] = $this->board[$x][$y];

                }
                echo PHP_EOL;
                echo "__________________" . PHP_EOL;

            }
            return $this->dd;

        }
        else{
            return null;
        }
    }

}
$board1 = new board([" "]);

$totalCash = 0;
$bet = 0;
$spinCash = 0;

$one = 5;
$two = 10;




echo "Please enter cash" . PHP_EOL;
$totalCash = (int)readline() ;
echo "please enter cash per game" . PHP_EOL;
echo "[1] = 1" . PHP_EOL;
echo "[2] = 2" . PHP_EOL;
$spinCash = (int)readline();


echo "Select bet level" . PHP_EOL;
echo "[1] = 1" . PHP_EOL;
echo "[2] = 2" . PHP_EOL;
echo "[3] = 3" . PHP_EOL;

$bet = (int)readline();


while ($totalCash >= 1) {
    echo "[1] == spin" . PHP_EOL;
    echo "[any] == exit" . PHP_EOL;
    $f = (int)readline("Select option") . PHP_EOL;
    switch ($f) {
        case 1 :
            if ($totalCash < 1) {
                echo "insufficient funds" . PHP_EOL;
                exit;
            }


            $totalCash = (int)($totalCash - ($spinCash * $bet));
            $c = $board1->getBoard($symbol1,$choice2,$choice1);


            $isWinner = $combination1->winner($combination1->getCombinations($choice2), $c);

            if (sizeof($isWinner) > 0) {
                foreach ($isWinner as $item) {
                    if ($item == '!') {
                        echo " You won on  {$item}  " . ((int)$bet * $one * $spinCash) . " monies" . PHP_EOL;
                        $totalCash += ((int)$bet * $one * $spinCash);
                        echo "total cash = " . $totalCash . PHP_EOL;


                    }
                    if ($item == '@') {
                        echo " You won on  {$item} " . ((int)$bet * $two * $spinCash) . " monies" . PHP_EOL;
                        $totalCash += ((int)$bet * $two * $spinCash);
                        echo "total cash = " . $totalCash . PHP_EOL;


                    }if ($item == '#') {
                        echo " You won on {$item}  " . ((int)$bet * 33 * $spinCash) . " monies" . PHP_EOL;
                        $totalCash += ((int)$bet * $two * $spinCash);
                        echo "total cash = " . $totalCash . PHP_EOL;


                    }

                }
                break;
            }
            echo "you lost" . PHP_EOL;
            echo "Your total is = " . $totalCash . PHP_EOL;
            break;


        default :
            echo "Your total is = " . $totalCash . PHP_EOL;
            exit;


    }

}
