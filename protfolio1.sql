-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2021 at 10:54 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protfolio1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `admin_name` text COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_cover_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_age` int(10) NOT NULL,
  `admin_adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_bio` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_password`, `admin_picture`, `admin_cover_image`, `admin_job`, `admin_age`, `admin_adress`, `admin_phone`, `admin_bio`) VALUES
(2, 'Md Nazmul Islam', 'md.nazmul.islam1332@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', 'admin_profile.jpg', 'admin_cover.jpg', 'Web Developer, Freelancer', 23, 'Narisha, Dohar, Dhaka - 1332', '+8801924521771', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
