<?php
$myfile = fopen("gameFile.txt", "r");
// Output one line until end-of-file
$firstLine = fgets($myfile);
echo $firstLine.PHP_EOL;
$secondLine = fgets($myfile);
echo $secondLine.PHP_EOL;

$board = [];

$one =explode(":",$firstLine);
$two = explode(",",$one[1]);

for($x=0;$x<(int)$two[0];$x++){
    for($y =0; $y<(int)$two[1];$y++){
        $board[$x][$y] = "-";
    }
    PHP_EOL;
}


$combinations = [];

$getComb =explode(" ",$secondLine);
$getcomb1 = explode("|",$getComb[1]);
for($x=0;$x<count($getcomb1);$x++){
    $getcomb1[$x]=explode(";",$getcomb1[$x]);
    for($y = 0;$y<count($getcomb1[$x]);$y++){
        $getcomb1[$x][$y] = explode(",",$getcomb1[$x][$y]);
    }
}



