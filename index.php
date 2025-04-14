<?php 
$name = "Mario";
$age = 42;
$isMale = true;

function info($name, $age, $isMale){
    echo "Your name is $name and you are $age years old\n";
    if($isMale && $age == 32){
        echo "You are a male and 32 years old";
    }
    elseif($isMale && $age == 30){
        echo "You are a male and 30 years old";
    }
}

echo info($name, $age, $isMale);


?>