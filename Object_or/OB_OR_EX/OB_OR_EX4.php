<?php

class Movie{
    private string $name;
    private string $studio;
    private string $rating;
    public function __construct($name, $studio,$rating)
    {
        $this->name=$name;
        $this->studio=$studio;
        $this->rating = $rating;
    }
    private array $PGMovies;

    public function getPG(array  $Movies){
        foreach ($Movies as $movie){
            if($movie->rating == "PG"){
                $this->PGMovies[] = $movie;
            }

        }
    return $this->PGMovies;
    }
}


$a = new Movie("Casino Royale","Eon Productions","PG13");
$b = new Movie("Glass","Buena Vista International","PG13");
$a = new Movie("Spider-Man: Into the Spider-Verse","Columbia Pictures","PG");