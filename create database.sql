
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lost_object`
--
DROP DATABASE `lost_object`;
CREATE DATABASE IF NOT EXISTS `lost_object` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lost_object`;

-- --------------------------------------------------------

--
-- 表的结构 `object_obj`
--

DROP TABLE IF EXISTS `object_obj`;
CREATE TABLE IF NOT EXISTS `object_obj` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_name` varchar(50) NOT NULL,
  `obj_description` varchar(500) DEFAULT NULL,
  `obj_photofilename` varchar(50) DEFAULT NULL,
  `obj_adddate` datetime DEFAULT NULL,
  `obj_stat` int(11) DEFAULT '1',
  PRIMARY KEY (`obj_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `object_obj`
--

INSERT INTO `object_obj` (`obj_id`, `obj_name`, `obj_description`, `obj_photofilename`, `obj_adddate`, `obj_stat`) VALUES
(1, 'Object declared by student', 'This is a lost object by student!', '1516666299.jpeg', '2018-01-23 01:11:38', 1),
(2, 'Object declared by student2', 'This is a lost object by student2', NULL, '2018-01-23 01:14:37', 1),
(3, 'A found object by administrator', 'This is a found object by administrator', '1516666536.jpeg', '2018-01-23 01:15:35', 1),
(4, 'A found object already given back by administrator', 'This a found object but already given back by administrator', NULL, '2018-01-23 01:16:26', 2),
(5, 'a given back declared object by student', 'This is a given back declared object by student', NULL, '2018-01-23 01:17:19', 2),
(7, 'a found and abandoned object by administrator', 'This is a found and abandoned object by administrator', NULL, '2018-01-23 01:20:11', 3);

-- --------------------------------------------------------

--
-- 表的结构 `objectdeclared_ojd`
--

DROP TABLE IF EXISTS `objectdeclared_ojd`;
CREATE TABLE IF NOT EXISTS `objectdeclared_ojd` (
  `ojd_id` int(11) NOT NULL AUTO_INCREMENT,
  `ojd_obj_id` int(11) DEFAULT NULL,
  `ojd_declarer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ojd_id`),
  KEY `ojd_obj_id` (`ojd_obj_id`),
  KEY `ojd_declarer` (`ojd_declarer`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `objectdeclared_ojd`
--

INSERT INTO `objectdeclared_ojd` (`ojd_id`, `ojd_obj_id`, `ojd_declarer`) VALUES
(1, 1, 'student'),
(2, 2, 'student2'),
(3, 5, 'student'),
(4, 6, 'student2');

-- --------------------------------------------------------

--
-- 表的结构 `objectfound_ojf`
--

DROP TABLE IF EXISTS `objectfound_ojf`;
CREATE TABLE IF NOT EXISTS `objectfound_ojf` (
  `ojf_id` int(11) NOT NULL AUTO_INCREMENT,
  `ojf_obj_id` int(11) DEFAULT NULL,
  `ojf_adder` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ojf_id`),
  KEY `ojf_obj_id` (`ojf_obj_id`),
  KEY `ojf_adder` (`ojf_adder`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `objectfound_ojf`
--

INSERT INTO `objectfound_ojf` (`ojf_id`, `ojf_obj_id`, `ojf_adder`) VALUES
(1, 3, 'administrator'),
(2, 4, 'administrator'),
(3, 7, 'administrator');

-- --------------------------------------------------------

--
-- 表的结构 `user_usr`
--

DROP TABLE IF EXISTS `user_usr`;
CREATE TABLE IF NOT EXISTS `user_usr` (
  `usr_id` varchar(50) NOT NULL,
  `usr_pw` varchar(255) NOT NULL,
  `usr_name` varchar(50) NOT NULL,
  `usr_level` int(1) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_usr`
--

INSERT INTO `user_usr` (`usr_id`, `usr_pw`, `usr_name`, `usr_level`) VALUES
('student', '$2y$10$rrlP8byouPUcX0bxyExPe.nuJJ7fBGJTASxD0ZwA.0GZMiSTpaKAO', 'student', 1),
('student2', '$2y$10$mXXVWGbs4ZOKUGu9jIKMTOz2PQtM5igKhcxpnxUEjKD395coCAdkW', 'student2', 1),
('administrator', '$2y$10$k1E7vOF5O2is.6aVRusAnO6en3yDeZx6P1FC4fA2BSwv/GIuPAFsC', 'administrator', 2),
('developer', '$2y$10$SuUaAWyfpXCDpFpNMVX99.DzqQUYFD8NjiwH.2JiJ5s/BOdQGgZn.', 'developer', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
