<?php
for( $x=1; $x <= 110;$x ++){
    switch ($x) {
        case $x % 11 == 0:
            echo $x." ";
            echo PHP_EOL;
            break;
        case $x % 3 == 0:
            echo "Coza ";
            break;
        case $x % 5 == 0:
            echo "Loza ";
            break;
        case $x % 7 == 0:
            echo "Woza";
            break;

        default:
            echo $x . " ";
    }

}