-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2017 at 05:56 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_guitar_shop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `adminID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`adminID`, `emailAddress`, `password`, `firstName`, `lastName`) VALUES
(1, 'admin@myguitarshop.com', '6a718fbd768c2378b511f8249b54897f940e9022', 'Admin', 'User'),
(2, 'joe@murach.com', '971e95957d3b74d70d79c20c94e9cd91b85f7aae', 'Joe', 'Murach'),
(3, 'mike@murach.com', '3f2975c819cefc686282456aeae3a137bf896ee8', 'Mike', 'Murach');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Loáº¡i 1'),
(2, 'Loáº¡i 2'),
(3, 'Loáº¡i 3');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `itemID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `itemPrice` decimal(10,2) NOT NULL,
  `discountAmount` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`itemID`, `orderID`, `productID`, `itemPrice`, `discountAmount`, `quantity`) VALUES
(25, 29, 4, '489.99', '186.20', 1),
(26, 29, 8, '499.99', '125.00', 2),
(27, 30, 1, '699.00', '209.70', 1),
(28, 31, 1, '699.00', '209.70', 1),
(29, 32, 1, '699.00', '209.70', 1),
(30, 32, 4, '489.99', '186.20', 1),
(31, 32, 7, '799.99', '240.00', 3),
(32, 33, 2, '1199.00', '359.70', 1),
(33, 34, 2, '1199.00', '359.70', 1),
(34, 38, 2, '1199.00', '359.70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `customerName` text NOT NULL,
  `customerAddress` text NOT NULL,
  `customerPhone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDate`, `customerName`, `customerAddress`, `customerPhone`) VALUES
(29, '2012-07-06 15:16:45', 'Edwin Ogodo', '23 Ton That Thuyet', '037 847221'),
(30, '2016-06-17 19:49:02', '', '', ''),
(31, '2017-03-16 03:54:12', '', '', ''),
(32, '2017-04-08 05:58:01', 'das', 'ada', '112'),
(33, '2017-04-08 06:01:08', '', '', ''),
(34, '2017-04-08 13:36:56', 'Alech', 'Ha Noi', '0132567'),
(35, '2017-04-08 13:38:55', 'Alech', 'Ha Noi', '0132567'),
(36, '2017-04-08 13:39:14', 'Alech', 'Ha Noi', '0132567'),
(37, '2017-04-08 13:39:20', 'Alech', 'Ha Noi', '0132567'),
(38, '2017-04-08 13:39:54', 'Ä‘Ã¢s', 'Ã¡dasd', 'Ã¡das'),
(39, '2017-04-08 13:40:06', 'Ä‘Ã¢s', 'Ã¡dasd', 'Ã¡das'),
(40, '2017-04-08 13:41:41', 'Ä‘Ã¢s', 'Ã¡dasd', 'Ã¡das');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `listPrice` decimal(10,2) NOT NULL,
  `discountPercent` decimal(10,2) NOT NULL DEFAULT '0.00',
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `description`, `listPrice`, `discountPercent`, `dateAdded`) VALUES
(1, 1, '001', 'GiÃ y Boot cá»±c cháº¥t dÃ nh cho boys- NA 310', 'HÃ£y bá» qua nhá»¯ng máº«u giÃ y rÆ°á»m rÃ , trong tiáº¿t trá»i oi bá»©c hiá»‡n nay, Äƒn máº·c Ä‘Æ¡n giáº£n vá»«a giÃºp báº¡n thoáº£i mÃ¡i láº¡i tÃ´n lÃªn váº» Ä‘áº¹p tinh táº¿.Vá»›i nhá»¯ng máº«u mÃ£ Ä‘Æ¡n giáº£n nhÆ°ng cÅ©ng Ä‘áº§y cÃ¡ tÃ­nh, sang trá»ng, vÃ  lá»‹ch lÃ£m dÆ°á»›i Ä‘Ã¢y sáº½ lÃ m thay Ä‘á»•i báº¡n, Ä‘áº¿n change shop Ä‘á»ƒ rinh vá» nhá»¯ng máº«u giÃ y Æ°ng Ã½ nháº¥t nhÃ©', '699.00', '30.00', '2009-10-30 09:32:40'),
(2, 1, '002', 'GiÃ y Boot cá»±c cÃ¡ tÃ­nh NA 285', 'Äáº±ng sau váº» háº¥p dáº«n vÃ  thÃ nh cÃ´ng cá»§a phÃ¡i máº¡nh lÃ  nhá»¯ng máº«u giÃ y Ä‘Æ°á»£c cáº­p nháº­t liÃªn tá»¥c theo xu hÆ°á»›ng má»›i nháº¥t. Lá»‹ch sá»±, phÃ³ng khoÃ¡ng, khá»e khoáº¯n nhÆ°ng ráº¥t tráº» trung lÃ  Ä‘iá»ƒm Ä‘áº·c biá»‡t mÃ  khÃ´ng pháº£i lÃºc nÃ o báº¡n cÅ©ng dá»… dÃ ng tÃ¬m Ä‘Æ°á»£c. HÃ£y Ä‘áº¿n shop, Ä‘á»ƒ thá»­ vÃ  cáº£m nháº­n!', '1199.00', '30.00', '2009-12-05 16:33:13'),
(3, 1, '003', 'GiÃ y jean xanh Ä‘áº­m NA 940B', '- MÃ u sáº¯c Ä‘Æ¡n giáº£n, dá»… dÃ ng káº¿t há»£p vá»›i nhiá»u loáº¡i trang phá»¥c khÃ¡c nhau.\r\n- Äáº·c biá»‡t,cháº¥t liá»‡u vá»›i vÃ¢n caro cÃ ng lÃ m Ä‘Ã´i giÃ y lÆ°á»i thÃªm báº¯t máº¯t vÃ  sÃ nh Ä‘iá»‡u\r\n- GiÃ y lÆ°á»i sáº½ lÃ  lá»±a chá»n thÃ´ng minh cho cÃ¡c chÃ ng trai muá»‘n tiáº¿t kiá»‡m thá»i gian vÃ¬ tÃ­nh tiá»‡n lá»£i.\r\n- Sáº½ vÃ´ cÃ¹ng há»£p vá»›i nhá»¯ng chiáº¿c quáº§n lá»­ng ngang máº¯c cÃ¡ chÃ¢n, táº¡o cho chÃ ng váº» sÃ ng Ä‘iá»‡u, xu hÆ°á»›ng HÃ n Quá»‘c Ä‘ang lÃ m mÆ°u giÃ³ trong giá»›i thá»i trang tráº» hiá»‡n nay.', '2517.00', '52.00', '2010-02-04 11:04:31'),
(4, 1, '004', 'GiÃ y ná»¯ cÃ¡ tÃ­nh', '- MÃ u sáº¯c Ä‘Æ¡n giáº£n, dá»… dÃ ng káº¿t há»£p vá»›i nhiá»u loáº¡i trang phá»¥c khÃ¡c nhau.\r\n- Äáº·c biá»‡t,cháº¥t liá»‡u vá»›i vÃ¢n caro cÃ ng lÃ m Ä‘Ã´i giÃ y lÆ°á»i thÃªm báº¯t máº¯t vÃ  sÃ nh Ä‘iá»‡u', '489.99', '38.00', '2010-06-01 11:12:59'),
(6, 1, '005', 'GiÃ y Nam Y2010 B22', '- Cháº¥t liá»‡u simili cao cáº¥p vá»›i Ä‘á»™ bá»n cao vÃ  thÃªm nhiá»u tÃ­nh nÄƒng Æ°u viá»‡t khÃ¡c nhÆ°: Chá»‘ng tháº¥m tá»‘t, dá»… lau chÃ¹i báº£o quáº£n...\r\n- Äáº¿ cao su chá»‘ng trÆ¡n trÆ°á»£t, tÃ­nh Ä‘Ã n há»“i trong má»—i bÆ°á»›c Ä‘i , luÃ´n táº¡o cáº£m giÃ¡c thoáº£i mÃ¡i.\r\n- Thiáº¿t káº¿ tráº» trung vÃ  hiá»‡n Ä‘áº¡i vá»›i nhiá»u há»a tiáº¿t láº¡ máº¯t cÃ ng lÃ m Ä‘Ã´i giÃ y cá»§a báº¡n thÃªm thá»i trang.\r\n- Äáº·c biá»‡t vá»›i máº«u giÃ y nÃ y, sáº½ cÃ³ nhiá»u mÃ u cho cÃ¡c báº¡n nam thÃªm nhiá»u sá»± lá»±a chá»n.\r\n- MÃ u sáº¯c tinh táº¿, thá»i trang & xu hÆ°á»›ng.', '415.00', '39.00', '2010-07-30 14:12:41'),
(7, 2, '008', 'GiÃ y Nam Kid1412 A17', '- Láº¡ máº¯t vá»›i cháº¥t liá»‡u Ã¡nh nhung váº«n giá»¯ Ä‘Æ°á»£c váº» nam tÃ­nh cho Ä‘Ã´i giÃ y cÃ¹ng nhá»¯ng vÃ¢n sá»c ngang áº¥n tÆ°á»£ng.\r\n- Sáº½ vÃ´ cÃ¹ng há»£p vá»›i nhá»¯ng chiáº¿c quáº§n lá»­ng ngang máº¯c cÃ¡ chÃ¢n, táº¡o cho chÃ ng váº» sÃ ng Ä‘iá»‡u, xu hÆ°á»›ng HÃ n Quá»‘c Ä‘ang lÃ m mÆ°u giÃ³ trong giá»›i thá»i trang tráº» hiá»‡n nay.\r\n- Äáº·c biá»‡t, mÃ u sáº¯c Ä‘a dáº¡ng cho báº¡n nam nhiá»u sá»± lá»±a chá»n.', '799.99', '30.00', '2010-06-01 11:29:35'),
(8, 2, '009', 'GiÃ y Nam Y2010 B21', 'Pháº§n mÅ© giÃ y sá»­ dá»¥ng loáº¡i sá»£i polyester cao cáº¥p. Thiáº¿t káº¿ dá»‡t giÃºp sáº£n pháº©m cÃ³ kháº£ nÄƒng:\r\n+ ThÃ´ng thoÃ¡ng khÃ­ trong quÃ¡ trÃ¬nh sá»­ dá»¥ng.\r\n+ DÃ¡ng giÃ y Ã´m chÃ¢n nhÆ°ng khÃ´ng cháº­t, táº¡o cáº£m giÃ¡c thoáº£i mÃ¡i cho ngÆ°á»i dÃ¹ng.\r\n+ Sáº£n pháº©m mau khÃ´ khi giáº·t.\r\nÄáº¿ giÃ y Ä‘Æ°á»£c lÃ m tá»« nhá»¯ng háº¡t nhá»±a E.V.A (nhá»±a nguyÃªn sinh) nÃªn cÃ³ Ä‘Æ°á»£c cÃ¡c Ä‘áº·c tÃ­nh sau:\r\n+ Nháº¹.\r\n+ Äá»™ dáº»o dai vÃ  má»m máº¡i. \r\n+ Háº¥p thá»¥ rung Ä‘á»™ng loáº¡i Æ°u táº¡o cáº£m giÃ¡c Ãªm chÃ¢n khi mang.\r\n+ ThÃ¢n thiá»‡n mÃ´i trÆ°á»ng.', '499.99', '25.00', '2010-07-30 14:18:33'),
(9, 3, 'ludwig', 'MÃ u xanh trÃ¡i phÃ¡', ' MÃ u sáº¯c Äen - Xanh Äen máº¡nh máº½, khÃ´ng lÃ m máº¥t Ä‘i váº» nam tÃ­nh cá»§a cÃ¡c báº¡n.\r\n- Äáº·c biá»‡t, cÃ³ nhiá»u chi tiáº¿t nháº¥n nhÃ¡ nháº¹ nhÃ ng, Ä‘iá»ƒm xuyáº¿t lÃ m mÃ³n phá»¥ kiá»‡n thá»i trang cá»§a báº¡n Ä‘áº·c biá»‡t vÃ  ná»•i báº­t hÆ¡n.', '699.99', '30.00', '2010-07-30 12:46:40'),
(10, 3, '012', 'adidas black', '- Sneaker nam vá»›i kiá»ƒu dÃ¡ng thá»ƒ thao vÃ  khá»e kháº¯n, khÃ´ng kÃ©m pháº§n thá»i trang.\r\n- MÃ u Ä‘en - xanh Ä‘en máº¡nh máº½ phÃ¹ há»£p cho nhá»¯ng báº¡n nam cÃ¡ tÃ­nh.\r\n- Sneaker Ä‘en lÃ  phá»¥ kiá»‡n thá»i trang dá»… dÃ ng phá»‘i vá»›i nhiá»u loáº¡i trang phá»¥c táº¡o nhiá»u phong cÃ¡ch khÃ¡c nhau, vÃ  phÃ¹ há»£p vá»›i Ä‘a sá»‘ cÃ¡c sá»± kiá»‡n: Du lá»‹ch, háº¹n hÃ², Ä‘i há»c, dáº¡o phá»‘....', '799.99', '15.00', '2010-07-30 13:14:15'),
(11, 1, '006', 'GiÃ y Nam Kid1412 A22', '- A22 lÃ  má»™t trong nhá»¯ng máº«u giÃ y má»›i nháº¥t Ä‘Æ°á»£c thiáº¿t káº¿ vÃ  sáº£n xuáº¥t bá»Ÿi YaMe.\r\n- NghiÃªn cá»©u thiáº¿t káº¿ phom dÃ¡ng vÆ°á»£t trá»™i, vá»«a váº·n vá»›i Ä‘Ã´i chÃ¢n, táº¡o sá»± thoáº£i mÃ¡i khi sá»­ dá»¥ng.\r\n- Äáº·c biá»‡t, cháº¥t liá»‡u nháº¹, dá»… di chuyá»ƒn, thÃ­ch há»£p vá»›i nhá»¯ng chuyáº¿n du lá»‹ch xa.\r\n- NgoÃ i ra, thiáº¿t káº¿ vá»›i nhá»¯ng Ä‘Æ°á»ng vÃ¢n láº¡ máº¯t vÃ  ná»•i báº­t.\r\n- MÃ u sáº¯c vÃ´ cÃ¹ng tráº» trung, há»£p thá»i trang vÃ  xu hÆ°á»›ng.', '690.00', '40.00', '2016-06-17 20:16:39'),
(12, 1, '007', 'GiÃ y Nam Kid1412 A20', '- GiÃ y lÆ°á»i sáº½ lÃ  lá»±a chá»n thÃ´ng minh cho cÃ¡c chÃ ng trai muá»‘n tiáº¿t kiá»‡m thá»i gian vÃ¬ tÃ­nh tiá»‡n lá»£i.\r\n- Thiáº¿t káº¿ Ä‘áº·c sáº¯c vá»›i nhá»¯ng chi tiáº¿t nháº¥n nhÃ¡ nÆ¡i gÃ³t giÃ y mang xu hÆ°á»›ng thá»ƒ thao vÃ  nam tÃ­nh.\r\n- Sáº½ vÃ´ cÃ¹ng há»£p vá»›i nhá»¯ng chiáº¿c quáº§n lá»­ng ngang máº¯c cÃ¡ chÃ¢n, táº¡o cho chÃ ng váº» sÃ ng Ä‘iá»‡u, xu hÆ°á»›ng HÃ n Quá»‘c Ä‘ang lÃ m mÆ°u giÃ³ trong giá»›i thá»i trang tráº» hiá»‡n nay.\r\n- MÃ u sáº¯c Ä‘Æ¡n giáº£n, dá»… dÃ ng káº¿t há»£p vá»›i nhiá»u loáº¡i trang phá»¥c khÃ¡c nhau.', '323.00', '121.00', '2017-04-08 11:11:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productCode` (`productCode`),
  ADD KEY `categoryID` (`categoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
