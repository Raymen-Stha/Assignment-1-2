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

                                <div class="contact-container">
                                <div class="contact-info">
                                        <h2>Contact Us</h2>
                                        <p>Get in touch with our team by choosing what kind of our services you are looking for.</p>
                                        <img src="pets/contact.jpg" alt="Pet Adoption" class="contact-image">
                                        <div class="contact-details">
                                        <h3><i class="location"></i> 📌  123 Main Street, Anytown, USA</h3>
                                        <h3><i class="phone"></i> 📞  +1 (555) 123-4567</h3>
                                        <h3><i class="email"></i>📬   FurryFriendsSupport@gmail.com</h3>
                                        </div>
                                </div>
                                <div class="contact-form">
                                        <h3>Ready to help you</h3>
                                        <form action="connections/contact.php" method="post">
                                        <div class="input-container">
                                                <input type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="input-container">
                                                <input type="email" name="email" placeholder="Your E-mail address" required>
                                        </div>
                                        <div class="input-container">
                                                <input type="tel" name="phone" placeholder="+61 XXXXXXXXX" required>
                                        </div>
                                        <div class="input-container">
                                                <textarea name="message" placeholder="Tell us about your request" required></textarea>
                                        </div>
                                        <button type="submit">Send</button>
                                        </form>
                                </div>
                                </div>


        <!-- footer Section -->
        <?php
                include "footer.php"
        ?>

</html>   