function toggleAnimalDetails() {
    const otherAnimalsSelect = document.getElementById('other_animals');
    const animalDetailsDiv = document.getElementById('animal_details');

    if (otherAnimalsSelect.value === 'yes') {
        animalDetailsDiv.style.display = 'block';
    } else {
        animalDetailsDiv.style.display = 'none';
    }
}

function showPetDetails(petId) {
    const petDropdown = document.getElementById('pet_dropdown');
    const petDetailsDiv = document.getElementById('pet-details');
    const selectedOption = petDropdown.options[petDropdown.selectedIndex];

    if (petId) {
        // Populate the details based on the selected option's data attributes
        document.getElementById('pet_name').innerText = selectedOption.getAttribute('data-name');
        document.getElementById('pet_age').innerText = selectedOption.getAttribute('data-age');
        document.getElementById('pet_breed').innerText = selectedOption.getAttribute('data-breed');
        document.getElementById('pet_gender').innerText = selectedOption.getAttribute('data-gender');
        document.getElementById('pet_color').innerText = selectedOption.getAttribute('data-color');
        document.getElementById('pet_location').innerText = selectedOption.getAttribute('data-location');
        document.getElementById('pet_weight').innerText = selectedOption.getAttribute('data-weight');
        document.getElementById('pet_height').innerText = selectedOption.getAttribute('data-height');
        document.getElementById('pet_vaccinated').innerText = selectedOption.getAttribute('data-vaccinated');
        document.getElementById('pet_house_trained').innerText = selectedOption.getAttribute('data-house_trained');
        document.getElementById('pet_neutered').innerText = selectedOption.getAttribute('data-neutered');
        document.getElementById('pet_microchipped').innerText = selectedOption.getAttribute('data-microchipped');
        document.getElementById('pet_description').innerText = selectedOption.getAttribute('data-description');
        document.getElementById('pet_medical_history').innerText = selectedOption.getAttribute('data-medical_history');
        document.getElementById('pet_special_needs').innerText = selectedOption.getAttribute('data-special_needs');

        // Update the image
        document.getElementById('pet_image').src =  selectedOption.getAttribute('data-image');

        // Show the pet details div
        petDetailsDiv.style.display = 'block';
    } else {
        // Hide the pet details div if no pet is selected
        petDetailsDiv.style.display = 'none';
    }
}
