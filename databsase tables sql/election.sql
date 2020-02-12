-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 09:32 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `candidate_name` varchar(20) NOT NULL,
  `candidate_position` varchar(20) NOT NULL,
  `candidate_votes` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_votes`) VALUES
(1, 'robert', 'president', 1),
(2, 'jason', 'president', 0),
(3, 'juma', 'president', 0),
(4, 'luumi', 'senetor', 1),
(5, 'kassim', 'senetor', 0),
(6, 'hamis', 'senetor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `election3`
--

CREATE TABLE `election3` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election3`
--

INSERT INTO `election3` (`id`, `firstname`, `lastname`, `userid`, `password`) VALUES
(1, 'anold', 'robert', '21', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `idnum`
--

CREATE TABLE `idnum` (
  `id` int(11) NOT NULL,
  `userid` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idnum`
--

INSERT INTO `idnum` (`id`, `userid`) VALUES
(1, '21'),
(2, '22'),
(3, '23'),
(4, '24'),
(5, '25'),
(6, '26'),
(7, '27'),
(8, '28'),
(9, '29'),
(10, '30'),
(11, '31'),
(12, '32'),
(13, '33'),
(14, '34'),
(15, '35'),
(16, '36'),
(17, '37');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `president` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`id`, `userid`, `president`) VALUES
(1, '21', 'robert');

-- --------------------------------------------------------

--
-- Table structure for table `senetor`
--

CREATE TABLE `senetor` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `senetor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senetor`
--

INSERT INTO `senetor` (`id`, `userid`, `senetor`) VALUES
(1, '21', 'luumi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `election3`
--
ALTER TABLE `election3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idnum`
--
ALTER TABLE `idnum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senetor`
--
ALTER TABLE `senetor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `election3`
--
ALTER TABLE `election3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `idnum`
--
ALTER TABLE `idnum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `senetor`
--
ALTER TABLE `senetor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
