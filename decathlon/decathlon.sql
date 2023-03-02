-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 04:00 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decathlon`
--

DELIMITER $$
--
-- Procedure
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `total_amount` ()  NO SQL
SELECT SUM(MRP) FROM `checkout action` INNER JOIN `items` USING(`itemid`)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `date` date NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkout_id`, `custid`, `empid`, `date`, `subtotal`) VALUES
(201, 50, 2, '2016-06-10', 650),
(202, 51, 2, '2017-06-09', 1150),
(203, 52, 3, '2017-08-12', 660),
(204, 56, 4, '2017-06-05', 500),
(205, 55, 1, '2017-11-05', 4100),
(206, 53, 6, '2017-10-02', 6400),
(207, 54, 7, '2010-09-08', 1400);

-- --------------------------------------------------------

--
-- Table structure for table `checkout action`
--

CREATE TABLE `checkout action` (
  `itemid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datecreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `name`, `Password`, `phone`, `email`, `datecreated`) VALUES
(1, 'syed', '1234', 7894, 'syed@gmail.com', '0000-00-00'),
(50, 'akshay', '0', 888068110, 'akshay@gmail.com', '2015-01-01'),
(51, 'sandya', '0', 772281009, 'sandhya@gmail.com', '2015-05-05'),
(52, 'teesha', '0', 771001310, 'teesha@gmail.com', '2016-10-12'),
(53, 'supriya', '0', 0, 'supriya@gmail.com', '2015-08-15'),
(54, 'abhay', '0', 962015388, 'abhay@gmail.com', '2016-06-06'),
(55, 'bhaskar', '0', 782983776, 'bhaskar@gmail.com', '2010-04-09'),
(56, 'ajay', '0', 962015990, 'ajay@gmail.com', '2015-01-09'),
(57, 'chitra', '0', 923456789, 'chitra@gmail.com', '2017-08-25'),
(58, 'jeeva', '0', 987654329, 'jeeva@gmail.com', '2015-01-09'),
(59, 'santhosh', '0', 982354672, 'santhosh6@gmail.com', '2010-05-20'),
(60, 'haseeb', '4567', 8585, 'haseeb@379.com', '0000-00-00'),
(61, 'Arun', '0', 707781, 'arun@gmail.com', '0000-00-00'),
(62, 'Ajay', 'qwer', 45321, 'ajay@gmail.com', '0000-00-00'),
(63, 'srush', '121', 7676788, 'srush@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE `dependents` (
  `name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `empid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependents`
--

INSERT INTO `dependents` (`name`, `relationship`, `email`, `empid`) VALUES
('john', 'husband', 'john@gmail.com', 1),
('james', 'son', '', 2),
('preethi', 'daughter', 'preethi@gmail.com', 2),
('ravi', 'husband', '', 3),
('kumar', 'son', 'kumar@gmail.com', 4),
('smruthi', 'daughter', 'smruthi@gmail.com', 9),
('kavya', 'wife', '', 9),
('jennifer', 'wife', 'jenn@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datestart` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `name`, `password`, `phone`, `pay`, `address`, `email`, `datestart`) VALUES
(1, 'abc', '1234', 0, 5000, 'a', 'a', '1997-01-01'),
(2, 'smith', '0', 898888888, 10000, 'banglore', 'smith@gmail.com', '2010-06-08'),
(3, 'edward', '0', 877777777, 150000, 'banglore', 'edward@gmail.com', '2010-06-09'),
(4, 'pavan', '0', 6666666, 420000, 'mysore', '', '2010-07-25'),
(5, 'girish', '0', 898888888, 300000, 'manglore', 'girish@gmail.com', '2010-09-08'),
(6, 'neha', '0', 76666664, 500000, 'banglore', '', '2016-05-05'),
(7, 'santhosh', '0', 40000099, 60000, 'mysore', 'santhosh@gmail.com', '2012-04-04'),
(8, 'veena', '0', 933332322, 52000, 'manglore', 'veena@gmail.com', '2010-02-01'),
(9, 'sed', '0', 121, 12, 'qw', 'qw', '2017-11-01'),
(10, 'aa', '0', 0, 23, 'aa', '', '0000-00-00'),
(11, 'syed', '1234', 1234, 1234, 'blr', 'gmail', '1997-08-08'),
(12, 'syed', '0', 0, 5000, 'bgr', '', '0000-00-00'),
(13, 'qq', '123', 123, 123, 'qq', '', '0000-00-00'),
(14, 'tt', '123', 123, 45, 'ttt', '', '0000-00-00'),
(15, 'vijay', '123', 725941, 45000, 'banglore', '', '0000-00-00'),
(49, 'sejal', '123', 456, 5000, 'bgr', 'sej@gmail.com', '2017-12-01'),
(50, 'ARUNA', '1234', 725955, 5000, 'BANGALORE', '', '0000-00-00'),
(51, 'sru', '121', 7867856, 5000, 'Bangalore', '', '0000-00-00'),
(52, 'mon', '11', 3435365, 5000, 'bgl', '', '0000-00-00');

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `salary` BEFORE INSERT ON `employee` FOR EACH ROW BEGIN
IF new.pay<5000
THEN SET new.pay=5000;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `MRP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `brand`, `description`, `MRP`) VALUES
(1001, 'Yonex', 'Basket ball', 400),
(1002, 'Nike', 'Foot ball', 400),
(1003, 'Reebok', 'Tennis ball', 200),
(1004, 'Adidas', 'Jersy', 500),
(1005, 'Yonex', 'Racket', 250),
(1006, 'Arena', 'Cricket Bat', 700),
(1007, 'FILA', 'Cricket Ball', 350),
(1008, 'Lotto', 'Shoe', 900),
(1009, 'Adidas', 'Badminton', 450);

-- --------------------------------------------------------

--
-- Table structure for table `managesfor`
--

CREATE TABLE `managesfor` (
  `branchid` int(11) NOT NULL,
  `emid` int(11) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managesfor`
--

INSERT INTO `managesfor` (`branchid`, `emid`, `position`) VALUES
(800, 1, 'Director'),
(801, 2, 'Director'),
(802, 3, 'Director'),
(803, 4, 'Director'),
(804, 5, 'Director'),
(805, 6, 'Director'),
(806, 7, 'Director'),
(807, 8, 'Director');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`),
  ADD KEY `custid` (`custid`),
  ADD KEY `empid` (`empid`),
  ADD KEY `custid_2` (`custid`);

--
-- Indexes for table `checkout action`
--
ALTER TABLE `checkout action`
  ADD KEY `itemid` (`itemid`),
  ADD KEY `checkoutid` (`checkout_id`),
  ADD KEY `checkout_id` (`checkout_id`),
  ADD KEY `itemid_2` (`itemid`),
  ADD KEY `checkout_id_2` (`checkout_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`),
  ADD UNIQUE KEY `empid` (`empid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
