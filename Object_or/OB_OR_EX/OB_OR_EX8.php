<?php
class SavingsAccount{
    private int $balance;
    private float $Ainterest;
    private float $totalInterest =0 ;

    public function __construct($balance,$Ainterest)
    {
        $this ->balance=$balance;
        $this ->Ainterest = $Ainterest;
    }
    public function withdraw($number){
         $this->balance -= $number;
    }
    public function deposit($number){
         $this ->balance +=$number;
    }
    public function monthInterest(){

        $this->totalInterest +=($this->balance * ($this ->Ainterest/12));
        $this->balance +=($this->balance * ($this ->Ainterest/12));
    }
    public function getTotalInterest(){
        return $this->totalInterest;
    }
    public function getBalance(){
        return $this->balance;
    }

}


echo "How much money is in the account?".PHP_EOL;
$bal = readline();
echo "Enter the annual interest rate".PHP_EOL;
$anInt =readline();

$myAccount = new SavingsAccount($bal,$anInt);

echo "How long has the account been opened?".PHP_EOL;
$months = readline();
$totalIn =0;
$totalOut = 0;

for($i =1;$i<=$months;$i++){
    echo "Enter amount deposited for month:".$i." :".PHP_EOL;
    $a = readline();
    $myAccount->deposit($a);
    $totalIn+=$a;
    echo "Enter amount withdrawn for month:".$i." :".PHP_EOL;
    $b = readline();
    $myAccount->withdraw($b);
    $totalOut +=$b;
    $myAccount->monthInterest();
}

echo "Total deposited : $".number_format($totalIn,2).PHP_EOL;
echo "Total withdrawn : $".number_format($totalOut,2).PHP_EOL;
echo "Interest earned : $".number_format($myAccount->getTotalInterest(),2).PHP_EOL;
echo "Ending balance : $".number_format($myAccount->getBalance(),2).PHP_EOL
;
