<?php
//   require ('data_connection.php');  //This is get someone errors then solve first it and go to next line.
//   include ('data_connection.php'); //This is get something error so that ignore and go to next line.

    // $fread = readfile("exa.txt");

    $readfile = fopen("exa.txt", "r");
    if(!$readfile)
    {
        die("sorry some error occured");
    }

    $cont = fread($readfile ,filesize("exa.txt"));
    echo $cont;
    
?>

