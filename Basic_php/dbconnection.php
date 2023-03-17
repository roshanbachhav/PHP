<?php 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "roshan";

// $conn = mysqli_connect($servername , $username , $password , $database);
// if(!$conn)
// {
//     die("feild connection ---> <br>". sqli_connect_error());
// }
// else
// {
//     echo "The connection was successful <br>";
// }

// $sql = "CREATE DATABASE roshan";
// mysqli_query($conn , $sql);


// $sql = "CREATE TABLE `example_TABLE`(`sno` INT PRIMARY KEY , `name` VARCHAR (50) , `age` VARCHAR(50))";


// $result = mysqli_query($conn , $sql);

// if($result)
// {
//     echo "The database connection was successfullyyyy <br>";
// }
// else
// {
//     echo "The database connection was not successful";
// }

$sql = "INSERT INTO `example_TABLE`(`sno` , `name` , `age`) VALUES (2,'Sachin Tendulkar',60)";
?>