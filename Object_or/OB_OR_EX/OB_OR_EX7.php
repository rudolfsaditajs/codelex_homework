<?php
class Dog{
    private string $name;
    private string $sex;
    private string $father = "null";
    private string $mother = "null";
    public function __construct($name,$sex)
    {
        $this->name=$name;
        $this->sex =$sex;
    }
    public function addFather($father){
        $this->father=$father;
    }
    public function addMother($mother){
        $this->mother=$mother;
    }
    public function fathersName(){
        if($this->father != "null"){
            return $this->father;
        }
        else{
            return "unknown";
        }

    }

    public function hasSameMother($name2):bool{
        if($this->mother== $name2->mother){
            return true;
        }
        else{
            return false;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getSex(){
        return $this->sex;
    }

}

class DogTest{
    private array $dogs = [];
    public function __construct()
    {

        $this->dogs[] = new Dog("Max","male");
        $this->dogs[] = new Dog("Rocky","male");
        $this->dogs[] = new Dog("Sparky","male");
        $this->dogs[] = new Dog("Buster","male");
        $this->dogs[] = new Dog("Sam","male");
        $this->dogs[] = new Dog("Lady","female");
        $this->dogs[] = new Dog("Molly","female");
        $this->dogs[] = new Dog("Coco","female");

        $this->dogs[0]->addFather("Rocky");
        $this->dogs[0]->addMother("Lady");

        $this->dogs[7]->addMother("Molly");
        $this->dogs[7]->addFather("Buster");

        $this->dogs[1]->addFather("Sam");
       $this->dogs[1]->addMother("Molly");

        $this->dogs[3]->addMother("Lady");
        $this->dogs[3]->addFather("Sparky");
    }
    public function getFathersName(){

    }
    public function getDogs(){
        return $this->dogs;

    }


}
$test = new DogTest();


echo $test->getDogs()[7]->fathersName().PHP_EOL;
echo $test->getDogs()[2]->fathersName().PHP_EOL;

if($test->getDogs()[7]->hasSameMother($test->getDogs()[1])) {
    echo "true";
}
else{
    echo "false";
}

