-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 okt 2019 kl 23:06
-- Serverversion: 5.6.17
-- PHP-version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `aktivbo`
--
-- DROP DATABASE `aktivbo`;
CREATE DATABASE IF NOT EXISTS `aktivbo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aktivbo`;

-- --------------------------------------------------------

--
-- Tabellstruktur `survey_respondents`
--

DROP TABLE IF EXISTS `survey_respondents`;
CREATE TABLE IF NOT EXISTS `survey_respondents` (
  `RespondentID` int(15) NOT NULL AUTO_INCREMENT COMMENT 'The unique survey ID som löpnummer',
  `FirstName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Address` varchar(65) NOT NULL,
  `E_mail` varchar(65) NOT NULL,
  PRIMARY KEY (`RespondentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Property survery information' AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
