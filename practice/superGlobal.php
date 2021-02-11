<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$a = 50;
$b = 20;

function mahir(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
mahir();
echo $c;




?>


</body>
</html>