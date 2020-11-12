-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 11 月 10 日 12:54
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `itcast_ls`
--

-- --------------------------------------------------------

--
-- 表的结构 `ls_admin`
--

CREATE TABLE IF NOT EXISTS `ls_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ls_admin`
--

INSERT INTO `ls_admin` (`id`, `name`, `password`) VALUES
(1, '1825', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `ls_fangwei`
--

CREATE TABLE IF NOT EXISTS `ls_fangwei` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL COMMENT '防伪码'
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `ls_fangwei`
--

INSERT INTO `ls_fangwei` (`id`, `code`) VALUES
(1, 123456);

-- --------------------------------------------------------

--
-- 表的结构 `ls_fankui`
--

CREATE TABLE IF NOT EXISTS `ls_fankui` (
  `id` int(11) NOT NULL,
  `title` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `ls_fankui`
--

INSERT INTO `ls_fankui` (`id`, `title`, `phone`, `content`) VALUES
(1, '杜林有限公司', '2147483647', '你们的货是真的烂，快算了吧！'),
(2, '杜林集团', '2147483647', '太垃圾了，退钱！'),
(3, 'LS公司', '18153799016', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `ls_product`
--

CREATE TABLE IF NOT EXISTS `ls_product` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `path` varchar(255) NOT NULL,
  `time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `ls_product`
--

INSERT INTO `ls_product` (`id`, `name`, `path`, `time`) VALUES
(1, '充电式修枝剪DCYD30（B型）', 'upload/5e8bdb90e111e.jpg', '2020-10-10'),
(2, '充电式无刷细手柄角向磨光机DCSM03-100E', 'upload/5e8bd5b408ce2.png', '2020-10-05'),
(3, '黄金够杜林', 'upload/5e8bdb90e111e.jpg', '2020-10-10');

-- --------------------------------------------------------

--
-- 表的结构 `ls_wenzhang`
--

CREATE TABLE IF NOT EXISTS `ls_wenzhang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '标题',
  `thumb` varchar(255) NOT NULL COMMENT '封面图',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `content` text NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `ls_wenzhang`
--

INSERT INTO `ls_wenzhang` (`id`, `title`, `thumb`, `time`, `content`) VALUES
(1, 'LS公司2018校园招聘完美拉开帷mu', 'upload/banner3.jpg', '2020-08-31 16:00:00', '又到了一年一度的校园招聘季，“携手LS，放飞梦想—LS2018校园招聘”活动正式拉开帷幕。'),
(2, 'LS公司', 'upload/banner3.jpg', '2020-10-09 16:00:00', '哈哈短时都啊售后');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
