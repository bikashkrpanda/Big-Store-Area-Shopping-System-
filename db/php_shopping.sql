-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 07:34 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE IF NOT EXISTS `add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add` int(255) NOT NULL,
  `pro_cat` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `area_cat`
--

CREATE TABLE IF NOT EXISTS `area_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(255) NOT NULL,
  `cata` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `area_cat`
--

INSERT INTO `area_cat` (`id`, `area`, `cata`) VALUES
(1, 'Azad Nagar', 'Fooding'),
(2, 'Unnao', 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE IF NOT EXISTS `cartdetails` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cartdetails`
--

INSERT INTO `cartdetails` (`ser_no`, `email`, `image1`, `product_name`, `price`) VALUES
(1, 'rashmicsjm5@gmail.com', 'm1.jpg', 'HP Laptop', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `city1`
--

CREATE TABLE IF NOT EXISTS `city1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city1`
--

INSERT INTO `city1` (`id`, `area`, `city`) VALUES
(1, 'Azad Nagar', 'Lucknow'),
(2, 'Unnao', 'Kanpur');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `S.no` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  PRIMARY KEY (`S.no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`S.no`, `company_name`, `address`, `phone_no`, `mobile_no`, `email_id`) VALUES
(1, 'Himanshu Electronics & Communitation ', '', '45455455', 'q44234', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ser_no`, `user_name`, `password`) VALUES
(1, 'bkpanda', 'bikash');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `remail` varchar(255) NOT NULL,
  `shop_catagory` varchar(255) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `pro_cat` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `plateform` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `display` varchar(200) NOT NULL,
  `waranty` varchar(200) NOT NULL,
  `shipping_time` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `offer_price` varchar(100) NOT NULL,
  `save` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ser_no`, `remail`, `shop_catagory`, `product_code`, `product_name`, `pro_cat`, `product_price`, `description`, `brand`, `category`, `features`, `plateform`, `model`, `type`, `display`, `waranty`, `shipping_time`, `price`, `offer_price`, `save`, `image1`) VALUES
(26, '', 'Electronics', 'SNTVE1', 'Samsung SNTVE1', 'Raj Electronics', '6000', 'Samsung tv', 'Samsung', 'T.V', '21 "', 'Samsung', 'Samsung', 'LED TV', 'Samsung', '1 year warranty ', 'within 5-7 working days', '6000', '5500', '500', 'tv1.jpg'),
(4, '', '', 'SNMO2', 'LG-L5II- E450SNMO2', 'mobile', '9573', 'Sales Package Handset, USB Cable, Charger, Battery', 'LG', 'LG', 'LG', 'Primary Camera 5 MP, Secondary Camera 1.2 MP', 'Internal Memory Capacity 16 GB', 'LG', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '9573', '9000', '573', 'm2.png'),
(5, '', '', 'SNMO3', 'Samsung-GalaxySNMO3', 'mobile', '30999', 'Sales Package Handset, USB Cable, Charger, Battery', 'Samsung ', 'Samsung-Galaxy', 'Samsung-Galaxy', 'Samsung-Galaxy', 'Samsung-Galaxy', 'Samsung-Galaxy', 'Samsung-Galaxy', '2 years', 'within 15-20 working days', '30999', '30000', '999', 'm3.png'),
(6, '', '', ' SNMO4', 'Nokia-301 SNMO4', 'mobile', '5129', 'Sales Package Handset, USB Cable, Charger, Battery', 'Nokia', 'Nokia', 'single sim', 'Nokia', 'Nokia-301', 'Nokia', 'Nokia', '1 year warranty ', 'within 15-20 working days', '5129', '5000', '129', 'm4.png'),
(7, '', '', 'SNCAMERA1', 'CANON SNCAMERA1', 'camera', '10000', 'CANON ', 'CANON ', 'CANON ', 'CANON ', 'CANON ', 'CANON ', 'CANON ', 'CANON ', '1 year warranty ', 'within 5-7 working days', '10000', '9000', '1000', 'camera1.png'),
(8, '', '', 'SNCAMERA2', 'SONY SNCAMERA1', 'camera', '15000', 'SONY', 'SONY', 'SONY', 'SONY', 'SONY', 'SONY', 'LED ', 'Display Type LED', '1 years', '20-25 dayd', '15000', '12000', '3000', 'camera2.png'),
(11, '', '', 'SNCAMERA3', 'SAMSUNG SNCAMERA3', 'camera', '8000', 'SAMSUNG', 'samsung', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'LED ', 'Display Type LED', '1 year', 'within 10-15 days', '8000', '7500', '500', 'camera3.png'),
(12, '', '', 'SNCAMERA4', 'NIKON SNCAMERA4', 'camera', '11000', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'NIKON', 'LED ', 'Display Type LED', '2 year', 'within 20 days', '11000', '10000', '1000', 'camera4.png'),
(15, '', '', 'SNM1', 'SONYMUSIC1', 'Sony Musics Care', '39000', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'SONYMUSIC', 'Home Theater', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '39000', '35000', '4000', 'music1.png'),
(16, '', '', 'SNM2', 'LGMUSIC2', 'Sony Musics Care', '30000', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', 'LGMUSIC', '2 years', 'within 21 days', '30000', '28000', '2000', 'music2.png'),
(17, '', '', 'SNM3', 'PANASONIC SNM3', 'Sony Musics Care', '28000', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'PANASONIC ', 'Home Theater', 'PANASONIC ', '2 years', '20 days', '28000', '27000', '1000', 'music3.png'),
(18, '', '', 'SNM4', 'SAMSUNGMUSIC4', 'Sony Musics Care', '25000', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', '5 year', '15-20 days', '25000', '24000', '1000', 'music4.png'),
(20, '', 'Electronics', 'SNTVE2', 'SONYSNTVE2', 'Raj Electronics', '11000', 'Sales Package Handset, USB Cable, Charger, Battery', 'SONY', 'SONY', 'Processor A6X Dual Core', 'SONY', 'SONY', 'LED ', 'Display Type LED', '5 years', '20 days', '11000', '10500', '500', 'tv2.jpg'),
(21, '', 'Electronics', 'SNTVE3', 'VideoconSNTVE3', 'Raj Electronics', '20000', 'Videocon', 'Videocon', 'Videocon', 'Videocon', 'Videocon', 'Videocon', 'LED TV', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '20000', '18000', '2000', 'tv3.jpg'),
(22, '', 'Electronics', 'SNTVE4', 'ONIDASNTVE4', 'Raj Electronics', '25000', 'ONIDA', 'ONIDA', 'ONIDA', 'ONIDA', 'ONIDA', 'ONIDA', 'LED ', 'Display Type LED', '1 year warranty', 'within 30 days', '25000', '24000', '1000', 'tv4.jpg'),
(23, '', 'Electronics', 'SNTVE5', 'LGSNTVE5', 'Raj Electronics', '28000', 'LG', 'LG', 'LG', 'LG', 'LG', 'LG', 'LED TV', 'Display Type LED', '2 years', '15 days', '28000', '26000', '2000', 'tv6.png'),
(24, '', 'Electronics', 'SNTVE6', 'PhilipsSNTVE6', 'Raj Electronics', '20000', 'Philips', 'Philips', 'Philips', 'Philips', 'Philips', 'Philips', 'LED TV', 'Display Type LED', '2 years ', '20 days', '20000', '19000', '1000', 'tv5.png'),
(27, '', '', 'SNL1', 'SONY LAPTOP', 'laptop', '40000', ' USB Cable, Charger, Battery', 'SONY', 'SONY LAPTOP', 'SONY LAPTOP', 'SONY LAPTOP', 'SONY LAPTOP', 'SONY LAPTOP', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '40000', '38000', '2000', 'laptop3.png'),
(28, '', '', 'SNL2', 'LENOVO Laptop', 'laptop', '36000', 'LENOVO Laptop', 'LENOVO', 'LENOVO Laptop', 'LENOVO Laptop', 'LENOVO Laptop', 'LENOVO Laptop', 'LED TV', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '36000', '35000', '1000', 'laptop2.png'),
(29, '', '', ' PSP-1004E BL', 'SONY PLAY STATION PSP-1004E BL', 'game', '10000', 'dsfrsetfgrdgtrdhtyh', 'sony', 'iPads ', 'gftgh', 'ghfth', 'ghftrhytuh', 'LED ', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '10000', '9000', '1000', 'game1.jpeg'),
(30, '', '', ' PSP-1004E WH', 'SONY PLAY STATION PSP-1004E WH', 'game', '6000', 'dsfrsetfgrdgtrdhtyh', 'sony', 'GFRDTG', 'gftgh', 'ghfth', 'Internal Memory Capacity 16 GB', 'LED TV', 'hjkuhk', '1 year warranty ', 'within 5-7 working days', '6000', '5200', '800', 'game2.jpg'),
(31, '', '', ' PS2 DUAL PAC', 'SONY PLAY STATION PS2 DUAL PAC', 'game', '12000', 'dsfrsetfgrdgtrdhtyh', 'sony', 'rtgrg', 'tygty', 'ygtyt', 'ytygr', 'htyhutf', 'tyhtfyh', '1 year warranty ', 'within 15-20 working days', '12000', '10000', '2000', 'game3.jpg'),
(32, '', 'Electronics', 'SNTVE9', 'samsung SNTVE9', 'Raj Electronics', '20000', 'dsfrsetfgrdgtrdhtyh', 'samsung', 'iPads & Tablets', 'gftgh', 'ghfth', 'Internal Memory Capacity 16 GB', 'LED TV', 'Display Type LED', '1 year warranty ', 'within 15-20 working days', '20000', '18000', '2000', 'tv8.png'),
(35, '', '', 'fan5', 'usha', 'fan', '4000', 'udega', 'usha', 'electronics', 'tej ghumta ha', 'electronic', 'ushan5', 'bidhyak', 'bht bada h', 'saalo tk', 'kabi bi aa sjkta h', '400', '350', '50', ''),
(37, '', '', 'JWL56', 'Marriage Jwellery', 'jwellers', '50000', 'Neckless', 'branded', 'jwellers', 'light color', 'jwellery', '', 'jwellery', '0.5mm', '2 yr', '2 days', '50000', '40000', '10000', 'images/offer.jpg'),
(40, 'Bikash25panda@gmail.com', '', 'sn45', 'lava k9', 'mobile', '4500.00', 'hndwj', 'ljsla', 'dlakns', 'android', 'android', 'k9', 'mobile', '5.0', '1 yr', '5 hr', '4500.00', '4000.00', '500.00', 'lava-pixel-v2-3gb-ram-mobile-phone-large-1.jpg'),
(47, 'rakesh@gmail.com', '', 'bik123', 'usha fan', 'Rakesh Electronics', '45000', 'fan', 'usha', 'Electronics', 'fast', 'Fan', 'bik7n', 'elctronics', '', '2yr', '1 day', '45000', '44000', '1000.00', '1.jpg'),
(48, 'Bikash25panda@gmail.com', 'mobile', '45sn', 'lava k10', 'Bikash Cool Mobiles', '4500.00', 'Android mobile', 'Lava', 'mobile', 'fast', 'android', 'k10', 'mobile', '5.0', '1 yr', '1 day', '4500.00', '4000.00', '500.00', 'lava-pixel-v2-3gb-ram-mobile-phone-large-1.jpg'),
(49, 'n@gmail.com', 'mobile', 'nmca', 'lava k9', 'Nepolian MObiles', '4500.00', 'lava', 'lava', 'mobile', 'android', 'android', 'k9', 'mobile', '5.0', '1 yr', '5 hr', '4500.00', '4000.00', '500.00', 'imageslhio.jpg'),
(50, 'kuldeep.deep8120@gmail.com', 'jwellers', 'jw5', 'K Neckless', 'kuldeep jwels', '50000', 'NIce looking', 'Tanishq', 'jwellery', '', '', '', '', '', 'lifetime', '1 day', '50000', '10000', '40000', 'Gold-Necklace.jpg'),
(64, 'Bikash25panda@gmail.com', 'mobile', '45sn', 'lava k9', 'Bikash Cool Mobiles', '50000', 'NIce looking', 'Lava', 'jwellery', 'android', 'android', 'k9', 'mobile', '5.0', '1 yr', '1 day', '50000', '10000', '40000', 'img1.jpg'),
(62, 'Bikash25panda@gmail.com', 'mobile', 'm4', 'Moto M4', 'Bikash Cool Mobiles', '4500.00', 'Android mobile', 'MOTO', 'mobile', 'fast', 'android', 'bik7n', 'mobile', '5.0', '1 yr', '1 day', '4500.00', '4000.00', '500.00', '513201564925PM_635_general_mobile_4g.jpeg'),
(63, 'rakesh2000@gmail.com', 'Electronics', 'nmca', 'usha fan', 'Raj Electronics', '10000', 'fan', 'lava', 'Electronics', 'fast', 'Fan', 'bik7n', 'elctronics', '5.0', '1 yr', '1 day', '10000', '4000.00', '6000', 'tv3.jpg'),
(60, 'kuldeep.deep8120@gmail.com', 'jwellers', 'jw6', 'L Neckless', 'kuldeep jwels', '50000', 'NIce looking', 'Tanishq', 'jwellery', 'android', 'android', 'k9', 'mobile', '', '1 yr', '5 hr', '50000', '4000.00', '40000', 'Fashion-Austria-Crystal-Water-drop-leaves-Earrings-necklace-jewelry-sets-Classic-Wedding-Dress-B9-5.jpg_350x350.jpg'),
(61, 'n@g.com', 'mobile', 'm4', 'Moto M4', 'My Mobile Store', '10000', 'Android mobile', 'MOTO', 'mobile', 'android', 'android', 'bik7n', 'mobile', '5.0', '1 yr', '1 day', '10000', '4000.00', '6000', 'XOLO-Era-2X.jpg'),
(65, 'Bikash25panda@gmail.com', 'mobile', 'sn45', 'lava k9', 'Bikash Cool Mobiles', '50000', 'NIce looking', 'Tanishq', 'jwellery', 'android', 'android', 'k10', 'mobile', '5.0', '1 yr', '1 day', '50000', '10000', '40000', 'iphone_6s_rose_gold_1479717463377.jpg'),
(66, 'bikash25@gmail.com', 'Electronics', 'bik12', 'lava k10', 'Bikash Electronics', '50000', 'NIce looking', 'Lava', 'mobile', 'fast', 'android', 'k9', 'mobile', '5.0', '1 yr', '1 day', '50000', '10000', '40000.00', 'Penguins.png'),
(70, 'bikash25@gmail.com', 'Electronics', 'm4', 'Moto M5', 'Bikash Electronics', '', 'NIce looking', '', 'jwellery', '', '', 'k9', '', '', '', '', '', '', '', 'images/Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, 'Product1', 'product_image1.jpg', 10.00, 1),
(2, 'Product2', 'product_image2.jpg', 50.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE IF NOT EXISTS `regis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `shop_catagory` varchar(255) NOT NULL,
  `rmobile` varchar(255) NOT NULL,
  `rpass` varchar(255) NOT NULL,
  `rarea` varchar(255) NOT NULL,
  `rpicode` varchar(255) NOT NULL,
  `rshop_name` varchar(255) NOT NULL,
  `rshop_add` varchar(255) NOT NULL,
  `pro_cat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `rname`, `remail`, `shop_catagory`, `rmobile`, `rpass`, `rarea`, `rpicode`, `rshop_name`, `rshop_add`, `pro_cat`, `status`) VALUES
(7, 'Bikash', 'Bikash25panda@gmail.com', 'mobile', '7860455533', 'bikash', 'azad nagar', '208002', '', '241 Azad nagar', 'Bikash Cool Mobiles', '1'),
(8, 'kuldeep', 'kuldeep.deep8120@gmail.com', 'jwellers', '134567890', '123', 'azad nagar', '208002', '', '5465 jaunpur', 'Kuldeep Jwels', '1'),
(9, 'Rakesh', 'rakesh2000@gmail.com', 'Electronics', '7860455533', 'rakesh', 'Unnao', '222136', '', '251 Unnao', 'Raj Electronics', '1'),
(10, 'Rakesh', 'rakesh@gmail.com', 'Electronics', '7860455533', 'rakesh', 'Unnao', '222136', '', '251 Unnao', 'Rakesh Electronics', '0'),
(11, 'Nepal', 'n@gmail.com', 'mobile', '9874561230', '123', 'Kathmandu', '208005', '', '241 kathmandu ', 'Nepolian MObiles', '1'),
(12, 'bikash panda', 'bikash25@gmail.com', 'Electronics', '7860455533', '123', 'kheora', '208002', '', '241 kheora', 'Bikash Electronics', '1'),
(13, 'panda', 'n@g.com', 'mobile', '9044313987', '123', 'unnao', '208020', '', '241 unnao', 'My Mobile Store', '1'),
(14, 'chandu', 'ch@g.com', 'jwellers', '9044313987', '123', 'Kheora', '208002', '', '153 Kheora kanpur', 'Shri Jagannath Jewellers', '1');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(500) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `txn_status` varchar(255) NOT NULL,
  `pro_cat` varchar(255) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`ser_no`, `email`, `product_code`, `product_name`, `image1`, `quantity`, `price`, `txn_status`, `pro_cat`) VALUES
(105, 'r@gmail.com', 'SNTVE1', 'Samsung SNTVE1', 'tv1.png', '1', '5500', '', ''),
(5, 'rashmi@gmail.com', '$code', 'Nokia SNTV3', 'm3.png', '3', '6000', '', ''),
(14, 'rashmi@gmail.com', 'SNTVE2', 'philipsSNTVE2', 'tv3.png', '1', '', '', ''),
(64, 'rashmicsjm5@gmail.com', 'SNM1', 'SONYMUSIC1', 'music1.png', '1', '35000', '', ''),
(21, 'h@gmail.com', 'SNTVE2', 'philipsSNTVE2', 'tv3.png', '1', '', '', ''),
(70, 'h@gmail.com', 'SNM2', 'LGMUSIC2', 'music2.png', '1', '28000', '', ''),
(67, 'a@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.png', '1', '10500', '', ''),
(58, 'a@gmail.com', 'SNTVE1', 'philipsSNTVE1', 'tv2.png', '1', '', '', ''),
(68, 'h@gmail.com', 'SNTVE1', 'Samsung SNTVE1', 'tv1.png', '1', '5500', '', ''),
(69, 'h@gmail.com', 'SNTVE1', 'Samsung SNTVE1', 'tv1.png', '1', '5500', '', ''),
(95, 'bsraazit@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.png', '1', '10500', '', ''),
(127, 'bsn2k17@gmail.com', 'SNTVE9', 'samsung SNTVE9', 'tv8.png', '1', '18000', '', ''),
(137, 'raj@gmail.com', 'jw5', 'K Neckless', 'Gold-Necklace.jpg', '1', '10000', '', 'kuldeep jwels'),
(115, 'amit@gmail.com', 'SNMO2', 'LG-L5II- E450SNMO2', 'm2.png', '1', '9000', '', ''),
(103, 'rashmicsjm5@gmail.com', 'SNTVE4', 'ONIDASNTVE4', 'tv4.png', '1', '24000', '', ''),
(110, 'amit@gmail.com', 'SNTVE3', 'VideoconSNTVE3', 'tv3.png', '1', '18000', '', ''),
(111, 'amit@gmail.com', 'SNTVE3', 'VideoconSNTVE3', 'tv3.png', '1', '18000', '', ''),
(117, 'anuj.lpu1@gmail.com', 'SNM1', 'SONYMUSIC1', 'music1.png', '1', '35000', '', ''),
(118, 'anuj.lpu1@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.png', '1', '10500', '', ''),
(120, 'anuj.lpu1@gmail.com', 'SNM4', 'SAMSUNGMUSIC4', 'music4.png', '1', '24000', '', ''),
(121, 'anuj.lpu1@gmail.com', 'SNTVE6', 'PhilipsSNTVE6', 'tv5.png', '1000', '19000', '', ''),
(122, 'rakeshpanda2000@gmail.com', 'SNCAMERA3', 'SAMSUNG SNCAMERA3', 'camera3.png', '1', '7500', '', ''),
(123, 'rakeshpanda2000@gmail.com', 'SNM2', 'LGMUSIC2', 'music2.png', '1', '28000', '', ''),
(128, 'b1@g.com', 'bik123', 'usha fan', '1.jpg', '1', '44000', '', ''),
(125, 'raj@gmail.com', 'SNM1', 'SONYMUSIC1', 'music1.png', '1', '35000', '', ''),
(126, 'raj@gmail.com', 'SNMO2', 'LG-L5II- E450SNMO2', 'm2.png', '1', '9000', '', ''),
(138, 'b1@g.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.jpg', '1', '10500', '', 'Raj Electronics'),
(134, 'raj@gmail.com', '45sn', 'lava k10', 'lava-pixel-v2-3gb-ram-mobile-phone-large-1.jpg', '1', '4000.00', '', 'Bikash Cool Mobiles'),
(132, 'raj@gmail.com', 'SNTVE1', 'Samsung SNTVE1', 'tv1.jpg', '1', '5500', '', 'Raj Electronics'),
(135, 'raj@gmail.com', 'jw5', 'K Neckless', 'Gold-Necklace.jpg', '1', '10000', '', 'kuldeep jwels'),
(136, 'raj@gmail.com', 'SNTVE2', 'SONYSNTVE2', 'tv2.jpg', '1', '10500', '', 'Raj Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `shop_add`
--

CREATE TABLE IF NOT EXISTS `shop_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_catagory` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shop_add`
--

INSERT INTO `shop_add` (`id`, `active`, `shop_name`, `shop_catagory`, `area`, `city`) VALUES
(1, 1, 'Sarvesh Electronics', 'Electronics', 'Azad Nagar', 'Lucknow'),
(2, 1, 'Sarvesh Food Store', 'Fooding', 'Unnao', 'Kanpur');

-- --------------------------------------------------------

--
-- Table structure for table `shop_cata`
--

CREATE TABLE IF NOT EXISTS `shop_cata` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_catagory` varchar(255) NOT NULL,
  `shop_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shop_cata`
--

INSERT INTO `shop_cata` (`shop_id`, `shop_catagory`, `shop_desc`) VALUES
(1, 'Electronics', 'All electronics items are available here.. '),
(2, 'jwellers', 'All type jwellery products are available here..'),
(3, 'mobile', '');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE IF NOT EXISTS `static` (
  `static_id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  PRIMARY KEY (`static_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`static_id`, `page`, `details`) VALUES
(1, 'aboutus', '\r\n<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family: Verdana, Geneva, sans-serif;">\r\n <div style="text-align: justify;"><font face="times new roman" color="#000033"><b>PHPGURKUL Shopping - </b>in full bloom</font></div><div style="text-align: justify;"><font face="times new roman" color="#000033"><br></font></div><div><font face="times new roman"><div style="text-align: justify;"><b style="color: rgb(0, 0, 51);">PHPGURKUL Shopping</b><font color="#000033">, holds the distinction of being the one-stop-destination for quality electronic Products in Central India. It offers an array of world-renowned brands like Apple, Sony, Samsung, LG, Philips, Nokia, Dell, Lenovo, Blackberry, Compaq, Nikon, Canon, Whirlpool, Hitachi etc. all under one roof.</font></div><div style="text-align: justify;"><font color="#000033"><br></font></div><div><div style="text-align: justify;"><font color="#000033">Online shopping - Great Brands, Great Value</font></div></div><div style="text-align: justify;"><font color="#000033"><br></font></div><div><div style="text-align: justify;"><font color="#000033">Apart from 9 mega showrooms in Delhi,&nbsp;</font><b style="color: rgb(0, 0, 51);">PHPGURKUL Shopping</b><font color="#000033">&nbsp;now boasts of a strong presence in the virtual world too. Its website&nbsp;www.phpgurukul.com facilitates safe &amp; convenient online shopping for the customers.&nbsp;</font></div></div><div><div style="text-align: justify;"><font color="#000033">There are many wonderful things that you can do on this website - Get acquainted with the vast number of brands available for each product. Get in-depth information about them, compare the options &amp; select the product of your choice. You can also chat online with our advisors - clear queries &amp; get expert guidance. Plus there are special schemes and offers for the customers. The buying process too is very easy &amp; convenient. Every purchase comes with an assurance of timely delivery, anywhere in India. The happiness does not fade away even after the purchase. The prompt after-sales service keeps the product and your smile intact - year after year.</font></div></div><div style="text-align: justify;"><font color="#000033"><br></font></div><div><div style="text-align: justify;"><font color="#000033">RishtaBehtarZindagi se: A way of life.</font></div></div><div style="text-align: justify;"><font color="#000033"><br></font></div><div><div style="text-align: justify;"><font color="#000033">A bond with a better life, this is the philosophy that we live by and it is reflected in each and every endeavor of the company.</font></div></div><div style="text-align: justify;">&nbsp;</div></font></div></font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n\r\n\r\n'),
(2, 'contact', '<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family:Verdana, Geneva, sans-serif; color:#930;">\r\n <font style="font-family: Verdana, Geneva, sans-serif;">\r\n <font style="font-family: Verdana, Geneva, sans-serif;">\r\n <font style="font-family: Verdana, Geneva, sans-serif;">\r\n <div><b>BIG STORE Shopping</b></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033">&nbsp;Address : &nbsp; &nbsp; &nbsp;Kanpur</font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033">&nbsp;Email-Id : &nbsp; &nbsp; bikash25panda@gmail.com</font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033"><br></font></div><div><font face="Verdana, Geneva, sans-serif" color="#000033">&nbsp;Contact No : &nbsp;+91-7860455533</font></div><div style="color: rgb(153, 51, 0);"><font face="Verdana, Geneva, sans-serif">&nbsp;</font></div></font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n</font>\r\n\r\n\r\n\r\n'),
(3, 'Privacy&Policy', ''),
(4, 'Terms&Condition', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_user`
--

CREATE TABLE IF NOT EXISTS `temp_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `rname` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `shop_catagory` varchar(255) NOT NULL,
  `rmobile` varchar(255) NOT NULL,
  `rpass` varchar(255) NOT NULL,
  `rarea` varchar(255) NOT NULL,
  `rpicode` varchar(255) NOT NULL,
  `rshop_name` varchar(255) NOT NULL,
  `rshop_add` varchar(255) NOT NULL,
  `pro_cat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `temp_user`
--

INSERT INTO `temp_user` (`id`, `rname`, `remail`, `shop_catagory`, `rmobile`, `rpass`, `rarea`, `rpicode`, `rshop_name`, `rshop_add`, `pro_cat`) VALUES
(1, 'Bikash', 'Bikash25panda@gmail.com', 'mobile', '7844569185', '12345678900', 'Basti', '273002', '', '241-Basti', 'Sarveshwar Dham');

-- --------------------------------------------------------

--
-- Table structure for table `txn_status`
--

CREATE TABLE IF NOT EXISTS `txn_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `txn_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `ser_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `add` varchar(255) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`ser_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ser_no`, `name`, `email`, `add`, `contact`, `password`) VALUES
(1, 'anuj', 'anuj.lpu1@gmail.com', '', '123456789', 'phpgurukul'),
(4, 'amit saini', 'amit@gmail.com', '', '123456789', '123'),
(6, 'Amit', 'a@gmail.com', '', '123456789', '12'),
(7, 'manish', 'manish@gmail.com', '', '123456789', '12'),
(8, 'himanshu', 'h@gmail.com', '', '123456789', '12345'),
(9, 'raj', 'raj@gmail.com', '222 Kheora Kanpur', '123456789', '1234567890'),
(10, 'manisha', 'm@gmail.com', '', '123456789', '111'),
(11, 'naukri', 'm1@gmail.com', '', '123456789', '111'),
(13, 'demo', 'demouser@gmail.com', '', '1234567891', 'php'),
(14, 'Rakesh', 'rakeshpanda2000@gmail.com', '', '7860455533', 'rakesh2506'),
(15, 'bsn', 'bsn2k17@gmail.com', '', '1234567890', '123'),
(16, 'bikash panda', 'b1@g.com', '241 nawabgunj kanpur', '7860455533', '786');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
