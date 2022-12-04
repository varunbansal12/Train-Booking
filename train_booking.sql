-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2022 at 03:58 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('abcd', '123'),
('Ramneek', 'r@123');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `transaction_number` int(100) NOT NULL AUTO_INCREMENT,
  `vehicle_code` varchar(30) NOT NULL,
  `ID` varchar(30) NOT NULL,
  `startDate` date NOT NULL,
  `total_price` int(30) NOT NULL,
  `no_passenger` int(11) NOT NULL,
  PRIMARY KEY (`transaction_number`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`transaction_number`, `vehicle_code`, `ID`, `startDate`, `total_price`, `no_passenger`) VALUES
(12, 'Manu Express', 'manu', '2022-12-28', 600, 3),
(13, 'Manu Express', 'manu', '2022-11-27', 400, 2),
(14, 'Manu Express', 'manu', '2023-01-04', 1000, 5),
(15, 'Manu Express', 'khush', '2022-11-30', 200, 1),
(16, 'Manu Express', 'Vishwajeet', '2022-12-31', 800, 4);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `username` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `vehicle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`username`, `review`, `vehicle`) VALUES
('abc', 'loved it!', 'f_150'),
('jason', 'Enjoyed the trip with this car. ', 'bmw'),
('ismail', 'such a great pickup. loved the vehicle and the service provided was fabulous!!', 'f_150'),
('jason', 'BAD CUSTOMER SERVICE!!!!! but good car :)', 'benz'),
('navjot', 'I AM STUNNED BY THE SERVICE!!!!', 'honda_civic'),
('yukta', 'great', 'f_150'),
('yukta', 'frtytu', 'bmw');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `pass`, `pNumber`) VALUES
('abc', '123', '456789532'),
('jason', 'j@son', '3456797543'),
('yukta', 'Yukta', '2343456675'),
('ismail', '1', '2343456670'),
('navjot', 'n', '6043684000'),
('yukta1', 'y', '5678644335'),
('yukta', '5', '3567864324'),
('manu', '12345', '1224564556'),
('manuuu', '12345678', '7546747747'),
('khush', '6789', '1234588987'),
('aaaa', '788900', '2345678'),
('Vishwajeet', '34567890', '123457889');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `vehicle_code` varchar(255) NOT NULL,
  `price_per_week` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_code`, `price_per_week`) VALUES
('Manu Express', 200),
('Vishu Express', 400),
('Mus Express', 600),
('Vishu Express', 500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
