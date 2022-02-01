<?php

class BlackPeter{
    private Deck $deck;

    public function __construct()
    {
        $this->deck=new Deck;
    }
    public function deal():Card{
       return $this->deck->draw();

    }


    public function getDeck(): Deck
    {
        return $this->deck;
    }

    public function equalCards(Card $card1,Card $card2):bool{
        return ($card1->getSymbol() === $card2->getSymbol()&& $card1->getColor() ===$card2->getColor());

    }

}