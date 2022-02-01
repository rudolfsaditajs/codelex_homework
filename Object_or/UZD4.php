<?php
class person{
    private string $name;
    private string $surname;
    private string $code;
   public function __construct($name,$surname,$code)
   {
       $this->name=$name;
       $this->surname=$surname;
       $this->code = $code;
   }
   public function getName (){
       return $this->name;
   }
    public function getSurname (){
        return $this->surname;
    }
    public function getCode (){
        return $this->code;
    }

}


class register{
    public array $registers;
    private array $c;
    public function addPerson(person $individual){
        $this->registers[] = $individual;
    }
    public function getPerson(){
        foreach ($this->registers as $index=>$individual){
             $c[] = "".$index." name : ".$individual->getName().", surname : ".$individual->getSurname().", with person code : ".$individual->getCode()."";
        }
        return $c;
    }

}
$Peteris = new person('Peteris','Petersons','999-123');
$Jana = new person('Jana','Jankovica','333-789');
$Ivans = new person ('Ivans','Ivanovs','555-456');

$biedri = new register();
$biedri->addPerson($Peteris);
$biedri->addPerson($Jana);
$biedri->addPerson($Ivans);


foreach (( $biedri->getPerson()) as $item) {
    echo $item.PHP_EOL;

}