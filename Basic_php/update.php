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


$sql = "UPDATE `phpdata` SET `name` = 'Lenovo legion 100' WHERE `phpdata`.`sno` = 9";
$result = mysqli_query($conn , $sql);

// $no = mysqli_num_rows($result);
echo "$result successfully updated";

// if($no>0){
//     while($row = mysqli_fetch_assoc($result))
//     {
//         echo "<br>";
//         echo  $row['sno']." - ".$row['feedback'];
//     }
// }
?>