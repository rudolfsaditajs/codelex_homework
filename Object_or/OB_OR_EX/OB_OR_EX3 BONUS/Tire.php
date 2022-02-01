<?php
class Tire{

    private int $tireCondition;
    private string $name;
    public function __construct($name,$tireCondition = 100)
    {
        $this->name=$name;
        $this->tireCondition=$tireCondition;
    }
    public function changeCondition($tireCondition){
        $this ->tireCondition -= rand(1,4);
    }
    public function getTireCondition()
    {
        return $this->tireCondition;
    }
    public function getName(){
        return $this->name;
    }




}
