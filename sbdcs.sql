-- phpMyAdmin SQL Dump
-- version 2.11.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2016 at 07:19 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sbdcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'ovi', 'ovi');

-- --------------------------------------------------------

--
-- Table structure for table `chairman_principal_info`
--

CREATE TABLE IF NOT EXISTS `chairman_principal_info` (
  `id` int(3) NOT NULL default '0',
  `name` text NOT NULL,
  `message` text NOT NULL,
  `detail_message` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chairman_principal_info`
--

INSERT INTO `chairman_principal_info` (`id`, `name`, `message`, `detail_message`, `image`) VALUES
(0, '      ali    ', '        ali is a good boy and he love all...  ali is a good boy and he love all...  ali is a good boy and he love all...v    ', '         ali is a good boy and he love all...  ali is a good boy and he love all...  ali is a good boy and he love all...v            ali is a good boy and he love all...  ali is a good boy and he love all...  ali is a good boy and he love all...v            ali is a good boy and he love all...  ali is a good boy and he love all...  ali is a good boy and he love all...v            ali is a good boy and he love all...  ali is a good boy and he love all...  ali is a good boy and he love all...v            ali is a good boy and he love all...  ali is a good boy and he love all...  ali is a good boy and he love all...v            ali is a good boy and he love all...  ali is a good boy and he love all...  ali is a good boy and he love all...v     ', 'chamok hassan.jpeg'),
(1, '       name  ', '                Establishment of the\r\n\r\n Bangabandhu Sheikh Mujib Medical University \r\n\r\nwas an upgrade of the Institute of Postgraduate Medicine and Research (IPGMR). IPGMR was established in East Pakistan (now Bangladesh)by the then Government of Pakistan in December 1965, as a Government-controlled postgraduate institute for medical research and studies. It was housed in the now defunct Hotel Shahbag, once the biggest hotel in Dhaka.              ', '   oh good boy \r\n\r\ngo fo datiing ', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `ex_principal`
--

CREATE TABLE IF NOT EXISTS `ex_principal` (
  `id` int(5) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `join_date` varchar(100) NOT NULL,
  `regain_date` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ex_principal`
--

INSERT INTO `ex_principal` (`id`, `name`, `join_date`, `regain_date`) VALUES
(1, 'ovi', '27-18-2015', '26-23-2014');

-- --------------------------------------------------------

--
-- Table structure for table `govern_table`
--

CREATE TABLE IF NOT EXISTS `govern_table` (
  `id` int(4) NOT NULL auto_increment,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `govern_table`
--

INSERT INTO `govern_table` (`id`, `name`, `designation`, `phone`) VALUES
(1, 'ovi khan ok', 'ovi ok', 'ovi ok');

-- --------------------------------------------------------

--
-- Table structure for table `hot_news`
--

CREATE TABLE IF NOT EXISTS `hot_news` (
  `id` int(5) NOT NULL auto_increment,
  `news` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL default '0',
  `admin` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hot_news`
--

INSERT INTO `hot_news` (`id`, `news`, `publication_status`, `admin`) VALUES
(1, 'fuck everyone with your gf.', 1, ''),
(2, 'are you like to having sex??????', 0, ''),
(3, 'what is your name', 0, 'ovi');

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE IF NOT EXISTS `image_table` (
  `id` int(5) NOT NULL auto_increment,
  `image_title` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`id`, `image_title`, `image`) VALUES
(1, 'ovi', 'chamok hassan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE IF NOT EXISTS `notice_board` (
  `id` int(4) NOT NULL auto_increment,
  `headline` text NOT NULL,
  `detail_news` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`id`, `headline`, `detail_news`, `publication_status`) VALUES
(1, 'mothers fuckers go the hell!\r\n', 'every moherfuckers should go for fuck ..................so go first.', 0),
(2, 'every body fuck off.', 'do you want to know what is fuck off.....?', 0),
(3, 'go to hell', 'go to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hellgo to hell', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE IF NOT EXISTS `staff_table` (
  `id` int(3) NOT NULL auto_increment,
  `name` text NOT NULL,
  `status` text NOT NULL,
  `designation` text NOT NULL,
  `department` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`id`, `name`, `status`, `designation`, `department`, `phone`, `email`, `pic`) VALUES
(6, 'jamal', 'other', 'ok', 'ok', 'ok', 'ok by', '7.png'),
(7, 'ovi', 'teacher', 'sdffadsf', 'sdfafasdf', 'dafsdfdsaf', 'fdsafdsfds', '4.png');
