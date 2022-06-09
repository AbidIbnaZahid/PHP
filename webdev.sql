-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 02:15 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_experience`
--

CREATE TABLE `about_experience` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `parentage` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_experience`
--

INSERT INTO `about_experience` (`id`, `title`, `parentage`) VALUES
(1, 'WEB DESIGN', 95),
(2, 'PHP and Laravel', 92),
(3, 'JavaScript', 90),
(4, 'React js', 85),
(5, 'Express Js', 80),
(6, 'Node Js', 88),
(15, 'JSJJS', 15);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `folder_location` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `folder_location`, `status`) VALUES
(1, 'img/banner/1634122534-6564303.jpg', 'deactive'),
(2, 'img/banner/1634122781-2845296.jpg', 'deactive'),
(3, 'img/banner/1634122785-4302706.jpg', 'active'),
(4, 'img/banner/1634122789-3468953.jpg', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `job_duration` varchar(50) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `job_duration`, `job_name`, `job_title`, `job_desc`) VALUES
(2, '2012-2017', 'APPLE INC.', ' SENIOR PRODUCT DESIGNER', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the'),
(4, '2017-2020', 'FACEBOOK', 'JUNIOR UX/UIX DESIGNER', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the n');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `feature_title` varchar(50) NOT NULL,
  `clients` varchar(50) NOT NULL,
  `project_type` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `budget` int(11) NOT NULL,
  `folder_location` text NOT NULL,
  `createed_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `feature_title`, `clients`, `project_type`, `author`, `budget`, `folder_location`, `createed_time`) VALUES
(7, 'Autem non magni temp', 'Perspiciatis consec', 'Fuga Mollit in qui ', 'Abid', 3900, 'img/portfolio/1633243039-7473133.jpg', '2021-10-03 12:37:19'),
(8, 'Quis cumque autem as', 'Vero reprehenderit ', 'At soluta voluptatib', 'Quasi qui deserunt c', 6900, 'img/portfolio/1633243074-7397974.jpg', '2021-10-03 12:37:54'),
(9, 'In ipsam sed omnis q', 'Molestiae consequatu', 'Web Development', 'Ut nulla eaque et ma', 65000, 'img/portfolio/1633243276-8514972.jpg', '2021-10-03 12:41:16'),
(10, 'Cillum explicabo Et', 'Veniam ea anim fugi', 'Nulla soluta aut qui', 'Dolor quia eveniet ', 4200, 'img/portfolio/1633512214-1870738.jpg', '2021-10-06 15:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `icon`, `link`) VALUES
(10, 'fa fa-facebook', 'https://www.facebook.com/'),
(11, 'fa fa-twitter', 'https://twitter.com/?lang=en'),
(12, 'fa fa-linkedin', 'https://www.linkedin.com/'),
(13, 'fa fa-instagram', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `name`, `email`, `massage`, `status`) VALUES
(4, 'April Rasmussen', 'vysah@mailinator.com', 'Ut cupiditate aut si', 'read'),
(5, 'Kelsey Hickman', 'qanyv@mailinator.com', 'Et est et necessitat', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_desc` text NOT NULL,
  `folder_location` text NOT NULL,
  `insert_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_desc`, `folder_location`, `insert_date`) VALUES
(2, 'Qui laboriosam aspe', ' Odit qui qui irure i Odit qui qui irure i Odit qui qui irure i  Odit qui qui irure i Odit qui qui irure i Odit qui qui irure i  Odit qui qui irure i Odit qui qui irure i Odit qui qui irure i', '/webdev/img/news/1633501876-434054591.jpg', '2021-10-06 12:31:16'),
(3, 'Voluptas sed deserun', 'Minim ex saepe ex ad Minim ex saepe ex ad Minim ex saepe ex ad', '/webdev/img/news/1633502118-789043832.jpg', '2021-10-06 12:35:18'),
(4, 'Autem maiores enim a', 'Adipisicing officia  Adipisicing officia  Adipisicing officia  Adipisicing officia ', '/webdev/img/news/1633502132-493346921.jpg', '2021-10-06 12:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `partnar`
--

CREATE TABLE `partnar` (
  `id` int(11) NOT NULL,
  `partnar_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partnar`
--

INSERT INTO `partnar` (`id`, `partnar_logo`) VALUES
(19, 'img/partners/1633975382-2692669.png'),
(20, 'img/partners/1633975392-8143744.png'),
(21, 'img/partners/1633975398-5688354.png'),
(22, 'img/partners/1633975405-1877601.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_desc` text NOT NULL,
  `service_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_desc`, `service_icon`) VALUES
(7, 'Linus Ferguson', 'Fugit autem velit Fugit autem velit Fugit autem velit Fugit autem velit Fugit autem velit Fugit autem velit ', 'fa fa-adn'),
(8, 'Hamish Snow', 'Doloribus sit corpor Doloribus sit corpor Doloribus sit corpor Doloribus sit corpor Doloribus sit corpor Doloribus sit corpor ', 'fa fa-american-sign-language-interpreting'),
(10, 'Rachel Keller', 'Non rerum itaque vel Non rerum itaque vel Non rerum itaque vel Non rerum itaque vel Non rerum itaque vel ', 'fa fa-header');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `settings_name` varchar(250) NOT NULL,
  `settings_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_name`, `settings_value`) VALUES
(1, 'author_name', 'Jone Doe'),
(2, 'years_of_exprience', '6'),
(5, 'author_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy'),
(7, 'about-me_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(11, 'about_me_title', 'Just trust me'),
(14, 'author_email', 'asff@mailinator.com'),
(15, 'author_phone', '+1 01766 531-5026');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`) VALUES
(4, 'fihenogizo@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `test_desc` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `test_desc`, `name`, `company`) VALUES
(1, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'Abid', 'CEO of Appler'),
(2, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'Kamal', 'Adobe Sales Manager'),
(3, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'Jamal', 'Adobe Sales Manager'),
(4, 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the\r\n', 'jamal', 'CEO of Daraz'),
(5, 'In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat In id quidem veritat ', 'Eugenia Lowery', 'Long and Eaton Traders'),
(6, 'Amet voluptatum dol Amet voluptatum dol Amet voluptatum dol Amet voluptatum dol Amet voluptatum dol Amet voluptatum dol Amet voluptatum dol Amet voluptatum dol Amet voluptatum dol Amet voluptatum dol ', 'Gregory Bush', 'Reilly Pena Associates'),
(7, 'Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten Aute nostrud qui ten ', 'Georgia Alvarez', 'Underwood Mccullough Co'),
(8, 'Quos aut quas dolor  Quos aut quas dolor  Quos aut quas dolor  Quos aut quas dolor  Quos aut quas dolor  Quos aut quas dolor  Quos aut quas dolor  Quos aut quas dolor  Quos aut quas dolor  ', 'Audrey Levine', 'Galloway and Robertson LLC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(21, 'abid', 'abid@live.com', '1214346546345', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'rakib', 'rakib@live.com', '12354675', 'e10adc3949ba59abbe56e057f20f883e'),
(23, 'faruk', 'fa@live.com', '13213543464567', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'rofik', 'rofik@live.com', '768546565', '789d8bd66b6ce37ab135b7f58a625fc3'),
(26, 'abidibnazahid', 'abidibnazahid@gmail.com', '01743235212', 'd6742b6de3da011ff0179eab443a7f6e'),
(27, 'insan', 'inasn@live.com', '12345666778', 'e10adc3949ba59abbe56e057f20f883e'),
(28, 'shohid', 'shohid@live.com', '01745789966', 'e10adc3949ba59abbe56e057f20f883e'),
(29, 'farabi', 'farabi@live.com', '10152450689687', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_experience`
--
ALTER TABLE `about_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnar`
--
ALTER TABLE `partnar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `about_experience`
--
ALTER TABLE `about_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partnar`
--
ALTER TABLE `partnar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
