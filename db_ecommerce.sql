-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- হোষ্ট: 127.0.0.1
-- তৈরী করতে ব্যবহৃত সময়: জুল 14, 2015 at 03:37 AM
-- সার্ভার সংস্করন: 5.6.24
-- পিএইছপির সংস্করন: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ডাটাবেইজ: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `about_id` int(4) NOT NULL,
  `about_description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `welcome_msg` varchar(256) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_description`, `address`, `telephone`, `fax`, `welcome_msg`) VALUES
(5, 'Buy or Sell what you want&nbsp;', 'Niketon,Gulshan', '01673649934', '36921233597', 'Easiest way to buy or sell&nbsp;');

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_full_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_lavel` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_full_name`, `admin_email_address`, `admin_password`, `access_lavel`) VALUES
(5, 'ananya', 'adminananya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(17, 'Furniture', '', 1),
(16, 'Books', '', 1),
(15, 'Computer', '', 1),
(11, 'Dress kurti', 'best dress', 1),
(12, 'Electronics', 'best electronics', 1),
(14, 'Mobile', '', 1),
(18, '0', '0', 0),
(19, '0', '0', 0),
(20, '0', '0', 0),
(21, 'h', '', 0);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(7) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip_code` varchar(4) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `company_name`, `address`, `gender`, `city`, `country`, `zip_code`, `activation_status`) VALUES
(16, 'sumi', 'akthar', 'sumi@yahoo.com', '1234', 'svd', 'svd', 'female', 'London', '222', '345', 0),
(14, 'ananya', 'dey', 'ananya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'abcd', 'abcd', 'female', 'dhaka', '18', '1204', 0),
(15, 'archita', 'mitra', 'archita@yahoo.com', '123', 'asdf', 'asdf', 'female', 'delhi', '99', '3456', 0);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_manufacturer`
--

CREATE TABLE IF NOT EXISTS `tbl_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(1, 'samsung R&D', 'one of the best company in world', 1),
(3, 'Ericson', 'best company', 1),
(4, 'Hatil', '', 1),
(5, 'Arong', '', 1),
(6, 'Apple', '', 1),
(7, 'Anonno Prokashoni', '', 1),
(8, 'HarperCollins', 'World Leading Book Publisher', 1);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(7) NOT NULL,
  `customer_id` int(7) NOT NULL,
  `shipping_id` int(7) NOT NULL,
  `payment_id` int(7) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(15) NOT NULL DEFAULT 'Pending',
  `order_comments` text NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_comments`, `order_date_time`) VALUES
(14, 14, 15, 14, 11498.85, 'Pending', '', '2015-07-09 05:05:39'),
(13, 15, 14, 13, 10350.00, 'Pending', '', '2015-07-03 04:08:29'),
(12, 14, 14, 12, 460.00, 'Pending', '', '2015-07-03 04:06:19'),
(11, 14, 14, 11, 8970.00, 'Pending', '', '2015-07-03 04:04:57'),
(10, 14, 14, 10, 8970.00, 'Pending', '', '2015-07-03 04:03:15');

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_order_details`
--

CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(7) NOT NULL,
  `product_id` int(4) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_sales_quantity` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_price`, `product_name`, `product_sales_quantity`) VALUES
(21, 14, 15, 9999.00, 'c', 1),
(20, 13, 18, 9000.00, 'Anarkali', 1),
(19, 12, 9, 400.00, 'Table', 1),
(18, 11, 12, 7000.00, 'wardrobes', 1),
(17, 11, 8, 800.00, 'Chair', 1),
(16, 10, 12, 7000.00, 'wardrobes', 1),
(15, 10, 8, 800.00, 'Chair', 1);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` int(7) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_status` varchar(15) NOT NULL DEFAULT 'Pending',
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_status`, `payment_date_time`) VALUES
(13, 'cash_on_delivery', 'Pending', '2015-07-03 04:08:29'),
(12, 'cash_on_delivery', 'Pending', '2015-07-03 04:06:19'),
(11, 'cash_on_delivery', 'Pending', '2015-07-03 04:04:57'),
(10, 'paypal', 'Pending', '2015-07-03 04:03:15'),
(14, 'paypal', 'Pending', '2015-07-09 05:05:39');

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacturer_id` int(3) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `product_image1` varchar(256) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_quantity` int(3) NOT NULL,
  `featured_product` tinyint(1) NOT NULL DEFAULT '0',
  `created_date_time` varchar(256) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_description`, `product_image`, `product_image1`, `product_price`, `product_quantity`, `featured_product`, `created_date_time`, `publication_status`) VALUES
(8, 'Chair', 17, 4, 'good', 'images/product_images/chair3.jpg', 'images/product_images/image_thumb/chair3_thumb.jpg', '800', -2, 1, '2015-07-07', 1),
(9, 'Table', 17, 4, '', 'images/product_images/mccoy_pedestal_table.jpg', 'images/product_images/image_thumb/mccoy_pedestal_table_thumb.jpg', '400', 0, 1, '2015-07-02 21:06:19', 1),
(10, 'Bed', 17, 4, '', 'images/product_images/bed.jpg', 'images/product_images/image_thumb/bed_thumb.jpg', '3000', 1, 1, '2015-06-27 00:49:38', 1),
(11, 'Shelf', 17, 4, '', 'images/product_images/Triple_storage_peg_shelf.jpg', 'images/product_images/image_thumb/Triple_storage_peg_shelf_thumb.jpg', '1000', 2, 1, '2015-06-19 00:00:00', 1),
(12, 'wardrobes', 17, 4, '', 'images/product_images/wardrobe.jpg', 'images/product_images/image_thumb/wardrobe_thumb.jpg', '7000', 0, 1, '2015-07-02 21:04:57', 1),
(18, 'Anarkali', 11, 5, '', 'images/product_images/10945596_752610431487630_1552163500497011164_n.jpg', 'images/product_images/image_thumb/10945596_752610431487630_1552163500497011164_n_thumb.jpg', '9000', -4, 1, '2015-07-02 21:08:29', 1),
(19, 'mouse', 12, 3, 'best', 'images/product_images/images.jpg', 'images/product_images/image_thumb/images_thumb.jpg', '500', 2, 1, '2015-07-07', 1),
(20, 'imac', 15, 6, '<br>', 'images/product_images/imac.jpg', 'images/product_images/image_thumb/imac_thumb.jpg', '100000', 2, 1, '22/5/2015', 1),
(21, 'imac2', 15, 6, '', 'images/product_images/3.jpg', 'images/product_images/image_thumb/3_thumb.jpg', '150000', 1, 1, '23/4/2015', 1),
(22, 'samsung', 15, 1, '', 'images/product_images/4.jpg', 'images/product_images/image_thumb/4_thumb.jpg', '60000', 1, 1, '26/3/2015', 1),
(23, 'LOST', 16, 8, '', 'images/product_images/9.jpg', 'images/product_images/image_thumb/9_thumb.jpg', '4000', 4, 1, '12/2/2015', 1),
(24, 'The Last Wild', 16, 8, '', 'images/product_images/10.jpg', 'images/product_images/image_thumb/10_thumb.jpg', '300', 2, 1, '20/2/2015', 1),
(25, 'Winter War', 16, 8, '', 'images/product_images/8.jpg', 'images/product_images/image_thumb/8_thumb.jpg', '600', 1, 0, '12/2/2015', 1),
(26, 'samsung', 14, 1, '', 'images/product_images/smartphone.jpg', 'images/product_images/image_thumb/smartphone_thumb.jpg', '15000', 1, 1, '12/6/2015', 1);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `tbl_shipping`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(7) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip_code` varchar(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `full_name`, `mobile_no`, `email_address`, `company_name`, `address`, `city`, `country`, `zip_code`) VALUES
(14, 'ananya dey', '09876', 'ananya@gmail.com', 'abcd', 'abcd', 'Dhaka', '18', '1204'),
(15, 'anna', '23234', 'ananya@gmail.com', 'fdv', 'fgfhgg', 'fg', '18', '34');

--
-- স্তুপকৃত টেবলের ইনডেক্স
--

--
-- টেবিলের ইনডেক্সসমুহ `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- টেবিলের ইনডেক্সসমুহ `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- স্তুপকৃত টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT)
--

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
