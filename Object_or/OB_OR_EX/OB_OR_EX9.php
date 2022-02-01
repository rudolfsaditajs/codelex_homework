<?php
class BankAccount
{
    private string $name;
    private float $balance;
    public function __construct($name,$balance)
    {
        $this->name=$name;
        $this->balance=$balance;
    }
    public function show_user_name_and_balance() {
        if($this->balance>0){
            return $this->name.", $".number_format($this->balance,2).PHP_EOL;
        }
        else{
            return $this->name.", -$".number_format(abs($this->balance),2).PHP_EOL;

        }
    }

}
$ben =new BankAccount("Benson",17.50);
echo $ben->show_user_name_and_balance();