-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 10 月 27 日 14:46
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `horizoner`
--

-- --------------------------------------------------------

--
-- 表的结构 `hz_family`
--

CREATE TABLE IF NOT EXISTS `hz_family` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `edu` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dir` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `comany` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `hz_family`
--

INSERT INTO `hz_family` (`id`, `img`, `name`, `edu`, `dir`, `comany`) VALUES
(1, '/img/family/a1.jpg', '彭旭东', '本科生', '', ''),
(2, '/img/family/a2.jpg', '赵月涛', '博士在读', '', ''),
(3, '/img/family/a3.jpg', '吴胜', '本科生', '创业', ''),
(4, '/img/family/a4.jpg', '曾海 ', '本科生', '', '百度'),
(5, '/img/family/a5.jpg', '彭旭东', '本科生', '', '中国移动'),
(6, '/img/family/a6.jpg', '臧涛 ', '本科生', '前端工程师', '淘宝'),
(7, '/img/family/a7.jpg', '佘城璐', '本科生', '后台开发', '新浪sae'),
(8, '/img/family/a8.jpg', '罗文琪', '本科生', '前端工程师', '新浪'),
(9, '/img/family/a9.jpg', '刘宇鹏', '本科生', '产品经理', '醋溜科技'),
(10, '/img/family/a10.jpg', '孙井钊', '本科生', '开发', '中国船舶工业系统工程研究院'),
(11, '/img/family/a11.jpg', '李智勇', '本科生', '数据分析', '去哪儿网'),
(12, '/img/family/a12.jpg', '曹佩杰', '本科生', '前端工程师', '成都赢丰无线科技有限公司'),
(13, '/img/family/a13.jpg', '钟永雄', '本科生', 'DBA', '新浪'),
(14, '/img/family/a14.jpg', '周颐', '本科生', '安卓开发', '广州市久邦数码科技有限公司'),
(15, '/img/family/a15.jpg', '郑怡', '本科生', '产品经理', '深圳市东方博雅科技有限公司'),
(16, '/img/family/a16.jpg', '曾维兴', '本科生', '后台开发', '');

-- --------------------------------------------------------

--
-- 表的结构 `hz_work`
--

CREATE TABLE IF NOT EXISTS `hz_work` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `hz_work`
--

INSERT INTO `hz_work` (`id`, `name`, `img`, `info`) VALUES
(1, '智慧我家（成都光电宽带网）', '/img/work/zhwj.jpg', '智慧我家（成都光电宽带网）'),
(2, '云上购物平台', '/img/work/ysgwpt.jpg', '云上购物平台'),
(3, '光电信息学院', '/img/work/gd.jpg', '光电信息学院'),
(4, '一名童教育', '/img/work/ymetjy.jpg', '一名童教育'),
(5, '鸡血网', '/img/work/jxw.jpg', '鸡血网'),
(6, '恣意生活', '/img/work/zysh.jpg', '恣意生活'),
(7, '依朵儿', '/img/work/yde.jpg', '依朵儿');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
