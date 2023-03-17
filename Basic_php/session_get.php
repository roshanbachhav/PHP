<?php

session_start();
if(isset($_SESSION[$email], $_SESSION[$password]))
{
    echo "<br> welcome ".$_SESSION[$email]."<br>";
    echo "your password is ".$_SESSION[$password];
    echo "<br> your data was saved";
    
}
else
{
    echo "please login first";
}
?>