<?php

class Genre{
    public $name;
    public $description;


    function __construct(string $_name, string $_description){
        $this->name = $_name;
        $this->description = $_description;
    }
}

?>