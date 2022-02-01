<?php
class Decks{
    private array $deckOfCards = [];
    public function __construct()
    {
        $this->deckOfCards[] = new Cards("One of Spade",1);
        $this->deckOfCards[] = new Cards("Two of Spade",2);
        $this->deckOfCards[] = new Cards("Three of Spade",3);
        $this->deckOfCards[] = new Cards("Four of Spade",4);
        $this->deckOfCards[] = new Cards("Five of Spade",5);
        $this->deckOfCards[] = new Cards("Six of Spade",6);
        $this->deckOfCards[] = new Cards("Seven of Spade",7);
        $this->deckOfCards[] = new Cards("Eight of Spade",8);
        $this->deckOfCards[] = new Cards("Nine of Spade",9);
        $this->deckOfCards[] = new Cards("Ten of Spade",10);
        $this->deckOfCards[] = new Cards("Jack of Spade",10);
        $this->deckOfCards[] = new Cards("Queen of Spade",10);
        $this->deckOfCards[] = new Cards("King of Spade",10);
        $this->deckOfCards[] = new Cards("Ace of Spade",11);
        $this->deckOfCards[] = new Cards("One of Clubs",1);
        $this->deckOfCards[] = new Cards("Two of Clubs",2);
        $this->deckOfCards[] = new Cards("Three of Clubs",3);
        $this->deckOfCards[] = new Cards("Four of Clubs",4);
        $this->deckOfCards[] = new Cards("Five of Clubs",5);
        $this->deckOfCards[] = new Cards("Six of Clubs",6);
        $this->deckOfCards[] = new Cards("Seven of Clubs",7);
        $this->deckOfCards[] = new Cards("Eight of Clubs",8);
        $this->deckOfCards[] = new Cards("Nine of Clubs",9);
        $this->deckOfCards[] = new Cards("Ten of Clubs",10);
        $this->deckOfCards[] = new Cards("Jack of Clubs",10);
        $this->deckOfCards[] = new Cards("Queen of Clubs",10);
        $this->deckOfCards[] = new Cards("King of Clubs",10);
        $this->deckOfCards[] = new Cards("Ace of Clubs",11);
        $this->deckOfCards[] = new Cards("One of Diamonds",1);
        $this->deckOfCards[] = new Cards("Two of Diamonds",2);
        $this->deckOfCards[] = new Cards("Three of Diamonds",3);
        $this->deckOfCards[] = new Cards("Four of Diamonds",4);
        $this->deckOfCards[] = new Cards("Five of Diamonds",5);
        $this->deckOfCards[] = new Cards("Six of Diamonds",6);
        $this->deckOfCards[] = new Cards("Seven of Diamonds",7);
        $this->deckOfCards[] = new Cards("Eight of Diamonds",8);
        $this->deckOfCards[] = new Cards("Nine of Diamonds",9);
        $this->deckOfCards[] = new Cards("Ten of Diamonds",10);
        $this->deckOfCards[] = new Cards("Jack of Diamonds",10);
        $this->deckOfCards[] = new Cards("Queen of Diamonds",10);
        $this->deckOfCards[] = new Cards("King of Diamonds",10);
        $this->deckOfCards[] = new Cards("Ace of Diamonds",11);
        $this->deckOfCards[] = new Cards("One of Hearts",1);
        $this->deckOfCards[] = new Cards("Two of Hearts",2);
        $this->deckOfCards[] = new Cards("Three of Hearts",3);
        $this->deckOfCards[] = new Cards("Four of Hearts",4);
        $this->deckOfCards[] = new Cards("Five of Hearts",5);
        $this->deckOfCards[] = new Cards("Six of Hearts",6);
        $this->deckOfCards[] = new Cards("Seven of Hearts",7);
        $this->deckOfCards[] = new Cards("Eight of Hearts",8);
        $this->deckOfCards[] = new Cards("Nine of Hearts",9);
        $this->deckOfCards[] = new Cards("Ten of Hearts",10);
        $this->deckOfCards[] = new Cards("Jack of Hearts",10);
        $this->deckOfCards[] = new Cards("Queen of Hearts",10);
        $this->deckOfCards[] = new Cards("King of Hearts",10);
        $this->deckOfCards[] = new Cards("Ace of Hearts",11);
    }
    public function getRandomCard($deckOfCards){
        return $this->deckOfCards[rand(0,count($deckOfCards)-1)];

    }


    public function getDeckOfCards()
    {
        return $this->deckOfCards;
    }
}
class Cards{
    private string $name;
    private int $value;
    public function __construct($name,$value)
    {
        $this->name=$name;
        $this->value = $value;
    }
    public function getName(){
        return $this->name;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
$computerSum = 0;
$playerSum= 0;
$playedCards = [];
echo "To start the game press [1]".PHP_EOL;
$a = readline();
if($a != 1){
    exit;
}
$game = new Decks();
$b= $game->getRandomCard($game->getDeckOfCards());
$playedCards[]= $b;
$playerSum += $b->getValue();
echo "You draw :". $b->getName()." ".$b->getValue().PHP_EOL;
$c= $game->getRandomCard($game->getDeckOfCards());
$playedCards[]= $c;
$playerSum += $c->getValue();
echo "You draw :".$c->getName()." ".$c->getValue().PHP_EOL;
echo "Your total is ".$playerSum.PHP_EOL;

while(true){
    echo "Press [1] to draw another card".PHP_EOL;
    echo "Press [2] to hold".PHP_EOL;
    $choice = readline();
    switch ($choice) {
        case 1 :
            $f = $game->getRandomCard($game->getDeckOfCards());
            if(in_array($f,$playedCards)){
                break;
            }
            $playedCards[]= $f;
            $playerSum += $f->getValue();
            echo "You draw : ".$f->getName()." ".$f->getValue().PHP_EOL;
            echo "Your total is ".$playerSum.PHP_EOL;
            if($playerSum>21){
                echo "You lost, total sum :".$playerSum.PHP_EOL;
                exit;
            }
            break;

        case 2 :
            while ($computerSum <21){
                $l = $game->getRandomCard($game->getDeckOfCards());

                if(in_array($l,$playedCards)){
                    break;
                }
                $playedCards[] =$l;
                $computerSum += $l->getValue();
                echo "Computer draws : ".$l->getName()." ".$l->getValue().PHP_EOL;;
                if($computerSum > 21){
                    echo "Computer total is : ".$computerSum." Your total is ".$playerSum. "You won".PHP_EOL;
                    exit;
                }
                if ($computerSum == 17 ||$computerSum == 18 ||$computerSum == 19 ||$computerSum == 20 ||$computerSum == 21 ){
                    if ($computerSum>$playerSum){
                        echo "Computer total is : ".$computerSum." Your total is ".$playerSum. " You lost ".PHP_EOL;
                        exit;
                    }
                    if ($computerSum == $playerSum){
                        echo "Computer total is : ".$computerSum." Your total is ".$playerSum. " Its a draw".PHP_EOL;
                        exit;
                    }
                    if($computerSum< $playerSum){
                        echo "Computer total is : ".$computerSum." Your total is ".$playerSum. " You won".PHP_EOL;
                        exit;
                    }

                break;
                }


            }


    }
}







