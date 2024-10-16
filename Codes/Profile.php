<?php
// Include the database connection
require 'connections/db.php';

// Check if PDO is defined
if (!isset($pdo)) {
    die("Database connection was not established.");
}

// Get the pet ID from the URL
$pet_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch pet details from the database
$query = "SELECT * FROM pets WHERE id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$pet_id]);
$pet = $stmt->fetch();

if (!$pet) {
    die("Pet not found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryFriends - <?php echo htmlspecialchars($pet['name']); ?>'s Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap">
    <link rel="stylesheet" href="Profile.css">
</head>
<body>
    <!-- Header Section -->
    <?php include "Header.php"; ?>

    <div class="profile-container">
        <!-- Pet Header Info -->
        <div class="header">
            <h1>Hello, I'm <?php echo htmlspecialchars($pet['name']); ?>!</h1>
            <div class="pet-info">
                <img src="pets/<?php echo htmlspecialchars($pet['image']); ?>" alt="<?php echo htmlspecialchars($pet['name']); ?>" class="pet-image">
                <div class="pet-details">
                    <h2><?php echo htmlspecialchars($pet['name']); ?></h2>
                    <p><strong>Pet ID:</strong> <?php echo $pet['id']; ?></p>
                    <div class="location">
                        <img src="Icons/location_on.svg" alt="Location Icon">
                        <p><?php echo htmlspecialchars($pet['location']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pet Image Gallery -->
        <div class="gallery">
            <img src="pets/<?php echo htmlspecialchars($pet['image']); ?>" alt="<?php echo htmlspecialchars($pet['name']); ?>" class="main-image">
            <div class="thumbnail-container">
                <img src="pets/<?php echo htmlspecialchars($pet['image']); ?>" alt="Image 1">
                <!-- Add more images if available -->
                <img src="pets/<?php echo htmlspecialchars($pet['image']); ?>" alt="Image 2">
                <img src="pets/<?php echo htmlspecialchars($pet['image']); ?>" alt="Image 3">
                <img src="pets/<?php echo htmlspecialchars($pet['image']); ?>" alt="Image 4">
            </div>
        </div>

        <!-- Pet Story -->
        <div class="pet-story">
            <h3><?php echo htmlspecialchars($pet['name']); ?>'s Story</h3>
            <p><?php echo htmlspecialchars($pet['description']); ?></p>
            <ul class="pet-info-list">
                <li><?php echo htmlspecialchars($pet['can_live_with_kids']) ? 'Can live with children' : 'Not suitable for homes with children'; ?></li>
                <li><?php echo htmlspecialchars($pet['vaccinated']) ? 'Vaccinated' : 'Not vaccinated'; ?></li>
                <li><?php echo htmlspecialchars($pet['house_trained']) ? 'House-trained' : 'Not house-trained'; ?></li>
                <li><?php echo htmlspecialchars($pet['neutered']) ? 'Neutered' : 'Not neutered'; ?></li>
                <li><?php echo htmlspecialchars($pet['microchipped']) ? 'Microchipped' : 'Not microchipped'; ?></li>
            </ul>
        </div>

        <!-- Pet Details Grid -->
        <div class="pet-details-grid">
            <div class="detail-item">
                <p>Gender</p>
                <p><?php echo htmlspecialchars($pet['gender']); ?></p>
            </div>
            <div class="detail-item">
                <p>Breed</p>
                <p><?php echo htmlspecialchars($pet['breed']); ?></p>
            </div>
            <div class="detail-item">
                <p>Age</p>
                <p><?php echo htmlspecialchars($pet['age']); ?> months</p>
            </div>
            <div class="detail-item">
                <p>Color</p>
                <p><?php echo htmlspecialchars($pet['color']); ?></p>
            </div>
            <div class="detail-item">
                <p>Weight</p>
                <p><?php echo htmlspecialchars($pet['weight']); ?> lbs</p>
            </div>
            <div class="detail-item">
                <p>Height</p>
                <p><?php echo htmlspecialchars($pet['height']); ?> cm</p>
            </div>
        </div>

        <!-- Vaccination Table -->
        <div class="vaccination-table">
            <h3>Vaccination Details</h3>
            <table>
                <tr>
                    <th>Age</th>
                    <th>8th Week</th>
                    <th>14th Week</th>
                    <th>22nd Week</th>
                </tr>
                <tr>
                    <td>Vaccinated</td>
                    <td><?php echo htmlspecialchars($pet['vacc_8wk']); ?></td>
                    <td><?php echo htmlspecialchars($pet['vacc_14wk']); ?></td>
                    <td><?php echo htmlspecialchars($pet['vacc_22wk']); ?></td>
                </tr>
            </table>
        </div>

        <!-- Adoption Button -->
        <div class="adoption-button">
            <a href="adopt.php?pet_id=<?php echo $pet['id']; ?>" class="get-started-button">Adopt <?php echo htmlspecialchars($pet['name']); ?></a>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include "Footer.php"; ?>
</body>
</html>
