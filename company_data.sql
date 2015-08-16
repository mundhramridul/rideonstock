-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2013 at 07:30 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE IF NOT EXISTS `acc` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`data`, `date`, `time`) VALUES
('Avoid cement stocks, advises Rakesh Arora', '2013-11-19', '15:13:15'),
('Avoid cement stocks, advises Rakesh Arora', '2013-11-20', '15:25:56'),
('Avoid cement stocks, advises Rakesh Arora', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `airtel`
--

CREATE TABLE IF NOT EXISTS `airtel` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airtel`
--

INSERT INTO `airtel` (`data`, `date`, `time`) VALUES
('Bharti Airtel Block Deal on NSE,  Qty: 150,188,  Deal Price: 351.00,  Value (cr): 5.27,  Time: 09:57am', '2013-11-19', '15:13:15'),
('Bharti Airtel closes above 30-Day Moving Average of 345.88 today.', '2013-11-20', '15:25:56'),
('Bharti Airtel closes below 30-Day Moving Average of 346.58 today.', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `ambuja_cement`
--

CREATE TABLE IF NOT EXISTS `ambuja_cement` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambuja_cement`
--

INSERT INTO `ambuja_cement` (`data`, `date`, `time`) VALUES
('Holcim-Ambuja deal likely to get shareholders nod: Sources', '2013-11-19', '15:13:15'),
('Ambuja Cements POM on Nov 21, 2013,  Announcement date: Oct 21, 2013', '2013-11-20', '15:25:56'),
('See lower levels in Ambuja Cements: Sukhani', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `asian_paints`
--

CREATE TABLE IF NOT EXISTS `asian_paints` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asian_paints`
--

INSERT INTO `asian_paints` (`data`, `date`, `time`) VALUES
('Asian Paints: Updates on voluntary unconditional cash offer for BIL shares', '2013-11-19', '15:13:15'),
('Asian Paints: Updates on voluntary unconditional cash offer for BIL shares', '2013-11-20', '15:25:56'),
('Asian Paints: Updates on voluntary unconditional cash offer for BIL shares', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `axis_bank`
--

CREATE TABLE IF NOT EXISTS `axis_bank` (
  `Data` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axis_bank`
--

INSERT INTO `axis_bank` (`Data`, `Date`, `Time`) VALUES
('Axis Bank closes above 50-Day Moving Average of 1091.12 today.', '2013-11-18', '01:24:41'),
('Banks send notice to Airport Metro for payment of dues', '2013-11-18', '15:55:57'),
('Axis Bank closes above 50-Day Moving Average of 1098.26 today.', '2013-11-19', '13:57:31'),
('Axis Bank closes above 50-Day Moving Average of 1098.26 today.', '2013-11-20', '15:01:05'),
('Axis Bank closes above 50-Day Moving Average of 1098.26 today.', '2013-11-19', '15:13:15'),
('Axis Bank closes above 50-Day Moving Average of 1098.26 today.', '2013-11-20', '15:25:56'),
('Axis Bank closes above 50-Day Moving Average of 1098.26 today.', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `bajaj_auto`
--

CREATE TABLE IF NOT EXISTS `bajaj_auto` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bajaj_auto`
--

INSERT INTO `bajaj_auto` (`data`, `date`, `time`) VALUES
('Bajaj Auto Block Deal on NSE,  Qty: 25,008,  Deal Price: 2,011.40,  Value (cr): 5.03,  Time: 3:01pm', '2013-11-19', '15:13:15'),
('Bajaj Auto Block Deal on NSE,  Qty: 25,008,  Deal Price: 2,011.40,  Value (cr): 5.03,  Time: 3:01pm', '2013-11-20', '15:25:56'),
('Bajaj Auto Block Deal on NSE,  Qty: 25,008,  Deal Price: 2,011.40,  Value (cr): 5.03,  Time: 3:01pm', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `bharat_petroleum`
--

CREATE TABLE IF NOT EXISTS `bharat_petroleum` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bharat_petroleum`
--

INSERT INTO `bharat_petroleum` (`data`, `date`, `time`) VALUES
('BPCL closes above 30-Day,150-Day Moving Average today.', '2013-11-19', '15:13:15'),
('Expect 100% under recovery compensation, higher GRMs: BPCL', '2013-11-20', '15:25:56'),
('BPCL closes below 50-Day Moving Average of 338.75 today.', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `cipla`
--

CREATE TABLE IF NOT EXISTS `cipla` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cipla`
--

INSERT INTO `cipla` (`data`, `date`, `time`) VALUES
('Cipla closes below 200-Day Moving Average of 402.71 today.', '2013-11-19', '15:13:15'),
('Cipla closes below 200-Day Moving Average of 402.71 today.', '2013-11-20', '15:25:56'),
('Cipla closes below 200-Day Moving Average of 402.71 today.', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `dabur`
--

CREATE TABLE IF NOT EXISTS `dabur` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dabur`
--

INSERT INTO `dabur` (`data`, `date`, `time`) VALUES
('Dabur India closes above 150-Day Moving Average of 160.98 today.', '2013-11-19', '15:13:15'),
('Dabur India Block Deal on BSE,  Qty: 350,000,  Deal Price: 157.50,  Value (cr): 5.51,  Time: 12:49pm', '2013-11-20', '15:25:56'),
('Positive on Dabur, Marico, Bata and Emami: CIMB', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `dlf`
--

CREATE TABLE IF NOT EXISTS `dlf` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dlf`
--

INSERT INTO `dlf` (`data`, `date`, `time`) VALUES
('Pick DLF, Anant Raj: SP Tulsian', '2013-11-19', '15:13:15'),
('Buy DLF, says Manas Jaiswal', '2013-11-20', '15:25:56'),
('Buy DLF, says Manas Jaiswal', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `havells`
--

CREATE TABLE IF NOT EXISTS `havells` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `havells`
--

INSERT INTO `havells` (`data`, `date`, `time`) VALUES
('Havells India Block Deal on BSE,  Qty: 100,000,  Deal Price: 760.00,  Value (cr): 7.60,  Time: 09:51am', '2013-11-19', '15:13:15'),
('Havells India Block Deal on BSE,  Qty: 100,000,  Deal Price: 760.00,  Value (cr): 7.60,  Time: 09:51am', '2013-11-20', '15:25:56'),
('Havells India Block Deal on NSE,  Qty: 99,633,  Deal Price: 745.00,  Value (cr): 7.42,  Time: 11:28am', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `hdfc_bank`
--

CREATE TABLE IF NOT EXISTS `hdfc_bank` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hdfc_bank`
--

INSERT INTO `hdfc_bank` (`data`, `date`, `time`) VALUES
('HDFC Bank closes above  its 30-Day,50-Day,150-Day,200-Day Moving Average today.', '2013-11-19', '15:13:15'),
('HDFC Bank closes below 30-Day Moving Average of 661.94 today.', '2013-11-20', '15:25:56'),
('HDFC Bank closes below  its 50-Day,150-Day,200-Day Moving Average today.', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE IF NOT EXISTS `hero` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`data`, `date`, `time`) VALUES
('Hero Motocorp closes above 50-Day Moving Average of 2044.63 today.', '2013-11-19', '15:13:15'),
('Hero Motocorp closes above 50-Day Moving Average of 2044.63 today.', '2013-11-20', '15:25:56'),
('Hero Motocorp closes below 50-Day Moving Average of 2051.65 today.', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `hindustan_unilever`
--

CREATE TABLE IF NOT EXISTS `hindustan_unilever` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hindustan_unilever`
--

INSERT INTO `hindustan_unilever` (`data`, `date`, `time`) VALUES
('HUL closes below 150-Day Moving Average of 593.51 today.', '2013-11-19', '15:13:15'),
('HUL closes below 150-Day Moving Average of 593.51 today.', '2013-11-20', '15:25:56'),
('HUL closes below 150-Day Moving Average of 593.51 today.', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `icici_bank`
--

CREATE TABLE IF NOT EXISTS `icici_bank` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icici_bank`
--

INSERT INTO `icici_bank` (`data`, `date`, `time`) VALUES
('ICICI hits overseas debt market with benchmark issue', '2013-11-19', '15:13:15'),
('ICICI hits overseas debt market with benchmark issue', '2013-11-20', '15:25:56'),
('ICICI hits overseas debt market with benchmark issue', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `infosys`
--

CREATE TABLE IF NOT EXISTS `infosys` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infosys`
--

INSERT INTO `infosys` (`data`, `date`, `time`) VALUES
('Mehraboon Irani positive on Infosys', '2013-11-19', '15:13:15'),
('Mehraboon Irani positive on Infosys', '2013-11-20', '15:25:56'),
('Infosys Block Deal on NSE,  Qty: 221,067,  Deal Price: 3,324.00,  Value (cr): 73.48,  Time: 2:04pm', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `jaiprakash`
--

CREATE TABLE IF NOT EXISTS `jaiprakash` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaiprakash`
--

INSERT INTO `jaiprakash` (`data`, `date`, `time`) VALUES
('Exit Jaiprakash Associates: Shardul Kulkarni', '2013-11-19', '15:13:15'),
('Exit Jaiprakash Associates: Shardul Kulkarni', '2013-11-20', '15:25:56'),
('Exit Jaiprakash Associates: Shardul Kulkarni', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `jindal_steel`
--

CREATE TABLE IF NOT EXISTS `jindal_steel` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jindal_steel`
--

INSERT INTO `jindal_steel` (`data`, `date`, `time`) VALUES
('Jindal Steel closes above 30-Day,50-Day Moving Average today.', '2013-11-19', '15:13:15'),
('Buy Jindal Steel 250 Call, Sell 270 Call: Krish Subramanyam', '2013-11-20', '15:25:56'),
('Buy JSPL above Rs 260: Abhijit Paul', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `jsw`
--

CREATE TABLE IF NOT EXISTS `jsw` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jsw`
--

INSERT INTO `jsw` (`data`, `date`, `time`) VALUES
('JSW Steel has hit a 52wk high of Rs 895.00 on BSE', '2013-11-19', '15:13:15'),
('JSW Steel may touch Rs 950: Gopi Suvanam', '2013-11-20', '15:25:56'),
('Buy JSW Steel, advises Sudarshan Sukhani', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `lt`
--

CREATE TABLE IF NOT EXISTS `lt` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lt`
--

INSERT INTO `lt` (`data`, `date`, `time`) VALUES
('Larsen Block Deal on NSE,  Qty: 50,835,  Deal Price: 991.90,  Value (cr): 5.04,  Time: 10:12am', '2013-11-19', '15:13:15'),
('Hold Larsen and Toubro: Salil Sharma', '2013-11-20', '15:25:56'),
('Below Rs 910, L&T may test Rs 815-825: Abhijit Paul', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `maruti`
--

CREATE TABLE IF NOT EXISTS `maruti` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maruti`
--

INSERT INTO `maruti` (`data`, `date`, `time`) VALUES
('Prefer Maruti Suzuki, Tata Motors, Bajaj Auto: Choksey', '2013-11-19', '15:13:15'),
('Maruti Suzuki Block Deal on BSE,  Qty: 75,000,  Deal Price: 1,682.00,  Value (cr): 12.62,  Time: 1:44pm', '2013-11-19', '15:13:15'),
('Go long on Maruti, advises Aditya Agarwal', '2013-11-19', '15:13:15'),
('Hold Maruti Suzuki: Shardul Kulkarni', '2013-11-19', '15:13:15'),
('Buy Maruti Suzuki: Rakesh Arora', '2013-11-19', '15:13:15'),
('Motown will continue to drive on slippery road: Fitch', '2013-11-19', '15:13:15'),
('Prefer Maruti Suzuki, says Baliga', '2013-11-19', '15:13:15'),
('Expect Maruti Suzuki to touch Rs 1700: Kunal Bothra', '2013-11-19', '15:13:15'),
('Super Six stocks you can bet on November 11', '2013-11-19', '15:13:15'),
('Maruti Suzuki India: Updates on production, sales for Oct 2013', '2013-11-19', '15:13:15'),
('Prefer Maruti Suzuki, Tata Motors: Ajay Srivastava', '2013-11-19', '15:13:15'),
('Buy Maruti Suzuki; target Rs 1760: Firstcall Research', '2013-11-19', '15:13:15'),
('Maruti Suzuki October sales up 2 %', '2013-11-19', '15:13:15'),
('Maruti Suzuki India sells 105087 units in October 2013', '2013-11-19', '15:13:15'),
('Maruti Suzuki Block Deal on NSE,  Qty: 62,000,  Deal Price: 1,645.00,  Value (cr): 10.20,  Time: 09:35am', '2013-11-19', '15:13:15'),
('Hold Maruti Suzuki India: Mayuresh Joshi', '2013-11-19', '15:13:15'),
('Buy Maruti Suzuki, says Sudarshan Sukhani', '2013-11-19', '15:13:15'),
('Buy Maruti Suzuki on dips: Sudarshan Sukhani', '2013-11-19', '15:13:15'),
('Hold Maruti Suzuki, advises Shardul Kulkarni', '2013-11-19', '15:13:15'),
('Maruti Suzuki top pick in auto space: Dhiraj Agarwal', '2013-11-19', '15:13:15'),
('Prefer Maruti Suzuki, Tata Motors, Bajaj Auto: Choksey', '2013-11-20', '15:25:56'),
('Maruti Suzuki Block Deal on BSE,  Qty: 75,000,  Deal Price: 1,682.00,  Value (cr): 12.62,  Time: 1:44pm', '2013-11-20', '15:25:56'),
('Go long on Maruti, advises Aditya Agarwal', '2013-11-20', '15:25:56'),
('Hold Maruti Suzuki: Shardul Kulkarni', '2013-11-20', '15:25:56'),
('Buy Maruti Suzuki: Rakesh Arora', '2013-11-20', '15:25:56'),
('Motown will continue to drive on slippery road: Fitch', '2013-11-20', '15:25:56'),
('Prefer Maruti Suzuki, says Baliga', '2013-11-20', '15:25:56'),
('Expect Maruti Suzuki to touch Rs 1700: Kunal Bothra', '2013-11-20', '15:25:56'),
('Super Six stocks you can bet on November 11', '2013-11-20', '15:25:56'),
('Maruti Suzuki India: Updates on production, sales for Oct 2013', '2013-11-20', '15:25:56'),
('Prefer Maruti Suzuki, Tata Motors: Ajay Srivastava', '2013-11-20', '15:25:56'),
('Buy Maruti Suzuki; target Rs 1760: Firstcall Research', '2013-11-20', '15:25:56'),
('Maruti Suzuki October sales up 2 %', '2013-11-20', '15:25:56'),
('Maruti Suzuki India sells 105087 units in October 2013', '2013-11-20', '15:25:56'),
('Maruti Suzuki Block Deal on NSE,  Qty: 62,000,  Deal Price: 1,645.00,  Value (cr): 10.20,  Time: 09:35am', '2013-11-20', '15:25:56'),
('Hold Maruti Suzuki India: Mayuresh Joshi', '2013-11-20', '15:25:56'),
('Buy Maruti Suzuki, says Sudarshan Sukhani', '2013-11-20', '15:25:56'),
('Buy Maruti Suzuki on dips: Sudarshan Sukhani', '2013-11-20', '15:25:56'),
('Hold Maruti Suzuki, advises Shardul Kulkarni', '2013-11-20', '15:25:56'),
('Maruti Suzuki top pick in auto space: Dhiraj Agarwal', '2013-11-20', '15:25:56'),
('Prefer Maruti Suzuki, Tata Motors, Bajaj Auto: Choksey', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `pidilite`
--

CREATE TABLE IF NOT EXISTS `pidilite` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pidilite`
--

INSERT INTO `pidilite` (`data`, `date`, `time`) VALUES
('Pidilite Ind Block Deal on NSE,  Qty: 400,000,  Deal Price: 291.00,  Value (cr): 11.64,  Time: 12:03pm', '2013-11-19', '15:13:15'),
('Pidilite Ind Block Deal on NSE,  Qty: 400,000,  Deal Price: 291.00,  Value (cr): 11.64,  Time: 12:03pm', '2013-11-20', '15:25:56'),
('Pidilite Ind Block Deal on NSE,  Qty: 400,000,  Deal Price: 291.00,  Value (cr): 11.64,  Time: 12:03pm', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `ranbaxy`
--

CREATE TABLE IF NOT EXISTS `ranbaxy` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranbaxy`
--

INSERT INTO `ranbaxy` (`data`, `date`, `time`) VALUES
('Rakesh Arora positive on Ranbaxy Laboratories', '2013-11-19', '15:13:15'),
('Rakesh Arora positive on Ranbaxy Laboratories', '2013-11-20', '15:25:56'),
('Rakesh Arora positive on Ranbaxy Laboratories', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `reliance`
--

CREATE TABLE IF NOT EXISTS `reliance` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reliance`
--

INSERT INTO `reliance` (`data`, `date`, `time`) VALUES
('Reliance closes above 50-Day Moving Average of 873.00 today.', '2013-11-19', '15:13:15'),
('Buy Reliance Industries 880 Call: Gopi Suvanam', '2013-11-20', '15:25:56'),
('Short Reliance Industries: Sudarshan Sukhani', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `sbi`
--

CREATE TABLE IF NOT EXISTS `sbi` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sbi`
--

INSERT INTO `sbi` (`data`, `date`, `time`) VALUES
('SBI Block Deal on NSE,  Qty: 50,056,  Deal Price: 1,782.60,  Value (cr): 8.92,  Time: 10:31am', '2013-11-19', '15:13:15'),
('SBI a top pick, says Gautam Trivedi', '2013-11-20', '15:25:56'),
('SBI Block Deal on BSE,  Qty: 100,000,  Deal Price: 1,758.00,  Value (cr): 17.58,  Time: 3:11pm', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `tata_steel`
--

CREATE TABLE IF NOT EXISTS `tata_steel` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tata_steel`
--

INSERT INTO `tata_steel` (`data`, `date`, `time`) VALUES
('Tata Steel may test Rs 427, says Rakesh Arora', '2013-11-19', '15:13:15'),
('Charudatta case: FIR filed against Tata Steel official', '2013-11-20', '15:25:56'),
('Buy Tata Steel on dips, advises Sudarshan Sukhani', '2013-11-21', '20:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `tcs`
--

CREATE TABLE IF NOT EXISTS `tcs` (
  `data` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcs`
--

INSERT INTO `tcs` (`data`, `date`, `time`) VALUES
('TCS closes above 50-Day Moving Average of 2038.68 today.', '2013-11-19', '15:13:15'),
('TCS closes below 50-Day Moving Average of 2037.90 today.', '2013-11-20', '15:25:56'),
('Prefer TCS, says Jagdish Malkani', '2013-11-21', '20:01:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
