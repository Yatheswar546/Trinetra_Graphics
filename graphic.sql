-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 07:50 PM
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
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `message` text NOT NULL,
  `sendat` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `message`, `sendat`) VALUES
(1, 'M.N.S SWarup', 'swarup@gmail.com', 'Thank you for completing the project on time... ', '2023-03-17 18:18:42'),
(2, 'Anuradha', 'anuradha@gmail.com', 'The work from Trinetra Graphics is excellent & also they fulfill all client\'s needs. ', '2023-03-17 18:21:10');

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
  `category` text DEFAULT NULL,
  `famous` text DEFAULT NULL,
  `projectid` text DEFAULT NULL,
  `doneat` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `developer`, `category`, `famous`, `projectid`, `doneat`) VALUES
(1, 'Pravishree Designs', '<p>The following project is to create a logo of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p>', 0x30633335666363636333643837343761323165363434336434363162333863382e6a7067, 'Rishika', 'Logo', 'Yes', 'e3f90423cc398aeeb64ba334039b691a', '2023-03-17 17:01:22'),
(2, 'Brochure 1', '<p>The following project is to create a brochure for a company event. &nbsp;That is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p>', 0x36616334383363323137386139306131626235623161376463623234386464662e6a7067, 'Bhanu Sri', 'Brochures', 'Yes', '562faf201e789b3e5e6cb8b41dd681c9', '2023-03-17 17:04:52'),
(3, 'Grpahic 1', '<p>The following project is related to a Graphic Designing. &nbsp;This is for a a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p>', 0x35393162306565363230623336653533316432346466373030666331633063642e6a7067, 'Naga Teja', 'Graphic Designing', 'No', '1e666c25f88e8e65db277944e983a208', '2023-03-17 17:05:46'),
(4, 'Black Hawks', '<p>The following project is to logo for a Black Hawks team. &nbsp;Black Hawks is a basketball team which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p>', 0x37346334306264366165313835323065303130333132383632663936356562632e6a7067, 'Sreyaa', 'Logo', 'Yes', '00f0d315edb2df8c2bd59d7e4c2bd4d5', '2023-03-17 17:08:49'),
(5, 'Tech Job Fair', '<p>The following project is poster for a Job Fair. The Tech Job Fair which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p>', 0x31666531336139663337333165666636393631363332653633633665313638612e6a706567, 'Poojitha', 'Posters', 'No', '55fb7b47a6920f30d449ffb2139b32b0', '2023-03-17 17:11:57'),
(6, 'Animation', '<p>The following project is an animation. &nbsp;This is done to a debut film which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p>', 0x63636336623937353333646565646537666166623532393166636136633839372e6a7067, 'Suhaas', 'Graphic Designing', 'No', '2aeb3dadc90c75a4eeb8919ba585cf27', '2023-03-17 17:25:47'),
(7, '3D Graphics', '<p>The following project is a 3D Project for a short film. The short film consists of more graphical shots which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p><p>The following project is to create a poster of Pravishree Company. &nbsp;Pravishree is a start-up company which deals with graphic designing, brichures, logos, poster making, video-editing, photoshop works, event promotions, digital marketing &amp; all other kinds of marketing &amp; graphic designing works. They are all famous for their website works. They have done several websites before some of them are https://sohithsohantravles.com, https://bhaskardesigns.in &amp; many more. For the case of web development they use WordPress &amp; Tech stack like HTML, CSS, Js, Php, MySql. They are well know for they perfection in works &amp; submission of works on time. The name Pravishree represents the three persons i.e. Praveen, Vishnu, Shree. Pravishree Designs are well famous for their works &amp; had so much of positive feedback from clients.</p>', 0x34656332633030626266326163356432633731616164316463633232323261312e706e67, 'Yatheswar', 'Graphic Designing', 'No', '926d882591bbc00c8cd0968dfd0a6f50', '2023-03-17 17:27:12');

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
(1, 'Brochures, rack cards & booklets', '<p>We do all kind of brochures , rack cards &amp; booklets at an affordable price of your choice.</p>', '$100.00', '  <i class=\'bx bx-bookmarks\'></i>', '49f1ed35c23ea76c022bddc790b9cf39', '2023-03-17 15:24:27'),
(2, 'Business cards, letterhead & envelopes', '<p>Business cards &amp; letter heads to promte your business.</p>', '$80.00', '<i class=\'bx bxs-envelope-open\'></i>', '5914f9c3b93537a861e40b2c2023284d', '2023-03-17 15:25:03'),
(3, 'Logos and branded elements', '<p>Branded Logos with excellent designs.</p>', '$50.00', '<i class=\'bx bxl-graphql\'></i>', '604d693663aca25cfa9556f2b5c74a9b', '2023-03-17 15:25:34'),
(4, 'Posters, banners and signage', '<p>Poster &amp; Banners for all kind of occassions &amp; promotions.</p>', '$60.00', '<i class=\'bx bxs-paint\'></i>', 'be465451e053d33fbfda74b29d80683c', '2023-03-17 15:26:06'),
(5, 'Social media graphics & digital marketing ads', '<p>Digital Marketing &amp; Promotions for your businesses.</p>', '$150.00', '<i class=\'bx bx-desktop\'></i>', 'cb3d640b51b884140a0b85859b07dc70', '2023-03-17 15:26:36'),
(6, 'Email marketing graphics', '<p>Email Marketing &amp; Graphical Works.</p>', '$80.00', ' <i class=\'bx bx-envelope\'></i>', '3cd8b36fb46871e252436cb510654582', '2023-03-17 15:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
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
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `email`, `phoneno`, `description`, `image`, `teamid`, `role`, `joindeat`) VALUES
(1, 'Naga Teja', 'naga123@gmail.com', '8657493210', '<p><strong>He is a Front-End Developer</strong></p>', 0x61663934323363663962666339633239643663363562333939373563306662312e706e67, '5f4a1be2cb468bf12bfd3e725b79506e', 'Developer', '2023-03-17 15:29:41'),
(2, 'Bhanu Sri', 'bhanu123@gmail.com', '9505978197', '<p><strong>She is a UI Designer</strong></p>', 0x37333431366231663764353264306635333265626236653434303434626532642e706e67, 'acaf73c315790386802db1b4f52e0c37', 'Developer', '2023-03-17 15:31:29'),
(3, 'Sreyaa', 'sreya456@gmail.com', '8596412370', '<p><strong>She is a Graphic Designer</strong></p>', 0x38613134386534303438373230393833356165633461343131393033376238632e6a7067, '2de1d131536b0bc0f5add605d3cdeeec', 'Grpahic Designer', '2023-03-17 16:26:17'),
(4, 'Geetha Sri', 'geethasri@gmail.com', '7996582034', '<p><strong>She is a Full Stack Developer</strong></p>', 0x65343639346463613132313364373166333331393033343263666433663464312e6a7067, 'ae18caf39fe52f25b7d924a805d99a88', 'Developer', '2023-03-17 16:31:26'),
(5, 'Suhaas', 'suhhas789@gmail.com', '8957632014', '<p><strong>He is Video Editor</strong></p>', 0x33663830613337666637623531386334336533353133323065393234383131322e6a7067, '1e14c15fa2f1d0b244753e3674ef05c3', 'Video Editor', '2023-03-17 16:33:14'),
(6, 'Charan Sai Kumar Reddy ', 'charan143@gmail.com', '9875301246', '<p><strong>He is an Animator</strong></p>', 0x63306162306337626463363461333233336662666662343332613964383130312e706e67, 'f40d673cd3b9a24301d474e020446496', 'Animator', '2023-03-17 16:34:23'),
(7, 'Poojitha', 'pooji@gmail.com', '8975632140', '<p><strong>She is a Front-End Developer</strong></p>', 0x63326265626565663535396466623636323431333530386237636133363063652e706e67, '33c3ed598f860ee970f8c138206dcf83', 'Developer', '2023-03-17 16:35:36'),
(8, 'Vyshnavi', 'vyshu205@gmail.com', '8975632140', '<p><strong>She is a Video Editor</strong></p>', 0x31646337653863616334393139623735313563376536366336326137656365392e706e67, 'cf99946942f0b0fd57728c7c88ebade4', 'Video Editor', '2023-03-17 16:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `phoneno` text DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `role` text DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phoneno`, `image`, `role`, `createdat`) VALUES
(1, 'Ch. Ratnakar', 'ratnakarchilaka95@gmail.com', 'ratnakar@12345', '8331962896', 0x66623661613739373639613465366562363934666439323933303930313535612e706e67, 'Admin', '2023-03-15 08:31:49'),
(2, 'Naga Teja', 'naga123@gmail.com', 'naga@12345', '8356748471', 0x34613331653934373537316130613835316633626330353932373935353834642e706e67, 'User', '2023-03-17 13:44:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
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
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
