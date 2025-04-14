<?php
$string = "Hello World";
//get the length of a string;
echo strlen($string);
echo "<br>";
// find the position of the first occurence of a substring in a string:
echo strpos($string, "W");
echo "<br>";
echo "<br>";
//reverse a string;
echo strrev($string);
echo "<br>";
echo "<br>";
//conver all characters to lowercase:
 echo strtolower($string);
echo "<br>";
echo "<br>";
//covert string to uppercase:
echo strtoupper($string);
echo "<br>";
echo "<br>";
//string replace
echo str_replace("Hello", "Hi", $string);
echo "<br>";
echo "<br>";
// return the position of a string specified by the offset and lenth:
echo substr($string, 0, 5);
echo "<br>";
echo "<br>";
echo substr($string, 5);
echo "<br>";
echo "<br>";
//starts with:
$test_boolean = str_starts_with($string, "Hello");
echo $test_boolean;
echo "<br>";
if($test_boolean){
    echo "YES";
}
echo "<br>";

//end with:
$test2 = str_ends_with($string, "d");
echo $test2;
echo "<br>";

if($test2){
    echo "Yes, it doea end with d";
}

// use of html special character is used for security of youor website app if you have form in tour web app:f
 $string2 = '<script>alert("oopsyyy!!!")</script>';
 // you are not protected here:
//  echo $string2;
 // but here, you are protectted:
 echo htmlspecialchars($string2);
 echo "<br>";
 echo "<br>";
// using specifiers: %s=string, %d=int and %f=float:
    printf("%s loves to  %s", 'Bola', 'Code!!!');
echo "<br>";
printf('%d years ago, I was %d years old', 22, 26);




