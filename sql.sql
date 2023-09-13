-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 04:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employement-express`
--

-- --------------------------------------------------------

--
-- Table structure for table `add-categories`
--

CREATE TABLE `add-categories` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `tjobs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add-categories`
--

INSERT INTO `add-categories` (`id`, `img`, `cname`, `tjobs`) VALUES
(9, '../user/assets/img/catagories/img2.jpg', 'Education', '2200'),
(10, '../user/assets/img/catagories/img3.jpg', 'Bussiness', '3340'),
(11, '../user/assets/img/catagories/img4.jpg', 'Finance', '1430'),
(12, '../user/assets/img/catagories/img5.jpg', 'IT jobs', '1199');

-- --------------------------------------------------------

--
-- Table structure for table `add-companies`
--

CREATE TABLE `add-companies` (
  `id` int(11) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `jtitle` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vaccanicies` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add-companies`
--

INSERT INTO `add-companies` (`id`, `img1`, `jtitle`, `cname`, `location`, `vaccanicies`) VALUES
(17, '../user/assets/img/jobs/img2.png', 'MagNews', 'Software Company', 'Lahore', '10 OPEN JOB'),
(18, '../user/assets/img/jobs/img3.png', 'Facebook', 'IT company', 'London', '20 OPEN JOB'),
(19, '../user/assets/img/jobs/xcompany-logo.png.pagespeed.ic.L_vJw7qEE7.png', 'Amaze Tech', 'Software Company', 'New York', '30 OPEN JOB');

-- --------------------------------------------------------

--
-- Table structure for table `admin-panel-access`
--

CREATE TABLE `admin-panel-access` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-panel-access`
--

INSERT INTO `admin-panel-access` (`id`, `email`, `password`) VALUES
(1, 'sohaibamjad2522@gmail.com', 'Sohaib@1'),
(2, 'sohaibamjad1699@gmail.com', 'Sohaib@2522\r\n'),
(3, 'sohaibamjad2522@gmail.com', 'Sohaib@2522');

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `faname` text NOT NULL,
  `cnic` int(100) NOT NULL,
  `facnic` int(100) NOT NULL,
  `religion` text NOT NULL,
  `mstatus` text NOT NULL,
  `dob` varchar(1000) NOT NULL,
  `dcity` text NOT NULL,
  `pcode` int(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `tehsil` text NOT NULL,
  `pname` text NOT NULL,
  `g1` text NOT NULL,
  `py1` varchar(1000) NOT NULL,
  `tm1` varchar(1000) NOT NULL,
  `ob1` varchar(1000) NOT NULL,
  `iname1` varchar(1000) NOT NULL,
  `bname1` text NOT NULL,
  `rn1` varchar(1000) NOT NULL,
  `mp1` varchar(1000) NOT NULL,
  `g2` text NOT NULL,
  `py2` int(100) NOT NULL,
  `tm2` int(100) NOT NULL,
  `ob2` varchar(1000) NOT NULL,
  `iname2` varchar(1000) NOT NULL,
  `bname2` varchar(1000) NOT NULL,
  `rn2` varchar(1000) NOT NULL,
  `mp2` int(100) NOT NULL,
  `g3` text NOT NULL,
  `py3` int(100) NOT NULL,
  `tm3` int(100) NOT NULL,
  `ob3` int(100) NOT NULL,
  `iname3` varchar(1000) NOT NULL,
  `bname3` varchar(1000) NOT NULL,
  `rn3` varchar(1000) NOT NULL,
  `mp3` int(100) NOT NULL,
  `resume` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`id`, `fname`, `lname`, `faname`, `cnic`, `facnic`, `religion`, `mstatus`, `dob`, `dcity`, `pcode`, `address`, `tehsil`, `pname`, `g1`, `py1`, `tm1`, `ob1`, `iname1`, `bname1`, `rn1`, `mp1`, `g2`, `py2`, `tm2`, `ob2`, `iname2`, `bname2`, `rn2`, `mp2`, `g3`, `py3`, `tm3`, `ob3`, `iname3`, `bname3`, `rn3`, `mp3`, `resume`) VALUES
(14, 'Sohaib', 'Amjad', 'Muhammad Amjad', 2147483647, 2147483647, 'Religion', 'Unmarried', '2001-08-21', 'Sahiwal', 57200, 'Chak No 169/9L', 'Chichawatni', 'Punjab', 'Science', '2017', '1100', '817', 'Government Model High School', 'Sahiwal', '3525215', '75', 'Science', 2019, 1100, '703', 'Superior College Burewala', 'Multan', '231331', 70, 'Science', 2023, 4, 3, 'University of sahiwal', '3.24', '19-33', 70, './assets/resume/SohaibResume.pdf'),
(15, 'Sohaib ', 'Amjad', 'Muhammad Amjad', 9099998, 9889889, 'Muslim', 'Unmarried', '2001-08-21', 'Sahiwal', 57200, 'Chak No 169/9L', 'chichawatni', 'Punjab', '', '2017', '1100', '817', 'Government Model High School', 'Sahiwal', '838883', '75', '', 2019, 1100, '703', 'Superior College Burewala', 'Multan', '73837', 70, '', 2023, 4, 3, 'University of sahiwal', '2019-cs-3982', '19-33', 70, '../user/assets/img/'),
(16, 'Sohaib', 'Amjad', 'Muhammad Amjad', 2147483647, 2147483647, 'Muslim', 'Unmarried', '2001-08-21', 'Sahiwal', 57200, 'Chak No 169/9L', 'Chichawatni', 'Punjab', 'Science', '', '', '', '', '', '', '', 'Science', 0, 0, '', '', '', '', 0, 'Science', 0, 0, 0, '', '', '', 0, './assets/resume/SohaibResume.pdf'),
(17, 'Sohaib', 'Amjad', 'Muhammad Amjad', 2147483647, 2147483647, 'Muslim', 'Unmarried', '2001-08-21', 'Sahiwal', 57200, 'Chak No 169/9L', 'Chichawatni', 'Punjab', 'Science', '', '', '', '', '', '', '', 'Science', 0, 0, '', '', '', '', 0, 'Science', 0, 0, 0, '', '', '', 0, './assets/resume/SohaibResume.pdf'),
(18, 'Sohaib', 'Amjad', 'Muhammad Amjad', 2147483647, 2147483647, 'Muslim', 'Unmarried', '2001-08-21', 'Sahiwal', 57200, 'Chak No 169/9L', 'Chichawatni', 'Punjab', 'Science', '', '', '', '', '', '', '', 'Science', 0, 0, '', '', '', '', 0, 'Science', 0, 0, 0, '', '', '', 0, './assets/resume/');

-- --------------------------------------------------------

--
-- Table structure for table `company-login`
--

CREATE TABLE `company-login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company-login`
--

INSERT INTO `company-login` (`id`, `name`, `email`, `password`) VALUES
(2, 'uos', 'uosahiwal@gmail.com', 'Sohaib@1');

-- --------------------------------------------------------

--
-- Table structure for table `company-register`
--

CREATE TABLE `company-register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `retype-password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company-register`
--

INSERT INTO `company-register` (`id`, `name`, `email`, `url`, `password`, `retype-password`) VALUES
(5, 'uos', 'sohaibamjad2522@gmail.com', 'https://carreralert.com/', 'Sohaib@1', 'Sohaib@1');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `massage` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `massage`) VALUES
(6, 'Sohaib Amjad 169', 'sohaibamjad2522@gmail.com', 'apply for jobs in ppsc', 'i have an issue  in applying'),
(7, 'Sohaib Amjad', 'sohaibamjad@gmail.com', 'apply for jobs', 'i have an issue');

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

CREATE TABLE `postjob` (
  `id` int(11) NOT NULL,
  `jtitle` text NOT NULL,
  `cname` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `category` text NOT NULL,
  `time` varchar(100) NOT NULL,
  `postdate` varchar(100) NOT NULL,
  `closedate` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `need` text NOT NULL,
  `website` varchar(1000) NOT NULL,
  `howapply` text NOT NULL,
  `salary` int(100) NOT NULL,
  `map` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`id`, `jtitle`, `cname`, `location`, `category`, `time`, `postdate`, `closedate`, `description`, `need`, `website`, `howapply`, `salary`, `map`, `img`) VALUES
(17, 'Software Engineer', 'MizTech', 'New York', 'IT jobs', 'Full Time', '2023-07-22', '2023-08-05', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.', '- Objective-C', 'https://carreralert.com/', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris', 33000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1538319316724', './assets/img/jobs/ximg1.png.pagespeed.ic.ASkJ1ySEcF.png'),
(19, 'Graphic Designer', 'Hunter Inc.', 'London', 'IT jobs', 'Night Shift', '2023-07-28', '2023-08-05', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.', '- Objective-C', 'https://carreralert.com/', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.', 65000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1538319316724', './assets/img/jobs/ximg2.png.pagespeed.ic.AoqGdLC7R_.png'),
(20, 'Junior Developer', 'Tech Step', 'Karachi', '', 'Part Time', '2023-07-20', '2023-08-05', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.', '- HTML , CSS', 'https://carreralert.com/', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris', 20000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1538319316724', '../user/assets/img/jobs/ximg3.png.pagespeed.ic.TP1Z3AIuY6.png'),
(21, 'Junior Developer', 'Tech Step', 'Karachi', '', 'Part Time', '2023-07-20', '2023-08-05', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.', '- HTML , CSS', 'https://carreralert.com/', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris', 20000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1538319316724', '../user/assets/img/jobs/ximg4.png.pagespeed.ic.53MlmPtsFw.png'),
(22, 'Assistant Director', 'Amazing world', 'Lahore', 'Education', 'Full Time', '2023-07-21', '2023-07-21', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.', 'Bachelors', 'https://carreralert.com/', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.', 75000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1538319316724', './assets/img/jobs/ximg5.png'),
(23, 'Junior Developer', 'Tech Step', 'Karachi', 'IT jobs', 'Part Time', '2023-07-20', '2023-08-05', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi umsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.', '- HTML , CSS', 'https://carreralert.com/', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris', 20000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405691.57240383344!2d-122.3212843181106!3d37.40247298383319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1538319316724', './assets/img/jobs/ximg6.png.pagespeed.ic.o2zi-N_S8I.png');

-- --------------------------------------------------------

--
-- Table structure for table `subcribe`
--

CREATE TABLE `subcribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user-login`
--

CREATE TABLE `user-login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user-register`
--

CREATE TABLE `user-register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `retype-password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-register`
--

INSERT INTO `user-register` (`id`, `name`, `email`, `password`, `retype-password`) VALUES
(13, 'Sohaib', 'sohaibamjad2522@gmail.com', 'Sohaib@1', 'Sohaib@1'),
(14, 'Sohaib', 'sohaibamjad2522@gmail.com', 'Sohaib@1', 'Sohaib@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add-categories`
--
ALTER TABLE `add-categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add-companies`
--
ALTER TABLE `add-companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin-panel-access`
--
ALTER TABLE `admin-panel-access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company-login`
--
ALTER TABLE `company-login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company-register`
--
ALTER TABLE `company-register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcribe`
--
ALTER TABLE `subcribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-login`
--
ALTER TABLE `user-login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-register`
--
ALTER TABLE `user-register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add-categories`
--
ALTER TABLE `add-categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `add-companies`
--
ALTER TABLE `add-companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin-panel-access`
--
ALTER TABLE `admin-panel-access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company-login`
--
ALTER TABLE `company-login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company-register`
--
ALTER TABLE `company-register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subcribe`
--
ALTER TABLE `subcribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user-login`
--
ALTER TABLE `user-login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user-register`
--
ALTER TABLE `user-register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
