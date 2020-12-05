-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 03:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobpadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `cv` varchar(225) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL,
  `job` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user`, `phone`, `email`, `sex`, `cv`, `date`, `status`, `job`) VALUES
(7, 'Aminigbo Paul', '09011684637', 'ritzypaulmichael81@gmail.com', '-- SELECT GENDER --', 'job-cvs/Ogapredictor proposal.docx', '2020-12-01', 'submitted', 'GGGG'),
(8, 'Harvoxx Technologies', '09011684637', 'hello@hthub.com.ng', 'MALE', 'job-cvs/Ogapredictor proposal.docx', '2020-12-01', 'submitted', 'RRRR');

-- --------------------------------------------------------

--
-- Table structure for table `dpt`
--

CREATE TABLE `dpt` (
  `id` int(11) NOT NULL,
  `vector` varchar(1111) NOT NULL,
  `class` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dpt`
--

INSERT INTO `dpt` (`id`, `vector`, `class`) VALUES
(1, 'assets/vectors/job1.png', 'Engineer'),
(2, 'assets/vectors/job2.png', 'Project manager'),
(3, 'assets/vectors/job3.png', 'Receptionist'),
(4, 'assets/vectors/job4.png', 'Chef'),
(5, 'assets/vectors/job1.png', 'Manager'),
(6, 'assets/vectors/job1.png', 'Marketing\r\n'),
(7, 'assets/vectors/job1.png', 'Pharmacist'),
(8, 'assets/vectors/job1.png', 'Teacher'),
(9, 'assets/vectors/job1.png', 'Medical Doctor'),
(10, 'assets/vectors/job1.png', 'Operations officer'),
(11, 'assets/vectors/job1.png', 'Accountant'),
(12, 'assets/vectors/job1.png', 'Software Engineer'),
(13, 'assets/vectors/job1.png', 'Cashier'),
(14, 'assets/vectors/job1.png', 'Supervisor'),
(15, 'assets/vectors/job1.png', 'Interns');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category` varchar(225) NOT NULL,
  `firm` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `position` varchar(225) NOT NULL,
  `salary` varchar(225) NOT NULL,
  `avatar` varchar(225) NOT NULL,
  `date` varchar(1111) NOT NULL,
  `status` int(11) NOT NULL,
  `code` varchar(1111) NOT NULL,
  `requirement1` varchar(225) NOT NULL,
  `requirement2` varchar(255) NOT NULL,
  `requirement3` varchar(255) NOT NULL,
  `requirement4` varchar(225) NOT NULL,
  `requirement5` varchar(255) NOT NULL,
  `requirement6` varchar(225) NOT NULL,
  `requirement7` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category`, `firm`, `location`, `position`, `salary`, `avatar`, `date`, `status`, `code`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`, `requirement7`) VALUES
(10, 'Cashier', 'Jobpadi', 'Rivers State', 'Driver', '40,000', 'job-avatars/footwear].jpg', '2020-12-03', 1, 'L5L7', 'We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful       In addition to job listing w', 'We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful       In addition to job listing we provide you with additional ', 'We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful       In addition to job listing we provide you with additional ', 'We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful       In addition to job listing w', 'We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful       In addition to job listing we provide you with additional ', 'We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful       In addition to job listing w', 'We are your one stop-platform for latest job-listing. We specialize in compiling and listing local job openings across Nigeria. We make your job search experience fruitful and less stressful       In addition to job listing w');

-- --------------------------------------------------------

--
-- Table structure for table `padiadmin`
--

CREATE TABLE `padiadmin` (
  `id` int(11) NOT NULL,
  `access` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `padiadmin`
--

INSERT INTO `padiadmin` (`id`, `access`) VALUES
(1, 'aminigbopaul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `padicontacts`
--

CREATE TABLE `padicontacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(2222) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dpt`
--
ALTER TABLE `dpt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `padiadmin`
--
ALTER TABLE `padiadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `padicontacts`
--
ALTER TABLE `padicontacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dpt`
--
ALTER TABLE `dpt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `padiadmin`
--
ALTER TABLE `padiadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `padicontacts`
--
ALTER TABLE `padicontacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
