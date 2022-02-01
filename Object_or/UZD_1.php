<?php
class weapons{
    public string $name;
    public string $power;
    public function __construct($name,$power){
        $this->name =$name;
        $this ->power = $power;

    }

}
class inventory{
    public array $rr;

    public function addWeapon (weapons $weapon){
        $this->rr[]=$weapon;



}
}
$gun = new weapons('AK',900);
$machineGun = new weapons('MS5000',9000);
$skapis= new inventory();
$skapis->addWeapon($gun);
$skapis->addWeapon($machineGun);

foreach ($skapis as $item){
    foreach ($item as $value){

       print_r($value);
    }

}