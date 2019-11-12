-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2017 at 02:16 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tammanag_realestate1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `commission` decimal(10,2) DEFAULT NULL,
  `status` varchar(7) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `awallets`
--

CREATE TABLE `awallets` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `debit` decimal(10,2) DEFAULT NULL,
  `credit` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `awallet_histories`
--

CREATE TABLE `awallet_histories` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `deals_payment_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `type` varchar(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `address` mediumtext,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `pan` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `status` varchar(7) DEFAULT 'Active',
  `last_login` datetime DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `id_proof` varchar(100) DEFAULT NULL,
  `address_proof` varchar(100) DEFAULT NULL,
  `presetcode` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `email`, `password`, `phone`, `name`, `father_name`, `address`, `district`, `state`, `pincode`, `nationality`, `pan`, `dob`, `occupation`, `status`, `last_login`, `photo`, `id_proof`, `address_proof`, `presetcode`, `created`, `modified`) VALUES
(1, 'user@demo.com', 'e41f2b7320732d52cbc55c70a7e96844259d512d9087dde5ff830723b2aa82dc', '', 'Demo Client Name 1', 'Demo', 'Demo', 'Demo', 'Demo', '0', 'Demo', '', '2015-10-10', '', 'Active', NULL, NULL, NULL, NULL, NULL, '2015-10-10 13:06:55', '2015-12-17 10:55:56'),
(2, 'root@localhost.com', 'e41f2b7320732d52cbc55c70a7e96844259d512d9087dde5ff830723b2aa82dc', '', 'Demo Client Name 2', 'Demo', 'Demo', 'Demo', 'Demo', '0', '', '', '1997-12-17', '', 'Active', NULL, NULL, NULL, NULL, NULL, '2015-12-17 10:53:12', '2015-12-17 10:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `clients_coapplicants`
--

CREATE TABLE `clients_coapplicants` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `address` mediumtext,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `pan` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `id_proof` varchar(100) DEFAULT NULL,
  `address_proof` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `domain_name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `meta_title` text,
  `meta_desc` text,
  `timezone` varchar(100) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `sms_notification` tinyint(1) DEFAULT NULL,
  `email_notification` tinyint(1) DEFAULT NULL,
  `guest_login` tinyint(1) DEFAULT NULL,
  `front_end` tinyint(1) DEFAULT NULL,
  `slides` tinyint(4) DEFAULT NULL,
  `translate` tinyint(4) DEFAULT '0',
  `contact` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `date_format` varchar(25) DEFAULT NULL,
  `address` text,
  `account_details` text,
  `short_name` varchar(6) DEFAULT NULL,
  `due_days` int(11) DEFAULT NULL,
  `late_fees` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `name`, `organization_name`, `domain_name`, `email`, `meta_title`, `meta_desc`, `timezone`, `author`, `sms_notification`, `email_notification`, `guest_login`, `front_end`, `slides`, `translate`, `contact`, `photo`, `currency`, `date_format`, `address`, `account_details`, `short_name`, `due_days`, `late_fees`, `created`, `modified`) VALUES
(1, 'jhhghjghj', 'mbhmb', 'tammanager.com/abcd/', 'admin@demo.com', 'Real CRM', 'Real CRM', 'Asia/Kolkata', '', 0, 1, 0, 0, 1, 0, '1234567890, 1234567891', '42a7f37b3c078bba3e864323cc1d7128.png', '537f17a76864d11438d25ff5af7641a5.gif', 'd,m,Y,h,i,s,A,-,:', 'Site Office: DEMO Demo, Flat no. 101, Near Demo School, Behind Demo city mall, Demo Road, Demo, Demo (w) - 400615', '\"M/s. DEMO INFRASTRACTURE PVT. LTD.\"(Bank Name) DEMO BANK, Demo Branch, Account No :- \"005705014187\"', 'DEMO', 15, 18, '2015-11-20 20:56:04', '2017-11-08 16:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `link_name` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `is_url` varchar(8) DEFAULT 'Internal',
  `url` varchar(255) DEFAULT NULL,
  `url_target` varchar(6) DEFAULT NULL,
  `main_content` longtext,
  `page_url` varchar(255) DEFAULT NULL,
  `cols` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT '1',
  `published` varchar(11) DEFAULT 'Published',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `link_name`, `page_name`, `is_url`, `url`, `url_target`, `main_content`, `page_url`, `cols`, `ordering`, `views`, `published`, `created`, `modified`) VALUES
(1, 'About Us', 'About Us', 'Internal', '', '_self', '<p>Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui. Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui. Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui. Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui. Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus.</p>', 'About-Us', NULL, 1, 16, 'Published', '2015-10-17 13:22:14', '2015-10-25 20:00:27'),
(2, 'Contact Us', 'Contact Us', 'Internal', '', '_self', '<div class=\"col-md-6\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<h3 class=\"section-title\">Office Address</h3>\r\n<div class=\"contact-info\">\r\n<h5>Address</h5>\r\n<p>5th Street, Demo View - Demo States</p>\r\n<h5>Email</h5>\r\n<p>info@demo.com</p>\r\n<h5>Phone</h5>\r\n<p>+00 123 1234 123</p>\r\n</div>\r\n</div>\r\n<div class=\"col-md-6\">\r\n<h3 class=\"section-title\">Timings</h3>\r\n<div class=\"contact-info\">\r\n<h5>Monday - Friday</h5>\r\n<p>09:00 AM - 6:30 PM</p>\r\n<h5>Saturday</h5>\r\n<p>Closed</p>\r\n<h5>Sunday</h5>\r\n<p>Closed</p>\r\n</div>\r\n</div>\r\n</div>\r\n<h3 class=\"section-title\">Get connected</h3>\r\n<p>Lorem ipsumn qersl ioinm sersoe non urna dolor sit amet, consectetur piesn qersl ioinm sersoe non urna dolor aecena.</p>\r\n</div>', 'Contact-Us', NULL, 2, 3, 'Unpublished', '2015-10-17 13:28:43', '2015-10-20 18:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `photo`) VALUES
(1, 'Australia Dollar AUD', '64238c6d767ab034b04c4681295567a0.gif'),
(2, 'Brunei Darussalam Dollar BND', '53e34059e7bfe4db945404e901c4f396.gif'),
(3, 'Cambodia Riel KHR', 'aaa57dd0012641cdee2c8d6484db8238.gif'),
(4, 'China Yuan Renminbi CNY ', '5586a267c542d0f49b6c22c5c978bf23.gif'),
(5, 'Hong Kong Dollar HKD', '200ec0145292d85b380d8c4f570f9aa9.gif'),
(6, 'India Rupee INR', '537f17a76864d11438d25ff5af7641a5.gif'),
(7, 'Indonesia Rupiah IDR', '6d27b2f196ce9d74b10d12111d9838b0.gif'),
(8, 'Japan Yen JPY', '3a7f86a61af62ddab4737f3df6db4807.gif'),
(9, 'Korea (North) Won KPW', 'cc0ad4a7ba48bedd9cf57bc4125fc2c9.gif'),
(10, 'Korea (South) Won KRW', '28fdcdac33f7429afe6bce2e08dd47c2.gif'),
(11, 'Laos Kip LAK', 'f72da580f617ee32683202aeee564df0.gif'),
(12, 'Malaysia Ringgit MYR', 'e86af0a98bf7398c27a5ad30319d82ad.gif'),
(13, 'Nigeria Naira NGN', '2cdb9ceeae309e948c6bd0a90e30ffec.gif'),
(14, 'Pakistan Rupee PKR', 'bac3525bb97f15f806a74d248f71d6b2.gif'),
(15, 'Philippines Peso PHP', 'c46c38e2701d3c3bd6ee442c93befd04.gif'),
(16, 'Singapore Dollar SGD', '2c1e20836f56700b13a08477216a61fb.gif'),
(17, 'Sri Lanka Rupee LKR', '38bb6c10813d0a1eb9c878bcea2b7570.gif'),
(18, 'Taiwan New Dollar TWD', 'a558976f34bf485cb72f61656595536c.gif'),
(19, 'Thailand Baht THB', '3c3bcc74de1fd038ec2d7e0dfe2965bf.gif'),
(20, 'United Kingdom Pound GBP', 'df773c6ce35993089139c888ec5a3210.gif'),
(21, 'United States Dollar USD', 'ef1e801ee13715b41e55c16886597878.gif'),
(22, 'Viet Nam Dong VND', '5a5b143e1685239abd85f0b367d4669b.gif');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `properties_flat_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `recurring` varchar(15) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `remarks` mediumtext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `client_id`, `property_id`, `properties_flat_id`, `plan_id`, `agent_id`, `invoice_no`, `date`, `recurring`, `discount`, `total_amount`, `remarks`, `created`, `modified`) VALUES
(1, 1, 2, 5, 6, NULL, 'DEMO-2015-0001', '2015-12-16', 'M', NULL, '4562320.00', '', '2015-12-17 11:08:23', '2015-12-17 11:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `deals_payments`
--

CREATE TABLE `deals_payments` (
  `id` int(11) NOT NULL,
  `receipt_no` varchar(30) DEFAULT NULL,
  `deal_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `paymenttype_id` int(11) NOT NULL,
  `plans_payment_id` int(11) NOT NULL,
  `emi` decimal(10,2) DEFAULT NULL,
  `extra_payment` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `tax_amount` decimal(10,2) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emailsettings`
--

CREATE TABLE `emailsettings` (
  `id` int(11) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `host` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `port` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emailsettings`
--

INSERT INTO `emailsettings` (`id`, `type`, `host`, `username`, `password`, `port`) VALUES
(1, 'Mail', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emailtemplates`
--

CREATE TABLE `emailtemplates` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `status` varchar(11) DEFAULT 'Published',
  `type` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emailtemplates`
--

INSERT INTO `emailtemplates` (`id`, `name`, `description`, `status`, `type`) VALUES
(1, 'Client Login Credentials', '<p>Dear $clientName,</p><p>Congratulations! Your $siteName account is now active.</p><p>Email Address : $email</p><p>Password: $password</p><p>If you need, you can reset your password at any time.</p><p>To get started, log on:<a href=\"$url\" target=\"_blank\">$url</a></p><p>If you have any questions or need assistance, please contact us.</p><p> </p><p>Best Regards,</p><p>$siteName</p><p>$contactNo</p>', 'Published', 'CLC'),
(2, 'Client Forgot Password', '<p>Dear $clientName,</p><p>Please click the following link to finish forgot password:</p><p><a href=\"$url\" target=\"_blank\">$url</a></p><p><strong>Note: If the link does not open directly, please copy and paste the url into your internet browser.</strong></p><p>Verification Code: $code</p><p>Sincerely,</p><p>$siteName</p><p>$contactNo</p>', 'Published', 'CFP'),
(3, 'Admin Forgot Password', '<p>Dear $name,</p><p>Please click the following link to finish forgot password:</p><p><a href=\"$url\" target=\"_blank\">$url</a></p><p><strong>Note: If the link does not open directly, please copy and paste the url into your internet browser.</strong></p><p>Verification Code: $code</p><p>Sincerely,</p><p>$siteName</p><p>$contactNo</p>', 'Published', 'AFP'),
(4, 'Admin Forgot Username', '<p>Dear $name,</p><p>You have forgot User Name. your username is $userName</p><p>Sincerely,</p><p>$siteName</p><p>$contactNo</p><p>$contactNo</p>', 'Published', 'AFU'),
(5, 'User Login Credentials', '<p>Dear $name,</p><p>Congratulations! Your $siteName account is now active.</p><p>Email Address : $email</p><p>Username : $userName</p><p>Password: $password</p><p>If you need, you can reset your password at any time.</p><p>To get started, log on:<a href=\"$url\" target=\"_blank\">$url</a></p><p>If you have any questions or need assistance, please contact us.</p><p> </p><p>Best Regards,</p><p>$siteName</p><p>$contactNo</p>', 'Published', 'ULC');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `expense_category_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `invoice_no` varchar(25) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `invoice_amount` decimal(10,2) DEFAULT NULL,
  `remarks` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expenses_payments`
--

CREATE TABLE `expenses_payments` (
  `id` int(11) NOT NULL,
  `expense_id` int(11) NOT NULL,
  `paymenttype_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` varchar(7) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expense_categories`
--

INSERT INTO `expense_categories` (`id`, `name`, `status`) VALUES
(1, 'Salary', 'Active'),
(2, 'Cement', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `expense_category_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `invoice_no` varchar(25) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `invoice_qty` int(11) DEFAULT NULL,
  `remarks` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inventories_balances`
--

CREATE TABLE `inventories_balances` (
  `id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `follow_up` datetime DEFAULT NULL,
  `remarks` mediumtext,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `model_name` varchar(100) DEFAULT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `controller_name` varchar(100) DEFAULT NULL,
  `action_name` varchar(100) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `parent_id` int(1) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `published` varchar(3) DEFAULT 'Yes',
  `sel_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `model_name`, `page_name`, `controller_name`, `action_name`, `icon`, `parent_id`, `ordering`, `published`, `sel_name`) VALUES
(1, 'Dashboard', 'Dashboard', 'Dashboards', 'index', 'fa fa-dashboard fa-fw', 0, 1, 'Yes', NULL),
(2, 'Clients', 'Clients', 'Clients', 'index', 'fa fa-users fa-fw', 0, 7, 'Yes', 'Coapplicants'),
(3, 'Properties', 'Properties', 'Properties', 'index', 'fa fa-building-o fa-fw', 0, 4, 'Yes', 'properties_documents,properties_photos,properties_flats'),
(4, 'Deals', 'Deals', 'Deals', 'index', 'fa fa-thumbs-up fa-fw', 0, 8, 'Yes', 'deals_payments,plans_payments,PlansPayments'),
(5, 'Leads', 'Leads', 'Leads', 'index', 'fa fa-rocket fa-fw', 0, 6, 'Yes', NULL),
(6, 'Sales Report', 'Sales Report', 'Salesreports', 'index', NULL, 29, 12, 'Yes', NULL),
(7, 'Configuration', 'Configurations', NULL, NULL, 'fa fa-cogs fa-fw', 0, 88, 'Yes', NULL),
(9, 'Help', 'Help', 'Helps', 'index', 'fa fa-question-circle fa-fw', 0, 99, 'Yes', NULL),
(10, 'Users', 'Users', 'Users', 'index', 'fa fa-user fa-fw', 0, 77, 'Yes', NULL),
(15, 'Invoices', 'Invoices', NULL, NULL, 'fa fa-thumb-tack fa-fw', 0, 9, 'Yes', 'Invpastdues,Invpaids'),
(16, 'Property', 'Property Photo', 'PropertiesPhotos', 'index', NULL, 3, 99, 'No', NULL),
(17, 'Property', 'Property Document', 'PropertiesDocuments', 'index', NULL, 3, 99, 'No', NULL),
(18, 'Configuration', 'Tax', 'Taxes', 'index', NULL, 7, 5, 'Yes', NULL),
(19, 'Configuration', 'Payment Type', 'Paymenttypes', 'index', NULL, 7, 4, 'Yes', NULL),
(20, 'Expense / Inventory', 'Category', 'Expensecategories', 'index', NULL, 21, 1, 'Yes', NULL),
(21, 'Expense / Inventory', 'Expense / Inventory', NULL, NULL, 'fa fa-shopping-cart', 0, 10, 'Yes', 'expenses_payments,inventories_balances'),
(22, 'Expense Report', 'Expense Report', 'Expensereports', 'index', NULL, 29, 13, 'Yes', NULL),
(23, 'Profit Report', 'Profit Report', 'Profitreports', 'index', NULL, 29, 14, 'Yes', NULL),
(24, 'Projects', 'Projects', 'Projects', 'index', 'fa fa-server fa-fw', 0, 2, 'Yes', 'projects_photos,projects_layoutplans,projects_locationmaps'),
(25, 'Purchase', 'Purchase', 'Purchases', 'index', 'fa fa-shopping-cart fa-fw', 0, 3, 'Yes', 'purchases_payments'),
(26, 'Purchase Report', 'Purchase Report', 'Purchasereports', 'index', NULL, 29, 11, 'Yes', NULL),
(27, 'Purchase', 'Purchase Payment', 'purchases_payments', 'index', NULL, 25, 99, 'No', NULL),
(28, 'Vendor / Staff', 'Vendor / Staff', 'Vendors', 'index', NULL, 21, 2, 'Yes', NULL),
(29, 'Reports', 'Reports', NULL, NULL, 'fa fa-table fa-fw', 0, 12, 'Yes', NULL),
(30, 'Configuration', 'General', 'Configurations', 'index', NULL, 7, 1, 'Yes', NULL),
(31, 'Expense / Inventory', 'Expenses', 'Expenses', 'index', NULL, 21, 3, 'Yes', NULL),
(32, 'Configuration', 'Currency', 'Currencies', 'index', NULL, 7, 4, 'Yes', NULL),
(33, 'Expense / Inventory', 'Expenses Payments', 'expenses_payments', 'index', NULL, 21, 99, 'No', NULL),
(34, 'Deals', 'Dels Payments', 'deals_payments', 'index', NULL, 4, 99, 'No', NULL),
(35, 'Configuration', 'Units', 'Units', 'index', NULL, 7, 6, 'Yes', NULL),
(36, 'Properties', 'My Flats/Plots', 'Flats', 'index', NULL, 3, 99, NULL, NULL),
(37, 'Agent', 'Agents', 'Agents', 'index', 'fa fa-user-secret', 0, 20, 'Yes', 'awallet_histories'),
(38, 'Plans', 'Plans', 'Plans', 'index', 'fa fa-briefcase', 0, 5, 'Yes', NULL),
(39, 'Deal', 'Plan Payments', 'PlansPayments', 'index', NULL, NULL, 99, 'No', NULL),
(40, 'Configuration', 'Extra Payments', 'Etcpayments', 'index', NULL, 7, 3, NULL, NULL),
(41, 'Configuration', 'Organisation Logo', 'Weblogos', 'index', NULL, 7, 8, 'Yes', NULL),
(42, 'Invoices', 'Balance Invoices', 'Invpastdues', 'index', NULL, 15, 1, 'Yes', NULL),
(43, 'Invoices', 'Paid Invoices', 'Invpaids', 'index', NULL, 15, 2, 'Yes', NULL),
(44, 'Email & SMS', 'Email & SMS', NULL, NULL, 'fa fa-shield', 0, 21, 'Yes', NULL),
(45, 'Email & SMS', 'Email Setting', 'Emailsettings', 'index', NULL, 44, 1, 'Yes', NULL),
(46, 'Email & SMS', 'Email Templates', 'Emailtemplates', 'index', NULL, 44, 2, 'Yes', NULL),
(47, 'Email & SMS', 'Send Emails', 'Sendemails', 'index', NULL, 44, 3, 'Yes', NULL),
(48, 'Email & SMS', 'SMS Setting', 'Smssettings', 'index', NULL, 44, 4, 'Yes', NULL),
(49, 'Email & SMS', 'SMS Templates', 'Smstemplates', 'index', NULL, 44, 5, 'Yes', NULL),
(50, 'Email & SMS', 'Send SMS', 'Sendsms', 'index', NULL, 44, 6, 'Yes', NULL),
(51, 'Content', 'Contents', NULL, NULL, 'fa fa-newspaper-o', 0, 22, 'Yes', NULL),
(52, 'Content', 'Pages', 'Contents', 'pages', NULL, 51, 1, 'Yes', NULL),
(53, 'Content', 'Slides', 'Slides', 'index', NULL, 51, 2, 'Yes', NULL),
(54, 'Expense / Inventory', 'Inventory', 'Inventories', 'index', NULL, 21, 4, 'Yes', 'inventories_balances'),
(55, 'Expense / Inventory', 'Inventories Entry', 'inventories_balances', 'index', NULL, 21, 99, 'No', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_rights`
--

CREATE TABLE `page_rights` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `ugroup_id` int(11) NOT NULL,
  `save_right` int(1) DEFAULT NULL,
  `update_right` int(1) DEFAULT NULL,
  `view_right` int(1) DEFAULT NULL,
  `search_right` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_rights`
--

INSERT INTO `page_rights` (`id`, `page_id`, `ugroup_id`, `save_right`, `update_right`, `view_right`, `search_right`) VALUES
(122, 2, 2, 0, 0, 1, 0),
(123, 1, 2, 0, 0, 1, 0),
(124, 33, 2, 0, 0, 1, 0),
(125, 21, 2, 0, 0, 1, 0),
(126, 31, 2, 0, 0, 1, 0),
(127, 9, 2, 0, 0, 1, 0),
(128, 15, 2, 0, 0, 1, 0),
(129, 34, 2, 0, 0, 1, 0),
(130, 4, 2, 0, 0, 1, 0),
(131, 5, 2, 0, 0, 1, 0),
(132, 3, 2, 0, 0, 1, 0),
(133, 16, 2, 0, 0, 1, 0),
(134, 17, 2, 0, 0, 1, 0),
(135, 27, 2, 0, 0, 1, 0),
(136, 25, 2, 0, 0, 1, 0),
(137, 28, 2, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `paymenttypes`
--

CREATE TABLE `paymenttypes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paymenttypes`
--

INSERT INTO `paymenttypes` (`id`, `name`) VALUES
(1, 'Bank Transfer'),
(2, 'Cash'),
(3, 'Cheque'),
(4, 'PayPal'),
(5, 'Debit Card');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `installment` int(11) DEFAULT NULL,
  `status` varchar(7) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `installment`, `status`) VALUES
(1, '1 Installment', 1, 'Active'),
(2, '2 Installment', 2, 'Active'),
(3, '3 Installment', 3, 'Active'),
(4, '4 Installment', 4, 'Active'),
(5, '5 Installment', 5, 'Active'),
(6, '6 Installment', 6, 'Active'),
(7, '7 Installment', 7, 'Active'),
(8, '8 Installment', 8, 'Active'),
(9, '9 Installment', 9, 'Active'),
(10, '10 Installment', 10, 'Active'),
(11, '11 Installment', 11, 'Active'),
(12, '12 Installment', 12, 'Active'),
(13, '13 Installment', 13, 'Active'),
(14, '14 Installment', 14, 'Active'),
(15, '15 Installment', 15, 'Active'),
(16, '16 Installment', 16, 'Active'),
(17, '17 Installment', 17, 'Active'),
(18, '18 Installment', 18, 'Active'),
(19, '19 Installment', 19, 'Active'),
(20, '20 Installment', 20, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `plans_payments`
--

CREATE TABLE `plans_payments` (
  `id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plans_payments`
--

INSERT INTO `plans_payments` (`id`, `deal_id`, `name`, `amount`, `date`) VALUES
(1, 1, 'Booking Amount', 760385, '2015-12-17'),
(2, 1, '1 Installment', 760387, '2016-01-17'),
(3, 1, '2 Installment', 760387, '2016-02-17'),
(4, 1, '3 Installment', 760387, '2016-03-17'),
(5, 1, '4 Installment', 760387, '2016-04-17'),
(6, 1, '5 Installment', 760387, '2016-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `nearest_location` varchar(255) DEFAULT NULL,
  `reach` text,
  `purchase` text,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `city`, `state`, `address`, `nearest_location`, `reach`, `purchase`, `description`) VALUES
(1, 'Project A', 'Clinton', 'Missisippie', '76 Clinton', 'Demo Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a pharetra metus. Fusce tincidunt eros eget bibendum consectetur. Curabitur interdum accumsan ante quis imperdiet. Ut lacinia sollicitudin ligula at laoreet. Aliquam ultrices eros sed ligula volutpat vulputate. Sed laoreet tristique leo, ac accumsan nunc blandit sed. Proin eu congue arcu. Nullam eleifend congue leo, nec vulputate ipsum eleifend sed. In mollis sapien in facilisis dictum. Aliquam erat volutpat. Nullam varius purus a nisi suscipit, ut egestas nisi volutpat.', 'Duis sed orci ac est convallis suscipit. Phasellus ultrices ipsum sit amet tellus lobortis auctor. Curabitur porttitor nisl orci, a feugiat nunc porttitor id. Fusce blandit mattis tristique. Nullam nec convallis ex. Etiam hendrerit diam neque, ac eleifend ante consectetur sed. Mauris malesuada, est eget fringilla convallis, nibh nisl accumsan nisl, sed ultrices arcu orci ut turpis. Aenean eget gravida elit. Proin orci lorem, congue et sagittis vel, ullamcorper eu felis. Etiam aliquam eu nisl aliquet sollicitudin. Etiam non diam sodales, vehicula sem vel, malesuada sem. Etiam at mi non enim imperdiet dapibus ac non quam. Praesent cursus quam non lacus tincidunt elementum. Pellentesque cursus tempor accumsan.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.'),
(2, 'Project B', 'Springfield', 'Illinois', '34, Springfield.', 'Massachusetts Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Pellentesque aliquet, tortor eu elementum sodales, tortor libero feugiat quam, a tristique metus est et tortor. Duis vitae cursus mauris. Donec ultrices libero nec quam interdum faucibus. Proin commodo eu augue sit amet tempor. Integer ullamcorper ullamcorper facilisis. Integer pretium, augue quis posuere elementum, velit neque lobortis nisi, eget ornare nisi nisl non orci. Ut quam ante, ornare sit amet maximus finibus, sollicitudin vitae libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc maximus at erat in bibendum. Curabitur facilisis felis ante, et volutpat eros auctor vitae. Donec mollis elit at enim feugiat facilisis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Duis laoreet ante ex, sed bibendum velit tincidunt vel. Sed id velit non dolor viverra ornare. Maecenas pretium nibh vel nisi hendrerit, ac pharetra eros feugiat. Aenean sollicitudin lobortis augue a dapibus. Nam tincidunt dapibus eros, hendrerit vehicula ex interdum non. ');

-- --------------------------------------------------------

--
-- Table structure for table `projects_layoutplans`
--

CREATE TABLE `projects_layoutplans` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects_layoutplans`
--

INSERT INTO `projects_layoutplans` (`id`, `project_id`, `photo`, `dir`) VALUES
(14, 1, '2015-10-16-9286.jpg', 'projectslayoutplans'),
(15, 3, '2015-10-16-13661.jpg', 'projectslayoutplans'),
(16, 3, '2015-10-16-16082.jpg', 'projectslayoutplans'),
(17, 4, '2015-10-16-7935.jpg', 'projectslayoutplans'),
(18, 4, '2015-10-16-5324.jpg', 'projectslayoutplans'),
(19, 1, '2015-10-16-15465.jpg', 'projectslayoutplans'),
(20, 2, '2015-10-20-20520.jpg', 'projectslayoutplans');

-- --------------------------------------------------------

--
-- Table structure for table `projects_locationmaps`
--

CREATE TABLE `projects_locationmaps` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects_locationmaps`
--

INSERT INTO `projects_locationmaps` (`id`, `project_id`, `photo`, `dir`) VALUES
(15, 1, '2015-10-16-30215.jpg', 'projectslocationmaps'),
(16, 3, '2015-10-16-27555.png', 'projectslocationmaps'),
(17, 3, '2015-10-16-11936.jpg', 'projectslocationmaps'),
(18, 4, '2015-10-16-30258.jpg', 'projectslocationmaps'),
(19, 2, '2015-10-20-30932.jpg', 'projectslocationmaps');

-- --------------------------------------------------------

--
-- Table structure for table `projects_photos`
--

CREATE TABLE `projects_photos` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects_photos`
--

INSERT INTO `projects_photos` (`id`, `project_id`, `photo`, `dir`) VALUES
(1, 2, '2015-10-13-22388.jpg', 'projectsphotos'),
(3, 2, '2015-10-13-17450.jpg', 'projectsphotos'),
(4, 2, '2015-10-13-539.jpg', 'projectsphotos'),
(5, 3, '2015-10-13-28577.jpg', 'projectsphotos'),
(10, 1, '2015-10-16-14369.jpg', 'projectsphotos'),
(11, 4, '2015-10-16-19033.jpg', 'projectsphotos'),
(12, 4, '2015-10-16-30238.jpg', 'projectsphotos');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `type` varchar(11) DEFAULT NULL,
  `availiable` varchar(4) DEFAULT NULL,
  `remarks` mediumtext,
  `status` varchar(10) DEFAULT 'Availiable',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `project_id`, `name`, `type`, `availiable`, `remarks`, `status`, `created`, `modified`) VALUES
(1, 1, 'Valley', 'Residential', 'Sale', 'Donec porta fermentum lacus at pulvinar. Sed in congue magna, ornare cursus lorem. Proin posuere, elit vitae tempus consectetur, erat ex sollicitudin ex, nec facilisis felis enim sed odio. Integer in velit ultricies, pulvinar orci at, interdum tortor. Etiam placerat leo at tellus eleifend, viverra ultrices mi tempus. Aliquam tellus mauris, volutpat quis mi luctus, consectetur semper lacus. Curabitur sed erat accumsan, tincidunt erat a, mattis urna. Duis porta in nulla ut faucibus. In tincidunt lectus eu mauris iaculis laoreet. ', 'Availiable', '2015-09-09 11:26:55', '2015-10-25 13:37:43'),
(2, 1, 'Residential Plot', 'Residential', 'Sale', '', 'Availiable', '2015-11-25 15:43:40', '2015-12-17 10:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `properties_documents`
--

CREATE TABLE `properties_documents` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties_documents`
--

INSERT INTO `properties_documents` (`id`, `property_id`, `photo`, `dir`) VALUES
(7, 1, '2015-10-16-23798.jpg', 'propertiesdocuments');

-- --------------------------------------------------------

--
-- Table structure for table `properties_flats`
--

CREATE TABLE `properties_flats` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `unit_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `floor_no` varchar(50) DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `studyroom` int(11) DEFAULT NULL,
  `furnished` char(3) DEFAULT NULL,
  `remarks` text,
  `status` varchar(10) NOT NULL DEFAULT 'Availiable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties_flats`
--

INSERT INTO `properties_flats` (`id`, `property_id`, `type`, `name`, `area`, `unit_id`, `price`, `floor_no`, `bedroom`, `bathroom`, `studyroom`, `furnished`, `remarks`, `status`) VALUES
(1, 1, 'Flat', '101', '500.00', 1, 3000000, '1st', 2, 1, 1, 'Y', 'Demo', 'Availiable'),
(2, 1, 'Flat', '102', '100.00', 1, 2500000, 'Ist', 1, 1, 1, 'N', '', 'Availiable'),
(3, 1, 'Plot', '201', '150.00', 1, 1500000, '2nd', 1, 1, 1, 'N', '', 'Availiable'),
(5, 2, 'Plot', '001', '168.21', 2, 4562320, '001', NULL, NULL, NULL, '', NULL, 'Sold'),
(6, 2, 'Plot', '002', '168.26', 2, 4562320, '002', NULL, NULL, NULL, '', '', 'Availiable');

-- --------------------------------------------------------

--
-- Table structure for table `properties_photos`
--

CREATE TABLE `properties_photos` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties_photos`
--

INSERT INTO `properties_photos` (`id`, `property_id`, `photo`, `dir`) VALUES
(13, 1, '2015-10-16-5620.jpg', 'propertiesphotos'),
(14, 1, '2015-10-16-24861.jpg', 'propertiesphotos');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `property_name` varchar(100) DEFAULT NULL,
  `description` mediumtext,
  `area` varchar(25) DEFAULT NULL,
  `unit_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `remarks` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `project_id`, `name`, `address`, `mobile`, `property_name`, `description`, `area`, `unit_id`, `amount`, `remarks`) VALUES
(1, 1, 'David', 'Demo Address', '', '', '', '100', 1, '1500.00', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `purchases_payments`
--

CREATE TABLE `purchases_payments` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `paymenttype_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `slide_name` varchar(255) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `status` varchar(7) DEFAULT 'Active',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_name`, `ordering`, `photo`, `dir`, `status`, `created`, `modified`) VALUES
(1, 'slide1', 1, '0a2b09cf329f3b177d997398ededba0a.jpg', NULL, 'Active', '2015-10-12 17:00:49', '2015-10-17 15:04:17'),
(2, 'slide2', 2, '3090d16785bae618a1be70bbaa9c680a.jpg', NULL, 'Active', '2015-10-12 17:29:10', '2015-10-17 12:26:18'),
(3, 'slide3', 3, '4c89e0e117cf6b0932f74f4f48baaf53.jpg', NULL, 'Active', '2015-10-12 17:29:27', '2015-10-17 12:26:18'),
(4, 'slide4', 4, '54f64780f5841840afa3071fb98cd323.jpg', NULL, 'Active', '2015-10-12 17:29:44', '2015-10-17 15:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `smssettings`
--

CREATE TABLE `smssettings` (
  `id` int(11) NOT NULL,
  `api` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `senderid` varchar(10) DEFAULT NULL,
  `husername` varchar(100) DEFAULT NULL,
  `hpassword` varchar(100) DEFAULT NULL,
  `hsenderid` varchar(100) DEFAULT NULL,
  `hmobile` varchar(100) DEFAULT NULL,
  `hmessage` varchar(100) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smssettings`
--

INSERT INTO `smssettings` (`id`, `api`, `username`, `password`, `senderid`, `husername`, `hpassword`, `hsenderid`, `hmobile`, `hmessage`, `type`) VALUES
(1, '', '', '', '', '', '', '', '', '', 'Get');

-- --------------------------------------------------------

--
-- Table structure for table `smstemplates`
--

CREATE TABLE `smstemplates` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `status` varchar(11) DEFAULT 'Published',
  `type` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smstemplates`
--

INSERT INTO `smstemplates` (`id`, `name`, `description`, `status`, `type`) VALUES
(1, 'Client Login Credentials', 'Dear $clientName, Your $siteName account is now active. Email: $email Password: $password Website:$url Best Regards, $siteName', 'Published', 'CLC'),
(2, 'Client Forgot Password', 'Dear $clientName, Website: $url Verification Code: $code Sincerely, $siteName', 'Published', 'CFP'),
(3, 'Admin Forgot Password', 'Dear $name, Website: $url Verification Code: $code Sincerely, $siteName', 'Published', 'AFP'),
(4, 'Admin Forgot Username', 'Dear $name, You have forgot User Name. Your username is $userName Sincerely, $siteName', 'Published', 'AFU'),
(5, 'User Login Credentials', 'Dear $name, Your $siteName account is now active. Email: $email Uername: $userName Password: $password Website:$url Best Regards, $siteName', 'Published', 'ULC'),
(6, 'Invoice Demand Letter', 'Dear $clientName You Payment is due on $dueDate. Please pay your amount Rs. $amount Plus Service Tax amount. Sincerely, $siteName', 'Published', 'IDL');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `percent` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `percent`) VALUES
(1, 'VAT+SAT', '15.00');

-- --------------------------------------------------------

--
-- Table structure for table `ugroups`
--

CREATE TABLE `ugroups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ugroups`
--

INSERT INTO `ugroups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrator', '2012-07-05 17:16:24', '2012-07-05 17:16:24'),
(2, 'Manager', '2015-07-25 18:45:43', '2015-07-25 18:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`) VALUES
(1, 'Sq. Ft.'),
(2, 'Sq. mtr.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `ugroup_id` int(11) NOT NULL DEFAULT '2',
  `status` enum('Active','Suspend') DEFAULT 'Active',
  `deleted` char(1) DEFAULT NULL,
  `presetcode` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `mobile`, `ugroup_id`, `status`, `deleted`, `presetcode`, `created`, `modified`) VALUES
(1, 'admin', 'dfb37faf99ffd691383e054541f1a3fd1966273d359d85aa419562fc26bf4427', 'root@localhost.com', 'Administrator', '0000000000', 1, 'Active', NULL, NULL, '2014-04-01 21:08:06', '2015-12-15 15:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(25) DEFAULT NULL,
  `licence_no` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `address`, `contact`, `licence_no`) VALUES
(1, 'Demo Name', 'Demo Address', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awallets`
--
ALTER TABLE `awallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `awallet_histories`
--
ALTER TABLE `awallet_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_coapplicants`
--
ALTER TABLE `clients_coapplicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `properties_flat_id` (`properties_flat_id`),
  ADD KEY `plan_id` (`plan_id`);

--
-- Indexes for table `deals_payments`
--
ALTER TABLE `deals_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deal_id` (`deal_id`),
  ADD KEY `paymenttype_id` (`paymenttype_id`),
  ADD KEY `plans_payment_id` (`plans_payment_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `emailsettings`
--
ALTER TABLE `emailsettings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `emailtemplates`
--
ALTER TABLE `emailtemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_category_id` (`expense_category_id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `expenses_payments`
--
ALTER TABLE `expenses_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_id` (`expense_id`),
  ADD KEY `paymenttype_id` (`paymenttype_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `expense_category_id` (`expense_category_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `inventories_balances`
--
ALTER TABLE `inventories_balances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventory_id` (`inventory_id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_rights`
--
ALTER TABLE `page_rights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`),
  ADD KEY `ugroup_id` (`ugroup_id`);

--
-- Indexes for table `paymenttypes`
--
ALTER TABLE `paymenttypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans_payments`
--
ALTER TABLE `plans_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deal_id` (`deal_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_layoutplans`
--
ALTER TABLE `projects_layoutplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_locationmaps`
--
ALTER TABLE `projects_locationmaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_photos`
--
ALTER TABLE `projects_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `properties_documents`
--
ALTER TABLE `properties_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `properties_flats`
--
ALTER TABLE `properties_flats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `properties_photos`
--
ALTER TABLE `properties_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `purchases_payments`
--
ALTER TABLE `purchases_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_id` (`purchase_id`),
  ADD KEY `paymenttype_id` (`paymenttype_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smssettings`
--
ALTER TABLE `smssettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smstemplates`
--
ALTER TABLE `smstemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ugroups`
--
ALTER TABLE `ugroups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `ugroup_id` (`ugroup_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `awallets`
--
ALTER TABLE `awallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `awallet_histories`
--
ALTER TABLE `awallet_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clients_coapplicants`
--
ALTER TABLE `clients_coapplicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deals_payments`
--
ALTER TABLE `deals_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emailtemplates`
--
ALTER TABLE `emailtemplates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expenses_payments`
--
ALTER TABLE `expenses_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventories_balances`
--
ALTER TABLE `inventories_balances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `page_rights`
--
ALTER TABLE `page_rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `paymenttypes`
--
ALTER TABLE `paymenttypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `plans_payments`
--
ALTER TABLE `plans_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects_layoutplans`
--
ALTER TABLE `projects_layoutplans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `projects_locationmaps`
--
ALTER TABLE `projects_locationmaps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `projects_photos`
--
ALTER TABLE `projects_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `properties_documents`
--
ALTER TABLE `properties_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `properties_flats`
--
ALTER TABLE `properties_flats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `properties_photos`
--
ALTER TABLE `properties_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purchases_payments`
--
ALTER TABLE `purchases_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `smssettings`
--
ALTER TABLE `smssettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `smstemplates`
--
ALTER TABLE `smstemplates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ugroups`
--
ALTER TABLE `ugroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `awallets`
--
ALTER TABLE `awallets`
  ADD CONSTRAINT `awallets_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `awallet_histories`
--
ALTER TABLE `awallet_histories`
  ADD CONSTRAINT `awallet_histories_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients_coapplicants`
--
ALTER TABLE `clients_coapplicants`
  ADD CONSTRAINT `clients_coapplicants_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `deals_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `deals_ibfk_3` FOREIGN KEY (`properties_flat_id`) REFERENCES `properties_flats` (`id`),
  ADD CONSTRAINT `deals_ibfk_4` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`);

--
-- Constraints for table `deals_payments`
--
ALTER TABLE `deals_payments`
  ADD CONSTRAINT `deals_payments_ibfk_1` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`),
  ADD CONSTRAINT `deals_payments_ibfk_4` FOREIGN KEY (`paymenttype_id`) REFERENCES `paymenttypes` (`id`),
  ADD CONSTRAINT `deals_payments_ibfk_5` FOREIGN KEY (`plans_payment_id`) REFERENCES `plans_payments` (`id`),
  ADD CONSTRAINT `deals_payments_ibfk_6` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`expense_category_id`) REFERENCES `expense_categories` (`id`),
  ADD CONSTRAINT `expenses_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expenses_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `expenses_payments`
--
ALTER TABLE `expenses_payments`
  ADD CONSTRAINT `expenses_payments_ibfk_1` FOREIGN KEY (`expense_id`) REFERENCES `expenses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expenses_payments_ibfk_2` FOREIGN KEY (`paymenttype_id`) REFERENCES `paymenttypes` (`id`);

--
-- Constraints for table `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `inventories_ibfk_2` FOREIGN KEY (`expense_category_id`) REFERENCES `expense_categories` (`id`),
  ADD CONSTRAINT `inventories_ibfk_3` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`);

--
-- Constraints for table `inventories_balances`
--
ALTER TABLE `inventories_balances`
  ADD CONSTRAINT `inventories_balances_ibfk_1` FOREIGN KEY (`inventory_id`) REFERENCES `inventories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `page_rights`
--
ALTER TABLE `page_rights`
  ADD CONSTRAINT `page_rights_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_rights_ibfk_2` FOREIGN KEY (`ugroup_id`) REFERENCES `ugroups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plans_payments`
--
ALTER TABLE `plans_payments`
  ADD CONSTRAINT `plans_payments_ibfk_1` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `properties_documents`
--
ALTER TABLE `properties_documents`
  ADD CONSTRAINT `properties_documents_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties_flats`
--
ALTER TABLE `properties_flats`
  ADD CONSTRAINT `properties_flats_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `properties_flats_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `properties_photos`
--
ALTER TABLE `properties_photos`
  ADD CONSTRAINT `properties_photos_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `purchases_payments`
--
ALTER TABLE `purchases_payments`
  ADD CONSTRAINT `purchases_payments_ibfk_1` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchases_payments_ibfk_2` FOREIGN KEY (`paymenttype_id`) REFERENCES `paymenttypes` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ugroup_id`) REFERENCES `ugroups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
