<?php

$host = 'localhost'; // Your database host
$db = 'pet_adoption'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Output the error message and stop execution
    echo "Database connection failed: " . $e->getMessage();
    exit(); // Stop the script if connection fails
}
?>
