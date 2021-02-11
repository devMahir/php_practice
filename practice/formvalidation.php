<?php
if (isset($_POST['submit'])) {
    // echo htmlspecialchars($_POST['name']);
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['number']);




    //check is email is ok or not

    if (empty($_POST['email'])) {
        echo "email is Required";
    }else{
        //echo htmlspecialchars($_POST['name']);
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {       //filter_vat => check is this email or not;
            echo "Email Must be a valid email address";
        }
    }

    //check is sting have no special carecter and filter it.

    if (empty($_POST['title'])) {
        echo "title is Required";
    }else{
        //echo htmlspecialchars($_POST['name']);
        $title = $_POST['title'];
        if (!preg_match( '/^[a-zA-Z/S]+$' , $title)) {           //preg_match => check it muct be letters and spaces only;
            echo "title Must be a valid title address";
        }
    }

    // check is string have no special carecter withot , for take more ingredients;

    if (empty($_POST['title'])) {
        echo "title is Required";
    }else{
        //echo htmlspecialchars($_POST['name']);
        $title = $_POST['title'];
        if (!preg_match( '/^[a-zA-Z\s]+)(,\s* [a-zA-Z\s]*)*$/' , $title)) {           //preg_match => check it muct be letters and spaces only;
            echo "title Must be a valid title address";
        }
    }





}

// htmlspecialchars => convert javascript to html [ for change the javascript code to send to the server from form]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Enter Email" >
            <input type="title" name="title" placeholder="title" >
            <input type="submit" name = "submit" value="submit">
        </form>
    </div>
</body>
</html>