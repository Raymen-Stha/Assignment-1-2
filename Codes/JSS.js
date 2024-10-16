var nameError = document.getElementById('name-error');
var phoneError = document.getElementById('phone-error');
var countryCodeError = document.getElementById('country-code-error');
var emailError = document.getElementById('email-error');
var messageError = document.getElementById('message-error');
var submitError = document.getElementById('submit-error');

// Name validation
function validateName() {
    var name = document.getElementById('contact-name').value;

    if (name.length == 0) {
        nameError.innerHTML = "Name is required";
        return false;
    }

    nameError.innerHTML = '<p style="color: green">valid</p>';
    return true;
}

// Phone validation
function validatePhone() {
    var phone = document.getElementById('contact-phone').value;

    if (phone.length == 0) {
        phoneError.innerHTML = "Phone number is required";
        return false;
    }

    if (phone.length !== 10) {
        phoneError.innerHTML = "Number should be 10 digits";
        return false;
    }

    if (!phone.match(/^[0-9]{10}$/)) {
        phoneError.innerHTML = "Only digits allowed";
        return false;
    }

    phoneError.innerHTML = '<p style="color: green">valid</p>';
    return true;
}

// Country code validation
function validateCountryCode() {
    var countryCode = document.getElementById('contact-country-code').value;

    if (!countryCode.match(/^\+[0-9]{1,3}$/)) {
        countryCodeError.innerHTML = "Invalid country code";
        return false;
    }

    countryCodeError.innerHTML = '<p style="color: green">valid</p>';
    return true;
}

// Email validation
function validateEmail() {
    var email = document.getElementById('contact-email').value;

    if (email.length == 0) {
        emailError.innerHTML = "Email is required";
        return false;
    }

    if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        emailError.innerHTML = "Invalid email";
        return false;
    }

    emailError.innerHTML = '<p style="color: green">valid</p>';
    return true;
}

// Message validation
function validateMessage() {
    var message = document.getElementById('contact-message').value;
    var required = 100;
    var left = required - message.length;

    if (left > 0) {
        messageError.innerHTML = left + ' more characters required';
        return false;
    }

    messageError.innerHTML = '<p style="color: green">valid</p>';
    return true;
}

// Submit button validation
function validateForm() {
    if (!validateName() || !validatePhone() || !validateCountryCode() || !validateEmail() || !validateMessage()) {
        submitError.style.display = 'block';
        submitError.innerHTML = 'Please fix errors to submit';
        setTimeout(function() {
            submitError.style.display = 'none';
        }, 3000);
        return false;
    }
}
