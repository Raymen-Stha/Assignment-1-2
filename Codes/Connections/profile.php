<?php
// Database configuration
$host = 'localhost';      // Use 'localhost' if using locally
$db = 'pet_adoption';  // Database name
$user = 'root';   // MySQL username
$pass = '';   // MySQL password

// Create a PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If there's a problem connecting to the database, display error
    die("Database connection failed: " . $e->getMessage());
}
?>
