<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

AND(&&) = Both are true then true;
OR (||) = Any one is true then true;
XOR ()  = one will true and one false;

<?php

$a = 0;
$b = 12;
$c = 1;

if ($a == 10 XOR $b == 12) {
    echo "all are ok";
}else{
    echo "something wrong";
}

?>
</body>
</html>