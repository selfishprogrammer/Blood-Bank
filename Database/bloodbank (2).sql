-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 09:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_blog`
--

CREATE TABLE `blood_blog` (
  `slno` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_blog`
--

INSERT INTO `blood_blog` (`slno`, `img`, `title`, `desp`) VALUES
(1, 'back4.png', 'Blood Donation', 'Blood Donation will cost you nothing, but it will save a life.'),
(2, 'blood.jpg', 'Blood Is Life', 'Service to others is the rent you pay for your room here on earth.');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `slno` int(100) NOT NULL,
  `name_owner` varchar(100) NOT NULL,
  `name_asso` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `full_address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `map` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `file1` varchar(100) NOT NULL,
  `file2` varchar(100) NOT NULL,
  `file3` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`slno`, `name_owner`, `name_asso`, `email`, `phone`, `full_address`, `pincode`, `map`, `country`, `state`, `dist`, `file`, `file1`, `file2`, `file3`, `details`, `start_date`, `end_date`, `start_time`, `end_time`) VALUES
(6, 'Rahul Jha', 'Bara Association', 'rahuljha3246@gmail.com', '6296002855', 'Banarhat Dharamsala Road', '735202', 'www.google.com', 'India', 'West Bengal', 'Jalpaiguri', 'eachother.jpeg', 'IMG-20200902-WA0004 (4).jpg', 'IMG-20200902-WA0004 (3).jpg', 'IMG-20200902-WA0004.jpg', 'This Is Association Comes Under Bara Club . We Do Various Things For People Who Need Any Kind Of Things. We Are Coducting Our Blood Donation Camp So , Through This Website We Want that People Must Know That They Can Donate and Save Someones Life.', '2020-09-17', '2020-09-24', '12:38', '04:38'),
(7, 'Lions Club of Banarhat', 'Lions Club of Banarhat', 'lions@gmail.com', '6296002855', 'Banarhat Dharamsala Road', '735202', 'www.google.com', 'India', 'West Bengal', 'Jalpaiguri', 'blood.jpg', 'blood1.jpg', 'blood2.jpg', 'blood.jpg', 'This For Saving Someone Life.', '2020-11-29', '2020-11-30', '08:30', '16:30');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `slno` int(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `cities_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`slno`, `id`, `cities_name`) VALUES
(1, 'Andra Pradesh', 'Anantapur'),
(2, 'Andra Pradesh', 'Chittor'),
(3, 'Andra Pradesh', 'East Godavari'),
(4, 'Bihar', 'Patna'),
(5, 'Bihar', 'Darbhanga'),
(6, 'Bihar', 'Madhubani'),
(7, 'Bihar', 'Mujhaffarpur'),
(8, 'West Bengal', 'Kolkata'),
(9, 'West Bengal', 'Bankura'),
(10, 'West Bengal', 'Malda'),
(11, 'West Bengal', 'Haldia'),
(12, 'West Bengal', 'Alipurduar'),
(13, 'West Bengal', 'Jalpaiguri'),
(14, 'West Bengal', 'Darjeeling');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `slno` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `desp` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`slno`, `img`, `title`, `desp`) VALUES
(1, 'n1.jpg', 'Blood Donation On PM Birthday', 'Attacking the Congress, Nalin Kumar said, \"When Congress was in power there were a lot of murders and assaults happening in the district, even cattle thefts were on the rise. Every day there would be a murder or assault during Congress\' administration. Congress representatives were involved in sand mafia. Ramanath Rai\'s name had come up in sand mafia issue. Even in drugs issue former Congress mayor\'s son was involved. So when there were so many irregularities during Congress administration, there is no need for the Congress to give lessons to BJP.\"\n\nOn the achievements of the BJP government, he said, \"We have seen a lot of changes during the last one year of BJP administration. There was not a single instance of Hindu-Muslim communal violence. Violence related to protest over Citizenship Amendment Act (CAA) was stopped within an hour, but during Congress government there were a lot of instances of violence, murders, assaults, thefts, irregularities, cattle thefts etc. I challenge Congress leaders to face me for an open discussion on this.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `slno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`slno`, `name`, `email`, `phone`, `age`, `address`, `dist`, `state`, `blood`) VALUES
(6, 'Rahul Jha', 'rahul@gmail.com', '69', '20', 'India', 'Patna', 'Bihar', 'AB+'),
(7, 'Rajiv Anwar', 'rajiv@gmail.com', '6296002855', '29', 'India', 'Bankura', 'West Bengal', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `slno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`slno`, `name`) VALUES
(1, 'Andra Pradesh'),
(2, 'Bihar'),
(3, 'Delhi'),
(4, 'Mumbai'),
(5, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `why_to_donate`
--

CREATE TABLE `why_to_donate` (
  `slno` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desp` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `why_to_donate`
--

INSERT INTO `why_to_donate` (`slno`, `img`, `title`, `desp`) VALUES
(1, 's.jpg', 'Donating blood saves lives', 'The blood that we donate is used to save the\r\n                                            people who are\r\n                                            in desperate need. There are four types of transfusable products that can be\r\n                                            derived from blood: red cells, platelets, plasma and cryoprecipitate.\r\n                                            Typically, two or three of these are produced from a pint of donated whole\r\n                                            blood – hence each donation can help save up to three lives. The blood\r\n                                            donated is saved in blood banks and preserved to serve anyone who needs it\r\n                                            in future, therefore the blood donated is never a waste.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_blog`
--
ALTER TABLE `blood_blog`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `why_to_donate`
--
ALTER TABLE `why_to_donate`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_blog`
--
ALTER TABLE `blood_blog`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `why_to_donate`
--
ALTER TABLE `why_to_donate`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
