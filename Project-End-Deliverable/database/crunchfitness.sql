-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2023 at 09:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crunchfitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `subject_contact` varchar(100) NOT NULL,
  `message_contact` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `firstname`, `lastname`, `email`, `mobile`, `subject_contact`, `message_contact`) VALUES
(213, 'Samuel Y Loon', 'Ng', 'samuel6249ng@gmail.com', '402473847', 'Open this select menu', '213213213'),
(214, 'Samuel Y Loon', 'Ng', 'samuel6249ng@gmail.com', '402473847', 'Open this select menu', '213213213'),
(242, 'Samuel Y Loon', 'Ng', 'samuel6249ng@gmail.com', '402473847', 'Becoming a member', 'tretertwertvervcftwertffertdgcertcfeceecedccacaddwfdwr43543543534534534543534534534vvcfrgsfgsfggfwsefgseg');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `Inv_id` int(11) NOT NULL,
  `Document` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `inv_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`Inv_id`, `Document`, `Name`, `description`, `inv_quantity`) VALUES
(101, '', 'Mike ', 'T-shirt', 2);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `startdate` date NOT NULL DEFAULT current_timestamp(),
  `enddate` date NOT NULL DEFAULT current_timestamp(),
  `address` varchar(150) NOT NULL,
  `age` varchar(50) NOT NULL,
  `m_weight` varchar(50) NOT NULL,
  `height` varchar(20) NOT NULL,
  `membership_id` int(30) NOT NULL,
  `user_image` varchar(500) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `username`, `firstname`, `lastname`, `email`, `mobile`, `password`, `gender`, `startdate`, `enddate`, `address`, `age`, `m_weight`, `height`, `membership_id`, `user_image`, `status`) VALUES
(155, 'winnie', 'Winnie', 'Pooh', 'Winnie@hotmail.com', '+61402473847', '202cb962ac59075b964b07152d234b70', '', '2022-02-06', '2023-02-04', '153 Chetwynd St', '30', '40', '160', 501, 'face26.jpg', 'Active'),
(177, 'kenny', 'Kenny', 'state ', 'kenny@123', '0411111111', '202cb962ac59075b964b07152d234b70', 'male', '2022-02-10', '2023-02-04', '3811/488 Swanston St', '70', '70', '07', 501, 'dev.png', 'Cancelled'),
(178, 'samuel', 'Samuel', 'Ng', 'sam@gmail.com', '+60123164412', '438f6c644703f7597d75e9672869175e', 'male', '2023-02-04', '2023-02-04', '3811/488 Swanston St', '35', '65', '177', 500, 'Screen Shot 2023-01-23 at 3.14.37 am.png', 'Active'),
(179, 'steve123', 'Steve', 'Crouch', 'steve@member.com', '0411111111', '202cb962ac59075b964b07152d234b70', 'male', '2023-02-05', '2023-02-05', '22 happy lane ', '35', '77', '180', 502, 'face16.jpg', 'Active'),
(180, 'cat', 'cat', 'cool', 'cat@gmail.com', '1234', '202cb962ac59075b964b07152d234b70', 'male', '2023-02-05', '2023-02-05', '', '', '', '', 501, '', 'Active'),
(182, '21423', 'Samuel Y Loon', 'Ng', 'samuel6249ng@gmail.com', '402473847', '202cb962ac59075b964b07152d234b70', 'male', '2023-02-05', '2023-02-05', '', '', '', '', 500, '', 'Active'),
(183, 'goku', 'goku', 'son', 'goku@kamehameha', '0411111111', '202cb962ac59075b964b07152d234b70', 'male', '2023-02-05', '2023-02-05', '', '', '', '', 502, '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `membership_id` int(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `membership_price` varchar(20) NOT NULL,
  `signup_fees` varchar(20) NOT NULL,
  `period` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`membership_id`, `Name`, `membership_price`, `signup_fees`, `period`) VALUES
(500, 'Base Membership', '7.95', '0', '1'),
(501, 'Peak Membership', '15.95', '0', '1'),
(502, 'Summit Membership', '19.95', '0', '1'),
(544, 'Ultra Membership Package', '22', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_cart`
--

CREATE TABLE `order_cart` (
  `order_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `pickup_date` date NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL,
  `quatity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(30) NOT NULL,
  `registration_id` int(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `Date` date NOT NULL,
  `time` datetime(1) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `registration_id`, `amount`, `Date`, `time`, `member_id`, `user_id`, `product_id`) VALUES
(1, 2, 4500, '0000-00-00', '0000-00-00 00:00:00.0', 2147483647, 0, 0),
(2, 2, 3500, '0000-00-00', '0000-00-00 00:00:00.0', 2147483647, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `pro_Name` varchar(50) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_type` varchar(50) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `pro_Name`, `pro_desc`, `pro_type`, `pro_price`, `size`, `color`, `image_url`) VALUES
(202, 'T-SHIRT', '2 PAIRS / Size 10 / Back and White', 'Shirt', 70, 10, 'black and white', ''),
(203, 'T-SHIRT', '4 PAIRS / Size 11 /  Back and White', 'Shirt', 100, 10, 'black and white', ''),
(204, 'T-SHIRT', 'White and black crunch T-shirt', 'Shirt', 70, 10, 'black and white', NULL),
(205, 'T-SHIRT', 'White and black crunch T-shirt', 'Shirt', 70, 10, 'black and white', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `hourly_rate` varchar(50) NOT NULL,
  `join_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `username`, `firstname`, `lastname`, `email`, `mobile`, `password`, `gender`, `hourly_rate`, `join_date`) VALUES
(5, 'Jim', 'Jim', 'Marvel', 'Jim@crunch.fitness.au', 455555555, '827ccb0eea8a706c4c34a16891f84e7b', 'Male', '80', '2023-02-02'),
(6, 'Mike', 'Mike', 'Anson', 'mike@crunchfitness.com.au', 455555555, '202cb962ac59075b964b07152d234b70', 'Male', '30', '2023-02-02'),
(14, 'trainer', 'Kimberly', 'Catch', 'trainer@gmail.com', 411111111, '202cb962ac59075b964b07152d234b70', 'Female', '70', '2023-02-02'),
(17, 'jes123', 'Jessica', 'Taylor', 'jesss@trainer.com', 422222222, '202cb962ac59075b964b07152d234b70', 'female', '50', '2023-02-02'),
(29, 'micheal', 'micheal', 'Jordan', 'micheal.jardon@basketball.com', 23423, '202cb962ac59075b964b07152d234b70', 'Male', '50', '2023-02-04'),
(31, 'novak', 'Novak', 'Djokowic', 'Novak@tennis', 213213123, '202cb962ac59075b964b07152d234b70', 'Male', '550', '2023-02-04'),
(32, 'messi', 'messi', 'ronaldo', 'messei87@gmaiL.COM', 411111111, '202cb962ac59075b964b07152d234b70', 'Male', '500', '2023-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin,2=Staff, 3= subscriber'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workout_event`
--

CREATE TABLE `workout_event` (
  `event_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `time_slot` time NOT NULL,
  `trainer_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workout_event`
--

INSERT INTO `workout_event` (`event_id`, `class_name`, `event_date`, `time_slot`, `trainer_id`) VALUES
(1008, 'DANCE Training', '2024-02-08', '14:37:14', 17),
(1019, 'HIIT Training', '2024-02-08', '14:37:14', 29),
(1020, 'DANCE Training', '2024-02-08', '14:37:14', 6),
(1024, 'LIIT Training', '2023-02-13', '13:34:00', 6),
(1025, 'FLOW Training', '2023-02-20', '13:35:00', 31),
(1074, 'LIIT Training', '2024-02-08', '14:37:14', 17),
(1078, 'LIIT Training', '2024-02-08', '14:37:14', 17),
(1082, 'DANCE Training', '2023-02-08', '18:32:00', 17),
(1084, 'STRENGTH Training', '2023-02-07', '19:32:00', 14),
(1085, 'FLOW Training', '2023-02-07', '19:33:00', 6),
(1087, 'STRENGTH Training', '2023-02-09', '18:30:00', 31),
(1088, 'FLOW Training', '2023-02-12', '09:30:00', 17),
(1089, 'STRENGTH Training', '2023-02-01', '21:39:00', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`Inv_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `membership_id` (`membership_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`membership_id`);

--
-- Indexes for table `order_cart`
--
ALTER TABLE `order_cart`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workout_event`
--
ALTER TABLE `workout_event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `Inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `membership_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=554;

--
-- AUTO_INCREMENT for table `order_cart`
--
ALTER TABLE `order_cart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workout_event`
--
ALTER TABLE `workout_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1090;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `payments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
