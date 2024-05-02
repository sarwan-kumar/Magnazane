-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 01:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pankaj2`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_activity`
--

CREATE TABLE `add_activity` (
  `id` int(11) NOT NULL,
  `name` varchar(677) NOT NULL,
  `img` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_client`
--

CREATE TABLE `add_client` (
  `id` int(11) NOT NULL,
  `name` varchar(677) NOT NULL,
  `img` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `sqs` varchar(200) DEFAULT NULL,
  `date` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_client`
--

INSERT INTO `add_client` (`id`, `name`, `img`, `status`, `sqs`, `date`) VALUES
(2, '57870446185', 'gallery-90849209790.png', 'A', '2', '2023-04-20 14:01:01'),
(3, '86145835962', 'gallery-85491927828.jpg', 'A', '1', '2023-04-20 14:01:05'),
(4, '86524149601', 'gallery-83007239823.jpg', 'A', '3', '2023-04-20 14:01:15'),
(6, '52574550663', 'gallery-70698076591.png', 'A', '4', '2023-04-20 14:16:34'),
(8, '50298365460', 'gallery-83149137069.png', 'A', '1', '2023-04-21 13:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `add_gallery`
--

CREATE TABLE `add_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(677) NOT NULL,
  `img` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_gallery`
--

INSERT INTO `add_gallery` (`id`, `name`, `img`, `status`, `date`) VALUES
(2, '83357500355', 'gallery-48054397881.jpeg', 'A', '2024-04-30 00:03:30'),
(3, '55078259486', 'gallery-67529853106.jpeg', 'A', '2024-04-30 00:03:35'),
(4, '58630982760', 'gallery-49239305317.jpeg', 'A', '2024-04-30 00:03:41'),
(5, '52041447613', 'gallery-88807981000.jpeg', 'A', '2024-04-30 00:04:11'),
(6, '54483182576', 'gallery-51227702899.jpeg', 'A', '2024-04-30 00:04:22'),
(7, '84228785461', 'gallery-50510839030.jpeg', 'A', '2024-04-30 00:04:38'),
(8, '44025383139', 'gallery-59047354070.jpeg', 'A', '2024-04-30 00:04:46'),
(10, '79553289068', 'gallery-61745316916.jpeg', 'A', '2024-04-30 00:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `add_news`
--

CREATE TABLE `add_news` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_service_img`
--

CREATE TABLE `add_service_img` (
  `id` int(11) NOT NULL,
  `sid` varchar(250) DEFAULT NULL,
  `name` varchar(677) NOT NULL,
  `img` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_service_img`
--

INSERT INTO `add_service_img` (`id`, `sid`, `name`, `img`, `status`, `date`) VALUES
(2, '12', '', 'service1-37582193467.png', 'A', '2023-12-06 14:50:26'),
(3, '', '', 'service1-90691573718.png', 'A', '2023-12-06 14:58:03'),
(4, '12', '', 'service1-49306476372.png', 'A', '2023-12-06 15:13:20'),
(5, '12', '', 'service1-66320469843.png', 'A', '2023-12-06 15:13:27'),
(6, '12', '', 'service1-41157559046.png', 'A', '2023-12-06 15:13:33'),
(7, '19', '', 'service1-73462305945.png', 'A', '2023-12-06 15:29:06'),
(8, '19', '', 'service1-71263008383.png', 'A', '2023-12-06 15:29:10'),
(9, '19', '', 'service1-27834985228.png', 'A', '2023-12-06 15:29:14'),
(10, '19', '', 'service1-38982787632.png', 'A', '2023-12-06 15:29:18'),
(11, '19', '', 'service1-34555361970.png', 'A', '2023-12-06 15:29:22'),
(12, '18', '', 'service1-44111801226.png', 'A', '2023-12-06 15:29:38'),
(13, '18', '', 'service1-82706010475.png', 'A', '2023-12-06 15:29:47'),
(14, '18', '', 'service1-21118853943.png', 'A', '2023-12-06 15:29:55'),
(15, '18', '', 'service1-28136718771.png', 'A', '2023-12-06 15:29:59'),
(16, '18', '', 'service1-63111422151.png', 'A', '2023-12-06 15:30:04'),
(17, '18', '', 'service1-97385067379.png', 'A', '2023-12-06 15:30:12'),
(18, '17', '', 'service1-38021830388.png', 'A', '2023-12-06 15:31:09'),
(19, '17', '', 'service1-66719768742.png', 'A', '2023-12-06 15:31:13'),
(20, '17', '', 'service1-30866766342.png', 'A', '2023-12-06 15:31:17'),
(21, '17', '', 'service1-82786818793.png', 'A', '2023-12-06 15:31:21'),
(22, '17', '', 'service1-73065289142.png', 'A', '2023-12-06 15:31:25'),
(23, '16', '', 'service1-26006491871.png', 'A', '2023-12-06 15:31:39'),
(24, '16', '', 'service1-21635971405.png', 'A', '2023-12-06 15:31:43'),
(25, '16', '', 'service1-97617783276.png', 'A', '2023-12-06 15:31:47'),
(26, '16', '', 'service1-76629491774.png', 'A', '2023-12-06 15:31:53'),
(27, '15', '', 'service1-61287340230.png', 'A', '2023-12-06 15:32:13'),
(28, '15', '', 'service1-24073126500.png', 'A', '2023-12-06 15:32:17'),
(29, '15', '', 'service1-33321413241.png', 'A', '2023-12-06 15:32:24'),
(30, '15', '', 'service1-47001643051.png', 'A', '2023-12-06 15:32:30'),
(31, '15', '', 'service1-37591486055.png', 'A', '2023-12-06 15:32:39'),
(32, '14', '', 'service1-26886033388.png', 'A', '2023-12-06 15:33:12'),
(33, '14', '', 'service1-48070874658.png', 'A', '2023-12-06 15:33:16'),
(34, '14', '', 'service1-89528739466.png', 'A', '2023-12-06 15:33:20'),
(35, '14', '', 'service1-95761024953.png', 'A', '2023-12-06 15:33:24'),
(36, '13', '', 'service1-73521040330.png', 'A', '2023-12-06 15:34:22'),
(37, '13', '', 'service1-71338858455.png', 'A', '2023-12-06 15:34:25'),
(38, '13', '', 'service1-38822847218.png', 'A', '2023-12-06 15:34:29'),
(39, '13', '', 'service1-38610021029.png', 'A', '2023-12-06 15:34:34'),
(40, '23', '', 'service1-86436939328.png', 'A', '2023-12-06 15:34:50'),
(41, '23', '', 'service1-43613450061.png', 'A', '2023-12-06 15:34:54'),
(42, '23', '', 'service1-66046818620.png', 'A', '2023-12-06 15:34:57'),
(43, '22', '', 'service1-47249471396.png', 'A', '2023-12-06 15:35:19'),
(44, '22', '', 'service1-54224410900.png', 'A', '2023-12-06 15:35:24'),
(45, '20', '', 'service1-41579879281.png', 'A', '2023-12-06 15:35:41'),
(46, '20', '', 'service1-76843142418.png', 'A', '2023-12-06 15:35:44'),
(47, '25', '', 'service1-45493536310.jpeg', 'A', '2024-04-29 23:49:07'),
(48, '25', '', 'service1-57588294511.jpeg', 'A', '2024-04-29 23:49:11'),
(49, '25', '', 'service1-79713826880.jpeg', 'A', '2024-04-29 23:49:15'),
(50, '25', '', 'service1-87131484419.jpeg', 'A', '2024-04-29 23:49:18'),
(51, '30', '', 'service1-96304466157.jpeg', 'A', '2024-04-30 00:32:01'),
(52, '30', '', 'service1-57687828101.jpeg', 'A', '2024-04-30 00:32:04'),
(53, '30', '', 'service1-98697515626.jpeg', 'A', '2024-04-30 00:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(245) NOT NULL,
  `phone` varchar(245) NOT NULL,
  `email` varchar(455) NOT NULL,
  `user_ID` varchar(355) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `user_ID`, `pwd`, `status`) VALUES
(1, 'admin', '9541025588', 'pankaj@admin.com', 'pankaj@admin.com', '1111', '1');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(566) NOT NULL,
  `phone` varchar(245) NOT NULL,
  `email` varchar(455) NOT NULL,
  `dob` varchar(566) NOT NULL,
  `p_date` varchar(566) NOT NULL,
  `remark` text NOT NULL,
  `doc` text NOT NULL,
  `AppointmentType` varchar(400) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(355) NOT NULL,
  `admin` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `einix_project`
--

CREATE TABLE `einix_project` (
  `id` int(11) NOT NULL,
  `project` varchar(245) NOT NULL,
  `s_date` varchar(245) NOT NULL,
  `e_date` varchar(366) NOT NULL,
  `status` varchar(256) NOT NULL,
  `date` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `einix_staff`
--

CREATE TABLE `einix_staff` (
  `id` int(11) NOT NULL,
  `sis` varchar(245) NOT NULL,
  `department` varchar(245) NOT NULL,
  `name` varchar(366) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(245) NOT NULL,
  `address` varchar(245) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_query`
--

CREATE TABLE `emp_query` (
  `id` int(11) NOT NULL,
  `name` varchar(566) NOT NULL,
  `phone` varchar(455) NOT NULL,
  `email` varchar(455) NOT NULL,
  `subject` varchar(566) NOT NULL,
  `msg` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_query`
--

INSERT INTO `emp_query` (`id`, `name`, `phone`, `email`, `subject`, `msg`, `status`, `date`) VALUES
(1, 'Anmol', '7082235358', 'anmolarmy1313@gmail.com', '', 'Security guard', NULL, '14-06-2023'),
(2, 'Anmol', '7015230034', 'anmolsingh@gimal.com', 'Stohtigad', '', NULL, '14-06-2023'),
(3, 'Dhrambir singh', '8607286118', '', 'Security guard ', '', NULL, '16-06-2023'),
(4, '', '', '', '', '', NULL, '08-11-2023');

-- --------------------------------------------------------

--
-- Table structure for table `firm_detail`
--

CREATE TABLE `firm_detail` (
  `id` int(11) NOT NULL,
  `fname` varchar(566) DEFAULT NULL,
  `flogo` text DEFAULT NULL,
  `fphone` varchar(355) DEFAULT NULL,
  `femail` varchar(566) DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `youtube` varchar(566) DEFAULT NULL,
  `web` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `faddress` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `terms` text DEFAULT NULL,
  `privacy` text DEFAULT NULL,
  `date` varchar(566) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `firm_detail`
--

INSERT INTO `firm_detail` (`id`, `fname`, `flogo`, `fphone`, `femail`, `facebook`, `youtube`, `web`, `instagram`, `faddress`, `about`, `terms`, `privacy`, `date`) VALUES
(1, 'Magnazane', 'logo-logo.png', '954125588', 'pankaj@gmail.com', 'https://www.facebook.com/', 'https://www.youtube.com/', '0', 'https://www.instagram.com/accounts/login/', 'Preet Nagar Gali no. 14, near old dera sacha sauda, Begu road Sirsa, Haryana 12505', '<h1 style=\"text-align: center;\"><em><strong><span style=\"font-size: 18pt;\">About Magnazane</span></strong></em></h1>\r\n<p style=\"font-size: medium; font-weight: 400; text-align: start;\">&nbsp;</p>\r\n<div style=\"line-height: 1.2; text-align: right;\"><span style=\"color: #e03e2d;\">Welcome to Magnazane, your trusted partner in the cement industry. With a steadfast commitment to excellence and reliability, Magnazane has established itself as a premier name in cement carrying and forwarding services.</span></div>\r\n<p style=\"text-align: right;\">&nbsp;</p>\r\n<div style=\"font-size: medium; font-weight: 400; text-align: justify; padding-left: 80px;\"><iframe title=\"YouTube video player\" src=\"https://www.youtube.com/embed/D4F_PRRc0Tg?si=UGc5p1EBPkONCRAS&amp;controls=0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<h1 style=\"text-align: justify;\"><span style=\"font-family: \'arial black\', sans-serif; font-size: 18pt;\">Our Vision</span></h1>\r\n<p style=\"font-size: medium; font-weight: 400; text-align: justify;\">&nbsp;</p>\r\n<ul>\r\n<li style=\"text-align: justify;\"><strong><span style=\"color: #2dc26b; background-color: #ced4d9;\"><em>At Magnazane, our vision is simple yet ambitious: to be the foremost choice for cement manufacturers seeking seamless logistics solutions. We aim to redefine the standards of efficiency and customer satisfaction in the C&amp;F sector, setting benchmarks for reliability, integrity, and innovation.</em></span></strong></li>\r\n</ul>\r\n<p style=\"font-size: medium; font-weight: 400; text-align: start;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: \'arial black\', sans-serif; font-size: 18pt;\"><strong>Our Mission</strong></span></p>\r\n<div style=\"font-size: medium; font-weight: 400; text-align: start;\"><img src=\"https://www.youtube.com/watch?v=61EGpAy4Ids\" alt=\"\" /><iframe src=\"https://www.youtube.com/embed/61EGpAy4Ids\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p style=\"text-align: left;\"><em><span style=\"color: #b96ad9;\">Our mission is to provide unparalleled value to our clients by offering comprehensive logistics services tailored to their specific needs. We strive to optimize supply chain operations, reduce costs, and enhance overall efficiency, thereby empowering our clients to focus on their core business objectives with confidence.</span></em></p>\r\n<p>&nbsp;</p>', 'terms and condiction & for magnzane', 'privavcy policy for magnazae', '2024-04-29 19:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `phone` varchar(245) NOT NULL,
  `otp` varchar(245) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `service` varchar(566) DEFAULT '0',
  `name` varchar(566) DEFAULT NULL,
  `phone` varchar(455) DEFAULT NULL,
  `email` varchar(455) DEFAULT NULL,
  `subject` varchar(566) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `address` varchar(566) DEFAULT NULL,
  `status` varchar(50) DEFAULT '1',
  `date` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `service`, `name`, `phone`, `email`, `subject`, `msg`, `remark`, `address`, `status`, `date`, `created_at`) VALUES
(5, 'sarwan', 'sarwan', '798+546', '', '', '', 'ergfvcdde', 'csdcdscds', '1', '2024-04-29 17:23:53', '2024-04-29 17:23:53'),
(11, '25', 'sarwan', '7894561230', '', '', '', 'dscsddcds', 'adres kyu batau', '1', '2024-04-29 18:19:44', '2024-04-29 18:19:44'),
(12, '0', 'sarwan', '7894561230', 'dxwasda@gmail.com', 'vdfvcfrsd', 'brftdscvxgcrfxvdfs', NULL, NULL, '1', '0000-00-00 00:00:00', '2024-04-29 19:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` int(11) NOT NULL,
  `sid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(566) NOT NULL,
  `img` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(356) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `img`, `status`, `date`) VALUES
(5, '1', 'slider-60153829579.jpeg', 'A', '2024-04-29 23:35:10'),
(6, '2', 'slider-63318248187.jpeg', 'A', '2024-04-29 23:35:17'),
(7, '3', 'slider-77680068254.jpeg', 'A', '2024-04-29 23:35:22'),
(8, '4', 'slider-38872975399.jpeg', 'A', '2024-04-29 23:35:32'),
(9, '5', 'slider-65291377019.jpg', 'A', '2024-04-29 23:35:40'),
(10, '7', 'slider-64184042513.jpg', 'A', '2024-04-29 23:35:45'),
(11, '8', 'slider-71412428338.jpg', 'A', '2024-04-29 23:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `pid` varchar(245) NOT NULL,
  `pname` varchar(245) NOT NULL,
  `p_price` varchar(366) NOT NULL,
  `pimg` varchar(256) NOT NULL,
  `descp` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `services_name` text DEFAULT NULL,
  `services_image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) DEFAULT 'A' COMMENT '0 1 delete',
  `sqs` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `services_name`, `services_image`, `description`, `created_at`, `updated_at`, `status`, `sqs`) VALUES
(25, 'Duplex', 'service-42160711647.jpeg', '<p>it t is said that living together with your whole family in the same place is perfect peace for the heart and mind. Our latest project in?Residential Interior Design?is (duplex) &sup2; in Sushant Lok Gurgaon designed for a family who wishes to spend quality time together. The (duplex) &sup2; is designed for multi-family which comprises two separate duplexes in a single building. The?Home Interior Design?itself serves a meaning as two units are connected in the same way family stays together.<br />The style of the house is a neoclassical style form of architecture covering a ground area of 7,200 sq feet. Our specialty of work is to maintain the place according to today&rsquo;s lifestyle. The special planning of the new home Interior design is done by keeping the private area (bedrooms) separated from the common area (living area, dining area, and kitchen). It has a common lift and stairs which are connecting the entire house and a separate staircase for the duplexes.</p>', '2024-04-29 18:17:31', '2024-04-29 18:17:31', 'A', '1'),
(26, 'Ivy House', 'service-80981007953.jpeg', '', '2024-04-29 18:24:13', '2024-04-29 18:24:13', 'A', '2'),
(27, 'Linear House', 'service-62389146438.jpeg', '', '2024-04-29 18:24:32', '2024-04-29 18:24:32', 'A', '3'),
(28, 'Arch Arbor', 'service-48098677067.jpeg', '', '2024-04-29 18:24:47', '2024-04-29 18:24:47', 'A', '4'),
(29, 'Contemporary Classicism', 'service-58424672524.jpeg', '', '2024-04-29 18:25:37', '2024-04-29 18:25:37', 'A', '5'),
(30, 'Raish Showroom', 'service-89307089356.jpeg', '', '2024-04-29 18:25:56', '2024-04-29 18:25:56', 'A', '6'),
(31, 'Varied Rhythm', 'service-66592549792.jpeg', '', '2024-04-29 18:26:28', '2024-04-29 18:26:28', 'A', '7'),
(32, 'Esperanza', 'service-25643742678.jpeg', '', '2024-04-29 18:26:50', '2024-04-29 18:26:50', 'A', '8'),
(33, 'Progressive Silhoutes', 'service-42023546472.jpeg', '', '2024-04-29 18:27:20', '2024-04-29 18:27:20', 'A', '9'),
(34, 'White Lighthouse', 'service-38108244636.jpeg', '<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px; font-family: Raleway, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">The beautiful white Highlight House is located at the heart of DLF Phase 1, Gurgaon. The idea behind designing this unique House is totally the client&rsquo;s demand for lavish design with a touch of classic architecture. So the design is inspired by the neoclassical architecture style.&nbsp;</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px; font-family: Raleway, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">The basic concept behind the design was to make it simple yet lavish and grand. The architecture type of this house is simple Builder-floor typology. The idea was to stack floors one above the other. The ground floor will be used as a parking for vehicles whereas the 1st floor will be like a 2BHK floor and the other three floors will have a 3BHK style each. To outshine the house in a suited landscape elevation is designed slightly differently from the surrounding house styles.&nbsp;</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>', '2024-04-29 18:27:42', '2024-04-29 18:44:35', 'A', '10'),
(35, 'Echelon of Grace', 'service-71278102295.jpeg', '<div class=\"elementor-element elementor-element-5f9f7874 elementor-widget elementor-widget-heading\" style=\"--bdt-inverse: initial; box-sizing: border-box; --flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px 20px; width: 570px; margin-block-end: 20px; margin-bottom: 0px; color: #555555; font-family: Raleway, sans-serif; font-size: 16px; background-color: #ffffff;\" data-id=\"5f9f7874\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\" style=\"--bdt-inverse: initial; box-sizing: border-box; transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s); margin: -5px 0px 0px; padding: 0px 0px 30px;\">\r\n<h4 class=\"elementor-heading-title elementor-size-default\" style=\"--bdt-inverse: initial; box-sizing: border-box; font-family: \'Noto Naskh Arabic\', sans-serif; font-weight: 400; line-height: 1; margin: 0px; color: #000000; font-size: 30px; padding: 0px;\">Project Details</h4>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-57e56e77 elementor-drop-cap-yes elementor-widget__width-initial elementor-drop-cap-view-default elementor-widget elementor-widget-text-editor\" style=\"--bdt-inverse: initial; box-sizing: border-box; --flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: 0; --flex-shrink: 0; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px 20px; font-family: Raleway, sans-serif; width: var( --container-widget-width, 100% ); margin-block-end: 20px; transition: all 0.3s linear 0s; margin-bottom: 0px; max-width: 100%; text-align: justify; --container-widget-width: 100%; --container-widget-flex-grow: 0; font-size: 16px; background-color: #ffffff;\" data-id=\"57e56e77\" data-element_type=\"widget\" data-settings=\"{&quot;drop_cap&quot;:&quot;yes&quot;}\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\" style=\"--bdt-inverse: initial; box-sizing: border-box; transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s); padding: 0px 0px 45px;\">\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px;\"><strong style=\"--bdt-inverse: initial; box-sizing: border-box;\">IDEA</strong></p>\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">Introducing an architectural masterpiece that stands as a testament to timeless elegance and enduring design &ndash; the Neo-Classical White House. This resplendent edifice embodies the grandeur of a bygone era while seamlessly integrating modern sensibilities, resulting in a harmonious synthesis that captivates the eye and stirs the soul.</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">Elegantly nestled within meticulously manicured grounds, this Neo-Classical White House rises with an air of regality, its white fa&ccedil;ade gleaming in the sunlight. Front and center, a symmetrical arrangement of rounded pillars adorns the first two floors, harkening back to the majestic aesthetics of ancient Greece and Rome. These pillars, carved with exquisite detail, serve as both a visual spectacle and a structural marvel, supporting the edifice while bestowing an aura of dignity upon the structure.</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">A defining feature of this architectural gem is the passage that gracefully unites the two sides of the mansion on each floor. These passages are not mere connectors; they are elegant transitions that seamlessly link the architectural elements, forging a sense of unity and continuity between spaces. This design not only enhances the aesthetic harmony of the building but also promotes the circulation of light and air, ensuring an ambiance of comfort and vitality within.</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">The Neo-Classical White House&rsquo;s facade is a canvas of purity, accentuated by delicate detailing that speaks to the dedication of craftsmen who shaped its vision. Intricate friezes and moldings trace a story of artistry across the exterior, invoking a sense of admiration and wonder. Every curve, every line, every flourish is a testament to the reverence for tradition and the pursuit of architectural excellence.</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">As one enters the hallowed halls of the Neo-Classical White House, a sense of timelessness envelops the senses. The interior spaces pay homage to the neoclassical style with high ceilings, ornate cornices, and expansive windows that invite natural light to dance upon the exquisite interiors. From the grand foyer to the splendidly appointed chambers, the design exudes a sense of grace and sophistication that transcends eras.</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px 0px 20px;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">The union of classical aesthetics and modern functionality is a hallmark of this dwelling. Meticulously curated spaces seamlessly blend the past and present, offering an environment that is both inviting and practical for contemporary living. State-of-the-art amenities and technologies discreetly integrate into the architectural splendor, ensuring a lifestyle of comfort without compromising on the building&rsquo;s timeless charm.</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>\r\n<p style=\"--bdt-inverse: initial; box-sizing: border-box; margin: 0px;\"><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-contrast=\"none\">In its entirety, the Neo-Classical White House stands as a tribute to architectural heritage and creative ingenuity. It is a living testament to the enduring appeal of neoclassical design principles, interpreted with a modern touch. This dwelling is not just a structure; it is a work of art that beckons admirers to step into a world where past and present converge in perfect harmony.</span><span style=\"--bdt-inverse: initial; box-sizing: border-box;\" data-ccp-props=\"{&quot;134233117&quot;:false,&quot;134233118&quot;:false,&quot;201341983&quot;:0,&quot;335559738&quot;:525,&quot;335559739&quot;:525,&quot;335559740&quot;:240}\">&nbsp;</span></p>\r\n</div>\r\n</div>', '2024-04-29 18:28:05', '2024-04-29 18:45:16', 'A', '11'),
(36, 'Marbel Vista Villas', 'service-23878241153.jpeg', '', '2024-04-29 18:28:29', '2024-04-29 18:28:29', 'A', '12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(355) NOT NULL,
  `app_id` varchar(400) NOT NULL,
  `name` varchar(566) NOT NULL,
  `phone` varchar(245) NOT NULL,
  `email` varchar(455) NOT NULL,
  `dob` varchar(566) NOT NULL,
  `pwd` varchar(566) NOT NULL,
  `address` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `video` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `video`, `status`, `date`) VALUES
(3, 'Security Guard Ka Kaam', '5WWdY7XRwFY', 'A', '2023-04-24 17:52:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_activity`
--
ALTER TABLE `add_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_client`
--
ALTER TABLE `add_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_gallery`
--
ALTER TABLE `add_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_news`
--
ALTER TABLE `add_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_service_img`
--
ALTER TABLE `add_service_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `einix_project`
--
ALTER TABLE `einix_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `einix_staff`
--
ALTER TABLE `einix_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_query`
--
ALTER TABLE `emp_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firm_detail`
--
ALTER TABLE `firm_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_activity`
--
ALTER TABLE `add_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_client`
--
ALTER TABLE `add_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_gallery`
--
ALTER TABLE `add_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_news`
--
ALTER TABLE `add_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_service_img`
--
ALTER TABLE `add_service_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `einix_project`
--
ALTER TABLE `einix_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `einix_staff`
--
ALTER TABLE `einix_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_query`
--
ALTER TABLE `emp_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `firm_detail`
--
ALTER TABLE `firm_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
