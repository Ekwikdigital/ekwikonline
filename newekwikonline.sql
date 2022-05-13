-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 10:13 AM
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
-- Database: `newekwikonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `s_no` int(17) NOT NULL,
  `batch_id` int(17) NOT NULL,
  `content_id` int(17) NOT NULL,
  `assesment_id` int(17) NOT NULL,
  `assesment_name` varchar(255) NOT NULL,
  `assesment_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assesment`
--

INSERT INTO `assesment` (`s_no`, `batch_id`, `content_id`, `assesment_id`, `assesment_name`, `assesment_code`) VALUES
(0, 1, 5, 1, 'digital marketing', 'https://docs.google.com/forms/d/e/1FAIpQLSeMM5JOYGMjW14U8Zu_3wqDnWRry6mpZZjOxAEmKfuBGZJjcw/viewform?embedded=true');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `s_no` int(17) NOT NULL,
  `batch_id` int(17) NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `batch_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`s_no`, `batch_id`, `batch_name`, `batch_time`) VALUES
(1, 1, 'Digital_Marketing', '5pm to 6pm');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `s_no` int(17) NOT NULL,
  `blog_id` int(17) NOT NULL,
  `blog_heading` varchar(255) NOT NULL,
  `blog_summary` varchar(255) NOT NULL,
  `blog_desc` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`s_no`, `blog_id`, `blog_heading`, `blog_summary`, `blog_desc`, `blog_image`, `blog_date`) VALUES
(1, 1, 'Test', 'Do you want to explore career opportunities an d secure your fut Te', '<p>stesasd</p>\r\n', 'blogimage/09.jpg', '2022-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `s_no` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`s_no`, `batch_id`, `content_id`, `book_id`, `book_name`, `book_pdf`) VALUES
(1, 1, 1, 1, 'Digital_Marketing', 'book/EKWIK Digital  BROCHURE (website).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `s_no` int(17) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_email` varchar(255) NOT NULL,
  `b_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `s_no` int(17) NOT NULL,
  `batch_id` int(17) NOT NULL,
  `content_id` int(17) NOT NULL,
  `class_id` int(17) NOT NULL,
  `class_title` varchar(255) NOT NULL,
  `class_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`s_no`, `batch_id`, `content_id`, `class_id`, `class_title`, `class_code`) VALUES
(1, 1, 4, 1, 'Digital Marketing', 'https://www.youtube.com/embed/V47CdOCDo4s');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `s_no` int(17) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_phone` int(17) NOT NULL,
  `s_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `s_no` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `content_name` varchar(255) NOT NULL,
  `content_desc` varchar(255) NOT NULL,
  `content_image` varchar(255) NOT NULL,
  `default_code` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`s_no`, `batch_id`, `content_id`, `content_name`, `content_desc`, `content_image`, `default_code`) VALUES
(1, 1, 1, 'Book', 'Best Books of Ekwik', 'content_image/100.jpg', 1),
(2, 1, 2, 'Video', 'Top  Class Videos by Ekwik', 'content_image/100.jpg', 2),
(3, 1, 3, 'Notes', 'Top  Class Notes by Ekwik', 'content_image/100.jpg', 3),
(4, 1, 4, 'Class', 'Top classes', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `loginaccess`
--

CREATE TABLE `loginaccess` (
  `s_no` int(11) NOT NULL,
  `Login/logout` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginaccess`
--

INSERT INTO `loginaccess` (`s_no`, `Login/logout`, `email`, `timestamp`) VALUES
(1, 'Login', 'dk906897@gmail.com', '2022-05-11 11:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `s_no` int(17) NOT NULL,
  `newsletter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `s_no` int(17) NOT NULL,
  `batch_id` int(17) NOT NULL,
  `content_id` int(17) NOT NULL,
  `notes_id` int(17) NOT NULL,
  `notes_title` varchar(255) NOT NULL,
  `notes_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`s_no`, `batch_id`, `content_id`, `notes_id`, `notes_title`, `notes_pdf`) VALUES
(1, 1, 3, 1, 'Digital_Marketing', 'note/EKWIK Digital  BROCHURE (website).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_no` int(11) NOT NULL,
  `s_batch_id` int(11) NOT NULL,
  `s_batch_name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_phone` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_aadhar` varchar(255) NOT NULL,
  `s_pancard` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_no`, `s_batch_id`, `s_batch_name`, `s_name`, `s_phone`, `s_email`, `s_password`, `s_aadhar`, `s_pancard`, `s_image`) VALUES
(1, 1, 'Digital_Marketing', 'Ashwani_Kumar', '9068973411', 'dk906897@gmail.com', 'captain', 'link', 'link', 'student/captain.png');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `s_no` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`s_no`, `batch_id`, `content_id`, `video_id`, `video_title`, `video_code`) VALUES
(1, 1, 2, 1, 'Digital_Marketing', 'https://www.youtube.com/embed/G6DmDqYLWL8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `loginaccess`
--
ALTER TABLE `loginaccess`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginaccess`
--
ALTER TABLE `loginaccess`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
