-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 06:42 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonapetit_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(9) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@website.com'),
(2, 'Abdulaziz', '0505', 'AboOmar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(9) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `cat_name`, `description`) VALUES
(1, 'Restaurant', 'anything under this category is a restaurant'),
(2, 'Cafés', 'anything under this category is a cafe'),
(3, 'Lounges', 'anything under this category is a Lounge');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` varchar(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `logo` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `CategoryID` int(9) NOT NULL,
  `foursquare_Rating` varchar(20) DEFAULT NULL,
  `yelp_Rating` varchar(20) DEFAULT NULL,
  `opentable_Rating` varchar(20) DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `name`, `logo`, `description`, `CategoryID`, `foursquare_Rating`, `yelp_Rating`, `opentable_Rating`, `Location`) VALUES
('1', 'Honest Burger', 'kjdjkd', 'kjdkjd2', 1, '6', '5', '10', 'ff'),
('2', 'L\'ETO', '../Images/Leto.JPG', 'Meaning “summer” in Russian,\r\nL’Eto provides cake lovers with a truly inspiring\r\narray of beautifully prepared cakes and desserts.\r\nOn London’s bustling Wardour Street, the café’s front\r\nwindow overflows with a selection including tarts, cakes and slices', 2, '8.6 / 10', '4 / 5', '4 / 5', 'Brompton, London'),
('3', 'SOHO HOUSE', '../Images/Soho.PNG', 'Lots of gorgeous areas with amazing character\r\nto sit in and outdoors,have awesome drinks, listen to cool music,\r\nand have great conversations with friends - new and old.', 3, '9.3 / 10', '4 / 5', '5 / 5', 'Soho, London');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(9) NOT NULL,
  `item_ID` varchar(9) NOT NULL,
  `Rname` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `rating` decimal(10,1) NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `item_ID`, `Rname`, `body`, `rating`, `item_name`, `logo`) VALUES
(2, '1', 'Gene S', 'Juicy burgers and refreshing ginger ale! The fries are fresh and tasty too! I went for the special burger which they change frequently', '6.0', 'Honest Burger', '../Images/Honest.JFIF'),
(3, '2', 'Nora', 'Small and cozy place . Every thing they have is so fresh . I tried the croissant with tomato and mozzarella. I would come over and over again for this croissant . It is one of the best in London!', '7.0', 'LETO', '../Images/Leto.JPG'),
(4, '3', 'Tules Yegin', 'Perfect Sunday chill by the fireplace with a good book or for meeting spot during the week or climb to the top for the terrace when the weather is nice for happy hour. Nice movie theater too', '0.0', 'SOHO HOUSE', '../Images/Soho.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `item_ID` (`item_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`ID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`item_ID`) REFERENCES `item` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
