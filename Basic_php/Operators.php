<?php
$a = 50;
$b = 5;

echo "The addition of a and b is ". $a + $b . "<br>";
echo "The Subtraction of a and b is ". $a - $b . "<br>";
echo "The Multiplication of a and b is ". $a * $b . "<br>";
echo "The Division of a and b is ". $a / $b . "<br>";
echo "The Modulo of a and b is ". $a % $b . "<br>";
echo "The power of a and b is ". $a ** $b . "<br>";
$c = $a.$b;
echo $c."<br>";

for($i=0;$i<50;$i++)
{
    echo $i."   ";
}

//If else 

echo "<br>";
if($a == $b)
{
    echo "A is equal to B"."<br>";
}
else
{
    echo "A is not equal to B"."<br>";
}


//while loop

// while($b != 10)
// {
//     echo $b."<br>";
// }

//For each loop

$arr = array("tv","mobile","laptop","tab");

foreach($arr as $data)
{
    echo $data."<br>";
}
?>