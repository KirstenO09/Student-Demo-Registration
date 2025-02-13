-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2024 at 02:11 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id22071488_studentregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `RegisteredStudents`
--

CREATE TABLE `RegisteredStudents` (
  `id` varchar(8) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `project` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `slot` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `RegisteredStudents`
--

INSERT INTO `RegisteredStudents` (`id`, `firstname`, `lastName`, `project`, `email`, `phone`, `slot`) VALUES
('12345678', 'Naruto', 'Uzumaki', 'Web Design', 'naruto@example.com', '1234567880', '4/23/2024 6:00 PM - 7:00 PM'),
('46274623', 'Hinata', 'Hyuga', 'Web App Development', 'hinata@gmail.com', '5342727336', '4/23/2024 6:00 PM - 7:00 PM'),
('46274628', 'Sakura', 'Haruno', 'Data Analysis', 'sakura@gmail.com', '5342727334', '4/24/2024 6:00 PM - 7:00 PM'),
('54728267', 'Choji', 'Akimichi', 'Ethical Hacking', 'choji@gmail.com', '6562937230', '4/23/2024 6:00 PM - 7:00 PM'),
('62746233', 'Sasuke', 'Uchiha', 'Robotics', 'sasuke@gmail.com', '4625382927', '4/22/2024 6:00 PM - 7:00 PM'),
('64836422', 'Neji', 'Hyuga', 'AI Technology', 'neji@gmail.com', '9765947293', '4/24/2024 6:00 PM - 7:00 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `RegisteredStudents`
--
ALTER TABLE `RegisteredStudents`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
