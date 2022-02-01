<?php
class shop{
    public string $name;
    public int $price;
    public int $amount;
    public function __construct($name,$price,$amount){
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }
}

class inventory{
    public array $rr;


    public function addProduct (shop $product){
        $this->rr[]=$product;



    }

    public function totalSum(): int
    {
        $sum = 0;
        foreach ($this->rr as $product)
        {
            $sum += $product->price * $product->amount;
        }
        return $sum;
    }

}


$apple = new shop('apple',10,50);
$banana = new shop('banana',50,400);

$shelf = new inventory();
$shelf->addProduct($apple);
$shelf->addProduct($banana);

echo $apple->name." ".$apple->price."$ ".$apple->amount.PHP_EOL;
echo $banana->name." ".$banana->price."$ ".$banana->amount.PHP_EOL;
echo "Total : ".$shelf->totalSum()."$".PHP_EOL;

