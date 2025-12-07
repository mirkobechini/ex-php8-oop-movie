<?php

$director = new Director("Steven", "Spielberg", 77);
$adventure = new Genre("Adventure", "Aventure movie with dinosaurs");
$scienceFiction = new Genre("Science Fiction", "A science fiction movie about an alien");

$movie1 = new Movie("Jurassic Park", 127, $director, [], [$adventure, $scienceFiction]);
$movie2 = new Movie("E.T.", 115, $director, [], [$scienceFiction]);
$movie1->setRating(8.5);

?>