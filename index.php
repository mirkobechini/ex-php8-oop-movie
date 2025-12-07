<?php
require_once "./Traits/Rateable.php";
require_once "./Models/Director.php";
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

require_once "./data/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php include_once "./components/Header.php"; ?>

    <main>
        <div class="container my-2">
            <div class="row row-cols-3 g-3">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body position-relative">
                                <h5 class="card-title"><?php echo $movie->getTitle(); ?></h5>
                                <p class="card-text mb-1"><strong>Regista: </strong><?php echo $movie->getDirector()->getFullName(); ?></p>
                                <p class="card-text mb-1">Durata: <?php echo $movie->getDuration(); ?> min</p>
                                <span class="badge text-warning position-absolute top-0 end-0"><?php echo $movie->getRating(); ?>/10</span>

                                <div class="mt-2 d-flex gap-1 flex-wrap">
                                    <?php foreach ($movie->getGenre() as $genre) { ?>
                                        <span class="rounded-pill bg-primary text-white px-2 py-1"><?php echo $genre->name; ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <?php include_once "./components/Footer.php"; ?>
</body>

</html>