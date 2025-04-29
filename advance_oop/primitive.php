<?php
declare(strict_types=1);
require_once 'php_mvc_test.php';


$songs1 = new Song ('Star Love', 67);
$songObj1 = $songs1->name;

$songs2 = new Song('We Love Thee Oh Lord', 45);
$songObj2 = $songs2->name;

echo $songObj1; 
echo "<br>";
echo $songObj2;