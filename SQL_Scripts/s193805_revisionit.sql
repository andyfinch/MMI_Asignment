-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2019 at 03:22 PM
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
-- Table structure for table `content_types`
--

DROP TABLE IF EXISTS `content_types`;
CREATE TABLE IF NOT EXISTS `content_types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_types`
--

INSERT INTO `content_types` (`id`, `name`) VALUES
(1, 'text'),
(2, 'image'),
(3, 'video'),
(4, 'map');

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
  `path` varchar(100) DEFAULT NULL,
  `content_type` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_topics_users_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `content`, `created`, `level`, `parent_id`, `path`, `content_type`, `user_id`) VALUES
(2, 'Uni', '', '', '2019-11-20 11:28:39', 0, 0, '0.2', 1, 1),
(3, 'List of Car parks', '', '', '2019-11-20 11:29:02', 1, 2, '0.2.3', 1, 1),
(4, 'Work', '', '', '2019-11-20 11:29:17', 0, 0, '0.4', 1, 1),
(5, 'Home', '', '', '2019-11-20 11:29:22', 0, 0, '0.5', 1, 1),
(6, 'Fines', '', '', '2019-11-20 11:29:29', 2, 3, '0.2.3.6', 1, 1),
(7, 'Stuff', '', '<p><ul><li>fsdsf</li><li>sd</li><li>f</li><li>dsf</li><li>dsf</li><li>fds</li></ul></p>', '2019-11-20 11:29:41', 3, 6, '0.2.3.6.7', 1, 1),
(8, 'Personal', '', '', '2019-11-20 11:29:49', 0, 0, '0.8', 1, 1),
(9, 'sasad', '', '<p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saads<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saads</p><p>dsadsa</p><p>saads<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saads</p><p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saads</p><p>dsadsa</p><p>saads<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saads<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saadsv<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saads</p><p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saads</p><p>dsadsa</p><p>saads<span style=\"font-size: 1rem;\">dsadsa</span></p><p>saads</p><p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads</p><p>dsadsa</p><p>saads</p>', '2019-11-20 14:22:45', 3, 6, '0.2.3.6.9', 1, 1),
(10, 'Test', '', '', '2019-11-21 14:01:44', 0, 0, '0.10', 1, 1),
(14, 'sdfsdf', '', '', '2019-11-21 14:25:41', 2, 3, '0.2.3.14', 1, 1),
(15, 'fgdfd', '', '', '2019-11-21 14:26:21', 1, 4, '0.4.15', 1, 1),
(16, 'dfgdf', '', '', '2019-11-21 14:26:24', 1, 4, '0.4.16', 1, 1),
(17, 'bvbcv', '', '<p><ul><li>sdfsdfdsf</li></ul></p>', '2019-11-21 14:28:50', 3, 14, '0.2.3.14.17', 1, 1),
(18, 'dffd', '', '', '2019-11-21 14:41:31', 4, 7, '0.2.3.6.7.18', 1, 1);

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
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `fk_topics_users_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
