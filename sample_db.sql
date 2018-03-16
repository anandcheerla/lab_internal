-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `text`) VALUES
(1, '', ''),
(2, '', ''),
(3, 'anandcheerla', 'dsdsfsadas'),
(4, 'anandcheerla', 'dsdsfsadas'),
(5, 'anandcheerla', 'asdsadkuy8i'),
(6, 'anandcheerla', 'qqqqqqqqqqqqqqq'),
(7, 'anandcheerla', 'qqqqqqqqqqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `news_db`
--

CREATE TABLE `news_db` (
  `id` int(10) NOT NULL,
  `text` varchar(500) NOT NULL,
  `file` varchar(200) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `news_db`
--

INSERT INTO `news_db` (`id`, `text`, `file`, `date`) VALUES
(15, '\r\nThe sight of photographers crowding around a newly docked ocean liner was nothing new at the turn of the 20th Century.', '_100197306_50cf234d-fdf1-412d-9ab9-76546790df32.jpg', '0000-00-00 00:00:00.000000'),
(16, 'PM Narendra Modi is using Reddy and Kalyan against us: CM Chandrababu Naidu', 'MODI-PTI.jpg', '0000-00-00 00:00:00.000000'),
(17, 'A new home after tragedy', '_100421975_a4e5c030-92e5-4dee-a94c-a315951ea742.jpg', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sample_table`
--

CREATE TABLE `sample_table` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_table`
--

INSERT INTO `sample_table` (`firstname`, `lastname`, `username`, `password`, `confirmpassword`, `email`) VALUES
('', '', '', '', '', ''),
('akhila', 'mohana', 'akhi', 'akhil', 'akhil', 'akhila@gmail.com'),
('anand', 'kumar', 'anandcheerla', 'akc', 'akc', 'anandcheerla@gmail.com'),
('some', 'somesome', 'qwer', 'dsfgjnds', 'adkjfhg', 'ndbiuyshf@gmail.com'),
('shannu', 'bannu', 'shan', 'gun', 'gun', 'shannu@gmail.com'),
('uday', 'kiran', 'udayam', 'uday', 'uday', 'uday@gmail.com'),
('aduday', 'kiranad', 'udayamasda', 'iii', 'iii', 'udayadsa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample_table`
--
ALTER TABLE `sample_table`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `news_db`
--
ALTER TABLE `news_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
