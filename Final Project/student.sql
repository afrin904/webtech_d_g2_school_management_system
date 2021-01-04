-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 07:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment`) VALUES
('Assignment Cover Page.docx');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `name` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `present` varchar(30) NOT NULL,
  `absent` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`name`, `id`, `email`, `present`, `absent`, `date`, `subject`) VALUES
('Sadia Afrin', '17-34904-2', 'afrins1598@gmail.com', 'p', '', '2020-12-01', ''),
('Sadia Afrin', '17-34904-2', 'afrins1598@gmail.com', 'p', '', '2020-12-01', 'Bangla'),
('Sadia Afrin', '17-34904-2', 'afrins1598@gmail.com', 'p', '', '2020-12-11', 'Bangla'),
('Sadia Afrin', '17-34904-2', 'afrins1598@gmail.com', 'p', '', '2020-12-02', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book`) VALUES
('SRE-Final-Project (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `classschedule`
--

CREATE TABLE `classschedule` (
  `name` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classschedule`
--

INSERT INTO `classschedule` (`name`, `id`, `course`, `day`, `time`, `section`) VALUES
('Sadia Afrin', '17-34904-2', 'Bangla', 'Sunday', '10:00-11:00', 'a'),
('Sadia Afrin', '17-34904-2', 'English', 'Monday', '11:00-12:00', 'b'),
('Sadia Afrin', '17-34904-2', 'Math', 'Tuesday', '10:00-11:00', 'a'),
('Sadia Afrin', '17-34904-2', 'General Knowledge', 'Wednesday', '11:00-12:00', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `emaila`
--

CREATE TABLE `emaila` (
  `frm` varchar(30) NOT NULL,
  `sendto` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `body` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emaila`
--

INSERT INTO `emaila` (`frm`, `sendto`, `subject`, `body`) VALUES
('hasibul12@gmail.com', 'student@gmail.com', 'Regarding class cancel', 'Todays class is cancelled.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `subject` varchar(30) NOT NULL,
  `fb` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`subject`, `fb`) VALUES
('bangla', 'hdfkdjf;'),
('English', 'bvjahoildedigbjhcvdj'),
('Math', 'Goood.........'),
('bangla', 'hbcjshlk');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `name` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `homework` varchar(20) NOT NULL,
  `assignment` varchar(10) NOT NULL,
  `performance` varchar(11) NOT NULL,
  `attendance` int(20) NOT NULL,
  `writtenexam` int(20) NOT NULL,
  `grade` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`name`, `id`, `subject`, `section`, `homework`, `assignment`, `performance`, `attendance`, `writtenexam`, `grade`) VALUES
('Sadia Afrin', '17-34904-2', 'Bangla', 'a', '20', '20', '10', 10, 30, 'A+'),
('Sadia Afrin', '17-34904-2', 'English', 'b', '20', '20', '10', 10, 20, 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes` varchar(200) NOT NULL,
  `notes_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes`, `notes_text`) VALUES
('lab10.docx', '	This is your experiment 10				'),
('SRE-Final-Project (1).pdf', ''),
('Alu_Table_Final_Exam.pdf', ''),
('The k-means Algorithm--- A Comprehensive Survey and Performance.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `name` varchar(30) NOT NULL,
  `id` varchar(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `notice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`name`, `id`, `subject`, `section`, `notice`) VALUES
('Sadia Afrin', '17-34904-2', 'Bangla', 'a', 'Home Work-page-5 all'),
('Sadia Afrin', '17-34904-2', 'Bangla', 'a', 'Todays class is cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `amount` double NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `semester` varchar(10) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `id`, `amount`, `status`, `date`, `semester`, `total`) VALUES
('Sadia Afrin', '17-34904-2', 500, 'Paid', '2020-12-08', '1st', 500),
('Sadia Afrin', '17-34904-2', 500, 'Paid', '2020-12-16', '2nd', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `id`, `password`, `usertype`, `gender`, `phone`) VALUES
('Sadia Afrin', 'afrins1598@gmail.com', '17-34904-2', 'sadia', 'Student', 'Female', 1778991234),
('Afrin,Sadia', 'sadia@gmail.com', '23123', 'sadia', 'Student', 'Female', 1778991234),
('kanij mim', 'mim@gmail.com', '2341', 'mim1234', 'Student', 'Female', 1778991234),
('Alif', 'alif@gmail.com', '17-34916-2', 'alif', 'Student', 'Female', 1778991234),
('Sadia Afrin', 'afrins1598@gmail.com', '17-34904-2', 'sadia', 'Student', 'Female', 1778991234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
