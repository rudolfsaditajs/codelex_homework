<?php
class lights
{
    private int $lightCondition =100;
    private string $name;
    private int $farOrClose;
    public function __construct($name,$lightCondition ,$farOrClose)
    {
        $this ->lightCondition = $lightCondition;
        $this->name =$name;
        $this->farOrClose = $farOrClose;
    }

    public function changeCondition($lightCondition,$farOrClose){
        $this ->lightCondition -= rand(1,2)*$farOrClose;
    }
    public function getLightsCondition(){
        return $this->lightCondition;
    }

    public function getFarOrClose(): int
    {
        return $this->farOrClose;
    }
    public function getName(){
        return $this->name;
    }
}