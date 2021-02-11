<?php

//function Mahir($name, $roll){
//    echo "$name is a good Progrummer which roll is- $roll";
//}
//Mahir("Mahir", 2332);

function formatProduct($product){
    return "{$product['name']} costs $ {$product['price']} to buy <br>";
}
echo $formated = formatProduct(['name'  => 'milk', 'price' =>5.9]);

?>