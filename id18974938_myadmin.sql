-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `sub` varchar(150) NOT NULL,
  `msg` varchar(210) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `sub`, `msg`) VALUES
(1, 'milan', 'milanjethava143@gmail.com', 'milan', ''),
(2, 'milan', 'milanjethava143@gmail.com', 'milan', ''),
(3, 'milan', 'milanjethava143@gmail.com', 'milan', ''),
(4, 'milan', 'milanjethava143@gmail.com', 'milan', ''),
(5, 'milan', 'milanjethava143@gmail.com', 'milan', ''),
(6, 'milan', 'milan@s.com', 'jjjjjjjj', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `vpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `mobile`, `email`, `pass`, `vpass`) VALUES
(1, 'milan', 9904601605, 'milanjethava143@gmai', 'milan', 'milan'),
(2, 'prakash', 53562876, 'dknd@klml.com', 'pppp', 'pppp'),
(3, 'maa', 1213354, 'maa@dd.co', 'maa', 'maa'),
(4, 'maa', 1213354, 'maa@dd.co', 'maa', 'maa'),
(5, 'maa', 1213354, 'maa@dd.co', 'maa', 'maa'),
(6, 'mmklmc', 12456, 'md@dd.com', 'nnnn', 'nnnn'),
(7, 'mmklmc', 12456, 'md@dd.com', 'nnnn', 'nnnn'),
(8, 'mmklmc', 12456, 'md@dd.com', 'nnnn', 'nnnn'),
(9, 'www', 12389239, 'ww@dd.com', 'www', 'www'),
(10, 'www', 12389239, 'ww@dd.com', 'www', 'www'),
(11, 'kkk', 55443322, 'nnnn@m.com', 'mmm', 'mmm'),
(12, 'milan', 45599979, 'mjkjk@s.com', 'mmm', 'mmm'),
(13, 'milan', 45599979, 'mjkjk@s.com', 'mmm', 'mmm'),
(14, 'aaa', 2336, 'aa@aa.com', 'aaa', 'aaa'),
(15, 'aaa', 2336, 'aa@aa.com', 'aaa', 'aaa'),
(16, 'lll', 9090090, 'll@dd.com', 'lll', 'lll'),
(17, 'jjj', 12345, 'mmm@d.com', 'mmm', 'mmm'),
(18, 'asa', 123, 'asd@as.com', 'aa', 'aa'),
(19, 'wq', 1234, 'wq@s.com', 'vvv', 'vvv'),
(20, 'bbb', 12390, 'jk@dd.com', 'jjj', 'jjj'),
(21, 'bbb', 12390, 'jk@dd.com', 'jjj', 'jjj'),
(22, 'rr', 1244, 'mxm@dd.com', 'jj', 'jj'),
(23, 'milan', 8990, 'jjij@x.com', 'mmm', 'mmm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
