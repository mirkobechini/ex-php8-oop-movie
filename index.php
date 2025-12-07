
<?php

require_once("./Traits/Rateable.php");

require_once "./Models/Director.php";
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";


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