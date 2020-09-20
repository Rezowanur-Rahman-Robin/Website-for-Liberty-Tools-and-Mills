-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 08:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forkan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_phn` varchar(20) NOT NULL,
  `admin_image` varchar(300) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_phn`, `admin_image`, `admin_pass`, `admin_about`) VALUES
(1, 'Admin', 'robin@gmail.com', '01796371964', 'IMG20180210181157 (2).jpg', '12345', 'I am a Business Man.My company................'),
(2, 'Forkan Uddin Ahmed(Tonoy)', 'forkan@gmail.com', '01748484847', 'tousi.jpg', '12345', ' I am a professional web developer.......');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(10) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_ans`) VALUES
(1, 'What’s the payment terms? ', 'You can pay in cash,Bakah,Rocket,DBBL.'),
(2, 'What’s the delivery time? ', ' 15 days normally, based on quantity and availability.'),
(3, 'Who should we contact if there is after-sale problem? ', 'You can send mail to forkan@forkan.com or call us directly to Ms.Shirley.'),
(4, 'What is Your Name?', 'My Name is Forkan Uddin Ahmed Tonoy.I Want to go to USA for .........');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(100) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `p_name` text NOT NULL,
  `p_image` varchar(300) NOT NULL,
  `p_image1` varchar(300) NOT NULL,
  `p_image2` varchar(300) NOT NULL,
  `p_image3` varchar(300) NOT NULL,
  `p_weight` text NOT NULL,
  `p_model` varchar(100) NOT NULL,
  `p_price` int(15) NOT NULL,
  `p_features` varchar(4000) NOT NULL,
  `p_desc` text NOT NULL,
  `insertion_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `cat_id`, `p_name`, `p_image`, `p_image1`, `p_image2`, `p_image3`, `p_weight`, `p_model`, `p_price`, `p_features`, `p_desc`, `insertion_time`) VALUES
(1, 1, 'DIN 3352 F4 Resilient Seated Flanged Gate Valves', 'ansi-cast-iron-gate-valve-03.jpg', 'ansi-cast-iron-gate-valve-02.jpg', 'jgd-b-threaded-rubber-joint-02.jpg', 'spiral-vane-flange-water-meter-03.jpg', '10K', 'DIN 3352 F4 ', 1100, '<p>Body: Ductile iron Bonnet: Ductile iron Gland: Ductile iron Wedge: Ductile iron+EPDM Lifting nut: Brass Adjustable stem: SS420 Clamp ring: Brass</p>', '<p>We\' re here to help: Easy ways to get the answers you need.</p>', '2020-06-09 16:47:51'),
(2, 1, 'ANSI Wafer Knife Gate Valve', 'ansi-wafer-knife-gate-valve-02(1).jpg', '', '', '', '6KG', 'G-567', 67890, '<p>Size 2\"-24\" Pressure 150LB Temp ?150 ? Media Slurry?Powder?Fiber Material WCB/Cast Iron Connection Type Wafer</p>', '<p>We\'re here to help: Easy ways to get the answers you need.</p>', '2020-06-09 01:36:57'),
(3, 4, 'Metal seal ball float valve', 'metal-seal-ball-float-valve-02.jpg', '', '', '', '15KG', 'F-6784b', 4500, 'Application: Condensate treatment, ECO, food and medicine, air separation systems\r\nMaterial: Casting\r\nTemperature of Media: -20℃-+450℃\r\nPressure: Medium Pressure, PN16-PN100(Class150-Class2500)\r\nPower: Manual,Pneumatic,Elecrtic\r\nMedia: gas,oil,water,sour,highly saline,corrosion', 'Soft seal gate valve, has overcome the normal gate valve defects which......', '2020-06-01 00:00:00'),
(5, 1, 'Threaded Gate Valve SSCF8/SSSC8M', 'threaded-gate-valve-02.jpg', '', '', '', '5KG', 'TX-6789', 67890, 'Nominal pressure: 1.6，2.5，4.0，6.4 Mpa\r\nStrength testing pressure: PT2.4，3.8，6.0，9.6,Mpa\r\nSeat testing pressure (high pressure): 1.8，2.8, 4.4, 7.1Mpa\r\nApplicable media: Water.Oil. Gas\r\nApplicable temperature: -29-180℃\r\nType: Z15H-(16-64)C\r\nBody Material: CF8 /CF8M /ASTM A 216 WCB', 'This is a pump machine.You can buy it..', '2020-06-01 00:00:00'),
(6, 1, 'Soft Seal Gate Valve', '2f91de22-f4be-4902-b0ba-d8bca2c7d827.png', '1-1q0261p45us.jpg', '3pc-type-ball-valve-with-internal-thread.jpg', '5_so`22i7%rr_n]nak0e(ai.png', '60', 'UYT_ab67', 45000, '<p>Product Category Gate Valve Diameter DN50-600 Pressure PN1.0 / 1.6mpa Temperature 0-80 ? Medium Water, gas etc. Body material GGG50 / 40 Connection Flange</p>', '<p>It\'s a FORSBIN product.Easy ways to get the answers you need.</p>', '2020-06-09 01:28:12'),
(7, 2, 'Metal seal ball float valve', 'metal-seal-ball-float-valve-02.jpg', '', '', '', '30KG', 'DC-cn78', 67890, '\r\nApplication: Condensate treatment, ECO, food and medicine, air separation systems\r\nMaterial: Casting\r\nTemperature of Media: -20℃-+450℃\r\nPressure: Medium Pressure, PN16-PN100(Class150-Class2500)\r\nPower: Manual,Pneumatic,Elecrtic\r\nMedia: gas,oil,water,sour,highly saline,corrosion\r\n', '\r\nSoft seal gate valve, has overcome the normal gate valve defects which......', '2020-06-08 00:00:00'),
(8, 3, 'Metal seal ball float valve', '\r\nmetal-seal-ball-float-valve-02.jpg', '', '', '', '90KG', 'DS-78', 45000, 'Application: Condensate treatment, ECO, food and medicine, air separation systems\r\nMaterial: Casting\r\nTemperature of Media: -20℃-+450℃\r\nPressure: Medium Pressure, PN16-PN100(Class150-Class2500)\r\nPower: Manual,Pneumatic,Elecrtic\r\nMedia: gas,oil,water,sour,highly saline,corrosion', '\r\nSoft seal gate valve, has overcome the normal gate valve defects which......', '2020-06-08 00:22:00'),
(9, 2, 'Metal seal ball float valve', 'metal-seal-ball-float-valve-02.jpg', '', '', '', '45KG', 'GH-6734', 67854, '\r\nApplication: Condensate treatment, ECO, food and medicine, air separation systems\r\nMaterial: Casting\r\nTemperature of Media: -20℃-+450℃\r\nPressure: Medium Pressure, PN16-PN100(Class150-Class2500)\r\nPower: Manual,Pneumatic,Elecrtic\r\nMedia: gas,oil,water,sour,highly saline,corrosion', 'Soft seal gate valve, has overcome the normal gate valve defects which......', '2020-06-01 00:00:00'),
(10, 3, 'Threaded Gate Valve SSCF8', 'threaded-gate-valve-02.jpg', '', '', '', '5KG', 'TX-6789', 67890, 'Nominal pressure: 1.6，2.5，4.0，6.4 Mpa\r\nStrength testing pressure: PT2.4，3.8，6.0，9.6,Mpa\r\nSeat testing pressure (high pressure): 1.8，2.8, 4.4, 7.1Mpa\r\nApplicable media: Water.Oil. Gas\r\nApplicable temperature: -29-180℃\r\nType: Z15H-(16-64)C\r\nBody Material: CF8 /CF8M /ASTM A 216 WCB', '\r\nThis is a pump machine.You can buy it..', '2020-06-02 00:00:00'),
(11, 1, 'Metal seal ball float valve', 'metal-seal-ball-float-valve-02.jpg', '', '', '', '45KG', 'GH-6734', 4543, '\r\nApplication: Condensate treatment, ECO, food and medicine, air separation systems\r\nMaterial: Casting\r\nTemperature of Media: -20℃-+450℃\r\nPressure: Medium Pressure, PN16-PN100(Class150-Class2500)\r\nPower: Manual,Pneumatic,Elecrtic\r\nMedia: gas,oil,water,sour,highly saline,corrosion', 'Soft seal gate valve, has overcome the normal gate valve defects which......', '2020-06-02 00:00:00'),
(12, 1, 'Threaded Gate Valve SSCF8', 'threaded-gate-valve-02.jpg', '', '', '', '5KG', 'TX-6789', 45456, 'Nominal pressure: 1.6，2.5，4.0，6.4 Mpa\r\nStrength testing pressure: PT2.4，3.8，6.0，9.6,Mpa\r\nSeat testing pressure (high pressure): 1.8，2.8, 4.4, 7.1Mpa\r\nApplicable media: Water.Oil. Gas\r\nApplicable temperature: -29-180℃\r\nType: Z15H-(16-64)C\r\nBody Material: CF8 /CF8M /ASTM A 216 WCB', '\r\nThis is a pump machine.You can buy it..', '2020-06-02 00:00:00'),
(13, 2, 'Threaded Gate Valve SSCF8/SSSC8M', 'threaded-gate-valve-02.jpg', '', '', '', '12KG', 'MNB-6756', 56543, 'Nominal pressure: 1.6，2.5，4.0，6.4 Mpa\r\nStrength testing pressure: PT2.4，3.8，6.0，9.6,Mpa\r\nSeat testing pressure (high pressure): 1.8，2.8, 4.4, 7.1Mpa\r\nApplicable media: Water.Oil. Gas\r\nApplicable temperature: -29-180℃\r\nType: Z15H-(16-64)C\r\nBody Material: CF8 /CF8M /ASTM A 216 WCB', 'This is a pump machine.You can buy it..', '2020-06-16 00:00:00'),
(14, 3, 'Threaded Gate Valve SSCF8/SSSC8M', 'threaded-gate-valve-02.jpg', '', '', '', '12KG', 'MNB-6756', 47833, 'Nominal pressure: 1.6，2.5，4.0，6.4 Mpa\r\nStrength testing pressure: PT2.4，3.8，6.0，9.6,Mpa\r\nSeat testing pressure (high pressure): 1.8，2.8, 4.4, 7.1Mpa\r\nApplicable media: Water.Oil. Gas\r\nApplicable temperature: -29-180℃\r\nType: Z15H-(16-64)C\r\nBody Material: CF8 /CF8M /ASTM A 216 WCB', 'This is a pump machine.You can buy it..', '2020-06-02 00:00:00'),
(15, 4, 'Threaded Gate Valve SSCF8/SSSC8M', 'threaded-gate-valve-02.jpg', '', '', '', '12KG', 'MNB-6756', 45464, 'Nominal pressure: 1.6，2.5，4.0，6.4 Mpa\r\nStrength testing pressure: PT2.4，3.8，6.0，9.6,Mpa\r\nSeat testing pressure (high pressure): 1.8，2.8, 4.4, 7.1Mpa\r\nApplicable media: Water.Oil. Gas\r\nApplicable temperature: -29-180℃\r\nType: Z15H-(16-64)C\r\nBody Material: CF8 /CF8M /ASTM A 216 WCB', 'This is a pump machine.You can buy it..', '2020-06-03 00:00:00'),
(16, 2, 'Threaded Gate Valve SSCF8/SSSC8M', 'threaded-gate-valve-02.jpg', '', '', '', '12KG', 'MNB-6756', 454543, 'Nominal pressure: 1.6，2.5，4.0，6.4 Mpa\r\nStrength testing pressure: PT2.4，3.8，6.0，9.6,Mpa\r\nSeat testing pressure (high pressure): 1.8，2.8, 4.4, 7.1Mpa\r\nApplicable media: Water.Oil. Gas\r\nApplicable temperature: -29-180℃\r\nType: Z15H-(16-64)C\r\nBody Material: CF8 /CF8M /ASTM A 216 WCB', 'This is a pump machine.You can buy it..', '2020-06-01 00:00:00'),
(17, 4, 'Threaded Gate Valve SSCF8/SSSC8M', 'threaded-gate-valve-02.jpg', 'threaded-gate-valve-02.jpg', 'threaded-gate-valve-02.jpg', 'threaded-gate-valve-02.jpg', '12KG', 'MNB-6756', 247238, 'Nominal pressure: 1.6，2.5，4.0，6.4 Mpa\r\nStrength testing pressure: PT2.4，3.8，6.0，9.6,Mpa\r\nSeat testing pressure (high pressure): 1.8，2.8, 4.4, 7.1Mpa\r\nApplicable media: Water.Oil. Gas\r\nApplicable temperature: -29-180℃\r\nType: Z15H-(16-64)C\r\nBody Material: CF8 /CF8M /ASTM A 216 WCB', 'This is a pump machine.You can buy it..', '2020-06-01 05:00:21'),
(20, 3, 'BS Y Strainer', 'worm-gear-operated-lug-butterfly-valve-01.jpg', 'worm-gear-operated-lug-butterfly-valve-02.jpg', 'worm-gear-operated-flange-butterfly-valve-02.jpg', 'xw5.jpg', '100', 'BN-56', 78900, '<p><span style=\"color: #666666; font-family: helveticaregular; font-size: 16px; background-color: #ffffff;\">Diameter: DN50-300</span><br style=\"font-size: 12px; font-family: helveticaregular; color: #666666; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: helveticaregular; font-size: 16px; background-color: #ffffff;\">Pressure: PN1.0 / 1.6mpa</span><br style=\"font-size: 12px; font-family: helveticaregular; color: #666666; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: helveticaregular; font-size: 16px; background-color: #ffffff;\">Temperature: -29â„ƒ-200 â„ƒ</span><br style=\"font-size: 12px; font-family: helveticaregular; color: #666666; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: helveticaregular; font-size: 16px; background-color: #ffffff;\">Medium: Water, Oil,</span><br style=\"font-size: 12px; font-family: helveticaregular; color: #666666; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: helveticaregular; font-size: 16px; background-color: #ffffff;\">Body material: cast ironï¼Œductile iron</span><br style=\"font-size: 12px; font-family: helveticaregular; color: #666666; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: helveticaregular; font-size: 16px; background-color: #ffffff;\">Connection: Flange</span></p>', '<p>&nbsp;</p>\r\n<dl style=\"font-size: 12px; font-family: helveticaregular; margin: -23px auto 0px; padding: 40px 15px 15px; position: relative; z-index: 9;\">\r\n<dd style=\"font-size: 12px; font-family: helveticaregular; margin: 0px; padding: 0px; color: #666666; line-height: 20px;\">Knife gate valve opening and closing part is the valve plate, the plat......</dd>\r\n</dl>', '2020-06-09 01:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`cat_id`, `cat_title`) VALUES
(1, ' Bate valve '),
(2, 'Copper valve'),
(3, 'Dismantling Joint'),
(4, 'Ball valve'),
(6, 'Pipe Cloning'),
(9, 'Caps/Hats');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `slide_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_name`, `slide_image`) VALUES
(2, 'Slide number 1', 'lADPBE1XYGA7ljbNApTNB4A_1920_660-1920x660.jpg'),
(10, 'Slide number 2', 'ee.jpg'),
(11, 'Slide number 3', 'bb.jpg'),
(12, 'Slide number 4', 'cc.jpg'),
(13, 'Slide number 5', 'aa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
