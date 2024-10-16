<?php
// db.php
$host = 'localhost'; // Change this if your host is different
$dbname = 'pet_adoption'; // Database name
$username = 'root'; // Your database username
$password = ''; // Your database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
?>
