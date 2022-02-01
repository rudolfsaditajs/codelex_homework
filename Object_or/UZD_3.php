<?php
class shop{
    public string $name;
    public int $price;
    public string $model;
    public function __construct($name,$model,$price){
        $this->name = $name;
        $this->model = $model;
        $this->price = $price;

    }
}
class inventory
{
    public array $cars;



    public function addcar(shop $car)
    {
        $this->cars[] = $car;


    }



}
class reserve
{
    public array $reserved;
    public int $i=0;
    public function reserved  ($c,$inStore){
        foreach ($inStore as $value){
            foreach ($value as $item){
                if($c == $this->i){
                    $this-> reserved[] = $item;

                }
                $this->i++;
            }
        }

    }

}

$audi = new shop('audi','a6',500);
$bmw = new shop('bmw','x5',600);
$skoda = new shop('skoda','octavia', 2000);

$inStore = new inventory();
$inStore ->addcar($audi);
$inStore ->addcar($bmw);
$inStore ->addcar($skoda);

echo "In our store:".PHP_EOL;
foreach ($inStore as $value) {
    foreach ($value as $item) {


        echo $item->name . " ";
        echo $item->model . " ";
        echo $item->price . " ";
        echo PHP_EOL;
    }
}
$i=0;
foreach ($inStore as $value){
    foreach ($value as $item){

        echo "Press : ".$i." to choose : ".$item->name." ".PHP_EOL;
        $i++;
    }
}
$c = readline();


$reservedCar = new reserve();
$reservedCar->reserved($c,$inStore);
foreach ($reservedCar as $value) {
    foreach ($value as $item) {
        echo $item->name ." ".$item->model ." ".$item->price ." is reserved.".PHP_EOL;



    }
}
echo "Cars for rent : ".PHP_EOL;
$i = 0;
foreach ($inStore as $value) {
    foreach ($value as $item) {
        if( $i == $c){
            continue;
        }
        echo $item->name . " ";
        echo $item->model . " ";
        echo $item->price . " ";
        echo PHP_EOL;
        $i++;

    }
}
;