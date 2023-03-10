-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 12:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graphic`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'test1', 'test1@gmail', 'testing1', '12345'),
(2, 'test5', 'test5@gmail.com', 'testing5', '12345'),
(3, 'test3', 'test3@gmail.com', 'testing3', '12345'),
(4, 'test4', 'test4@gmail', 'testing4', '12345'),
(5, 'test10', 'test10@gmail', 'testing10', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `developer` text DEFAULT NULL,
  `topic` text DEFAULT NULL,
  `projectid` text DEFAULT NULL,
  `doneat` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `developer`, `topic`, `projectid`, `doneat`) VALUES
(1, 'Pravishree Poster', '<p>The following project is to create a poster of Pravishree Company</p>', 0x30633335666363636333643837343761323165363434336434363162333863382e6a7067, 'Rishika', '', NULL, '2023-02-24 04:44:48'),
(2, '3D Graphics', '<p>This project we have done a graphical work for a company</p>', 0x65316632316630616164653563643439343137646134306230363838633966632e706e67, 'Bhanu Sri', '', NULL, '2023-02-24 05:39:01'),
(3, 'L Maker', '<p>Logo of L Maker compnay</p>', 0x33316235343331366365643566383465326462663932623033323363636262332e706e67, 'Sreyaa', '', NULL, '2023-02-24 07:05:57'),
(4, 'Poster', '', 0x64393530333163313133376337613634333464636532363736643235643834632e6a7067, 'Poojitha', '', NULL, '2023-02-26 07:30:07'),
(5, 'Project-Tesla', 'Project is done...', 0x35643436303666636665666236653834306530326133383063643632616336352e6a7067, 'Vijay', 'Graphic Designing', '77dde0f8e6ac1852ce81ce291d348bb4', '2023-03-01 05:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `symbol` text DEFAULT NULL,
  `serviceid` text DEFAULT NULL,
  `postedat` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `description`, `price`, `symbol`, `serviceid`, `postedat`) VALUES
(4, 'Brochures, rack cards & booklets', 'We do all kind of brochures , rack cards & booklets at an affordable price of your choice', '$50.00', '<i class=\'bx bx-bookmarks\'></i> ', '1e53bc9211a4871e1a1e2b0bf9344e31', '2023-03-09 23:36:52'),
(5, 'Business cards, letterhead & envelopes', 'Business cards & letter heads to promte your business', '$60.00', '<i class=\'bx bxs-envelope-open\'></i>  ', 'a160e980c1679d14379324b3a330a269', '2023-03-09 23:37:54'),
(6, 'Logos and branded elements', 'Branded Logos with excellent designs', '$50.00', '<i class=\'bx bxl-graphql\'></i>', '93224092cd90604e0c2f1aef8aa98a24', '2023-03-09 23:38:29'),
(7, 'Posters, banners and signage', 'Poster & Banners for all kind of occassions & promotions', '$80.00', '<i class=\'bx bxs-paint\'></i>                   ', 'acb2c953f16eceb67aa1a45678855543', '2023-03-09 23:39:03'),
(8, 'Social media graphics & digital marketing ads', 'Digital Marketing & Promotions for your businesses', '$100.00', '<i class=\'bx bx-desktop\'></i>', '3bb47914547932c4ad8dc0a5f9b1c49e', '2023-03-09 23:39:43'),
(9, 'Email marketing graphics', 'Email Marketing & Graphical Works', '$150.00', '<i class=\'bx bx-envelope\'></i>', 'a0aa5735b203fdf2fad427d322affce7', '2023-03-09 23:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phoneno` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `teamid` text DEFAULT NULL,
  `role` text DEFAULT NULL,
  `joindeat` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneno`, `description`, `image`, `teamid`, `role`, `joindeat`) VALUES
(4, 'Naga Teja', 'najateja@gmail.com', '9502903197', '<p>He is a front-end developer</p>', 0x64666433366239633138373236396630393131353131306536313836613361372e706e67, '1d378c4b1b3bb02896359e5d3aca25a3', 'Developer', '2023-02-24 05:05:32'),
(5, 'NagaTeja Arepalli', 'naga@123.com', '9502903197', '<p>He is a front-end developer</p>', 0x61663934323363663962666339633239643663363562333939373563306662312e706e67, '80efbda350897670737c0e77c90b431b', 'Developer', '2023-02-24 05:36:24'),
(6, 'Bhanu', 'bhanu@123', '45987463210', '<p>She is a Graphic Designer</p>', 0x34613331653934373537316130613835316633626330353932373935353834642e706e67, '772b2b7b8c7ab26542aed157417bae56', 'Grpahic Designer', '2023-02-24 07:00:36'),
(7, 'Poojitha', 'pooji@gmail.com', '8659471023', '<p>She is Graphic Designer.</p>', 0x64623936343261396332663135656461366331656237383433356334616563392e706e67, '7ac96753e3513531ed3c725c48d65504', 'Grpahic Designer', '2023-02-26 07:28:16'),
(8, 'Vyshnavi', 'vyshu@123.com', '7651203489', '<p>She is a designer & does designing part for all types of projects</p>', 0x34613331653934373537316130613835316633626330353932373935353834642e706e67, 'a30eed53e6a2736e2df7a20501548316', 'Developer', '2023-03-01 05:54:12'),
(9, 'Zeba', 'zeba@123.com', '8652013497', '<p>She is a Animator</p>', 0x61663934323363663962666339633239643663363562333939373563306662312e706e67, '97cbb175989b91f6ae54f72b70db1c7b', 'Animator', '2023-03-01 05:57:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
