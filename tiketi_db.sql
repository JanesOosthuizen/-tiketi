-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: dedi320.jnb2.host-h.net
-- Generation Time: Jun 09, 2017 at 06:45 AM
-- Server version: 5.5.55-0+deb7u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tiketi_db8`
--

-- --------------------------------------------------------

--
-- Table structure for table `deviceHistory`
--

CREATE TABLE IF NOT EXISTS `deviceHistory` (
`id` int(11) NOT NULL,
  `device` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
`iddevices` int(11) NOT NULL,
  `deviceMake` varchar(100) DEFAULT NULL,
  `deviceModel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobcards`
--

CREATE TABLE IF NOT EXISTS `jobcards` (
`idJobcards` int(11) NOT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `contactName` varchar(255) DEFAULT NULL,
  `contactSurname` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `cellphone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Idnr` varchar(255) DEFAULT NULL,
  `jobcardStatus` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `SalesPerson` int(11) NOT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateUpdated` datetime DEFAULT NULL,
  `dateCompleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobcard_item`
--

CREATE TABLE IF NOT EXISTS `jobcard_item` (
`idjobcard_item` int(11) NOT NULL,
  `technician` int(11) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `serialnr` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `modelno` varchar(255) DEFAULT NULL,
  `faultDescription` longtext,
  `assignedTo` int(11) DEFAULT NULL,
  `jobcard` int(11) DEFAULT NULL,
  `deviceStatus` varchar(45) DEFAULT NULL,
  `DateCreated` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Settings`
--

CREATE TABLE IF NOT EXISTS `Settings` (
`idSettings` int(11) NOT NULL,
  `settingKey` varchar(255) DEFAULT NULL,
  `settingValue` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temporaryDetails`
--

CREATE TABLE IF NOT EXISTS `temporaryDetails` (
`idaccessDetails` int(11) NOT NULL,
  `jobcardID` int(11) DEFAULT NULL,
  `securityCode` varchar(255) DEFAULT NULL,
  `appleId` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `unlockpattern` varchar(255) DEFAULT NULL,
  `signature` longtext,
  `accessories` longtext,
  `jobcardDevice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `capabilities` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_ip` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `email_address`, `company`, `capabilities`, `active`, `date_created`, `password`, `last_login`, `last_ip`) VALUES
(1, 'Tiketi', 'Software', 'demo@tiketi.co.za', '0', 0, 1, '2015-07-02 00:00:00', '04e632d2b633380b95f1fe0a79a00232', '2017-06-08 21:30:33', '41.13.238.235');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deviceHistory`
--
ALTER TABLE `deviceHistory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
 ADD PRIMARY KEY (`iddevices`);

--
-- Indexes for table `jobcards`
--
ALTER TABLE `jobcards`
 ADD PRIMARY KEY (`idJobcards`);

--
-- Indexes for table `jobcard_item`
--
ALTER TABLE `jobcard_item`
 ADD PRIMARY KEY (`idjobcard_item`);

--
-- Indexes for table `Settings`
--
ALTER TABLE `Settings`
 ADD PRIMARY KEY (`idSettings`);

--
-- Indexes for table `temporaryDetails`
--
ALTER TABLE `temporaryDetails`
 ADD PRIMARY KEY (`idaccessDetails`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deviceHistory`
--
ALTER TABLE `deviceHistory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
MODIFY `iddevices` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobcards`
--
ALTER TABLE `jobcards`
MODIFY `idJobcards` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobcard_item`
--
ALTER TABLE `jobcard_item`
MODIFY `idjobcard_item` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Settings`
--
ALTER TABLE `Settings`
MODIFY `idSettings` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temporaryDetails`
--
ALTER TABLE `temporaryDetails`
MODIFY `idaccessDetails` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
