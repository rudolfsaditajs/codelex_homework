<?php
class FuelGauge {
    private int $fuelLevel;
    public function __construct($fuelLevel)
    {
        $this->fuelLevel=$fuelLevel;
    }

    public function getFuelLevel(){
        return $this->fuelLevel;
    }
    public function refuel(){
        $this->fuelLevel++;
    }
    public function driveFuelLevel(){
        $this->fuelLevel--;
    }
}

class Odometer {
    private int $milage;
    private int $h =0;
    public function __construct($milage)
    {
        $this->milage=$milage;
    }
    public function getMilage(){
        return $this->milage;
    }
    public function driveMilage(){
        $this->milage++;
    }
    public function driveMperL($mil){
        $this->h++;

        if($this->h%10 == 0){
            $mil->driveFuelLevel();
        }
        if($this->milage == 999999){
            $this->milage = 0;
        }


    }
}

$c =new FuelGauge(15);

$d = new Odometer(0);

while($c->getFuelLevel()<70){
    $c->refuel();
}
echo $c->getFuelLevel().PHP_EOL;

while ($c->getFuelLevel()>0){
    $d->driveMilage();
    $d->driveMperL($c);
    echo $d->getMilage().PHP_EOL;
    echo $c->getFuelLevel().PHP_EOL;
}