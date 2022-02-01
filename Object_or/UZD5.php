<?php
abstract class shape {
    private string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

class triangle extends shape
{
    private float $area;
    private int $a;
    private int $b;
    private int $c;

    public function __construct($name, int $a, int $b, int $c)
    {
        parent::__construct($name);
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->area = sqrt((($a + $b + $c) / 2) * (($a + $b + $c) / 2 - $a) * (($a + $b + $c) / 2 - $b) * (($a + $b + $c) / 2 - $c));

    }

    public function getB(): int
    {
        return $this->b;

    }

    public function getA(): int
    {
        return $this->a;

    }

    public function getC(): int
    {
        return $this->c;

    }



    public function getArea()
    {
        if (isset($this->area)) {
            return $this->area;
        }

    }
}

$billy = new triangle("billy",10,12,13);
$aa = $billy->getName()." = ".$billy->getArea().PHP_EOL;

class circle extends shape{
    private int $radiuss;
    private float $area;
    public function getArea(){
        return $this->area;
    }
    public function __construct($name,int $radiuss)
    {
        parent::__construct($name);
        $this->radiuss=$radiuss;
        $this->area=($radiuss*$radiuss*pi());

    }
    public function getRadiuss():int{
        return $this->radiuss;
    }



}
$jimmy =new circle("jimmy",16);
$bb = $jimmy->getName()." = ".$jimmy->getArea().PHP_EOL;

class square extends shape{

    private int $l;
    private float $area;
    public function getArea(){
        return $this->area;
    }
    public function __construct($name, int$l)
    {
        parent::__construct($name);

        $this->l=$l;
        $this->area = ($l*$l);
    }
    public function getL(){
        return $this->l;
    }


}
$igor = new square('igor',13);
$cc = $igor->getName()." = ". $igor->getArea().PHP_EOL;

class total{
    private array $Total;
    private float $totalArea = 0;
    public function addShape($AShape){
        $this->Total[] = $AShape;
    }
    public function totArea ($Total){
        foreach ($Total as $item){
            $this->totalArea += $item->getArea();
        }
        return $this->totalArea;
    }
    public function getTotal(){
        return $this->Total;
    }



}
$GG = new total();
$GG ->addShape($billy);
$GG->addShape($jimmy);
$GG ->addShape($igor);

/*foreach ($GG->getTotal() as $item){
    echo $item->getName(). " = ".$item-> getArea().PHP_EOL;
}
echo "Total area = ".$GG->totArea($GG->getTotal()).PHP_EOL;
*/

while(true) {
    echo "Press [1] for triangle" . PHP_EOL;
    echo "Press [2] for circle" . PHP_EOL;
    echo "Press [3] for square" . PHP_EOL;
    echo "Press [any] to exit".PHP_EOL;
    $y = readline();
    switch ($y) {
        case 1:
            echo "Triangle name is :" . PHP_EOL;
            $triName = readline();
            echo "first side is :" . PHP_EOL;
            $inA = readline();
            echo "second side is :" . PHP_EOL;
            $inB = readline();
            echo "third side is :" . PHP_EOL;
            $inC = readline();

            $GG->addShape(new triangle($triName, $inA, $inB, $inC));

            foreach ($GG->getTotal() as $item) {

                echo $item->getName() . " = " . $item->getArea() . PHP_EOL;

            }
            break;
        case 2:
            echo "Circle name is :".PHP_EOL;
            $cirName = readline();
            echo "Radiuss is : ".PHP_EOL;
            $RR = readline();
            $GG ->addShape(new circle($cirName,$RR));
            foreach ($GG->getTotal() as $item) {

                echo $item->getName() . " = " . $item->getArea() . PHP_EOL;

            }
            break;

        case 3 :
            echo "Square name is : ".PHP_EOL;
            $sqName = readline();
            echo "Side is : ".PHP_EOL;
            $ss = readline();

            $GG ->addShape(new square($sqName,$ss));

            foreach ($GG->getTotal() as $item) {

                echo $item->getName() . " = " . $item->getArea() . PHP_EOL;

            }
            break;
        default :
            foreach ($GG->getTotal() as $item) {

                echo $item->getName() . " = " . $item->getArea() . PHP_EOL;

            }
            echo "Total area = ".$GG->totArea($GG->getTotal()).PHP_EOL;
            exit;

    }
}