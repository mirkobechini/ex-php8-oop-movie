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

    function getFullName(){
        return $this->name . " " . $this->last_name;
    }
}

?>