<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Detail Form</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="hero">
        <!-- Left Half: Pet Details -->
        <div class="pet-details">
            <h1>Available Pets</h1>
            <div class="pet-card">
                <img src="path_to_pet_image.jpg" alt="Pet Image">
                <h2>Pet Name</h2>
                <p>Breed: Breed Name</p>
                <p>Age: Age</p>
                <p>Location: Location</p>
                <p>Description: Brief description about the pet.</p>
            </div>
            <!-- Repeat pet cards as needed -->
        </div>

        <!-- Right Half: Form -->
        <div class="form-container">
            <h2>Pet Adoption Form</h2>
            <form action="submit.php" method="POST">
                <h3>Personal Information</h3>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <h3>Address</h3>
                <label for="street_name">Street Name:</label>
                <input type="text" id="street_name" name="street_name" required>

                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" required>

                <label for="town">Town:</label>
                <input type="text" id="town" name="town" required>

                <h3>Home Situation</h3>
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

                <h3>Other Information</h3>
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

                <h3>Review Your Information</h3>
                <button type="submit">Confirm</button>
            </form>
        </div>
    </div>
</body>
</html>
