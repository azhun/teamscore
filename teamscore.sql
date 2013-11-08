-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 11 月 08 日 16:53
-- 服务器版本: 5.5.32-log
-- PHP 版本: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `teamscore`
--

-- --------------------------------------------------------

--
-- 表的结构 `room_list`
--

CREATE TABLE IF NOT EXISTS `room_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(100) NOT NULL,
  `time` int(20) NOT NULL,
  `event` int(1) NOT NULL,
  `team_nm` int(2) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- 表的结构 `teamscore_df`
--

CREATE TABLE IF NOT EXISTS `teamscore_df` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a` varchar(55) NOT NULL,
  `b` varchar(55) NOT NULL,
  `room_id` int(10) NOT NULL,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
