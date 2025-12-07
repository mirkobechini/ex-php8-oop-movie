<?php

trait Rateable{
    protected $rating;

    function setRating(float $_rating){
        if($_rating >= 0 && $_rating <= 10){
            $this->rating = $_rating;
        }
    }

    function getRating(){
        return $this->rating ? "Rating: " . $this->rating . "/10" : "Non ancora valutato";
    }
}

?>