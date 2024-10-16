<?php
// Start the session
session_start();
include 'db.php';  // Include the database connection

// Handle registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Insert the new user into the database using PDO
    $sql = "INSERT INTO users (fullName, email, password) VALUES (:fullName, :email, :password)";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fullName', $fullName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        
        if ($stmt->execute()) {
            echo "<script>alert('Account created successfully!');</script>";
        } else {
            echo "<script>alert('Error creating account.');</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $loginName = $_POST['loginName'];
    $loginPassword = $_POST['loginPassword'];

    // Check user credentials
    $sql = "SELECT * FROM users WHERE fullName = :loginName";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':loginName', $loginName);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch the user

        if ($user) {
            if (password_verify($loginPassword, $user['password'])) {
                // Password is correct, log the user in
                $_SESSION['user'] = $user['fullName'];
                echo "<script>alert('Login successful! Welcome, " . $_SESSION['user'] . "');</script>";
            } else {
                echo "<script>alert('Invalid password.');</script>";
            }
        } else {
            echo "<script>alert('User not found.');</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}
?>
