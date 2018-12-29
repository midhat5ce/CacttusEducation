-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 03:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecti`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `book_author` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `u_id`, `book_name`, `book_author`, `category`, `year`, `isbn`, `image`, `available`) VALUES
(1, 5, 'Gue Gue Pici Gue', 'Naim Frasheri', '', 0, 0, '', 0),
(2, 5, 'Art of war', 'Sun Tzu', '', 0, 0, '', 0),
(3, 5, 'Intellegent Investitor', 'Braham Grifin', '', 0, 0, '', 0),
(20, 8, 'a', 'a', 'a', 1, 1, '41ED+av59nL.jpg', 1),
(21, 8, 'b', 'b', 'b', 1, 1, '41ED+av59nL.jpg', 1),
(22, 8, 'c', 'c', 'c', 1, 1, '41ED+av59nL.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_uname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_uname`, `user_password`, `user_fname`, `user_lname`, `user_address`, `user_city`) VALUES
(1, 'test', 'e358efa489f58062f10dd7316b65649e', 'test_name', 'test_lname', 'Mitrovica', 'Prizren'),
(2, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'a', 'Mitrovica', ''),
(3, 'test1', '4a8a08f09d37b73795649038408b5f33', 'testName', 'testLastn', 'testAdress', 'Mitrovica'),
(4, 'r', '4b43b0aee35624cd95b910189b3dc231', 'emri', 'mbiemri', 'adasd', 'Mitrovice'),
(5, 'dreni', '0cc175b9c0f1b6a831c399e269772661', 'dren', 'kelmendi', 'asdasd', 'Prishtine'),
(6, 'e', '4b43b0aee35624cd95b910189b3dc231', 'e', 'e', 'e', 'Mitrovice'),
(8, 'z', 'fbade9e36a3f36d3d676c1b808451dd7', 'z', 'z', 'z', 'z');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
