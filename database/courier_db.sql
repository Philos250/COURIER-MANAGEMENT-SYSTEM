-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 03:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `cid` int(10) NOT NULL,
  `cuid` int(5) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `rev_name` varchar(100) NOT NULL,
  `r_phone` varchar(13) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `dname` varchar(60) NOT NULL,
  `plaque` varchar(15) NOT NULL,
  `type` varchar(40) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `Totalfreight` int(15) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `office` varchar(30) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `pick_time` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`cid`, `cuid`, `cons_no`, `ship_name`, `phone`, `s_add`, `rev_name`, `r_phone`, `r_add`, `dname`, `plaque`, `type`, `qty`, `book_mode`, `Totalfreight`, `mode`, `office`, `pick_date`, `pick_time`, `status`, `comments`, `book_date`) VALUES
(1, 1, 'M22P7KHM', 'HABIYAMBERE Daniel', '0786790914', 'kigali', 'HABIMANA Jean de Dieu', '+250780271726', 'kabaya', 'MABONEZA JMV', '', 'Electronic device', 12, 'TBB', 0, 'Road', 'Fast Courier - Kigali', '29/01/2011', '12', 'Delivered', 'ds ds d', '2011-01-29'),
(2, 2, 'QIWWGIQP', 'Aisha Uwimana', '0786790914', 'kimisagara', 'UWIMANA Magnifique', '078789067', 'ruhanda', '', '', 'Documents', 12, 'TBB', 0, 'Train', '', '29/01/2011', '4', 'Delivered', 'Plz deliver it', '2011-01-29'),
(3, 1, 'Q906F73L', 'Aime Console', '+25078437441', 'kacyiru', 'IRADUKUNDA Fiacre', '+25078437441', 'yanza', '', '', 'Documents', 12, 'ToPay', 0, 'Air', 'Fast Courier - Kigali', '26/01/2013', '4', 'Delivered', 'Thanks', '2011-01-29'),
(4, 1, '2THBV8UM', 'Frank Joe', '9532652365', 'Newyork', 'Asif Khan', '9852451254', 'ABC', '', '', 'Shoe', 4, 'Paid', 0, 'Road', '', '20/01/2011', '12', 'Delivered', 'Plz transit', '2011-01-30'),
(5, 3, '2THBV45T5', 'UWIZEYIMANA Fidele', '078303345', 'kigali', 'UWIRINGIYIMANA Emmanuel', '078907890', 'Rutsiro', '', '', 'Money', 5, 'Paid', 0, 'Air', '', '21/06/2018', '21h34', 'in Transit', 'Check up', '2018-06-21'),
(6, 3, '3RSDV8UM', 'UWIZEYIMANA Fidele', '078303345', 'kigali', 'UWIRINGIYIMANA Emmanuel', '078907890', 'Rutsiro', '', '', 'Document', 5, 'Paid', 0, 'Road', '', '21/06/2018', '21h34', 'in Transit', 'Check up', '2018-06-21'),
(7, 3, 'LLLLLLLLLL', 'UWIZEYIMANA Fidele', '078303345', 'kigali', 'UWIRINGIYIMANA Emmanuel', '078907867', 'Rutsiro', '', '', 'Bag', 5, 'Paid', 0, 'Road', '', '21/06/2018', '21h34', 'Delivered', 'check up', '2018-06-21'),
(8, 3, 'RUXCBIKL', 'UWIZEYIMANA Fidele', '+25078027172', 'kabeza', 'UWIRINGIYIMANA Emmanuel', '+25078027172', 'kabeza', '', '', 'Tool', 5, 'Paid', 10000, 'Road', 'Fast Courier - Musanze', '2018-07-01', '21h34', 'in Transit', 'Hello', '2018-07-01'),
(9, 2, '4HJ8NKOM', 'UWIZEYIMANA Fidele', '+25078027172', 'kabeza', 'UWIRINGIYIMANA Emmanuel', '+25078027172', 'kabeza', 'IRADUKUNDA Fiacre', 'RAD102E', 'Document', 2, 'Paid', 4000, 'Road', 'Fast Courier - Huye', '2018-07-03', '21h34', 'in Transit', 'Hello', '2018-07-03'),
(10, 2, 'JVUTAHK6', 'HABIMANA Jean de Dieu', '+250780271726', 'kabeza', 'HAKIZIMANA Jean de Dieu', '0781541769', 'Huye', 'IRADUKUNDA Fiacre', 'RAB703C', 'Document', 2, 'Paid', 4000, 'Road', 'Fast Courier - Huye', '2018-07-04', '21h34', 'Delivered', 'Hello nakohereje kbs', '2018-07-04'),
(11, 1, '93QQJOH8', 'IRADUKUNDA Fiacre', '0784374414', '', 'HABIMANA Jean de Dieu', '+250780271726', 'kabeza', 'MWIBOHOZI Vianney', 'RAB204E', 'Electronic device', 1, 'Paid', 2000, 'Road', 'Fast Courier - Kigali', '2018-07-04', '18h30', 'in Transit', 'Hello nakohereje kbs', '2018-07-04'),
(12, 2, '1N8XVPNT', 'IRADUKUNDA Fiacre', '+250784374414', 'KIMISAGARA', 'HAKIZIMANA Jean de Dieu', '+250781541769', 'Huye', 'MWIBOHOZI Vianney', 'RAB204E', 'Book', 2, '', 4000, 'Road', 'Fast Courier - Huye', '2018-07-04', '18h30', 'Delivered', 'Hello ndacyohereje kbs', '2018-07-04'),
(13, 1, 'IV2NPH7H', 'UWIZEYIMANA Fidele', '+250780271726', 'kabeza', 'HABIMANA Jean de Dieu', '+250780271726', 'kabeza', 'IRADUKUNDA Fiacre', 'RAD102E', 'Cloth', 1, 'Paid', 2000, 'Road', 'Fast Courier - Kigali', '2018-07-04', '18h30', 'in Transit', 'Heyy wasap', '2018-07-04'),
(14, 2, 'YR4O75OH', 'HABIMANA Jean de Dieu', '+250780271726', 'kabeza', 'HAKIZIMANA Jean de Dieu', '+250781541769', 'Huye', 'IRADUKUNDA Fiacre', 'RAD102E', 'Document', 1, 'Paid', 2000, 'Road', 'Fast Courier - Huye', '2018-07-04', '18h30', 'in Transit', 'Hello GoodBye', '2018-07-04'),
(15, 1, '54GAWVHJ', 'HABIMANA Jean de Dieu', '+250780271726', 'kabeza', 'HABIMANA Jean de Dieu', '+250780271726', 'kabeza', 'IRADUKUNDA Fiacre', 'RAB703', 'Cloth', 2, 'Paid', 10000, 'Road', 'Fast Courier - Kigali', '2018-07-07', '21h34', 'Delivered', 'Hey wasap', '2018-07-07'),
(16, 1, 'AUXMT0ER', 'felix u', '089977777', 'nyanz', 'MABENDA', '2345678', 'kabeza', 'MUTWE', 'R 301', 'Document', 1, 'ToPay', 10000, 'Road', 'Fast Courier - Kigali', '2019-06-19', '09:12', 'Delivered', 'THANKSA', '2019-06-18'),
(17, 2, '3RUXPKC3', 'usengimana felix', '0726056617', 'kigali', 'MABENDA', '0780271726', 'kabeza', 'MUTWE', '1004', 'Cloth', 2, 'ToPay', 2000, 'Road', 'Fast Courier - Huye', '2019-07-02', '09:12', 'Delivered', 'merci', '2019-07-02'),
(18, 2, '3HZQW2B8', 'pasteur', '0726259177', 'kabeza', 'nkotanyi', '0726056617', 'nyanza', 'MUTWE', 'r', 'Document', 2, 'Paid', 200, 'Road', 'Fast Courier - Huye', '2019-07-10', '09:12', 'Delivered', 'asante', '2019-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_officers`
--

CREATE TABLE `tbl_courier_officers` (
  `cuid` int(10) NOT NULL,
  `officer_name` varchar(40) NOT NULL,
  `off_pwd` varchar(40) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(12) NOT NULL,
  `office` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_officers`
--

INSERT INTO `tbl_courier_officers` (`cuid`, `officer_name`, `off_pwd`, `address`, `email`, `ph_no`, `office`, `reg_date`) VALUES
(1, 'courier', 'courier', 'nyarugenge, kigali', 'courier@gmail.com', '0788845459', 'Fast Courier - Kigali', '2011-01-30 09:25:21'),
(2, 'test', 'test', 'test, huye', 'test@gmail.com', '0786790914', 'Fast Courier - Huye', '2011-01-30 09:40:42'),
(3, 'waka', 'waka', 'waka, musanze', 'waka@gmail.com', '0780271726', 'Fast Courier - Musanze', '2011-01-30 17:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_track`
--

CREATE TABLE `tbl_courier_track` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bk_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_track`
--

INSERT INTO `tbl_courier_track` (`id`, `cid`, `cons_no`, `current_city`, `status`, `comments`, `bk_time`) VALUES
(1, 1, 'M22P7KHM', 'Fast Courier - Kigali', 'Delayed', 'Delay due to rain', '2011-01-30 10:23:04'),
(3, 1, 'M22P7KHM', 'Fast Courier - Kigali', 'Delayed', 'Delayed due to rain', '2011-01-30 10:26:43'),
(4, 4, '2THBV8UM', 'Fast Courier - Huye', 'Delayed', 'Due to rain', '2011-01-30 17:44:52'),
(5, 1, 'M22P7KHM', 'Fast Courier - Kigali', 'Completed', 'Completed', '2011-01-30 17:49:11'),
(6, 1, 'M22P7KHM', 'Fast Courier - Kigali', 'Landed', '', '2018-06-19 06:21:43'),
(7, 3, 'Q906F73L', 'Fast Courier - Kigali', 'Onhold', '', '2018-06-20 07:48:56'),
(8, 1, 'M22P7KHM', 'Fast Courier - Kigali', 'Completed', '', '2018-06-20 08:55:49'),
(9, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 11:58:39'),
(10, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 12:01:17'),
(11, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 15:03:30'),
(12, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 15:08:28'),
(13, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 15:12:18'),
(14, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 15:14:46'),
(15, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 15:19:07'),
(16, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 16:14:18'),
(17, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 16:15:31'),
(18, 3, 'Q906F73L', 'Fast Courier - Kigali', '', '', '2018-07-03 16:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE `tbl_offices` (
  `id` int(10) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `address` varchar(230) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `office_time` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_offices`
--

INSERT INTO `tbl_offices` (`id`, `off_name`, `address`, `city`, `ph_no`, `office_time`, `contact_person`) VALUES
(1, 'Fast Courier - Kigali', 'nyarugenge, kigali', 'kigali', '0257-25125', '10.00 am - 9.00 pm', 'courier kigali'),
(2, 'Fast Courier - Huye', 'test, huye', 'huye', '0245-858521', '10.00 am - 9.00 pm', 'test huye'),
(3, 'Fast Courier - Musanze', 'waka, musanze', 'musanze', '020-25125', '10.00 am - 9.00 pm', 'waka design');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  ADD PRIMARY KEY (`cuid`),
  ADD KEY `cuid` (`cuid`);

--
-- Indexes for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  MODIFY `cuid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
