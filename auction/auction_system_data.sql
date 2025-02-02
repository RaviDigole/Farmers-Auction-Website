-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 04:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction_system_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `uname`, `password`) VALUES
(1, 'as@gmail.com', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(40) NOT NULL,
  `cat _name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat _name`) VALUES
(2, 'Flower'),
(3, 'Crop'),
(6, 'fruits');

-- --------------------------------------------------------

--
-- Table structure for table `farmer2_data`
--

CREATE TABLE `farmer2_data` (
  `id` int(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `adhar` bigint(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer2_data`
--

INSERT INTO `farmer2_data` (`id`, `fname`, `adhar`, `uname`, `pass`, `mail`, `mobile`, `photo`) VALUES
(11, 'Anita Raghav Hasnandini', 456789761234, 'anita', 'anita', 'an@gmail.com', 9987065423, 'upload/1_farmer.png'),
(12, 'Jemina Desuza', 238965436798, 'jemee', 'jemmi', 'jeme@gmail.com', 9087654324, 'upload/12_farmer.png'),
(13, 'Josh Little', 234567853456, 'josh', 'josh', 'josh@gmail.com', 9876543456, 'upload/13_farmer.png'),
(14, 'Kane Williamsons', 234565437865, 'kene', 'kene', 'kene@gmail.com', 8790564324, 'upload/14_farmer.png'),
(15, 'Jenellia Dcruz', 345498768432, 'jen', 'jen', 'jen@gmail.com', 9876567890, 'upload/15_farmer.png'),
(16, 'Kris Malhotra', 435678906578, 'kris', 'kris', 'kris@gmail.com', 9876543522, 'upload/16_farmer.png'),
(17, 'Adam Zamppa', 234567876543, 'zampa', 'zampa', 'zampa@gmail.com', 9876543218, 'upload/17_farmer.png'),
(18, 'Yamini Gautam', 987645392435, 'yamini', 'yamini', 'yamini@gmail.com', 9875372323, 'upload/18_farmer.png'),
(19, 'Champion Bravo', 768543928674, 'bravo', 'bravo', 'bravo@gmail.com', 8976543567, 'upload/19_farmer.png'),
(20, 'Pat Little Cummins', 675845678456, 'pat', 'pat', 'pat@gmail.com', 8977654738, 'upload/20_farmer.png'),
(21, 'Yachwad Arjun Bhanudas', 4567983567, 'arjun', 'arjun', 'arjun@gamil.com', 7896543629, 'upload/21_farmer.png'),
(23, 'Samiksha Raghav Hasnandini', 56749878679, 'aa', 'aa', 'ybs@gmail.com', 33334343, 'upload/22_farmer.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `CID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `FARMER_ID` int(11) NOT NULL,
  `purchase_farmer_id` int(11) NOT NULL,
  `auc_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `name`, `image`, `CID`, `SID`, `price`, `UID`, `stock`, `start_date`, `end_date`, `FARMER_ID`, `purchase_farmer_id`, `auc_price`) VALUES
(1, 'n', 'upload/1_product.png', 5, 3, 200, 0, 0, '2023-11-01', '2023-11-21', 5, 6, 7050),
(2, 'Table of laptop', 'upload/2_product.png', 4, 2, 1000, 2, 5, '2023-11-10', '2023-11-20', 6, 6, 5000),
(3, 'Gold Watch', 'upload/3_product.png', 5, 3, 500, 0, 1, '2023-11-02', '2023-11-20', 5, 5, 9000),
(4, 'Fan', 'upload/4_product.png', 4, 1, 300, 4, 1, '2023-11-15', '2023-11-21', 5, 5, 0),
(5, 'Black Neckless', 'upload/5_product.png', 5, 5, 300, 2, 2, '2023-11-15', '2023-11-21', 5, 5, 7000),
(6, 'Gold chain', 'upload/6_product.png', 5, 8, 2000, 4, 1, '2023-11-15', '2023-11-20', 5, 6, 2500),
(7, 'Apple', 'upload/7_product.png', 6, 16, 40, 5, 10, '2023-12-02', '2023-12-03', 11, 14, 70),
(8, 'Red Stoweberry', 'upload/8_product.png', 6, 19, 30, 5, 10, '2023-12-03', '2023-12-11', 14, 14, 78),
(9, 'carrot', 'upload/9_product.png', 6, 20, 40, 5, 100, '2023-12-05', '2023-12-08', 14, 14, 46),
(10, 'corn', 'upload/10_product.png', 3, 18, 200, 3, 20, '2023-12-06', '2023-12-10', 11, 13, 250),
(11, 'bajari', 'upload/11_product.png', 3, 21, 2000, 3, 20, '2023-12-06', '2023-12-12', 13, 14, 2050),
(12, 'bn', 'upload/12_product.png', 3, 16, 500, 5, 10, '2023-12-01', '2023-12-04', 14, 14, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(50) NOT NULL,
  `cname` int(10) NOT NULL,
  `sub_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cname`, `sub_name`) VALUES
(16, 6, 'apple'),
(17, 3, 'Wheat'),
(18, 3, 'maka'),
(19, 6, 'Stoweberry'),
(20, 6, 'red carrot'),
(21, 3, 'crop');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(50) NOT NULL,
  `unit_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit_name`) VALUES
(2, 'akki'),
(3, 'Sack'),
(5, 'kg'),
(6, 'single'),
(7, 'Double');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer2_data`
--
ALTER TABLE `farmer2_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `farmer2_data`
--
ALTER TABLE `farmer2_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
