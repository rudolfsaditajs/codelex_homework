<?php
class Date{
    private int $day;
    private int $month;
    private int $year;
    public function __construct($day,$month,$year)
    {
        $this->day=$day;
        $this->month=$month;
        $this->year=$year;
    }

    public function setDay($newDay){
        $this->day=$newDay;
    }
    public function setMonth($newMonth){
        $this->month=$newMonth;
    }
    public function setYear($newYear){
        $this->year=$newYear;
    }
    public function getDay(){
        return $this->day;
    }
    public function getMonth(){
        return $this->month;
    }
    public function getYear(){
        return $this->year;
    }
    public function DisplayDate($day,$month,$year){
        echo "{$this->day} / {$this->month} / {$this->year}".PHP_EOL;
    }

}

$DateTest = new Date(15,4,1854);
$DateTest->DisplayDate($DateTest->getDay(),$DateTest->getMonth(),$DateTest->getYear());

$DateTest->setDay(11);
$DateTest->setMonth(11);
$DateTest->setYear(1911);


$DateTest->DisplayDate($DateTest->getDay(),$DateTest->getMonth(),$DateTest->getYear());



