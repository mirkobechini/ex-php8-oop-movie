
<?php

class Director{
    public $name;
    public $last_name;
    public $age;

    function __construct(string $_name, string $_last_name, int $_age){
        $this->name = $_name;
        $this->last_name = $_last_name;
        $this->age = $_age;
    }
}

trait Rateable{
    private $rating;

    function setRating(float $_rating){
        if($_rating >= 0 && $_rating <= 10){
            $this->rating = $_rating;
        }
    }

    function getRating(){
        return $this->rating ? "Rating: " . $this->rating . "/10" : "Non ancora valutato";
    }
}


class Movie{
    public $title;
    public $duration;
    public $director;
    public $cast;
    public $genre;
    use Rateable;

    /**
     * @param string $_title
     * @param int $_duration
     * @param Director $_director
     * @param Actor[] $_cast Array di oggetti Actor
     * @param Genre[] $_genre Array di oggetti Genre
     * @param float|null $_rating Rating opzionale del film
     */
    function __construct(string $_title, int $_duration, Director $_director, array $_cast, array $_genre, ?float $_rating = null){
        $this->title = $_title;
        $this->duration = $_duration;
        $this->director = $_director;
        $this->cast = $_cast;
        $this->genre = $_genre;
        if($_rating !== null){
            $this->setRating($_rating);
        }
    }

    function countActors(){
        return "\nNel film ci sono " . count($this->cast) . " attori";
    }
}

class Genre{
    public $name;
    public $description;


    function __construct($_name, $_description){
        $this->name = $_name;
        $this->description = $_description;
    }
}

$director = new Director("Steven", "Spielberg", 77);
$adventure = new Genre("Adventure", "Aventure movie with dinosaurs");
$scienceFiction = new Genre("Science Fiction", "A science fiction movie about an alien");

$movie1 = new Movie("Jurassic Park", 127, $director, [], [$adventure, $scienceFiction]);
$movie2 = new Movie("E.T.", 115, $director, [], [$scienceFiction]);
$movie1->setRating(8.5);

var_dump($movie1);
var_dump($movie2);
var_dump($movie1->countActors());
echo "\n Movie1: " . $movie1->title . " - " . $movie1->getRating();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <h1>PHP Movie</h1>
</body>
</html>