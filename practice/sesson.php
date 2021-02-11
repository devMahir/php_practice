<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?PHP

$_SESSION['email']    = "mahirshahriar10@gmail.com";
$_SESSION['password'] = "12345";

echo $_SESSION['email']. "<br>";
session_unset();
echo $_SESSION['password'];

?>



</body>
</html>