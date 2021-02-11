<?php

class Cars{
    public $name = "Alien";
    public $color = "black";
    public $price = 5000000;

    function mahir(){
        echo $this->name;
    }
}

$obj = new Cars();
$obj->mahir();
?>