-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 11:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopassus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'iman', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(26) NOT NULL,
  `head` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `informasi` text NOT NULL,
  `flag` varchar(100) NOT NULL,
  `game` varchar(100) NOT NULL,
  `guild` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `jm_member` int(100) NOT NULL,
  `leader` varchar(100) NOT NULL,
  `nickl` varchar(100) NOT NULL,
  `rll` varchar(100) NOT NULL,
  `guardsman` varchar(100) NOT NULL,
  `nickm` varchar(100) NOT NULL,
  `rlm` varchar(100) NOT NULL,
  `guild_master` varchar(100) NOT NULL,
  `nickr` varchar(100) NOT NULL,
  `rlr` varchar(100) NOT NULL,
  `member` varchar(100) NOT NULL,
  `nicke` varchar(100) NOT NULL,
  `rle` varchar(100) NOT NULL,
  `officer` varchar(100) NOT NULL,
  `nickcer` varchar(100) NOT NULL,
  `rlcer` varchar(100) NOT NULL,
  `Recruit` varchar(100) NOT NULL,
  `nickit` varchar(100) NOT NULL,
  `rlit` varchar(100) NOT NULL,
  `th_hand` varchar(100) NOT NULL,
  `nicknd` varchar(100) NOT NULL,
  `rlnd` varchar(100) NOT NULL,
  `warmaster` varchar(100) NOT NULL,
  `nickster` varchar(100) NOT NULL,
  `rlster` varchar(100) NOT NULL,
  `text_j` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `head`, `logo`, `informasi`, `flag`, `game`, `guild`, `date`, `jm_member`, `leader`, `nickl`, `rll`, `guardsman`, `nickm`, `rlm`, `guild_master`, `nickr`, `rlr`, `member`, `nicke`, `rle`, `officer`, `nickcer`, `rlcer`, `Recruit`, `nickit`, `rlit`, `th_hand`, `nicknd`, `rlnd`, `warmaster`, `nickster`, `rlster`, `text_j`, `link`) VALUES
(1, 'Hi Welcome to Kopassus..!', '__video__commission___soft_feelings_by_hyanna_natsu_dbh5qva-pre.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'id.svg', 'Albion Online', 'Kopassus', '2019-01-05', 38, 'dci3c8k-ce0dc859-601e-45c6-9454-2b780bc500e9.jpg', '1First', 'ion-knife', '__video__commission___soft_feelings_by_hyanna_natsu_dbh5qva-pre.jpg', 'Curut', 'ion-android-favorite', 'dci3c8k-ce0dc859-601e-45c6-9454-2b780bc500e9.jpg', 'EsCendolz', 'ion-android-hand', '__video__commission___soft_feelings_by_hyanna_natsu_dbh5qva-pre.jpg', 'Kangcendol', 'ion-knife', 'dci3c8k-ce0dc859-601e-45c6-9454-2b780bc500e9.jpg', 'Jasjus', 'ion-android-favorite', '__video__commission___soft_feelings_by_hyanna_natsu_dbh5qva-pre.jpg', 'Kripik', 'ion-android-hand', 'dci3c8k-ce0dc859-601e-45c6-9454-2b780bc500e9.jpg', 'Miuyi', 'ion-knife', '__video__commission___soft_feelings_by_hyanna_natsu_dbh5qva-pre.jpg', 'Miyo', 'ion-android-favorite', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'www.imancrb.blogspot.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
