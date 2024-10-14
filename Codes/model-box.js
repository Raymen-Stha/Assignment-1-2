// Get elements
const modal = document.getElementById('modal');
const loginRegisterBtn = document.getElementById('loginRegisterBtn');
const closeModal = document.getElementsByClassName('close')[0];
const content = document.getElementsByClassName('content')[0];

const createAccountForm = document.getElementById('createAccountForm');
const loginForm = document.getElementById('loginForm');
const switchToLogin = document.getElementById('switchToLogin');
const switchToCreateAccount = document.getElementById('switchToCreateAccount');

// Show modal and blur background
loginRegisterBtn.onclick = function() {
    modal.style.display = 'block'; // Show the modal
    
}

// Close modal
closeModal.onclick = function() {
    modal.style.display = 'none'; // Hide the modal
    content.classList.remove('blur'); // Remove blur effect from content
}

// Switch to Login form
switchToLogin.onclick = function(e) {
    e.preventDefault();
    document.querySelector(".modal-register").classList.add("registerHidden");
    document.querySelector(".modal-login").classList.remove("registerHidden");
    //jQuery(".modal-register").addClass("registerHidden");
    //jQuery('.modal-login').removeClass("registerHidden");
    //createAccountForm.style.display = 'none'; // Hide the create account form
    //loginForm.style.display = 'block'; // Show the login form
}

// Switch to Create Account form
switchToCreateAccount.onclick = function(e) {
    e.preventDefault();
    document.querySelector(".modal-login").classList.add("registerHidden");
    document.querySelector(".modal-register").classList.remove("registerHidden");
}

// Close modal when clicking outside of it
/*window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none'; // Hide modal
        content.classList.remove('blur'); // Remove blur effect
    }
} */
