-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2017 at 07:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `99toppings`
--

-- --------------------------------------------------------

--
-- Table structure for table `Ani`
--

CREATE TABLE `Ani` (
  `PizzaId` int(11) NOT NULL,
  `PizzaC` varchar(250) NOT NULL,
  `PizzaS` varchar(250) NOT NULL,
  `PizzaT` varchar(250) NOT NULL,
  `TstKey` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ani`
--

INSERT INTO `Ani` (`PizzaId`, `PizzaC`, `PizzaS`, `PizzaT`, `TstKey`) VALUES
(1, 's', 's', 's', 0);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `DrinkID` int(11) NOT NULL,
  `DrinkSize` varchar(25) NOT NULL,
  `FountainDrink` varchar(25) NOT NULL,
  `BottleDrink` varchar(25) NOT NULL,
  `KeyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lol`
--

CREATE TABLE `lol` (
  `jimmy` varchar(250) NOT NULL,
  `ani` varchar(250) NOT NULL,
  `aniP` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lol`
--

INSERT INTO `lol` (`jimmy`, `ani`, `aniP`) VALUES
('s', 'aha', 'lol');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `PizzaID` int(11) NOT NULL,
  `PizzaCrust` varchar(25) NOT NULL,
  `PizzaSize` varchar(25) NOT NULL,
  `PizzaToppings` varchar(25) NOT NULL,
  `KeyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userbase`
--

CREATE TABLE `userbase` (
  `KeyID` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `CCName` varchar(25) NOT NULL,
  `CCNo` int(25) NOT NULL,
  `CCV` int(255) NOT NULL,
  `CCDate` date NOT NULL,
  `CCType` varchar(25) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbase`
--

INSERT INTO `userbase` (`KeyID`, `Username`, `Password`, `Email`, `FirstName`, `LastName`, `CCName`, `CCNo`, `CCV`, `CCDate`, `CCType`, `Address`) VALUES
(1, '', '123', '', '', '', 'aeg', 0, 0, '0000-00-00', '', ''),
(2, 'test2', '123', 'testemail', 'jimmy', 'nguyen', 'jimmy', 123123123, 0, '2017-06-13', '', ''),
(3, 'Ani', 'ANi', 'aamaruemailche@gmail.com', 'ANi', 'Payel', 'Sam patel', 2147483647, 190, '2018-12-15', '', '234 sdghsdjg sdfkgskd'),
(4, 'eaef', 'awa', 'awd', 'qw', 'qe', 'jim', 2147483647, 1235, '2017-06-23', '', '2312 test test'),
(5, 'CCTest', 'pass', 'testCC', 'jolo', 'jolo', 'joa', 12313531, 8992, '2017-06-22', 'Mastercard', '22 awd awdaw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Ani`
--
ALTER TABLE `Ani`
  ADD PRIMARY KEY (`PizzaId`),
  ADD KEY `TstKey` (`TstKey`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`DrinkID`),
  ADD KEY `KeyID` (`KeyID`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`PizzaID`),
  ADD KEY `KeyID` (`KeyID`);

--
-- Indexes for table `userbase`
--
ALTER TABLE `userbase`
  ADD PRIMARY KEY (`KeyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ani`
--
ALTER TABLE `Ani`
  MODIFY `PizzaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `DrinkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `PizzaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userbase`
--
ALTER TABLE `userbase`
  MODIFY `KeyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `drinks`
--
ALTER TABLE `drinks`
  ADD CONSTRAINT `drinks_ibfk_1` FOREIGN KEY (`KeyID`) REFERENCES `userbase` (`KeyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pizza`
--
ALTER TABLE `pizza`
  ADD CONSTRAINT `pizza_ibfk_1` FOREIGN KEY (`KeyID`) REFERENCES `userbase` (`KeyID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
