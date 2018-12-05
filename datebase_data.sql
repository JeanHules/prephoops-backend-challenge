-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2018 at 09:17 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.1.17-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prep`
--

--
-- Dumping data for table `main_nav`
--

INSERT INTO `main_nav` (`id`, `label`, `url`) VALUES
(1, 'Work', '#/work'),
(2, 'About', '#/about'),
(3, 'Careers', '#/careers'),
(4, 'Ideas', '#/ideas'),
(5, 'News', '#/news'),
(6, 'Events', '#/events'),
(7, 'Contact', '#/contact');

--
-- Dumping data for table `sub_nav`
--

INSERT INTO `sub_nav` (`id`, `label`, `url`, `main_nav_id`) VALUES
(1, 'What We Do', '#/what-we-do', 2),
(2, 'How We Work', '#/how-we-work', 2),
(3, 'Leadership', '#/leadership', 2),
(4, 'Reports', '#/ideas/reports', 4),
(5, 'Perspectives', '#/ideas/perspectives', 4),
(6, 'Books', '#/ideas/books', 4),
(7, 'Videos', '#/ideas/videos', 4),
(8, 'Minneapolis', '#/contact/minneapolis', 7),
(9, 'Houston', '#/contact/houston', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
