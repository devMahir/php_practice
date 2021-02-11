<?php

class Cars{
    static $name = "Alien";
    static $color = "black";
    public $price = 5000000;

    static function model(){
        echo Cars::$name;
    }
}
echo Cars::$color;
?>