<?php


// Database credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'Bola');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

// Create connection using mysqli
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Uncomment this line for debugging purposes only
echo 'Connected successfully';




// define('DB_HOST', 'localhost');
// define('DB_USER', 'brad');
// define('DB_PASS', '123456');
// define('DB_NAME', 'php_dev');

// // Create connection
// $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// var_dump($conn);
// // Check connection
// if ($conn->connect_error) {

//   die('Connection failed: ' . $conn->connect_error);
// }

// echo 'Connected successfully';


// $host = 'localhost';
// $db   = 'php_dev';
// $user = 'brad';
// $pass = '123456';
// $charset = 'utf8mb4';

// // Set DSN (Data Source Name)
// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// // Set PDO options
// $options = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Enable exceptions
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch assoc arrays
//     PDO::ATTR_EMULATE_PREPARES   => false,                  // Use real prepared statements
// ];

// try {
//     // Create PDO instance
//     $pdo = new PDO($dsn, $user, $pass, $options);
//     echo "Connected successfully using PDO!";
// } catch (PDOException $e) {
//     // Catch error
//     echo 'Connection failed: ' . $e->getMessage();
// }
// ?>

