<?php
//conditional statments and functions in php
//if ststemenr

//days of the week
$t = date("l");
echo $t . "<br>";


if( $t == "Sunday") {
    echo "This is  the first day of the week";
} else{
    echo "This is not the first day of the week";
}

echo "<br>";

$month = [1,3,5];


if(empty($month)){
    echo "Which month are we in?";
} elseif($month == "Apr"){
    echo "we are in the month of April 2025";
}else{
    $month = date("M");
    echo "This is the month of ". $month;
}

// switch conditional
$dates = date("d");
echo $dates;
echo "<br>";
// ternary operator
$show_date = !empty($dates)? "Todays date is ". $dates : "No date record available";
echo $show_date;

echo "<br>";

// shorter form of ternery operator:
    $show_date =  "Todays date is ". $dates ?? null;
    echo $show_date;

// let's look inti switch"
echo "<br>";
$favcolor = "green";
switch($favcolor){
    case 'red':
        echo "You favourite colour is Red";
        break;
    case 'blue':
        echo "You favourite colour is blue";
        break;
    case 'green':
        echo "You favourite colour is Green";
        break;
    default:
        echo "Your favourite colour is not on our list.";
}
























?>