<?php
require_once('db.php');
$id = $_GET['id'];
$dlt = "DELETE FROM information WHERE id = $id";
$r = mysqli_query($connection,$dlt);

if($r){
    header('location: all_contact.php');
}else {
    echo "problem";
}
?>