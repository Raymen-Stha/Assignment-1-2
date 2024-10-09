<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryFriends - Pet Adoption</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="about.css">
</head>
<body>
    <!-- Header Section -->
        <?php
   include "Header.php"
   ?>

<div class="mission-section">
    <div class="mission-container">
        <img src="Pets/cat-about.png" alt="Cat Close-up" class="hero-image">
        <div class="mission-content">
            <h2>Our Mission</h2>
            <p><strong>Furry-Friends</strong> is a lifesaving nonprofit bringing pets and people together. We are here to create loving families.</p>
        </div>
    </div>
</div>

<div class="what-we-do-section">
    <div class="what-container">
        <div class=what-we-do-box>    
            <h2>What We Do</h2>
            <p>
                We're a safer, more professional, and ethical alternative to sites like Facebook, Preloved, Pets4Homes, and Gumtree.
                Our platform connects potential adopters with people who need to rehome their pets, dogs, and cats. This makes it easier for good people to adopt the right pet whilst maximizing the chance of pets finding their forever home.
            </p>
            <p>
                We offer a non-judgmental service to rehomers and give them full control of the process. We're also helping to reduce the number of animals going into shelters. This frees up space and resources for pets who have been abandoned, need immediate help, or specialist care.
            </p>
        </div>
        <div class= stat-box>
            <div class="stats">
                <div class="stat-item">
                    <span class="stat-number">4.2 million</span>
                    <span class="stat-label">pets Rehomed</span>
                </div>
                <hr>
                <div class="stat-item">
                    <span class="stat-number">6.8 million</span>
                    <span class="stat-label">pets adopted</span>
                </div>
            </div>    
        </div>
    </div>
</div>
<div class= image-foot>
    <div class="image-section">
        <img src="Pets/Woman with Dog.png" alt="Woman with Dog" class="image-full">
    </div>
</div>
    <!-- Footer Section -->
    <?php
   include "footer.php";
   ?>

</body>
</html>
