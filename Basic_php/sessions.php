<?php
session_start();
$_SESSION['username'] = 'php';
$_SESSION['pass'] = 'xyz';

echo "<br>your data was saved";
?>