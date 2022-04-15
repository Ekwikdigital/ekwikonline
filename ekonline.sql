-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 11:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(17) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assesments`
--

CREATE TABLE `assesments` (
  `s_no` int(11) NOT NULL,
  `a_id` int(17) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `s_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assesments`
--

INSERT INTO `assesments` (`s_no`, `a_id`, `a_name`, `s_code`) VALUES
(2, 7, 'ashwani', ' <iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSemKpZyh-PnXA9_85AGOzvGrd8G-Gce_tDtg8K_B683q9jbHA/viewform?embedded=true\" width=\"640\" height=\"1967\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>'),
(12, 0, '', ''),
(13, 0, '', ''),
(14, 0, '', ''),
(15, 0, '', ''),
(16, 0, '', ''),
(17, 0, '', ''),
(18, 0, '', ''),
(19, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `benefits_users`
--

CREATE TABLE `benefits_users` (
  `sno` int(17) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `s_id` int(255) NOT NULL,
  `s_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benefits_users`
--

INSERT INTO `benefits_users` (`sno`, `username`, `password`, `email`, `date`, `s_id`, `s_phone`) VALUES
(1, 'captain', 'cap', 'captain@gmail.com', '2022-04-07 11:50:16', 7, '9068973411'),
(2, 'cap', 'cap', 'cap@gmail.com', '2022-04-13 11:10:47', 1, '6485312555'),
(3, 'ash', 'a', 'asdf@gmail.com', '2022-04-13 11:31:09', 5, '7418529637');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(17) NOT NULL,
  `blog_heading` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  `blog_summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_heading`, `blog_desc`, `blog_image`, `timestamp`, `blog_summary`) VALUES
(1, 'test', '<p>sakjdfkj</p>\r\n', 'blogimage/77.jpg', '2022-04-15', 'test'),
(2, 'test', '<p>sakjdfkj</p>\r\n', 'blogimage/77.jpg', '2022-04-15', 'test'),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `b_name` varchar(255) NOT NULL,
  `b_phoneno` varchar(255) NOT NULL,
  `b_email` varchar(255) NOT NULL,
  `b_id` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`b_name`, `b_phoneno`, `b_email`, `b_id`) VALUES
('ak', 'ak@gmail.com', '7412589654', 17),
('ak', 'ak@gmail.com', '7412589654', 18);

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_message` text NOT NULL,
  `s_id` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `s_no` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`s_no`, `c_name`, `c_phone`, `c_email`, `c_message`) VALUES
(7, 'ashwni', '687542.685', 'aksjd@gmail.com', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `s_email` varchar(255) NOT NULL,
  `s_id` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_no` int(17) NOT NULL,
  `s_id_no` int(17) NOT NULL,
  `s_id_name` varchar(255) NOT NULL,
  `s_id_phoneno` varchar(255) NOT NULL,
  `s_id_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_no`, `s_id_no`, `s_id_name`, `s_id_phoneno`, `s_id_email`) VALUES
(1, 7, 'Ashwani', '9068973411', 'dk007@gmail.com'),
(2, 8, 'ak', '8529637415', 'sh@gmail.com'),
(3, 9, 'hfghjkl', '8794651387', 'jyhtcgj@gmail.com'),
(4, 52, 'aaa', 'aaa', 'aaa@gmail.com'),
(5, 77, 'test', 'test', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `students_benefits`
--

CREATE TABLE `students_benefits` (
  `so.no` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students_data`
--

CREATE TABLE `students_data` (
  `s_name` varchar(255) NOT NULL,
  `s_surname` varchar(255) NOT NULL,
  `s_phoneno` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_id` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `b_id` int(17) NOT NULL,
  `v_id` int(11) NOT NULL,
  `v_title` varchar(225) NOT NULL,
  `v_desc` varchar(225) NOT NULL,
  `v_code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`b_id`, `v_id`, `v_title`, `v_desc`, `v_code`) VALUES
(7, 2, 'Test Post', 'Test Desc', 'https://www.youtube.com/embed/nuEpNchGQ2Y'),
(1, 3, 'Test 2', 'Test 2 Desc', 'https://www.youtube.com/embed/m_sq0Wh9eiw'),
(7, 4, 'test3', 'test3 desc', 'https://www.youtube.com/embed/m_sq0Wh9eiw'),
(2, 5, 'test 4', 'test desc', 'https://www.youtube.com/embed/m_sq0Wh9eiw'),
(7, 6, 'Test 2', 'Test 2 Desc', 'https://www.youtube.com/embed/m_sq0Wh9eiw'),
(1, 7, 'Test Post', 'Test Desc', 'https://www.youtube.com/embed/m_sq0Wh9eiw'),
(7, 8, 'fdghj', 'fdxgcvbn', 'fdxgcvhbn'),
(5, 9, 'nbvhc', 'hvnbm', 'v hbnm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assesments`
--
ALTER TABLE `assesments`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `benefits_users`
--
ALTER TABLE `benefits_users`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `students_benefits`
--
ALTER TABLE `students_benefits`
  ADD PRIMARY KEY (`so.no`);

--
-- Indexes for table `students_data`
--
ALTER TABLE `students_data`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assesments`
--
ALTER TABLE `assesments`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `benefits_users`
--
ALTER TABLE `benefits_users`
  MODIFY `sno` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `b_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `s_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `s_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students_benefits`
--
ALTER TABLE `students_benefits`
  MODIFY `so.no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students_data`
--
ALTER TABLE `students_data`
  MODIFY `s_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
