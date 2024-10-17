<?php
// Include database connection
include 'db-1.php'; // Make sure this file connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST['name']; // Updated to match the HTML input name
    $phoneCode = ""; // You can set this if you have a country code input in the form
    $phone = $_POST['phone']; // Updated to match the HTML input name
    $email = $_POST['email']; // Updated to match the HTML input name
    $message = $_POST['message']; // Updated to match the HTML input name

    // Prepare SQL statement to prevent SQL injection
    $stmt = $pdo->prepare("INSERT INTO contact (full_name, phone_code, phone, email, message) VALUES (:fullName, :phoneCode, :phone, :email, :message)");

    // Bind parameters
    $stmt->bindParam(':fullName', $fullName);
    $stmt->bindParam(':phoneCode', $phoneCode); // This is left empty; adjust if needed
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
        alert('Application submitted successfully!');
        window.location.href = '../index.php'; // Redirect to home page after clicking OK
      </script>";
    } else {
        echo "<script>
        alert('Application submitted Failed!');
        window.location.href = '../index.php'; // Redirect to home page after clicking OK
      </script>";
    }
}
?>
