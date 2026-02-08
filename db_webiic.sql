-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2026 at 09:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webiic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategoria`
--

CREATE TABLE `tbl_kategoria` (
  `id` int(11) NOT NULL,
  `naran` varchar(250) NOT NULL,
  `kategoria` varchar(250) NOT NULL,
  `konteudu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategoria`
--

INSERT INTO `tbl_kategoria` (`id`, `naran`, `kategoria`, `konteudu`) VALUES
(4, 'dencio', 'gggg', 'het malu tia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `id` int(11) NOT NULL,
  `titulu` varchar(225) NOT NULL,
  `sub_titulu` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `konteudu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`id`, `titulu`, `sub_titulu`, `foto`, `konteudu`) VALUES
(16, 'DADUS MEDIA ', 'LOREN IPSUN MAI HUSI LIAN MANDARIN NEBE HANARAN LOREN', '1770431260_123.jpg', 'LOREN KATAK LIAN NEEBE HAMOS ITA NIAN FUANkjjjjjjjj'),
(24, 'lj;lj\'kj\'kj', 'ddf', '', 'wfsdfsdsd'),
(25, 'lj;lj\'kj\'kj', 'ddf', '', 'jkhhhhhhh'),
(26, 'lj;lj\'kj\'kj', 'ddf', '', 'jh;ljj'),
(27, 'jjj', 'g', '1770450409_iob.original.png', 'jjjjjhjhh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'giosoares', '$2y$10$rGLMRmdU/HeRgYEPke68w.DmhKM/68EGaS88LANMy1jEOqJqvy.Fy'),
(2, 'zefanio', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategoria`
--
ALTER TABLE `tbl_kategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategoria`
--
ALTER TABLE `tbl_kategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
