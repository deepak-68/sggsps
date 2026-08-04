-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2025 at 08:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rungtaschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `sports_games` text DEFAULT NULL,
  `co_curricular` text DEFAULT NULL,
  `other_achievements` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `status`, `history`, `type`, `mobile`, `Staff_Email`, `activation_token`, `_id`) VALUES
('amit', '202cb962ac59075b964b07152d234b70', 'rakeshrai@gmail.com', '1', '09-16-2023 ', '', '9870443528', '', 'd1b6788d68c8bc592489c7e2f5c5784c', 1),
('vibrantick', '202cb962ac59075b964b07152d234b70', 'vibrantick@gmail.com', '1', '03-01-2024 ', '', '8547399999', '', '918dfbb1b8261f442fc9bc325dd6b497', 2),
('abhi', '202cb962ac59075b964b07152d234b70', 'abhi@gmail.com', '1', '03-05-2024 ', '', '7885994943', '', '5bc0268e03feb6b153736943c7c378df', 3),
('rungtaschool', '202cb962ac59075b964b07152d234b70', 'shweta@vibrantick.in', '1', '11-20-2024 ', '', '7837575742', '', '66af71f2723d90b45d067ce2deb78158', 5);

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `navigation_menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`_id`, `admin_id`, `navigation_menu_id`) VALUES
(8, 2, 2),
(9, 2, 3),
(10, 2, 4),
(11, 2, 5),
(12, 2, 1),
(29, 3, 2),
(33, 3, 16),
(34, 3, 17),
(60, 1, 1),
(61, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admission_enquiry`
--

CREATE TABLE `admission_enquiry` (
  `id` int(11) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `curriculum` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_enquiry`
--

INSERT INTO `admission_enquiry` (`id`, `child_name`, `father_name`, `mother_name`, `contact`, `curriculum`, `class`, `created_at`) VALUES
(1, 'test', 'test', 'test', '9876543217', 'CBSE', 'X', '2025-03-17 11:31:01'),
(2, 'vdsz', 'vds', 'ds', '9876543214', 'Cambridge', 'VIII', '2025-03-24 08:10:48'),
(3, 'test', 'dsf', 'trst', '9876543216', 'CBSE', 'VIII', '2025-04-07 10:31:24'),
(4, 'test', 'trhtgf', 'trsr', '9876543216', 'Cambridge', 'XI', '2025-04-07 11:05:22'),
(5, 'test', 'trhtgf', 'trsr', '9876543216', 'Cambridge', 'XI', '2025-04-07 11:05:25'),
(6, 'test', 'trhtgf', 'trsr', '9876543216', 'Cambridge', 'XI', '2025-04-07 11:05:26'),
(7, 'test', 'trhtgf', 'trsr', '9876543216', 'Cambridge', 'XI', '2025-04-07 11:05:26'),
(8, 'test', 'trhtgf', 'trsr', '9876543216', 'Cambridge', 'XI', '2025-04-07 11:05:26'),
(9, 'test', 'trhtgf', 'trsr', '9876543216', 'Cambridge', 'XI', '2025-04-07 11:05:26'),
(10, 'test', 'trhtgf', 'trsr', '9876543216', 'Cambridge', 'XI', '2025-04-07 11:05:45'),
(11, 'jfhj', 'jj', 'fjh', '9876543219', 'Cambridge', 'III', '2025-04-07 11:06:36'),
(12, 'uoiukjhg', 'yumij', 'hgf', '9876543216', 'CBSE', 'Playground', '2025-04-07 11:07:33'),
(13, 'sd', 'sdf', 'ffd', '9876543216', 'Cambridge', 'I', '2025-04-07 11:08:51'),
(14, 'bgfd', 'rgereg', 'bvdegre', '9876543219', 'CBSE', 'IX', '2025-04-07 11:11:01'),
(15, 'test', 'ewrsafd', 'test', '9876543214', 'Cambridge', 'X', '2025-04-07 11:13:09'),
(16, 'paru', 'paru', 'paru', '9876543216', 'CBSE', 'Nursery', '2025-04-07 11:19:04'),
(17, 'adhvik', 'mano', 'dalip', '8765432190', 'Cambridge', 'Playground', '2025-04-07 11:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumni_id`, `name`, `message`, `image`, `status`, `date`, `designation`) VALUES
(8, 'Srishti Arora', 'This is one of the best school in town. I am so happy and satisfied . This school not only focuses on studies but overall development of children. The activities helps build confidence and teamwork quality. My child is becoming more creative day by day. S', '673b303ed0cf8_3.jpg', 1, '2024-11-18 12:17:02', 'Software Engg.'),
(9, 'Prajna paramita Dey', 'It is really  a good school for overall development of child.its not about only mental but also for the overall socials development. Staffs are so polite making good environment. Teachers are good listener and so good. So good in solving problems and give', '673b3083b3d58_bg.jpg', 1, '2024-11-18 12:18:11', 'student'),
(10, 'Tests', '', '67cbf19c6538a_events-1.jpg', 1, '2025-03-08 07:29:03', 'Developer');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `parent_category`, `status`) VALUES
(46, 'Backend-Development', 'Web development', '1'),
(47, 'Machine learning', 'Artificial Intelligence', '1'),
(48, 'Deep Learning', 'Artificial Intelligence', '1'),
(49, 'Ethical Hacking', 'Cyber Security', '1'),
(52, 's', 'sss', '1'),
(53, 's', 'sss', '1');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `company_name`, `email`, `mobile`, `fax`, `website`, `about_us`) VALUES
(1, 'Electro World', 'info@electroworldfze.com', '+147785455669', '343235', 'https://electroworldfze.com/', 'Electro World FZE is a leading company in the electrical industry with a glorious track record of over 2 decades.  we believe that our competitive edge lies in product innovation as well as superior quality and ready availability.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `first_name`, `last_name`, `email`, `message`, `phone`) VALUES
(34, 'test', 'test', 'shweta@gmail.com', 'ewasfdbgvc', '9876543215'),
(35, 'test1', 'test1', 'test@gmail.com', 'sdfghjnbvcxcv', '9876543215'),
(36, 'fds', 'bfvdxz', 'fvdcx@gmail.com', 'sdfbvc', '9876543215'),
(37, 'asdfbgnh', 'sxdcfghj', 'zsdxfgh@ok.in', 'asdfgthyuhkjmnhbvcx', '9876543217'),
(38, 'ikuyjthgrfseadfghmj', 'dbzdgxfngmh,j,gmhn', 'dfbgsdzs@ok.in', 'sdxfcgvhnjkjmnhbvcxcvbn', '9876543219'),
(39, 'QWERTYUJ', 'DFGHJKJMND', 'SDFG@GMIAL.OCM', 'SFRDGTHYJUK,MNHFDFGHN', '9876543217'),
(40, 'ASDERTYUJ', 'ASDFGTHJ', 'DSFGH@OK.IFDNSX', 'SFDRGTHYJK,NMBVCX', '9876543218'),
(41, 'asdfghjk,jmnvbcx', 'zs/,.mjhggaegh', 'ewdfszx@ok.in', 'drk,hjgmhfngbfxzdvfszfg', '9876543218'),
(42, 'qWAESRTHYJUKIJH', 'SFDGHTFYJUKIJGHFNGDBFVS', 'SDFAVSZ@OK.IM', 'FREFBDCSXZ', '7896512645'),
(43, 'ty', 'edrtyjhk', 'dfgvbn@ok.im', 'sdfghjnbgvc', '8765432685'),
(44, 'dsfbgfcv', 'asfsdxc', 'sdf@ok.in', 'efrgtyhjukilk', '9876543216'),
(45, 'sdfvdfzvc', 'sfvfsdvcx', 'vjsuadgbkjc@ok.in', 'swdergtfjhk', '9876543215'),
(46, 'qwertyu', 'QWAEFSDRGJ', 'QERTYJK@OK.IM', 'asdertyuiolkjhn', '9876543218'),
(47, 'dfghjkil;\'', 'szdxfhg', 'zsxdcfgvhbjnkm@ok.in', 'asdfgrtyuiolkjmnhbvfdc', '9876543216'),
(48, 'destry7ui8op\'[w', 'erstyuiop\'', 'ersdgtyjuilo@ok.in', 'serdtugyjkhilo;', '9876543210'),
(49, 'ghmdvafb', 'hvfd', 'jkdfsv@ok.in', 'sdfgtyuikjhgbvcx', '9876543215'),
(50, 'sdfrgtyui', 'fghyjk', 'dcxf@ok.in', 'sdfghjkl;kjbhvgc', '9876543217'),
(51, 'qwsegfthjkl;\'', 'dh', 'wedfsgth@ok.in', 'sdfghjkl;\'', '9876543217'),
(52, 'aszdfxcdfgtfrjughjbmkl,;.', 'dfgchjych', 'jcxv@ok.in', 'sdfghyjkmhnbv', '9876543215'),
(53, 'uio;fesgrdhtfryj', 'adsfgrthyjuf', 'dgrh@ok.in', 'wderty', '7896541263'),
(54, 'edfrgthy', 'fdgthyju', 'dfsthgyju@ok.on', 'dfdsasfd', '9876543215'),
(55, 'asdfrgt', '.k,hjmngbfvxdc', 'bvfdczx@ok.in', 'zsdfxgchjhnbvcx', '9876543216'),
(56, 'qwergtyjuk', 'dfgthjm,k', 'adsefgrthyj@ok.in', 'dfghmjhnbfvx', '9876543216'),
(57, 'qerwt4e5y6u', 'erthyju', 'rhty@ok.on', 'xsdcfvbgnmjkl;', '9876543218'),
(58, 'jhgbfvdcsxza', 'b vcxz', 'cvx@pok.in', 'dfghjk', '9876543217'),
(81, 'dfds', 'df', 'df@ok.in', 'fdsg', '9876543215'),
(82, 'test', 'test', 'test@ok.in', 'dfgx', '9876543216'),
(83, 'ewsg', 'grd', 'r@ok.im', 'sgrfs', '9876543216'),
(84, 'test', 'test', 'tets@ok.in', 'dfzsf', '9876543215'),
(85, 'test', 'test', 'test@ok.in', 'fdg', '9876543215');

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `exam_passed` varchar(255) NOT NULL,
  `medium` enum('English','Hindi','Other') NOT NULL,
  `year` int(11) NOT NULL,
  `marks_percentage` decimal(5,2) NOT NULL,
  `board_college_university` varchar(255) NOT NULL,
  `subjects` text NOT NULL,
  `mode_of_study` enum('Regular','Distance','Private') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `description`, `image`, `event_date`, `status`, `time`, `location`) VALUES
(17, 'Rungta Public School Presents: A Magical Christmas Celebration 2024', '<p>Rungta Public School Presents: A Magical Christmas Celebration 2024</p>', '673ad20a87fb5_1.png', '2024-11-18', '1', '10:00 am - 12:00 pm', 'RPS'),
(18, 'Rungta Public School Welcomes 2024: A Spectacular New Year Celebration!', '<p>Rungta Public School Welcomes 2024: A Spectacular New Year Celebration!</p>', '673b27cedc483_1.jpg', '2024-11-18', '1', '10:00 am - 12:00 pm', 'Rungta Public School'),
(19, 'Celebrating the Spirit of Lohri: Upcoming Festivities at Rungta Public School', '<p>Celebrating the Spirit of Lohri: Upcoming Festivities at Rungta Public School</p>', '6756e3316bd30_events-8.jpg', '2024-12-09', '1', '10:00 am - 12:00 pm', 'Rungta Public School'),
(20, 'Celebrating the Spirit of Lohri: Upcoming Festivities at Rungta Public School', '<p>Celebrating the Spirit of Lohri: Upcoming Festivities at Rungta Public Schools</p>', '6756ea394bff4_events-1.jpg', '2024-12-09', '1', '10:00 am - 12:00 pm', 'Rungta Public School');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(10) NOT NULL,
  `faq_question` varchar(255) NOT NULL,
  `faq_answer` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_question`, `faq_answer`, `date`, `status`) VALUES
(15, 'Which educational board is RPS affiliated to?', 'The school is affiliated to the CBSE (Central Board of Secondary Education), New Delhi vide affiliation no. 3330201', '2024-11-18 04:49:20', '1'),
(16, 'What is the medium of Instruction?', 'The medium of Instruction is English.', '2024-11-18 04:49:51', '1'),
(17, 'How well can the students cope with CBSE syllabus if they are from a different board?', 'There will not be any difficulty as the syllabus of the CBSE is on a par with other Boards. This has been experienced by a large number of students with the help of the dedicated teachers.', '2024-11-18 04:50:18', '1'),
(18, 'Which are the classes for which admission can be sought?', 'The admission will be available for Classes Nursery to IX & XI. Admission to classes X & XII is considered provisionally only for transfer cases and the confirmation of admission is subject to the approval by the CBSE.', '2024-11-18 04:50:43', '1'),
(19, 'What are the various streams taught at +2 level.', 'The school has both Science (Engineering & Medicine) & Commerce streams.', '2024-11-18 04:51:02', '1'),
(20, 'How can I register my wards name for admission?', 'Application forms can be collected from our school office. The duly filled in application form along with the Registration fees, photocopy of the previous three years report cards and other required documents is to be submitted at the school office for the registration.', '2024-11-18 04:51:24', '1'),
(21, 'On what criteria is the admission considered at RPS?', 'RPS welcomes students from India and abroad. The admission is granted on the basis of the last three years academic record.', '2024-11-18 04:51:44', '1'),
(22, 'Is the Boarding facility available at RPS?', 'Yes, AC Boarding facility, separately of Boys and Girls is available from Class VI onward.', '2024-11-18 04:51:59', '1'),
(23, 'Does the school have AC Classrooms & Transport Facility?', 'Yes. The class-rooms and the school busses have AC Facility.', '2024-11-18 04:52:17', '1'),
(26, 'What is the teacher taught ratio at RPS?', 'The teacher taught ratio at RPS is 1:10', '2024-11-18 04:53:20', '1'),
(27, 'Does the school give scholarships?', 'Yes, the school gives scholarships to meritorious students of classes XI & XII. Apart from that there are various concessions given to the different categories of child.', '2024-11-18 04:53:40', '1'),
(28, 'What are the documents required for admission?', '1. The Application Form : Duly filled in Application form.\r\n\r\n2. Passport size photographs: 3 recent passport size photographs of the student & one each of both the parents.\r\n\r\n3. Birth Certificate: A copy of the Birth Certificate.\r\n\r\n4. Aadhar Card: A copy of the Aadhar Card.\r\n\r\n5. Registration fee: A non-refundable Registration Fee.\r\n\r\n6. School Reports: Photocopies of the previous two years and  yearly report card of the current year.\r\n\r\n7. Transfer Certificate: Transfer Certificate to be submitted for all admissions from class II onwards at the time of admission. For Grade X, XI and XII admissions, Transfer Certificate to be countersigned by the concerned authority of the educational board.\r\n\r\n8. Character Certificate: These should be addressed to the Principal recommended by the previous school authorities.\r\n\r\n9. Bank Account Details: A copy of the details of the Child\'s Bank Account.\r\n\r\n10. CBSE Registration Card: For classes X,XI & XI, the CBSE Class IX Registration Card.', '2024-11-18 04:54:22', '1'),
(29, 'What should be our first contact point?', 'Please contact the school reception on 9229344486 or e-mail to: principal@rungtapublicschool.ac.in', '2024-11-18 04:54:39', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `title`, `image`, `description`, `status`) VALUES
(20, 'test1', '673dc5a13dc27_1.jpg', '<p>test2</p>', 1),
(21, 'test2', '673dc5e9d2551_2.jpg', '<p>tgtg</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`category_id`, `category_name`, `status`) VALUES
(65, 'Holi', 1),
(66, 'Diwali', 1),
(67, 'Celebrationa', 1),
(68, 'Navratre', 1),
(70, 'Shivaratri', 1),
(71, 'Functiond', 1),
(73, 'Staff', 1),
(74, 'News', 1),
(75, 'Colors', 1),
(76, 'testing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `google_captcha`
--

CREATE TABLE `google_captcha` (
  `captcha_id` int(11) NOT NULL,
  `site_key` varchar(255) NOT NULL,
  `secret_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `google_captcha`
--

INSERT INTO `google_captcha` (`captcha_id`, `site_key`, `secret_key`) VALUES
(1, '6Lce3PYqAAAAAIEJdDxyt0YAJhzgQ3t-ZtdT_wjq', '6Lce3PYqAAAAAOFMRVuIzNsZOFDCsgrTr0Mag346');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `horizontal_ad`
--

INSERT INTO `horizontal_ad` (`ad_id`, `ad_title`, `image`, `status`, `ad_date`) VALUES
(8, 'testing', '6603c510cb36c_3.jpg', '1', '2024-03-27 12:15:07 PM');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `language_known` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `news_date` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`news_id`, `title`, `image`, `description`, `news_date`, `status`) VALUES
(7, 'Diwali Party', '673b2bacc83ed_1.jpg', '<p>Diwali Party</p>', '2024-11-18', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_settings`
--

INSERT INTO `login_settings` (`id`, `backend_panel_logo`, `favicon`, `landing_page_logo_black`, `landing_page_logo_white`, `helpdesk_no`) VALUES
(1, 'logo/backend_panel_logo/logo-red-light.png', 'logo/favicon/logo-red-light.png', 'logo/landing_page_logo_black/logo-red-light.png', 'logo/landing_page_logo_white/logo-red-light.png', '+147785455669');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `map_id` int(11) NOT NULL,
  `map_api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `title`, `status`) VALUES
(23, 'News', 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_dest`
--

CREATE TABLE `media_dest` (
  `media_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media_images`
--

INSERT INTO `media_images` (`id`, `media_id`, `image_filename`, `status`) VALUES
(83, 23, '66fbd6bf1c336_slider2.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `media_tours`
--

CREATE TABLE `media_tours` (
  `media_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `navigation_link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `created_date` text NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(46, 'All Team Members'),
(47, 'Add New Category'),
(48, 'All Categories'),
(49, 'Add New Gallery'),
(50, 'All Gallery'),
(51, 'Add New Spotlight'),
(52, 'All Spotlight'),
(53, 'Add New Event'),
(54, 'All Events'),
(55, 'Add New News & Achievements'),
(56, 'All News & Achievements'),
(57, 'Add New Notice Board'),
(58, 'All Notice Board'),
(59, 'Contact-us'),
(60, 'Add New Syllabus'),
(61, 'All Syllabus');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `news_date` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `image`, `news_date`, `status`) VALUES
(9, 'Promoting Physical & Mental Well Being Started From Now', '<p>Prisha Goel, received second prize in Dance at Agrasen Samaj, Durg</p>', '6756dd6f17737_events-2.jpg', '2024-11-16', 1),
(10, 'Annual Student Showcase & Talent Competition In RPS', '<p>test</p>', '6756dd7f352ad_events-7.jpg', '2024-11-18', 1),
(11, 'Enterprneurship Summit & Startup Pitch Competition ', '<h3><a class=\"text-decoration-none\" href=\"https://templates.hibotheme.com/adma/default/event-details.html\">Enterprneurship Summit &amp; Startup Pitch Competition In Students</a></h3>', '6756dd4d41e0b_events-1.jpg', '2024-12-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `mail`, `date`) VALUES
(1, 'shwetabadhan68@gmail.com', '2024-11-19 12:47:47'),
(2, 'shwetabadhan68@gmail.com', '2024-11-19 12:49:58'),
(3, 'shwetabadhan68@gmail.com', '2024-11-19 12:50:07'),
(8, 'dalipsethi3@gmail.com', '2024-11-19 13:05:46'),
(9, 'dalipsethi3@gmail.com', '2024-11-19 13:06:08'),
(10, 'dalipsethi3@gmail.com', '2024-11-19 13:06:25'),
(11, 'shweta@ok.com', '2024-12-11 07:35:24'),
(12, 'ok@ok.com', '2024-12-11 07:36:38'),
(13, 'shweta@shweta.com', '2024-12-11 07:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `notice_date` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`notice_id`, `title`, `image`, `description`, `notice_date`, `status`) VALUES
(8, 'Holi Celebration', '67d7dc22f2e19_image.png', '<p>Holi Celebration</p>', '2024-10-04', '1'),
(9, 'Diwali Celebration', '67d7dc4b57ced_download.jpg', '<p>Diwali Celebration</p>', '2024-10-09', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `parent_category_id` int(11) NOT NULL,
  `parent_category_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`parent_category_id`, `parent_category_name`, `status`) VALUES
(28, 'Web development', '1'),
(29, 'Artificial Intelligence', '1'),
(30, 'Cyber Security', '1'),
(31, 'New product unlocked', '1'),
(32, 'Set your goals for', '1'),
(33, 'sss', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_method_details`
--

INSERT INTO `payment_method_details` (`id`, `method_name`, `email_address`, `api_key`, `secret_key`, `status`) VALUES
(1, 'Stripe', 'stripe@gmail.com', 'stripe123456', '12345stripe', '1'),
(2, 'paypal', '123@gmail.com', '123456dgg', '45678tfggg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `title` enum('Mr','Ms','Mrs') NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `alternate_mobile` varchar(15) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` enum('Single','Married') NOT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `kids` int(11) DEFAULT 0,
  `spouse_occupation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `idpopup` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`idpopup`, `image`, `status`) VALUES
(1, '67e1071c64e5d_formimg.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `publish` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `post_gallery`
--

CREATE TABLE `post_gallery` (
  `post_id` int(11) NOT NULL,
  `gallery_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_gallery`
--

INSERT INTO `post_gallery` (`post_id`, `gallery_id`, `category_id`) VALUES
(1, 29, 1),
(2, 69, 4),
(3, 69, 5),
(232, 153, 65),
(233, 153, 70),
(239, 152, 65),
(240, 152, 66),
(241, 152, 67),
(242, 150, 66),
(243, 150, 67),
(250, 154, 71),
(281, 20, 76),
(282, 21, 66),
(283, 20, 76),
(284, 21, 66);

-- --------------------------------------------------------

--
-- Table structure for table `press_gallery`
--

CREATE TABLE `press_gallery` (
  `press_gallery` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `press_date` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_details`
--

CREATE TABLE `salary_details` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `salary_scale` decimal(10,2) DEFAULT NULL,
  `allowances` decimal(10,2) DEFAULT NULL,
  `gross_salary` decimal(10,2) DEFAULT NULL,
  `perks` text DEFAULT NULL,
  `basic` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `title`, `description`, `image`, `status`) VALUES
(49, 'Rungta Public School', '<p>Best School</p>', '6760245bef04c_slider images.jpg', 1),
(50, 'Slider 2', '<p>Slider 2</p>', '67602476b08fa_slider images 2.jpg', 1),
(51, 'slider 3', '<p>slider 3</p>', '6760249d7f617_slider images 3.jpg', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `instagram`, `facebook`, `twitter`, `whatsapp`, `youtube`, `linkedin`, `pinterest`) VALUES
(1, 'https://www.instagram.com/vibrantickinfotech/', 'https://www.facebook.com/vibranticksolutions/', 'https://twitter.com/vibrantick', 'https://whatsapp.com/vibrantick', 'https://youtube.com/vibrantick', 'https://www.linkedin.com/company/vibrantick-infotech-solutions/mycompany/verification/?viewAsMember=true', 'https://in.pinterest.com/vibrantick/');

-- --------------------------------------------------------

--
-- Table structure for table `spotlight`
--

CREATE TABLE `spotlight` (
  `spotlight_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `spotlight_date` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spotlight`
--

INSERT INTO `spotlight` (`spotlight_id`, `title`, `description`, `spotlight_date`, `status`) VALUES
(2, 'First Spotlight', '<p>If your free trial has ended, you&rsquo;ll receive these messages to let you know that you need to chand to a paid plan to continue using the Premium plugins enabled on your account. To remove these error messages, check on your TinyMCE plugin configuration, and delete any Premium plugin names.If your free trial has ended, you&rsquo;ll receive these messages to let you know that you need to chand to a paid plan to continue using the Premium plugins enabled on your account. To remove these error messages, check on your TinyMCE plugin configuration, and delete any Premium plugin names.</p>', '2024-10-25', '1'),
(6, 'second Spotlight', '', '2024-10-04', '1'),
(9, 'spotlight three', 'spotlight three', '2024-11-21', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`stat_id`, `our_achievements`, `performance_rating`, `our_clients`, `our_projects`, `our_experience`, `our_overseas_engagements`, `status`) VALUES
(1, '40', '200', '90', '120', '22', '63', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `student_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `presently_study` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`student_id`, `name`, `father_name`, `date_of_birth`, `presently_study`, `address`, `city`, `state`, `zip_code`, `mobile`, `fax`, `email`, `subject`, `message`) VALUES
(2, 'Rohit Sharma', 'Abc', '2024-10-08', 'BA', 'Dehli', 'Shilma', 'Himachal Pradesh', '20202', '08893838383', '', 'rajat@gmail.com', 'subjectttt', 'ffffffff');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study_material_category`
--

INSERT INTO `study_material_category` (`id`, `study_material_id`, `category_id`) VALUES
(33, 15, 46),
(34, 15, 47),
(35, 15, 48),
(37, 16, 46),
(38, 16, 47),
(39, 16, 48);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `syllabus_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`syllabus_id`, `title`, `document`, `status`) VALUES
(3, 'CEE TEE WORLD JUNE PART 2', '670659064fb4b_CEE TEE WORLD J_1689131720.pdf', '1'),
(5, 'Class X Syllabus 2023-24 (HINDI)', '67065910727b1_Class X Syllabu_1680671299.pdf', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`test_id`, `name`, `designation`, `message`, `image`, `status`) VALUES
(36, 'Srishti Arora', 'Parent', 'This is one of the best school in town. I am so happy and satisfied . This school not only focuses on studies but overall development of children. The activities helps build confidence and teamwork quality. My child is becoming more creative day by day. Staff is very supportive and helpful. Putting my child into this school was one of the best decisions i made .', '673adad3ba585_admin.jpg', 1),
(37, 'Prajna paramita Dey', 'Parent', 'It is really  a good school for overall development of child.its not about only mental but also for the overall socials development. Staffs are so polite making good environment. Teachers are good listener and so good. So good in solving problems and gives good attention for overall growth of child.', '673adb29d2838_admin-2.jpg', 1),
(38, 'Sahil Sangar', 'Parent', 'A Very Well planned infrastructure with a detailed ideas over this infrastructure made it the best school.My child is currently persuing his studies and I am proud of my decision to choose one of the best schools.The curriculum is well planned with their academics and have a well deserved teaching staff.The staff is very active and pationate about each and every student. I recommend everyone of you to be a part of this school if you are planning.', '673adbf895d0f_admin-2.jpg', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `salary_slip_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `username`, `user_ip`, `login_time`) VALUES
(150, '2jsht9rplha76197mll1pgbgua', 'rungtaschool', '::1', '2025-03-17 13:51:14 PM'),
(151, 'ks5cvkul4p15ndrvou8ekritpt', 'rungtaschool', '::1', '2025-03-17 14:19:07 PM'),
(152, 'rfnioage9p2apfc7i3svce54mc', 'rungtaschool', '::1', '2025-03-24 12:42:51 PM');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `category_id`, `category_name`, `video_title`, `video_description`, `video_filename`, `video_url`, `upload_date`, `thumbnail_url`, `status`) VALUES
(18, 46, 'Backend-Development', 'Creative Unique Design', 'Architecture viverra tristiquen justo duis vitaen damin neque nivam aestan the miss fermen.', '6772cb4099413_interior.mp4', '', '2024-12-30 16:33:04', '6772cb4091ba8_Screenshot_3.png', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_content`
--

INSERT INTO `web_content` (`cont_id`, `mobile_no`, `email`, `about_us`, `footer`, `title`, `address`) VALUES
(5, '8085101343', 'info@viajesdivinaindia.com', 'werwrwrewrwwe', 'viajesdivinaindia', 'x', '1627, Housing Board Colony, sector 10 A\r\nGurgaon, Haryana-\r\n122001');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `institution_name` varchar(255) NOT NULL,
  `from_month_year` date NOT NULL,
  `to_month_year` date NOT NULL,
  `nature_of_work` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

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
-- Indexes for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`);

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`category_id`);

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
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`news_id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`notice_id`);

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
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`idpopup`);

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
-- Indexes for table `post_gallery`
--
ALTER TABLE `post_gallery`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `press_gallery`
--
ALTER TABLE `press_gallery`
  ADD PRIMARY KEY (`press_gallery`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

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
-- Indexes for table `spotlight`
--
ALTER TABLE `spotlight`
  ADD PRIMARY KEY (`spotlight_id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`student_id`);

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
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`syllabus_id`);

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
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

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
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `actvities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

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
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `media_dest`
--
ALTER TABLE `media_dest`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `media_images`
--
ALTER TABLE `media_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `parent_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `idpopup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `post_gallery`
--
ALTER TABLE `post_gallery`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `press_gallery`
--
ALTER TABLE `press_gallery`
  MODIFY `press_gallery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_details`
--
ALTER TABLE `salary_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
-- AUTO_INCREMENT for table `spotlight`
--
ALTER TABLE `spotlight`
  MODIFY `spotlight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `syllabus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `vertical_ad`
--
ALTER TABLE `vertical_ad`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `web_content`
--
ALTER TABLE `web_content`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `achievements_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `personal_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `education_details`
--
ALTER TABLE `education_details`
  ADD CONSTRAINT `education_details_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `personal_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `languages_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `personal_details` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD CONSTRAINT `salary_details_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `personal_details` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `personal_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `personal_details` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
