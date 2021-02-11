<?php

$conn = mysqli_connect('localhost', 'root', '', 'php');

/*if ($conn == false) {
    die("Error".mysqli_connect_error());
}*/

$sql = "INSERT INTO information (first_name, last_name, email) 
        VALUES ('Mahir', 'Shahriar', 'mahirshahriar10@gmail.com')";

if(mysqli_query($conn, $sql)){
    echo "Data insert successfully";
}else {
    echo "data not inserted";
}

mysqli_close($conn);

?>