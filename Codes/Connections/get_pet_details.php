<?php

require 'db.php'; 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM pets WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id' => $id]);
    $pet = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return pet details as JSON
    header('Content-Type: application/json');
    echo json_encode($pet);
} else {
    echo json_encode(['error' => 'No pet ID provided']);
}
?>
