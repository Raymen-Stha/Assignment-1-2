<?php
session_start();
require 'connections/db.php'; // Your database connection file

if (isset($_POST['register'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Insert new user into the database
    $query = "INSERT INTO users (fullName, email, password) VALUES (:fullName, :email, :password)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':fullName', $fullName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
    // Set success message in session
    $_SESSION['message'] = 'Account created successfully!';
    header("Location: Successful creation.php"); // Redirect to avoid form resubmission
}

if (isset($_POST['login'])) {
    $loginName = $_POST['loginName'];
    $loginPassword = $_POST['loginPassword'];

    // Fetch user from the database
    $query = "SELECT * FROM users WHERE fullName = :fullName";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':fullName', $loginName);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($loginPassword, $user['password'])) {
        // Successful login
        $_SESSION['username'] = $user['fullName'];
        $_SESSION['message'] = 'Login successful!';
        header("Location: successful login.php");
    } else {
        $_SESSION['error'] = 'Invalid login details!';
        header("Location: error login.php");
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
}
?>

