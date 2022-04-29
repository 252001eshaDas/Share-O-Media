-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 06:29 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `share_o_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `circle_friend`
--

CREATE TABLE `circle_friend` (
  `id` int(20) NOT NULL,
  `from_id` int(255) NOT NULL,
  `to_id` int(255) NOT NULL,
  `status` enum('1','2','3') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `del_daete` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `added_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `code`, `added_on`) VALUES
(5, 'ABG', 'DEPT-5239', '2020-01-30 06:42:42.878171'),
(6, 'ECG', 'DEPT-5261', '2020-01-30 06:42:56.196641'),
(7, 'BIOCHEMICAL EXAMINATION', 'DEPT-6041', '2020-01-30 06:43:21.832854'),
(8, 'BIOCHEMISTRY', 'DEPT-3110', '2020-01-30 06:43:38.257866'),
(9, 'HORMONASSY', 'DEPT-1961', '2020-01-30 06:44:07.773917'),
(10, 'HAEMATOLOGY', 'DEPT-2991', '2020-01-30 06:45:39.551133'),
(11, 'LAB TEST', 'DEPT-8296', '2020-01-30 06:46:42.813431'),
(12, 'MICRO-BIOLOGY', 'DEPT-3107', '2020-01-30 06:47:06.410923'),
(13, 'SERELOGY', 'DEPT-3205', '2020-01-30 06:47:28.344550'),
(15, 'ULTRASONOGRAPHY', 'DEPT-6744', '2020-01-30 06:47:56.092527'),
(16, 'PSYCHOLOGY', 'DEPT-2839', '2020-02-03 07:54:31.607686'),
(17, 'TMT', 'DEPT-4007', '2020-02-06 06:24:29.256736');

-- --------------------------------------------------------

--
-- Table structure for table `event_booking`
--

CREATE TABLE `event_booking` (
  `id` int(20) NOT NULL,
  `booking_user_id` int(255) NOT NULL,
  `event_id` int(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_goals`
--

CREATE TABLE `event_goals` (
  `id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL,
  `goal_name` varchar(500) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_image`
--

CREATE TABLE `event_image` (
  `id` int(20) NOT NULL,
  `event_id` int(255) NOT NULL,
  `event_image` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_media`
--

CREATE TABLE `event_media` (
  `id` int(11) NOT NULL,
  `goal_id` int(11) NOT NULL,
  `event_type` enum('0','1') NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `event_title` varchar(500) NOT NULL,
  `event_desc` varchar(1000) NOT NULL,
  `event_img_main` varchar(500) NOT NULL,
  `location` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(250) NOT NULL,
  `pin` int(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `event_amount` int(255) NOT NULL,
  `event_currency` varchar(10) NOT NULL,
  `event_gender` enum('1','2','3') NOT NULL,
  `from_age` int(20) NOT NULL,
  `to_age` int(20) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_media`
--

INSERT INTO `event_media` (`id`, `goal_id`, `event_type`, `user_id`, `event_title`, `event_desc`, `event_img_main`, `location`, `city`, `state`, `pin`, `country`, `event_amount`, `event_currency`, `event_gender`, `from_age`, `to_age`, `status`, `from_time`, `to_time`, `created_at`, `updated_at`) VALUES
(1, 0, '1', 6, 'Music Concert', 'Test', 'http://localhost/share_o_media/assets/images/event_images/asian_cyberpunk-wide4.jpg', '2 No Kapasdanga', 'CHINSURAH', 'West Bengal', 712103, 'India', 50, '$', '1', 18, 40, '0', '10:00:00', '02:00:00', '2020-02-22 07:59:22', '0000-00-00 00:00:00'),
(2, 0, '1', 6, 'Boating ', 'some test some test some test some test some test some test some test some test', 'http://localhost/share_o_media/assets/images/event_images/192.jpg', '2 No Kapasdanga', 'CHINSURAH', 'West Bengal', 712103, 'India', 75, '$', '2', 18, 50, '0', '10:00:00', '02:00:00', '2020-02-23 12:53:20', '0000-00-00 00:00:00'),
(3, 0, '1', 6, 'New Technology', 'cdqwdqwccqwcqw', 'http://localhost/share_o_media/assets/images/event_images/1221414551_3257_1600_1200.jpg', '2 No Kapasdanga', 'CHINSURAH', 'West Bengal', 712103, 'India', 50, '$', '2', 18, 50, '0', '10:00:00', '02:00:00', '2020-02-23 12:55:50', '0000-00-00 00:00:00'),
(4, 0, '0', 1, 'PHP Training', 'Test', 'http://localhost/share_o_media/assets/images/event_images/Jellyfish4.jpg', '2 No Kapasdanga', 'CHINSURAH', 'West Bengal', 712103, 'India', 0, '$', '1', 18, 24, '0', '10:00:00', '02:00:00', '2020-02-29 07:32:51', '0000-00-00 00:00:00'),
(5, 0, '1', 6, 'Learn Something', 'Test Tests trerst', 'http://localhost/share_o_media/assets/images/event_images/Penguins.jpg', '2 No Kapasdanga', 'CHINSURAH', 'West Bengal', 712103, 'India', 50, '$', '1', 10, 40, '0', '10:00:00', '02:00:00', '2020-03-08 08:08:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_post`
--

CREATE TABLE `event_post` (
  `id` int(20) NOT NULL,
  `user_id` int(255) NOT NULL,
  `privacy_id` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1:- Public, 2:- Private',
  `post_text` text NOT NULL,
  `post_image` text NOT NULL,
  `event_id` int(11) NOT NULL,
  `post_type` enum('1','2','3','4','5','6') NOT NULL COMMENT '1:- Hosting Post, 2:- Attending Post, 3:-Share Post, 4:-Text Post, 5, Image Post, 6:- Text & Image Post',
  `post_delete` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0:- Not Delete, 1:- Delete',
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0:- Active, 1:- Deactive',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_post`
--

INSERT INTO `event_post` (`id`, `user_id`, `privacy_id`, `post_text`, `post_image`, `event_id`, `post_type`, `post_delete`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, '1', 'hello', '', 1, '1', '0', '0', '2020-03-01 18:15:35', '2020-03-01 18:15:35'),
(2, 6, '1', '', '', 5, '2', '0', '0', '2020-03-08 09:08:52', '2020-03-08 14:01:09'),
(3, 6, '1', '', '', 2, '1', '0', '0', '2020-03-08 13:53:09', '2020-03-08 13:53:09'),
(4, 6, '1', '', '', 3, '1', '0', '0', '2020-03-08 13:53:09', '2020-03-08 13:53:09'),
(5, 1, '1', '', '', 4, '1', '0', '0', '2020-03-08 13:53:42', '2020-03-08 13:53:42'),
(6, 6, '1', 'Test', '', 3, '4', '0', '0', '2020-03-21 07:20:57', '2020-03-21 11:50:57'),
(7, 6, '1', '', '', 2, '5', '0', '0', '2020-03-21 07:21:41', '2020-03-21 11:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `group_under`
--

CREATE TABLE `group_under` (
  `id` int(11) NOT NULL,
  `g_under` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderno`
--

CREATE TABLE `orderno` (
  `id` int(11) NOT NULL,
  `o_id` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `test_head` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_name`, `age`, `gender`, `address`, `contact`, `test_head`, `testname`, `amount`, `code`) VALUES
(4, 'randip', '6555465', 'hidden', 'yrtytu', 2147483647, 'hidden', '', 0, 'PID-5550'),
(6, 'tytyt', '6555465', 'Male', 'yrtytu', 2147483647, 'TEST HEAD 2', '', 0, 'PID-3307'),
(7, 'vicky', '6555465', 'hidden', 'yrtytu', 2147483647, 'hidden', '', 0, 'PID-4845'),
(14, 'bapon', '15', 'Male', 'Kolkata', 8093855687, 'TEST HEAD 2', 'hidden', 545454, 'PNT-5745');

-- --------------------------------------------------------

--
-- Table structure for table `subtest`
--

CREATE TABLE `subtest` (
  `id` int(11) NOT NULL,
  `thead_id` varchar(255) NOT NULL,
  `sub_test` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `lrange` varchar(255) NOT NULL,
  `urange` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtest`
--

INSERT INTO `subtest` (`id`, `thead_id`, `sub_test`, `amount`, `category`, `unit`, `lrange`, `urange`, `method`) VALUES
(15, 'TEST HEAD 2', 'SUB TEST 1', 100, 'male,female,pregnant,child', '10,20,30,40', '20,30,40,50', '30,40,50,60', 'M1,M2,M3,M4'),
(16, 'TEST HEAD 5', 'SUB TEST 2', 200, 'male', '10', '20', '30', 'M1'),
(17, 'TEST HEAD 5', 'SUB TEST 3', 300, 'female', '20', '30', '40', 'M2'),
(18, 'TEST HEAD 6', 'SUB TEST 4', 400, 'pregnant', '30', '40', '50', 'M3'),
(19, 'TEST HEAD 9', 'SUB TEST 5', 500, 'child', '40', '50', '60', 'M4'),
(21, 'TEST HEAD 5', 'subtest 7', 733, 'female', '87', '87', '8098', 'OT'),
(22, 'TEST HEAD 5', 'sub test 77', 733, 'female', '099', '50', '6588', 'OT'),
(23, 'TEST HEAD 2', 'sub test 67', 399, 'child', '55', '88868', '6588', 'OT'),
(24, 'TEST HEAD 2', 'SUB TEST 09', 433, 'child', '87', '75567', '6588', 'OT');

-- --------------------------------------------------------

--
-- Table structure for table `testcode`
--

CREATE TABLE `testcode` (
  `id` int(11) NOT NULL,
  `t_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testname`
--

CREATE TABLE `testname` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `test_type` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testname`
--

INSERT INTO `testname` (`id`, `dept_id`, `test_type`, `t_name`, `amount`) VALUES
(44, 6, 'sub', 'TEST HEAD 2', 299),
(45, 7, 'normal', 'TEST HEAD 3', 399),
(46, 8, 'normal', 'TEST HEAD 4', 499),
(47, 9, 'sub', 'TEST HEAD 5', 599),
(48, 10, 'sub', 'TEST HEAD 6', 699),
(49, 11, 'normal', 'TEST HEAD 7', 799),
(50, 12, 'normal', 'TEST HEAD 8', 899),
(51, 13, 'sub', 'TEST HEAD 9', 999),
(52, 7, 'sub', 'viki', 433);

-- --------------------------------------------------------

--
-- Table structure for table `thname`
--

CREATE TABLE `thname` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `th_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(500) NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` int(20) NOT NULL,
  `state` varchar(255) NOT NULL,
  `speaking` varchar(255) NOT NULL,
  `reading` varchar(255) NOT NULL,
  `about_me` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `phone`, `email`, `gender`, `password`, `image`, `location`, `city`, `pin`, `state`, `speaking`, `reading`, `about_me`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vicky Mallick', '1997-10-10', '9874563210', 'vicky@gmail.com', 'male', '7c222fb2927d828af22f592134e8932480637c0d', 'http://localhost/share_o_media/assets/images/profile_image/Screenshot_20190930-145940_11.jpg', 'Kolkata', 'Chinsurah', 712103, 'West Bengal', 'Bengali,Hindi,English', 'Bengali,English', 'ewtdfyhiuoi;ujhfgfj;lkjjcxbcvhkjl,mvjlkjjhjghuo;dh\\djyilfjzfhkcxvhjhncb,nbcb,nbvmn.bnbnmcbn,cn,cn,vcbnccbbm,bnbvbcnncbnc,vncbncn,ncbnb,vmmv,vbvmb', '0', '2020-02-02 12:30:14', '0000-00-00 00:00:00'),
(2, 'Puja Khanna', '2001-10-20', '9831670757', 'jyoti@gmail.com', 'male', '44e42e127470fbabfa4fedcd415ad34605d539a9', 'http://localhost/share_o_media/assets/images/profile_image/1606872088_1579860572_1013469741_1578634988_IMG-20191113-WA0008.jpg', 'Kolkata', 'Chinsurah', 7787990, 'West Bengal', 'Bengali,Hindi,English', 'Bengali,English', 'jbjk.l.mnmmmnnmnbnbbj,j,kmnbvhgghgjfdffjguueszgjnml,asdfghjgggfdszdbvbbnbmfdhgdghjyotifzdfxbxvvvvvcbcbbbbbbccfhjdafnzbnbhghddc mjbhddsfv', '0', '2020-02-13 02:04:15', '0000-00-00 00:00:00'),
(3, 'Jayanta Mondal', '2020-02-14', '9831670757', 'jaya@gmail.com', 'male', '44e42e127470fbabfa4fedcd415ad34605d539a9', 'http://localhost/share_o_media/assets/images/profile_image/1725080328_1574425720_886425880_1574128465_2049794844_1574128150_is_(2).jpg', 'amalnagar,chandrahati hooghly', '', 0, '', '', '', '', '0', '2020-02-13 09:30:43', '0000-00-00 00:00:00'),
(4, 'Puja Khanna', '2020-12-31', '123456', 'jyoti@gmail.com', 'female', 'd1d1aa47a79fd596d8297d0e058f5b65118858f6', 'http://localhost/share_o_media/assets/images/profile_image/Rotterdam-Pictures-8.jpg', 'kaamnvjnd', 'Chinsurah', 0, ',lnjjkm,', ';l.l.', 'Bengali,English', 'puja khanna mera nam, khana khana mera kaam', '0', '2020-02-14 05:56:21', '0000-00-00 00:00:00'),
(5, 'Jyoti Vankala', '2020-12-31', '9831670757', 'me@gmail.com', 'female', '63ab910cb3a7bc89faae5a46aa337aa22f5f4d30', 'http://localhost/share_o_media/assets/images/profile_image/is_(1).jpg', 'amalnagar,chandrahati hooghly', 'Chinsurah', 6756433, 'West Bengal', 'Bengali,Hindi,English', 'Bengali,English,Hindi', 'Jyoti Vankala my  name  is ,my name is jyoti vankala,\r\njyoti vankala is your name jyoti vnakala jyoti vankala jyoti vankala jyoti vnaklaa jyoiti vankala', '0', '2020-02-15 01:26:01', '0000-00-00 00:00:00'),
(6, 'Jayanta Mondal', '1988-10-10', '9874563210', 'jayanta@gmail.com', 'male', '7c222fb2927d828af22f592134e8932480637c0d', 'http://localhost/share_o_media/assets/images/profile_image/Penguins1.jpg', '2 No Kapasdanga', 'CHINSURAH', 789546, 'West Bengal', 'English', 'Bengali', 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.\r\nSeparated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '0', '2020-02-16 11:51:56', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `circle_friend`
--
ALTER TABLE `circle_friend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_goals`
--
ALTER TABLE `event_goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_image`
--
ALTER TABLE `event_image`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `event_media`
--
ALTER TABLE `event_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_post`
--
ALTER TABLE `event_post`
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
-- AUTO_INCREMENT for table `circle_friend`
--
ALTER TABLE `circle_friend`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_booking`
--
ALTER TABLE `event_booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_goals`
--
ALTER TABLE `event_goals`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_image`
--
ALTER TABLE `event_image`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_media`
--
ALTER TABLE `event_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_post`
--
ALTER TABLE `event_post`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
