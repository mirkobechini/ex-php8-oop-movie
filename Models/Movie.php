<?php

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


?>