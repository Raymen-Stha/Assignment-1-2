<?php
require 'db-1.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $pet_id = $_POST['pet_dropdown'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $street_name = $_POST['street_name'];
    $postcode = $_POST['postcode'];
    $town = $_POST['town'];
    $garden = $_POST['garden'];
    $members = $_POST['members'];
    $children = $_POST['children'];
    $youngest_child_age = $_POST['youngest_child_age'];
    $other_animals = $_POST['other_animals'];
    $animal_type = isset($_POST['animal_type']) ? $_POST['animal_type'] : null;
    $animal_breed = isset($_POST['animal_breed']) ? $_POST['animal_breed'] : null;
    $allergies = $_POST['allergies'];

    // Prepare SQL statement
    $sql = "INSERT INTO adoption_applications (pet_id, first_name, last_name, phone, email, street_name, postcode, town, garden, members, children, youngest_child_age, other_animals, animal_type, animal_breed, allergies) 
            VALUES (:pet_id, :first_name, :last_name, :phone, :email, :street_name, :postcode, :town, :garden, :members, :children, :youngest_child_age, :other_animals, :animal_type, :animal_breed, :allergies)";
    
    // Prepare and execute the statement
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':pet_id' => $pet_id,
        ':first_name' => $first_name,
        ':last_name' => $last_name,
        ':phone' => $phone,
        ':email' => $email,
        ':street_name' => $street_name,
        ':postcode' => $postcode,
        ':town' => $town,
        ':garden' => $garden,
        ':members' => $members,
        ':children' => $children,
        ':youngest_child_age' => $youngest_child_age,
        ':other_animals' => $other_animals,
        ':animal_type' => $animal_type,
        ':animal_breed' => $animal_breed,
        ':allergies' => $allergies
    ]);

    // After successful insertion, show the success message
    echo "<script>
            alert('Application submitted successfully!');
            window.location.href = '../index.php'; // Redirect to home page after clicking OK
          </script>";
    exit(); // Stop further execution
}
?>
