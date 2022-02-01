<?php
class Point{
    private int $x;
    private int $y;
    public function __construct($x,$y)
    {
        $this->x =$x;
        $this->y =$y;

    }

    public function swapPoints($one,$two){
        $f =$one->x;
        $s = $one ->y;
        $one->x =$two->x;
        $one->y = $two-> y;
        $two->x =$f;
        $two ->y = $s;


    }

    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
Point::swapPoints($p1,$p2);

echo "(" .$p1->getX(). ", " .$p1->getY(). ")".PHP_EOL;
echo "(" .$p2->getX(). ", " .$p2 ->getY(). ")".PHP_EOL;
