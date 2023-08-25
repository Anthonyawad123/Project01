-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2023 at 04:31 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `addresse_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `addresse_line1` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `posterl_code` int NOT NULL,
  PRIMARY KEY (`addresse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `created_date` int NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `catergories_id` int NOT NULL,
  `categories_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`catergories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `order_cost` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
  `user_id` int NOT NULL,
  `user_phone` int NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_cost`, `order_status`, `user_id`, `user_phone`, `user_city`, `user_address`, `order_date`) VALUES
(10, '80.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-14 13:56:18'),
(11, '80.00', 'not paid', 1, 34567890, 'sdfg', 'asdf', '2023-06-14 13:57:04'),
(12, '80.00', 'not paid', 1, 34567890, 'sdfg', 'asdf', '2023-06-14 13:58:15'),
(13, '80.00', 'not paid', 1, 34567890, 'sdfg', 'asdf', '2023-06-14 14:01:03'),
(14, '80.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-14 14:01:10'),
(15, '80.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-14 14:02:51'),
(16, '80.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-14 14:04:00'),
(17, '80.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-14 14:27:18'),
(18, '80.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-14 14:27:49'),
(19, '80.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-14 14:29:37'),
(20, '60.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-14 16:06:23'),
(21, '180.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-15 13:04:56'),
(22, '120.00', 'deliverd', 1, 70497282, 'zahle', 'riit,zahle', '2023-06-27 15:08:03'),
(23, '60.00', 'deliverd', 1, 70497282, 'zahle', 'riit,zahle', '2023-08-02 13:26:58'),
(24, '60.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-08-02 13:27:24'),
(25, '40.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-08-02 14:09:05'),
(26, '340.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-08-08 17:32:51'),
(27, '340.00', 'not paid', 1, 70497282, 'zahle', 'riit', '2023-08-08 17:33:28'),
(28, '200.00', 'not paid', 1, 70497282, 'zahle', 'riit,zahle', '2023-08-08 17:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `order_category`
--

DROP TABLE IF EXISTS `order_category`;
CREATE TABLE IF NOT EXISTS `order_category` (
  `order_id` int NOT NULL,
  `category_id` int NOT NULL,
  KEY `category_id` (`category_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `item_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_quantity` int NOT NULL,
  `user_id` int NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `user_id`, `order_date`) VALUES
(4, 10, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 13:56:18'),
(5, 11, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 13:57:04'),
(6, 12, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 13:58:15'),
(7, 13, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 14:01:03'),
(8, 14, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 14:01:10'),
(9, 15, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 14:02:51'),
(10, 16, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 14:04:00'),
(11, 17, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 14:27:18'),
(12, 18, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 14:27:49'),
(13, 19, 2, 'sport bag', 'feature1.jpg', '40.00', 2, 1, '2023-06-14 14:29:37'),
(14, 20, 3, 'headphone', 'feature2.jpg', '60.00', 1, 1, '2023-06-14 16:06:23'),
(15, 21, 3, 'headphone', 'feature2.jpg', '60.00', 3, 1, '2023-06-15 13:04:56'),
(16, 22, 3, 'headphone', 'feature2.jpg', '60.00', 2, 1, '2023-06-27 15:08:03'),
(17, 23, 3, 'headphone', 'feature2.jpg', '60.00', 1, 1, '2023-08-02 13:26:58'),
(18, 24, 3, 'headphone', 'feature2.jpg', '60.00', 1, 1, '2023-08-02 13:27:24'),
(19, 25, 2, 'sport bag', 'feature1.jpg', '40.00', 1, 1, '2023-08-02 14:09:05'),
(20, 26, 2, 'sport bag', 'feature1.jpg', '40.00', 7, 1, '2023-08-08 17:32:51'),
(21, 26, 3, 'headphone', 'feature2.jpg', '60.00', 1, 1, '2023-08-08 17:32:51'),
(22, 27, 2, 'sport bag', 'feature1.jpg', '40.00', 7, 1, '2023-08-08 17:33:28'),
(23, 27, 3, 'headphone', 'feature2.jpg', '60.00', 1, 1, '2023-08-08 17:33:28'),
(24, 28, 1, 'appel watch', 'feature.jpg', '200.00', 1, 1, '2023-08-08 17:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `transaction` int NOT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_image4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_special_offer` int NOT NULL,
  `product_color` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_price`, `product_special_offer`, `product_color`) VALUES
(1, 'appel watch', 'blue apple watch', 'awsome apple watch', 'feature.jpg', 'feature.jpg', 'feature.jpg', 'feature.jpg', '200.00', 150, 'blue'),
(2, 'sport bag', 'sport bag', 'Awsome bag', 'feature1.jpg', 'feature1.jpg', 'feature1.jpg', 'feature1.jpg', '40.00', 30, 'blue'),
(3, 'headphone', 'Headphone wirless', 'headphone', 'feature2.jpg', 'feature2.jpg', 'feature2.jpg', 'feature2.jpg', '60.00', 40, 'white'),
(4, 'Nike shoes', 'Nikes shoes', 'Awsome shoes', 'feature3.jpg', 'feature3.jpg', 'feature3.jpg', 'feature3.jpg', '40.00', 30, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `product_id` int NOT NULL,
  `category_id` int NOT NULL,
  KEY `category_id` (`category_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `reviews_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `rating` int NOT NULL,
  `review_text` text COLLATE utf8mb4_general_ci NOT NULL,
  `review_date` date NOT NULL,
  PRIMARY KEY (`reviews_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UX_Constraint` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'mishel', 'mishel@gmail.com', '$2y$10$eKbq583N/9GcyfS2CS2K3eRHIBADyJYi.npedfrHeNuCqoqiz9dv2'),
(6, 'anthony joseph awad', 'awadanthony24@gmail.com', '$2y$10$4MTvnbfcaFLR8DUIaQ51ce8ZHVquCXbvaLKOJNDaXnkdbS32z/msq');

-- --------------------------------------------------------

--
-- Table structure for table `user_admins`
--

DROP TABLE IF EXISTS `user_admins`;
CREATE TABLE IF NOT EXISTS `user_admins` (
  `user_id` int NOT NULL,
  `categories_id` int NOT NULL,
  KEY `categories_id` (`categories_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_category`
--
ALTER TABLE `order_category`
  ADD CONSTRAINT `order_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`catergories_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_category_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`catergories_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `product_category_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user_admins`
--
ALTER TABLE `user_admins`
  ADD CONSTRAINT `user_admins_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`catergories_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_admins_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
