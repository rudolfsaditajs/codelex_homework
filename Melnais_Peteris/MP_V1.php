<?php
require_once "Deck.php";
require_once "Card.php";
require_once "BlackPeter.php";
require_once "Player.php";

$game = new BlackPeter();
$player = new Player();
$npc = new Player();


for($i=0;$i<25;$i++){
    $player->addCard($game->deal());
}
for($i=0;$i<24;$i++){
    $npc->addCard($game->deal());
}


foreach ($player->getCards() as $card){
    echo "| ".$card->getDisplayValue()." |";
}
echo PHP_EOL;
foreach ($npc->getCards() as $card){
    echo "| ".$card->getDisplayValue()." |";
}
echo PHP_EOL;

echo "------------------------".PHP_EOL;
$player->disband();
foreach ($player->getCards() as $card){
    echo "| ".$card->getDisplayValue()." |";
}
echo PHP_EOL;
$npc->disband();
foreach ($npc->getCards() as $card){
    echo "| ".$card->getDisplayValue()." |";
}
echo PHP_EOL;

while(true){
    if($player->isWinner()){
        echo "player has won.".PHP_EOL;
        exit;
    }
    if($npc->isWinner()){
        echo "Npc has won.".PHP_EOL;
        exit;
    }


    $player->addCard($npc->switchCards());
    $npc->addCard($player->switchCards());
    $player->disband();
    foreach ($player->getCards() as $card){
        echo "| ".$card->getDisplayValue()." |";
    }
    echo PHP_EOL;

    $npc->disband();
    foreach ($npc->getCards() as $card){
        echo "| ".$card->getDisplayValue()." |";
    }
    echo PHP_EOL;


    sleep(1);


}








