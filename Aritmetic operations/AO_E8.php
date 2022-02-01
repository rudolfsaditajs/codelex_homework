<?php
function payday(float $a, int $b)
{

    if ($a < 8) {
        echo "Error, too low haurly rate" . PHP_EOL;
        return null;

    }
    if ($b > 60) {
        echo "Error, too many haurs" . PHP_EOL;
        return null;

    }
    if ($b > 40 && $b < 60) {
        $c = $b - 40;
        $f = (40 * $a) + ($c * $a * 1.5);
        return $f;
    }
    if ($b <= 40) {
        $f = $b * $a;
        return $f;
    }

}
echo payday(10,73).PHP_EOL;
echo payday(8.20, 47).PHP_EOL;
echo payday(7.50,35).PHP_EOL;



