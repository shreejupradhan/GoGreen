-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 12:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gogreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `o_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `o_bill` varchar(15) NOT NULL,
  `o_status` varchar(50) NOT NULL,
  `o_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(5) NOT NULL,
  `p_description` text NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`p_id`, `p_name`, `p_price`, `p_description`, `p_image`, `p_stock`) VALUES
(3, 'Rose', 100, 'This is a rose', 'rose.png', 50),
(4, 'Lilly', 40, 'This is a lily plant.', 'lily.png', 40),
(5, 'Hibuscus plant', 50, 'This is a plant', 'hibiscus.png', 40),
(6, 'Jsamine plant', 90, 'This is jasmine plant.', 'jasmine.png', 100),
(7, 'Sunflower Plant', 10, 'This is sunflower', 'sunflower.png', 110),
(8, 'cactus', 60, 'This is cactus', 'cactus.png', 60),
(9, 'Money Plant', 500, 'This is money plant.', 'money.png', 100),
(10, 'Mangolia plant', 60, 'This is Mangolia plant', 'magnolia.png', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `t_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `t_image` varchar(255) NOT NULL,
  `t_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `tbl_user` (`u_id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `tbl_products` (`p_id`);

--
-- Constraints for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD CONSTRAINT `tbl_testimonial_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `tbl_user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
