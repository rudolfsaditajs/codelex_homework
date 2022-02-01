<?php
$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers
$sum=0;

for($x=0;$x<count($numbers);$x++){
    $sum+=$numbers[$x];

}
echo $sum/$x;