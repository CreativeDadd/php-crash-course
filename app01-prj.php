
<?php
// we are building a register app using php on same page.
// start the session
session_start();

// Initialize the students array if not already set
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [
         ["name" => "John", "age" => 16, "email" => "john@example.com"],
    ];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newName = $_POST["name"] ?? "";
    $newAge = $_POST["age"] ?? "";
    $newEmail = $_POST["email"] ?? "";

    // Basic validation
    if ($newName && $newAge && $newEmail) {
        $_SESSION['students'][] = ["name" => $newName, "age" => $newAge, "email" => $newEmail];
    }
    
}

$students = $_SESSION['students'];
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





    