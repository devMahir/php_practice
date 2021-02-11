<?php
require_once('db.php');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$sql = "INSERT INTO information (first_name,last_name,email) VALUES('$first_name','$last_name','$email')";
$result = mysqli_query($connection,$sql) or die (mysqli_error($connection));

if ($result == true) {
    header("location: messege.php");
}else{
    echo "problem";
}

?>