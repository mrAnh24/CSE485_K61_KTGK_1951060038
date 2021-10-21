-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 02:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` int(10) NOT NULL,
  `bd_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bd_sex` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bd_age` int(10) NOT NULL,
  `bd_bgroup` char(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phno` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
(1, 'Trần Đức Anh', 'Nam', 24, 'O', '0000-00-00', 943368523),
(2, 'Trần Anh Đức', 'Nam', 24, 'O', '0000-00-00', 943790573),
(3, 'Trần Hải Yến', 'Nữ', 20, 'O', '0000-00-00', 943830123),
(4, 'Nguyễn Hải Đình', 'Nam', 27, 'O', '0000-00-00', 943019473),
(5, 'Nguyễn Xuân Tuấn', 'Nam', 27, 'O', '0000-00-00', 943301275),
(6, 'Trần Đức Nam', 'Nam', 23, 'O', '0000-00-00', 940486925);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
