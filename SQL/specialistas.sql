-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 10:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfq`
--

-- --------------------------------------------------------

--
-- Table structure for table `specialistas`
--

CREATE TABLE `specialistas` (
  `id` int(100) NOT NULL,
  `specialistas` varchar(100) NOT NULL,
  `trukme` time(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialistas`
--

INSERT INTO `specialistas` (`id`, `specialistas`, `trukme`) VALUES
(3, 'Draudimas', '00:10:00.000'),
(2, 'Kredito/ Debeto Korteles', '00:07:00.000'),
(1, 'Saskaitos', '00:05:00.000'),
(5, 'Valiutos keitimas', '00:05:00.000'),
(4, 'Grynuju pinigu isdavimas', '00:04:00.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `specialistas`
--
ALTER TABLE `specialistas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
