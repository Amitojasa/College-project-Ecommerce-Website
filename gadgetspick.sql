-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 08:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gadgetspick`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE IF NOT EXISTS `logintb` (
`id` int(11) NOT NULL,
  `emailId` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `linkUserId` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`id`, `emailId`, `password`, `linkUserId`) VALUES
(1, 'amitoj@dgfd.cpm', '1234', 8),
(2, 'as@ahuja.com', '1234', 9),
(3, 'as@ahuja.com', '1234', 10),
(4, 'amitoj@sdf.com', '1234', 11),
(5, 'amitojsingh1990@gmail.com', '1234', 12),
(6, 'amitojsingh1990@gmail.com', '1234', 13),
(7, 'amitojvmc@gmail.com', '1234', 14),
(8, 'amitojvmc@gmail.com', '1234', 15),
(9, 'amitojvmc@gmail.com', '1234', 16),
(10, 'amitojvmc@gmail.com', '1234', 17);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
`id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'amitoj@dgfd.cpm');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE IF NOT EXISTS `productdetails` (
`id` int(255) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `newPrice` float NOT NULL,
  `oldPrice` float NOT NULL,
  `stock` int(255) NOT NULL,
  `details` varchar(30000) NOT NULL,
  `warranty` varchar(10000) NOT NULL,
  `image1` varchar(1000) NOT NULL DEFAULT '',
  `image2` varchar(1000) NOT NULL DEFAULT '',
  `image3` varchar(1000) NOT NULL DEFAULT '',
  `features` varchar(2000) NOT NULL,
  `uploadDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `title`, `category`, `description`, `newPrice`, `oldPrice`, `stock`, `details`, `warranty`, `image1`, `image2`, `image3`, `features`, `uploadDate`) VALUES
(24, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'asdfghyuj', 86545, 6874, 12, 'oi9uydtrexfcvbn ', 'jhgvbmn', '24_1.jpg', '', '', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;AMD Ryzen 3 Dual Core Processor;4 GB DDR4 RAM;64 bit Windows 10 Operating System;1 TB HDD;39.62 cm (15.6 inch) Display;1 Year Onsite Warranty;', '0000-00-00'),
(30, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, Quad-cores, 6MB SmartCache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity;\r\nDisplay: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;\r\nMemory & Storage: 4GB DDR4 RAM with Integrated Graphics. 16 GB Intel Optane memory for faster bootup and accelerate frequently used applications. |Storage: 1TB 5400 RPM HDD;\r\nDesign & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014;\r\nWarranty: This genuine Lenovo laptop comes with 1 year domestic warranty from Lenovo covering manufacturing defects and not covering physical damage. For more details, see Warranty section below;\r\nPre-installed Software: Windows 10 Home | In the Box: Laptop included with battery and charger, user guide;', 5241, 545, 0, 'Brand:Lenovo;\r\nSeries:Ideapad 330;\r\nColour:Onyx Black;\r\nItem Height:23 Millimeters;\r\nItem Width:26 Centimeters;\r\nScreen Size:15.6 Inches;\r\nMaximum Display Resolution:1920 x 1080 (Full HD);\r\nItem Weight:2.2 Kg;\r\nProduct Dimensions:37.8 x 26 x 2.3 cm;\r\nBatteries:Lithium Polymer batteries required. (included);\r\nItem model number:81DE021HIN;\r\nProcessor Brand:Intel;\r\nProcessor Type:Core i5 8250U;\r\nRAM Size:4 GB;\r\nMemory Technolog:DDR4;\r\nHard Drive Size:1 TB;\r\nHard Disk Technology:Mechanical Hard Drive;\r\nSpeaker Description:2x1.5W; Dolby Audio;\r\nGraphics Coprocessor:Integrated Graphics;\r\nConnectivity Type:WIFI 1X1 AC+BT4.1;\r\nNumber of USB 3.0 Ports:2;\r\nNumber of HDMI Ports:1;\r\nNumber of Audio-out Ports:1;\r\nNumber of Ethernet Ports:1;\r\nNumber of Microphone Ports:1;\r\nOptical Drive Type:None;\r\nOperating System:Windows 10;\r\nLithium Battery Energy Content:30 Watt Hours;\r\nNumber of Lithium Ion Cells:2;\r\nIncluded Components:Laptop, Adapter and Manual;', 'a,dnfbsdfjdsf', '30_1.jpeg', '30_2.jpeg', '30_3.jpg', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;\r\nAMD Ryzen 3 Dual Core Processor;\r\n4 GB DDR4 RAM;\r\n64 bit Windows 10 Operating System;\r\n1 TB HDD;\r\n39.62 cm (15.6 inch) Display;\r\n1 Year Onsite Warranty;\r\n', '0000-00-00'),
(31, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, Quad-cores, 6MB SmartCache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity;\r\nDisplay: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;\r\nMemory & Storage: 4GB DDR4 RAM with Integrated Graphics. 16 GB Intel Optane memory for faster bootup and accelerate frequently used applications. |Storage: 1TB 5400 RPM HDD;\r\nDesign & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014;\r\nWarranty: This genuine Lenovo laptop comes with 1 year domestic warranty from Lenovo covering manufacturing defects and not covering physical damage. For more details, see Warranty section below;\r\nPre-installed Software: Windows 10 Home | In the Box: Laptop included with battery and charger, user guide;', 75324, 7527, 24, 'Brand:Lenovo;\r\nSeries:Ideapad 330;\r\nColour:Onyx Black;\r\nItem Height:23 Millimeters;\r\nItem Width:26 Centimeters;\r\nScreen Size:15.6 Inches;\r\nMaximum Display Resolution:1920 x 1080 (Full HD);\r\nItem Weight:2.2 Kg;\r\nProduct Dimensions:37.8 x 26 x 2.3 cm;\r\nBatteries:Lithium Polymer batteries required. (included);\r\nItem model number:81DE021HIN;\r\nProcessor Brand:Intel;\r\nProcessor Type:Core i5 8250U;\r\nRAM Size:4 GB;\r\nMemory Technolog:DDR4;\r\nHard Drive Size:1 TB;\r\nHard Disk Technology:Mechanical Hard Drive;\r\nSpeaker Description:2x1.5W; Dolby Audio;\r\nGraphics Coprocessor:Integrated Graphics;\r\nConnectivity Type:WIFI 1X1 AC+BT4.1;\r\nNumber of USB 3.0 Ports:2;\r\nNumber of HDMI Ports:1;\r\nNumber of Audio-out Ports:1;\r\nNumber of Ethernet Ports:1;\r\nNumber of Microphone Ports:1;\r\nOptical Drive Type:None;\r\nOperating System:Windows 10;\r\nLithium Battery Energy Content:30 Watt Hours;\r\nNumber of Lithium Ion Cells:2;\r\nIncluded Components:Laptop, Adapter and Manual;', '1 year manufacturer warranty on the device and 6 months manufacturer warranty on included accessories from the date of purchase', '31_1.jpeg', '31_2.jpeg', '', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;\r\nAMD Ryzen 3 Dual Core Processor;\r\n4 GB DDR4 RAM;\r\n64 bit Windows 10 Operating System;\r\n1 TB HDD;\r\n39.62 cm (15.6 inch) Display;\r\n1 Year Onsite Warranty;', '0000-00-00'),
(32, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, Quad-cores, 6MB SmartCache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity;\r\nDisplay: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;\r\nMemory & Storage: 4GB DDR4 RAM with Integrated Graphics. 16 GB Intel Optane memory for faster bootup and accelerate frequently used applications. |Storage: 1TB 5400 RPM HDD;\r\nDesign & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014;\r\nWarranty: This genuine Lenovo laptop comes with 1 year domestic warranty from Lenovo covering manufacturing defects and not covering physical damage. For more details, see Warranty section below;\r\nPre-installed Software: Windows 10 Home | In the Box: Laptop included with battery and charger, user guide;', 75324, 7527, 10, 'Brand:Lenovo;\r\nSeries:Ideapad 330;\r\nColour:Onyx Black;\r\nItem Height:23 Millimeters;\r\nItem Width:26 Centimeters;\r\nScreen Size:15.6 Inches;\r\nMaximum Display Resolution:1920 x 1080 (Full HD);\r\nItem Weight:2.2 Kg;\r\nProduct Dimensions:37.8 x 26 x 2.3 cm;\r\nBatteries:Lithium Polymer batteries required. (included);\r\nItem model number:81DE021HIN;\r\nProcessor Brand:Intel;\r\nProcessor Type:Core i5 8250U;\r\nRAM Size:4 GB;\r\nMemory Technolog:DDR4;\r\nHard Drive Size:1 TB;\r\nHard Disk Technology:Mechanical Hard Drive;\r\nSpeaker Description:2x1.5W; Dolby Audio;\r\nGraphics Coprocessor:Integrated Graphics;\r\nConnectivity Type:WIFI 1X1 AC+BT4.1;\r\nNumber of USB 3.0 Ports:2;\r\nNumber of HDMI Ports:1;\r\nNumber of Audio-out Ports:1;\r\nNumber of Ethernet Ports:1;\r\nNumber of Microphone Ports:1;\r\nOptical Drive Type:None;\r\nOperating System:Windows 10;\r\nLithium Battery Energy Content:30 Watt Hours;\r\nNumber of Lithium Ion Cells:2;\r\nIncluded Components:Laptop, Adapter and Manual;', '1 year manufacturer warranty on the device and 6 months manufacturer warranty on included accessories from the date of purchase', '32_1.jpeg', '32_2.jpeg', '32_3.jpg', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;\r\nAMD Ryzen 3 Dual Core Processor;\r\n4 GB DDR4 RAM;\r\n64 bit Windows 10 Operating System;\r\n1 TB HDD;\r\n39.62 cm (15.6 inch) Display;\r\n1 Year Onsite Warranty;', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `productsale`
--

CREATE TABLE IF NOT EXISTS `productsale` (
`id` int(11) NOT NULL,
  `productId` int(255) NOT NULL,
  `initialquantity` int(255) NOT NULL,
  `ranking` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qatb`
--

CREATE TABLE IF NOT EXISTS `qatb` (
`id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `productId` int(255) NOT NULL,
  `answer` varchar(1000) NOT NULL DEFAULT 'Not yet Answered...',
  `answerStatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qatb`
--

INSERT INTO `qatb` (`id`, `question`, `date`, `productId`, `answer`, `answerStatus`) VALUES
(3, 'djsjfhajsdhfjadshfjadshfj', '0000-00-00', 30, '', 0),
(4, 'aashdjashd', '0000-00-00', 30, '', 1),
(5, 'nbsandbajsdbjashdj', '2019-03-28', 30, '', 0),
(6, 'khasgdhsgdhagdhasgdhgasd', '2019-03-28', 30, 'Not yet Answered...', 1),
(7, 'khasgdhsgdhagdhasgdhgasd', '2019-03-28', 30, 'Not yet Answered...', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
`id` int(11) NOT NULL,
  `userid` int(255) NOT NULL,
  `rating` int(10) NOT NULL,
  `reviewDetails` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `productid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statekeys`
--

CREATE TABLE IF NOT EXISTS `statekeys` (
  `abbr` varchar(255) NOT NULL,
  `statename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statekeys`
--

INSERT INTO `statekeys` (`abbr`, `statename`) VALUES
('AP', 'Andhra Pradesh'),
('AR', 'Arunachal Pradesh'),
('AS', 'Assam'),
('BR', 'Bihar'),
('CT', 'Chhattisgarh'),
('GA', 'Goa'),
('GJ', 'Gujarat'),
('HR', 'Haryana'),
('HP', 'Himachal Pradesh'),
('JK', 'Jammu and Kashmir'),
('JH', 'Jharkhand'),
('KA', 'Karnataka'),
('KL', 'Kerala'),
('MP', 'Madhya Pradesh'),
('MH', 'Maharashtra'),
('MN', 'Manipur'),
('ML', 'Meghalaya'),
('MZ', 'Mizoram'),
('NL', 'Nagaland'),
('OR', 'Orissa'),
('PB', 'Punjab'),
('RJ', 'Rajasthan'),
('SK', 'Sikkim'),
('TN', 'Tamil Nadu'),
('TS', 'Telangana'),
('TR', 'Tripura'),
('UK', 'Uttarakhand'),
('UP', 'Uttar Pradesh'),
('WB', 'West Bengal'),
('AN', 'Andaman and Nicobar Islands'),
('CH', 'Chandigarh'),
('DN', 'Dadar and Nagar Haveli'),
('DD', 'Daman and Diu'),
('DL', 'Delhi'),
('LD', 'Lakshadeep'),
('PY', 'Pondicherry (Puducherry)'),
('', 'Select a State');

-- --------------------------------------------------------

--
-- Table structure for table `userdetailstb`
--

CREATE TABLE IF NOT EXISTS `userdetailstb` (
`id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `contactNo1` varchar(15) NOT NULL,
  `contactNo2` varchar(15) NOT NULL,
  `shipaddr1` varchar(200) NOT NULL,
  `shipaddr2` varchar(200) NOT NULL,
  `shiplandmark` varchar(200) NOT NULL,
  `country` varchar(10) NOT NULL DEFAULT 'India',
  `state` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetailstb`
--

INSERT INTO `userdetailstb` (`id`, `firstName`, `lastName`, `emailAddress`, `contactNo1`, `contactNo2`, `shipaddr1`, `shipaddr2`, `shiplandmark`, `country`, `state`, `city`, `postalcode`) VALUES
(1, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(2, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(3, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(4, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(5, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(6, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(7, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(8, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(9, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(10, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(11, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(12, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(13, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(14, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4-A', 'power house road', 'adjacent to overseas bank', 'India', 'Andhra Pradesh', 'Bathinda', '151001'),
(15, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(16, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001'),
(17, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '9417102100', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logintb`
--
ALTER TABLE `logintb`
 ADD PRIMARY KEY (`id`), ADD KEY `linkUserId` (`linkUserId`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsale`
--
ALTER TABLE `productsale`
 ADD PRIMARY KEY (`id`), ADD KEY `productId` (`productId`);

--
-- Indexes for table `qatb`
--
ALTER TABLE `qatb`
 ADD PRIMARY KEY (`id`), ADD KEY `productId` (`productId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`id`), ADD KEY `userid` (`userid`), ADD KEY `productid` (`productid`), ADD KEY `productid_2` (`productid`);

--
-- Indexes for table `userdetailstb`
--
ALTER TABLE `userdetailstb`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logintb`
--
ALTER TABLE `logintb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `productsale`
--
ALTER TABLE `productsale`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qatb`
--
ALTER TABLE `qatb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userdetailstb`
--
ALTER TABLE `userdetailstb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `logintb`
--
ALTER TABLE `logintb`
ADD CONSTRAINT `logintb_ibfk_1` FOREIGN KEY (`linkUserId`) REFERENCES `userdetailstb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productsale`
--
ALTER TABLE `productsale`
ADD CONSTRAINT `productsale_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `productdetails` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `userdetailstb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `productdetails` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
