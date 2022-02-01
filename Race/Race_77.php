<?php
$symbols = ['!','@','#','$'];
$length = 15;
$players =[];
$playerTrack= [];
echo "Enter number of players 1 - 4".PHP_EOL;
$numberOfPlayers = readline().PHP_EOL;
for($x=0;$x<$numberOfPlayers;$x++){
    echo "Track nr ".($x+1)." is ".$symbols[$x].PHP_EOL;
}
for($y=0;$y<$numberOfPlayers;$y++){
    $players[$y] = $symbols[$y];
}
echo "Choose your track ".PHP_EOL;
$betPlayer = ((int)readline()-1).PHP_EOL;
echo "Enter your bet".PHP_EOL;
$bet = (int)readline().PHP_EOL;



    foreach ($players as $player){
        $playerTrack[0] = $player;

        for($w =0;$w<($length);$w++){
            if(isset($playerTrack[$w])&&$playerTrack[$w]!= " - "){
                echo $playerTrack[$w];
                continue;
            }
            $playerTrack[$w]= " _ ";
            echo $playerTrack[$w];
        }echo PHP_EOL;
    }
    $playerTrack[0]=" - ";


echo "Press [1] to start; Press [any] to exit".PHP_EOL;
$z = readline().PHP_EOL;

$winners= [];
$turns = [];
$endgame = 0;
$counter = 0;
switch ($z) {
    case 1 :
        $l=0;
        while ($endgame<=$numberOfPlayers) {



            foreach ($players as $player) {
                if($counter == 0){
                    $l =0;
                }else{

                    $l =$counter+rand(2,3);
                }



                $playerTrack[$l] = $player;
                if($l >=15){
                    $winners[] = $player;
                    $turns[] = $counter;
                    $endgame +=1;

                }



                for ($w = 0; $w < ($length); $w++) {

                    if(isset($playerTrack[$w])&&$playerTrack[$w]!= " - "){
                        echo $playerTrack[$w];
                        $playerTrack[$w] =" - ";
                        continue;
                    }
                    $playerTrack[$w]= " _ ";
                    echo $playerTrack[$w];


                }
                 echo PHP_EOL;

            }
            $counter++;
            echo PHP_EOL;
            sleep(1);




        }


        $c = $symbols[(int)$betPlayer];
        $f = array_search($c,$winners);

        if($turns[$f] === $turns[0] ){
            echo $c." has won, you get ".((int)$bet*15)." monies!!!".PHP_EOL;
        }else{
            echo "Sorry ".$winners[0]." has won, better luck next time!".PHP_EOL;
        }
    default : exit;
}



