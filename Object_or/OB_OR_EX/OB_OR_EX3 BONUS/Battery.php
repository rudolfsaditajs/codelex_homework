<?php
class Battery{
    private int $batteryLevel = 15;


    public function getBatteryLevel(): int
    {
        return $this->batteryLevel;
    }
    public function chargeBattery($batteryLevel){
        $this->batteryLevel += rand(3,6);
        if($batteryLevel>=100){
            $this ->batteryLevel = 100;
        }
    }
}