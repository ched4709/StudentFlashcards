-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flashcards_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `avengers`
--

CREATE TABLE `avengers` (
  `Name` varchar(30) NOT NULL,
  `StudentID` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avengers`
--

INSERT INTO `avengers` (`Name`, `StudentID`) VALUES
('Tony Stark', '102115370'),
('Steve Rodgers', '102115371'),
('Thor', '102115372'),
('Natasha Romanova', '102115373'),
('Bruce Banner', '102115374'),
('Clint Barton', '102115375'),
('Nick Fury', '102115376'),
('Wanda Maximoff', '102115377'),
('Peter Parker', '102115378'),
('James Rhodes', '102115379'),
('Carol Danvers', '102115380'),
('Anon User', '999999999');

-- --------------------------------------------------------

--
-- Table structure for table `mario`
--

CREATE TABLE `mario` (
  `Name` varchar(30) DEFAULT NULL,
  `StudentID` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mario`
--

INSERT INTO `mario` (`Name`, `StudentID`) VALUES
('Mario', '102115468'),
('Luigi', '102115471'),
('Bowser', '102115474'),
('Yoshi', '102115477'),
('Toad', '102115480'),
('Peach Toadstool', '102115483'),
('Daisy', '102115486'),
('Birdo', '102115489'),
('Wario', '102115492'),
('Waluigi', '102115495'),
('Donkeykong', '102115498'),
('Anon User', '999999999');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Name` varchar(30) DEFAULT NULL,
  `StudentID` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `StudentID`) VALUES
('Anil Cowley', '456987422'),
('Erica Tate', '456987423'),
('Bryan Best', '456987424'),
('Charles Harman', '456987425'),
('Rick Stead', '456987426'),
('Alyson Redfern', '456987427'),
('Max Dixon', '456987428'),
('Bradley Walker', '456987429'),
('Miranda Barton', '456987430'),
('Caron Hodgson', '456987431'),
('Joanna Clayton', '456987432'),
('Jude Darby', '456987433'),
('Wayne Kitchen', '456987434'),
('Phillip George', '456987435'),
('Alastair Skelton', '456987436'),
('Claire Lilley', '456987437'),
('Mick Smyth', '456987438'),
('Adrian Daly', '456987439'),
('Kirk McIntosh', '456987440'),
('Gill Palmer', '456987441'),
('Ricardo Buck', '456987442'),
('Shana Deacon', '456987443'),
('Eva Woodcock', '456987444'),
('Michael Sampson', '456987445');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
