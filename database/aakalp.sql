-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 08:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aakalp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time(5) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `total_bill` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bill_offer`
--

CREATE TABLE `bill_offer` (
  `bill_offer_id` varchar(20) NOT NULL,
  `scheme_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` varchar(20) NOT NULL,
  `cust_name` text NOT NULL,
  `cust_addr` varchar(100) NOT NULL,
  `cust_city` text NOT NULL,
  `cust_phno` bigint(10) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_gender` text NOT NULL,
  `cust_bdate` date NOT NULL,
  `cust_pswd` varchar(100) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_addr`, `cust_city`, `cust_phno`, `cust_email`, `cust_gender`, `cust_bdate`, `cust_pswd`, `review`) VALUES
('C01', 'Manohar Deshpande', 'Jamanagiri Road', 'Dhule', 9982537420, 'mandeshpande10@gmail.com', 'Male', '1943-11-21', 'Manohar21', 'Very Good!'),
('C02', 'Vihita Nivragi', 'Siddhivinayak Nagar, Dadar', 'Mumbai', 8087823440, 'vihitn12@gmail.com', 'Female', '1978-07-12', 'vihitniv', 'Appreciated....'),
('C03', 'Arvind Shukla', 'Parola Road', 'Dhule', 9038067853, 'arvind07@gmail.com', 'Male', '1940-08-07', 'arvind123', 'Satisfied'),
('C04', 'Renuka Tare', 'Gangapur Road', 'Nashik', 9420745901, 'renutare101@gmail.com', 'Female', '1997-11-03', 'tareRenu', 'Nice Designs....'),
('C05', 'Manisha Dhodapkar', 'Vishnu Nagar', 'Aurangabad', 9372569081, 'manisha10@gmail.com', 'Female', '1971-02-15', 'manisha@15', 'Nice'),
('C06', 'Prapti Shukla', 'Parola Road', 'Dhule', 9627377537, 'ppshukla2002@gmail.com', 'Female', '2002-03-19', 'Prapti', 'Nice....');

-- --------------------------------------------------------

--
-- Stand-in structure for view `data`
-- (See below for the actual view)
--
CREATE TABLE `data` (
`cust_id` varchar(20)
,`cust_name` text
,`cust_addr` varchar(100)
,`cust_city` text
,`cust_phno` bigint(10)
,`cust_email` varchar(100)
,`cust_gender` text
,`cust_bdate` date
,`cust_pswd` varchar(100)
,`review` text
);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` varchar(20) NOT NULL,
  `emp_name` text NOT NULL,
  `emp_addr` varchar(100) NOT NULL,
  `emp_city` text NOT NULL,
  `emp_phno` bigint(10) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_bdate` date NOT NULL,
  `emp_sal` double(10,2) NOT NULL,
  `emp_department` text NOT NULL,
  `date_of_joining` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_addr`, `emp_city`, `emp_phno`, `emp_email`, `emp_bdate`, `emp_sal`, `emp_department`, `date_of_joining`) VALUES
('E01', 'Sakshi Pathak', 'Palm Road', 'Nagpur', 9445593203, 'neeta21@gmail.com', '1982-07-12', 35000.00, 'Sales', '2016-03-19'),
('E02', 'Sonam Kulkari', 'Oswal Park Thane West', 'Mumbai', 7498329860, 'Sokul98@gmail.com', '1990-12-12', 50000.00, 'sales assosiate', '2018-08-28'),
('E03', 'Vasant Gadgil', 'Laxmi Nagar', 'Pune', 9430952503, 'gadgilvasant123@gmail.com', '1964-09-04', 75000.00, 'Branch Manager', '2015-12-21'),
('E04', 'Meenal Joshi', 'Tilak Road', 'Pune', 7889902317, 'meena46@gmail.com', '1994-03-19', 40000.00, 'Designer', '2020-01-07'),
('E05', 'Rahul Vaidya', 'Pipeline road kurla', 'Mumbai', 9787108680, 'rahul2@gmail.com', '1990-10-11', 35000.00, 'Sales', '2021-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` varchar(20) NOT NULL,
  `item_name` text NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `quantity`) VALUES
('I01', 'Necklaces', 0),
('I02', 'Earrings', 0),
('I03', 'Rings', 0),
('I04', 'Bridal', 0),
('I05', 'Bangels', 0),
('I06', 'Maharashtrian', 0),
('I07', 'Mangalsutra', 0),
('I08', 'Latest', 0),
('I09', 'Thali', 0),
('I10', 'Frames', 0),
('I11', 'Puja', 0),
('I12', 'Baby', 0),
('I13', 'Silver', 0),
('I14', 'Anklets', 0),
('I15', 'Idols', 0),
('I16', 'Coins', 0);

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `item_details_id` varchar(20) NOT NULL,
  `item_id` varchar(20) NOT NULL,
  `material` text NOT NULL,
  `purity` varchar(50) NOT NULL,
  `metal percentage` varchar(50) NOT NULL,
  `net_weight` double(10,2) NOT NULL,
  `gross_weight` double(10,2) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `upassword` varchar(100) DEFAULT NULL,
  `apiKey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `upassword`, `apiKey`) VALUES
('Pradnya Shukla', 'Pradnya', '3dab978e217af5c0b97c4ff6effb08bd0078747182fe77'),
('Prapti Shukla', 'Prapti', '94e7e2ee49b8d1ddbc57cf23bf0619061ffe3af0b3c239'),
('Prashant Shukla', 'Prashant', '8b2cca283809eec7e9c28a4fcc3d581528a9b65b2829fc'),
('Sonali Sharan', 'Sonali', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `new`
-- (See below for the actual view)
--
CREATE TABLE `new` (
);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `scheme_id` varchar(20) NOT NULL,
  `scheme_name` text NOT NULL,
  `description` text NOT NULL,
  `discout` int(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`scheme_id`, `scheme_name`, `description`, `discout`, `start_date`, `end_date`, `code`) VALUES
('Off01', 'Kuber', 'Invest 1000 per month', 0, '2023-04-04', '2024-04-16', 'C0S5e8'),
('Off02', 'Dipotsav', 'Special suit on manufacturing on occasion of Diwali', 3, '2023-11-01', '2023-11-30', 'A55hQ2'),
('Off03', 'Raupya Mahotsav', 'Get 10 % discount on Silver', 10, '2023-05-01', '2023-05-30', 'Z2nR4l'),
('Off04', 'Shagun', 'Get 5% off on bridal sets', 5, '2023-05-01', '2023-07-30', 'y6H9s0'),
('Off05', 'Akshaya', 'Get 2% discount on Gold', 2, '2023-04-16', '2023-04-23', 'Mq5oc3'),
('Off06', 'Gurupushya', '5% discount on everything', 5, '2023-04-19', '2023-04-05', 'jh8Ks1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(20) NOT NULL,
  `cust_id` varchar(20) NOT NULL,
  `ot_id` varchar(20) NOT NULL,
  `content_quantity` int(100) NOT NULL,
  `tot_amount` double(10,2) NOT NULL,
  `order_given_by` varchar(20) NOT NULL,
  `payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `ot_id`, `content_quantity`, `tot_amount`, `order_given_by`, `payment`) VALUES
('O01', 'C02', 'Ot02', 1, 35000.00, 'E03', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `orders_type`
--

CREATE TABLE `orders_type` (
  `ot_id` varchar(20) NOT NULL,
  `order_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_type`
--

INSERT INTO `orders_type` (`ot_id`, `order_type`) VALUES
('Ot01', 'Item'),
('Ot02', 'Set'),
('Ot03', 'Customized');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` varchar(20) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `item_id` varchar(20) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_set`
--

CREATE TABLE `order_set` (
  `order_set_id` varchar(20) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `set_id` varchar(20) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sets`
--

CREATE TABLE `sets` (
  `set_id` varchar(20) NOT NULL,
  `set_name` text NOT NULL,
  `no_of_items` int(20) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sets`
--

INSERT INTO `sets` (`set_id`, `set_name`, `no_of_items`, `price`) VALUES
('S01', 'Puja Thali', 6, 25000.00),
('S02', 'Baby Set', 5, 30000.00),
('S03', 'Bridal Set', 6, 250000.00),
('S04', 'Gift Set', 5, 75000.00);

-- --------------------------------------------------------

--
-- Table structure for table `sets_items`
--

CREATE TABLE `sets_items` (
  `set_item_id` varchar(20) NOT NULL,
  `set_id` varchar(20) NOT NULL,
  `item_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_id` varchar(20) NOT NULL,
  `supp_name` text NOT NULL,
  `supp_addr` varchar(100) NOT NULL,
  `supp_city` text NOT NULL,
  `supp_phno` bigint(10) NOT NULL,
  `supplying_material` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supp_id`, `supp_name`, `supp_addr`, `supp_city`, `supp_phno`, `supplying_material`) VALUES
('S101', 'TT Diamond Industrial', 'Near Ashray hotel, Dahisar', 'Mumbai', 9123426575, 'Diamond'),
('S102', 'Venus Jwellers', 'Shastri Road, Mulund', 'Mumbai', 7647898910, 'Sapphire'),
('S103', 'Karan Kothari Jewellers', 'Sarafa Bazar, Nikalas Mandir Road, Itwari', 'Nagpur', 9932456357, 'Gold'),
('S104', 'Naresh Arts', 'Ganj Peth', 'Pune', 923326898, 'Silver'),
('S105', 'M.G.Adgoankar', 'Near Takale Bandhu', 'Nashik', 8422789710, 'Gold');

-- --------------------------------------------------------

--
-- Stand-in structure for view `try`
-- (See below for the actual view)
--
CREATE TABLE `try` (
`set_id` varchar(20)
,`set_name` text
,`no_of_items` int(20)
,`price` double(10,2)
);

-- --------------------------------------------------------

--
-- Structure for view `data`
--
DROP TABLE IF EXISTS `data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data`  AS SELECT `customer`.`cust_id` AS `cust_id`, `customer`.`cust_name` AS `cust_name`, `customer`.`cust_addr` AS `cust_addr`, `customer`.`cust_city` AS `cust_city`, `customer`.`cust_phno` AS `cust_phno`, `customer`.`cust_email` AS `cust_email`, `customer`.`cust_gender` AS `cust_gender`, `customer`.`cust_bdate` AS `cust_bdate`, `customer`.`cust_pswd` AS `cust_pswd`, `customer`.`review` AS `review` FROM `customer` WHERE `customer`.`cust_gender` = 'Female' ;

-- --------------------------------------------------------

--
-- Structure for view `new`
--
DROP TABLE IF EXISTS `new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new`  AS SELECT `items`.`item_name` AS `item_name`, `items`.`price` AS `price` FROM `items` ;

-- --------------------------------------------------------

--
-- Structure for view `try`
--
DROP TABLE IF EXISTS `try`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `try`  AS SELECT `sets`.`set_id` AS `set_id`, `sets`.`set_name` AS `set_name`, `sets`.`no_of_items` AS `no_of_items`, `sets`.`price` AS `price` FROM `sets` WHERE `sets`.`price` < 50000 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `or_id` (`order_id`);

--
-- Indexes for table `bill_offer`
--
ALTER TABLE `bill_offer`
  ADD PRIMARY KEY (`bill_offer_id`),
  ADD KEY `SCEME_ID` (`scheme_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`item_details_id`),
  ADD KEY `item_key` (`item_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `OT_ID` (`ot_id`),
  ADD KEY `emp_id` (`order_given_by`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `orders_type`
--
ALTER TABLE `orders_type`
  ADD PRIMARY KEY (`ot_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `iid` (`item_id`);

--
-- Indexes for table `order_set`
--
ALTER TABLE `order_set`
  ADD PRIMARY KEY (`order_set_id`),
  ADD KEY `sets` (`set_id`),
  ADD KEY `ordid` (`order_id`);

--
-- Indexes for table `sets`
--
ALTER TABLE `sets`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `sets_items`
--
ALTER TABLE `sets_items`
  ADD PRIMARY KEY (`set_item_id`),
  ADD KEY `SET_ID` (`set_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `or_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_offer`
--
ALTER TABLE `bill_offer`
  ADD CONSTRAINT `SCEME_ID` FOREIGN KEY (`scheme_id`) REFERENCES `offers` (`scheme_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_details`
--
ALTER TABLE `item_details`
  ADD CONSTRAINT `item_key` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `OT_ID` FOREIGN KEY (`ot_id`) REFERENCES `orders_type` (`ot_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cust_id` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emp_id` FOREIGN KEY (`order_given_by`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `iid` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_set`
--
ALTER TABLE `order_set`
  ADD CONSTRAINT `ordid` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sets` FOREIGN KEY (`set_id`) REFERENCES `sets` (`set_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sets_items`
--
ALTER TABLE `sets_items`
  ADD CONSTRAINT `SET_ID` FOREIGN KEY (`set_id`) REFERENCES `sets` (`set_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_id` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
