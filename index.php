
<?php

class Director{
    public $name;
    public $last_name;
    public $age;

    function __construct($_name, $_last_name, $_age){
        $this->name = $_name;
        $this->last_name = $_last_name;
        $this->age = $_age;
    }
}
class Movie{
    public $title;
    public $duration;
    public $director;
    public $cast;
    public $genre;

    /**
     * @param string $_title
     * @param int $_duration
     * @param Director $_director
     * @param Actor[] $_cast Array di oggetti Actor
     */
    function __construct(string $_title, int $_duration, Director $_director, array $_cast, Genre $_genre){
        $this->title = $_title;
        $this->duration = $_duration;
        $this->director = $_director;
        $this->cast = $_cast;
        $this->genre = $_genre;
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

$movie1 = new Movie("Jurassic Park", 127, $director, [], new Genre("Adventure", "Aventure movie with dinosaurs"));
$movie2 = new Movie("E.T.", 115, $director, [], new Genre("Science Fiction", "A science fiction movie about an alien"));

var_dump($movie1);
var_dump($movie2);
var_dump($movie1->countActors());

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