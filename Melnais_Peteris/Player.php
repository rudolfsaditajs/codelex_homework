<?php
class Player {
private array $cards =[];

public function getCards(){
    return $this->cards;
}

public function addCard($card){
    $this->cards[] = $card;
}
public function hasPairedCards():bool{

    $symbols =[];
    foreach ($this->cards as $card){
        $symbols[] = $card->getSymbol();
    }
    $uniqueCardsCount = array_count_values($symbols);
    foreach ($uniqueCardsCount as $count){
        if($count>2){
            return true;
        }
    }
return false;
}
public function isWinner(){
    if(count($this->cards) ==0){
        return true;
    }
    return false;
}
public function switchCards(){


    while(count($this->cards)>1) {

        $randNr = rand(0, count($this->cards)-1);
        if (isset($this->cards[$randNr])) {
            $a = $this->cards[$randNr];
            unset($this->cards[array_search($a, $this->cards)]);



            return $a;


        }


    }
}

public function disband(){
    $symbols =[];
    foreach ($this->cards as $card){
        $symbols[] = $card->getSymbol();
    }
    $uniqueCardsCount = array_count_values($symbols);

    foreach ($uniqueCardsCount as $symbol =>$count){
        if($count === 1) continue;
        if($count === 4){
            foreach ($this->cards as $index => $card){
                if($card->getSymbol() === (string)$symbol){
                    unset($this->cards[$index]);

                }
            }

        }

        if($count ===2){
            $unsure=[];
            foreach ($this->cards as $index => $card){
                if($card->getSymbol() === (string)$symbol){
                    $unsure[] = $this->cards[$index];

                }
            }
            if($unsure[0]->getColor() === $unsure[1]->getColor()){
                unset($this->cards[array_search($unsure[0],$this->cards)]);
                unset($this->cards[array_search($unsure[1],$this->cards)]);
            }

        }
        if($count === 3){
            $unsure=[];
            foreach ($this->cards as $index => $card){
                if($card->getSymbol() === (string)$symbol){
                    $unsure[] = $this->cards[$index];

                }
            }
            if($unsure[0]->getColor() === $unsure[1]->getColor()){
                unset($this->cards[array_search($unsure[0],$this->cards)]);
                unset($this->cards[array_search($unsure[1],$this->cards)]);
            }
            if($unsure[0]->getColor() === $unsure[2]->getColor()){
                unset($this->cards[array_search($unsure[0],$this->cards)]);
                unset($this->cards[array_search($unsure[2],$this->cards)]);
            }
            if($unsure[1]->getColor() === $unsure[2]->getColor()){
                unset($this->cards[array_search($unsure[1],$this->cards)]);
                unset($this->cards[array_search($unsure[2],$this->cards)]);
            }

        }



    }
}
}