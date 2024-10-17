<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryFriends - Pet Adoption</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sucesserror.css">
</head>
<body>
    <!-- Header Section -->
    <?php
    include "Header.php";
    ?> 

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <p class="error-message">Error Logging In: Check Your Details Again</p>
            <a href="index.php"><button class="button">Go Back to Home</button></a>
        </div>
        <div class="hero-content">
            <div class="hero-topic">
                <h1>Give a New Life to </h1>
                <h1>Furry Friends</h1>
            </div>
            <p class="sub">Pet adoption and rehoming are both vital aspects of animal welfare, offering hope and a fresh start to pets in need. Open your heart and your home to a shelter pet.</p>
            <div class="hero-buttons">
                <a href="available.php"><button class="button">Adopt Now</button></a>
                <a href="About Us.php"><button class="button">About Us</button></a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <?php
    include "footer.php";
    ?>
</body>
</html>
