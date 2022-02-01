<?php

class circle
{
  public static function circleArea(float $r)
    {
        return M_PI * 2 * $r;
    }
}


class rectangle
{

   public static function rectArea(float $a, float $b)
    {
        return $a * $b;
    }
}

class triange
{

    public static function triArea(float $f, float $g)
    {
        return $f * $g * 0.5;
    }
}

echo "Geometry calculator:

Calculate the Area of a Circle
Calculate the Area of a Rectangle
Calculate the Area of a Triangle
Quit
Enter your choice (1-4):","\n";
$l = readline();
if($l==1){
    echo "enter radius:","\n";
    $r= readline();
    echo circle::circleArea($r),"\n";

}if($l==2){
    echo "enter length","\n";
    $a = readline();
    echo "enter width","\n";
    $b = readline();
    echo rectangle::rectArea($a,$b),"\n";
}if($l==3){
    echo "enter base","\n";
    $f = readline();
    echo "enter height","\n";
    $g = readline();
    echo triange::triArea($f,$g),"\n";

}if($l == 4){
    die();

}