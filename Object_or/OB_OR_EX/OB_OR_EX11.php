<?php
class Account{
    private int $balance =0;
    public function __construct($balance)
    {
        $this->balance=$balance;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }
    public function addToBalance($cash){
        $this->balance+=$cash;

    }
    public function withdrawal($cash){
        $this->balance-=$cash;
    }
}

$firstAccount= new Account(100);
$firstAccount->addToBalance(20);
echo $firstAccount->getBalance().PHP_EOL;


$Matts_account = new Account(1000);
$myAccount = new Account(0);
$Matts_account->withdrawal(100);
$myAccount->addToBalance(100);
echo $Matts_account->getBalance().PHP_EOL;
echo $myAccount->getBalance().PHP_EOL;


function transfer(Account $from, Account $to, int $howMuch) {
    $from->withdrawal($howMuch);
    $to->addToBalance($howMuch);
}

$A = new Account(100);
$B = new Account(0);
$C = new Account(0);

transfer($A,$B,50);
transfer($B,$C,25);

echo $A->getBalance().PHP_EOL;
echo $B->getBalance().PHP_EOL;
echo $C->getBalance().PHP_EOL;
