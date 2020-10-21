-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2020 at 10:44 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_ov_table`
--

CREATE TABLE `gs_ov_table` (
  `id` int(12) NOT NULL,
  `g_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `v_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `star` int(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gs_ov_table`
--

INSERT INTO `gs_ov_table` (`id`, `g_name`, `v_name`, `comment`, `star`, `indate`) VALUES
(1, 'Fan Bingbing', 'Ken', 'すばらしい旅をありがとう！', 5, '2020-10-18 18:39:39'),
(2, 'Bruce Lee', 'Ken', 'またお願いしたいです。', 3, '2020-10-19 02:10:52'),
(3, 'Jet Li', 'Ken', '楽しい思い出になりました。', 2, '2020-10-21 22:21:08'),
(4, 'Jackie Chan', 'Ken', '最高でした！', 5, '2020-10-21 22:38:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_ov_table`
--
ALTER TABLE `gs_ov_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_ov_table`
--
ALTER TABLE `gs_ov_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
