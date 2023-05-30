-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2023 at 01:52 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `password`) VALUES
('Chintan', '$2y$10$BgDTl5ckwpk/yrTiCHbR7uQbNB1f7vI4EV7e.zU0iGK59ifvSuacu'),
('Chintan234', '$2y$10$FmJIFD7tG4BGgh1L8l3JAeHz95XxHF25k0pQPZQo19Agr3wzvSfz6'),
('Chintan22', '$2y$10$rWYruCw5ZplX6VHDokR/VuXdiBvz1AU0Go8bIuXgjyiJFsoOBgAg6'),
('chinatan223344', '$2y$10$iu.4odbWvnocKz.7DM3MC.7xau1NPivMeMbSIz.LxBtB.3Gd39N7a'),
('chintan2345', '$2y$10$H8SGI21mIU/uMxdNA0FzWebHLsS/K.FQ8E8DqegIHqUYVvqi2GHXS'),
('chintan2233', '$2y$10$LyLGIQQBpnr9O7qvybhgdOXRFZDOCSnjRqzPWKlTTbAGHSp0iTBSS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
