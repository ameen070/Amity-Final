-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 07:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amity`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_ID` int(11) NOT NULL,
  `question_ID` int(11) NOT NULL,
  `answer_description` text NOT NULL,
  `creation_date` datetime DEFAULT current_timestamp(),
  `update_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_ID`, `question_ID`, `answer_description`, `creation_date`, `update_date`, `user_ID`) VALUES
(19, 7, 'I think it takes around 20 minutes', '2024-12-06 06:58:48', '2024-12-06 08:49:08', 1),
(20, 5, 'Chocolate', '2024-12-06 07:18:27', '2024-12-06 07:18:27', 1),
(25, 13, '4567 updated', '2024-12-06 09:51:03', '2024-12-06 09:51:32', 1),
(27, 6, 'I need a bit of a break brother\r\n', '2024-12-16 19:18:07', '2024-12-16 19:18:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `Content` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_type`
--

CREATE TABLE `kitchen_type` (
  `id_kitchen` int(11) NOT NULL,
  `kitchen_name` varchar(255) NOT NULL,
  `kitchen_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kitchen_type`
--

INSERT INTO `kitchen_type` (`id_kitchen`, `kitchen_name`, `kitchen_picture`) VALUES
(34, 'Greek', '../../images/indian.jpeg'),
(35, 'Indian', '../../images/indian.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(20) NOT NULL,
  `post_description` varchar(500) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `post_author` varchar(10) NOT NULL,
  `post_likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productss`
--

CREATE TABLE `productss` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productss`
--

INSERT INTO `productss` (`id`, `name`, `price`, `description`, `category`, `stock`, `picture`) VALUES
(10, 'MEAT', 35.00, 'THIS MEAT IF FROM KEF', 'meat', 411, 'product-thumb-10.png'),
(11, 'Sardina', 5.00, 'this sardina is fresh from mahdiyya', 'meat', 400, 'product-thumb-6.png'),
(15, 'Lime', 5.00, 'this product is soo good', 'fruits_veggies', 150, 'product-thumb-13.png'),
(16, 'tomatos', 4.00, 'this product is fresh', 'fruits_veggies', 450, 'product-thumb-29.png'),
(17, 'mushrooms', 11.00, 'this product is fresh', 'meat', 450, 'product-thumb-15.png'),
(18, 'littus', 1.00, 'this product is fresh', 'fruits_veggies', 30, 'product-thumb-16.png');

-- --------------------------------------------------------

--
-- Table structure for table `purchasess`
--

CREATE TABLE `purchasess` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchasess`
--

INSERT INTO `purchasess` (`purchase_id`, `user_id`, `product_id`, `quantity`, `purchase_date`, `total_price`) VALUES
(13, 1, 10, 4, '2024-12-04 08:08:30', 12.00),
(14, 1, 11, 5, '2024-12-04 20:58:31', 25.00),
(15, 1, 10, 4, '2024-12-04 20:58:31', 140.00),
(16, 1, 10, 2, '2024-12-06 08:33:02', 70.00),
(17, 1, 18, 4, '2024-12-06 08:33:02', 4.00),
(18, 1, 10, 2, '2024-12-15 17:01:22', 70.00),
(19, 1, 16, 5, '2024-12-15 17:01:22', 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_ID`, `user_ID`, `title`, `description`) VALUES
(5, 3, 'What are the best fillings for Croissants?', 'Discussing various fillings that can be used in Croissants, such as chocolate, almond, etc.'),
(6, 1, 'Whre did Croissants originate?', 'An inquiry about the history of Croissants and where they came from.'),
(7, 1, 'How long to bake Croissant?', 'Guidelines n baking Croissants, including temperature and time considerations.'),
(10, 1, 'ask?', 'answer me please'),
(11, 1, 'fadza', 'dad'),
(13, 1, 'testing stuff', 'here is a question'),
(14, 1, 'no', 'maybe'),
(15, 1, 'testing out', 'description has changed'),
(16, 1, 'is Ameen going insane?', 'Yes, apparently he is :-(');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `recipe_description` text NOT NULL,
  `instructions` text NOT NULL,
  `ingredients` text NOT NULL,
  `cooking_time` int(11) NOT NULL,
  `difficulty_level` enum('Easy','Medium','Hard') NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `kitchen_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `user_id`, `title`, `recipe_description`, `instructions`, `ingredients`, `cooking_time`, `difficulty_level`, `Picture`, `kitchen_type_id`) VALUES
(15, 1, 'Couscous', 'ishfbcdkxwccc', 'foBQCLWGQLfvd,lkw', '5kg', 1, 'Easy', 'recipe_67618f1da00de0.25642647.jpeg', 34);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `accepted_terms` tinyint(1) NOT NULL DEFAULT 0,
  `user_type` enum('chef','user','admin') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password_hash`, `country`, `date_of_birth`, `gender`, `phone_number`, `accepted_terms`, `user_type`, `created_at`) VALUES
(1, 'chef_user', 'John', 'Doe', 'john.doe@example.com', 'hashed_password_1', 'USA', '1985-06-15', 'male', '1234567890', 1, 'chef', '2024-12-19 11:07:14'),
(2, 'regular_user', 'Jane', 'Smith', 'jane.smith@example.com', 'hashed_password_2', 'Canada', '1990-08-22', 'female', '0987654321', 1, 'user', '2024-12-19 11:07:14'),
(3, 'admin_user', 'Admin', 'User', 'admin.user@example.com', 'hashed_password_3', 'UK', '1980-12-30', 'male', '1122334455', 1, 'admin', '2024-12-19 11:07:14'),
(6, 'test', 'tzst', 'ttest', 'test@test.com', '$2y$10$Kmrt57V.K3n.sqCZRgb1iOItzd2woR1tmUnRpMRlzxtu/Eg5mSKWy', 'tunisia', '2004-02-12', 'male', '1012151420', 1, 'user', '2024-11-29 10:54:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_ID`),
  ADD KEY `fk_question_id` (`question_ID`),
  ADD KEY `fk_answer_user_id` (`user_ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_comment_post_id` (`post_id`);

--
-- Indexes for table `kitchen_type`
--
ALTER TABLE `kitchen_type`
  ADD PRIMARY KEY (`id_kitchen`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_post_user_id` (`user_id`);

--
-- Indexes for table `productss`
--
ALTER TABLE `productss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasess`
--
ALTER TABLE `purchasess`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `fk_purchasess_user_id` (`user_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_ID`),
  ADD KEY `fk_question_user_id` (`user_ID`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `fk_kitchen_type` (`kitchen_type_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitchen_type`
--
ALTER TABLE `kitchen_type`
  MODIFY `id_kitchen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productss`
--
ALTER TABLE `productss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `purchasess`
--
ALTER TABLE `purchasess`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_answer_user_id` FOREIGN KEY (`user_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_question_id` FOREIGN KEY (`question_ID`) REFERENCES `question` (`question_ID`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_post_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchasess`
--
ALTER TABLE `purchasess`
  ADD CONSTRAINT `fk_purchasess_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchasess_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `productss` (`id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_question_user_id` FOREIGN KEY (`user_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `fk_kitchen_type` FOREIGN KEY (`kitchen_type_id`) REFERENCES `kitchen_type` (`id_kitchen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
