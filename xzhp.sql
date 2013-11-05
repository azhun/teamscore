-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 11 月 04 日 08:06
-- 服务器版本: 5.1.41
-- PHP 版本: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xzhp`
--
CREATE DATABASE `xzhp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `xzhp`;

-- --------------------------------------------------------

--
-- 表的结构 `df`
--

CREATE TABLE IF NOT EXISTS `df` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a` varchar(55) NOT NULL,
  `b` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `df`
--

INSERT INTO `df` (`id`, `a`, `b`) VALUES
(31, '2', '1'),
(30, '4', '2'),
(29, '5', '4'),
(28, '5', '3'),
(27, '5', '1'),
(26, '2', '5'),
(25, '2', '5'),
(24, '4', '3'),
(23, '3', '1'),
(22, '4', '3'),
(21, '4', '5'),
(20, '1', '4'),
(19, '1', '4'),
(18, '1', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
