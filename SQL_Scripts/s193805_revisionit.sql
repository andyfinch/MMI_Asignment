-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2019 at 04:17 PM
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
-- Table structure for table `contentmedia`
--

DROP TABLE IF EXISTS `contentmedia`;
CREATE TABLE IF NOT EXISTS `contentmedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contentmedia`
--

INSERT INTO `contentmedia` (`id`, `content_id`, `url`) VALUES
(1, 58, 'uploads/5ddd38d6b03c820190718_121348.jpg'),
(2, 58, 'uploads/5ddd38d6b0c1e20190718_121407.jpg'),
(3, 59, 'uploads/5ddd393d198c720190718_121348.jpg'),
(4, 59, 'uploads/5ddd393d1a3d020190718_121407.jpg'),
(5, 60, 'uploads/5ddd3af1adf9120190718_121348.jpg'),
(6, 60, 'uploads/5ddd3af1ae7d520190718_121407.jpg'),
(7, 61, 'uploads/5ddd4bd5d22d0download (1).jpg'),
(8, 61, 'uploads/5ddd4bd5d2caedownload (2).jpg'),
(9, 61, 'uploads/5ddd4bd5d36b5download (3).jpg'),
(10, 61, 'uploads/5ddd4bd5d3fffdownload (4).jpg'),
(11, 61, 'uploads/5ddd4bd5d495adownload.jpg'),
(12, 61, 'uploads/5ddd4bd5d50afdownload1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `content` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_topics_id_topics_id` (`topic_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `type`, `content`, `topic_id`) VALUES
(29, 1, '', 29),
(30, 1, '', 30),
(40, 1, '<p>sdsd</p>', 40),
(41, 1, '<p>sdsd</p>', 41),
(42, 1, '<p>sdsdAAAAAAAAAAAAA</p>', 42),
(43, 1, '', 43),
(44, 1, '<p>aaa</p>', 44),
(45, 1, '<p>aaa</p>', 45),
(46, 1, '<p>aaa</p>', 46),
(47, 1, '', 47),
(48, 1, '', 48),
(49, 1, '', 49),
(50, 1, '', 50),
(51, 1, '', 51),
(52, 1, '', 52),
(54, 1, '', 54),
(55, 1, '', 55),
(57, 1, '', 57),
(58, 1, '', 58),
(60, 2, '', 60),
(61, 2, '', 61);

-- --------------------------------------------------------

--
-- Table structure for table `contenttypes`
--

DROP TABLE IF EXISTS `contenttypes`;
CREATE TABLE IF NOT EXISTS `contenttypes` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contenttypes`
--

INSERT INTO `contenttypes` (`id`, `type`) VALUES
(1, 'text'),
(2, 'image'),
(3, 'video'),
(4, 'map');

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
  `level` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_topics_users_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `created`, `level`, `parent_id`, `path`, `user_id`) VALUES
(29, 'sub fines', '', '2019-11-25 17:39:34', 0, 0, '0.29', 1),
(30, 'Work', '', '2019-11-25 17:48:52', 0, 0, '0.30', 1),
(40, 'sds', '', '2019-11-26 13:20:01', 0, 0, '0.40', 1),
(41, 'ssds', '', '2019-11-26 13:47:41', 1, 29, '0.29.41', 1),
(42, 'sds', '', '2019-11-26 13:47:51', 2, 41, '0.29.41.42', 1),
(43, 'Files', '', '2019-11-26 13:50:06', 0, 0, '0.43', 1),
(44, 'aaa', '', '2019-11-26 13:50:56', 0, 0, '0.44', 1),
(45, 'aaa', '', '2019-11-26 13:54:34', 0, 0, '0.45', 1),
(46, 'aaa', '', '2019-11-26 13:55:59', 0, 0, '0.46', 1),
(47, 'aaa', '', '2019-11-26 13:56:42', 0, 0, '0.47', 1),
(48, 'aaa', '', '2019-11-26 13:57:06', 0, 0, '0.48', 1),
(49, 'aaa', '', '2019-11-26 13:57:37', 0, 0, '0.49', 1),
(50, 'aaa', '', '2019-11-26 13:58:07', 0, 0, '0.50', 1),
(51, 'asadad', '', '2019-11-26 14:00:08', 0, 0, '0.51', 1),
(52, 'asadad', '', '2019-11-26 14:15:02', 0, 0, '0.52', 1),
(54, 'asadad', '', '2019-11-26 14:31:54', 0, 0, '0.54', 1),
(55, 'asadad', '', '2019-11-26 14:33:50', 0, 0, '0.55', 1),
(57, 'asadad', '', '2019-11-26 14:34:56', 0, 0, '0.57', 1),
(58, 'asadad', '', '2019-11-26 14:38:14', 0, 0, '0.58', 1),
(60, 'Uni', '', '2019-11-26 14:47:13', 0, 0, '0.60', 1),
(61, 'teet', '', '2019-11-26 15:59:17', 1, 60, '0.60.61', 1);

--
-- Triggers `topics`
--
DROP TRIGGER IF EXISTS `set_path`;
DELIMITER $$
CREATE TRIGGER `set_path` BEFORE INSERT ON `topics` FOR EACH ROW SET NEW.path = 
  CONCAT(IFNULL((select path from topics where id = NEW.parent_id), '0'), '.', (select auto_increment
    from information_schema.tables
   where table_name = 'topics'
     and table_schema = database())
)
$$
DELIMITER ;

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
(1, 'testuser1', '$2y$10$StZtP58fnRZM5ZPJuwb3/uHAz0j2YcD02ffW.0Fpxe2ff.aB9NUA2', 'pinchy1978@googlemail.com', 'Andrew Finchp', 'Felixstowes', NULL),
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
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `fk_contents_topic_id_topics_id` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `fk_topics_users_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
