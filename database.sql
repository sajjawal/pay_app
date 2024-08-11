-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 06:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paymentapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alltickets`
--

CREATE TABLE `alltickets` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `msgdata` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `mindate` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `username` text DEFAULT NULL,
  `userrole` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alltickets`
--

INSERT INTO `alltickets` (`id`, `userid`, `msgdata`, `date`, `mindate`, `time`, `status`, `username`, `userrole`) VALUES
(1, '338', 'Hi', '04-06-2024', '20240604', '07:52:21 AM', '1', 'sumit bhargav', 'Teacher'),
(2, '338', 'suno', '05-06-2024', '20240605', '04:31:28 AM', '1', 'sumit bhargav', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `allticketsadmin`
--

CREATE TABLE `allticketsadmin` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `msgdata` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `mindate` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `username` text DEFAULT NULL,
  `userrole` text DEFAULT NULL,
  `schoolname` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allticketsadmin`
--

INSERT INTO `allticketsadmin` (`id`, `userid`, `msgdata`, `date`, `mindate`, `time`, `status`, `username`, `userrole`, `schoolname`) VALUES
(1, '337', 'hello this is system testing \r\ncall me know', '05-06-2024', '20240605', '05:35:15 AM', '1', 'Vidyapati +2 high school MOw bazidpur south', 'Admin', 'Vidyapati +2 high school'),
(2, '337', 'suno', '05-06-2024', '20240605', '05:35:30 AM', '1', 'Vidyapati +2 high school MOw bazidpur south', 'Admin', 'Vidyapati +2 high school'),
(3, '337', 'my systemis not working fine', '08-06-2024', '20240608', '09:01:27 AM', '1', 'Demo high school MOw bazidpur south', 'Admin', 'Vidyapati +2 high school'),
(4, '337', 'SHKASB', '09-06-2024', '20240609', '02:07:10 AM', '1', 'Demo high school MOw bazidpur south', 'Admin', 'Vidyapati +2 high school'),
(5, '359', 'JUST WANNA SAY HI, CALL M E', '16-06-2024', '20240616', '02:35:49 AM', '0', 'SWAMI vivekanand public school.', 'Admin', 'Swami videkand public school'),
(6, '337', 'btybgtvfrgybt', '14-07-2024', '20240714', '12:27:23 PM', '1', 'Demo high school MOw bazidpur south', 'Admin', 'Vidyapati +2 high school'),
(7, '337', 'rfj4grcgrj', '18-07-2024', '20240718', '11:16:29 AM', '0', 'Demo high school MOw bazidpur south', 'Admin', 'Vidyapati +2 high school');

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `id` int(11) NOT NULL,
  `schoolid` varchar(255) DEFAULT NULL,
  `schoolname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `rolename` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `fathername` varchar(255) DEFAULT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `profilepic` text DEFAULT NULL,
  `dojoin` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `specialization` text DEFAULT NULL,
  `place` text DEFAULT NULL,
  `userid` text DEFAULT NULL,
  `rollno` text DEFAULT NULL,
  `section_id` text DEFAULT NULL,
  `class_id` text DEFAULT NULL,
  `section_value` text DEFAULT NULL,
  `class_value` text DEFAULT NULL,
  `parent_id` text DEFAULT NULL,
  `subject_id` text DEFAULT NULL,
  `subject_lable` text DEFAULT NULL,
  `is_delete` varchar(255) NOT NULL DEFAULT '0',
  `pass_token` text DEFAULT NULL,
  `add_date` text DEFAULT NULL,
  `add_mindate` text DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `dobmin` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `isdiable` text DEFAULT NULL,
  `doa` text DEFAULT NULL,
  `doamin` text DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `emergencynumber` text DEFAULT NULL,
  `aadhar` text DEFAULT NULL,
  `parents` text DEFAULT NULL,
  `parentsoccupation` text DEFAULT NULL,
  `annualIncome` text DEFAULT NULL,
  `caste` text DEFAULT NULL,
  `dobs` text DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `lastinstitutions` text DEFAULT NULL,
  `experince` text DEFAULT NULL,
  `language` text DEFAULT NULL,
  `lastschool` text DEFAULT NULL,
  `classcompleted` text DEFAULT NULL,
  `userotp` int(11) DEFAULT NULL,
  `isban` int(11) DEFAULT NULL,
  `categoryid` text DEFAULT NULL,
  `api_key` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`id`, `schoolid`, `schoolname`, `username`, `email`, `password`, `role`, `rolename`, `number`, `fathername`, `bloodgroup`, `token`, `address`, `profilepic`, `dojoin`, `salary`, `specialization`, `place`, `userid`, `rollno`, `section_id`, `class_id`, `section_value`, `class_value`, `parent_id`, `subject_id`, `subject_lable`, `is_delete`, `pass_token`, `add_date`, `add_mindate`, `dob`, `dobmin`, `gender`, `isdiable`, `doa`, `doamin`, `hobbies`, `emergencynumber`, `aadhar`, `parents`, `parentsoccupation`, `annualIncome`, `caste`, `dobs`, `qualification`, `lastinstitutions`, `experince`, `language`, `lastschool`, `classcompleted`, `userotp`, `isban`, `categoryid`, `api_key`) VALUES
(1, NULL, NULL, 'Super', 'super@gmail.com', '12345', 'admin', 'Master', '7894561233', NULL, NULL, NULL, NULL, '3RQAipMXBY.jpg', NULL, NULL, NULL, 'UP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'FRHMM7ye5xyXBKeulWvS', NULL, NULL, '1989-05-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 805413, NULL, NULL, NULL),
(848, NULL, NULL, 'agent 1', 'agent1@gmail.com', '12345', 'Agent', 'Agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '2024-07-20', '20240720', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 'YoPhdCNHkwAJuPx'),
(849, NULL, NULL, 'Agent 2', 'agent2@gmail.com', '12345', 'Agent', 'Agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '2024-07-20', '20240720', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '4', 'OJ0LcRmAEOa726J'),
(850, NULL, NULL, 'agent 3', 'agent3@gmail.com', '12345', 'Agent', 'Agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '2024-07-20', '20240720', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2', 'QhIpaI78DQruGZQ'),
(851, NULL, NULL, 'agent50', 'agent50@gmail.com', '12345', 'Agent', 'Agent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '2024-07-30', '20240730', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 'VAhzOqwJ-Jbct-mloD-GNMh-pPcAd2LzhMHY');

-- --------------------------------------------------------

--
-- Table structure for table `bankaccount`
--

CREATE TABLE `bankaccount` (
  `id` int(11) NOT NULL,
  `userid` text DEFAULT NULL,
  `accountname` text DEFAULT NULL,
  `upi` text DEFAULT NULL,
  `bankaccountno` text DEFAULT NULL,
  `targetdaily` double DEFAULT NULL,
  `banknamevalue` text DEFAULT NULL,
  `banknamelable` text DEFAULT NULL,
  `statusvalue` text DEFAULT NULL,
  `statuslable` text DEFAULT NULL,
  `qrimage` text DEFAULT NULL,
  `is_delete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bankaccount`
--

INSERT INTO `bankaccount` (`id`, `userid`, `accountname`, `upi`, `bankaccountno`, `targetdaily`, `banknamevalue`, `banknamelable`, `statusvalue`, `statuslable`, `qrimage`, `is_delete`) VALUES
(1, '1', 'Amit Maj', '454887@yall', '78912324545454', 10000, 'bank2', 'Bank Two', '1', 'Active', 'jh2fD3a4C9.png', 0),
(2, '1', 'dsds weews', 'yudyus@jsdjsd', '34343434', 13333, 'bank2', 'Bank Two', '1', 'Active', 'C0tmzoRIeL.png', 0),
(3, '1', 'fdfd drere', '434343434@fdfd', '54545', 5454, 'bank3', 'Bank Three', '1', 'Active', 'jVtsAcZjwi.png', 0),
(4, '1', 'Soma Nath', '7844999796@yta', '45855785444', 10000000, 'bank3', 'Bank Three', '1', 'Active', 'JTpoUnHLev.png', 0),
(5, '1', 'Diska Kaja', '457855@hhgs', '77845485445', 600000, 'bank1', 'Bank One', '1', 'Active', '4NCI9uQ3Lx.png', 0),
(6, '1', 'Dios Lopo', '3324242342@oksbi', '5484548545454874', 6000, 'bank2', 'Bank Two', '1', 'Active', 'sWV8nQsjv1.png', 0),
(7, '1', 'Siisj jsij', '342423432@apl', '875445454454', 5000, 'bank2', 'Bank Two', '1', 'Active', 'rTWzc3AxL2.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `callback_res`
--

CREATE TABLE `callback_res` (
  `id` int(11) NOT NULL,
  `txnid` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `time` text DEFAULT NULL,
  `is_success` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `callback_res`
--

INSERT INTO `callback_res` (`id`, `txnid`, `date`, `time`, `is_success`) VALUES
(1, '52971541357520', '2024-07-29', '10:06 PM', 0),
(2, '52729730074827', '2024-07-29', '10:48 PM', 0),
(3, '52729730074827', '2024-07-29', '10:48 PM', 0),
(4, '52729730074827', '2024-07-29', '10:48 PM', 0),
(5, '52729730074827', '2024-07-30', '02:54 PM', 0),
(6, '52729730074827', '2024-07-30', '03:56 PM', 0),
(7, '51085822246886', '2024-07-30', '04:17 PM', 0),
(8, '52971541357520', '2024-07-30', '04:26 PM', 0),
(9, '68320254235776', '2024-07-30', '04:30 PM', 0),
(10, '11578465695498', '2024-07-30', '04:32 PM', 0),
(11, '33248569180247', '2024-07-30', '04:35 PM', 0),
(12, '33248569180247', '2024-07-30', '04:37 PM', 0),
(13, '33248569180247', '2024-07-30', '04:39 PM', 0),
(14, '33248569180247', '2024-07-30', '04:40 PM', 0),
(15, '33248569180247', '2024-07-30', '04:41 PM', 0),
(16, '33248569180247', '2024-07-30', '04:41 PM', 0),
(17, '33248569180247', '2024-07-30', '04:42 PM', 0),
(18, '33248569180247', '2024-07-30', '04:43 PM', 0),
(19, '33248569180247', '2024-07-30', '04:44 PM', 0),
(20, '33248569180247', '2024-07-30', '04:45 PM', 0),
(21, '33248569180247', '2024-07-30', '04:46 PM', 0),
(22, '89369103621132', '2024-07-30', '04:46 PM', 0),
(23, '89369103621132', '2024-07-30', '04:46 PM', 0),
(24, '89369103621132', '2024-07-30', '04:46 PM', 0),
(25, '45723535657176', '2024-07-30', '11:57 PM', 0),
(26, '45723535657176', '2024-07-30', '11:57 PM', 0),
(27, '69381339058077', '2024-07-31', '12:00 AM', 0),
(28, '69381339058077', '2024-07-31', '12:00 AM', 0),
(29, '98585705669971', '2024-07-31', '12:02 AM', 0),
(30, '98585705669971', '2024-07-31', '12:02 AM', 0),
(31, '51318627613279', '2024-07-31', '12:03 AM', 0),
(32, '51318627613279', '2024-07-31', '12:03 AM', 0),
(33, '83626967220944', '2024-07-31', '12:03 AM', 0),
(34, '83626967220944', '2024-07-31', '12:03 AM', 0),
(35, '52066040443155', '2024-07-31', '12:04 AM', 0),
(36, '52066040443155', '2024-07-31', '12:04 AM', 0),
(37, '68689315890531', '2024-07-31', '12:05 AM', 0),
(38, '68689315890531', '2024-07-31', '12:05 AM', 0),
(39, '59404930495324', '2024-08-01', '02:09 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryname` text DEFAULT NULL,
  `is_delete` int(11) DEFAULT NULL,
  `userid` text DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `is_delete`, `userid`, `is_active`) VALUES
(1, 'p1', 0, '1', 0),
(2, 'p2', 0, '1', 1),
(3, 'p3', 0, '1', 0),
(4, 'P4', 0, '1', 0),
(5, 'P5', 0, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_level`
--

CREATE TABLE `category_level` (
  `id` int(11) NOT NULL,
  `userid` text DEFAULT NULL,
  `catid` text DEFAULT NULL,
  `leveltype` int(11) DEFAULT NULL,
  `bankid` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_level`
--

INSERT INTO `category_level` (`id`, `userid`, `catid`, `leveltype`, `bankid`) VALUES
(1, '1', '1', 1, '7'),
(2, '1', '1', 2, '6'),
(3, '1', '1', 3, '5'),
(4, '1', '1', 4, '4'),
(5, '1', '1', 5, '3'),
(6, '1', '1', 6, '2'),
(7, '1', '1', 7, '3'),
(10, '1', '2', 1, '7'),
(11, '1', '2', 2, '6'),
(12, '1', '2', 3, '5'),
(13, '1', '2', 4, '4'),
(14, '1', '2', 5, '4'),
(15, '1', '2', 6, '5'),
(16, '1', '2', 7, '4');

-- --------------------------------------------------------

--
-- Table structure for table `exammultisemester`
--

CREATE TABLE `exammultisemester` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `lastid` varchar(255) DEFAULT NULL,
  `section_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exammultisemester`
--

INSERT INTO `exammultisemester` (`id`, `semester`, `lastid`, `section_id`) VALUES
(1, 'one (a)', '1', '1'),
(3, 'three (a)', '2', '2'),
(6, 'one (a)', '3', '5'),
(7, 'one (a)', '4', '7'),
(8, 'one (a)', '5', '1'),
(9, 'one (a)', '6', '1'),
(10, 'two (a)', '7', '2'),
(12, 'two (a)', '8', '11'),
(13, 'one (a)', '9', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `mindatetime` text NOT NULL,
  `sender_id` text NOT NULL,
  `rec_id` text NOT NULL,
  `title` text NOT NULL,
  `title_content` text NOT NULL,
  `sts` int(11) NOT NULL,
  `lastid` text DEFAULT NULL,
  `schoolname` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `useremail` text DEFAULT NULL,
  `userrole` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `date`, `time`, `mindatetime`, `sender_id`, `rec_id`, `title`, `title_content`, `sts`, `lastid`, `schoolname`, `username`, `useremail`, `userrole`) VALUES
(1, '04-06-2024', '03:54 AM', '1717453482', '1', '337', 'hi', 'hello guys', 1, '1', 'Vidyapati +2 high school', 'Vidyapati +2 high school MOw bazidpur south', 'VHS@gmail.com', 'Admin'),
(2, '05-06-2024', '04:46 AM', '1717542995', '337', '339', 'hello', '9798921524', 1, '2', 'Vidyapati +2 high school', 'sumitra', 'suman1@gmail.com', 'Student'),
(3, '06-06-2024', '09:06 AM', '1717644973', '1', '356', 'hello', 'hi', 0, '3', 'suno bhai', 'satyamkamal321@gmail.com', 'satyamkamal7821@gmail.com', 'Admin'),
(4, '06-06-2024', '09:09 AM', '1717645140', '1', '337', 'thank you for trying our demo service', 'Our aim is to provide smooth and effortless management software to meet all your school needs.', 1, '4', 'Vidyapati +2 high school', 'Demo high school MOw bazidpur south', 'VHS@gmail.com', 'Admin'),
(5, '06-06-2024', '09:09 AM', '1717645140', '1', '355', 'thank you for trying our demo service', 'Our aim is to provide smooth and effortless management software to meet all your school needs.', 1, '4', 'dlashing sarai school demo', 'satyamkamal321@gmail.com', 'satyamkamal321@gmail.com', 'Admin'),
(6, '06-06-2024', '09:09 AM', '1717645140', '1', '356', 'thank you for trying our demo service', 'Our aim is to provide smooth and effortless management software to meet all your school needs.', 0, '4', 'suno bhai', 'satyamkamal321@gmail.com', 'satyamkamal7821@gmail.com', 'Admin'),
(7, '06-06-2024', '10:25 AM', '1717649734', '337', '350', 'Ajeet', 'Holiday', 0, '5', 'Vidyapati +2 high school', 'raman', 'Raman@gmail.com', 'Teacher'),
(8, '06-06-2024', '10:25 AM', '1717649734', '337', '338', 'Ajeet', 'Holiday', 1, '5', 'Vidyapati +2 high school', 'sumit bhargav', 'sumit@gmail.com', 'Teacher'),
(9, '06-06-2024', '10:25 AM', '1717649734', '337', '358', 'Ajeet', 'Holiday', 0, '5', 'Vidyapati +2 high school', 'Ajeet kumar bhatta', 'ajeetmath1262@gmail.com', 'Student'),
(12, '28-06-2024', '11:22 AM', '1719553945', '338', '354', 'hello', 'dgsgds', 0, '7', 'Vidyapati +2 high school', 'raunak kumar', 'raunak@gmail.com', 'Student'),
(13, '28-06-2024', '11:22 AM', '1719553945', '338', '340', 'hello', 'dgsgds', 1, '7', 'Vidyapati +2 high school', 'AMIT', 'AMIT1@gmail.com', 'Student'),
(14, '28-06-2024', '11:22 AM', '1719553945', '338', '344', 'hello', 'dgsgds', 0, '7', 'Vidyapati +2 high school', 'Sudhanshu ranjan', 'SUDHANSHU@GMAIL.COM', 'Student'),
(15, '10-07-2024', '11:44 AM', '1720592093', '337', '338', 'hello good from form asif', 'egcjgdgcxjegdujgej', 1, '8', 'Vidyapati +2 high school', 'sumit bhargav', 'sumit@gmail.com', 'Teacher'),
(16, '10-07-2024', '11:44 AM', '1720592093', '337', '369', 'hello good from form asif', 'egcjgdgcxjegdujgej', 1, '8', 'Vidyapati +2 high school', 'gulshan', 'gulshan@gmail.com', 'Student'),
(17, '14-07-2024', '12:50 PM', '1720941638', '337', '844', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 1, '9', 'Vidyapati +2 high school', 'vikki', 'vikki123@gmail.com', 'Teacher'),
(18, '14-07-2024', '12:50 PM', '1720941638', '337', '350', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'raman', 'Raman@gmail.com', 'Teacher'),
(19, '14-07-2024', '12:50 PM', '1720941638', '337', '338', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 1, '9', 'Vidyapati +2 high school', 'sumit bhargav', 'sumit@gmail.com', 'Teacher'),
(20, '14-07-2024', '12:50 PM', '1720941638', '337', '845', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 1, '9', 'Vidyapati +2 high school', 'sudarshan', 'sudahrshan@gmail.com', 'Student'),
(21, '14-07-2024', '12:50 PM', '1720941638', '337', '358', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'Ajeet kumar bhatta', 'ajeetmath1262@gmail.com', 'Student'),
(22, '14-07-2024', '12:50 PM', '1720941638', '337', '354', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'raunak kumar', 'raunak@gmail.com', 'Student'),
(23, '14-07-2024', '12:50 PM', '1720941638', '337', '352', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'pushpam', 'pushpam@gmail.com', 'Student'),
(24, '14-07-2024', '12:50 PM', '1720941638', '337', '351', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'anwar', 'anwar@gmail.com', 'Student'),
(25, '14-07-2024', '12:50 PM', '1720941638', '337', '347', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'shubham anand', 'SHUBHAM@GMAIL.COM', 'Student'),
(26, '14-07-2024', '12:50 PM', '1720941638', '337', '346', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'Raushan ranjan', 'RAUSHAN@GMAIL.COM', 'Student'),
(27, '14-07-2024', '12:50 PM', '1720941638', '337', '345', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'Vikki kumar', 'VIKKI@GMAIL.COM', 'Student'),
(28, '14-07-2024', '12:50 PM', '1720941638', '337', '344', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'Sudhanshu ranjan', 'SUDHANSHU@GMAIL.COM', 'Student'),
(29, '14-07-2024', '12:50 PM', '1720941638', '337', '343', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'sumit bhargav', 'sumit123@gmail.com', 'Student'),
(30, '14-07-2024', '12:50 PM', '1720941638', '337', '342', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 0, '9', 'Vidyapati +2 high school', 'AMIT', 'AMIT6@gmail.com', 'Student'),
(31, '14-07-2024', '12:50 PM', '1720941638', '337', '341', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 1, '9', 'Vidyapati +2 high school', 'sumit', 'sumit6@gmail.com', 'Student'),
(32, '14-07-2024', '12:50 PM', '1720941638', '337', '340', 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', 1, '9', 'Vidyapati +2 high school', 'AMIT', 'AMIT1@gmail.com', 'Student'),
(33, '18-07-2024', '01:10 PM', '1721288437', '337', '844', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 1, '10', 'Vidyapati +2 high school', 'vikki', 'vikki123@gmail.com', 'Teacher'),
(34, '18-07-2024', '01:10 PM', '1721288437', '337', '350', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'raman', 'Raman@gmail.com', 'Teacher'),
(35, '18-07-2024', '01:10 PM', '1721288437', '337', '338', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'sumit bhargav', 'sumit@gmail.com', 'Teacher'),
(36, '18-07-2024', '01:10 PM', '1721288437', '337', '369', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'gulshan', 'gulshan@gmail.com', 'Student'),
(37, '18-07-2024', '01:10 PM', '1721288437', '337', '358', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'Ajeet kumar bhatta', 'ajeetmath1262@gmail.com', 'Student'),
(38, '18-07-2024', '01:10 PM', '1721288437', '337', '352', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'pushpam', 'pushpam@gmail.com', 'Student'),
(39, '18-07-2024', '01:10 PM', '1721288437', '337', '347', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'shubham anand', 'SHUBHAM@GMAIL.COM', 'Student'),
(40, '18-07-2024', '01:10 PM', '1721288437', '337', '346', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'Raushan ranjan', 'RAUSHAN@GMAIL.COM', 'Student'),
(41, '18-07-2024', '01:10 PM', '1721288437', '337', '345', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'Vikki kumar', 'VIKKI@GMAIL.COM', 'Student'),
(42, '18-07-2024', '01:10 PM', '1721288437', '337', '343', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'sumit bhargav', 'sumit123@gmail.com', 'Student'),
(43, '18-07-2024', '01:10 PM', '1721288437', '337', '341', 'tommorow is ptm', 'ptm is bvjebbcjwbmed', 0, '10', 'Vidyapati +2 high school', 'sumit', 'sumit6@gmail.com', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `notifiction_log`
--

CREATE TABLE `notifiction_log` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `title_content` text NOT NULL,
  `uid` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifiction_log`
--

INSERT INTO `notifiction_log` (`id`, `title`, `title_content`, `uid`, `date`) VALUES
(1, 'hi', 'hello guys', '1', '04-06-2024'),
(2, 'hello', '9798921524', '337', '05-06-2024'),
(3, 'hello', 'hi', '1', '06-06-2024'),
(4, 'thank you for trying our demo service', 'Our aim is to provide smooth and effortless management software to meet all your school needs.', '1', '06-06-2024'),
(5, 'Ajeet', 'Holiday', '337', '06-06-2024'),
(7, 'hello', 'dgsgds', '338', '28-06-2024'),
(8, 'hello good from form asif', 'egcjgdgcxjegdujgej', '337', '10-07-2024'),
(9, 'tomoorow is holiday', 'due to heavy rain tommorow is holiday', '337', '14-07-2024'),
(10, 'tommorow is ptm', 'ptm is bvjebbcjwbmed', '337', '18-07-2024');

-- --------------------------------------------------------

--
-- Table structure for table `orderid_gen`
--

CREATE TABLE `orderid_gen` (
  `id` int(11) NOT NULL,
  `userid` text DEFAULT NULL,
  `orderid` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderid_gen`
--

INSERT INTO `orderid_gen` (`id`, `userid`, `orderid`, `date`, `time`) VALUES
(1, '848', 'Order-25054180914640', '2024-07-29', '06:05 PM'),
(2, '848', 'Order-39956162897607', '2024-07-29', '06:10 PM'),
(3, '848', 'Order-83032778293474', '2024-07-30', '12:15 AM'),
(4, '851', 'Order-27296602240776', '2024-07-30', '04:17 PM'),
(5, '851', 'Order-82543253537036', '2024-07-30', '04:28 PM'),
(6, '851', 'Order-57920337849824', '2024-07-30', '04:29 PM'),
(7, '851', 'Order-16617702682763', '2024-07-30', '04:30 PM'),
(8, '851', 'Order-52261141431598', '2024-07-30', '04:32 PM'),
(9, '851', 'Order-68992141509263', '2024-07-30', '04:35 PM'),
(10, '851', 'Order-88408488874204', '2024-07-30', '04:46 PM'),
(11, '851', 'Order-89201745758877', '2024-07-30', '11:55 PM'),
(12, '851', 'Order-84617560483002', '2024-07-30', '11:55 PM'),
(13, '851', 'Order-70622497974844', '2024-07-30', '11:56 PM'),
(14, '851', 'Order-48940240128044', '2024-07-30', '11:56 PM'),
(15, '851', 'Order-63594708275798', '2024-07-30', '11:57 PM'),
(16, '851', 'Order-20470538458301', '2024-07-30', '11:59 PM'),
(17, '851', 'Order-46004281157420', '2024-07-31', '12:00 AM'),
(18, '851', 'Order-80524070351284', '2024-07-31', '12:02 AM'),
(19, '851', 'Order-61894101723489', '2024-07-31', '12:03 AM'),
(20, '851', 'Order-25978021529926', '2024-07-31', '12:03 AM'),
(21, '851', 'Order-20014162772881', '2024-07-31', '12:04 AM'),
(22, '851', 'Order-63764915976048', '2024-07-31', '12:05 AM'),
(23, '851', 'Order-30698085454174', '2024-07-31', '12:05 AM'),
(24, '851', 'Order-91457832957072', '2024-07-31', '12:15 AM'),
(25, '851', 'Order-51762526454085', '2024-08-01', '02:07 AM'),
(26, '851', 'Order-81312219227423', '2024-08-01', '02:09 AM');

-- --------------------------------------------------------

--
-- Table structure for table `stetment`
--

CREATE TABLE `stetment` (
  `id` int(11) NOT NULL,
  `bankid` text DEFAULT NULL,
  `add_date` text DEFAULT NULL,
  `mindate` text DEFAULT NULL,
  `stetment` text DEFAULT NULL,
  `is_delete` int(11) DEFAULT 0,
  `bankname` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stetment`
--

INSERT INTO `stetment` (`id`, `bankid`, `add_date`, `mindate`, `stetment`, `is_delete`, `bankname`) VALUES
(1, 'bank1', '01-08-2024', '20240801', 'jXx48hzcgm.png', 1, NULL),
(2, 'bank1', '01-08-2024', '20240801', 'OCPpz8duv4.png', 1, NULL),
(3, 'bank2', '01-08-2024', '20240801', 'TAwOFKlh7a.png', 1, NULL),
(4, 'bank1', '01-08-2024', '20240801', 'cB3ucvCQrM.png', 1, NULL),
(5, 'bank1', '01-08-2024', '20240801', 'emupelBc3o.png', 1, 'undefined'),
(6, 'bank1', '01-08-2024', '20240801', 'ZoRXqA0wen.png', 0, 'Bank One');

-- --------------------------------------------------------

--
-- Table structure for table `tnslog`
--

CREATE TABLE `tnslog` (
  `id` int(11) NOT NULL,
  `orderid` text DEFAULT NULL,
  `utr` text DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `order_status` int(11) DEFAULT NULL COMMENT '{ value: 0, label: ''All Status'' },\r\n        { value: 1, label: ''Initiate'' },\r\n        { value: 2, label: ''Incomplete'' },\r\n        { value: 3, label: ''Pending'' },\r\n        { value: 4, label: ''Success'' },\r\n        { value: 5, label: ''Failed'' },',
  `cat_id` text DEFAULT NULL,
  `bank_name` text DEFAULT NULL,
  `is_clam` int(11) DEFAULT NULL COMMENT '0 = not , 1 = yes',
  `dateis` text DEFAULT NULL,
  `timeis` text DEFAULT NULL,
  `mindate` text DEFAULT NULL,
  `is_delete` int(11) DEFAULT 0,
  `callbackurl` text DEFAULT NULL,
  `redirecturl` text DEFAULT NULL,
  `devicetype` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `txnid` text DEFAULT NULL,
  `accountname` text DEFAULT NULL,
  `upi` text DEFAULT NULL,
  `bankaccountno` text DEFAULT NULL,
  `targetdaily` text DEFAULT NULL,
  `banknamevalue` text DEFAULT NULL,
  `qrimage` text DEFAULT NULL,
  `is_callback` int(11) DEFAULT 0 COMMENT '0 = no 1 = yes',
  `cat_name` text DEFAULT NULL,
  `is_called` int(11) DEFAULT 0,
  `userid` text DEFAULT NULL,
  `bank_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tnslog`
--

INSERT INTO `tnslog` (`id`, `orderid`, `utr`, `amount`, `order_status`, `cat_id`, `bank_name`, `is_clam`, `dateis`, `timeis`, `mindate`, `is_delete`, `callbackurl`, `redirecturl`, `devicetype`, `note`, `txnid`, `accountname`, `upi`, `bankaccountno`, `targetdaily`, `banknamevalue`, `qrimage`, `is_callback`, `cat_name`, `is_called`, `userid`, `bank_id`) VALUES
(1, 'Order-25054180914640', NULL, 10, 5, '1', 'Bank Two', 0, '2024-07-29', '06:06 PM', '20240729', 0, 'http://localhost/paymentapp/api/callbackTess', 'http://localhost/paymentapp/api/redirecturl', 'web', '', '52729730074827', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 1, NULL, NULL),
(2, 'Order-39956162897607', '778978966465', 10, 4, '1', 'Bank Two', 0, '2024-07-29', '06:10 PM', '20240729', 0, 'http://localhost/paymentapp/api/callbackTess', 'http://localhost/paymentapp/api/redirecturl', 'web', '', '52971541357520', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 1, NULL, NULL),
(3, 'Order-27296602240776', NULL, 1000, 5, '1', 'Bank Two', 0, '2024-07-30', '04:17 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '51085822246886', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 1, '851', NULL),
(4, 'Order-82543253537036', NULL, 100, 1, '1', 'Bank Two', 0, '2024-07-30', '04:28 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '58262858593921', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 0, '851', NULL),
(5, 'Order-57920337849824', NULL, 100, 1, '1', 'Bank Two', 0, '2024-07-30', '04:29 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '20911870970088', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 0, '851', NULL),
(6, 'Order-16617702682763', '456456456456', 100, 4, '1', 'Bank Two', 0, '2024-07-30', '04:30 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '68320254235776', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 1, '851', NULL),
(7, 'Order-52261141431598', '645645645646', 100, 4, '1', 'Bank Two', 0, '2024-07-30', '04:32 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '11578465695498', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 1, '851', NULL),
(8, 'Order-68992141509263', '446654546546', 100, 4, '1', 'Bank Two', 0, '2024-07-30', '04:35 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '33248569180247', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 1, '851', NULL),
(9, 'Order-88408488874204', '465454646545', 301, 4, '1', 'Bank Two', 0, '2024-07-30', '04:46 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '89369103621132', 'Siisj jsij', '7887854587@uyuy', '875445454454', '900000', 'bank2', 'ZxPHCtKyWB.png', 0, 'p1', 1, '851', NULL),
(10, 'Order-70622497974844', NULL, 100, 1, '1', 'Bank Two', 0, '2024-07-30', '11:56 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '85648233923572', 'Siisj jsij', '7719132119@apl', '875445454454', '500', 'bank2', 'Qqj4qDRKXp.jpg', 0, 'p1', 0, '851', '7'),
(11, 'Order-48940240128044', '987987987897', 100, 4, '1', 'Bank Two', 0, '2024-07-30', '11:56 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '45723535657176', 'Siisj jsij', '7719132119@apl', '875445454454', '500', 'bank2', 'Qqj4qDRKXp.jpg', 0, 'p1', 1, '851', '7'),
(12, 'Order-63594708275798', NULL, 400, 1, '1', 'Bank Two', 0, '2024-07-30', '11:57 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '90063085948261', 'Dios Lopo', 'amit.techartist@oksbi', '5484548545454874', '600', 'bank2', 'zpwkjA2XQc.jpg', 0, 'p1', 0, '851', '6'),
(13, 'Order-20470538458301', '654654656466', 400, 4, '1', 'Bank Two', 0, '2024-07-30', '11:59 PM', '20240730', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '69381339058077', 'Siisj jsij', '7719132119@apl', '875445454454', '500', 'bank2', 'Qqj4qDRKXp.jpg', 0, 'p1', 1, '851', '7'),
(14, 'Order-46004281157420', NULL, 5, 1, '1', 'Bank Two', 1, '2024-07-31', '12:00 AM', '20240731', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '87060398137070', 'Siisj jsij', '7719132119@apl', '875445454454', '500', 'bank2', 'Qqj4qDRKXp.jpg', 0, 'p1', 0, '851', '7'),
(15, 'Order-80524070351284', '465464556465', 400, 4, '1', 'Bank Two', 1, '2024-07-31', '12:02 AM', '20240731', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '98585705669971', 'Siisj jsij', '7719132119@apl', '875445454454', '500', 'bank2', 'Qqj4qDRKXp.jpg', 0, 'p1', 1, '851', '7'),
(16, 'Order-61894101723489', '798778989879', 101, 4, '1', 'Bank Two', 1, '2024-07-31', '12:03 AM', '20240731', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '51318627613279', 'Dios Lopo', 'amit.techartist@oksbi', '5484548545454874', '600', 'bank2', 'zpwkjA2XQc.jpg', 0, 'p1', 1, '851', '6'),
(17, 'Order-25978021529926', '464564564654', 100, 4, '1', 'Bank Two', 1, '2024-07-31', '12:03 AM', '20240731', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '83626967220944', 'Siisj jsij', '7719132119@apl', '875445454454', '500', 'bank2', 'Qqj4qDRKXp.jpg', 0, 'p1', 1, '851', '7'),
(18, 'Order-20014162772881', '456456454654', 1, 4, '1', 'Bank Two', 1, '2024-07-31', '12:04 AM', '20240731', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '52066040443155', 'Dios Lopo', 'amit.techartist@oksbi', '5484548545454874', '600', 'bank2', 'zpwkjA2XQc.jpg', 0, 'p1', 1, '851', '6'),
(19, 'Order-63764915976048', '646546465654', 498, 4, '1', 'Bank Two', 1, '2024-07-31', '12:05 AM', '20240731', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '68689315890531', 'Dios Lopo', 'amit.techartist@oksbi', '5484548545454874', '600', 'bank2', 'zpwkjA2XQc.jpg', 0, 'p1', 1, '851', '6'),
(20, 'Order-30698085454174', NULL, 5, 1, '1', 'Bank One', 1, '2024-07-31', '12:05 AM', '20240731', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '46776622486467', 'Diska Kaja', '457855@hhgs', '77845485445', '600000', 'bank1', '4NCI9uQ3Lx.png', 0, 'p1', 0, '851', '5'),
(21, 'Order-91457832957072', NULL, 100, 1, '1', 'Bank Two', 1, '2024-07-31', '12:15 AM', '20240731', 0, 'http://localhost:3000/apiweb/redirectpage', 'http://localhost:3000/apiweb/redirectpage', 'WEB', 'test', '48522496419188', 'Siisj jsij', '7719132119@apl', '875445454454', '5000', 'bank2', 'Qqj4qDRKXp.jpg', 0, 'p1', 0, '851', '7'),
(22, 'Order-51762526454085', NULL, 10, 2, '1', 'Bank Two', 0, '2024-08-01', '02:07 AM', '20240801', 0, 'https://abhianya.com/apiweb/redirectpage', 'https://abhianya.com/apiweb/redirectpage', 'WEB', 'test', '98577087894819', 'Siisj jsij', '342423432@apl', '875445454454', '5000', 'bank2', 'rTWzc3AxL2.png', 0, 'p1', 0, '851', '7'),
(23, 'Order-81312219227423', '234242423432', 20, 1, '1', 'Bank Two', 0, '2024-08-01', '02:09 AM', '20240801', 0, 'https://abhianya.com/apiweb/redirectpage', 'https://abhianya.com/apiweb/redirectpage', 'WEB', 'test', '59404930495324', 'Siisj jsij', '342423432@apl', '875445454454', '5000', 'bank2', 'rTWzc3AxL2.png', 1, 'p1', 1, '851', '7');

-- --------------------------------------------------------

--
-- Table structure for table `uploadstement`
--

CREATE TABLE `uploadstement` (
  `id` int(11) NOT NULL,
  `bankid` text DEFAULT NULL,
  `orderid` text DEFAULT NULL,
  `tnsdate` text DEFAULT NULL,
  `tnsno` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `isclaimed` int(11) DEFAULT NULL COMMENT '0 = not, 1 = yes',
  `tnsfulldate` text DEFAULT NULL,
  `is_delete` int(11) DEFAULT 0,
  `slno` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadstement`
--

INSERT INTO `uploadstement` (`id`, `bankid`, `orderid`, `tnsdate`, `tnsno`, `amount`, `isclaimed`, `tnsfulldate`, `is_delete`, `slno`) VALUES
(1, '1', '1231315489978', '2023-01-01', '464987654987', '10000', 0, '2023-06-16 17:31:39', 0, '1'),
(2, '1', '1231315489978', '2023-01-01', '464987654987', '60000', 0, '2023-06-16 17:31:39', 0, '2'),
(3, '1', '1231315489978', '2023-01-01', '464987654987', '10000', 1, '2023-06-16 17:31:39', 0, '3'),
(4, '1', '1231315489978', '2023-01-01', '464987654987', '10000', 1, '2023-06-16 17:31:39', 0, '4'),
(5, '1', '1231315489978', '2023-01-01', '464987654987', '10000', 0, '2023-06-16 17:31:39', 0, '5'),
(6, '1', '1231315489978', '2023-01-01', '464987654987', '10000', 0, '2023-06-16 17:31:39', 0, '6'),
(7, '1', '1231315489978', '2023-01-01', '464987654987', '10000', 1, '2023-06-16 17:31:39', 0, '7'),
(8, '1', '1231315489978', '2023-01-01', '464987654987', '150000', 0, '2023-06-16 17:31:39', 0, '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alltickets`
--
ALTER TABLE `alltickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allticketsadmin`
--
ALTER TABLE `allticketsadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankaccount`
--
ALTER TABLE `bankaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callback_res`
--
ALTER TABLE `callback_res`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_level`
--
ALTER TABLE `category_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exammultisemester`
--
ALTER TABLE `exammultisemester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifiction_log`
--
ALTER TABLE `notifiction_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderid_gen`
--
ALTER TABLE `orderid_gen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stetment`
--
ALTER TABLE `stetment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tnslog`
--
ALTER TABLE `tnslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadstement`
--
ALTER TABLE `uploadstement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alltickets`
--
ALTER TABLE `alltickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `allticketsadmin`
--
ALTER TABLE `allticketsadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=852;

--
-- AUTO_INCREMENT for table `bankaccount`
--
ALTER TABLE `bankaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `callback_res`
--
ALTER TABLE `callback_res`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_level`
--
ALTER TABLE `category_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exammultisemester`
--
ALTER TABLE `exammultisemester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `notifiction_log`
--
ALTER TABLE `notifiction_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderid_gen`
--
ALTER TABLE `orderid_gen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stetment`
--
ALTER TABLE `stetment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tnslog`
--
ALTER TABLE `tnslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `uploadstement`
--
ALTER TABLE `uploadstement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
