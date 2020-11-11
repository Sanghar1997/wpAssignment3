-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 04:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpassignment3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `passsword` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`passsword`) VALUES
('Admin');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `title` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`title`, `user_name`, `password`, `url`) VALUES
('https://www.php.net', 'sadsadas', '$2y$10$x9VH5EcMlPQl0UdYGF8WKu1Dn7h.ektMr4.vk8KwfgVYLUtvyJ4nS', 'https://www.php.net/manual/en/function.password-hash.php'),
('https://stackoverflow.com/', 'sanghar', '$2y$10$RP7Rn.EqR2MZKv5hutg1w.U7XzQsZ7e2L0HGxYkV2oqJoG6UFwP12', 'https://stackoverflow.com/questions/6432178/how-can-i-check-if-a-mysql-table-exists-with-php'),
('https://color.adobe.com/', 'adobe', '$2y$10$UokSc4vIv9QNBWi5DME9Reedaxwaiq4TFRg1uVvby0vXlSBA6sFSa', 'https://color.adobe.com/explore?page=2#');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
