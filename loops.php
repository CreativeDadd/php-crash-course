<?php
/*======== Lopps    ========= */

/*
for loop:

    for(initialize; condition; increament){
        //code to run
};

while loop:
    while(condition){
        //code to run
    }

do while loop:
do{
    //code to be run
}while(condition);

foreach loop:
    foreach($array as $value){
        //code to be executed;
    }

*/

// for loop example:
    for($age = 1; $age <= 10; $age++){
        echo "Age: ". $age. " Years old". "<br>";
    }
    echo "<br>";
    echo "<br>";

//while loop:
    $y = 1;
    while($y <= 15){
        echo "Number - ". $y .".<br>";
        $y = $y + 1;
    }
    echo "<br>";
    echo "<br>";
//do while loop
$x = 6; 
do{
    //code to be run
    echo "Number - ". $x .".<br>";
        $x++;
}while($x <= 24);

echo "<br>";
echo "<br>";
 
//foreach loop eaxmples:

$blog_posts = ["First Post", "Second Post", "Third Post"];

echo "<h3>These Are The Post That Earn Most Income</h3><br>";
foreach($blog_posts as $post){
    
    echo <<<EOT
    <h5>$post,<span> I love it so much.</span></h5> 
    EOT;
}

echo "<br>";
echo "<br>";
//index of the foreach array, if you wanna get the index:
    $blogs = ["post1", "post2", "post3", "post4"];
    foreach($blogs as $index => $blog){
        echo $index  . " - " . $blog. "<br>"; //index will start fro  '0'
        echo $index + 1 . " - " . $blog. "<br>"; //index will start from 1
    }

echo "<br>";
echo "<br>";

    // associative arrays foreach lop:
    $person = [
        'firstName' => "Brad",
        'lastName' => "Traversy",
        'email' => "brad@gmail.com"
    ];

    foreach($person as $key => $value){
        echo $key . " - " . $value ."<br>";
    }

