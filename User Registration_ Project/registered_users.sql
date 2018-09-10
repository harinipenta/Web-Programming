-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 06:04 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dform`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `first_name`, `last_name`, `qualification`, `password`, `email`, `gender`) VALUES
(1, 'fffffffffff', '     samatdfdfha', '     nllvll  dfdf   ', '     btech', 'md5(test)', '     gsfgfgfg@gmail.com', ' Female'),
(2, '  sam', '  samatha', '  nllvll  ', '  btech', 'md5(test)', '  sam123@gmail.com', ' Female'),
(4, '   sam', '   samatha', '   nllvll   ', '   btech', 'md5(test)', '   sam123@gmail.com', ' Female'),
(5, '     samfddf', '     samatha', '     nllvll dsdsad  ', '     btechfdfsdf', 'md5(test)', '     sam1234vsvsv@gmail.com', ' Female'),
(7, '      sam93', '      samatha', '      nllvll      ', 'Undergraduate', 'md5(test)', '   sdfsdfds@gmail.com', ' Female'),
(10, ' samatha94', ' samatha', ' maram ', ' b-tech', 'md5(test)', ' nsamathareddy23@gmail.com', ' Female'),
(11, ' um anaidu91', ' uma chandrika', ' kattama ', ' b-tech', 'md5(test)', ' umanaidujindabad@gmail.com', ' Female'),
(12, ' anusha', ' anu', ' gona ', 'PHD', 'md5(test)', ' anushagona@gmail.com', ' Female'),
(13, 'siri123', 'srileka', 'loka', 'MS', '098f6bcd4621d373cade4e832', 'siri789@gmail.com', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
