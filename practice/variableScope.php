<?php
    // function myFunction($age){
    //     echo "Age is = $age";
    // }
    // //myFunction('mahir');
    
    /* function hello(){
        global $name;
        //$name = 'Tarin';
        echo "Hello $name";
    }
    hello(); */
    //global $name;
    //echo $name;


    $name = 'Mahir';

    function sayBye(&$name){
        $name = 'Adnan';
        echo "bye $name";
    }
    sayBye($name);
    echo "<br>";
    echo $name;


?>