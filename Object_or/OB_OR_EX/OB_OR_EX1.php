<?php
class Product{

    private string $name;
    private float $startPrice;
    private int $amount;


    public function __construct(string $name,float $startPrice,int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount =$amount;
    }
    public function printProduct(){
       return $productInfo = "".$this->name." , price ".$this->startPrice." amount ".$this->amount."".PHP_EOL;
    }

    public function changeAmount($newAmount){
        $this->amount = $newAmount;
    }
    public function changePrice($newPrice){
        $this->startPrice = $newPrice;
    }
    public function getName ()
    {
        return $this->name;
    }
    public function getPrice (){
        return $this->startPrice;
    }
    public function getAmount (){
        return $this->amount;
    }




}

$mouse = new Product("Logitech mouse",70.00,14 );
$iphone = new Product("iPhone 5s",999.99,3);
$projector = new Product("Epson EB-U05",440.46,1);

echo $mouse ->printProduct();
echo $iphone->printProduct();
echo $projector->printProduct();

while (true){
    echo "Chose product you want to change".PHP_EOL;
    echo "[1] for mouse".PHP_EOL;
    echo "[2] for phone".PHP_EOL;
    echo "[3] for projector".PHP_EOL;
    echo "[Any] to exit".PHP_EOL;
    $d = readline();
    switch ($d){
        case 1 :
            echo "[1] to change price".PHP_EOL;
            echo "[2] to change amount".PHP_EOL;
            $s = readline();
            switch ($s){
                case 1 :
                    echo $mouse->getPrice()." is the current price, enter the new one :".PHP_EOL;
                    $a =readline();
                    $mouse->changePrice($a);
                    echo "New price is : ".$mouse->getPrice().PHP_EOL;
                    break;
                case 2 :
                    echo $mouse->getAmount()." is the current amount, enter the new one :".PHP_EOL;
                    $a =readline();
                    $mouse->changeAmount($a);
                    echo "New amount is : ".$mouse->getAmount().PHP_EOL;
                    break;
                default : exit;



            }

        case 2 :
            echo "[1] to change price".PHP_EOL;
            echo "[2] to change amount".PHP_EOL;
            $s = readline();
            switch ($s){
                case 1 :
                    echo $iphone->getPrice()." is the current price, enter the new one :".PHP_EOL;
                    $a =readline();
                    $iphone->changePrice($a);
                    echo "New price is : ".$iphone->getPrice().PHP_EOL;
                    break;
                case 2 :
                    echo $iphone->getAmount()." is the current amount, enter the new one :".PHP_EOL;
                    $a =readline();
                    $iphone->changeAmount($a);
                    echo "New amount is : ".$iphone->getAmount().PHP_EOL;
                    break;
                default : exit;



            }
        case 3 :
            echo "[1] to change price".PHP_EOL;
            echo "[2] to change amount".PHP_EOL;
            $s = readline();
            switch ($s){
                case 1 :
                    echo $projector->getPrice()." is the current price, enter the new one :".PHP_EOL;
                    $a =readline();
                    $projector->changePrice($a);
                    echo "New price is : ".$projector->getPrice().PHP_EOL;
                    break;
                case 2 :
                    echo $projector->getAmount()." is the current amount, enter the new one :".PHP_EOL;
                    $a =readline();
                    $projector->changeAmount($a);
                    echo "New amount is : ".$projector->getAmount().PHP_EOL;
                    break;
                default : exit;



            }
        default : exit;
    }

}