<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO information (first_name,last_name,email)
    VALUES ('adiba', 'rahman', 'adiba@gmail.com'),
           ('mahir', 'dhahriar', 'sdfsdfds@gmail.com')";

$conn -> exec($sql);
    echo "data insurted";
}catch(PDOException $e){
    echo $e -> getMessage();
}
$conn=null; 

?>