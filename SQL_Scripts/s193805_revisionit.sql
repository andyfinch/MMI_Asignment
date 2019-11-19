-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2019 at 03:26 PM
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
-- Database: `s193805_revisionit`
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
  `content` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `parent_path` varchar(5000) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_topics_users_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `content`, `created`, `level`, `parent_id`, `parent_path`, `user_id`) VALUES
(1, 'Uni', '', '', '2019-11-19 13:37:41', 0, 0, '0', 1),
(2, 'Work', '', '', '2019-11-19 13:37:46', 0, 0, '0', 1),
(3, 'Home', '', '', '2019-11-19 13:37:51', 0, 0, '0', 1),
(4, 'Modules', '', '<p>sadsafdsfdsfff<span style=\"font-size: 1rem;\">sadsafdsfdsfff</span><span style=\"font-size: 1rem;\">sadsafdsfdsfff</span><span style=\"font-size: 1rem;\">sadsafdsfdsfff</span><span style=\"font-size: 1rem;\">sadsafdsfdsfff</span><span style=\"font-size: 1rem;\">sadsafdsfdsfff</span><span style=\"font-size: 1rem;\">sadsafdsfdsfff</span><span style=\"font-size: 1rem;\">sadsafdsfdsfff</span><br></p><p>sadsafdsfdsfff<span style=\"font-size: 1rem;\">sadsafdsfdsfff</span><span style=\"font-size: 1rem;\"><br></span></p><p><span style=\"font-size: 1rem;\"><br></span></p><p>sadsafdsfdsfff<span style=\"font-size: 1rem;\"><br></span></p><p>sadsafdsfdsfff<br></p><p>sadsafdsfdsfff<br></p><p><br></p><p><br></p><p>sadsafdsfdsfff<br></p><p>sadsafdsfdsfff<br></p><p>sadsafdsfdsfff<br></p>', '2019-11-19 13:38:01', 1, 1, '0-1', 1),
(5, 'Car Parks', '', '', '2019-11-19 13:38:19', 1, 1, '0-1', 1),
(6, 'CDS', '', '', '2019-11-19 13:38:36', 1, 2, '0-2', 1),
(7, 'Testing', '', '', '2019-11-19 13:38:49', 2, 6, '0-2-6', 1),
(8, 'Bills', '', '', '2019-11-19 13:38:57', 1, 3, '0-3', 1),
(9, 'Cooking', '', '', '2019-11-19 13:39:09', 1, 3, '0-3', 1),
(10, 'Recipes', '', '', '2019-11-19 13:39:17', 2, 9, '0-3-9', 1),
(11, 'Chicken ', '', '<p><ul><li>fdsf</li><li>ds</li><li>f</li><li>dsf</li><li>dsf</li><li>dsf</li></ul></p>', '2019-11-19 13:39:33', 3, 10, '0-3-9-10', 1),
(12, 'Pork', '', '<p><ul><li>dsfds</li><li>f</li><li>dsf</li><li>dsf</li><li>ds</li><li>fs</li><li>fd</li></ul></p>', '2019-11-19 13:39:45', 3, 10, '0-3-9-10', 1),
(13, 'ssd', '', '', '2019-11-19 13:53:59', 0, 0, '0', 1),
(14, 'ssd', 'sdsd', '', '2019-11-19 14:05:08', 0, 0, '0', 1),
(15, 'test', '', '', '2019-11-19 14:12:48', 1, 13, '0-13', 1),
(16, 'aaaaaaaaaaaaaaaaa', '', '', '2019-11-19 14:17:44', 1, 14, '0-14', 1);

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
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `full_name`, `city`, `image_url`) VALUES
(1, 'testuser1', '$2y$10$StZtP58fnRZM5ZPJuwb3/uHAz0j2YcD02ffW.0Fpxe2ff.aB9NUA2', 'pinchy1978@googlemail.com', 'Andrew Finch', 'Felixstowes', NULL),
(2, 'testuser2', '$2y$10$ozYVgVjxuEDZv0gagOC4m.Bdckkd4ptQTVKWHYMD1uyEYASnLDz1S', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Ipswich', NULL),
(3, 'testuser2', '$2y$10$LFx0F/VcddMd2Iy/T2wh0uJZ8OBQPW0Wcw0B3911DO286auev22V2', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe', NULL),
(4, 'testuser2', '$2y$10$CZgoQmBLZCy0qfD4wb15deYbmz3I/zwhBcIeBEKJ38ZnKAug3yvBK', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe', NULL),
(5, 'testuser3', '$2y$10$579ZAbWqJgE2OcEjUePGAenbF4C0CDod19g0NkrmN6kDMiIychO7y', 'andrewfinch@mcpplc.com', 'Andrew Finchp', 'Ipswich', NULL),
(6, 'testuser4', '$2y$10$koXnEhCCR5dUePMa5YJgZuu9rJbB4bhvl.mxRcfRBOX7sySQwJxSO', 'andrewfinch@mcpplc.com', 'AF', 'Felixstowe', NULL),
(7, 'testuser5', '$2y$10$e5gmBvyWAE/sMUQsMdP3ruxGoJnbjK/nrmgg42cU20zN7fX85Qs0K', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe', NULL),
(8, 'testuser6', '$2y$10$rrFZzxgwE3dOM0G0gxwPuOPGn6Oqk1gPlBFX1z/diPRYFaeNqVVAG', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe', NULL),
(9, 'sasadssda', '$2y$10$TB8wc0XwWH2EJadQvFOgx.Imop5iASwLmqKvmM.7zrkVK7eIAUROu', 'andrewfinch@mcpplc.com', '', 'Felixstowe', NULL),
(10, 'testuser7', '$2y$10$YM6.csyPynRudlvVzeBSWeczoTcxtsXl6WuISYtD4mjCtG0PXrJfa', 'andrewfinch@mcpplc.com', 'Andrew Finch', 'Felixstowe', NULL),
(11, 'abcabc01', '$2y$10$6kXUhgpU.qaHmtrpu4EO4OVhedOkmPWNQNyF0zkJY96DzUTeDSORa', 'andrewfinch@mcpplc.com', 'John Jones', 'Ipswich', NULL);

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
