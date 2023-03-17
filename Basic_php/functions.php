<?php 
echo "This is Function of function.php \n";
 
function newfun($mymarks)
{
    $sum = 0;
    foreach($mymarks as $marks)
    {
        //$sum = $sum + $marks;
        $sum += $marks;
    }
    return $sum;
}
$roshan = [99,99,99,99,99,99];
$totalMarks = newfun($roshan);
echo "The total marks of \n600 out of $totalMarks \n";

function mobile($android)
{
    echo "The expensive mobiles is : $android \n";
}
// $phone = mobile("apple");

 ?>