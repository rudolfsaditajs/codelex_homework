<?php
class Car
{
    private string $name;
    private FuelGauge $fuelGauge;
    private Odometer $odometer;
    private array $tires = [] ;
    private array $lights = [];
    private Battery $battery;

    private const CONSUMPTION_PER_KM = 0.07; // 7L on 100km

    public function __construct(string $name, int $fuelGaugeAmount)
    {
        $this->name = $name;
        $this->battery= new Battery();
        $this->fuelGauge = new FuelGauge($fuelGaugeAmount);
        $this->odometer = new Odometer();
        $this->tires[] = new Tire("frontRight");
        $this->tires[] = new Tire("frontLeft");
        $this->tires[] = new Tire("rearRight");
        $this->tires[] = new Tire("rearLeft");
        $this->lights[] = new lights("frontLeftClose",100,1);
        $this->lights[] = new lights("frontRightClose",100,1);
        $this->lights[] = new lights("frontLeftFar",100,2);
        $this->lights[] = new lights("frontRightFar",100,2);

    }

    public function drive(int $distance = 10): void
    {
        if ($this->fuelGauge->getFuel() <= 0) return;
        if ($this->battery->getBatteryLevel() <= 0) return;


        $this->fuelGauge->change($distance * -self::CONSUMPTION_PER_KM);
        $this->odometer->addMileage($distance);
        foreach ($this->tires as $tire){
            $tire->changeCondition($tire->getTireCondition());
        }

        foreach ($this->lights as $light){
            $light->changeCondition($light->getLightsCondition(),$light->getFarOrClose());
        }
        $this->battery->chargeBattery($this->getBattery());

    }



    public function getName(): string
    {
        return $this->name;
    }

    public function getFuel(): float
    {
        return $this->fuelGauge->getFuel();
    }
    public function getBattery(){
        return $this->battery->getBatteryLevel();
    }

    public function getMileage(): int
    {
        return $this->odometer->getMileage();
    }
    public function getTires(){
        return $this->tires;
    }

    public function getLights(){
        return $this->lights;
    }

    public function validateTireCond(){
        $brokenTires =[];
        foreach ($this->tires as $tire){
            if($tire->getTireCondition()<=0){
                $brokenTires [] = $tire;
            }
        }
    return count($brokenTires) < 2;
    }
    public function validateLightsCond(){
        foreach ($this->lights as $light){
            if($light->getLightsCondition()<=50){
                return false;
            }
        }
        return true;
    }
}