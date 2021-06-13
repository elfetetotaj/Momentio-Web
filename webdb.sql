-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 04:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `lastname`, `email`, `subject`, `message`, `date_add`) VALUES
(2, 'Elfete', 'Totaj', 'po@gmail.com', 'TEST FROM FRONT', 'WERTYOIUYDFGHJKLKJHGFDSZXCVGHJKL;LKJHGFDSWERTYUIOPOIUYTRSDFGHJKL', '2021-01-17 02:01:26'),
(4, 'Elfete', 'Totaj', 'elfete@gmail.com', 'agfsrgdg', 'aedfghjkjhgfdsasdfg', '2021-01-18 23:33:46'),
(5, 'Elfete', 'Totaj', 'po@gmail.com', 'WEB', 'Hello from UBT.', '2021-01-20 23:06:13'),
(6, 'UBT', 'UBT', 'ubt@gmail.com', 'WEB', 'UBT UBT UBT UBT UBT UBT UBT UBT UBT', '2021-01-21 02:04:55'),
(7, 'Xhelal', 'Jashari', 'xs@gmail.com', 'WEB', 'Projekti WEB', '2021-01-21 02:26:32'),
(8, 'Elfete', 'Totaj', 'elfete@gmail.com', 'Inxhineri e Web-it', 'MOMENTIO WEB - My project', '2021-02-02 14:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `info` varchar(1024) NOT NULL,
  `info_plus` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `info`, `info_plus`, `image`, `date_add`) VALUES
(1, 'MOMENTIO', 'SIMPLICITY IS GOOD', 'Learn More', '', '1611358453logo.png', '2021-01-22 23:34:13'),
(2, 'MOMENTIO', 'Dennis and friends created the', 'and now they control the world', 'WE MAKE YOUR IDEA REAL', '1611358612logo_info.png', '2021-01-22 23:36:52'),
(3, 'INFO 2', 'What is design? It\'s where you stand with a foot in two worlds - the world of technology', 'and the world of people and human purposes - and you try to bring the two together.', '', '1611359000', '2021-01-22 23:43:12'),
(4, 'Graphic Design', 'You can design and create, and build the most wonderful place in the world. But it takes people to make the dream a reality.', '', '', '1611359053graficIcon.png', '2021-01-22 23:44:13'),
(5, 'Web Design', 'Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development.', '', '', '1611359096logoWeb-design.png', '2021-01-22 23:44:56'),
(6, 'Web Programing', 'Web programming refers to the writing, markup and coding involved in Web development, which includes Web content, Web client and server scripting and network security.', '', '', '1611359123WebProgramingIcon.png', '2021-01-22 23:45:23'),
(7, 'Full Support', 'Design is directed toward human beings. To design is to solve human problems by identifying them and executing the best solution.', '', '', '1611359152suportIcon.png', '2021-01-22 23:45:52'),
(8, 'Quote', 'The urge for good design is the same', 'as the urge to go on living.', '', '1611359765', '2021-01-22 23:56:05'),
(9, 'Why you shuld work with us', 'Outside of the chair, the teapot is the most ubiquitous and important design element in the domestic environment and almost everyone who has tackled the world of design has ended up designing one.The world is changing. Below we have listed some points to figure out how to hire a web developer that will help you to hire and work with a web developer smoothly.. How can one miss the train?', '', '', '1611360321', '2021-01-22 23:59:57'),
(10, '01', 'I think it\'s really important to design things with a kind of personality.', '02', 'Design works if it\'s authentic, inspired, and has a clear point of view. It can\'t be a collection of input.', '1611360222', '2021-01-23 00:03:42'),
(11, '03', 'Many things difficult to design prove easy to performance.', '04', 'Color does not add a pleasant quality to design - it reinforces it.', '1611360258', '2021-01-23 00:04:18'),
(12, 'Infographic', 'Responsive modern design great for any bussiness', 'Some people say design is about solving problems. Obviously designers solve problems but so do dentists. Design is about cultural invention.', 'Lerarn More', '1611360669', '2021-01-23 00:11:09'),
(13, 'Who we are?', 'I have no data yet.Insensibly one begins to twist facts to suit theories, instead of theories to suit facts.An associate\'s degree in web design or related field is the most common requirement. However, for more specialized developer positions, such as back-end web developers, some employers prefer workers who have at least a bachelor\'s degree in computer science, programming, or a related field.', '', '', '1611360983', '2021-01-23 00:16:23'),
(14, 'Software developer', 'William Henry Gates is an American business magnate, software developer, and philanthropist. He is best known as the co-founder of Microsoft Corporation.During his career at Microsoft, Gates held the positions of chairman, chief executive officer (CEO), president and chief software architect, while also being the largest individual shareholder until May 2014.', 'Bill', 'Gates', '1611361243Bill Gates.png', '2021-01-23 00:20:43'),
(15, 'Morgan Doe', 'Web development', '', '', '1611363352Morgan Doe.png', '2021-01-23 00:55:52'),
(16, 'Chris Coyier', 'Web designer', '', '', '1611363377Chris Coyier.jpg', '2021-01-23 00:56:17'),
(17, 'Julia William', 'Web development', '', '', '1611363409Julia William.png', '2021-01-23 00:56:49'),
(18, 'HTML 5', 'Java Script ', 'PHP', 'Adobe', '1611364107', '2021-01-23 01:08:27'),
(19, 'Quote 2 ', 'The design of each element should be thought out', 'in order to be easy to make and easy to repair.', '', '1611364276', '2021-01-23 01:11:16'),
(20, 'Check our price', 'What is design? It\'s where you stand with a foot in two worlds - the world of technology and', 'the world of people and human purposes - and you try to bring the two together.', '', '1611399635', '2021-01-23 01:34:27'),
(21, 'Web Design', 'start from:', '199$', '', '1611399972', '2021-01-23 01:34:36'),
(22, 'HTML5&CSS3 Valid', 'Modern Design', 'Fully animated', 'PHP Form', '1611400011', '2021-01-23 01:34:44'),
(23, 'Full Support', 'Contact Us ', 'and let us know if you have any questions', 'Don’t forget to subscribe for more awesome stuff by typing mail below', '1611404124', '2021-01-23 01:34:52'),
(24, 'OFFICE', '7 Awesome Avenue #310ST', 'New York, NY 10170', 'United States', '1611404467', '2021-01-23 01:35:00'),
(25, 'OFFICE', '(1)23-456-7890', 'ourmail@momentio.ltd', '', '1611404924', '2021-01-23 12:28:44'),
(26, 'BACK TO TOP', 'Copyright 2013 Momentio. All Rights Reserved', '', '', '1611405228logo-footer.png', '2021-01-23 12:33:32'),
(27, 'Client', 'Rocket', '', '', '1611406274logo5.png', '2021-01-23 12:36:38'),
(28, 'Client', 'Jupiter', '', '', '1611406229logo3.png', '2021-01-23 12:36:54'),
(29, 'Client', 'Half', '', '', '1611406211logo4.png', '2021-01-23 12:37:08'),
(30, 'Client', 'Mars', '', '', '1611406184logo2.png', '2021-01-23 12:37:20'),
(31, 'Client', 'Mars', '', '', '1611406160logo2.png', '2021-01-23 12:37:33'),
(32, 'Client', 'Monopic', '', '', '1611406137logo1.png', '2021-01-23 12:37:55'),
(33, 'Client', 'Jupiter', '', '', '1611406104logo3.png', '2021-01-23 12:38:17'),
(34, 'Client', 'Pocket', '', '', '1611406053logo5.png', '2021-01-23 12:39:24'),
(35, 'Client', 'Half', '', '', '1611406004logo4.png', '2021-01-23 12:39:58'),
(36, 'Client', 'Jupiter', '', '', '1611405978logo3.png', '2021-01-23 12:40:23'),
(37, 'Client', 'Mars', '', '', '1611405958logo2.png', '2021-01-23 12:40:39'),
(38, 'Client', 'Monopic', '', '', '1611405937logo1.png', '2021-01-23 12:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `slideshow_id` int(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`slideshow_id`, `title`, `image`, `date_add`) VALUES
(3, 'HTML', '1611408563html.png', '2021-01-23 13:29:23'),
(4, 'CSS', '1611408575css.png', '2021-01-23 13:29:35'),
(5, 'JS', '1611408589js.png', '2021-01-23 13:29:49'),
(6, 'PHP', '1611408692php.png', '2021-01-23 13:30:03'),
(7, 'Laravel', '1611408943laravel.png', '2021-01-23 13:35:43'),
(8, 'NODE JS', '1611409122nodejs.png', '2021-01-23 13:38:42'),
(9, 'GIT', '1611409135git.png', '2021-01-23 13:38:55'),
(10, 'VUE', '1611409146vue.png', '2021-01-23 13:39:06'),
(11, 'Bootstrap', '1611410105bootstrap.png', '2021-01-23 13:55:05'),
(12, 'www', '1611410135www.png', '2021-01-23 13:55:35'),
(13, 'web', '1611410169img1.png', '2021-01-23 13:55:44'),
(14, 'web', '1611410217img2.png', '2021-01-23 13:55:56'),
(15, 'web', '1611410882img3.png', '2021-01-23 14:08:02'),
(16, 'WEB', '1611410898img4.png', '2021-01-23 14:08:18'),
(17, 'WEB', '1611410909img5.png', '2021-01-23 14:08:29'),
(18, 'WEB', '1611413199img18.png', '2021-01-23 14:08:40'),
(19, 'WEB', '1611411923img8.png', '2021-01-23 14:25:23'),
(20, 'WEB', '1611411968img7.png', '2021-01-23 14:26:08'),
(21, 'WEB', '1611413854img13.png', '2021-01-23 14:26:27'),
(22, 'WEB', '1611411997img11.png', '2021-01-23 14:26:37'),
(23, 'WEB', '1611413962img5.png', '2021-01-23 14:59:22'),
(24, 'WEB', '1611413980img12.png', '2021-01-23 14:59:40'),
(25, 'WEB', '1611414056img2.png', '2021-01-23 14:59:51'),
(26, 'WEB', '1611414001img14.png', '2021-01-23 15:00:01'),
(27, 'WEB', '1611414127img15.png', '2021-01-23 15:02:07'),
(28, '', '1611414136img16.png', '2021-01-23 15:02:16'),
(29, 'WEB', '1611414151img17.png', '2021-01-23 15:02:31'),
(30, 'WEB', '1611414166img18.png', '2021-01-23 15:02:46'),
(31, 'WEB', '1611414591img14.png', '2021-01-23 15:03:02'),
(32, 'WEB', '1611414570git.png', '2021-01-23 15:03:10'),
(33, 'WEB', '1611414515img3.png', '2021-01-23 15:03:18'),
(34, 'WEB', '1611414209img8.png', '2021-01-23 15:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `surname`, `email`, `password`, `permission`) VALUES
(3, 'elfetetotaj', 'Elfete', 'Totaj', 'elfete@gmail.com', '$2y$10$HFiOvQqAcAGLb0ok/g4zDuozmTY.CGu3pTA0QlncdSHKy/Reww5XS', 0),
(4, 'eeeeeee', 'Elfete', 'Totaj', 'elfete@gmail.com', '$2y$10$NZO947LtYPsCwpX7O7d9WulNy77rOW8Ru3.P2vRbROJ3mWTJ5mxQq', 0),
(5, 'bbbbbb', 'wefwf', 'wefwfwf', 'werf@gmail.com', '$2y$10$caa14XTMM9bbmtVaccw07uIqIj4Jl.j7gk.Dnv4.y3ub606DFipYq', 0),
(6, 'poiuytrew', 'qwertyui', 'Totaj', 'werf@gmail.com', '$2y$10$RYItq8I5uS.x6XRf2WiH5O2re.bKqRrbqCNxe/GRKNoeGW9SXFBEK', 0),
(7, 'etetetetet', 'Elfete', 'Totaj', 'elfete@gmail.com', '$2y$10$AyYXUYMLkLC72BsqpeQ5l.IcygV5MZB7h5FmfFBEUW3dLqNl8JXgm', 0),
(8, 'eetetetet', 'Elfete', 'Totaj', 'elfete@gmail.com', '$2y$10$jDMt0E1nagm7jVBvDOAWyuZpLloKkIF9ZBFs5LdL57jLd.NdusSUu', 0),
(10, 'fete', 'elfete', 'totaj', 'elfete@gmail.com', '$2y$10$86TAldgiG9anNVyUaanvGO0j1J5QoW5E.rP2NLSFSfBsaQwT0ryuC', 1),
(11, 'elfetetotaj', 'Elfete', 'Totaj', 'et@gmail.com', 'elfetetotaj', 1),
(12, 'elfete_t', 'Elfete', 'Totaj', 'elfete@gmail.com', '$2y$10$USr6Nd0EAwvtusNZo7vgeu2P2OzxnFymdfXlVFn1ijkLNg9ZCqTye', 1),
(13, 'arti', 'Syart', 'Totaj', 'arti@gmail.com', 'syarttotaj', 0),
(17, 'user', 'Admin', 'Admin', 'po@gmail.com', '$2y$10$OC6AToFEnQsQX9.nDxzQrOZJ9evnSUxo4YPrF1WMET8/iwUv6KaPO', 0),
(18, 'user99', 'useri', 'userika', 'userika@gmail.com', '$2y$10$EZ65DEY06KRNn/3OZSIBPu.lnGpQChJxYJQ/QHIV0VuvXnvbb0ih6', 0),
(19, 'user88', 'useriiii', 'userini', 'user@gmail.com', 'user88', 0),
(20, 'arti', 'Syart', 'Totaj', 'arti@gmail.com', '$2y$10$r8/oQQSG1vxKgw5mZlnGTugYwAEKgZRh28OvK.Kih.H0UQ5zVHgxO', 0),
(21, 'UBT', 'UBT', 'WEB', 'ubt@gmail.com', '$2y$10$0k08.v3T/CirDgBz0.0D6eaSbMvxWss5P6GhGWwlcDpK2pKGH1ci6', 0),
(22, 'ubt', 'UBT', 'UBT', 'ubt@gmail.com', '$2y$10$XP7KfsE7/DolUCWLU1evPuztLEDEMfkGsoHyqjDx.wFqPOIgk8E1S', 0),
(23, 'user1', 'user1', 'user', 'user@gmail.com', '$2y$10$ldElh2y1W9gXa8nf8ziFWOgJhqPtGO0UGArd3do1uacQrZLgTgXa.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `slideshow_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
