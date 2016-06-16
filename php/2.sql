-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2016 年 06 月 05 日 13:26
-- 伺服器版本: 5.5.47
-- PHP 版本: 5.5.33-1~dotdeb+7.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `2`
--

-- --------------------------------------------------------

--
-- 表的結構 `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `city_no` int(5) NOT NULL,
  `area_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- 轉存資料表中的資料 `area`
--

INSERT INTO `area` (`no`, `city_no`, `area_name`) VALUES
(1, 1, '中正區'),
(2, 1, '大同區'),
(3, 1, '中山區'),
(4, 1, '松山區'),
(5, 1, '大安區'),
(6, 1, '萬華區'),
(7, 1, '信義區'),
(8, 1, '士林區'),
(9, 1, '北投區'),
(10, 1, '內湖區'),
(11, 1, '南港區'),
(12, 1, '文山區'),
(13, 2, '楠梓區'),
(14, 2, '左營區'),
(15, 2, '鼓山區'),
(16, 2, '三民區'),
(17, 2, '鹽埕區'),
(18, 2, '前金區'),
(19, 2, '新興區'),
(20, 2, '苓雅區'),
(21, 2, '前鎮區'),
(22, 2, '旗津區'),
(23, 2, '小港區'),
(24, 2, '鳳山區'),
(25, 2, '大寮區'),
(26, 2, '鳥松區'),
(27, 2, '林園區'),
(28, 2, '仁武區'),
(29, 2, '大樹區'),
(30, 2, '大社區'),
(31, 2, '岡山區'),
(32, 2, '路竹區'),
(33, 2, '橋頭區'),
(34, 2, '梓官區'),
(35, 2, '彌陀區'),
(36, 2, '永安區'),
(37, 2, '燕巢區'),
(38, 2, '田寮區'),
(39, 2, '阿蓮區'),
(40, 2, '茄萣區'),
(41, 2, '湖內區'),
(42, 2, '旗山區'),
(43, 2, '美濃區'),
(44, 2, '內門區'),
(45, 2, '杉林區'),
(46, 2, '甲仙區'),
(47, 2, '六龜區'),
(48, 2, '茂林區'),
(49, 2, '桃源區'),
(50, 2, '那瑪夏區'),
(51, 3, '中西區'),
(52, 3, '東區'),
(53, 3, '南區'),
(54, 3, '北區'),
(55, 3, '安平區'),
(56, 3, '安南區'),
(57, 3, '永康區'),
(58, 3, '歸仁區'),
(59, 3, '新化區'),
(60, 3, '左鎮區'),
(61, 3, '玉井區'),
(62, 3, '楠西區'),
(63, 3, '南化區'),
(64, 3, '仁德區'),
(65, 3, '關廟區'),
(66, 3, '龍崎區'),
(67, 3, '官田區'),
(68, 3, '麻豆區'),
(69, 3, '佳里區'),
(70, 3, '西港區'),
(71, 3, '七股區'),
(72, 3, '將軍區'),
(73, 3, '學甲區'),
(74, 3, '北門區'),
(75, 3, '新營區'),
(76, 3, '後壁區'),
(77, 3, '白河區'),
(78, 3, '東山區'),
(79, 3, '六甲區'),
(80, 3, '下營區'),
(81, 3, '柳營區'),
(82, 3, '鹽水區'),
(83, 3, '善化區'),
(84, 3, '大內區'),
(85, 3, '山上區'),
(86, 3, '新市區'),
(87, 3, '安定區');

-- --------------------------------------------------------

--
-- 表的結構 `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 轉存資料表中的資料 `city`
--

INSERT INTO `city` (`no`, `city_name`) VALUES
(1, '台北市'),
(2, '高雄市'),
(3, '台南市');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
