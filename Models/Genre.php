<?php

class Genre{
    public $name;
    public $description;


    function __construct($_name, $_description){
        $this->name = $_name;
        $this->description = $_description;
    }
}

?>