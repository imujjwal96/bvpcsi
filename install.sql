-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2016 at 09:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bvpcsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`) VALUES
(1, 'admin_bvpcsi', '99a0539bd685d52dee1d65e66cae1a7f');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(128) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(128) NOT NULL,
  `fb_link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `start_datetime`, `end_datetime`, `description`, `cover`, `fb_link`) VALUES
(1, 'Code Poetry', '2014-09-05 12:00:00', '2014-09-05 16:00:00', '<p>An event, Code Poetry, unique in its kind was held on 5th September, 2014. It was a global event, wherein the participants were required to write a code which generates automatic poetry or in a poetic manner. The participants were judged on the basis of complexity of code, logic and various other participants. Being a global event, this event witnessed a participation from other CSI chapters as well which in totality accounted for 50+ registrations.</p>', '', 'https://www.facebook.com/events/517172618415290/'),
(2, 'CSI Student State Convention 2014-15', '2014-11-20 10:00:00', '2014-11-21 16:00:00', '<p>BVPCSI- Student chapter of CSI in Bharati Vidyapeeth&rsquo;s College Of Engineering, New Delhi organized the State Student Convention of Delhi chapter (CSI) on 20 and 21 November 2014. With more than 20+ exhilarating events and a footfall of 700+ students, the convention was a great success. All the partner institutes in Delhi/NCR that has student chapter of CSI established in them were cordially invited .</p>', '', ''),
(3, 'Regional Student Convention 2016', '2016-02-03 10:00:00', '2016-02-04 16:00:00', '<p>Computer Society of India (CSI) organizes National, Regional, and State level Student Conventions annually, to enhance the awareness on technological developments and applications, and foster creative professional orientations among the academic community. The Conventions, held at Student Branches, offer excellent opportunities to the students to manifest their technical proficiency and prowess through paper presentations, discussions and extensive interactions with peers and pioneers. This year, <strong>BVPCSI</strong> shares immense pleasure to organise the Regional Student Convention 2016 for Region 1.</p>', 'img/12593890_1225405134140704_5887715294260218168_o.jpg', 'https://www.facebook.com/events/1699549006982172/'),
(4, 'Mega Internship Fair', '2016-04-08 10:00:00', '2016-04-08 16:00:00', '<p>We bring you an opportunity for the same with this Mega Internship event of BVPCSI and BVPINC- a perfect amalgamation of technicality with managerial skills. With this event, a number of startups come in ready with work along with ample experience up for grabs. The various Startups that are part of this event will be looking out for interns and job-seekers for various profiles. Just jot down your skills (i.e. write a resume), and put on your confidence suit, bring your A game in and nothing stands between, for you to make the most of this chance. It is open for all branches and for all years. Be sure to make the most of this Internship fair.</p>', 'img/12920294_10206148652664023_2883957025637536574_n.jpg', 'https://www.facebook.com/events/1749826391902433/'),
(5, 'Cofounders Meet 2016', '2016-01-15 10:00:00', '2016-01-15 16:00:00', '<p>After the success of the workshop on Startups, in collaboration with Startup Masterz, BVPCSI organised "Co-Founders Meet" providing another opportunity for the budding entrepreneurs. It was an events wherein students got a golden chance to bag an internship with a startup.</p>\r\n<p>There was an online preliminary round, on <strong style="color: #008cba;">7<sup>th</sup> January 2016</strong>, on the basis of which 25-30 students were be shortlisted. The selected candidates were be invited for the co-founders meet.</p>', 'img/1902752_1001832706527221_7841992108163216433_n.jpg', 'https://www.facebook.com/events/478004245735314/');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
