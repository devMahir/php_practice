<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST['email'];
    $pass  = $_REQUEST['pass'];

    if (empty($email)) {
        echo "Please insert your email address";
    }else{
        echo $email;<br>
        echo $pass;
    }
}

?>

<form action="" method="POST">
    <input type="text" name="email" placeholder="email address">
    <br>
    <input type="text" name="pass" placeholder="password"><br><br>
    <input type="submit" value="Done">
</form>


</body>
</html>