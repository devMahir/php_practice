<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO information (first_name, last_name, email)
    VALUES ('adiba', 'rahman', 'adiba@gmail.com'),
           ('mahir', 'dhahriar', 'sdfsdfds@gmail.com')";

if ($conn -> query($sql) === TRUE) {
    echo "data inserted";
}else{
    echo "pproblem";
}
$conn -> close();

?>