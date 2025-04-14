<?php
// //array
// $fruits = ['apple', 'range', 'pear'];
// //get length:
// echo count($fruits) .'<br>'; 
// //.search array:
// var_dump(in_array('apple', $fruits));
// echo '<br>';
// //add to arry:
// array_push($fruits, 'olive', 'cashew');
// array_unshift($fruits, 'pawpaw', 'wallnult');
// print_r($fruits);
// echo '<br>';
// echo '<br>';
// //remove from array:
// array_shift($fruits);
// array_pop($fruits);

// print_r($fruits);
// echo '<br>';
// echo '<br>';
// //remove a specific index and value:
//     unset($fruits[1]);
//     print_r( $fruits);
//     echo "<br>";
// //breaking arrays into chunks:
// $chuncked_array = array_chunk($fruits, 2);
// print_r($fruits);
// echo "<br>";

// //concatenate/combine arrays:
// $num1 = [1,2,3,4,5,6];
// $num2 = [10, 20, 30, 40, 50, 60];

// $num3 = array_merge($num1,$num2);
// $num4 = [...$num1, ...$num2];

// print_r($num3);
// echo '<br>';
// echo '<br>';
// print_r($num4);
// echo '<br>';
//// array key and array combine:
// $name = ['ruka', 'mola', 'ade'];
// $age = [23,34,56];
// $newCombine = array_combine($name, $age);
// print_r($newCombine);
// echo "<br>";
// $key = array_keys($newCombine);
// print_r($key);
// echo '<br>';

//array range:
$numbersRange_arr = range(1, 20);

// print_r($numbersRange_arr);

// array 'map' function:

$new_range_arr = array_map(function($numbersRange_arr){
    return "number " . $numbersRange_arr . "<br>"; 
}, $numbersRange_arr);

print_r($new_range_arr);
echo '<br>';
//array filter
$arr_filter = array_filter($numbersRange_arr, fn($numbersRange_arr)=> $numbersRange_arr <= 10);

print_r($arr_filter);
//reduce in array is used to add numbers together:

$redSum = array_reduce($numbersRange_arr, fn($carry, $numbersRange_arr) => $carry + $numbersRange_arr);

print_r($redSum);
















