-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 01:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `contact`, `address`, `subject`) VALUES
(2, 'Derick Agus', 'derickjul@gmail.com', '09429751063', '610 Glen St. Moonwalk, Phase 2 Parañaque City', 'Webdev'),
(3, 'Monky D. Luffy', 'monkey@gmail.com', '094214725986', '4815-B CAMIA STREET, MARIMAR VILLAGE II, BARANGAY SUN VALLEY, PARANAQUE CITY', 'Physical Education'),
(5, 'Dhar Catarata', 'DC@yahoo.com', '09223645782', '#35, Apollos St. Annex 2 Makati City', 'BASICOM'),
(6, 'Patricia Navo', 'pat.navo@gmail.com', '09254587961', '#2 Section 1, Better Living Parañaque CIty', 'Science'),
(7, 'Ha Hoang', 'hahoang2@yahoo.com', '09235687481', '#37, Czechoslovakia St. Muntinlupa City.', 'Multimedia Arts'),
(8, 'Michael Fernandez', 'mike.fdez@gmail.com', '09426875297', '#42, Don Bosco St. Makati City', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `description`, `teacher`) VALUES
(11, 'Webdev', 'Intro to Web Dev', 'Mr. Abrahan Limpin'),
(12, 'Mathematics', 'Algebra', 'Ms. Jam Orense'),
(13, 'Science', 'Physics', 'Mr. Jojo Potenciano'),
(14, 'Physical Education', 'PE-1-Physical Fitness', 'Ms. Rhoda San Sebastian'),
(15, 'BASICOM', 'Computer Ethics', 'Mr. Aris Santos'),
(16, 'Multimedia Arts', 'Free Hand Drawing ', 'Ms. Nikky Tandoc'),
(17, 'Esports', 'Intro to Esports Management', 'Ms. Merly San Juan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
