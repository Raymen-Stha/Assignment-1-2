<?php
    require 'connections/Login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Modal</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="content">
        <div class="nav-right">
            <button class="login-btn" id="loginRegisterBtn">Login/Register</button>    
        </div>

        <!-- Modal for Create Account / Login -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>

                <!-- Flex container for image and form -->
                <div class="modal-body">
                    <!-- Create Account Form -->
                    <div id="createAccountForm" class="form-container">
                        <form method="POST" action="">
                            <h2>Create Your Account</h2>
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" required>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>

                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>

                            <button type="submit" name="register">Create Account</button>
                            <p>Already have an account? <a href="#" id="switchToLogin">Sign In</a></p>
                        </form>
                    </div>

                    <!-- Image Container -->
                    <div class="image-container">
                        <img src="pets/register.png" alt="Register Image">
                    </div>
                </div>

                <!-- Login Form -->
                <div id="loginForm" class="form-container" style="display: none;">
                    <form method="POST" action="">
                        <h2>Log In to Your Account</h2>
                        <label for="loginName">Full Name:</label>
                        <input type="text" id="loginName" name="loginName" required>

                        <label for="loginPassword">Password:</label>
                        <input type="password" id="loginPassword" name="loginPassword" required>

                        <button type="submit" name="login">Log In</button>
                    </form>
                    <div class="image-container">
                        <img src="pets/login.png" alt="Login Image">
                    </div>
                    <p>Don't have an account? <a href="#" id="switchToCreateAccount">Create One</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="model-box.js"></script>
</body>
</html>