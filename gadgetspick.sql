-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 08:58 PM
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
-- Table structure for table `adminlogintb`
--

CREATE TABLE IF NOT EXISTS `adminlogintb` (
`id` int(11) NOT NULL,
  `emailid` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogintb`
--

INSERT INTO `adminlogintb` (`id`, `emailid`, `password`) VALUES
(1, 'amitojsingh1990@gmail.com', '1234567');

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
('1_1.jpg', '1_2.jpg', '1_3.jpg', '1_4.png');

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
(1, '["24","31","45","47","54","48","56","61"]');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'amitoj@dgfd.cpm'),
(2, 'sasingh25@gmail.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`id`, `orderId`, `status`, `dispatchdate`, `deliverydate`) VALUES
(1, 7, 'delivered', '0000-00-00', '0000-00-00'),
(2, 8, 'dispatched', '0000-00-00', '0000-00-00'),
(3, 9, 'delivered', '2019-04-24', '2019-04-24'),
(5, 11, 'delivered', '2019-04-30', '2019-04-30'),
(6, 12, 'delivered', '2019-05-02', '2019-05-02');

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
('{"surl":"http://localhost/project/payu/success.php","furl":"http://localhost/project/payu/failure.php","amount":99980,"firstname":"Amitoj","lastname":"singh","email":"amitojvmc@gmail.com","phone":"9417171800","productinfo":"ASUS TUF FX505DY-BQ002T 15.6-inch FHD Gaming Laptop (AMD Ryzen 5-3550H/8GB/1TB HDD/Windows 10/Radeon RX 560X 4GB Graphics/2.20 Kg), Black","address1":"21500, 6/4","address2":"Power House road","city":"Bathinda","state":"Punjab","country":"India","zipcode":"151001"}');

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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `title`, `category`, `description`, `newPrice`, `oldPrice`, `stock`, `details`, `warranty`, `image1`, `image2`, `image3`, `features`, `uploadDate`, `rating`, `reviewsNo`) VALUES
(24, 'acerIdeapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'asdfghyuj', 500, 6874, 0, 'oi9uydtrexfcvbn ', 'jhgvbmn', '24_1.jpg', '', '', '', '0000-00-00', 3.9, 72),
(31, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, Quad-cores, 6MB SmartCache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity;\r\nDisplay: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;\r\nMemory & Storage: 4GB DDR4 RAM with Integrated Graphics. 16 GB Intel Optane memory for faster bootup and accelerate frequently used applications. |Storage: 1TB 5400 RPM HDD;\r\nDesign & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014;\r\nWarranty: This genuine Lenovo laptop comes with 1 year domestic warranty from Lenovo covering manufacturing defects and not covering physical damage. For more details, see Warranty section below;\r\nPre-installed Software: Windows 10 Home | In the Box: Laptop included with battery and charger, user guide;', 75324, 7527, 21, 'Brand:Lenovo;\r\nSeries:Ideapad 330;\r\nColour:Onyx Black;\r\nItem Height:23 Millimeters;\r\nItem Width:26 Centimeters;\r\nScreen Size:15.6 Inches;\r\nMaximum Display Resolution:1920 x 1080 (Full HD);\r\nItem Weight:2.2 Kg;\r\nProduct Dimensions:37.8 x 26 x 2.3 cm;\r\nBatteries:Lithium Polymer batteries required. (included);\r\nItem model number:81DE021HIN;\r\nProcessor Brand:Intel;\r\nProcessor Type:Core i5 8250U;\r\nRAM Size:4 GB;\r\nMemory Technolog:DDR4;\r\nHard Drive Size:1 TB;\r\nHard Disk Technology:Mechanical Hard Drive;\r\nSpeaker Description:2x1.5W; Dolby Audio;\r\nGraphics Coprocessor:Integrated Graphics;\r\nConnectivity Type:WIFI 1X1 AC+BT4.1;\r\nNumber of USB 3.0 Ports:2;\r\nNumber of HDMI Ports:1;\r\nNumber of Audio-out Ports:1;\r\nNumber of Ethernet Ports:1;\r\nNumber of Microphone Ports:1;\r\nOptical Drive Type:None;\r\nOperating System:Windows 10;\r\nLithium Battery Energy Content:30 Watt Hours;\r\nNumber of Lithium Ion Cells:2;\r\nIncluded Components:Laptop, Adapter and Manual;', '1 year manufacturer warranty on the device and 6 months manufacturer warranty on included accessories from the date of purchase', '31_1.jpeg', '31_2.jpeg', '', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;\r\nAMD Ryzen 3 Dual Core Processor;\r\n4 GB DDR4 RAM;\r\n64 bit Windows 10 Operating System;\r\n1 TB HDD;\r\n39.62 cm (15.6 inch) Display;\r\n1 Year Onsite Warranty;', '0000-00-00', 0, 0),
(32, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (4GB + 16GB Optane/1TB HDD/Windows 10 Home/Onyx Black/ 2.2kg), 81DE021HIN', 'laptop', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, Quad-cores, 6MB SmartCache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity;\r\nDisplay: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;\r\nMemory & Storage: 4GB DDR4 RAM with Integrated Graphics. 16 GB Intel Optane memory for faster bootup and accelerate frequently used applications. |Storage: 1TB 5400 RPM HDD;\r\nDesign & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014;\r\nWarranty: This genuine Lenovo laptop comes with 1 year domestic warranty from Lenovo covering manufacturing defects and not covering physical damage. For more details, see Warranty section below;\r\nPre-installed Software: Windows 10 Home | In the Box: Laptop included with battery and charger, user guide;', 75324, 7527, 10, 'Brand:Lenovo;Series:Ideapad 330;Colour:Onyx Black;Item Height:23 Millimeters;Item Width:26 Centimeters;Screen Size:15.6 Inches;Maximum Display Resolution:1920 x 1080 (Full HD);Item Weight:2.2 Kg;Product Dimensions:37.8 x 26 x 2.3 cm;Batteries:Lithium Polymer batteries required. (included);Item model number:81DE021HIN;Processor Brand:Intel;Processor Type:Core i5 8250U;RAM Size:4 GB;Memory Technolog:DDR4;Hard Drive Size:1 TB;Hard Disk Technology:Mechanical Hard Drive;Speaker Description:2x1.5W; Dolby Audio;Graphics Coprocessor:Integrated Graphics;Connectivity Type:WIFI 1X1 AC+BT4.1;Number of USB 3.0 Ports:2;Number of HDMI Ports:1;Number of Audio-out Ports:1;Number of Ethernet Ports:1;Number of Microphone Ports:1;Optical Drive Type:None;Operating System:Windows 10;Lithium Battery Energy Content:30 Watt Hours;Number of Lithium Ion Cells:2;Included Components:Laptop, Adapter and Manual;', '1 year manufacturer warranty on the device and 6 months manufacturer warranty on included accessories from the date of purchase', '32_1.jpeg', '32_2.jpeg', '32_3.jpg', 'AMD Radeon Vega 3 Graphics Card for Improved Graphics Performance;\r\nAMD Ryzen 3 Dual Core Processor;\r\n4 GB DDR4 RAM;\r\n64 bit Windows 10 Operating System;\r\n1 TB HDD;\r\n39.62 cm (15.6 inch) Display;\r\n1 Year Onsite Warranty;', '0000-00-00', 3.6, 16),
(34, 'Acer Nitro 5 AN515-42 Ryzen 5 15.6-inch Gaming FHD Laptop (8GB/1TB HDD/Windows 10/4GB Graphics/Black/2.7 Kg)', 'laptop', 'Processor: AMD Ryzen 5 2500U Processor, 2.0 GHz Turbo boost upto 3.60 GHz;Operating System: Preloaded Windows 10 Home 64 bit with lifetime validity;Display: 15.6" display with IPS (In-Plane Switching) technology, Full HD 1920 x1080, high-brightness (300 nits) Acer Comfy ViewTM LED-backlit TFT LCD;Memory and Storage: 8GB DDR4 RAM upgradeable upto 32GB RAM with | AMD Radeon RX 560X 4 GB GDDR5 VRAM Graphics | Storage: 1TB HDD 5400RPM;Design and battery: Laptop weight 2.7kg | Lithium battery 4Cell | Battery Life upto 7 hours;Warranty: This Laptop Comes with 1 Year Domestic onsite and (ITW) International Traveler Warranty from Acer Covering Manufacturing Defects and not Covering Physical Damage;Preinstalled Software: Windows 10 Home | In the Box: Laptop with included battery, charger, user guide and manuals;Ports and CD drive: 2 USB 2.0 | 1 USB 3.0 | 1 Type C Gen 1 (USB 3.1) | 1 HDMI | 4-in-1 card reader (SD,SDHC,SDXC,MMC) | Combo audio and microphone jack | With Gigabyte LAN port | Without CD-drive', 53817, 79999, 100, 'Brand:Acer;Series:Nitro;Colour:Black;Item Height:27 Millimeters;Item Width:38.9 Centimeters;Screen Size:15.6 Inches;Maximum Display Resolution:1920x1080;Item Weight:2.7 Kg;Product Dimensions:26.5 x 38.9 x 2.7 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:AN515-42;Processor Brand:Intel;Processor Type:R Series;RAM Size:8 GB;Memory Technology:DDR4;Hard Drive Size:1 TB;Hard Disk Technology:Mechanical Hard Drive;Speaker Description:1;Graphics Coprocessor:AMD RadeonTM RX 560X with 4 GB of dedicated GDDR5 VRAM;Graphics Card Ram Size:4 GB;Wireless Type:801.11 AC;Number of USB 2.0 Ports:2;Number of USB 3.0 Ports:1;Number of HDMI Ports:1;Number of Audio-out Ports:1;Number of Ethernet Ports:1;Number of Microphone Ports:1;Operating System:win10;Lithium Battery Energy Content:37 Watt Hours;Number of Lithium Ion Cells:1;Number of Lithium Metal Cells:37;Included Components:Laptop, Battery, AC Adapter, User Guide, Manuals;Date First Available:29 August 2018', '1 year limited onsite domestic warranty from Acer covering manufacturing defects and not covering physical damage. Register on brand website to activate warranty.For FAQs on warranty, link to check and update your warranty start date, see Warranty FAQ PDF under Technical Specifications. Reach Acer customer care at contact_us on: [1-800-11-6677 ]. This product is eligible for 10 Days Replacement in case of any product damage, defects or different product being shipped.â€¦', '34_1.jpg', '34_2.jpg', '34_3.jpg', 'Processor: AMD Ryzen 5 2500U Processor, 2.0 GHz Turbo boost upto 3.60 GHz;Operating System: Preloaded Windows 10 Home 64 bit with lifetime validity;Display: 15.6" display with IPS (In-Plane Switching) technology, Full HD 1920 x1080, high-brightness (300 nits) Acer Comfy ViewTM LED-backlit TFT LCD;Memory and Storage: 8GB DDR4 RAM upgradeable upto 32GB RAM with | AMD Radeon RX 560X 4 GB GDDR5 VRAM Graphics | Storage: 1TB HDD 5400RPM;Design and battery: Laptop weight 2.7kg | Lithium battery 4Cell | Battery Life upto 7 hours;', '0000-00-00', 0, 0),
(35, 'ASUS TUF FX505DY-BQ002T 15.6-inch FHD Gaming Laptop (AMD Ryzen 5-3550H/8GB/1TB HDD/Windows 10/Radeon RX 560X 4GB Graphics/2.20 Kg), Black', 'laptop', 'Processor : AMD Ryzen 5 3550H processor;Memory & Storage : 8GB DDR4 RAM with AMD RADEON RX560X GDDR5 4GB Graphics | Storage : 1TB 5400RPM 2.5â€™ HDD;Display : 15.6" (16:9) LED-backlit FHD (1920x1080) 60Hz Anti-Glare IPS-level Panel with 45% NTSC;OS : Windows 10 operating system | Weight : 2.20kg laptop;Hypercool Technology : Anti-Dust Cooling | Powerful Dual Fan Design | Fan Overboost Technology | Patented Trapezoid-cut Lid;Keyboard : Highlighted WASD keys | RED-Backlit Keyboard | 20 Million Key Presses |1.8mm Key Travel | Overstroke Technology;Audio : DTS Headphone:X | Authentic 7.1-Channel Surround Sound | Audophile-grade Equalizer Sound Options | Optimized Game/ Movie/ Sports Audio Profile.', 49990, 69990, 73, 'Brand:Asus;Series:TUF;Colour:Black;Item Height:26 Millimeters;Item Width:36 Centimeters;Screen Size:15.6 Inches;Maximum Display Resolution:1920x1080;Item Weight:2.2 Kg;Product Dimensions:26.2 x 36 x 2.6 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:FX505DY-BQ002T;Processor Brand:Ryzen 5 3550H;RAM Size:8 GB;Memory Technology:DDR4 2400;Maximum Memory Supported:32 GB;Hard Drive Size:1 TB;Hard Disk Technology:Mechanical Hard Drive;Speaker Description:2x2W speaker with DTS software;Graphics Coprocessor:AMD RADEON RX560X;Graphics Card Ram Size:4 GB;Connectivity Type:802.11ac (1*1), Bluetooth;Number of USB 2.0 Ports:1;Number of USB 3.0 Ports:2;Number of HDMI Ports:1;Number of Audio-out Ports:1;Number of Ethernet Ports:1;Number of Microphone Ports:1;Optical Drive Type:None;Operating System:Windows 10;Lithium Battery Energy Content:48 Watt Hours;Number of Lithium Ion Cells:3;Included Components:Laptop, Battery, AC Adapter, User Guide, Manuals;Date First Available:7 January 2019', '1 year manufacturer warranty on the device', '35_1.jpg', '35_2.jpg', '35_3.jpg', 'Processor : AMD Ryzen 5 3550H processor;Memory & Storage : 8GB DDR4 RAM with AMD RADEON RX560X GDDR5 4GB Graphics | Storage : 1TB 5400RPM 2.5â€™ HDD;Display : 15.6" (16:9) LED-backlit FHD (1920x1080) 60Hz Anti-Glare IPS-level Panel with 45% NTSC;OS : Windows 10 operating system | Weight : 2.20kg laptop;Hypercool Technology : Anti-Dust Cooling | Powerful Dual Fan Design | Fan Overboost Technology | Patented Trapezoid-cut Lid', '0000-00-00', 5, 1),
(36, 'HP 15 Intel Core i5 (8GB DDR4/1TB HDD/Win 10/MS Office/Integrated Graphics/2.04 kg), Full HD Laptop (15.6-inch, Sparkling Black) 15q-ds0029TU', 'laptop', '7th Gen Intel i5-7200U (2.5 GHz base processor speed, 3 MB SmartCache, 2 cores), Max Boost Clock Up to 3.1 GHz;Windows 10 Home with lifetime validity;Microsoft Office Home & Student 2016 Lifetime edition;8GB DDR4-2400 RAM;Expandable to 16 GB, 1TB 5400 RPM HDD', 45990, 51810, 100, 'Brand:HP;Series:15q;Colour:Sparkling Black;Item Height:23 Millimeters;Item Width:24.6 Centimeters;Screen Size:15.6 Inches;Notebook Display Technology:LED;Screen Resolution:1920 x 1080 Full HD (1080p);Maximum Display Resolution:1920 x 1080 (Full HD);Item Weight:2.04 Kg;Product Dimensions:37.6 x 24.6 x 2.3 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:ds0029TU;Processor Brand:Intel;Processor Type:Core i5 7200U;Processor Speed:3.40 GHz;Processor Count:8520;RAM Size:8 GB;Memory Technology:DDR4;Computer Memory Type:DDR4 SDRAM;Maximum Memory Supported:16 GB;Hard Drive Size:1 TB;Hard Disk Technology:Mechanical Hard Drive;Hard Drive Interface:Serial ATA;Speaker Description:Dual Speaker;Graphics Coprocessor:Intel Integrated Graphics;Number of USB 2.0 Ports:1;Number of USB 3.0 Ports:2;Number of HDMI Ports:1;Number of Audio-out Ports:1;Number of Ethernet Ports:1;Number of Microphone Ports:1;Optical Drive Type:DVD+RW;Hardware Platform:Windows;Operating System:Windows 10 Home;Lithium Battery Energy Content:41 Watt Hours;Lithium battery Weight:0.85 Grams;Number of Lithium Ion Cells:3;Included Components:Laptop, Battery, AC Adapter, User Guide and Manuals;Date First Available:18 December 2018', '1 year manufacturer warranty on the device', '36_1.jpg', '36_2.jpg', '36_3.jpg', '7th Gen Intel i5-7200U (2.5 GHz base processor speed, 3 MB SmartCache, 2 cores), Max Boost Clock Up to 3.1 GHz;Windows 10 Home with lifetime validity;Microsoft Office Home & Student 2016 Lifetime edition;8GB DDR4-2400 RAM;Expandable to 16 GB, 1TB 5400 RPM HDD', '0000-00-00', 0, 0),
(37, 'ASUS Vivobook S15 ( Core i5-8th Gen /8 GB/ 1TB HDD / 15.6" FHD/ Windows 10/ NVIDIA GeForce MX150 2GB ) S510UN-BQ217T ( Gold /1.70 kg)', 'laptop', 'Processor: 8th Gen Intel core i5 processor, 1.60GHz base processor speed;Operating System: Preloaded Windows 10 Home with lifetime validity;Display: 15.6-inch Full HD (1920x1080) IPS 7.8mm nano edge bezel display;Memory & Storage: 8GB DDR4 RAM with Nvidia MX150 graphics | Storage: 1TB HDD;Design & battery: Laptop weight: 1.7 kg | Average battery life = 8 hours | Fast Charging battery;Warranty: This genuine Asus laptop comes with 1 year onsite domestic warranty from Asus covering manufacturing defects and not covering physical damage. For more details, see Warranty section;Preinstalled Software: Windows 10 Home | In the box: Laptop, Battery, AC Adapter, Sleeve + USB3.0 to RJ45 cable + Micro HDMI to HDMI cable', 57990, 74990, 50, 'Brand:Asus;Colour:Gold;Item Height:18 Millimeters;Item Width:24.3 Centimeters;Screen Size:15.6 Inches;Notebook Display Technology:178Â° wide-viewing angle display FHD with 72% NTSC;Screen Resolution:1920 x 1080;Maximum Display Resolution:1920x1080;Item Weight:1.7 Kg;Product Dimensions:36.1 x 24.3 x 1.8 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:S510UN-BQ217T;Processor Brand:Intel;Processor Type:Core i5;Processor Speed:1.60 GHz;Processor Count:4;RAM Size:8 GB;Memory Technology:DDR4;Computer Memory Type:GDDR5;Maximum Memory Supported:16 GB;Hard Drive Size:1 TB;Hard Disk Technology:HDD 5400 rpm;Hard Drive Interface:eSATA;Graphics Coprocessor:NVIDIA GeForce MX150 (N17S-G1);Graphics Card Ram Size:2 GB;Wireless Type:802.11.a, 802.11.b, 802.11.g;Number of USB 2.0 Ports:2;Number of USB 3.0 Ports:1;Voltage:19 Volts;Wattage:240 Watts;Hardware Platform:Windows;Operating System:Windows 10 (64bit);Lithium Battery Energy Content:42 Watt Hours;Lithium battery Weight:200 Grams;Number of Lithium Ion Cells:3;Included Components:Laptop, Battery, AC Adapter, User Guide, Manuals,Sleeve + USB3.0 to RJ45 cable + Micro HDMI to HDMI cable;Date First Available:9 November 2017', ' 1 year manufacturer warranty from ASUS covering manufacturing defects & not covering physical damage. Register on brand website to activate warranty. This product is eligible for 10 Days Replacement in case of any product damage, defects or different product being shipped.', '37_1.jpg', '37_2.jpg', '37_3.jpg', 'Processor: 8th Gen Intel core i5 processor, 1.60GHz base processor speed;Operating System: Preloaded Windows 10 Home with lifetime validity;Display: 15.6-inch Full HD (1920x1080) IPS 7.8mm nano edge bezel display;Memory & Storage: 8GB DDR4 RAM with Nvidia MX150 graphics | Storage: 1TB HDD;Design & battery: Laptop weight: 1.7 kg | Average battery life = 8 hours | Fast Charging battery;', '0000-00-00', 0, 0),
(38, 'Dell Vostro 3568 Intel Core i3 6th Gen 15.6-inch Laptop (4GB/1TB HDD/Windows 10 Home/MS Office/ Black/ 2.18 kg) (8X6J5)', 'laptop', 'Processor: 6th Gen Intel Corei3-6006U processor, 2GHz base processor speed;Operating System: Pre-loaded Windows 10 Home with lifetime validity;Display: 15.6-inch HD (1366x768) display | Anti-glare technology;Memory & Storage: 4GB DDR4 RAM with Intel HD 520 Graphics| Storage: 1TB HDD;Design & battery: Laptop weight 2.18kg |Lithium battery;Warranty: This genuine Dell laptop comes with 1 year domestic warranty from Dell covering manufacturing defects and physical damage. For more details, see Warranty section below.;Pre-installed Software: Windows 10 Home, MS Office Home & Student 2016 | In the Box: Laptop with included battery and charger;Ports & CD drive: 1 USB 2.0, 2 USB 3.0, 1 HDMI, 1 Audio out| With CD-drive -Other: Comes with 1 year accidental damage protection from the date of purchase', 32420, 45872, 25, 'Brand:Dell;Series:Vostro;Colour:Black;Item Height:24 Millimeters;Item Width:26 Centimeters;Screen Size:15.6 Inches;Maximum Display Resolution:1366x768;Item Weight:2.18 Kg;Product Dimensions:38 x 26 x 2.4 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:8X6J5;Processor Brand:Intel Core i3-6006U 6th Gen processor;Processor Type:Core i3;Processor Speed:2 GHz;Processor Count:2;RAM Size:4 GB;Memory Technology:DDR4;Computer Memory Type:DDR3 SDRAM;Hard Drive Size:1 TB;Hard Disk Technology:Mechanical_hard_drive;Hard Drive Interface:eSATA;Speaker Description:WaveMaxx Audio;Graphics Coprocessor:Intel HD 520 Graphics;Wireless Type:802.11.b;Number of USB 2.0 Ports:1;Number of USB 3.0 Ports:2;Number of HDMI Ports:1;Number of Audio-out Ports:2;Number of Ethernet Ports:1;Number of Microphone Ports:1;Voltage:14.8 Volts;Wattage:2 Watts;Hardware Platform:Windows;Operating System:Windows;Lithium Battery Energy Content:40 Watt Hours;Lithium battery Weight:0.85 Grams;Number of Lithium Ion Cells:4;Included Components:Laptop, Battery, AC Adapter, User Guide and Manuals;Date First Available:5 July 2018', '1 year onsite domestic warranty from Dell covering manufacturing defects and not covering physical damage.Register on brand website to activate warranty.Reach Dell India customer care at contact_us on [ 1800-425-2067 ]. This product is eligible for 10 Days Replacement in case of any product damage, defects or different product being shipped.', '38_1.jpg', '38_2.jpg', '38_3.jpg', 'Processor: 6th Gen Intel Corei3-6006U processor, 2GHz base processor speed;Operating System: Pre-loaded Windows 10 Home with lifetime validity;Display: 15.6-inch HD (1366x768) display | Anti-glare technology;Memory & Storage: 4GB DDR4 RAM with Intel HD 520 Graphics| Storage: 1TB HDD;Design & battery: Laptop weight 2.18kg |Lithium battery', '0000-00-00', 0, 0),
(39, 'Lenovo Ideapad 330 Intel Core i5 8th Gen 15.6-inch Full HD Laptop (8GB DDR4/1TB HDD/Windows 10 Home/Platinum Grey/ 2.2kg), 81DE008PIN', 'laptop', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, 4 cores, 6MB SmartCache;Operating System: Pre-loaded Windows 10 Home with lifetime validity;Display: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;Memory & Storage: 8GB DDR4 RAM with Integrated Graphics | Storage: 1TB HDD;Design & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014;Warranty: This genuine Lenovo laptop comes with 1 year domestic warranty from Lenovo covering manufacturing defects and not covering physical damage. For more details, see Warranty section below;Pre-installed Software: Windows 10 Home | In the Box: Laptop included with battery and charger, user guide', 42745, 58490, 50, 'Brand:Lenovo;Series:Ideapad 330;Colour:Platinum Gray;Item Height:23 Millimeters;Item Width:26 Centimeters;Screen Size:15.6 Inches;Maximum Display Resolution:1920 x 1080 (Full HD);Item Weight:2.2 Kg;Product Dimensions:37.8 x 26 x 2.3 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:81DE008PIN;Processor Brand:Intel;Processor Type:Core i5 8250U;Processor Speed:1.60 GHz;Processor Count:4;RAM Size:8 GB;Memory Technology:DDR4;Computer Memory Type:DDR4 SDRAM;Hard Drive Size:1 TB;Hard Disk Technology:Mechanical Hard Drive;Hard Drive Interface:eSATA;Speaker Description:Dolby Audio (2x1.5W);Graphics Coprocessor:Integrated Graphics;Connectivity Type:Wifi 1x1 AC, Bluetooth 4.1;Number of USB 3.0 Ports:1;Number of HDMI Ports:1;Number of Audio-out Ports:1;Number of Ethernet Ports:1;Number of Microphone Ports:1;Hardware Platform:Windows;Operating System:Windows 10;Lithium Battery Energy Content:30 Watt Hours;Lithium battery Weight:0.85 Grams;Number of Lithium Ion Cells:2;Included Components:Laptop, Adapter and Manual;Date First Available:2 August 2018', '1 year onsite warranty for manufacturing defects', '39_1.jpg', '39_2.jpg', '39_3.jpg', 'Processor: 8th Gen Intel Core i5-8250U processor, 1.6GHz base processor speed, 3.4GHz Max speed, 4 cores, 6MB SmartCache;Operating System: Pre-loaded Windows 10 Home with lifetime validity;Display: 15.6-inch Full HD (1920x1080) Laptop | Antiglare display;Memory & Storage: 8GB DDR4 RAM with Integrated Graphics | Storage: 1TB HDD;Design & battery: Laptop weight 2.2kg | Battery Life: Upto 5.5 hours as per MobileMark 2014', '0000-00-00', 0, 0),
(40, 'HP 15 Core i5 8th gen 15.6-inch FHD Laptop (8GB/1TB HDD/DOS/Sparkling Black /2.04 kg), 15q-ds0009TU', 'laptop', 'Processor: 8th Gen Intel i5-8250U (1.6 GHz base processor speed, 6 MB cache, 4 cores), Max Boost Clock Up to 3.4 Ghz;Operating system: This is a DOS-based laptop out of the box. You will need to install your own operating system (such as Windows) separately. Operating System disk not part of package;Display: 15.6-inch Full HD SVA BrightView micro-edge WLED Display (1920 x 1080), Brightness: 220 nits;Memory and Storage: 8GB DDR4-2400 RAM, expandable to 16 GB, Storage: 1TB 5400 RPM HDD;Design and Battery: Thin and light design|Weight: 2.04kg|Average battery life = 7 Hours, Lithium battery | HP Fast Charge Battery: 0 to 50% under 45 minutes;Graphics: Intel UHD Graphics 620;This genuine HP laptop comes with 1 year onsite domestic warranty from HP covering manufacturing defects and not covering physical damage. For more details, see Warranty section;Ports and CD Drive: 1 HDMI 1.4b, 2 USB 3.1 Gen 1 (Data transfer only); 1 USB 2.0; 1 RJ-45; 1 headphone/microphone combo, DVD Writer', 43989, 55700, 30, 'Brand:HP;Series:HP 15;Colour:Sparkling Black;Item Height:23 Millimeters;Item Width:24.6 Centimeters;Screen Size:15.6 Inches;Maximum Display Resolution:1920x1080;Item Weight:2.04 Kg;Product Dimensions:37.6 x 24.6 x 2.3 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:HP 15q-ds0009TU;Processor Brand:Intel;Processor Type:Core i5 8250U;Processor Speed:2.20 GHz;Processor Count:4;RAM Size:8 GB;Memory Technology:DDR4-2400 SDRAM;Computer Memory Type:DDR DRAM;Hard Drive Size:1 TB;Hard Disk Technology:Mechanical Hard Drive;Hard Drive Interface:Serial ATA;Audio Details:Headphones;Speaker Description:Dual Speakers;Graphics Coprocessor:Intel HD Graphics;Connectivity Type:Intel 802.11bgn (1x1) Wi-Fi and Bluetooth 4.2 Combo;Wireless Type:802.11bgn;Number of USB 2.0 Ports:1;Number of USB 3.0 Ports:2;Number of HDMI Ports:1;Number of Audio-out Ports:1;Number of Ethernet Ports:1;Number of Microphone Ports:1;Voltage:220;Wattage:41 Watts;Hardware Platform:PC;Operating System:Free DOS 2.0;Average Battery Life (in hours):4 Hours;Lithium Battery Energy Content:41 Watt Hours;Lithium battery Weight:0.85 Grams;Number of Lithium Ion Cells:3;Included Components:Laptop, Battery and AC Adapter;Date First Available:9 August 2018', '1 year onsite domestic warranty from HP covering manufacturing defects and not covering physical damage. Register on brand website to activate warranty.For FAQs on warranty, link to check and update warranty start date, see Warranty FAQ PDF under Technical Specifications. Reach HP customer care at the 1800 200 0047(toll free), between 9am - 9pm. This product is eligible for 10 Days Replacement in case of any product damage, defects or different product being shipped.â€¦', '40_1.jpg', '40_2.jpg', '40_3.jpg', 'Processor: 8th Gen Intel i5-8250U (1.6 GHz base processor speed, 6 MB cache, 4 cores), Max Boost Clock Up to 3.4 Ghz;Operating system: This is a DOS-based laptop out of the box. You will need to install your own operating system (such as Windows) separately. Operating System disk not part of package;Display: 15.6-inch Full HD SVA BrightView micro-edge WLED Display (1920 x 1080), Brightness: 220 nits;', '0000-00-00', 0, 0),
(41, 'ASUS X507 Core i5 - 8th Gen 15.6" FHD Thin and Light Laptop (8GB/1TB HDD/Windows 10/2GB MX130/Icicle Gold/1.6 kg), X507UF- EJ101T', 'laptop', '1.6 GhzGHz Intel Core i5-8250U 8th Gen processor;Windows 10 operating system;NVIDIA GeForce MX130 2GB Graphics;8GB DDR4 RAM;1TB 5400rpm hard drive', 46970, 53990, 20, 'Brand:HP;Series:HP 15;Brand:Asus;Series:Vivobook;Colour:Icicle Gold;Item Height:22 Millimeters;Item Width:36.5 Centimeters;Screen Size:15.6 Inches;Notebook Display Technology:LED;Screen Resolution:1920 x 1080;Maximum Display Resolution:1920 x 1080 (Full HD);Item Weight:1.68 Kg;Product Dimensions:26.6 x 36.5 x 2.2 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:X507UF-EJ101T;Processor Brand:Intel;Processor Type:Core i5 8250U;Processor Speed:1.60 GHz;Processor Count:1;RAM Size:8 GB;Memory Technology:DDR4;Computer Memory Type:DDR4 SDRAM;Maximum Memory Supported:16 GB;Hard Drive Size:1 TB;Hard Disk Technology:Mechanical Hard Drive;Hard Drive Interface:Serial ATA;Speaker Description:Built-in speaker Built-in microphone Sonic Master;Graphics Coprocessor:NVIDIA GeForce MX130;Graphics Card Ram Size:2 GB;Connectivity Type:802.11ac+Bluetooth 4.2 (Dual band) 2*2;Number of USB 2.0 Ports:2;Number of USB 3.0 Ports:1;Number of HDMI Ports:1;Number of Audio-out Ports:1;Number of Microphone Ports:1;Optical Drive Type:None;Hardware Platform:Windows;Operating System:Windows 10;Lithium Battery Energy Content:33 Watt Hours;Lithium battery Weight:0.85 Grams;Number of Lithium Ion Cells:3;Included Components:Laptop, Battery, AC Adapter, User Guide and Manuals;Date First Available:17 September 2018', '1 year manufacturer warranty on the device', '41_1.jpg', '41_2.jpg', '41_3.jpg', '1.6 GhzGHz Intel Core i5-8250U 8th Gen processor;Windows 10 operating system;NVIDIA GeForce MX130 2GB Graphics;8GB DDR4 RAM;1TB 5400rpm hard drive', '0000-00-00', 0, 0),
(42, 'HP 250 G6 Intel Celeron Dual Core (4GB Ram/1TB HDD/DOS) 3XL40PA Laptop, (15.6-inch, Black)', 'laptop', 'Intel Celeron N3350 (2MB Cache, 1.1GHz);DOS;4GB (2133MHz) DDR4-SD RAM;1 Year manufacturer warranty;1000GB HDD', 20079, 21990, 70, 'Brand:HP;Colour:Black;Item Height:24 Millimeters;Item Width:25.4 Centimeters;Screen Size:15.6 Inches;Item Weight:1.86 Kg;Product Dimensions:38 x 25.4 x 2.4 cm;Batteries::1 AAA batteries required. (included);Item model number:3XL40PA;Processor Brand:Intel;Processor Type:Celeron;Processor Speed:1.10 GHz;Processor Count:2;RAM Size:4 GB;Computer Memory Type:GDDR4;Hard Drive Size:1 TB;Hard Disk Technology:HDD 7200 rpm;Hard Drive Interface:Serial ATA;Number of USB 2.0 Ports:1;Hardware Platform:Windows;Operating System:DOS;Lithium Battery Energy Content:45 Watt Hours;Lithium battery Weight:100 Grams;Number of Lithium Ion Cells:4;Date First Available:11 June 2018', '1 YEAR MANUFACTURER WARRANTY', '42_1.jpg', '42_2.jpg', '42_3.jpg', 'Intel Celeron N3350 (2MB Cache, 1.1GHz);DOS;4GB (2133MHz) DDR4-SD RAM;1 Year manufacturer warranty;1000GB HDD', '0000-00-00', 0, 0),
(44, 'Redmi 6 Pro (Black, 4GB RAM, 64GB Storage)', 'mobile', '12MP+5MP dual rear camera | 5MP front facing camera;14.833 centimeters (5.84-inch) capacitive touchscreen with 2280 x 1080 pixels resolution, 432 ppi pixel density;Memory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 256GB with dedicated slot | Dual nano SIM with dual standby (4G+4G);Android v8.1 Oreo operating system with 2GHz Qualcomm Snapdragon 625 octa core processor, Adreno 506 GPU;4000 lithium-polymer battery;1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase;Box also includes: Adapter, USB cable, Warranty card, User guide, SIM insertion tool and Back cover', 10999, 13499, 47, 'OS:Android;RAM:4 GB;Item Weight:177 g;Product Dimensions:14.9 x 0.9 x 7.2 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:Redmi 6 Pro;Wireless communication technologies:Bluetooth, WiFi Hotspot;Connectivity technologies:Bluetooth v4.2 wireless technology, 802.11 a/b/g/n wifi, GPS/AGPS, GLONASS, BeiDou, USB 2.0 OTG, IR blaster;Special features:Dual SIM, GPS, Music Player, Video Player, FM Radio, Gyroscope, Infrared sensor, Proximity sensor, Accelerometer, Ambient light sensor, eCompass, E-mail;Other camera features:5MP (Front camera);Form factor:Touchscreen Phone;Weight:177 Grams;Colour:Black;Battery Power Rating:4000;Whats in the box:Handset, Adapter, USB cable, Warranty card, User guide, SIM insertion tool and Back cover;Date First Available:9 October 2018', '1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '44_1.jpg', '44_2.jpg', '44_3.jpg', '12MP+5MP dual rear camera | 5MP front facing camera;14.833 centimeters (5.84-inch) capacitive touchscreen with 2280 x 1080 pixels resolution, 432 ppi pixel density;Memory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 256GB with dedicated slot | Dual nano SIM with dual standby (4G+4G);Android v8.1 Oreo operating system with 2GHz Qualcomm Snapdragon 625 octa core processor, Adreno 506 GPU;4000 lithium-polymer battery;', '0000-00-00', 0, 0),
(45, 'OnePlus 6T (Mirror Black, 6GB RAM, 128GB Storage)', 'mobile', 'Camera: 16+20 MP Dual rear camera with Optical Image Stabilization, Super slow motion, Nightscape and Studio Lighting | 16 MP front camera;Display: 6.41-inch(16.2 cms) Full HD+ Optic AMOLED display with 2340 x 1080 pixels resolution and an 86% screen-to-body ratio;Memory, Storage & SIM: 6GB RAM | 128GB storage | Dual nano SIM with dual standby (4G+4G);Screen Unlock: In-screen fingerprint sensor. The OnePlus 6T unlocks in 0.34s for a seamless and intuitive unlock experience;Operating System and Processor: OxygenOS based on Android 9.0 Pie with 2.8GHz Qualcomm Snapdragon 845 octa-core processor;Battery : 3700 mAh lithium-polymer battery with Fast Charge technology;Included in the Box: Screen Protector (pre-applied); Translucent Case; OnePlus Fast Charge Type-C Cable; OnePlus Fast Charge Power Adapter; SIM Tray Ejector; Quick Start Guide; Safety Information; OnePlus Type-C to 3.5mm Audio Jack Adapter', 37999, 37999, 17, 'OS:Android;RAM:6 GB;Item Weight:186 g;Product Dimensions:15.8 x 0.8 x 7.5 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:A6010;Wireless communication technologies:Bluetooth;WiFi Hotspot;Connectivity technologies:2G;3G;GPS;GLONASS;Galileo;BeiDou;USB 2.0;OTG;WiFi 802.11 a/b/g/n/ac;Special features:SIM;GPS;Music Player;Video Player;E-mail;Other camera features:16MP (Front camera);Form factor:Touchscreen Phone;Weight:186 Grams;Colour:Mirror Black;Battery Power Rating:3700;Whats in the box:Handset, Screen Protector (pre-applied), Translucent Case, OnePlus Fast Charge Type-C Cable, OnePlus Fast Charge Power Adapter, SIM Tray Ejector, Quick Start Guide, Safety Information and Type-C to 3.5mm Audio Jack Adapter;Date First Available:31 October 2018', '1 year manufacturer warranty from the date of purchase', '45_1.jpg', '45_2.jpg', '45_3.jpg', 'Camera: 16+20 MP Dual rear camera with Optical Image Stabilization, Super slow motion, Nightscape and Studio Lighting | 16 MP front camera;Display: 6.41-inch(16.2 cms) Full HD+ Optic AMOLED display with 2340 x 1080 pixels resolution and an 86% screen-to-body ratio;Memory, Storage & SIM: 6GB RAM | 128GB storage | Dual nano SIM with dual standby (4G+4G);', '0000-00-00', 0, 0),
(46, 'Honor 7C (Blue, 3GB RAM, 32GB Storage)', 'mobile', '13MP+2MP dual rear camera and 8MP front facing camera;15.2146 centimeters (5.99-inch) LED capacitive touchscreen with 720 x 1440 pixels resolution, 268 ppi pixel density and 16M color support;Memory, Storage & SIM: 3GB RAM | 32GB storage expandable up to 256GB | Dual nano SIM with dual standby (4G+4G);Android v8.0 Oreo operating system with 1.8GHz Qualcomm SDM450 Octa Core processor;3000mAH lithium-polymer battery;1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase;Box also includes: Charger, Type-C cable, Quick Start Guide, Warranty Card, Eject tool, TPU Protective case and TP Protective film (Pre Applied)', 7999, 12999, 20, 'OS:Android;RAM:3 GB;Item Weight:163 g;Product Dimensions:15.8 x 0.8 x 7.6 cm;Batteries::1 C batteries required. (included);Item model number:LND-AL30;Wireless communication technologies:Bluetooth, WiFi Hotspot;Connectivity technologies:GSM, (B2/B3/B5/B8), 3G, WCDMA, (B1/B5/B8), 4G LTE, TD, (38/39/40/41), FDD, (1/3/5/8), Wi-Fi 802.11 b/g/n/ 2.4GHz;Special features:Dual SIM, GPS, Music Player, Video Player, Accelerometer, Proximity sensor, Ambient light sensor, Compass, Fingerprint sensor, E-mail;Other camera features:8MP (Front camera);Form factor:Touchscreen Phone;Weight:163 Grams;Colour:Blue;Battery Power Rating:3000;Whats in the box:Handset, Charger, Type-C cable, Quick Start Guide, Warranty Card, Eject tool, TPU Protective case and TP Protective film (Pre Applied);Date First Available:18 June 2018', '1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '46_1.jpg', '46_2.jpg', '46_3.jpg', '13MP+2MP dual rear camera and 8MP front facing camera;15.2146 centimeters (5.99-inch) LED capacitive touchscreen with 720 x 1440 pixels resolution, 268 ppi pixel density and 16M color support;Memory, Storage & SIM: 3GB RAM | 32GB storage expandable up to 256GB | Dual nano SIM with dual standby (4G+4G);Android v8.0 Oreo operating system with 1.8GHz Qualcomm SDM450 Octa Core processor;3000mAH lithium-polymer battery;', '0000-00-00', 0, 0),
(47, 'Samsung Galaxy M20 (Charcoal Black, 4+64GB)', 'mobile', '13MP+5MP ultra-wide dual camera | 8MP f2.0 front camera;16cm (6.3") Full HD+ Infinity V Display with 2340x1080 crystal clear resolution (409 PPI);5000 mAh battery with 3x fast charge | 15W Type-C fast charger in the box;4GB RAM and 64GB internal memory expandable up to 512GB in a dedicated slot;Fast face unlock and fingerprint sensor | Dual SIM (nano+nano) with dual standby and dual VoLTE;Widevine L1 certification for HD streaming | Dolby ATMOS 360 surround sound;1.8GHz Exynos 7904 octa-core processor | Android Oreo v8.1 OS;1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', 12990, 13390, 20, 'OS:Android;RAM:4 GB;Item Weight:186 g;Product Dimensions:15.6 x 0.9 x 7.5 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:SM-M205FDAGINS;Wireless communication technologies:Bluetooth;WiFi Hotspot;Connectivity technologies:2G;GSM;3G;WCDMA;4G;LTE;FDD;TDD;Special features:Dual SIM;GPS;Music Player;Video Player;Accelerometer;Fingerprint sensor;Gyro sensor;Geomagnetic sensor;Proximity sensor;;Other camera features:8MP;Form factor:Touchscreen Phone;Weight:186 Grams;Colour:Charcoal Black;Battery Power Rating:5000;Whats in the box:Handset (Non-removable Battery Included), Travel Adapter, USB Cable, Ejection Pin and User Manual;Date First Available:4 February 2019', '1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '47_1.jpg', '47_2.jpg', '47_3.jpg', '13MP+5MP ultra-wide dual camera | 8MP f2.0 front camera;16cm (6.3") Full HD+ Infinity V Display with 2340x1080 crystal clear resolution (409 PPI);5000 mAh battery with 3x fast charge | 15W Type-C fast charger in the box;4GB RAM and 64GB internal memory expandable up to 512GB in a dedicated slot;Fast face unlock and fingerprint sensor | Dual SIM (nano+nano) with dual standby and dual VoLTE;', '0000-00-00', 0, 0),
(48, 'Vivo V15 Pro (Topaz Blue, 6GB RAM, 128GB Storage)', 'mobile', 'Display:  16.23cm(6.39) FHD+ Ultra Fullview Super AMOLED display with 19.5:9 aspect ratio and 91.64%Screen to body ratio;Pop-Up Selfie Camera: 32MP Pop-Up Selfie Camera with AI Face Beauty, AI portrait composition,Bokeh Mode, AI body Shaping, Portrait light effect, AR sticker, Video face beauty, Gender detection;Triple Rear Camera: 48 Million Quad Pixel Sensor (12Million Effective Pixel)+8MP+5MP with AI Super Wide Angle, AI Face Beauty, AI portrait composition,Bokeh Mode, AI body Shaping, Portrait light effect, AR sticker, Video face beauty, Gender detection;Powerful Performance: Qualcomm Snapdragon 675AIE with 6GB RAM and 128GB ROM which is expandable up to 256GB;In-Display Fingerprint Sensor: Refined over Five Generations, the In-Display Fingerprint Scanning offers futuristic security with style;1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box', 28990, 32990, 10, 'OS:Android;RAM:6 GB;Item Weight:186 g;Product Dimensions:15.7 x 0.8 x 1.5 cm;Batteries::1 Lithium Metal batteries required. (included);Item model number:1818;Wireless communication technologies:Bluetooth;WiFi Hotspot;Connectivity technologies:GSM;(B2/3/5/8);3G;WCDMA;(B1/5/8);4G LTE;FDD;(B1/3/5/8);TDD;(B38/40/41);Special features:Dual SIM;GPS;Music Player;Video Player;FM Radio;Accelerometer;Ambient Light Sensor;Proximity Sensor;eCompass;Virtual Gyroscope;Fingerprint sensor;E-mail;Other camera features:32MP;Form factor:Touchscreen Phone;Weight:186 Grams;Colour:Topaz Blue;Battery Power Rating:3700;Whats in the box:Handset, Earphone, User Manual, Micro USB to USB Cable, USB Power, Adapter, SIM Ejector Pin and Protective Case;Date First Available:20 February 2019', '1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '48_1.jpg', '48_2.jpg', '48_3.jpg', 'Display:  16.23cm(6.39) FHD+ Ultra Fullview Super AMOLED display with 19.5:9 aspect ratio and 91.64%Screen to body ratio;Pop-Up Selfie Camera: 32MP Pop-Up Selfie Camera with AI Face Beauty, AI portrait composition,Bokeh Mode, AI body Shaping, Portrait light effect, AR sticker, Video face beauty, Gender detection;Triple Rear Camera: 48 Million Quad Pixel Sensor (12Million Effective Pixel)+8MP+5MP with AI Super Wide Angle, AI Face Beauty, AI portrait composition,Bokeh Mode, AI body Shaping, Portrait light effect, AR sticker, Video face beauty, Gender detection', '0000-00-00', 0, 0),
(49, 'Vivo V11 Pro (Starry Night Black, 6GB RAM, 64GB Storage)', 'mobile', 'Camera: 12+5 MP Dual pixel rear camera with Ultra HD mode, PPT mode, Professional mode, Slow motion, Time-lapse photography, Camera filter, Live photo, Bokeh mode, HDR mode, AI face beauty, Panorama, Palm capture, Gender detection, Retina flash, AR stickers, AI face shaping, Time watermark, AI selfie lighting, AI scene recognition, Google lens, AI portrait framing | 25 MP front camera;Display: 16.29 centimetres (6.41-inch) FHD+ Super AMOLED capacitive touchscreen with 2340x1080 pixels, 403 ppi pixel density and 19.5:9 aspect ratio ; V11 Pro comes with an optical fingerprint sensor hidden beneath the display;Memory, Storage & SIM: 6GB RAM | 64GB storage expandable up to 256GB | Dual nano SIM with dual-standby (4G+4G);Operating System and Processor: Android v8.1 Oreo based on Funtouch 4.5 operating system with Qualcomm Snapdragon 660AIE octa core processor;Battery: 3400 mAH lithium ion battery with Dual-Engine fast charging;', 23990, 28990, 10, 'OS:Android;RAM:6 GB;Item Weight:154 g;Product Dimensions:15.8 x 7.5 x 0.8 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:V11 Pro;Wireless communication technologies:Bluetooth, WiFi Hotspot;Connectivity technologies:GSM, (1900/1800/850/900 MHz), HSPA+, 3G, (2100/1900/850/900 MHz), 4G, LTE, (2100/1800/2600/900/800 MHz), GPRS, EDGE, WiFi 802.11 b/g/n 2.4 GHz;Special features:Dual SIM, GPS, Music Player, Video Player, FM Radio, Accelerometer, Ambient light sensor, Proximity sensor, eCompass, Virtual Gyroscope,In-Display Fingerprint Scanning, E-mail;Display technology:Super Amoled;Other camera features:25MP (Front camera);Form factor:Touchscreen Phone;Weight:154 Grams;Colour:Starry Night Black;Battery Power Rating:3400;Whats in the box:Handset, Earphone, User Manual, Micro USB to USB Cable, USB Power Adapter, SIM Ejector Pin and Protective Case;Date First Available:6 September 2018', '1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '49_1.jpg', '49_2.jpg', '49_3.jpg', 'Camera: 12+5 MP Dual pixel rear camera with Ultra HD mode, PPT mode, Professional mode, Slow motion, Time-lapse photography, Camera filter, Live photo, Bokeh mode, HDR mode, AI face beauty, Panorama, Palm capture, Gender detection, Retina flash, AR stickers, AI face shaping, Time watermark, AI selfie lighting, AI scene recognition, Google lens, AI portrait framing | 25 MP front camera;Display: 16.29 centimetres (6.41-inch) FHD+ Super AMOLED capacitive touchscreen with 2340x1080 pixels, 403 ppi pixel density and 19.5:9 aspect ratio ; V11 Pro comes with an optical fingerprint sensor hidden beneath the display;Memory, Storage & SIM: 6GB RAM | 64GB storage expandable up to 256GB | Dual nano SIM with dual-standby (4G+4G);Operating System and Processor: ', '0000-00-00', 0, 0),
(53, 'Redmi Y2 (Black, 3GB RAM, 32GB Storage)', 'mobile', 'Camera: 12+5 MP Dual rear camera | 16 MP front camera;Display: 15.21 centimeters (5.99-inch) HD+ full screen capacitive touchscreen display with 1440x720 pixels, 269 ppi pixel density and 18:9 aspect ratio;Memory, Storage & SIM: 3GB RAM | 32GB storage expandable up to 256GB with dedicated slot | Dual nano SIM with dual standby (4G+4G);Operating System and Processor: Android v8.0 Oreo operating system with 2.0GHz Qualcomm Snapdragon 625 octa core processor;Battery: 3080 mAH lithium Polymer battery;Warranty: 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase;Included in box: Power adaptor, USB Cable, Clear soft case\r\n', 8999, 10499, 30, 'OS:Android;RAM:3 GB;Item Weight:168 g;Product Dimensions:16.1 x 0.8 x 7.7 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:E6;Wireless communication technologies:Bluetooth, WiFi Hotspot;Connectivity technologies:WiFi 802.11 b/g/n;Special features:Dual SIM, GPS, Music Player, Video Player, FM Radio, Gyroscope, Infrared, Proximity, Accelerometer, Ambient light sensor, E compass, E-mail;Other camera features:16MP (Front camera);Form factor:Touchscreen Phone;Weight:168 Grams;Colour:Black;Battery Power Rating:3080;Whats in the box:Redmi Y2, Power adapter, USB cable, SIM eject tool, Warranty card, User guide, Clear soft case;Date First Available:9 October 2018\r\n', '1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '53_1.jpg', '53_2.jpg', '53_3.jpg', 'Camera: 12+5 MP Dual rear camera | 16 MP front camera;Display: 15.21 centimeters (5.99-inch) HD+ full screen capacitive touchscreen display with 1440x720 pixels, 269 ppi pixel density and 18:9 aspect ratio;Memory, Storage & SIM: 3GB RAM | 32GB storage expandable up to 256GB with dedicated slot | Dual nano SIM with dual standby (4G+4G);Operating System and Processor: Android v8.0 Oreo operating system with 2.0GHz Qualcomm Snapdragon 625 octa core processor;Battery: 3080 mAH lithium Polymer battery;', '0000-00-00', 0, 0),
(54, 'Canon PowerShot SX430B 20MP Digital Camera with 45x Optical Zoom (Black) + 16GB Memory Card + Camera Case', 'camera', '45x optical zoom (24 - 1080mm) with 90x ZoomPlus;20.0 megapixels sensor;Intelligent IS;Wi-Fi and NFC', 12799, 14295, 15, 'Brand:Canon;Model:SX430B;Model Name:PowerShot;Item Weight:830 g;Package Dimensions:19.6 x 16.4 x 15.2 cm;Batteries::1 Lithium ion batteries required.;Item model number:SX430B;Resolution:20 megapixels;Included Components:Camera, Bag, Memory Card;Number Of Items:1;Optical Zoom:45 X;Optical Sensor Resolution:20 Megapixels;Batteries Included:No;Batteries Required:Yes;Battery Cell Composition:Lithium Ion;Connector Type:Wi-Fi, NFC;Date First Available:3 February 2017', '2 years Manufacturer warranty', '54_1.jpg', '54_2.jpg', '54_3.jpg', '45x optical zoom (24 - 1080mm) with 90x ZoomPlus;20.0 megapixels sensor;Intelligent IS;Wi-Fi and NFC', '0000-00-00', 0, 0),
(55, 'Sony DSC W830 Cyber-Shot 20.1 MP Point and Shoot Camera (Black) with 8X Optical Zoom, Free Memory Card and Camera Case', 'camera', 'Super HAD CCD sensor with 20.1 effective megapixels;720p MP4 movie mode the camera shoots 1280 x 720 high definition movies at 30 fps;8x optical zoom Carl Zeiss Vario Tessar lens.Refer user manual;Equipped with sweep panorama, intelligent auto and picture effect;2.7-inch (230K dots) clear photo LCD display, For any queries call brand toll free number: 18001037799', 8098, 8690, 20, 'Brand:Sony;Model:SNY_W830PS_BLK;Model Name:Cybershot;Item Weight:118 g;Product Dimensions:5.3 x 2.3 x 9.3 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:SNY_W830PS_BLK;Additional Features:20 Mega Pixel Camera;Included Components:1 U (Including-Rechargeable battery, AC Adaptor, Multi USB Cable, Wrist Strap,User Manual );Number Of Items:6;Screen Size:2.7 Inches;Image Stabilization:Yes;Optical Zoom:8 X;Digital Zoom:32 X;Max Resolution:20.1 Megapixels;Optical Sensor Resolution:20.1 Megapixels;Min Focal Length:25 Millimeters;Video Capture Resolution:1280 x 720;Batteries Included:Yes;Batteries Required:Yes;Battery Cell Composition:Lithium Ion;Viewfinder Type:digital;Date First Available:1 January 2017', '2 years Manufacturer warranty', '55_1.jpg', '55_2.jpg', '55_3.jpg', 'Super HAD CCD sensor with 20.1 effective megapixels;720p MP4 movie mode the camera shoots 1280 x 720 high definition movies at 30 fps;8x optical zoom Carl Zeiss Vario Tessar lens.Refer user manual;Equipped with sweep panorama, intelligent auto and picture effect;2.7-inch (230K dots) clear photo LCD display', '0000-00-00', 0, 0),
(56, 'Nikon Coolpix B500 Camera (Red) with 8GB SD Card, Camera Bag, HDMI Cable and Battery Charger', 'camera', '16MP 1/2.3" BSI CMOS Sensor.Compatible with ViewNX-i.Approx. Dimensions (Width x Height x Depth)4.5 in(113.5 mm)x 3.1 in. (78.3mm)x 3.8 in.(94.9 mm);NIKKOR f/3.0-6.5mm ED Lens;22.5-900mm (35mm Equivalent);40x Optical Zoom Lens, 80x Dynamic Zoom;3" 921k-Dot Tilting LCD;Full HD 1080p Video Recording at 30 fps;Bluetooth (BLE), Wi-Fi, NFC Connectivity', 14990, 19450, 20, 'Brand:Nikon;Model:B500;Model Name:Coolpix;Item Weight:1.29 Kg;Product Dimensions:7.8 x 11.4 x 9.5 cm;Batteries::1 AA batteries required. (included);Item model number:B500;Additional Features:16Megapixel,40x Optical Zoom, 3.0 Inch Tilt LCD;Included Components:Camera, 16GB Card, Camera Bag, HDMI Cable, Battery Charger;Number Of Items:5;Screen Size:3 Inches;Optical Zoom:40 X;Optical Sensor Resolution:16 Megapixels;Batteries Included:Yes;Batteries Required:Yes;Battery Cell Composition:Alkaline;Has Self Timer:Yes;Date First Available:28 May 2016', ' 2 years Manufacturer warranty', '56_1.jpg', '56_2.jpg', '56_3.jpg', '16MP 1/2.3" BSI CMOS Sensor.Compatible with ViewNX-i.Approx. Dimensions (Width x Height x Depth)4.5 in(113.5 mm)x 3.1 in. (78.3mm)x 3.8 in.(94.9 mm);NIKKOR f/3.0-6.5mm ED Lens;22.5-900mm (35mm Equivalent);40x Optical Zoom Lens, 80x Dynamic Zoom;', '0000-00-00', 0, 0),
(57, 'Nikon Coolpix L330 Digital Camera (Black)', 'camera', 'RAM Size:1 GB;Memory Storage Capacity:43 MB;Included Memory Card Size:120 GB;Digital Storage Capacity:0.043 GB;Removable Memory:Secure Digital Card;Hardware Interface:AV Port;Screen Size:3 Inches;Image Stabilization:Yes;Has Image Stabilization:Yes;Optical Zoom:26 X;Digital Zoom:4 X;Max Resolution:20.20 Megapixels;', 35539, 35539, 15, 'Model:FBA_L330;Model Year:2014;Item Weight:431 g;Product Dimensions:11.1 x 8.3 x 7.6 cm;Batteries::4 AA batteries required. (included);Item model number:FBA_L330;RAM Size:1 GB;Memory Storage Capacity:43 MB;Included Memory Card Size:120 GB;Digital Storage Capacity:0.043 GB;Removable Memory:Secure Digital Card;Hardware Interface:AV Port;Screen Size:3 Inches;Image Stabilization:Yes;Has Image Stabilization:Yes;Optical Zoom:26 X;Digital Zoom:4 X;Max Resolution:20.20 Megapixels;Horizontal Resolution:1280 Pixels;Optical Sensor Resolution:20.2 Megapixels;Max Vertical Resolution:720 Pixels;Min Shutter Speed:1/1500 - 1 seconds;Min Aperture:3.1;Min Focal Length:22 Millimeters;Noise Level:85 dB;Batteries Included:Yes;Batteries Required:Yes;Viewfinder Type:digital;Has Auto Focus:Yes;Includes Rechargable Battery:No;Includes AC Adapter:No;Includes Remote:No;Includes External Memory:No;Date First Available:8 June 2016', ' 2 years Manufacturer warranty', '57_1.jpg', '57_2.jpg', '57_3.jpg', 'RAM Size:1 GB;Memory Storage Capacity:43 MB;Included Memory Card Size:120 GB;Digital Storage Capacity:0.043 GB;Removable Memory:Secure Digital Card;Hardware Interface:AV Port;Screen Size:3 Inches;', '0000-00-00', 0, 0);
INSERT INTO `productdetails` (`id`, `title`, `category`, `description`, `newPrice`, `oldPrice`, `stock`, `details`, `warranty`, `image1`, `image2`, `image3`, `features`, `uploadDate`, `rating`, `reviewsNo`) VALUES
(58, 'Canon EOS 200D 24.2MP Digital SLR Camera + EF-S 18-55 mm f4 is STM Lens, Free Camera Case and 16GB Card Inside', 'camera', 'Sensor: APS-C CMOS Sensor with 24.2 MP (high resolution for large prints and image cropping);ISO: 100-12800 sensitivity range (critical for obtaining grain-free pictures, especially in low light);Image Processor: DIGIC 7 with 9 autofocus points (important for speed and accuracy of autofocus and burst photography);Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work);Connectivity: WiFi, NFC and Bluetooth built-in (useful for remotely controlling your camera and transferring pictures wirelessly as you shoot);Lens Mount: EF-S mount compatible with all EF and EF-S lenses (crop-sensor mount versatile and compact, especially when used with EF-S lenses)', 43495, 47495, 25, 'Brand:Canon;Model:EOS 200D;Item Weight:458 g;Product Dimensions:15 x 23 x 16.8 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:EOS 200D;Resolution:24.2;Included Components:EOS 200D Body, EF-S18-55 IS STM, Battery Pack, Lens Cap, Battery Charger, Eye Cup;Screen Size:3 Inches;Display Type:LCD Monitor, TFT color, liquid-crystal monitor;Optical Zoom:24.2;Aspect Ratio:1.50:1;Optical Sensor Resolution:24.2 Megapixels;Min Focal Length:18 Millimeters;Batteries Included:Yes;Batteries Required:Yes;Battery Cell Composition:Lithium Ion;Includes Rechargable Battery:Yes;Has Self Timer:Yes;Includes AC Adapter:Yes;Date First Available:27 July 2017', '2 years Manufacturer warranty', '58_1.jpg', '58_2.jpg', '58_3.jpg', 'Sensor: APS-C CMOS Sensor with 24.2 MP (high resolution for large prints and image cropping);ISO: 100-12800 sensitivity range (critical for obtaining grain-free pictures, especially in low light);Image Processor: DIGIC 7 with 9 autofocus points (important for speed and accuracy of autofocus and burst photography)', '0000-00-00', 0, 0),
(59, 'Canon EOS 1300D 18MP Digital SLR Camera (Black) with 18-55mm ISII Lens, 16GB Card and Carry Case', 'camera', 'Sensor: APS-C CMOS Sensor with 18 MP (sufficient resolution for large prints and image cropping);ISO: 100-6400 sensitivity range (critical for obtaining grain-free pictures, especially in low light);Image Processor: DIGIC 4+ with 9 autofocus points (important for speed and accuracy of autofocus and burst photography);Video Resolution: Full HD video with fully manual control and selectable frame rates (great for precision and high-quality video work);Connectivity: WiFi, NFC and Bluetooth built-in (useful for remotely controlling your camera and transferring pictures wirelessly as you shoot);Lens Mount: EF-S mount compatible with all EF and EF-S lenses (crop-sensor mount versatile and compact, especially when used with EF-S lenses)', 24999, 31995, 20, 'Brand:Canon;Model:EOS 1300D;Item Weight:485 g;Product Dimensions:7.8 x 12.9 x 10.1 cm;Batteries::1 Lithium ion batteries required.;Item model number:EOS 1300D;Resolution:18;Additional Features:Optical Zoom;Included Components:Camera, 18-55mm ISII Lens , 16GB Memory Card, Carry Case;Screen Size:3 Inches;Optical Zoom:18;Optical Sensor Resolution:18 Megapixels;Min Shutter Speed:1/4000;Voltage:7.4 Volts;Batteries Included:No;Batteries Required:Yes;Battery Cell Composition:Lithium Ion;Date First Available:1 January 2017', '2 years Manufacturer warranty', '59_1.jpg', '59_2.jpg', '59_3.jpg', 'Sensor: APS-C CMOS Sensor with 18 MP (sufficient resolution for large prints and image cropping);ISO: 100-6400 sensitivity range (critical for obtaining grain-free pictures, especially in low light);Image Processor: DIGIC 4+ with 9 autofocus points (important for speed and accuracy of autofocus and burst photography)', '0000-00-00', 0, 0),
(60, 'Mi Band - HRX Edition (Black)', 'watches', 'Contact_us on: [ 18001036286 ] for product related assistance;HRX Engraved Band â€“ Limited Edition;Call & Notification Alerts from applications such as UBER and WhatsApp;IP67- Water resistant upto 30mins under 1m water;Total length: 235mm, Adjustable length: 155-210mm ,Material: Thermoplastic elastomer, aluminum alloy;0.42" OLED display Bluetooth 4.0 BLE;Standby time: 23 days', 1290, 1799, 30, 'Brand:Mi;Series:Band 2i;Colour:black;Screen Size:0.42 Inches;Item Weight:9.07 g;Package Dimensions:17 x 7.6 x 2.4 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:Mi Band HRX;Wireless Type:Bluetooth;Voltage:5 Volts;Average Battery Life (in hours):23 Hours;Lithium Battery Energy Content:0.26 Watt Hours;Lithium battery Weight:0.25 Grams;Number of Lithium Ion Cells:1;Included Components:1 Mi Band Sensor, 1 Strap, 1 Charging cable, 1 User Guide;Date First Available:19 September 2017', '6 months', '60_1.jpg', '60_2.jpg', '60_3.jpg', 'IP67- Water resistant upto 30mins under 1m water;Total length: 235mm, Adjustable length: 155-210mm ,Material: Thermoplastic elastomer, aluminum alloy;0.42" OLED display Bluetooth 4.0 BLE;Standby time: 23 days', '0000-00-00', 0, 0),
(61, 'SAMSUNG Gear S3 Frontier Smartwatch', 'watches', '1.3-inch 360x360 super AMOLED capacitive touchscreen display;Corning gorilla glass SR+;Compatibility: Samsung Android, other Android, iOS (Bluetooth) and iOS (Stand alone);Certified IP68 and MIL-STD-810G (temperatures and shock resistant);Tizen based wearable OS;Specifications: Dual-core 1GHz CPU, 768MB RAM, 4GB internal memory;Connectivity: Bluetooth V4.2, Wi-Fi b/g/n, NFC, MST, GPS/Glonass\r\n', 19990, 28500, 20, 'Brand:Samsung;Series:Gear S3 Frontier;Colour:Stainless Steel;Item Height:13 Millimeters;Item Width:5 Millimeters;Item Weight:63.5 g;Product Dimensions:0.5 x 0.5 x 1.3 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:Gear S3 Frontier;Processor Count:2;Wireless Type:802.11bgn;Lithium Battery Energy Content:15 Watt Hours;Lithium battery Weight:5 Grams;Included Components:Watch, Charger Cable, Manual;Date First Available:1 January 2017', ' 1 year warranty provided by the manufacturer from date of purchase', '61_1.jpg', '61_2.jpg', '61_3.jpg', '1.3-inch 360x360 super AMOLED capacitive touchscreen display;Corning gorilla glass SR+;Compatibility: Samsung Android, other Android, iOS (Bluetooth) and iOS (Stand alone);Certified IP68 and MIL-STD-810G (temperatures and shock resistant);', '0000-00-00', 0, 0),
(62, 'Honor Band 3 NYX-B10HN Activity Tracker (Black)', 'watches', 'Water resistant up to 50m;Advanced sleep tracking;Long battery life: Up to 30 days;Smart notifications;Heart rate monitoring\r\n', 2999, 1799, 20, 'Brand:Honor;Series:Band 3;Colour:Black;Item Height:11 Millimeters;Item Width:17 Millimeters;Item Weight:18.1 g;Product Dimensions:22.5 x 1.7 x 1.1 cm;Batteries::1 Lithium ion batteries required. (included);Item model number:NYX-B10HN;Lithium Battery Energy Content:2330 Watt Hours;Lithium battery Voltage:230 Volts;Lithium battery Weight:1 Grams;Number of Lithium Ion Cells:1;Included Components:Band, Charging Cradle, Charging Cable, Quick Start Guide, Safety Information and Warranty Card;Date First Available:5 July 2017;\r\n', '1 year warranty provided by the manufacturer from date of purchase\r\n', '62_1.jpg', '62_2.jpg', '62_3.jpg', 'Water resistant up to 50m;Advanced sleep tracking;Long battery life: Up to 30 days;Smart notifications;Heart rate monitoring\r\n', '0000-00-00', 0, 0),
(63, 'Huawei ERS-B19 Band 2 Classic Activity Tracker (Black)', 'watches', 'Tracking and monitoring of daily activity information, including step count, calories burned and distance covered;Support for running and swimming;Support for breathing exercises;Sleep status monitoring and sleep data collection;Alarm notifications, including smart alarms and event alarms;Notifications supported include incoming calls, SMS messages, emails, calendar events, WhatsApp and other social media apps;For further queries, contact us at 18002096555/18002109999 from Mon to Sun,9AMâ€“9PM\r\n', 2499, 4999, 20, 'Brand:Huawei;Series:Band 2;Colour:Black;Item Weight:18.1 g;Package Dimensions:15.2 x 9 x 3.2 cm;Batteries::1 Lithium Polymer batteries required. (included);Item model number:ERS-B19;Average Battery Life (in hours):504 Hours;Lithium Battery Energy Content:0.38 Watt Hours;Lithium battery Voltage:3.82 Volts;Lithium battery Weight:1 Grams;Number of Lithium Ion Cells:1;Included Components:Band, Charging Cable, Cradle, User Guide, Warranty Card and Safety information;Date First Available:1 September 2017;\r\n', ' 1 year warranty provided by the manufacturer from date of purchase', '63_1.jpg', '63_2.jpg', '63_3.jpg', 'Tracking and monitoring of daily activity information, including step count, calories burned and distance covered;Support for running and swimming;Support for breathing exercises;Sleep status monitoring and sleep data collection;Alarm notifications, including smart alarms and event alarms;\r\n', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productsale`
--

CREATE TABLE IF NOT EXISTS `productsale` (
`id` int(11) NOT NULL,
  `productId` int(255) NOT NULL,
  `sold` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsale`
--

INSERT INTO `productsale` (`id`, `productId`, `sold`) VALUES
(2, 24, 6),
(4, 34, 0),
(5, 35, 2),
(6, 36, 0),
(7, 37, 0),
(8, 38, 0),
(9, 39, 0),
(10, 40, 0),
(11, 41, 0),
(12, 42, 0),
(14, 44, 3),
(15, 45, 3),
(16, 46, 0),
(17, 47, 0),
(18, 48, 0),
(19, 49, 0),
(23, 53, 0),
(24, 54, 0),
(25, 55, 0),
(26, 56, 0),
(27, 57, 0),
(28, 58, 0),
(29, 59, 0),
(30, 60, 0),
(31, 61, 0),
(32, 62, 0),
(33, 63, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
(10, 'hgrtyertytr', '2019-04-19', 32, 'wsrdtfhrsdfvgnk', 1),
(11, 'can i have ubuntu on it?', '2019-05-02', 35, 'You can dual boot.', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

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
(88, 19, 5, 'szdazdsghujijgtr3ws', '2019-04-19', 32),
(89, 19, 5, 'Nice product', '2019-05-02', 35);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `txnId`, `uid`, `products`, `amount`, `status`, `date`) VALUES
(7, '3218a57a97a85722f776', 19, '{"24":"1","32":"1"}', 75824, 1, '0000-00-00'),
(8, 'f03945434af77a698695', 19, '{"24":"1"}', 500, 1, '0000-00-00'),
(9, '2e1ce23f5dd2df308f25', 19, '{"31":"2","24":"1"}', 151148, 1, '0000-00-00'),
(10, '397af3f592fe31293d85', 19, '{"31":"1"}', 75324, 0, '2019-04-24'),
(11, 'edab53d2bf1757e05797', 19, '{"44":3,"45":"3"}', 146994, 1, '2019-04-30'),
(12, '7699bffcefe8907be2a8', 19, '{"35":"2"}', 99980, 1, '2019-05-02');

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
(19, 'Amitoj', 'singh', 'amitojvmc@gmail.com', '9417171800', '', '21500, 6/4', 'Power House road', 'opposite cake square', 'India', 'Punjab', 'Bathinda', '151001', '{"35":"1"}', '["35"]', '["24","31","32","34","45","49","35"]'),
(20, 'Harmanjot', 'Singh', 'harmanjot147@gmail.com', '7009737844', '', '59H', 'Near MBD', 'near mBD', 'India', 'Punjab', 'Ludhiana', '141214', '[]', '[]', '[]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogintb`
--
ALTER TABLE `adminlogintb`
 ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `adminlogintb`
--
ALTER TABLE `adminlogintb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `productsale`
--
ALTER TABLE `productsale`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `qatb`
--
ALTER TABLE `qatb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
