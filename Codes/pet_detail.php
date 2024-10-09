<?php
// Include database connection
require 'database.php'; // Adjust the path if necessary

// Get the pet ID from the URL
if (isset($_GET['pet_id'])) {
    $pet_id = intval($_GET['pet_id']);
    
    // Prepare a SQL statement to fetch the pet's details
    $stmt = $pdo->prepare("SELECT * FROM pets WHERE id = ?");
    $stmt->execute([$pet_id]);
    $pet = $stmt->fetch();

    // Check if pet exists
    if (!$pet) {
        die("Pet not found!");
    }
} else {
    die("No pet ID specified!");
}
?>
