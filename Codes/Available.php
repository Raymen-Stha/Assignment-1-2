<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryFriends - Pet Adoption</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="available.css">
</head>
<body>

        <!-- Header Section -->
        <?php
   include "Header.php"
   ?>
   <!-- Top Section with Heading and Search Bar -->
   <section class="top-section">
        <h2>The List of Available Pets We Have</h2>
    </section>

    <section class="hero">   
        <section class="pet-listings">

                <?php 
                    require 'connections/fetch_pets.php';
                    foreach ($pets as $pet): ?>
                    <div class="pet-card">
                        <img src="pets/<?php echo $pet['image']; ?>" alt="<?php echo $pet['name']; ?>">
                        <h3><?php echo htmlspecialchars($pet['name']); ?></h3>
                        <div class = location>
                        <img src="Icons/Communication/location_on.svg">
                        <h4><?php echo htmlspecialchars($pet['location']); ?> </h2> 
                        </div>
                        <div class= "pet_info">
                        <p>Age:  <div class= "pet_info_box"> <?php echo htmlspecialchars($pet['age']);?> years</div></p>
                        <p>Breed:  <div class= "pet_info_box"> <?php echo htmlspecialchars($pet['breed']); ?></div></p>
        
                        </div>
                            <div= class="pet-btn">
                            <a href="adopt.php">
                              <button class="adopt-btn">Adopt</button>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
        
            </section>
                <!-- Adoption Process Section -->
                <section class="adoption-process">
                    <section class= sticky>
                    <h2>Adopt or Rehome a Pet in Just </h2>
        <h4>3 Easy Steps</h4>
        <div class="steps">
            <div class="step">
                <h3>Step 1</h3>
                <img src="Logo\steps\step1.svg">
                <p>Look around for pets you want to adopt</p>
            </div>
            
            <div class="step">
                <h3>Step 2</h3>
                <img src="Logo\steps\step3.svg">
                <p>Fill the form  after clicking on adopt on any of the pets</p>
            </div>
            <div class="step">
                <h3>Step 3</h3>
                <img src="Logo\steps\step2.svg">
                <p>Wait for Us to veryfy and send you and conformation email</p>
            </div>
        </div>
                    </section>
            </section>
    </section>    
     <!-- Footer Section -->
     <?php
   include "footer.php";
   ?>
</body>
</html>
