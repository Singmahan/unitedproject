-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 08:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitedproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `person_code` varchar(50) NOT NULL COMMENT 'อันดับจ่าย',
  `person_fullname` varchar(100) NOT NULL COMMENT 'ชื่อ - นามสกุล',
  `person_number` varchar(100) NOT NULL COMMENT 'เลขที่เงินกู้',
  `person_rednumber` varchar(100) NOT NULL COMMENT 'เลขคดีแดง',
  `person_deed_number` varchar(100) NOT NULL COMMENT 'เลขที่โฉนด',
  `person_sales` varchar(100) NOT NULL COMMENT 'วิธีการขาย',
  `person_province` varchar(100) NOT NULL COMMENT 'ศาลจังหวัด',
  `person_legal` varchar(100) NOT NULL COMMENT 'สำนักงานบังคับคดี',
  `person_price` varchar(100) NOT NULL COMMENT 'ราคา',
  `person_price_date` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่ขายได้',
  `person_date_bank` varchar(100) NOT NULL COMMENT 'วันที่รับโฉนดจากแบงก์',
  `person_date_legal` varchar(100) NOT NULL COMMENT 'วันที่ส่งโฉนดเข้ากรม',
  `person_UP` varchar(100) NOT NULL COMMENT 'เลข UP ส่งโฉนดคืนแบงก์',
  `data06_id` int(11) NOT NULL COMMENT '	ID อ้างอิงตาราง UP ส่งต้นฉบับ',
  `person_date_UP` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่ส่งโฉนดคืนแบงก์',
  `ex1_data07` varchar(100) NOT NULL COMMENT 'เบิกเงิน 200',
  `ex1_date_07` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่เบิกเงิน 200',
  `ex1_data08` varchar(100) NOT NULL COMMENT 'เบิกบุริมฯ งวด 1',
  `ex1_date_08` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่เบิกบุริมฯ งวด 1',
  `ex1_data09` varchar(100) NOT NULL COMMENT 'เบิกบุริมฯ งวด 2',
  `ex1_date_09` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่เบิกบุริมฯ งวด 2',
  `ex1_data10` varchar(100) NOT NULL COMMENT 'เบิก โจทก์ถอน,ขายติด,ขายปลอด',
  `ex1_date_10` date DEFAULT current_timestamp() COMMENT 'วันที่เบิก โจทก์ถอน,ขายติด,ขายปลอด',
  `person_note` varchar(255) NOT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `person_code`, `person_fullname`, `person_number`, `person_rednumber`, `person_deed_number`, `person_sales`, `person_province`, `person_legal`, `person_price`, `person_price_date`, `person_date_bank`, `person_date_legal`, `person_UP`, `data06_id`, `person_date_UP`, `ex1_data07`, `ex1_date_07`, `ex1_data08`, `ex1_date_08`, `ex1_data09`, `ex1_date_09`, `ex1_data10`, `ex1_date_10`, `person_note`) VALUES
(1, '123/65', 'นายอัศนัย  ศรีศิริ', '086452363256', 'ผบ.123/65', '123', 'ปลอด', 'สมุทรปราการ', 'สบจ.สมุทรปราการ', '', '2022-03-11', '2022-03-23', '2022-03-23', '', 0, '2022-03-11', '', '2022-03-11', '', '2022-03-11', '', '2022-03-11', '', '2022-03-11', 'นายอัศนัย  ศรีศิริ'),
(15, '120/65', 'นายประยุทธ์  จันทร์โอชา', '052585858596, 052585858596', 'ผบ.120/65', '123', '', '', '', '', '2022-03-25', '2022-03-25', '2022-03-25', '', 0, '2022-03-25', '', '2022-03-25', '', '2022-03-25', '', '2022-03-25', '', '2022-03-25', ''),
(16, '155/65', 'นายประวิตร  วงศ์สุวรรณ', '052632526363', '111/65', '111', '', '', '', '', '2022-03-25', '', '', '', 0, '2022-03-25', '', '2022-03-25', '', '2022-03-25', '', '2022-03-25', '', '2022-03-25', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
