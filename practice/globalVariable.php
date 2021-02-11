<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


function mahirBio(){
    $name = "Mahir Shahriar";
    $location   = "bd";
    echo $name;
    echo "<br>";
    echo $location;
    echo "<br>";
    global $a;

}

function tanzimBio(){
    $name = "Tanzim Anjum";
    $location   = "USA";
    echo $name;
    echo "<br>";
    echo $location;
    echo "<br>";
}
mahirBio();
echo "<br>";
tanzimBio();



?>


</body>
</html>