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


    public array $reserved;



    public function addcar(shop $car)
    {
        $this->cars[] = $car;


    }

    public function getIvnentory(){
        $invCars = "";
        foreach ($this->cars as $index=>$car) {
            $invCars .= "[".$index."]".$car->name." ".$car->price." $".$car->model." ".PHP_EOL;
        }
        return $invCars;
    }

    public function reserveCar($c)
    {
        $resCar = $this->cars[$c];
        unset ($this->cars[$c]);
        $this->reserved[] = $resCar;
    }
    public function getReservedCars(){
        {
            $reservedCars = " ";
            foreach ($this->reserved as $index => $car) {
                $reservedCars.= "[" . $index . "]" . $car->name . " " . $car->price . " $ ". $car->model." " . PHP_EOL;
            }
            return $reservedCars;
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
echo $inStore->getIvnentory();

echo "Select your car : ".PHP_EOL;
$c = readLine();
$inStore->reserveCar($c);
echo " in store :".PHP_EOL;
echo $inStore->getIvnentory();
echo "Reserved :".PHP_EOL;
echo $inStore->getReservedCars();