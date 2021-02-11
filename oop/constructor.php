<?php

class Cars{
    public $name = "corola";
    public $color = "yellow";
    public $price = "20M";

    public function __construct(){
        echo $this->name;
    }
}
$obj = new Cars();

?>
