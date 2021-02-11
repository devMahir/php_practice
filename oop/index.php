<?php

class Mahir{
    static $id = "181-35-2332";
    public $name = "Mahir Shahriar";
    public $email = "mahirshahriar@gmail.com";
    public function id(){
        echo mahir::$id;
    }
}
$idf = new Mahir;
$idf->id();


/*class Tanzim{
    $id = "181-35-2333";
    $name = "Zerin Tanzim Anzum";
    $email = "zerintanzim@gmail.com";
}*/
//$name = new Mahir();
class Popo{
    function score($a,$s,$b){
        $total = $a+$s+$b;
        echo "Taka Uthse popo r: ".$total."<br>";
    }
    function paper($a,$s,$b){
        $total = $a+$s+$b;
        echo "Taka Uthse paper er: ".$total;
    }
}
$popokhabo = new popo();
echo $popokhabo->score(30,30,40);
echo $popokhabo->paper(20,10,20);

/*echo $name->id;
echo "<br>";
echo $name->name;
echo "<br>";
echo $name->email;
echo "<br>";*/


?>