-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-09 15:54:15
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hzau_routine`
--

-- --------------------------------------------------------

--
-- 表的结构 `hr_administrator`
--

CREATE TABLE IF NOT EXISTS `hr_administrator` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `class` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hr_administrator`
--

INSERT INTO `hr_administrator` (`aid`, `username`, `password`, `class`) VALUES
(1, 'admin', '123456', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hr_friendimg`
--

CREATE TABLE IF NOT EXISTS `hr_friendimg` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(10) NOT NULL,
  `img` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `hr_information`
--

CREATE TABLE IF NOT EXISTS `hr_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `con` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hr_information`
--

INSERT INTO `hr_information` (`id`, `title`, `con`) VALUES
(1, 'a', 'aaa');

-- --------------------------------------------------------

--
-- 表的结构 `hr_routine`
--

CREATE TABLE IF NOT EXISTS `hr_routine` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(50) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `time` text NOT NULL,
  `often` varchar(10) NOT NULL,
  `aid` int(11) NOT NULL DEFAULT '0',
  `fid` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hr_routine`
--

INSERT INTO `hr_routine` (`rid`, `class`, `rname`, `content`, `time`, `often`, `aid`, `fid`) VALUES
(1, '0', '1', '', '', '', 0, 0),
(2, '0', '2', '', '', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
