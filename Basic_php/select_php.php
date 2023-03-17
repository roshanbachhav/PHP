<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practicesql";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect: ---->" . mysqli_connect_error());
} else {
    echo " <br> Connection was successful <br>";
}


$sql = "SELECT * FROM `phpdata`";
$result = mysqli_query($conn , $sql);
$num = mysqli_num_rows($result);
echo var_dump($num);

if($num>0){
    $row = mysqli_fetch_assoc($result);
    echo "<br>";
    echo"------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
    echo var_dump($row)."<br>";
    while($row!=null)
    {
    echo "<br>";
    echo"------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row)."<br>";
    }
}
// echo mysqli_num_column($result);

// if($result)
// {
//     echo "The database connection was successfully........ <br>";
// }
// else
// {
//     echo "The database connection was not successful <br>";
// }
?>