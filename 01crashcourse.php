<?php 
$name = "Bola";
$age = 30;
$isMale = true;
$height = 1.85;
$salary = null;
echo $name . "<br>";
var_dump($isMale);
echo "<br>";

// using single quotes
//echo $name. ' is '. $age . ' years old';

//when using double qoutes
//echo "$name is $age years old";

// arithmetic operations
echo 5 + 5;
echo "<br>";
echo '5' + '6';
echo "<br>";
echo 10 * 6 . "<br>";

// to create a constant
define ("HOST", "localhost");
echo HOST."<br>";

define("PI", 3.14);
echo PI;

