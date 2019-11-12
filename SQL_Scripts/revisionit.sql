-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2019 at 08:31 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revisionit`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `Title` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Created` datetime DEFAULT NULL,
  `Test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Title`, `Description`, `Created`, `Test`) VALUES
('TitleTest', 'DescTest', '2019-10-01 00:00:00', 1),
('Test', 'Desc', '2019-10-25 13:26:38', 1),
('Test', 'Desc', '2019-10-25 13:26:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_topics_users_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `created`, `user_id`) VALUES
(11, 'sadsa', 'asd', '2019-11-08 15:28:11', 5),
(12, 'test', 'trst', '2019-11-08 15:38:29', 5),
(13, 'Sorting ', 'algorthims', '2019-11-08 15:39:48', 5),
(14, 'a', 'a', '2019-11-08 15:41:25', 5),
(15, 'a', 'd', '2019-11-08 15:41:39', 5),
(16, 'user1', 'dsfdsf', '2019-11-08 15:46:47', 1),
(17, 'User2', 'dssdfdsf', '2019-11-08 15:47:03', 2),
(18, 'Topic2', 'Desc2', '2019-11-11 09:12:31', 1),
(19, 'Another Topic', 'Another Desc', '2019-11-11 09:12:42', 1),
(20, 'Yet another topic', 'yet another description', '2019-11-11 09:12:59', 1),
(21, 'Mr', 'trst', '2019-11-11 09:14:56', 1),
(22, 'Topic50', 'Test', '2019-11-11 16:05:51', 1),
(23, 'Mr', 'trst', '2019-11-11 16:22:42', 1),
(24, 'hello', 'aaaa', '2019-11-11 17:51:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `full_name`, `city`) VALUES
(1, 'testuser1', '$2y$10$StZtP58fnRZM5ZPJuwb3/uHAz0j2YcD02ffW.0Fpxe2ff.aB9NUA2', 'pinchy1978@googlemail.com', 'Harry a', 'Felixstowes'),
(2, 'testuser2', '$2y$10$ozYVgVjxuEDZv0gagOC4m.Bdckkd4ptQTVKWHYMD1uyEYASnLDz1S', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Ipswich'),
(3, 'testuser2', '$2y$10$LFx0F/VcddMd2Iy/T2wh0uJZ8OBQPW0Wcw0B3911DO286auev22V2', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe'),
(4, 'testuser2', '$2y$10$CZgoQmBLZCy0qfD4wb15deYbmz3I/zwhBcIeBEKJ38ZnKAug3yvBK', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe'),
(5, 'testuser3', '$2y$10$579ZAbWqJgE2OcEjUePGAenbF4C0CDod19g0NkrmN6kDMiIychO7y', 'andrewfinch@mcpplc.com', 'Andrew Finchp', 'Ipswich'),
(6, 'testuser4', '$2y$10$koXnEhCCR5dUePMa5YJgZuu9rJbB4bhvl.mxRcfRBOX7sySQwJxSO', 'andrewfinch@mcpplc.com', 'AF', 'Felixstowe'),
(7, 'testuser5', '$2y$10$e5gmBvyWAE/sMUQsMdP3ruxGoJnbjK/nrmgg42cU20zN7fX85Qs0K', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe'),
(8, 'testuser6', '$2y$10$rrFZzxgwE3dOM0G0gxwPuOPGn6Oqk1gPlBFX1z/diPRYFaeNqVVAG', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe'),
(9, 'sasadssda', '$2y$10$TB8wc0XwWH2EJadQvFOgx.Imop5iASwLmqKvmM.7zrkVK7eIAUROu', 'andrewfinch@mcpplc.com', '', 'Felixstowe'),
(10, 'testuser7', '$2y$10$YM6.csyPynRudlvVzeBSWeczoTcxtsXl6WuISYtD4mjCtG0PXrJfa', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe'),
(11, 'abcabc01', '$2y$10$6kXUhgpU.qaHmtrpu4EO4OVhedOkmPWNQNyF0zkJY96DzUTeDSORa', 'andrewfinch@mcpplc.com', 'John Jones', 'Ipswich');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `fk_topics_users_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
