<?php 
// array is a variable that can hold more than one value.

$numbers = [100, 200, 300, 400, 500];
$fruits = array("Apple", "Orange", "Banana");
 // the var_dump function is used to display the content of an array
var_dump($numbers);
echo "<br>";
// the print_r function is used to display the content of an array also.
print_r($numbers);
echo "<br>";

// echo $fruits is wrong because it is an array, and an array is not a string.

// lets do multiplication with array of numbers.

echo $numbers[0] + 5;
echo "<br>";
echo $numbers[0]*$numbers[1] * $numbers[2] * $numbers[3] * $numbers[4];

// let's create an associative array
echo "<br>";
$colors = [ 
    "red" => "#FF0000",
    "blue" => "00FF00"
    ,
    "green" => "0000FF", ];

    echo $colors["red"];
    echo "<br>";
    // lets create an associative array with personnels email and age
    $personnels = [
        "jane@admn.com" => 35,
        "Babatunde@gmail.com" => 30,
        "Adeola@gmail.com" => 20,
        "Adeyemi@gmail.com" => 22,
    ];
    echo "<br>";
    echo $personnels["Adeola@gmail.com"];
    echo "<br>";

// arry flip function
    $newPersonnels = array_flip($personnels);
    echo "<br>";

    print_r($newPersonnels);
    echo "<br>";


// lets concatenate the array with double quotes
echo " <h3>Adoela is "  . $personnels['Adeola@gmail.com'] .  " years old and her email is "  . $newPersonnels[20] ."</h3>"; 
 
// lets concatenate the array with heredoc
echo <<<EOT
<h3 style="color:#ff0000;">Adoela is {$personnels['Adeola@gmail.com']}  years old and her email is   {$newPersonnels[20]} </h3>
EOT;

// now, lets create an associative array with personnels email and age and display them in a table
$personnels = [
    "jane" => 35,
    "Babatunde" => 30,
    "Adeola" => 20,
    "Adeyemi" => 22,
];
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Age</th></tr>";
foreach ($personnels as $name => $age) {
    echo "<tr><td>$name</td><td>$age</td></tr>";
}
echo "</ table>";
echo "<br>";
echo "<br>";

// let's create an associative multidimentional array:
 echo $students[2]["name"];
 echo "<br>";
$students = [ ["name" => "Adeola", "class" => "ss3", "age" => 20], ["name" => "Adeyemi", "class" => "ss3", "age" => 22], ["name" => "Babatunde", "class" => "ss3", "age" => 30], ["name" => "Jane", "class" => "ss3", "age" => 35] ];
//display the array in a table
echo "<table border='1' style='border-collapse: collapse; margin: 30px;'>";
echo "<tr><th>Name</th><th>Class</th><th>Age</th></tr>";
foreach ($students as $student) {
    echo "<tr><td>{$student['name']}</td><td>{$student['class']}</td><td>{$student['age']}</td></tr>";
}
echo "</ table>";

//  let's create a 3D multidimentional Array (Array inside an array inside an array 😅).

$school = [
    "Class A" => [
        "boys" => [
            ["name" => "David", "age" => 14],
            ["name" => "Emeka", "age" => 13],
        ],
        "girls" => [
            ["name" => "Tolu", "age" => 14],
        ]
    ],
    "Class B" => [
        "boys" => [
            ["name" => "Victor", "age" => 15],
        ],
        "girls" => [
            ["name" => "Ada", "age" => 15],
            ["name" => "Zainab", "age" => 14],
        ]
    ]
];

// let's access Ada's data
echo <<<EOT
<p>{$school['Class B']['girls'][1]['name']} is in Class B and she is a  {$school['Class B']['girls'][1]['age']}  years old girl.</p> 
EOT;
echo "<br>";
// let's access Victor's data
echo <<<EOT
<p>{$school['Class B']['boys'][0]['name']} is in Class B and he is  {$school['Class B']['boys'][0]['age']}  years old boy.</p>
EOT;

// let's display the array in a table
echo "<table border='1' style='border-collapse: collapse; margin: 30px; padding: 20px;'>";
echo "<thead><tr><th>Class</th><th>Gender</th><th>Name</th><th>Age</th></tr></thead>";
echo "<tbody>";
foreach ($school as $class => $students) {
    foreach ($students as $gender => $student) {
        foreach ($student as $student) {
            echo "<tr><td>$class</td><td>$gender</td><td>{$student['name']}</td><td>{$student['age']}</td></tr>";
        }
    }
}
echo "</tbody>";
echo "</ table>";


// we are building a register app using php on same page.



// Initialize the students array (could come from a database or session)
$students = [
    ["name" => "John", "age" => 16, "email" => "john@example.com"],
    ["name" => "Adeola", "age" => 15, "email" => "adeola@example.com"],
    ["name" => "Maria", "age" => 17, "email" => "maria@example.com"]
];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newName = $_POST["name"] ?? "";
    $newAge = $_POST["age"] ?? "";
    $newEmail = $_POST["email"] ?? "";

    // Basic validation
    if ($newName && $newAge && $newEmail) {
        $students[] = ["name" => $newName, "age" => $newAge, "email" => $newEmail];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Manager</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        form { max-width: 400px; }
        input[type="text"], input[type="number"], input[type="email"] {
            width: 100%; padding: 8px; margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<h2>📋 Student Records</h2>
<table>
    <thead>
        <tr><th>Name</th><th>Age</th><th>Email</th></tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= htmlspecialchars($student["name"]) ?></td>
                <td><?= htmlspecialchars($student["age"]) ?></td>
                <td><?= htmlspecialchars($student["email"]) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h3>➕ Add New Student</h3>
<form method="POST">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Age:</label>
    <input type="number" name="age" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <input type="submit" value="Add Student">
</form>

</body>
</html>





    