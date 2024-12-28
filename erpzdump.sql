-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2021 at 07:49 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-47+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpz`
--

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `Bank` varchar(255) NOT NULL,
  `transaction_status` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bom`
--

INSERT INTO `bom` (`id`, `invoice_number`, `account`, `amount`, `Bank`, `transaction_status`, `balance`, `created_at`) VALUES
(1, 'JS85D', '34893567532678', '5000$', 'HSBC Bank Ohio', 'Paid', '4200$', '2020-12-08 12:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `customertable`
--

CREATE TABLE `customertable` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customertable`
--

INSERT INTO `customertable` (`id`, `customer`, `phone`, `address`, `state`, `customer_type`, `payment`, `rating`, `created_at`) VALUES
(1, 'JD Hotels', '9855890766', 'F55, street lane, Delhi', 'Delhi', 'Business', '3900$', '5', '2020-10-05 11:39:42'),
(2, 'Shekhar Singh', '8937366896', 'D 83, sector 25,  noida', 'UP', 'Business', '5000$', '4', '2020-10-05 18:34:39'),
(3, 'Jamil', '8959285447', 'Nj 6 ny ct', 'Arizona', 'Retail', '4000$', '5', '2020-11-05 23:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `shipment_id` varchar(255) NOT NULL,
  `shipment_weight` varchar(255) NOT NULL,
  `shipment_address` varchar(255) NOT NULL,
  `shipment_notes` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `invoice`, `shipment_id`, `shipment_weight`, `shipment_address`, `shipment_notes`, `created_at`) VALUES
(1, '2J55K', 'ULP223378', '5 tons', '4th street James street London', 'Bulk delivery for Ats Corp', '2020-12-07 18:06:52'),
(2, 'DFKLS8', 'UVBMSAF6SAH', '34 Ton', '8 isaac tower, Cape town', 'Cash and carry deal', '2020-12-08 13:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `download_link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `document_name`, `download_link`, `created_at`) VALUES
(1, 'Financial release of goods for current fiscal', 'https://gofile.io/d/GqVnva', '2020-12-08 14:01:17'),
(2, 'HR Press release 2019-2020', 'https://gofile.io/d/bAbP8X', '2020-12-09 05:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `id` int(11) NOT NULL,
  `Employee` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Workdays` varchar(255) DEFAULT NULL,
  `Performance` varchar(255) DEFAULT NULL,
  `Salary` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`id`, `Employee`, `Designation`, `Workdays`, `Performance`, `Salary`, `created_at`) VALUES
(1, 'Rakesh Singh', 'Sales Officer', '14 days', '5 star', '35000', '2020-11-23 17:50:20'),
(2, 'Dwayne Lin', 'Quality Manager', '22 days', '4 star', '46000', '2020-11-23 17:51:16'),
(3, 'banita', 'hr', '5', '5', '5555', '2021-01-08 08:38:01'),
(4, 'naresh', 'hr', '5', '5', '55665', '2021-01-08 08:38:16'),
(5, 'Satish', 'Ceo', '7', '5', '5565', '2021-01-08 08:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `item` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `item`, `quantity`, `unit`, `created_at`) VALUES
(1, 'Pvc Shoes DD-55', '55', 'piece', '2020-11-23 17:20:56'),
(2, 'Flotters FG5', '46', 'gram', '2020-11-23 17:20:56'),
(3, 'Bulb Holder', '55', 'crates', '2020-11-23 17:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `item`, `invoice`, `customer_name`, `customer_phone`, `customer_address`, `created_at`) VALUES
(1, 'Radiator Fan 5t', '6GWEV', 'Mark Phillip', '+78999545899', '5 vermon street , paris 59876', '2020-12-07 18:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL,
  `nav` text,
  `urn` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `nav`, `urn`, `created_at`) VALUES
(2, 'CRM', 'crm/boot.html', '2021-08-05 14:52:52'),
(3, 'HR', 'hr/boot.html', '2021-08-14 18:33:46'),
(4, 'Warehouse', 'warehouse/boot.html', '2021-08-14 18:33:46'),
(5, 'Billing', 'bom/boot.html', '2021-08-14 18:34:20'),
(6, 'Delivery', 'delivery/boot.html', '2021-08-14 18:34:20'),
(7, 'Reconciliation', 'reconciliation/boot.html', '2021-08-14 18:35:18'),
(8, 'Inventory', 'inventory/boot.html', '2021-08-14 18:35:18'),
(16, 'Operations', 'operations/boot.html', '2021-08-18 14:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `deliverytime` text,
  `workhour` text,
  `material` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`id`, `deliverytime`, `workhour`, `material`, `created_at`) VALUES
(1, '5 hour', 'complete', 'steel pipe', '2021-08-18 14:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `reconciliation`
--

CREATE TABLE `reconciliation` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `reconcile_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reconciliation`
--

INSERT INTO `reconciliation` (`id`, `item`, `reconcile_id`, `status`, `created_at`) VALUES
(1, 'Shoes Shipment', 'HREX55', 'pending', '2020-12-08 12:16:16'),
(2, 'Tyres Shipment Dock 5', 'UTX55', 'complete', '2020-12-08 12:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `supplier_phone` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier`, `supplier_phone`, `supplier_address`, `created_at`) VALUES
(1, 'Farland Industries', '+5567868809', 'Dangler Range, Shenzen, China', '2020-12-07 18:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access` text COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginstatus` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'False',
  `apikey` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `access`, `phone`, `name`, `password`, `loginstatus`, `apikey`, `type`, `address`, `created_at`) VALUES
(1, 'admin@demo.com', NULL, '9829384775', 'Admin', 'demo', 'True', 'rBPCExGq2IJDz48OAleQ', 'admin', 'D-495 Florida', '2021-08-03 13:36:13'),
(717, 'user2@demo.com', '["Material","Inventory","Warehouse"]', '9283938288', 'Ashley', 'demo', 'False', 'mA0GI0GRYyneeW2Gqn2X', 'user', '92-sa Dublin', '2021-08-09 13:36:13'),
(725, 'user@demo.com', '["Material","Inventory","Delivery"]', '9868787554', 'John Mac', 'demo', 'True', 'uqHZXhvynUDFYnIYPRnu', 'user', 'ED 67 ,Ohio', '2021-08-08 13:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `warehouse` varchar(255) NOT NULL,
  `warehouse_id` varchar(255) NOT NULL,
  `warehouse_address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `warehouse`, `warehouse_id`, `warehouse_address`, `created_at`) VALUES
(1, 'Japan Warehouse', 'JP55', '5 Lane ship port tokyo', '2020-12-07 18:06:38'),
(2, 'China Warehouse 64G', 'GFKL-CH', 'Shao road , tempen , china', '2020-12-08 10:38:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customertable`
--
ALTER TABLE `customertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reconciliation`
--
ALTER TABLE `reconciliation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customertable`
--
ALTER TABLE `customertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reconciliation`
--
ALTER TABLE `reconciliation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=726;
--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
