-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2024 at 07:59 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_adoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption_applications`
--

DROP TABLE IF EXISTS `adoption_applications`;
CREATE TABLE IF NOT EXISTS `adoption_applications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pet_id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `town` varchar(100) NOT NULL,
  `garden` enum('yes','no') NOT NULL,
  `members` int NOT NULL,
  `children` int NOT NULL,
  `youngest_child_age` int NOT NULL,
  `other_animals` enum('yes','no') NOT NULL,
  `animal_type` varchar(50) DEFAULT NULL,
  `animal_breed` varchar(100) DEFAULT NULL,
  `allergies` enum('yes','no') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `pet_id` (`pet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adoption_applications`
--

INSERT INTO `adoption_applications` (`id`, `pet_id`, `first_name`, `last_name`, `phone`, `email`, `street_name`, `postcode`, `town`, `garden`, `members`, `children`, `youngest_child_age`, `other_animals`, `animal_type`, `animal_breed`, `allergies`, `created_at`) VALUES
(1, 1, 'Sujal ', 'Shrestha', '321083780', 'sujal07shr@gmail.com', '1/132 Totterdell Street', '2617', 'Belconnen', 'yes', 3, 1, 1, 'no', 'dog', '', 'yes', '2024-10-16 10:03:50'),
(4, 2, 'Sujal ', 'Shrestha', '0475970665', 'sujal07shr@gmail.com', '1/132 Totterdell Street', 'fgdfgd', '32432365454', 'yes', 11, 111, 11, 'no', 'cat', '1234567', 'no', '2024-10-16 12:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `phone_code` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `phone_code`, `phone`, `email`, `message`, `created_at`) VALUES
(1, 'Sujal SHrestha', '61', '0475970665', 'sujal07shr@gmail.com', 'i am happy', '2024-10-16 11:37:01'),
(2, 'Sujal Shrestha', '', '0475970665', 'sujal07shr@gmail.com', 'i am happy', '2024-10-16 12:33:49'),
(3, 'Sujal Shrestha', '', '0475970665', 'sujal07shr@gmail.com', 'i am happy', '2024-10-16 12:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `breed` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` text,
  `age` int DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `vaccinated` tinyint(1) DEFAULT NULL,
  `house_trained` tinyint(1) DEFAULT NULL,
  `neutered` tinyint(1) DEFAULT NULL,
  `microchipped` tinyint(1) DEFAULT NULL,
  `medical_history` text,
  `special_needs` text,
  `path` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `breed`, `image`, `description`, `age`, `location`, `gender`, `color`, `weight`, `height`, `vaccinated`, `house_trained`, `neutered`, `microchipped`, `medical_history`, `special_needs`, `path`) VALUES
(1, 'Oliver', 'Golden Retriever', 'oliver.jpg', 'A friendly Golden Retriever.', 3, 'Canberra, ACT', 'Male', 'Golden', 30.00, 60.00, 1, 1, 1, 1, 'Oliver has a history of ear infections but is currently healthy.', NULL, 'pets/oliver.jpg'),
(2, 'Milo', 'Beagle', 'milo.png', 'A playful Beagle.', 2, 'Sydney CBD, NSW', 'Male', 'Tricolor', 18.00, 40.00, 1, 1, 1, 0, 'Milo is healthy but needs regular checkups for his ears.', NULL, 'pets/milo.png'),
(3, 'Maple', 'Persian Cat', 'maple.jpg', 'A lovely Persian cat.', 1, 'Melbourne, VIC', 'Female', 'White', 4.50, 25.00, 1, 1, 1, 1, 'Maple has had no major health issues.', 'Requires regular grooming.', 'pets/maple.jpg\n'),
(4, 'Bella', 'Labrador Retriever', 'bella.jpg', 'An energetic Labrador Retriever who loves to play.', 4, 'Brisbane, QLD', 'Female', 'Yellow', 32.00, 65.00, 1, 1, 1, 1, 'Bella underwent ACL surgery at 2 years old but has fully recovered.', NULL, 'pets/bella.jpg'),
(5, 'Charlie', 'Bulldog', 'charlie.jpg', 'A gentle Bulldog with a big heart.', 3, 'Perth, WA', 'Male', 'Brindle', 24.00, 40.00, 1, 1, 1, 1, 'Charlie has a mild case of hip dysplasia but manages well.', NULL, 'pets/charlie.jpg'),
(6, 'Lucy', 'Siamese Cat', 'lucy.webp', 'A beautiful Siamese Cat who enjoys cuddling.', 2, 'Adelaide, SA', 'Female', 'Seal Point', 3.00, 30.00, 1, 1, 1, 1, 'Lucy is healthy but has seasonal allergies.', 'Prefers a calm environment.', 'pets/lucy.webp'),
(7, 'Max', 'Dachshund', 'max.jpg', 'A curious Dachshund with a lot of personality.', 3, 'Hobart, TAS', 'Male', 'Brown', 6.00, 25.00, 1, 1, 1, 1, 'Max has a history of skin allergies but is under control.', 'Requires regular skin care.', 'pets/max.jpg'),
(8, 'Daisy', 'Golden Retriever', 'daisy.jpeg', 'A friendly Golden Retriever who loves the outdoors.', 2, 'Canberra, ACT', 'Female', 'Golden', 29.00, 61.00, 1, 1, 1, 1, 'Daisy had surgery for a torn ligament but is fully recovered.', NULL, 'pets/daisy.jpeg'),
(9, 'Rocky', 'German Shepherd', 'rocky.webp', 'A loyal German Shepherd who is great with kids.', 3, 'Gold Coast, QLD', 'Male', 'Black and Tan', 35.00, 70.00, 1, 1, 1, 1, 'Rocky is healthy but has a slight sensitivity to certain foods.', NULL, 'pets/rocky.webp'),
(10, 'Chloe', 'Bengal', 'chloe.jpg', 'A sweet Ragdoll Cat who loves to be petted.', 1, 'Melbourne, VIC', 'Female', 'White', 4.00, 24.00, 1, 1, 1, 1, 'Chloe has had no major health issues.', 'Sensitive to loud noises, needs a quiet home.', 'pets/chloe.jpg'),
(11, 'Mary', 'Khao Manee', 'mary.jpg', 'Mary is a playful and affectionate Khao Manee with striking white fur.', 3, 'Melbourne, VIC', 'Female', 'White', 3.80, 23.00, 1, 1, 1, 1, 'Mary has no major health issues.', NULL, 'pets/mary.jpg'),
(12, 'Luna', 'Sphynx', 'luna.jpg', 'Luna is an adorable Sphynx known for her hairlessness and playful personality.', 2, 'Brisbane, QLD', 'Female', 'Gray', 3.50, 23.00, 1, 1, 1, 1, 'Luna has no major health issues.', 'Requires moisturizing skin care due to her hairless nature.', 'pets/luna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`) VALUES
(1, 'Raymen Shrestha', 'sujal07shr@gmail.com', '$2y$10$1ejC5X2evJyojoL21Ek3te5HCPnw4wCb5gLBGkgPwrKG9R1bYTgmu'),
(3, 'LelouchYT', 'lelouch07yt@gmail.com', '$2y$10$hnlzuhUs0IwlHTqOo/AJeeetBtkxr1fDb7piPU6xycfzQQHvlIeZy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
