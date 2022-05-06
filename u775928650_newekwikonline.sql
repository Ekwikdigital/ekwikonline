-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2022 at 07:46 AM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u775928650_newekwikonline`
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
(1, 5, 'Social Media', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLScUWPnIE8XPPh7v8roiDhUoAAzgiJ5jxHL4By7oeUs98XLkuQ/viewform?embedded=true\" width=\"640\" height=\"5987\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>'),
(2, 1, 'Web Analytics ', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSeMM5JOYGMjW14U8Zu_3wqDnWRry6mpZZjOxAEmKfuBGZJjcw/viewform?embedded=true\" width=\"1280\" height=\"5275\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>'),
(3, 1, 'Web Conversion', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSdHqx9lLHbifuxZf5HMCLurVqkm6dGKNjN6QiLeR4vRpReeww/viewform?embedded=true\" width=\"640\" height=\"6131\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>'),
(4, 8, 'Content Marketing', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSe9Hv4iRZK8vTNJilXR1rlHO6qSrNS3rwsrzz10XxXGGRiA1Q/viewform?embedded=true\" width=\"1280\" height=\"5642\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>'),
(5, 6, 'Digital Marketing', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSf2GnzvS2ysidg5NQRn1ztRg8kwE9qmPU5zFdIMgbVulbioJg/viewform?embedded=true\" width=\"640\" height=\"6875\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>');

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
  `s_phone` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_join` varchar(255) NOT NULL,
  `s_com` varchar(255) NOT NULL,
  `s_add` varchar(255) NOT NULL,
  `s_pan` varchar(255) NOT NULL,
  `s_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benefits_users`
--

INSERT INTO `benefits_users` (`sno`, `username`, `password`, `email`, `date`, `s_id`, `s_phone`, `course`, `s_image`, `s_join`, `s_com`, `s_add`, `s_pan`, `s_name`) VALUES
(1, 'ekwik01', 'vishal@123', 'vishu72606@gmail.com', '2022-04-29 12:28:31', 0, '9838383957', 'Digital Marketing', 'studentimage/WhatsApp Image 2022-04-29 at 5.57.05 PM.jpeg', '2022-04-02', '2022-07-02', 'https://drive.google.com/file/d/1Z5uRvBQvgpCcnCUvO13coTcoE7Nj2-W9/view?usp=drivesdk', 'null', 'Vishal Sharma'),
(2, 'captain', 'captain', 'dk906897@gmail.com', '2022-04-30 04:56:50', 0, '9068973411', 'All', 'studentimage/thor-avengers-endgame-final-battle-scene-jp.jpg', '2022-04-02', '2022-04-02', 'https://drive.google.com/file/d/1rKo7MOp0UgaCXPCY4yeQm4TTq-xV5hb0/view?usp=drivesdk', 'https://drive.google.com/file/d/1rKo7MOp0UgaCXPCY4yeQm4TTq-xV5hb0/view?usp=drivesdk', 'Captain');

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
(2, 'test', '<p>sakjdfkj</p>\r\n', 'blogimage/77.jpg', '2022-04-15', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `m_id` int(255) NOT NULL,
  `b_id` int(255) NOT NULL,
  `b_titile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`m_id`, `b_id`, `b_titile`, `b_desc`, `b_image`) VALUES
(1, 1, 'test', 'test', 'studentimage/captain.png');

-- --------------------------------------------------------

--
-- Table structure for table `bookread`
--

CREATE TABLE `bookread` (
  `s_no` int(11) NOT NULL,
  `book_id` int(255) NOT NULL,
  `book_titile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookread`
--

INSERT INTO `bookread` (`s_no`, `book_id`, `book_titile`, `book_desc`, `book`) VALUES
(6, 1, 'test', 'test', 'book/seobook.pdf');

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
('ak', 'ak@gmail.com', '7412589654', 18),
('', '', '', 19),
('', '', '', 20),
('', '', '', 21),
('Ashwani', 'dk906897@gmail.com', '9068973411', 22),
('Ashwani', 'dk906897@gmail.com', '9068973411', 23),
('Ashwani', 'dk906897@gmail.com', '9068973411', 24),
('Ashwani', 'dk906897@gmail.com', '9068973411', 25),
('Ashwani', 'dk906897@gmail.com', '9068973411', 26),
('', '', '', 27),
('', '', '', 28),
('', '', '', 29),
('', '', '', 30),
('', '', '', 31),
('', '', '', 32),
('', '', '', 33),
('', '', '', 34),
('', '', '', 35),
('', '', '', 36),
('', '', '', 37),
('', '', '', 38),
('', '', '', 39);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `s_no` int(17) NOT NULL,
  `s_id` int(17) NOT NULL,
  `class_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`s_no`, `s_id`, `class_title`, `class_desc`, `code`) VALUES
(1, 1, 'test class', 'test desc', 'https://www.youtube.com/embed/_z_Y0YJqe3Q');

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

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`s_name`, `s_email`, `s_message`, `s_id`) VALUES
('', '', '', 19),
('ashwani', 'dk906897@gmail.com', 'akdsnlmsaakfdslma', 20),
('Harshfgga', 'harsh.ekwik@gmail.com', 'm,,jk,jb', 21),
('', '', '', 22),
('', '', '', 23),
('', '', '', 24),
('', '', '', 25),
('', '', '', 26),
('Mike Peterson\r\n', 'no-replyTor@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your ekwikonline.in to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Peterson\r\n', 27),
('Jr Verma ', 'jrverma108@gmail.com', 'I am interested in digital marketing ', 28),
('', '', '', 29),
('', '', '', 30),
('TrenceTew', 'enerseCax@onymail.xyz', 'Achat Cialis Professional Nzipog https://bestadalafil.com/ - generic cialis for sale <a href=\"https://bestadalafil.com/\">generic cialis</a> Progesterone In Internet Kozamz If that were not the case no woman would ever have a second childand no biped a  second knee replacement. https://bestadalafil.com/ - cialis coupons Bpzaro', 31),
('AnnaLymn', 'annaLymn@mail.com', 'Hellо all, guуѕ! Ι know, mу meѕѕagе mаy bе tоо spесіfic,\r\nВut my sіѕter found nicе mаn here аnd thеy mаrriеd, ѕо how abоut me?ǃ :)\r\nΙ am 23 уеаrѕ оld, Annа, frоm Ukrаine, Ι know Еnglіsh аnd German languаgeѕ alsо\r\nΑnd... I hаve sреcific disеаѕe, nаmed nуmрhomаniа. Ԝhо know whаt іѕ thіѕ, can undеrstаnd me (better to sаy it immеdiаtеlу)\r\nΑh yеѕ, Ι cооk vеry tаstуǃ and I lоvе not only cооk ;))\r\nΙm rеal gіrl, nоt prоѕtіtutе, and loоkіng for sеrіоus and hot relatіonshір...\r\nАnуway, yоu cаn find mу prоfіlе hеre: http://taronectioterb.tk/user/36600/ \r\n', 32),
('', '', '', 33),
('', '', '', 34),
('Id2opfx32f', 'mpochinyaeva@mail.ru', ' 76 425 p ваши  \r\nПодробнее по ссылке: https://forms.yandex.ru/u/3dk82ypkqmrpadsl0ozs/success/?AAAAAekwikonline.inBBBBB', 35),
('', '', '', 36),
('Mike Gimson\r\n', 'no-replyTor@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Gimson\r\n \r\nsupport@digital-x-press.com', 37),
('AnnieElorn', 'michal.endler00@gmail.com', 'Benötigen Sie einen schnellen Barkredit? Ob für eine Situation \r\nNotfall (Krankheitskosten, Fahrzeugersatzkosten, Reparaturkosten usw.) oder für ein Projekt, eine Investitionsmöglichkeit usw.)* \r\nWir bieten Ihnen verschiedene Kreditlösungen von 5.000 € bis 5.000.000 € (mit einem niedrigen Zinssatz von 2 - 3%), um alle Projekte zu finanzieren, die Ihnen wichtig sind ...* \r\n- Schnelle Antwort in weniger als 24/H \r\n- Ohne Verpflichtung \r\n- Kostenlose Anfrage \r\nKontakt: info@socialgrouphelp.com', 38),
('Christian Djurit', 'zummkke@icloud.com', 'We provide funding  through our venture company to both startups and existing businesses either looking for expansion or to accelerate their company growth. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early prepayment penalties. \r\nEmail: Chris.djurit@alconmcl.com \r\ndjuritchris@gmail.com \r\n \r\nChristian Djurit \r\nDirector/Investment Head \r\nAlcon Management Company LTD UK.', 39);

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
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `s_email` varchar(255) NOT NULL,
  `s_id` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`s_email`, `s_id`) VALUES
('', 19),
('', 20),
('', 21),
('', 22),
('', 23),
('', 24),
('', 25),
('', 26),
('', 27),
('', 28),
('', 29),
('ankitsahu7037053149@gmail.com', 30),
('', 31),
('', 32),
('', 33),
('', 34),
('', 35),
('', 36),
('', 37),
('', 38),
('', 39);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `s_no` int(17) NOT NULL,
  `notes_id` int(17) NOT NULL,
  `notes_titile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`s_no`, `notes_id`, `notes_titile`, `notes_desc`, `notes`) VALUES
(2, 1, 'test', 'test', 'notes/Ashwani Resume.pdf');

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

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`s_name`, `s_surname`, `s_phoneno`, `s_email`, `s_id`) VALUES
('Harsh singh', 'kumar', '8076063643', 'admin12@gmail.com', 19),
('', '', '', '', 20),
('', '', '', '', 21),
('', '', '', '', 22),
('', '', '', '', 23),
('', '', '', '', 24),
('', '', '', '', 25),
('', '', '', '', 26),
('', '', '', '', 27),
('', '', '', '', 28),
('Jr verma', 'verma', '7375074677', 'jrverma108@gmail.com', 29),
('', '', '', '', 30),
('', '', '', '', 31),
('', '', '', '', 32),
('', '', '', '', 33),
('', '', '', '', 34),
('', '', '', '', 35),
('', '', '', '', 36),
('', '', '', '', 37),
('', '', '', '', 38),
('', '', '', '', 39);

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
(8, 15, 'How To Create YouTube channel For BEGINNERS', 'Chapter 1', 'https://www.youtube.com/embed/_z_Y0YJqe3Q'),
(8, 16, 'How To Add Logo & Channel Art ', 'Chapter 2', 'https://www.youtube.com/embed/BmeHKVynRGc'),
(8, 17, 'How To Add Social Media Links In YouTube', 'Chapter 3', 'https://www.youtube.com/embed/sB-NVAOt3_Q'),
(8, 18, 'How to Write Description on YouTube', 'Chapter 4', 'https://www.youtube.com/embed/G0kWijSqmXM'),
(8, 19, 'How to create YouTube Thumbnail', 'Chapter 5', 'https://www.youtube.com/embed/uy-CjxdGuN0'),
(8, 20, 'How to manage YouTube Settings', 'Chapter 6', 'https://www.youtube.com/embed/SQNHsOPYntg'),
(8, 21, 'Get 1000 Subscribers & 4000 Watch Hours | how to get subscribers on YouTube Fast', 'Chapter 7', 'https://www.youtube.com/embed/7LXR1w3gk9Q'),
(8, 22, 'How To Get Non-Copyright Audios , Videos & Images ', 'Chapter 8', 'https://www.youtube.com/embed/bU-duR4mDR8'),
(8, 23, 'How to get Non Copyright Audio', 'Chapter 9', 'https://www.youtube.com/embed/bU-duR4mDR8'),
(8, 24, 'How to get Non-Copyright Images & Videos ', 'Chapter 10', 'https://www.youtube.com/embed/dUeJ-QyXUnY'),
(8, 25, 'How to rank youtube videos fast', 'Chapter 11', 'https://www.youtube.com/embed/vf-2LSKi-KQ'),
(8, 26, 'How to check YouTube Analytics', 'Chapter 12', 'https://www.youtube.com/embed/OL1mmum3m8M'),
(8, 27, 'How To Manage Youtube Settings', 'Chapter 13', 'https://www.youtube.com/embed/w5nIqxracv4'),
(8, 28, 'Why Most of the YouTubers Fail ', 'Chapter 14', 'https://www.youtube.com/embed/yaGokio1A6s'),
(8, 29, 'How To Upload Videos And How To Use Thumbnails', 'Chapter 15', 'https://www.youtube.com/embed/CCqQztifH18'),
(8, 30, 'How To Promote Your YouTube Channel Without Money ', 'Chapter 16', 'https://www.youtube.com/embed/P-EVjR1v2vA'),
(8, 31, 'How To Write Description', 'Chapter 17', 'https://www.youtube.com/embed/076s8nRUeV4'),
(8, 32, 'YouTube Stories criteria', 'Chapter 18', 'https://www.youtube.com/embed/JtHgekUCSxA'),
(8, 33, 'How To Get Verified Badge On YouTube Channel', 'Chapter 19', 'https://www.youtube.com/embed/7aFdrwA00b4'),
(8, 34, 'How To Make Money With Affiliate Marketing', 'Chapter 20', 'https://www.youtube.com/embed/HtPA5XSbF4A'),
(8, 35, 'YouTube Community Criteria and Usage', 'Chapter 21', 'https://www.youtube.com/embed/oJ0FAP566fE'),
(8, 36, 'How To Get YouTube Awards', 'Chapter 22', 'https://www.youtube.com/embed/D0xtigavWtQ'),
(8, 37, 'How To Add Social Media Links In YouTube', 'Chapter 23', 'https://www.youtube.com/embed/sB-NVAOt3_Q'),
(0, 38, '', '', ''),
(0, 39, '', '', ''),
(0, 40, '', '', ''),
(0, 41, '', '', ''),
(0, 42, '', '', ''),
(0, 43, '', '', ''),
(0, 44, '', '', ''),
(0, 45, '', '', ''),
(0, 46, '', '', ''),
(0, 47, '', '', ''),
(0, 48, '', '', '');

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
-- Indexes for table `bookread`
--
ALTER TABLE `bookread`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`s_no`);

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
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `benefits_users`
--
ALTER TABLE `benefits_users`
  MODIFY `sno` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookread`
--
ALTER TABLE `bookread`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `b_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `s_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `s_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `s_no` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `s_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
