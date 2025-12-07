<?php

// Directors
$spielberg = new Director("Steven", "Spielberg", 77);
$nolan = new Director("Christopher", "Nolan", 54);
$tarantino = new Director("Quentin", "Tarantino", 61);
$villeneuve = new Director("Denis", "Villeneuve", 57);

// Genres
$adventure = new Genre("Adventure", "Adventure movie with dinosaurs");
$scienceFiction = new Genre("Science Fiction", "A science fiction movie about aliens and space");
$action = new Genre("Action", "High-octane action sequences");
$drama = new Genre("Drama", "Emotional and character-driven stories");
$thriller = new Genre("Thriller", "Suspenseful and intense narratives");
$crime = new Genre("Crime", "Stories involving criminal activities");

// Movies
$movie1 = new Movie("Jurassic Park", 127, $spielberg, [], [$adventure, $scienceFiction], 8.5);
$movie2 = new Movie("E.T.", 115, $spielberg, [], [$scienceFiction, $drama], 7.9);
$movie3 = new Movie("Inception", 148, $nolan, [], [$scienceFiction, $action, $thriller], 8.8);
$movie4 = new Movie("Pulp Fiction", 154, $tarantino, [], [$crime, $drama], 8.9);
$movie5 = new Movie("Dune", 155, $villeneuve, [], [$scienceFiction, $adventure, $drama], 8.0);
$movie6 = new Movie("The Dark Knight", 152, $nolan, [], [$action, $crime, $drama], 9.0);

// Array di film
$movies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6];
