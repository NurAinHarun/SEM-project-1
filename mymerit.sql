-- Haloooo Aleeeeppp
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2020 at 11:40 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymerit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminPwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `adminPwd`) VALUES
(14, 'ADMIN01', '123456'),
(15, 'ADMIN02', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_ID` int(11) NOT NULL,
  `student_ID` varchar(14) NOT NULL,
  `program_ID` int(11) NOT NULL,
  `geolocation` varchar(100) NOT NULL,
  `ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_ID`, `student_ID`, `program_ID`, `geolocation`, `ip`) VALUES
(17, 'CB17234', 53, '2.9137974 & 101.8646314', '192.168.0.120'),
(18, 'CB17234', 52, '2.9137974 & 101.8646314', '192.168.0.120');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `progid` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `posmerit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `studid`, `progid`, `position`, `posmerit`) VALUES
(1, 30, 50, 'Program chair', 500),
(2, 30, 51, 'Program co-chair', 450),
(5, 30, 53, 'None', 0),
(6, 30, 52, 'None', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `coID` int(11) NOT NULL,
  `coName` varchar(200) NOT NULL,
  `coEmail` varchar(200) NOT NULL,
  `coPhoto` varchar(200) NOT NULL,
  `coType` varchar(100) NOT NULL,
  `coPhone` varchar(100) NOT NULL,
  `coPwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`coID`, `coName`, `coEmail`, `coPhoto`, `coType`, `coPhone`, `coPwd`) VALUES
(1, 'CO1', 'co1@co.com', 'bilik.webp', 'outsidecampus', '0123456789', '12345'),
(2, 'CO2', 'co2@gmail.com', 'bilik.webp', 'insidecampus', '0123456789', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `merit`
--

CREATE TABLE `merit` (
  `id` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `progmerit` int(100) NOT NULL,
  `posmerit` int(100) NOT NULL,
  `ttlmerit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merit`
--

INSERT INTO `merit` (`id`, `studid`, `progmerit`, `posmerit`, `ttlmerit`) VALUES
(1, 30, 300, 950, 1250);

-- --------------------------------------------------------

--
-- Table structure for table `programtable`
--

CREATE TABLE `programtable` (
  `id` int(100) NOT NULL,
  `programname` varchar(100) NOT NULL,
  `programdetails` varchar(100) NOT NULL,
  `programlocation` varchar(100) NOT NULL,
  `programdate` varchar(100) NOT NULL,
  `programtime` varchar(100) NOT NULL,
  `merit` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `programstatus` varchar(15) NOT NULL,
  `coID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programtable`
--

INSERT INTO `programtable` (`id`, `programname`, `programdetails`, `programlocation`, `programdate`, `programtime`, `merit`, `image`, `programstatus`, `coID`) VALUES
(50, 'Big Bad Wolf Book Sale', 'This Big Bad Wolf Book Sale is finally here ! Come and grab your desire book', 'Universiti Malaysia Pahang Kampus Gambang', '2020-07-31', '10:00', 100, 'images/60e23e1c0e2155064db275e70fe4e534936a5a45a5a22cbf769c4bdb55ad3b8bdownload2.jpg', 'REJECTED', 1),
(52, 'UMP TAEK KWON DO CHAMPIONSHIP 2.0', 'This is to welcome UMP Fighters to prove who are the best fighter !', 'Kompleks Sukan Universiti Malaysia Pahang, Kampus Gambang', '2020-07-01', '10:00', 100, 'images/29c0f450c950ab730d694240a7473594220px-TAEKWONDO_PRACTICIONER_KORYO.jpg', 'APPROVED', 1),
(53, 'UMP BOOK READING 1.0', 'This is to promote youngsters to read more books', 'Universiti Malaysia Pahang Kampus Pekan', '2020-07-30', '11:30', 100, 'images/ffb296f52ce58b35a1da6d34a58ab90620150827211532-reading-book-in-office-books-read.jpeg', 'APPROVED', 2),
(54, 'UMP VOLLEYBALL CHAMPIONSHIP 5.0', 'Encouraging all these youngsters to compete actively by playing volleyball', 'Kompleks Sukan Universiti Malaysia Pahang, Kampus Gambang', '2020-07-30', '08:00', 100, 'images/894f1b390b3efd3e2771461d674bead6volleyball.jpg', 'REJECTED', 2),
(55, 'UMP FUTSAL CHAMPIONSHIP', 'Calling all the futsal players to compete !', 'Universiti Malaysia Pahang Kampus Pekan', '2020-07-12', '17:29', 100, 'images/ef97c0065498aa18fa446453deaf467ffutsal.jpg', '', 2),
(56, 'UMP BOXING CHAMPIONSHIP 2.0', 'BROUGHT TO YOU BY PENTAKOM 2.0', 'testing', '2020-07-27', '10:30', 100, 'images/d13177d615300c9f0f11d5dcdc20d33b90988263_10216818163702597_3381944973577420800_n.jpg', 'APPROVED', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `reportTitle` varchar(100) DEFAULT NULL,
  `reportDesc` varchar(10000) DEFAULT NULL,
  `reportDate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `reportTitle`, `reportDesc`, `reportDate`) VALUES
(2, 'Unrelated information', 'comment threads can put topics in a new light, stir discussions, create community, even uncover new talent.', '2020-06-02'),
(3, 'No problem', 'The main issue here is whether comments create such a negative environment that they detract from the reading experience, a proposition to which many would answer yes.', '2020-07-02'),
(4, 'Lazy student', 'student who has the intellectual ability to excel but never realizes their potential because they choose not to do the work necessary to maximize their capability.', '2020-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `stdName` varchar(50) NOT NULL,
  `stdMatric` varchar(10) NOT NULL,
  `stdFaculty` varchar(10) NOT NULL,
  `stdPhone` varchar(20) NOT NULL,
  `stdPwd` char(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'PENDING',
  `stdPhoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stdName`, `stdMatric`, `stdFaculty`, `stdPhone`, `stdPwd`, `status`, `stdPhoto`) VALUES
(30, 'iskandar', 'CB17234', 'fkasa', '0123456789', '123456', 'APPROVED', '0'),
(37, 'alif', 'CB17208', 'fkom', '0176551546', '12345', 'PENDING', '0'),
(41, '1', '1', 'ftek', '1', '1', 'PENDING', ''),
(42, '2', '2', 'fkom', '2', '2', 'PENDING', ''),
(43, '3', '3', 'ftek', '3', '3', 'APPROVED', 'Capture.PNG'),
(44, '5', '5', 'ftek', '5', '5', 'PENDING', 'iconfinder_light__emergency__police__security_2541978.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_ID`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`coID`);

--
-- Indexes for table `merit`
--
ALTER TABLE `merit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programtable`
--
ALTER TABLE `programtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coordinator`
--
ALTER TABLE `coordinator`
  MODIFY `coID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merit`
--
ALTER TABLE `merit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programtable`
--
ALTER TABLE `programtable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
