-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2021 at 05:53 PM
-- Server version: 10.1.44-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lhs_kedens`
--

-- --------------------------------------------------------

--
-- Table structure for table `CPU`
--

CREATE TABLE `CPU` (
  `AMD 3600` int(10) UNSIGNED NOT NULL,
  `INTEL 9600` int(10) UNSIGNED NOT NULL,
  `AMD 3700` int(10) UNSIGNED NOT NULL,
  `INTEL 9700` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `GPU`
--

CREATE TABLE `GPU` (
  `NVIDIA 2060` int(10) UNSIGNED NOT NULL,
  `AMD 5600` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `HDD`
--

CREATE TABLE `HDD` (
  `WESTERN_DIGITAL_1TB` int(15) UNSIGNED NOT NULL,
  `SEAGATE_1TB` int(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `MOBO`
--

CREATE TABLE `MOBO` (
  `X570` int(20) UNSIGNED NOT NULL,
  `Z570` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PWR_SUPPLY`
--

CREATE TABLE `PWR_SUPPLY` (
  `CORSAIR_750` int(10) UNSIGNED NOT NULL,
  `EVGA_750` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `RAM`
--

CREATE TABLE `RAM` (
  `CRUCIAL_16GB` int(25) UNSIGNED NOT NULL,
  `GSKILL_16GB` int(25) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
