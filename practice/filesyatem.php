<?php 

    //read a file
    // $quotes = readfile('readme.txt');
    // echo $quotes;


    $file = 'readme.txt';
    if (file_exists($file)) {

        // to read the file
        //echo readfile($file);

        // to copy the file 
        //copy($file, 'readme1.txt');     //   It will copy the file and add a new one.

        // show the path of the page
        // realpath($file);

        //file size
        // filesize($file);

        //rename file
        // rename($file, 'something.txt');

        //make a directory(folder);
        //mkdir('quotes');



    }else{
        echo 'file does not exist';
    }
?>