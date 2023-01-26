-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 11:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(17) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_designation` varchar(255) NOT NULL,
  `timestamps` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_image`, `admin_password`, `admin_designation`, `timestamps`, `is_active`) VALUES
(1100210, 'Super Admin', 'alam.office.my@gmail.com', '+60108963253', '../images/admin_images/IMG_20190319_172301.jpg', '$2y$10$AUSoMNKsw0ERwQ/Rx9kXH.5Pn6XEm3EYLji0C3apR6lshuwp7XBai', 'System Administrator', '2023-01-03 23:12:20', 1),
(1100211, 'Ashraful', 'alamshihab526@gmail.com', '+8801982401992', '../images/admin_images/IMG_20190423_140959.jpg', '$2y$10$KOHT.VwJj4QJMW/cT2N7r.jaGquM5uF0H9crvBRTqrcS9sPt77xd6', 'Database Administrator', '2023-01-03 23:16:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(17) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_query_title` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `timestamps` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_query_title`, `contact_message`, `timestamps`, `is_active`) VALUES
(25023, 'Ashraful Alam Shihab', 'alamshihab526@gmail.com', '+8801982401992', 'This is Query Title', 'This is messge', '2023-01-07 17:55:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(20) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_price` int(20) NOT NULL,
  `course_original_price` int(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `timestamps` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`, `is_active`, `timestamps`) VALUES
(6009, 'CCNA 200-301', 'CCNA 200-301 is 120 minutes exam associated with Cisco Certification. This exam tests a candidates knowledge and skills related to network fundamentals, network access, IP Connectivity , IP Services and so on.', 'Dr.Ashraful Alam Shihab', '../images/courseimages/ccna.png', '60 Days', 780, 900, 1, '2023-01-02 04:37:33'),
(6010, 'Linux Server Administration', 'Linux is a major strength in computing technology. Most of the webserver, mobile phones, personal computers, supercomputers, and cloud-servers are powered by Linux. The job of a Linux systems administrator is to manage the operations of a computer system like maintain, enhance, create user account/report, taking backups using Linux tools and command-line interface tools. Most computing devices are powered by Linux because of its high stability, high security, and open-source environment', 'Ashraful Alam', '../images/courseimages/linux-sysadmin.png', '45 days', 1120, 1250, 1, '2023-01-02 16:25:09'),
(6013, 'Windows Server Management', 'Learn windwows server management from begging to Advance ', 'Dr. Shihab', '../images/courseimages/windows-server-administration-training.png', '80 Days', 890, 1500, 1, '2023-01-06 18:14:27'),
(6014, 'MS SQL Databbase Administration ', 'Learn the complete Microsoft SQL Server Adminstration', 'Ashraful Aalm', '../images/courseimages/maxresdefault.jpg', '60 days', 560, 800, 1, '2023-01-06 18:16:46'),
(6015, 'Compti A+', 'omputer Basic to Advance Learn the complete Microsoft SQL Server Adminstration', 'Comptia', '../images/courseimages/windows-server-administration-training.png', '45 Days', 900, 1100, 1, '2023-01-06 19:10:09'),
(6016, 'VM Ware EsXi', 'Complete VM virtualization with Learn the complete Microsoft SQL Server AdminstrationhypervisiorLearn the complete Microsoft SQL Server Adminstration', 'VM Ware', '../images/courseimages/maxresdefault.jpg', '45 Days', 710, 800, 1, '2023-01-07 01:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(17) NOT NULL,
  `feedback_content` text NOT NULL,
  `student_id` int(17) NOT NULL,
  `timestamps` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `feedback_content`, `student_id`, `timestamps`, `is_active`) VALUES
(35001, 'q', 1101, '2023-01-06 03:08:19', 0),
(35003, 'I just enrolled for Linux Server Administration. Hopwe it will be great journey for me', 1124, '2023-01-06 18:58:54', 1),
(35004, 'Superb content', 1121, '2023-01-06 19:01:14', 1),
(35005, 'Message from System Admin', 1122, '2023-01-06 19:01:51', 1),
(35006, 'New Comments\r\n', 1126, '2023-01-07 00:59:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` int(17) NOT NULL,
  `module_name` text NOT NULL,
  `module_desc` text NOT NULL,
  `module_url` text NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `timestamps` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `module_name`, `module_desc`, `module_url`, `course_id`, `course_name`, `timestamps`, `is_active`) VALUES
(15007, 'Command Prompts and Getting Prompts Back By', 'What are command prompts?\r\n• A command prompt, also referred to simply as a prompt, is a short text at\r\nthe start of the command line followed by prompt symbol on a command\r\nline interface', '../videos/module_videos/videos-A.mp4', '6010', 'Linux Server Administration', '2023-01-04 19:56:56', 1),
(15008, 'Day 1: Network Devices', 'Complete Overview of Basic Networking Devices', '../videos/module_videos/6 - Isometric Neck Exercises - Ask Dr. Abelson.mp4', '6009', 'CCNA 200-301', '2023-01-04 21:47:11', 1),
(15009, 'Day 2: Interfaces and Cables', 'Networking Devices Interfaces and Cable Standard', '../videos/module_videos/videos-A.mp4', '6009', 'CCNA 200-301', '2023-01-04 22:11:51', 1),
(15010, 'Grep Command', 'Search Utilit of Linux', '../videos/module_videos/6 - Isometric Neck Exercises - Ask Dr. Abelson.mp4', '6010', 'Linux Server Administration', '2023-01-06 18:18:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(17) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_image` text NOT NULL,
  `student_professions` varchar(255) NOT NULL,
  `student_signuptime` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_phone`, `student_password`, `student_image`, `student_professions`, `student_signuptime`, `is_active`) VALUES
(1119, 'Dr.Alam', 'alam@gmail.com', '+8801867822842', '$2y$10$os8h8x5dTXCjuDuW3xEif.J6uYHBdn46qtZH4YlKQt/XJ1AD8b/IG', '../images/students_images/C360_2019-09-18-13-54-57-237.jpg', 'Database Administrator', '2023-01-02 23:16:53', 0),
(1121, 'Jihadur Rahman', 'jihad@gmail.com', '+60108963253', '$2y$10$c6SZWWxsdraB/4P422ei2uhy.P8zOl1V.uNvexONb3FizU9j0LA76', ' ../images/students_images/20171026_151501.jpg', 'Student', '2023-01-02 23:24:10', 1),
(1122, 'Ashraful Alam Shihab', 'alamshihab526@gmail.com', '+601139275791', '$2y$10$5lv8UIxmCVlDplYQxwxUweyU13H96lI0vsNsS.YiZvNM1rSrU8Z4O', ' ../images/students_images/IMG_20190423_140959.jpg', 'System Admin', '2023-01-03 00:22:32', 1),
(1124, 'Nur Diyana Binte Adip', 'nur.diyana@luct.com.my', '+60108969253', '$2y$10$.dWgOsnp0Jke1LwQ/erQKusiK5FbijNLaOC1Huk8lNGFrrQR.OKza', ' ../images/students_images/WhatsApp Image 2023-01-06 at 18.56.42.jpeg', 'Shihab Wife', '2023-01-06 18:57:05', 1),
(1126, 'NAS MAS', 'nas.mas@luct.com', '+601139275791', '$2y$10$EV7FVMpRza/B/tvaNu6AOuBPfFJn69/42Lj6Atsm5CME1gukQrqGO', ' ../images/students_images/WhatsApp Image 2023-01-06 at 18.56.42.jpeg', 'SHIHAB WIFE', '2023-01-07 00:40:42', 1),
(1127, 'Another user', 'another@user.com', '145236987', '$2y$10$IS4KszDvrVMgOzY79mzbzukm.3UdSG6LgXMmF6eRT9HZ3Uubo6pVe', '', '', '2023-01-11 18:23:34', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1100212;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25026;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6017;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35007;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15011;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
