-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 12:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `actvities_id` int(11) NOT NULL,
  `Activities_Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Add_Details` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `history` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `Staff_Email` varchar(200) NOT NULL,
  `activation_token` varchar(300) NOT NULL,
  `_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `status`, `history`, `type`, `mobile`, `Staff_Email`, `activation_token`, `_id`) VALUES
('amit', '202cb962ac59075b964b07152d234b70', 'rakeshrai@gmail.com', '1', '09-16-2023 ', '', '9870443528', '', 'd1b6788d68c8bc592489c7e2f5c5784c', 1),
('vibrantick', '202cb962ac59075b964b07152d234b70', 'vibrantick@gmail.com', '1', '03-01-2024 ', '', '8547399999', '', '918dfbb1b8261f442fc9bc325dd6b497', 2),
('abhi', '202cb962ac59075b964b07152d234b70', 'abhi@gmail.com', '1', '03-05-2024 ', '', '7885994943', '', '5bc0268e03feb6b153736943c7c378df', 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `navigation_menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`_id`, `admin_id`, `navigation_menu_id`) VALUES
(7, 1, 1),
(8, 2, 2),
(9, 2, 3),
(10, 2, 4),
(11, 2, 5),
(12, 2, 1),
(29, 3, 2),
(33, 3, 16),
(34, 3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `duration` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `username`, `phone`, `email`, `country`, `hotel`, `date`, `duration`, `subject`) VALUES
(15, 'simranjit', '8360236135', 'sk9150049@gmail.com', 'India', '5 Estrellas', '11-17-2023 ', '1', ' yes'),
(28, 'Test', '1234567890', '1@gmail.com', 'India', 'Los Hoteles de Lujos', '01-17-2024 ', '10', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `parent_category` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `parent_category`, `status`) VALUES
(45, 'Frontend Development', 'Web development', '1'),
(46, 'Backend Development', 'Web development', '1'),
(47, 'Machine learning', 'Artificial Intelligence', '1'),
(48, 'Deep Learning', 'Artificial Intelligence', '1'),
(49, 'Ethical Hacking', 'Cyber Security', '1');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Client_id` int(11) NOT NULL,
  `Client_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `created_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_id`, `Client_name`, `image`, `status`, `created_date`) VALUES
(6, 'design', '660a8f3a1d97b_img-1.png', '1', '2024-03-22 17:17:33 PM'),
(7, 'Wenelux', '660a8f46714b3_img-2.png', '1', '2024-03-22 17:18:12 PM'),
(8, 'Amotrio', '660a8f4d314ed_img-3.png', '1', '2024-03-22 17:18:42 PM'),
(9, 'Happenz', '660a8f5473913_img-4.png', '1', '2024-03-22 17:19:02 PM');

-- --------------------------------------------------------

--
-- Table structure for table `company_address`
--

CREATE TABLE `company_address` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_address`
--

INSERT INTO `company_address` (`id`, `address`, `city`, `state`, `country`, `postal_code`) VALUES
(1, '6WA G15, Ground Floor, 6 West A, Dubai Airport Freezone', '6 West A, Dubai Airport Freezone', 'Dubai Airport Freezone', 'Dubai', '123222');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `about_us` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `company_name`, `email`, `mobile`, `fax`, `website`, `about_us`) VALUES
(1, 'Electro World', 'info@electroworldfze.com', '+147785455669', '343235', 'https://electroworldfze.com/', 'Electro World FZE is a leading company in the electrical industry with a glorious track record of over 2 decades.  we believe that our competitive edge lies in product innovation as well as superior quality and ready availability.');

-- --------------------------------------------------------

--
-- Table structure for table `google_captcha`
--

CREATE TABLE `google_captcha` (
  `captcha_id` int(11) NOT NULL,
  `site_key` varchar(255) NOT NULL,
  `secret_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `google_captcha`
--

INSERT INTO `google_captcha` (`captcha_id`, `site_key`, `secret_key`) VALUES
(1, '6LdV7GApAAAAAJiy2eC822WRNv_eTlEgyx83SeG1', '6LdV7GApAAAAANHclXXGQb2yP1StOzw0M63_l8cI');

-- --------------------------------------------------------

--
-- Table structure for table `horizontal_ad`
--

CREATE TABLE `horizontal_ad` (
  `ad_id` int(11) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `ad_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horizontal_ad`
--

INSERT INTO `horizontal_ad` (`ad_id`, `ad_title`, `image`, `status`, `ad_date`) VALUES
(8, 'testing', '6603c510cb36c_3.jpg', '1', '2024-03-27 12:15:07 PM');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `lead_id` int(11) NOT NULL,
  `lead_name` varchar(255) NOT NULL,
  `lead_company` varchar(255) NOT NULL,
  `lead_email` varchar(255) NOT NULL,
  `lead_source` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `localization`
--

CREATE TABLE `localization` (
  `id` int(11) NOT NULL,
  `website_language` varchar(100) NOT NULL,
  `website_timezone` varchar(100) NOT NULL,
  `website_date_format` varchar(100) NOT NULL,
  `website_time_format` varchar(100) NOT NULL,
  `website_starting_month` varchar(100) NOT NULL,
  `website_financial_year` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `localization`
--

INSERT INTO `localization` (`id`, `website_language`, `website_timezone`, `website_date_format`, `website_time_format`, `website_starting_month`, `website_financial_year`, `status`) VALUES
(1, 'English', 'UTC+05:30', 'DD-MM-YYYY', '12 Hours', 'April', '2024', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login_settings`
--

CREATE TABLE `login_settings` (
  `id` int(11) NOT NULL,
  `backend_panel_logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `landing_page_logo_black` varchar(255) NOT NULL,
  `landing_page_logo_white` varchar(255) NOT NULL,
  `helpdesk_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_settings`
--

INSERT INTO `login_settings` (`id`, `backend_panel_logo`, `favicon`, `landing_page_logo_black`, `landing_page_logo_white`, `helpdesk_no`) VALUES
(1, 'logo/backend_panel_logo/logo200x47.svg', 'logo/favicon/fav.png', 'logo/landing_page_logo_black/logo.svg', 'logo/landing_page_logo_white/logo white.svg', '+147785455669');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `map_id` int(11) NOT NULL,
  `map_api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`map_id`, `map_api_key`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6311.195276483494!2d-122.46937946508179!3d37.72912131867138!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7dc87d56f1a9%3A0xecd4728ee92942b7!2sAptos%20Park!5e0!3m2!1sen!2sbd!4v1688876299603!5m2!1sen!2sbd');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `media_dest`
--

CREATE TABLE `media_dest` (
  `media_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media_dest`
--

INSERT INTO `media_dest` (`media_id`, `image`, `status`, `dest_id`) VALUES
(14, '6536517e74af7_wp6612954.jpg', 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `media_images`
--

CREATE TABLE `media_images` (
  `id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `image_filename` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `media_tours`
--

CREATE TABLE `media_tours` (
  `media_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `tour_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `firm_name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `city_state` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `activation_token` varchar(100) NOT NULL,
  `expiry_time` varchar(100) NOT NULL,
  `max_request` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navigation_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_date` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `navigation_link`, `description`, `status`, `created_date`) VALUES
(27, 'Home', 'index.php', '', '1', '2024-04-01 11:23:19 AM'),
(28, 'About Us', 'about.php', '', '1', '2024-04-01 11:24:14 AM'),
(29, 'Services', '', '', '1', '2024-04-01 11:24:54 AM'),
(30, 'Page', '', '', '1', '2024-04-01 12:08:31 PM'),
(31, 'Blog', '', '', '1', '2024-04-01 12:10:56 PM'),
(32, 'Contact', 'contact.php', '', '1', '2024-04-01 12:12:18 PM');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_menus`
--

CREATE TABLE `navigation_menus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navigation_menus`
--

INSERT INTO `navigation_menus` (`id`, `title`) VALUES
(1, 'All'),
(2, 'Add New Category'),
(3, 'All Categories'),
(4, 'Add Parent Category'),
(5, 'All Parent Category'),
(6, 'Add New Page'),
(7, 'All Pages'),
(8, 'Add menu items'),
(9, 'All menu'),
(10, 'Add sub menu'),
(11, 'All sub menu'),
(12, 'Add Image Slider'),
(13, 'All Slider'),
(14, 'Add Testimonials'),
(15, 'All Testimonials'),
(16, 'Add New Post'),
(17, 'All Posts'),
(18, 'Add New Media'),
(19, 'All Media'),
(20, 'Add New Admin User'),
(21, 'All Admin Users'),
(22, 'Add New Client'),
(23, 'All Clients'),
(24, 'Contact form leads'),
(25, 'Other Leads'),
(26, 'General Settings'),
(27, 'Website Settings'),
(28, 'System Settings'),
(29, 'Logs Reports'),
(30, 'Backup And Recovery'),
(31, 'Change Password'),
(32, 'Add New Video'),
(33, 'All Videos'),
(34, 'Registered Users'),
(35, 'Add New Advt'),
(36, 'All Vertical Advts'),
(37, 'All Horizontal Advts'),
(38, 'Add Statistics'),
(39, 'All Statistics'),
(40, 'Add Study Material'),
(41, 'All Study Material'),
(42, 'Financial Settings'),
(43, 'Add Services'),
(44, 'All Services'),
(45, 'Add Team Member'),
(46, 'All Team Members');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug_url` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `content` longtext NOT NULL,
  `created_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `parent_category_id` int(11) NOT NULL,
  `parent_category_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`parent_category_id`, `parent_category_name`, `status`) VALUES
(28, 'Web development', '1'),
(29, 'Artificial Intelligence', '1'),
(30, 'Cyber Security', '1'),
(31, 'New product unlocked', '1'),
(32, 'Set your goals for', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `method`, `status`) VALUES
(1, 'Stripe', '1'),
(2, 'paypal', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method_details`
--

CREATE TABLE `payment_method_details` (
  `id` int(11) NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `secret_key` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method_details`
--

INSERT INTO `payment_method_details` (`id`, `method_name`, `email_address`, `api_key`, `secret_key`, `status`) VALUES
(1, 'Stripe', 'stripe@gmail.com', 'stripe123456', '12345stripe', '1'),
(2, 'paypal', '123@gmail.com', '123456dgg', '45678tfggg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `status`, `content`, `image`, `publish`, `date`) VALUES
(26, 'Budget Buddy', '1', '<p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper posu ere viverra .Aliquamsto, posuere lobortis non, vive rra laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet mat ullamcorper posue viverra .Aliquam eros justo,</p>', '660bc106993bf_img-1.jpg', 'amit', '2024-04-02 14:05:29 PM'),
(27, ' Automotive System', '1', '<p>Payment processing is a critical component of any business that sells goods or se Payment processing is a critical component of any.</p>', '660bc14bea4c5_img-2.jpg', 'amit', '2024-04-02 13:56:51 PM'),
(28, 'Smart Savings', '1', '<p>Payment processing is a critical component of any business that sells goods or se Payment processing is a critical component of any.</p>', '660bc16bdf475_img-3.jpg', 'amit', '2024-04-02 13:57:23 PM'),
(29, 'Pure Consulting', '1', '<p>Payment processing is a critical component of any business that sells goods or se Payment processing is a critical component of any.</p>', '660bc1961f05f_img-4.jpg', 'amit', '2024-04-02 13:58:06 PM'),
(30, 'Data Analysis', '1', '<p>Payment processing is a critical component of any business that sells goods or se Payment processing is a critical component of any.</p>', '660bc1ab93ab6_img-5.jpg', 'amit', '2024-04-02 13:58:27 PM'),
(31, 'Market Rules', '1', '<p>Payment processing is a critical component of any business that sells goods or se Payment processing is a critical component of any.</p>', '660bc1c5d6898_img-6.jpg', 'amit', '2024-04-02 13:58:53 PM');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `parent_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `post_id`, `parent_category_id`) VALUES
(54, 27, 29),
(55, 28, 32),
(56, 29, 31),
(57, 30, 29),
(58, 31, 32),
(61, 26, 31);

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `student_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` varchar(50) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `registration_date` varchar(100) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `mentor` varchar(255) DEFAULT NULL,
  `enrollment_id` int(11) DEFAULT NULL,
  `enrollment_date` varchar(100) DEFAULT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `fees_status` varchar(100) DEFAULT NULL,
  `fees_amount` varchar(100) DEFAULT NULL,
  `emergency_contact_number` varchar(15) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_contact_number` varchar(15) DEFAULT NULL,
  `guardian_email` varchar(100) DEFAULT NULL,
  `employment_status` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `title`, `description`, `image`, `icon`, `status`) VALUES
(8, 'Mint Financial Management', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuer.</p>', '660be53baf22d_img-1.jpg', '660ccbcd543db_icon-1.svg', '1'),
(9, 'Smart Finance Solutions', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra.</p>', '660a9164e30c4_img-2.jpg', '660ccbd7b741c_icon-2.svg', '1'),
(10, 'New product lasting', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .</p>', '660a9186d6dc2_img-3.jpg', '660ccbe1ab1a1_icon-3.svg', '1'),
(11, 'Stan Robinhood Financial', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .</p>', '660a919edb06d_img-4.jpg', '660ccbea6f705_icon-4.svg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `title`, `description`, `image`, `status`) VALUES
(35, 'COMPANY OPERATIONS', '<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster the collaborative thinking to empowerment.</p>', '6603b31b9a6a6_1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smtp_email`
--

CREATE TABLE `smtp_email` (
  `smtp_id` int(11) NOT NULL,
  `from_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `host` varchar(100) NOT NULL,
  `port` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smtp_email`
--

INSERT INTO `smtp_email` (`smtp_id`, `from_email`, `password`, `host`, `port`) VALUES
(1, 'info@anixskillup.in', '@@Zxcv@123', 'mail.hostinger.com', '465');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `instagram`, `facebook`, `twitter`, `whatsapp`, `youtube`, `linkedin`, `pinterest`) VALUES
(1, 'https://www.instagram.com/vibrantickinfotech/', 'https://www.facebook.com/vibranticksolutions/', 'https://twitter.com/vibrantick', 'https://whatsapp.com/vibrantick', 'https://youtube.com/vibrantick', 'https://www.linkedin.com/company/vibrantick-infotech-solutions/mycompany/verification/?viewAsMember=true', 'https://in.pinterest.com/vibrantick/');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `stat_id` int(11) NOT NULL,
  `our_achievements` varchar(100) NOT NULL,
  `performance_rating` varchar(100) NOT NULL,
  `our_clients` varchar(100) NOT NULL,
  `our_projects` varchar(100) NOT NULL,
  `our_experience` varchar(100) NOT NULL,
  `our_overseas_engagements` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`stat_id`, `our_achievements`, `performance_rating`, `our_clients`, `our_projects`, `our_experience`, `our_overseas_engagements`, `status`) VALUES
(1, '40', '200', '90', '120', '22', '63', '1');

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `material_id` int(11) NOT NULL,
  `study_material_name` varchar(255) NOT NULL,
  `study_material` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `created_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` (`material_id`, `study_material_name`, `study_material`, `status`, `created_date`) VALUES
(15, 'test', '66053513777a2_Test.pdf', '1', '2024-03-28 14:44:59 PM'),
(16, 'Testing', '660541aac45e7_Test.pdf', '1', '2024-03-28 15:38:42 PM');

-- --------------------------------------------------------

--
-- Table structure for table `study_material_category`
--

CREATE TABLE `study_material_category` (
  `id` int(11) NOT NULL,
  `study_material_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_material_category`
--

INSERT INTO `study_material_category` (`id`, `study_material_id`, `category_id`) VALUES
(32, 15, 45),
(33, 15, 46),
(34, 15, 47),
(35, 15, 48),
(36, 16, 45),
(37, 16, 46),
(38, 16, 47),
(39, 16, 48),
(40, 16, 49);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `sub_menu_name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `parent_menu` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `navigation_link` varchar(255) NOT NULL,
  `created_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `sub_menu_name`, `status`, `parent_menu`, `description`, `navigation_link`, `created_date`) VALUES
(13, 'Service', '1', 'Services', '', 'service.php', '2024-04-01 11:27:06 AM'),
(14, 'Service Details', '1', 'Services', '', 'service-details.php', '2024-04-01 11:28:06 AM'),
(15, 'Products', '1', 'Page', '', 'product.php', '2024-04-01 12:09:02 PM'),
(16, 'Product Details', '1', 'Page', '', 'product-details.php', '2024-04-01 12:09:27 PM'),
(17, 'Team', '1', 'Page', '', 'team.php', '2024-04-01 12:09:49 PM'),
(22, 'Team Details', '1', 'Page', '', 'team-details.php', '2024-04-02 12:25:35 PM'),
(23, 'Faq', '1', 'Page', '', 'faq.php', '2024-04-02 12:25:54 PM'),
(24, 'Blog', '1', 'Blog', '', 'blog-classic.php', '2024-04-02 12:26:29 PM'),
(25, 'Blog Details', '1', 'Blog', '', 'blog-details.php', '2024-04-02 12:26:58 PM');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `instagram_url` varchar(255) NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `linkedin_url` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `designation`, `description`, `image`, `instagram_url`, `facebook_url`, `twitter_url`, `linkedin_url`, `status`) VALUES
(5, 'Albert Flores', 'Developer', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam', '660b9e62251d4_img-1.jpg', '#', '#', '#', '#', '1'),
(6, 'Kathryn Murphy', 'Designer', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam', '660b9e8ea8428_img-2.jpg', '#', '#', '#', '#', '1'),
(7, 'Marvin McKinney', 'Designer', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam', '660b9ea99a4ca_img-3.jpg', '#', '#', '#', '#', '1'),
(8, 'Leslie Alexander', 'Designer', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam', '660b9ed571f77_img-4.jpg', '#', '#', '#', '#', '1'),
(9, 'Marvin McKinney', 'Designer', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam', '660b9ef0b5ee5_img-3.jpg', '#', '#', '#', '#', '1'),
(10, 'Leslie Alexander', 'Designer', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam', '660b9f0a0b796_img-1.jpg', '#', '#', '#', '#', '1'),
(11, 'Kathryn Murphy', 'Designer', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam', '660b9f27d7241_img-4.jpg', '#', '#', '#', '#', '1'),
(12, 'Albert Flores', 'Designer', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam', '660b9f3ef266b_img-2.jpg', '#', '#', '#', '#', '1');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `test_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`test_id`, `name`, `designation`, `message`, `image`, `status`) VALUES
(11, 'Pablo Benjamin', 'Developer', 'Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.', '660a88c439315_img-1.jpg', 1),
(15, 'Alex', 'Tourist ', 'Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.', '660a897d8483e_img-2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `tour_menu` varchar(255) NOT NULL,
  `weather` varchar(255) NOT NULL,
  `tour_details` longtext NOT NULL,
  `map` varchar(255) NOT NULL,
  `tour_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `login_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `username`, `user_ip`, `login_time`) VALUES
(110, 'j653bsudbg81rtek874tq17s0o', 'amit', '::1', '2024-07-10 16:12:32 PM'),
(111, 'busf1eeavjnp72lfnqbsuina3d', 'abhi', '::1', '2024-07-10 16:23:03 PM'),
(112, 'tnflbera9e8nis6ri6ajj0vsc6', 'amit', '::1', '2024-07-10 16:23:15 PM');

-- --------------------------------------------------------

--
-- Table structure for table `vertical_ad`
--

CREATE TABLE `vertical_ad` (
  `ad_id` int(11) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `ad_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vertical_ad`
--

INSERT INTO `vertical_ad` (`ad_id`, `ad_title`, `image`, `status`, `ad_date`) VALUES
(7, 'testing', '6603c42258f95_4.jpg', '1', '2024-03-27 12:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_description` varchar(255) DEFAULT NULL,
  `video_filename` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `thumbnail_url` varchar(255) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `web_content`
--

CREATE TABLE `web_content` (
  `cont_id` int(11) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about_us` text NOT NULL,
  `footer` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_content`
--

INSERT INTO `web_content` (`cont_id`, `mobile_no`, `email`, `about_us`, `footer`, `title`, `address`) VALUES
(5, '8085101343', 'info@viajesdivinaindia.com', 'werwrwrewrwwe', 'viajesdivinaindia', 'x', '1627, Housing Board Colony, sector 10 A\r\nGurgaon, Haryana-\r\n122001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`actvities_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indexes for table `company_address`
--
ALTER TABLE `company_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_captcha`
--
ALTER TABLE `google_captcha`
  ADD PRIMARY KEY (`captcha_id`);

--
-- Indexes for table `horizontal_ad`
--
ALTER TABLE `horizontal_ad`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`lead_id`);

--
-- Indexes for table `localization`
--
ALTER TABLE `localization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_settings`
--
ALTER TABLE `login_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `media_dest`
--
ALTER TABLE `media_dest`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `media_images`
--
ALTER TABLE `media_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `media_tours`
--
ALTER TABLE `media_tours`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `navigation_menus`
--
ALTER TABLE `navigation_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`parent_category_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method_details`
--
ALTER TABLE `payment_method_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `parent_category_id` (`parent_category_id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `smtp_email`
--
ALTER TABLE `smtp_email`
  ADD PRIMARY KEY (`smtp_id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `study_material_category`
--
ALTER TABLE `study_material_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_material_category_ibfk_2` (`category_id`),
  ADD KEY `study_material_category_ibfk_1` (`study_material_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `FOREIGN KEY` (`dest_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vertical_ad`
--
ALTER TABLE `vertical_ad`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `web_content`
--
ALTER TABLE `web_content`
  ADD PRIMARY KEY (`cont_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `actvities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `company_address`
--
ALTER TABLE `company_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_captcha`
--
ALTER TABLE `google_captcha`
  MODIFY `captcha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `horizontal_ad`
--
ALTER TABLE `horizontal_ad`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `lead_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `localization`
--
ALTER TABLE `localization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_settings`
--
ALTER TABLE `login_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `media_dest`
--
ALTER TABLE `media_dest`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `media_images`
--
ALTER TABLE `media_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `media_tours`
--
ALTER TABLE `media_tours`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `navigation_menus`
--
ALTER TABLE `navigation_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `parent_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_method_details`
--
ALTER TABLE `payment_method_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `smtp_email`
--
ALTER TABLE `smtp_email`
  MODIFY `smtp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `study_material_category`
--
ALTER TABLE `study_material_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `vertical_ad`
--
ALTER TABLE `vertical_ad`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `web_content`
--
ALTER TABLE `web_content`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media_images`
--
ALTER TABLE `media_images`
  ADD CONSTRAINT `media_images_ibfk_1` FOREIGN KEY (`media_id`) REFERENCES `media` (`media_id`) ON DELETE CASCADE;

--
-- Constraints for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `post_categories_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_categories_ibfk_2` FOREIGN KEY (`parent_category_id`) REFERENCES `parent_category` (`parent_category_id`) ON DELETE CASCADE;

--
-- Constraints for table `study_material_category`
--
ALTER TABLE `study_material_category`
  ADD CONSTRAINT `study_material_category_ibfk_1` FOREIGN KEY (`study_material_id`) REFERENCES `study_material` (`material_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `study_material_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`dest_id`) REFERENCES `page` (`page_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
