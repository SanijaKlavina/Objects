<?php
class Movie {
    private $title;
    private $studio;
    private $rating;
    private $movies;

    public function __construct($title, $studio, $rating){
       $this->title = $title;
       $this->studio = $studio;
       $this->rating = $rating;
    }
    public function createMovie(): string {
        return $this->title. $this->studio. $this->rating;
    }

    public function getPG($movies) {
        $moviePg = [];
       foreach($this->movies as $this->rating){
           if($this->rating === "PG"){
               $moviePg[] = $movies;
           }
       }
        return $moviePg;

    }
}

/*$movies = [
    $movie1 = new Movie("Casino Royale", "Eon Productions", "PG13"),
    $movie2 = new Movie("Glass", "Buena Vista International", "PG13"),
    $movie3 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
];*/

/*$movie = $movies;
var_dump($movie->getPg($movies));*/
$movies = $movie1 = new Movie("Casino Royale", "Eon Productions", "PG13");

var_dump($movies->getPg($movies));

