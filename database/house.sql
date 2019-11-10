-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 05:29 PM
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
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `cardrent`
-- (See below for the actual view)
--
CREATE TABLE `cardrent` (
`flat_id` int(11)
,`location` varchar(255)
,`city` varchar(100)
,`rent_amount` varchar(255)
,`image` varchar(500)
,`time` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cardsale`
-- (See below for the actual view)
--
CREATE TABLE `cardsale` (
`flat_id` int(11)
,`location` varchar(255)
,`city` varchar(100)
,`totalcost` varchar(255)
,`image` varchar(500)
,`time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryid` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryid`, `location`) VALUES
(1, 'dhaka'),
(2, 'rajshahi'),
(3, 'chittagong'),
(4, 'khulna'),
(5, 'rangpur'),
(6, 'sylhet ');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackbuilder`
--

CREATE TABLE `feedbackbuilder` (
  `val` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbackuser`
--

CREATE TABLE `feedbackuser` (
  `val` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackuser`
--

INSERT INTO `feedbackuser` (`val`, `name`, `email`, `question`) VALUES
(2, 'Jaydeep', 'jv@gmail.com', 'hkajhfkjsdf'),
(7, 'ruhul', 'ruhul@gmail.com', 'i buy this property'),
(3, 'rob', 'rob@gmail.com', 'i ren this home'),
(3, 'ruhul', 'ruhul@gmail.com', 'i buy this property'),
(3, 'rakib', 'rakib@gmail.com', 'i rent this property'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'zvcbmn'),
(3, 'ruhul', 'ruhul@gmail.com', 'i buy this property');

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE `flat` (
  `flat_id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `amenities` varchar(500) NOT NULL,
  `area` double NOT NULL,
  `image` varchar(500) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp(),
  `p_feature` varchar(255) DEFAULT NULL,
  `p_feature1` varchar(255) DEFAULT NULL,
  `p_feature2` varchar(255) DEFAULT NULL,
  `amenities1` varchar(255) DEFAULT NULL,
  `amenities2` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`flat_id`, `uid`, `bid`, `city`, `description`, `amenities`, `area`, `image`, `image1`, `image2`, `image3`, `time`, `p_feature`, `p_feature1`, `p_feature2`, `amenities1`, `amenities2`, `location`) VALUES
(45, 3, NULL, 'dinajpur', 'Why Tokyo City is right for you Your family deserves the most luxurious and accessible life available in the city. Tokyo City offers this along with the outlook of a developing neighborhood and promising future.', 'swimming pool', 1024, 'img/img8.jpg', 'img/img6.jpg', 'img/img6.jpg', 'img/img5.jpg', '2019-10-08 17:00:05', '4', '2', '1', 'internet', 'air condition', 'dhaka'),
(47, 3, NULL, 'mirpur', 'Why Tokyo City is right for you Your family deserves the most luxurious and accessible life available in the city. Tokyo City offers this along with the outlook of a developing neighborhood and promising future. You can look forward to: - Rapidly developing area - Minutes away from Hazrat Shahjalal Airport and Railway station', 'swimming pool', 870, 'img/img8.jpg', 'img/img7.jpg', 'img/img6.jpg', 'img/img5.jpg', '2019-10-11 17:25:08', '4', '2', '1', 'internet', 'air condition', 'dhaka'),
(48, 3, NULL, 'mirpur', 'Why Tokyo City is right for you Your family deserves the most luxurious and accessible life available in the city. Tokyo City offers this along with the outlook of a developing neighborhood and promising future. You can look forward to: - Rapidly developing area - Minutes away from Hazrat Shahjalal Airport and Railway station', 'swimming pool', 1024, 'img/img6.jpg', 'img/img7.jpg', 'img/img6.jpg', 'img/img5.jpg', '2019-10-11 17:27:11', '4', '4', '2', 'internet', 'air condition', 'dhaka'),
(49, 3, NULL, 'rangpur', 'Why Tokyo City is right for you Your family deserves the most luxurious and accessible life available in the city. Tokyo City offers this along with the outlook of a developing neighborhood and promising future. You can look forward to: - Rapidly developing area - Minutes away from Hazrat Shahjalal Airport and Railway station', 'swimming pool', 1024, 'img/img8.jpg', 'img/img7.jpg', 'img/img6.jpg', 'img/img5.jpg', '2019-10-18 19:00:57', '4', '2', '1', 'internet', 'air condition', 'rangpur'),
(50, 3, NULL, 'gaibandha', 'best villa', 'internet', 1024, 'img/img8.jpg', 'img/img7.jpg', 'img/img6.jpg', 'img/img5.jpg', '2019-10-19 03:08:24', '4', '3', '2', 'internet', 'air condition', 'rangpur'),
(51, 3, NULL, 'khulna', 'best apartment', 'swimming pool', 1024, 'img/img8.jpg', 'img/img7.jpg', 'img/img6.jpg', 'img/img5.jpg', '2019-10-19 03:12:45', '4', '3', '2', 'internet', 'wash', 'khulna'),
(52, 3, NULL, 'jessore', 'best apartment', 'swimming pool', 870, 'img/img8.jpg', 'img/img7.jpg', 'img/img6.jpg', 'img/img6.jpg', '2019-10-19 03:14:23', '8', '4', '2', 'internet', 'air condition', 'khulna');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UID` int(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UID`, `username`, `password`, `name`, `surname`, `email`, `phone`) VALUES
(3, 'ruhul', '12345', 'ruhul', 'ruhul', 'aminr5535@gmail.com', '955555');

-- --------------------------------------------------------

--
-- Table structure for table `login_builder`
--

CREATE TABLE `login_builder` (
  `BID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `lno` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `phoneno` decimal(10,0) NOT NULL,
  `nameorg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_builder`
--

INSERT INTO `login_builder` (`BID`, `username`, `lno`, `password`, `emailid`, `phoneno`, `nameorg`) VALUES
(1, 'manasbuilder', 12345, 'manas12345', 'manas@gmail.com', '9022942188', 'Manas Builders'),
(2, 'jaydeep', 56789, 'jaydeep12345', 'jaydeep@gmail.com', '9565112574', 'Jaydeep Builders'),
(3, 'parthbuilder', 13579, 'parth12345', 'parth@gmail.com', '9885846564', 'Parth Builders');

-- --------------------------------------------------------

--
-- Table structure for table `packers_movers`
--

CREATE TABLE `packers_movers` (
  `pid` int(11) NOT NULL,
  `name_org` varchar(50) NOT NULL,
  `contact_no` decimal(11,0) NOT NULL,
  `email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packers_movers`
--

INSERT INTO `packers_movers` (`pid`, `name_org`, `contact_no`, `email_id`) VALUES
(1, 'abcd', '9022942188', 'manas.sinkar@gmail.com'),
(2, 'pqrs', '7977261097', 'manas.sinkar@spit.ac.in'),
(3, 'Manas ', '6846565465', 'manas@gmail.com'),
(4, 'parth', '7208201778', 'thosaniparth@gmail.com'),
(5, 'ruhul', '25555555555', 'ruhul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `UID` int(100) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `Bank_name` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `Loan_details` varchar(10000) NOT NULL,
  `cheque_number` int(100) NOT NULL,
  `payment_opt` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `flat_id` int(11) NOT NULL,
  `rent_amount` varchar(255) NOT NULL,
  `deposit_amount` varchar(255) NOT NULL,
  `time_period` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`flat_id`, `rent_amount`, `deposit_amount`, `time_period`) VALUES
(45, '12000', '12000000', '5'),
(48, '12000', '12000000', '5');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `flat_id` int(11) NOT NULL,
  `totalcost` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`flat_id`, `totalcost`, `rate`) VALUES
(47, '10440000', '12000'),
(49, '12288000', '12000'),
(50, '12288000', '12000'),
(51, '122880000', '120000'),
(52, '104400000', '120000');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(11) NOT NULL,
  `countryid` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `countryid`, `city`) VALUES
(1, 1, 'mirpur'),
(2, 1, 'dhanmondhi'),
(3, 2, 'pabna'),
(4, 2, 'natore'),
(5, 3, 'bandarban'),
(6, 3, 'rangamati'),
(7, 4, 'jessore'),
(8, 4, 'bagerhat'),
(9, 5, 'rangpur'),
(10, 5, 'gaibandha'),
(11, 6, 'habigonj'),
(12, 6, 'sylhet');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl2`
-- (See below for the actual view)
--
CREATE TABLE `tbl2` (
`countryid` int(11)
,`location` varchar(255)
,`stateid` int(11)
,`city` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl3`
-- (See below for the actual view)
--
CREATE TABLE `tbl3` (
`location` varchar(255)
,`city` varchar(255)
,`countryid` int(11)
,`stateid` int(11)
,`flat_id` int(11)
,`amenities` varchar(500)
,`area` double
,`image` varchar(500)
,`p_feature` varchar(255)
,`p_feature1` varchar(255)
,`totalcost` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_projects`
--

CREATE TABLE `upcoming_projects` (
  `upid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `comp_time` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pro`
-- (See below for the actual view)
--
CREATE TABLE `view_pro` (
`flat_id` int(11)
,`location` varchar(255)
,`city` varchar(100)
,`amenities` varchar(500)
,`area` double
,`image` varchar(500)
,`p_feature` varchar(255)
,`p_feature1` varchar(255)
,`totalcost` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_rent`
-- (See below for the actual view)
--
CREATE TABLE `view_rent` (
`flat_id` int(11)
,`location` varchar(255)
,`city` varchar(100)
,`area` double
,`image` varchar(500)
,`p_feature` varchar(255)
,`p_feature1` varchar(255)
,`rent_amount` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `cardrent`
--
DROP TABLE IF EXISTS `cardrent`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cardrent`  AS  select `flat`.`flat_id` AS `flat_id`,`flat`.`location` AS `location`,`flat`.`city` AS `city`,`rent`.`rent_amount` AS `rent_amount`,`flat`.`image` AS `image`,`flat`.`time` AS `time` from (`flat` join `rent` on(`flat`.`flat_id` = `rent`.`flat_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `cardsale`
--
DROP TABLE IF EXISTS `cardsale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cardsale`  AS  select `flat`.`flat_id` AS `flat_id`,`flat`.`location` AS `location`,`flat`.`city` AS `city`,`sale`.`totalcost` AS `totalcost`,`flat`.`image` AS `image`,`flat`.`time` AS `time` from (`flat` join `sale` on(`flat`.`flat_id` = `sale`.`flat_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `tbl2`
--
DROP TABLE IF EXISTS `tbl2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl2`  AS  select `country`.`countryid` AS `countryid`,`country`.`location` AS `location`,`state`.`stateid` AS `stateid`,`state`.`city` AS `city` from (`country` join `state` on(`country`.`countryid` = `state`.`countryid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `tbl3`
--
DROP TABLE IF EXISTS `tbl3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl3`  AS  select `tbl2`.`location` AS `location`,`tbl2`.`city` AS `city`,`tbl2`.`countryid` AS `countryid`,`tbl2`.`stateid` AS `stateid`,`view_pro`.`flat_id` AS `flat_id`,`view_pro`.`amenities` AS `amenities`,`view_pro`.`area` AS `area`,`view_pro`.`image` AS `image`,`view_pro`.`p_feature` AS `p_feature`,`view_pro`.`p_feature1` AS `p_feature1`,`view_pro`.`totalcost` AS `totalcost` from (`tbl2` join `view_pro` on(`tbl2`.`location` = `view_pro`.`location` and `tbl2`.`city` = `view_pro`.`city`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_pro`
--
DROP TABLE IF EXISTS `view_pro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pro`  AS  select `flat`.`flat_id` AS `flat_id`,`flat`.`location` AS `location`,`flat`.`city` AS `city`,`flat`.`amenities` AS `amenities`,`flat`.`area` AS `area`,`flat`.`image` AS `image`,`flat`.`p_feature` AS `p_feature`,`flat`.`p_feature1` AS `p_feature1`,`sale`.`totalcost` AS `totalcost` from (`flat` join `sale` on(`flat`.`flat_id` = `sale`.`flat_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_rent`
--
DROP TABLE IF EXISTS `view_rent`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_rent`  AS  select `flat`.`flat_id` AS `flat_id`,`flat`.`location` AS `location`,`flat`.`city` AS `city`,`flat`.`area` AS `area`,`flat`.`image` AS `image`,`flat`.`p_feature` AS `p_feature`,`flat`.`p_feature1` AS `p_feature1`,`rent`.`rent_amount` AS `rent_amount` from (`flat` join `rent` on(`rent`.`flat_id` = `flat`.`flat_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryid`);

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `login_builder`
--
ALTER TABLE `login_builder`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `packers_movers`
--
ALTER TABLE `packers_movers`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD KEY `flat_id` (`flat_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD KEY `flat_id` (`flat_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`),
  ADD KEY `countryid` (`countryid`);

--
-- Indexes for table `upcoming_projects`
--
ALTER TABLE `upcoming_projects`
  ADD PRIMARY KEY (`upid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flat`
--
ALTER TABLE `flat`
  MODIFY `flat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `UID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_builder`
--
ALTER TABLE `login_builder`
  MODIFY `BID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packers_movers`
--
ALTER TABLE `packers_movers`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `upcoming_projects`
--
ALTER TABLE `upcoming_projects`
  MODIFY `upid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `flat` (`flat_id`) ON DELETE CASCADE;

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`flat_id`) REFERENCES `flat` (`flat_id`) ON DELETE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `country` (`countryid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
