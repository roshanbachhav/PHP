<?php

# Assosition of Array

/*
$assoArray = array( "roshan" => "99",
"Vishal" => "100",
"Rv" => "90");

foreach($assoArray as $allarray)
{
echo $allarray."\n";
}
*/


# 2-Dimensional Array

/*
$ma = array(
    array(1, 0, 0),
    array(0, 1, 0),
    array(0, 0, 1)
);

for ($i = 0; $i < count($ma); $i++) {
    echo "\n";
    for ($j = 0; $j < count($ma[$i]); $j++) {
        echo $ma[$i][$j];
        echo " ";
    }
}
*/


#global and loacal variable
/*
$a = 10;
echo "The a is an $a \n";

function f()
{
    global $a;
    $a = 555;
    // global $a = 500;
    echo "The a is $a \n";
}

f();
*/

?>