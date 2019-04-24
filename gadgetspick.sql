-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 08:32 PM
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
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `image1` varchar(1000) NOT NULL DEFAULT ' ',
  `image2` varchar(1000) NOT NULL DEFAULT '',
  `image3` varchar(1000) NOT NULL DEFAULT '',
  `image4` varchar(1000) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`image1`, `image2`, `image3`, `image4`) VALUES
('1_1.jpg', '1_2.jpg', '1_3.jpg', '1_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE IF NOT EXISTS `custom` (
`id` int(11) NOT NULL,
  `dealsOfDay` varchar(1000) NOT NULL DEFAULT '[]'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `dealsOfDay`) VALUES
(1, '["24","31","32"]');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE IF NOT EXISTS `logintb` (
`id` int(11) NOT NULL,
  `emailId` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `linkUserId` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`id`, `emailId`, `password`, `linkUserId`) VALUES
(11, 'sasingh25@gmail.com', '12345', 18),
(12, 'amitojvmc@gmail.com', '12345', 19),
(13, 'harmanjot147@gmail.com', '123456', 20);

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
-- Table structure for table `orderstatus`
--

CREATE TABLE IF NOT EXISTS `orderstatus` (
`id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `dispatchdate` date NOT NULL,
  `deliverydate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`id`, `orderId`, `status`, `dispatchdate`, `deliverydate`) VALUES
(1, 7, 'delivered', '0000-00-00', '0000-00-00'),
(2, 8, 'dispatched', '0000-00-00', '0000-00-00'),
(3, 9, 'delivered', '2019-04-24', '2019-04-24'),
(4, 10, 'delivered', '2019-04-24', '2019-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `posted`
--

CREATE TABLE IF NOT EXISTS `posted` (
  `post` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posted`
--

INSERT INTO `posted` (`post`) VALUES
('{"surl":"http://localhost/project/payu/success.php","furl":"http://localhost/project/payu/failure.php","amount":75324,"firstname":"Amitoj","lastname":"singh","email":"amitojvmc@gmail.com","phone":"9417171800","productinfo":"Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN","address1":"21500, 6/4","address2":"Power House road","city":"Bathinda","state":"Punjab","country":"India","zipcode":"151001"}');

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
  `uploadDate` date NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `reviewsNo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `title`, `category`, `description`, `newPrice`, `oldPrice`, `stock`, `details`, `warranty`, `image1`, `image2`, `image3`, `features`, `uploadDate`, `rating`, `reviewsNo`) VALUES
(24, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'asdfghyuj', 500, 6874, -1, 'oi9uydtrexfcvbn ', 'jhgvbmn', '24_1.jpg', '', '', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;AMD Ryzen 3 Dual Core Processor;4 GB DDR4 RAM;64 bit Windows 10 Operating System;1 TB HDD;39.62 cm (15.6 inch) Display;1 Year Onsite Warranty;', '0000-00-00', 3.9, 72),
(31, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, Quad-cores, 6MB SmartCache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity;\r\nDisplay: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;\r\nMemory & Storage: 4GB DDR4 RAM with Integrated Graphics. 16 GB Intel Optane memory for faster bootup and accelerate frequently used applications. |Storage: 1TB 5400 RPM HDD;\r\nDesign & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014;\r\nWarranty: This genuine Lenovo laptop comes with 1 year domestic warranty from Lenovo covering manufacturing defects and not covering physical damage. For more details, see Warranty section below;\r\nPre-installed Software: Windows 10 Home | In the Box: Laptop included with battery and charger, user guide;', 75324, 7527, 21, 'Brand:Lenovo;\r\nSeries:Ideapad 330;\r\nColour:Onyx Black;\r\nItem Height:23 Millimeters;\r\nItem Width:26 Centimeters;\r\nScreen Size:15.6 Inches;\r\nMaximum Display Resolution:1920 x 1080 (Full HD);\r\nItem Weight:2.2 Kg;\r\nProduct Dimensions:37.8 x 26 x 2.3 cm;\r\nBatteries:Lithium Polymer batteries required. (included);\r\nItem model number:81DE021HIN;\r\nProcessor Brand:Intel;\r\nProcessor Type:Core i5 8250U;\r\nRAM Size:4 GB;\r\nMemory Technolog:DDR4;\r\nHard Drive Size:1 TB;\r\nHard Disk Technology:Mechanical Hard Drive;\r\nSpeaker Description:2x1.5W; Dolby Audio;\r\nGraphics Coprocessor:Integrated Graphics;\r\nConnectivity Type:WIFI 1X1 AC+BT4.1;\r\nNumber of USB 3.0 Ports:2;\r\nNumber of HDMI Ports:1;\r\nNumber of Audio-out Ports:1;\r\nNumber of Ethernet Ports:1;\r\nNumber of Microphone Ports:1;\r\nOptical Drive Type:None;\r\nOperating System:Windows 10;\r\nLithium Battery Energy Content:30 Watt Hours;\r\nNumber of Lithium Ion Cells:2;\r\nIncluded Components:Laptop, Adapter and Manual;', '1 year manufacturer warranty on the device and 6 months manufacturer warranty on included accessories from the date of purchase', '31_1.jpeg', '31_2.jpeg', '', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;\r\nAMD Ryzen 3 Dual Core Processor;\r\n4 GB DDR4 RAM;\r\n64 bit Windows 10 Operating System;\r\n1 TB HDD;\r\n39.62 cm (15.6 inch) Display;\r\n1 Year Onsite Warranty;', '0000-00-00', 0, 0),
(32, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, Quad-cores, 6MB SmartCache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity;\r\nDisplay: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;\r\nMemory & Storage: 4GB DDR4 RAM with Integrated Graphics. 16 GB Intel Optane memory for faster bootup and accelerate frequently used applications. |Storage: 1TB 5400 RPM HDD;\r\nDesign & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014;\r\nWarranty: This genuine Lenovo laptop comes with 1 year domestic warranty from Lenovo covering manufacturing defects and not covering physical damage. For more details, see Warranty section below;\r\nPre-installed Software: Windows 10 Home | In the Box: Laptop included with battery and charger, user guide;', 75324, 7527, 10, 'Brand:Lenovo;\r\nSeries:Ideapad 330;\r\nColour:Onyx Black;\r\nItem Height:23 Millimeters;\r\nItem Width:26 Centimeters;\r\nScreen Size:15.6 Inches;\r\nMaximum Display Resolution:1920 x 1080 (Full HD);\r\nItem Weight:2.2 Kg;\r\nProduct Dimensions:37.8 x 26 x 2.3 cm;\r\nBatteries:Lithium Polymer batteries required. (included);\r\nItem model number:81DE021HIN;\r\nProcessor Brand:Intel;\r\nProcessor Type:Core i5 8250U;\r\nRAM Size:4 GB;\r\nMemory Technolog:DDR4;\r\nHard Drive Size:1 TB;\r\nHard Disk Technology:Mechanical Hard Drive;\r\nSpeaker Description:2x1.5W; Dolby Audio;\r\nGraphics Coprocessor:Integrated Graphics;\r\nConnectivity Type:WIFI 1X1 AC+BT4.1;\r\nNumber of USB 3.0 Ports:2;\r\nNumber of HDMI Ports:1;\r\nNumber of Audio-out Ports:1;\r\nNumber of Ethernet Ports:1;\r\nNumber of Microphone Ports:1;\r\nOptical Drive Type:None;\r\nOperating System:Windows 10;\r\nLithium Battery Energy Content:30 Watt Hours;\r\nNumber of Lithium Ion Cells:2;\r\nIncluded Components:Laptop, Adapter and Manual;', '1 year manufacturer warranty on the device and 6 months manufacturer warranty on included accessories from the date of purchase', '32_1.jpeg', '32_2.jpeg', '32_3.jpg', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;\r\nAMD Ryzen 3 Dual Core Processor;\r\n4 GB DDR4 RAM;\r\n64 bit Windows 10 Operating System;\r\n1 TB HDD;\r\n39.62 cm (15.6 inch) Display;\r\n1 Year Onsite Warranty;', '0000-00-00', 3.6, 16);

-- --------------------------------------------------------

--
-- Table structure for table `productsale`
--

CREATE TABLE IF NOT EXISTS `productsale` (
`id` int(11) NOT NULL,
  `productId` int(255) NOT NULL,
  `sold` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsale`
--

INSERT INTO `productsale` (`id`, `productId`, `sold`) VALUES
(2, 24, 6);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qatb`
--

INSERT INTO `qatb` (`id`, `question`, `date`, `productId`, `answer`, `answerStatus`) VALUES
(3, 'djsjfhajsdhfjadshfjadshfj', '0000-00-00', 30, '', 0),
(4, 'aashdjashd', '2019-04-08', 30, 'amitoj singh', 1),
(5, 'nbsandbajsdbjashdj', '2019-03-28', 30, '', 0),
(6, 'khasgdhsgdhagdhasgdhgasd', '2019-03-28', 30, 'Not yet Answered...', 0),
(7, 'khasgdhsgdhagdhasgdhgasd', '2019-04-06', 30, 'herkfjjkjad', 1),
(8, 'is it compatible', '2019-04-08', 32, 'no, because', 1),
(9, 'jhgfds', '2019-04-09', 32, 'k,jhgfv', 1),
(10, 'hgrtyertytr', '2019-04-19', 32, 'wsrdtfhrsdfvgnk', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userid`, `rating`, `reviewDetails`, `date`, `productid`) VALUES
(1, 18, 1, 'ajfsagdhasjd', '2019-03-31', 24),
(2, 18, 4, 'ajlsdhasjdhas', '2019-03-31', 24),
(3, 18, 5, 'lpoihuyfgcvbn', '2019-03-31', 24),
(4, 18, 5, 'sjdjagdgasdhg', '2019-03-31', 24),
(5, 18, 5, 'iuygyfvbn', '2019-03-31', 24),
(6, 18, 5, 'lojihgvc nmkouhgf', '2019-03-31', 24),
(7, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(8, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(9, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(10, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(11, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(12, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(13, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(14, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(15, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(16, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(17, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(18, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(19, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(20, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(21, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(22, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(23, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(24, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(25, 18, 5, 'oiuhygfcv', '2019-03-31', 24),
(26, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(27, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(28, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(29, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(30, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(31, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(32, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(33, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(34, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(35, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(36, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(37, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(38, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(39, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(40, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(41, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(42, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(43, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(44, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(45, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(46, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(47, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(48, 18, 3, 'aljdhdjkfh', '2019-03-31', 24),
(49, 18, 2, 'aksdgsajdhsa', '2019-03-31', 24),
(50, 18, 5, 'ljhjhsdjfhsdf', '2019-03-31', 24),
(51, 18, 5, 'jahfjdhfajshf', '2019-03-31', 24),
(52, 18, 5, 'adkfajfhsdf', '2019-03-31', 24),
(53, 18, 5, 'adkfajfhsdf', '2019-03-31', 24),
(54, 18, 1, 'dhsadjhsajdh', '2019-03-31', 24),
(55, 18, 1, 'kkdahfjkdsf', '2019-03-31', 24),
(56, 18, 1, 'saljdhgajvbdl', '2019-04-01', 32),
(57, 18, 4, 'jhugyftdrgxvv', '2019-04-01', 32),
(58, 18, 4, 'jhugyftdrgxvv', '2019-04-01', 32),
(59, 18, 5, 'dhfasgjfadshjf', '2019-04-01', 24),
(60, 18, 5, 'dhfasgjfadshjf', '2019-04-01', 24),
(61, 18, 5, 'iuhygjhbk', '2019-04-01', 24),
(62, 18, 5, 'ajiydfhgjshk', '2019-04-01', 24),
(63, 18, 5, 'hsadgashd', '2019-04-01', 24),
(64, 18, 5, 'khkdhfasf', '2019-04-01', 32),
(65, 18, 5, 'jhgtf', '2019-04-01', 32),
(66, 18, 5, 'jhgtf', '2019-04-01', 32),
(67, 18, 1, 'ajldhsdjasd', '2019-04-01', 32),
(68, 18, 1, 'jhgtf', '2019-04-01', 24),
(69, 18, 1, 'hgfrd', '2019-04-01', 24),
(70, 18, 1, 'hgfrd', '2019-04-01', 24),
(71, 18, 1, 'khuygttr', '2019-04-01', 24),
(72, 18, 4, 'huyguty', '2019-04-01', 24),
(73, 18, 4, 'ijhuyt', '2019-04-01', 24),
(74, 18, 4, 'fksjkfjdsakf', '2019-04-01', 24),
(75, 18, 4, 'iuhgyhgjbn', '2019-04-01', 24),
(76, 18, 5, 'khadghashdjhas', '2019-04-01', 24),
(77, 18, 5, 'ljsjhdfjhfjash', '2019-04-01', 24),
(78, 18, 5, 'laljsdfhdasjfh', '2019-04-01', 24),
(79, 18, 4, 'dkafjjldskjf', '2019-04-01', 32),
(80, 18, 5, 'lldafjkdsjfkjsfkasjf', '2019-04-01', 32),
(81, 18, 5, 'asdjlfhasjdfhajsd;fh', '2019-04-01', 32),
(82, 18, 5, 'jashfjashfjhsa', '2019-04-01', 32),
(83, 18, 1, 'skfkhadsfjhas', '2019-04-01', 32),
(84, 18, 1, 'adjfhasdjfhasdhfjashf', '2019-04-01', 32),
(85, 18, 1, 'sajfasdjfhasjdfh', '2019-04-01', 32),
(86, 19, 5, 'adjfhadjfhasjfkajfkjaklfj', '2019-04-08', 24),
(87, 19, 5, 'u7ytrew', '2019-04-09', 32),
(88, 19, 5, 'szdazdsghujijgtr3ws', '2019-04-19', 32);

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
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
`id` int(11) NOT NULL,
  `txnId` varchar(10000) NOT NULL,
  `uid` int(255) NOT NULL,
  `products` varchar(10000) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `txnId`, `uid`, `products`, `amount`, `status`, `date`) VALUES
(7, '3218a57a97a85722f776', 19, '{"24":"1","32":"1"}', 75824, 1, '0000-00-00'),
(8, 'f03945434af77a698695', 19, '{"24":"1"}', 500, 1, '0000-00-00'),
(9, '2e1ce23f5dd2df308f25', 19, '{"31":"2","24":"1"}', 151148, 1, '0000-00-00'),
(10, '397af3f592fe31293d85', 19, '{"31":"1"}', 75324, 1, '2019-04-24');

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
  `postalcode` varchar(100) NOT NULL,
  `cart` varchar(10000) NOT NULL DEFAULT '',
  `favourite` varchar(10000) NOT NULL,
  `compare` varchar(1000) NOT NULL DEFAULT '[]'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetailstb`
--

INSERT INTO `userdetailstb` (`id`, `firstName`, `lastName`, `emailAddress`, `contactNo1`, `contactNo2`, `shipaddr1`, `shipaddr2`, `shiplandmark`, `country`, `state`, `city`, `postalcode`, `cart`, `favourite`, `compare`) VALUES
(18, 'sarbjeet', 'singh', 'sasingh25@gmail.com', '9417171800', '1452367894', '21500, 6/4', 'power house road', 'adjacent to overseas bank', 'India', 'Punjab', 'Bathinda', '151001', '{"24":4}', '["24","32"]', '[]'),
(19, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '', '21500, 6/4', 'Power House road', 'opposite cake square', 'India', 'Punjab', 'Bathinda', '151001', '[]', '["31","24"]', '["24","31","32"]'),
(20, 'Harmanjot', 'Singh', 'harmanjot147@gmail.com', '7009737844', '', '59H', 'Near MBD', 'near mBD', 'India', 'Punjab', 'Ludhiana', '141214', '[]', '[]', '[]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
 ADD PRIMARY KEY (`id`), ADD KEY `orderId` (`orderId`);

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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
 ADD PRIMARY KEY (`id`), ADD KEY `uid` (`uid`), ADD KEY `uid_2` (`uid`);

--
-- Indexes for table `userdetailstb`
--
ALTER TABLE `userdetailstb`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logintb`
--
ALTER TABLE `logintb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `productsale`
--
ALTER TABLE `productsale`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qatb`
--
ALTER TABLE `qatb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `userdetailstb`
--
ALTER TABLE `userdetailstb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `logintb`
--
ALTER TABLE `logintb`
ADD CONSTRAINT `logintb_ibfk_1` FOREIGN KEY (`linkUserId`) REFERENCES `userdetailstb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderstatus`
--
ALTER TABLE `orderstatus`
ADD CONSTRAINT `orderstatus_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `transactions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userdetailstb` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
