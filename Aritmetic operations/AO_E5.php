<?php
echo "Im thinking of a number between 1-100.  Try to guess it.: ","\n'";
$a = readline();
$b = rand(1 , 100);
if($a==$b){
    echo "You guessed it!  What are the odds?!?";
}else if($a<$b){
    echo "Sorry, you are too low.  I was thinking of ".$b." ";
}else
    echo "Sorry, you are too high.  I was thinking of ".$b." ";
?>