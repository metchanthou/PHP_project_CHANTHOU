-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 05:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `susei_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` int(30) NOT NULL,
  `image` varchar(400) NOT NULL,
  `information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `first_name`, `last_name`, `age`, `email`, `password`, `image`, `information`) VALUES
(2, 'John', 'Smith', 23, 'johnsmithAdministrator@gmail.food', 98765432, 'https://www.nikonlenswear.co.uk/wp-content/uploads/2017/03/pc-man-laptop.jpg', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_ID` int(11) NOT NULL,
  `food_Name` varchar(120) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_ID`, `food_Name`, `price`, `image`, `user_ID`) VALUES
(37, 'Soup', 567, 'p5.jpg', 9),
(38, 'Lala', 100, 'p8.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `ice_cream`
--

CREATE TABLE `ice_cream` (
  `ice_ID` int(11) NOT NULL,
  `ice_Name` varchar(120) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ice_cream`
--

INSERT INTO `ice_cream` (`ice_ID`, `ice_Name`, `price`, `image`, `user_ID`) VALUES
(18, 'Chocolate', 50, 'i2.jpg', 9),
(21, 'olala', 56, 'i2.jpg', 9),
(22, 'Chocolate', 9, 'i2.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `ingrdients`
--

CREATE TABLE `ingrdients` (
  `igd_ID` int(11) NOT NULL,
  `igd_Name` varchar(120) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingrdients`
--

INSERT INTO `ingrdients` (`igd_ID`, `igd_Name`, `price`, `image`, `user_ID`) VALUES
(19, 'kk', 9, 's8.jpg', 9),
(20, 'qwer', 56, 's9.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `pizza_ID` int(11) NOT NULL,
  `pizza_Name` varchar(120) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`pizza_ID`, `pizza_Name`, `price`, `image`, `user_ID`) VALUES
(20, 'Hotdog Chess', 20, 'p4.jpg', 9),
(21, 'Vegetable & Chess', 30, 'p6.jpg', 9),
(23, 'Vegetable & Chess', 67, 'p3.jpg', 9),
(26, 'Hotdog Chess', 7, 'p4.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `res_ID` int(11) NOT NULL,
  `res_Name` varchar(120) NOT NULL,
  `country` varchar(120) NOT NULL,
  `image` varchar(400) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`res_ID`, `res_Name`, `country`, `image`, `description`) VALUES
(1, 'Kayabuki Izakaya', 'Albania', 'https://www.greatrestaurantsmag.com/NYCadmin/uploads/rivag_B.jpg', 'Psar Thmei, Phnom Penh’s biggest market, is easy to spot with its interesting art-deco dome and central location. Shoppers will enjoy strolling around and checking out the goods on offer. The market has everything, from fresh food to gold and cheap electronic gadgets to animals – you name it! There are food stands, restaurants (many are Chinese), cafés and bars around the market.'),
(2, 'Beetle House NYC', 'Armenia', 'https://www.lerivagenyc.com/static/ui/Rivage_mainPage.jpg', 'The area around Wat Phnom and the northern part of Phnom Penh is where many people considered the city centre. There\'s lovely vintage colonial architecture around with a good number of upmarket dining venues, too.\r\n\r\nYou can find a variety of accommodation, from 3-star to luxury hotels in the area, including Sunway Hotel Phnom Penh and Raffles Hotel Le Royal. The Boeng Kak area, once known as a backpacker centre, is surrounded by residential areas, restaurants, hotels and embassies.'),
(3, 'A380 In-Flight Kitchen', 'Bahrain', 'https://www.lerivagenyc.com/static/ui/gallery_le_rivage/4.jpg', 'The area around Wat Phnom and the northern part of Phnom Penh is where many people considered the city centre. There\'s lovely vintage colonial architecture around with a good number of upmarket dining venues, too.\r\n\r\nYou can find a variety of accommodation, from 3-star to luxury hotels in the area, including Sunway Hotel Phnom Penh and Raffles Hotel Le Royal. The Boeng Kak area, once known as a backpacker centre, is surrounded by residential areas, restaurants, hotels and embassies.'),
(4, 'Kinderkookkafe', 'Cameroon', 'https://media.womensweekly.com.sg/public/2020/10/French-cafe-restaurants-in-Singapore-feel-like-Paris-featured.jpg', 'Boeung Keng Kang 1 (or BKK1 for short) is located southeast of the Independence Monument. The area is known as the foreigner or NGO or UN neighbourhood – this is where you’ll find embassies, UN and NGO offices and many stylish restaurants, cafés, boutiques, spas and travel agents, as well as modern apartments. The area is considered the most charming in Phnom Penh.'),
(5, 'Khmer foods', 'Colombia', 'https://img.rasset.ie/0016ebf2-1600.jpg', 'luxury hotels (including the FCC Phnom Penh Boutique Hotel and The Quay Boutique Hotel).'),
(6, 'Homewood Mountain Resort', 'Sangapur', 'https://media-cdn.tripadvisor.com/media/photo-s/11/68/b9/29/salon.jpg', 'Sisowath Quay is a long boulevard that runs along the intersection of the Tonlé Sap and Mekong rivers for about 3 km. The boulevard is lined with boutiques, bars, cafés, restaurants and luxury hotels (including the FCC Phnom Penh Boutique Hotel and The Quay Boutique Hotel).'),
(7, 'Devil Island Prison Restaurant ', 'Chines', 'https://winter-construction.com/wp-content/uploads/2016/07/Nan.InteriorDiningArea3.jpg', 'Most places along this street open early in the evening and carry on until late or, in some cases, until the sunrise. There are even a few bars that are open 24/7 and never close their doors. Among the most popular clubs and bars on Street 51 to check out are Heart of Darkness and Shanghai Bar and Restaurant.'),
(8, 'Sur un Arbre Perché', 'Korea', 'https://winter-construction.com/wp-content/uploads/2016/07/Nan.InteriorDiningArea1.jpg', 'There’s a local market by the name Boeung Keng Kang Market worth having a look at, with many clothes and second-hand products for sale. Also, if you fancy ‘real’ local food, stop by the stalls just south of the monument. Here they have food available until very late at night. Hotel options abound in this area, such as the Frangipani Villa-90s Hotel and La Palm Boutique Hotel.'),
(9, 'Parallax Restaurant', 'Denmark', 'https://img1.10bestmedia.com/Images/Photos/347561/11Sra-Bua-by-Kiin-Kiin_55_660x440.jpeg', 'Prek Leap is outside Phnom Penh and is very popular among locals as a dining and nightlife district. You\'ll know that you\'re in the right place once you start to see the restaurant signs, one after another, all in Khmer. Most of the venues here offer authentic Khmer and/or Khmer–Chinese food.'),
(10, 'jkljkl', 'Finland', 'https://media.timeout.com/images/105462311/image.jpg', 'Most places along this street open early in the evening and carry on until late or, in some cases, until the sunrise. There are even a few bars that are open 24/7 and never close their doors. Among the most popular clubs and bars on Street 51 to check out are Heart of Darkness and Shanghai Bar and Restaurant.');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `user_ID` int(11) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(120) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(400) NOT NULL,
  `information` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`user_ID`, `first_name`, `last_name`, `age`, `email`, `image`, `information`, `description`) VALUES
(9, 'Chanthou', 'Met', 21, 'chanthoumet@gmail.com', 'https://jooinn.com/images/office-worker-2.jpg', 'User\r\n', 'I worked in this company for 5 years. Now, I want to continue my work with this company more. I have a lot of experiments with the company and I want to improve more.'),
(13, 'Thaly', 'Hen', 3, 'thaly330@gmail.com', 'su1.jpg', 'User', '34567'),
(15, 'ck', 'lkl', 89, 'susielaw01@gmail.comk', 'p7.jpg', 'User', 'flkhl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_ID`),
  ADD KEY `username` (`user_ID`);

--
-- Indexes for table `ice_cream`
--
ALTER TABLE `ice_cream`
  ADD PRIMARY KEY (`ice_ID`),
  ADD KEY `ice_cream` (`user_ID`);

--
-- Indexes for table `ingrdients`
--
ALTER TABLE `ingrdients`
  ADD PRIMARY KEY (`igd_ID`),
  ADD KEY `ingrdients` (`user_ID`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`pizza_ID`),
  ADD KEY `pizza` (`user_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`res_ID`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `ice_cream`
--
ALTER TABLE `ice_cream`
  MODIFY `ice_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ingrdients`
--
ALTER TABLE `ingrdients`
  MODIFY `igd_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `pizza_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `res_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `username` FOREIGN KEY (`user_ID`) REFERENCES `username` (`user_ID`);

--
-- Constraints for table `ice_cream`
--
ALTER TABLE `ice_cream`
  ADD CONSTRAINT `ice_cream` FOREIGN KEY (`user_ID`) REFERENCES `username` (`user_ID`);

--
-- Constraints for table `ingrdients`
--
ALTER TABLE `ingrdients`
  ADD CONSTRAINT `ingrdients` FOREIGN KEY (`user_ID`) REFERENCES `username` (`user_ID`);

--
-- Constraints for table `pizza`
--
ALTER TABLE `pizza`
  ADD CONSTRAINT `pizza` FOREIGN KEY (`user_ID`) REFERENCES `username` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
