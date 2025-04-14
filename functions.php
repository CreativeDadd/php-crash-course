<?php
// funtion defination
function register(){
    echo "registered members";
}
register();
echo "<br>";
echo "<br>";

//function returning value:
function addNum($n1, $n2){
    return $n1 + $n2;
}
$sum = addNum(5,9);
echo $sum;
echo "<br>";
echo "<br>";

//annanymouse functiom

$personnels = function($firstName, $lastName, $position){
    echo "Position: ". $position . " - " . "$firstName" . "  " . $lastName . '.';
};

echo $personnels("Mr. Adebisi", "Emmanuel", "Managing direction");

//let's create a list of company staff members fron associative array and arro function:

/*Arrow funtion is like this */
echo '<br>';
$staffCount = fn($n1, $n2) => $n1 + $n2;

echo $staffCount(4, 6);
//or
// $staff = fn($staff1, $staff2) => {
//     echo $staff1 . " " . $staff2;
// }

// $staff();

// the variable scope in function":



