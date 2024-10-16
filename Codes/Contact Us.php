<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FurryFriends - Pet Adoption</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Contact US.css">
        </head>
        <body>
                <!-- Header Section -->
                <?php
                include "Header.php"
                ?>
        </body>
        <div id="contact">
                <div class="container">
                <h1 class="subtitle">Contact US📱</h1>
                <form>
                        <div class="input-group">
                        <label>Full Name</label>
                        <input id="contact-name" onkeyup="validateName()" type="text" placeholder="Enter your name">
                        <span id="name-error"></span>
                        </div>

                        <div class="input-group">
                        <label>Phone No.</label>
                        <div class="phone-input">
                                <input id="contact-country-code" type="text" placeholder="+XX" maxlength="4">
                                <input id="contact-phone" onkeyup="validatePhone()" type="tel" placeholder="123 456 7890">
                        </div>
                        <span id="phone-error"></span>
                        </div>
                        

                        <div class="input-group">
                        <label>Email Id</label>
                        <input id="contact-email" onkeyup="validateEmail()" type="email" placeholder="Enter Email">
                        <span id="email-error"></span>
                        </div>

                        <div class="input-group">
                        <label>Your Message</label>
                        <textarea id="contact-message" onkeyup="validateMessage()" rows="5"
                                placeholder="Enter your message"></textarea>
                        <span id="message-error"></span>
                        </div>

                        <button onclick="return validateForm()">Submit</button>
                        <span id="submit-error"></span>

                </form>
                </div>
        </div>
        </body>

        <!-- script file connection -->
        <script src="JSS.js"></script>
</html>   