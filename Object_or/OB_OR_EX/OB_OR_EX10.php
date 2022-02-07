<?php
class Video{
    private string $title;
    private bool $checkedOut = true;
    private int $averageRating = 0;
    private array $ratings = [];

    public function __construct($title)
    {
        $this->title=$title;
    }

    public function checkingOut()
    {
        $this->checkedOut = false;
        return false;
    }
    public function returned(){
        $this->checkedOut = true;
        return true;

    }
    public function addRating($rating){
        $this->ratings []= $rating;
        $this->averageRating = (array_sum($this->ratings)/count($this->ratings));
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getAverageRating(): int
    {
        return $this->averageRating;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }





}

class Store{
    private array $moviesInStore = [];
    private array $moviesRented = [];

    public function __construct()
    {
    }

    public function addMovie(Video $movie){

        if($movie->returned()){
            $this ->moviesInStore [] = $movie;
        }
        else{
            $this->moviesRented [] =$movie;
        }
    }
    public function listOfmovies(){
        echo "Movies in inventory".PHP_EOL;
        foreach ($this->moviesInStore as $movie){
            echo $movie->getTitle().PHP_EOL;
            echo $movie->getAverageRating().PHP_EOL;

        }
        echo "Movies rented".PHP_EOL;
        foreach ($this->moviesRented as $movie){
            echo $movie->getTitle().PHP_EOL;
            echo $movie->getAverageRating().PHP_EOL;

        }
    }
    public function checkOut(Video $movie){
        $movie ->checkingOut();
        $this->moviesRented [] = $movie;
        array_splice($this->moviesInStore, array_search($movie,$this ->moviesInStore),1);
    }
    public function returnMovie(Video $movie){
        $movie ->returned();
        $this->moviesInStore [] = $movie;
       array_splice($this->moviesRented,array_search($movie,$this ->moviesRented),1);
    }
    public function addUserRating(Video $movie,$rating){
        $movie->addRating($rating);
    }

    /**
     * @return array
     */
    public function getMoviesInStore(): array
    {
        return $this->moviesInStore;
    }

    /**
     * @return array
     */
    public function getMoviesRented(): array
    {
        return $this->moviesRented;
    }
    public function findObjectByTitleA($title){
        $array = $this->moviesInStore;

        foreach ( $array as $element ) {
            if ( $title == $element->getTitle() ) {
                return $element;
            }
        }

        return false;
    }
    public function findObjectByTitleB($title){
        $array = $this->moviesRented;

        foreach ( $array as $element ) {
            if ( $title == $element->getTitle() ) {
                return $element;
            }
        }

        return false;
    }





}

$VideoStoreTest = new Store();
$VideoStoreTest->addMovie(new Video("The Matrix"));
$VideoStoreTest->addMovie(new Video("Godfather II"));
$VideoStoreTest->addMovie(new Video("Star Wars Episode IV: A New Hope"));

$VideoStoreTest->listOfmovies();
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[0],4);
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[0],7);
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[0],3);
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[1],9);
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[1],7);
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[1],8);
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[2],6);
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[2],6);
$VideoStoreTest->addUserRating($VideoStoreTest->getMoviesInStore()[2],9);


$VideoStoreTest->listOfmovies();
$VideoStoreTest->checkOut($VideoStoreTest->getMoviesInStore()[0]);


$VideoStoreTest->listOfmovies();
$VideoStoreTest->returnMovie($VideoStoreTest->getMoviesRented()[0]);
$VideoStoreTest->listOfmovies();
$VideoStoreTest->checkOut($VideoStoreTest->getMoviesInStore()[0]);
$VideoStoreTest->returnMovie($VideoStoreTest->getMoviesRented()[0]);

while (true) {
    echo "Choose the operation you want to perform \n";
    echo "Choose 0 for EXIT\n";
    echo "Choose 1 to fill video store\n";
    echo "Choose 2 to rent video (as user)\n";
    echo "Choose 3 to return video (as user)\n";
    echo "Choose 4 to list inventory\n";
    echo "Choose 5 to add rating\n";

    $command = (int)readline();

    switch ($command) {
        case 0:
            echo "Bye!";
            die;
        case 1:
            echo "enter title of the movie".PHP_EOL;
            $q=readline();
            $VideoStoreTest->addMovie(new Video("{$q}") );
            break;
        case 2:
            $VideoStoreTest->listOfmovies();
            echo "enter title of the movie".PHP_EOL;
            $q=readline();
            $VideoStoreTest->checkOut($VideoStoreTest->findObjectByTitleA($q));
            break;
        case 3:
            $VideoStoreTest->listOfmovies();
            echo "enter title of the movie".PHP_EOL;
            $q=readline();
            $VideoStoreTest->returnMovie($VideoStoreTest->findObjectByTitleB($q));
            break;
        case 4:
            $VideoStoreTest->listOfmovies();
            break;
        case 5:
            $VideoStoreTest->listOfmovies();
            echo "enter title of the movie".PHP_EOL;
            $q=readline();
            echo "enter the rating 1-10".PHP_EOL;
            $a =readline();
            $VideoStoreTest->addUserRating($VideoStoreTest->findObjectByTitleA($q),$a);

        default:
            echo "Sorry, I don't understand you..";
    }
}


