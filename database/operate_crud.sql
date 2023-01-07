-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 07:27 PM
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
-- Database: `operate_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(12) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` bigint(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `tel`, `msg`) VALUES
(20, 'ddf', 'usama.hsn56@gmail.com', 44, 'ff'),
(21, 'f', 'usama.hsn56@gmail.com', 787585, 'ghndg'),
(22, 'f', 'usama.hsn56@gmail.com', 787585, 'ghndg');

-- --------------------------------------------------------

--
-- Table structure for table `cv_data`
--

CREATE TABLE `cv_data` (
  `id` int(12) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `pin` int(6) NOT NULL,
  `state` text NOT NULL,
  `qualification` enum('Graduation','Bs','Msc','MS','PHD') NOT NULL,
  `specialization` enum('Computer Science','Information Technology','Computer Architecture','Tele Communication') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv_data`
--

INSERT INTO `cv_data` (`id`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `dob`, `address`, `city`, `pin`, `state`, `qualification`, `specialization`) VALUES
(1, 'usama', 'hussain', 'usama.hsn56gmail.com', 343740912, 'male', '2002-12-27', 'G-1 part 2 house no 51', 'mirpur', 22, 'ajk', 'Bs', 'Computer Science'),
(59, 'ali', 'hussain', 'hussain@gmail.com', 3444422, 'male', '2022-12-07', 'sector 51', 'islamabad', 4554, 'pakistan', 'Bs', 'Information Technology'),
(60, 'ahmed', 'arshad', 'ahmed@gmail.com', 3488855, 'male', '2002-12-08', 'hussaini area collony', 'lahore', 555, 'pakistan', 'Bs', 'Computer Science'),
(61, 'fatima ', 'zahra', 'fatima@gmail.com', 55, '', '0000-00-00', '', '', 0, '', '', ''),
(62, 'fatima ', 'zahra', 'fatima@gmail.com', 55666, 'female', '2002-12-14', 'sector 45', 'islamabad', 55, 'pakistan', 'PHD', 'Tele Communication'),
(63, 'junaid', 'akram', 'junaidJ@gmail.com', 454, 'male', '2004-04-02', 'SECTOR F10', 'islamabad', 552, 'PAKISTAN', 'Msc', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(12) NOT NULL,
  `image` varchar(50) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(13, 'jason-goodman-Oalh2MojUuk-unsplash.jpg', 'Mashable is a world-renowned, entertainment, and multi-platform media channel.\r\n\r\nPowered by its own proprietary technology, this tech blog is the go-to source for tech, digital culture, and entertainment content for its influential and dedicated global audience!\r\n\r\nIt is one of the most influential blogs on technology on the internet today!\r\n\r\nMashable provides information to those who wish to catch up on all most everything happening around the tech world including movies, travel, finance, and, of course, gadgets.'),
(17, 'sap-logo.png', 'SNAP owns that old-school early 00’s vibe with its upvote features and summary resources.\r\n\r\nThis technology blog is dense on open source, security, gadget reviews, product management, apps, and other similar trends.\r\n\r\nIt originally presented itself as “News for Nerds. Stuff that Matters”. Slashdot also features news stories on technology, science, and politics. The classic techy feel without the advertising distractions of the other big publications is what makes Slashdot a must-visit blog.'),
(21, 'ibm-logo.png', 'As tech is drastically changing with every quarter, it becomes quite challenging to seek information.\r\n\r\nTherefore, taking a glance and following a well-versed tech blog with the right quality of content can save you tons of extra effort in keeping yourself up to the minute!\r\n\r\nAlso, with a lot of tech blogs coming into the milieu every day, these 10 technology blogs listed above represent the very best of the modern tech world, and they are worth reading to learn and update ourselves about the latest tips and trends to stay ahead.'),
(24, 'evangeline-shaw-VLkoOabAxqw-unsplash.jpg', 'As tech is drastically changing with every quarter, it becomes quite challenging to seek information.\r\n\r\nTherefore, taking a glance and following a well-versed tech blog with the right quality of content can save you tons of extra effort in keeping yourself up to the minute!\r\n\r\nAlso, with a lot of tech blogs coming into the milieu every day, these 10 technology blogs listed above represent the very best of the modern tech world, and they are worth reading to learn and update ourselves about the latest tips and trends to stay ahead.'),
(25, 'microsoft-logo.png', 'MICROSOFT is drastically changing with every quarter, it becomes quite challenging to seek information.\r\n\r\nTherefore, taking a glance and following a well-versed tech blog with the right quality of content can save you tons of extra effort in keeping yourself up to the minute!\r\n\r\nAlso, with a lot of tech blogs coming into the milieu every day, these 10 technology blogs listed above represent the very best of the modern tech world, and they are worth reading to learn and update ourselves about the latest tips and trends to stay ahead.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Last_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `job_title`, `Description`, `Last_Date`) VALUES
(55, 'software engineering', 'bsse softw', '0000-00-00 00:00:00'),
(56, 'Human Activist', 'Human resource allocation', '0002-02-22 00:00:00'),
(57, 'Teacher', 'English Teacher EXpert', '2023-12-01 00:00:00'),
(58, 'UI/UX DEsigner', 'it ui ux deals with new technology', '2023-02-02 00:00:00'),
(59, 'Software Designer', 'bs software tech', '2022-12-22 00:00:00'),
(60, 'logo Designer', 'Designer And Development', '2023-02-23 00:00:00'),
(61, 'Human Activist', 'Human health and care development', '2023-02-22 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_data`
--
ALTER TABLE `cv_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cv_data`
--
ALTER TABLE `cv_data`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
