<?php
require 'db.php'; // Include database connection

try {
    // Query to fetch all pets
    $query = $conn->query('SELECT * FROM pets');
    $pets = $query->fetchAll(PDO::FETCH_ASSOC);

    // Check if pets are fetched correctly
    if (empty($pets)) {
        echo 'No pets found in the database.';
    }
} catch (PDOException $e) {
    echo 'Error fetching pets: ' . $e->getMessage();
}
?>
