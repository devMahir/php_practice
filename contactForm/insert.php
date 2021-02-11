<?php
require_once('db.php');
$firstName=$_POST['first_name'];
$lastName=$_POST['last_name'];
$email=$_POST['email'];
$sql="INSERT INTO information(first_name,last_name,email) VALUES('$firstName','$lastName','$email')";
$result=mysqli_query($conn,$sql);
// Check connection
if ($result == TRUE) {
    header('location: collection.php');
}
?>