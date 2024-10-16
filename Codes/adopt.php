    <?php
    require 'connections/fetch_pets.php'; // Fetch pets from the database
    ?>
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
        <link rel="stylesheet" href="adopt.css">
        <script src="adopt.js" defer></script>
    </head>
    <body>
        <!-- Include header -->
        <?php include "Header.php"; ?>

        <h1>Pet Detail Form</h1>
        <div class="container">
            <form action="connections/submit.php" method="POST" class="submit-form">
                <h2>Select a Pet</h2>
                <select id="pet_dropdown" name="pet_dropdown" onchange="showPetDetails(this.value)">
                    <option value="">Select a pet</option>
                    <?php foreach ($pets as $pet): ?>
                        <option value="<?= $pet['id'] ?>" data-name="<?= $pet['name'] ?>" data-breed="<?= $pet['breed'] ?>" data-age="<?= $pet['age'] ?>" data-image="<?= $pet['image'] ?>" data-gender="<?= $pet['gender'] ?>" data-color="<?= $pet['color'] ?>" data-location="<?= $pet['location'] ?>" data-weight="<?= $pet['weight'] ?>" data-height="<?= $pet['height'] ?>" data-vaccinated="<?= $pet['vaccinated'] ?>" data-house_trained="<?= $pet['house_trained'] ?>" data-neutered="<?= $pet['neutered'] ?>" data-microchipped="<?= $pet['microchipped'] ?>" data-description="<?= $pet['description'] ?>" data-medical_history="<?= $pet['medical_history'] ?>" data-special_needs="<?= $pet['special_needs'] ?>">
                            <?= $pet['name'] ?> | <?= $pet['breed'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <div class="pet-details" id="pet-details" style="display:none;">
                    <h2>Pet Details</h2>
                    <img id="pet_image" src="" alt="" style="width: 200px; height: auto;">
                    <p><strong>Name:</strong> <span id="pet_name"></span></p>
                    <p><strong>Age:</strong> <span id="pet_age"></span></p>
                    <p><strong>Breed:</strong> <span id="pet_breed"></span></p>
                    <p><strong>Gender:</strong> <span id="pet_gender"></span></p>
                    <p><strong>Color:</strong> <span id="pet_color"></span></p>
                    <p><strong>Location:</strong> <span id="pet_location"></span></p>
                    <p><strong>Weight:</strong> <span id="pet_weight"></span></p>
                    <p><strong>Height:</strong> <span id="pet_height"></span></p>
                    <p><strong>Vaccinated:</strong> <span id="pet_vaccinated"></span></p>
                    <p><strong>House Trained:</strong> <span id="pet_house_trained"></span></p>
                    <p><strong>Neutered:</strong> <span id="pet_neutered"></span></p>
                    <p><strong>Microchipped:</strong> <span id="pet_microchipped"></span></p>
                    <p><strong>Description:</strong> <span id="pet_description"></span></p>
                    <p><strong>Medical History:</strong> <span id="pet_medical_history"></span></p>
                    <p><strong>Special Needs:</strong> <span id="pet_special_needs"></span></p>
                </div>

                <h2>Personal Information</h2>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <h2>Address</h2>
                <label for="street_name">Street Name:</label>
                <input type="text" id="street_name" name="street_name" required>

                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" required>

                <label for="town">Town:</label>
                <input type="text" id="town" name="town" required>

                <h2>Home Situation</h2>
                <label>Do you have a garden?</label>
                <input type="radio" id="garden_yes" name="garden" value="yes" required>
                <label for="garden_yes">Yes</label>
                <input type="radio" id="garden_no" name="garden" value="no">
                <label for="garden_no">No</label>

                <label for="members">Number of members:</label>
                <input type="number" id="members" name="members" required>

                <label for="children">Number of children:</label>
                <input type="number" id="children" name="children" required>

                <label for="youngest_child_age">Age of youngest child:</label>
                <input type="number" id="youngest_child_age" name="youngest_child_age" required>

                <h2>Other Information</h2>
                <label for="other_animals">Do you have any other animals in the home?</label>
                <select id="other_animals" name="other_animals" onchange="toggleAnimalDetails()">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>

                <div id="animal_details" style="display:none;">
                    <label for="animal_type">Type of animal:</label>
                    <select id="animal_type" name="animal_type">
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                    </select>

                    <label for="animal_breed">Breed:</label>
                    <input type="text" id="animal_breed" name="animal_breed">
                </div>

                <label for="allergies">Anyone in the household allergic to pets?</label>
                <input type="radio" id="allergy_yes" name="allergies" value="yes" required>
                <label for="allergy_yes">Yes</label>
                <input type="radio" id="allergy_no" name="allergies" value="no">
                <label for="allergy_no">No</label>

                <h2>Review Your Information</h2>
                <div class="submit">
                    <button type="submit">Confirm</button>
                </div>
            </form>

        </div>

        <!-- Include footer -->
        <?php include "Footer.php"; ?>
    </body>
    </html>
