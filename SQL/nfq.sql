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
-- Table structure for table `lankytojas`
--

CREATE TABLE `lankytojas` (
  `id` int(10) NOT NULL,
  `Vardas` varchar(25) DEFAULT NULL,
  `Pavarde` varchar(25) DEFAULT NULL,
  `Telefonas` varchar(25) DEFAULT NULL,
  `Specialistas` varchar(50) NOT NULL,
  `endtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Statusas` varchar(30) NOT NULL DEFAULT 'Klientas laukia',
  `mygtukas` varchar(50) NOT NULL DEFAULT 'priimti',
  `Registruota` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lankytojas`
--

INSERT INTO `lankytojas` (`id`, `Vardas`, `Pavarde`, `Telefonas`, `Specialistas`, `endtime`, `Statusas`, `mygtukas`, `Registruota`) VALUES
(88, 'RusgaudÄ—', 'BufetaviÄienÄ—', '07397862040', '1', '2019-09-23 09:23:23', 'Klientas laukia', 'priimti', '2019-09-23 09:18:23'),
(89, 'Mantvinas', 'MazoÄauskas', '07368591298', '4', '2019-09-23 09:23:09', 'Klientas laukia', 'priimti', '2019-09-23 09:19:09'),
(90, 'Romualdas', 'Pastarnokas', '07706649345', '4', '2019-09-23 09:35:24', 'Klientas laukia', 'priimti', '2019-09-23 09:31:24'),
(91, 'Benas', 'Stilleris', '+8618314144905', '3', '2019-09-23 09:41:41', 'Klientas laukia', 'priimti', '2019-09-23 09:31:41'),
(92, 'Pilnutis', 'PustuÅ¡tutis', '07706649345', '1', '2019-09-23 09:37:25', 'Klientas laukia', 'priimti', '2019-09-23 09:32:25'),
(93, 'Mikhailas', 'Pagrandunas', '07368591298', '4', '2019-09-23 09:36:49', 'Klientas laukia', 'priimti', '2019-09-23 09:32:49'),
(94, 'Napoleonas', 'Bonapartas', '07397862040', '2', '2019-09-23 09:40:07', 'Klientas laukia', 'priimti', '2019-09-23 09:33:07'),
(95, 'Ieva', 'PomidorienÄ—', '07504756485', '3', '2019-09-23 09:44:01', 'Klientas laukia', 'priimti', '2019-09-23 09:34:01'),
(96, 'Klemensas', 'Paliuknaitis', '+370 458 321 2', '4', '2019-09-23 09:38:42', 'Klientas laukia', 'priimti', '2019-09-23 09:34:42'),
(97, 'Pusiukas', 'Apvaliukas', '02087711463', '5', '2019-09-23 09:40:25', 'Klientas laukia', 'priimti', '2019-09-23 09:35:25'),
(98, 'Kolorado', 'Vabalas', '07490629193', '1', '2019-09-23 09:41:01', 'Klientas laukia', 'priimti', '2019-09-23 09:36:01');

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
(1, 'Saskaitos', '00:05:00.000'),
(2, 'Kredito/ Debeto Korteles', '00:07:00.000'),
(3, 'Draudimas', '00:10:00.000'),
(4, 'Grynuju pinigu isdavimas', '00:04:00.000'),
(5, 'Valiutos keitimas', '00:05:00.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lankytojas`
--
ALTER TABLE `lankytojas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialistas`
--
ALTER TABLE `specialistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lankytojas`
--
ALTER TABLE `lankytojas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
