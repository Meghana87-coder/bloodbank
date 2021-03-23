-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 09:49 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_registration`
--

CREATE TABLE `blood_bank_registration` (
  `Blood_Bank_ID` int(3) NOT NULL,
  `Blood_Bank_Name` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `Blood_Bank_Phno` varchar(20) NOT NULL,
  `Blood_Bank_Email` varchar(40) NOT NULL,
  `Blood_Bank_Address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank_registration`
--

INSERT INTO `blood_bank_registration` (`Blood_Bank_ID`, `Blood_Bank_Name`, `username`, `password`, `Blood_Bank_Phno`, `Blood_Bank_Email`, `Blood_Bank_Address`) VALUES
(1, 'LionClub', 'lionclub', 'lionclub', '874512754', 'lionclub@gmail.com', 'Bangalore'),
(2, 'RedCross', 'redcross', 'redcross', '874512634', 'redcross@gmail.com', 'Bangalore'),
(3, 'DeltaBloodBank', 'deltabloodbank', 'deltabloodbank', '874512634', 'delta@gmail.com', 'Bangalore'),
(4, 'RedWings', 'redwings', 'redwings', '874512635', 'redwings@gmail.com', 'Bangalore'),
(5, 'RenovationBloodBank', 'renovationblood', 'renovationblood', '874512631', 'renovation@gmail.com', 'Bangalore'),
(6, 'Manipal Hospital', 'manipal', 'manipal', '874512631', 'manipal@gmail.com', 'Bangalore'),
(7, 'Victoria Hospital', 'victoria', 'victoria', '874748364', 'victoria@gmail.com', 'Bangalore'),
(8, 'Rashtrothana Blood Center', 'rashtrothana', 'rashtrothana', '987654321', 'rashtrothana@gmail.com', 'Bangalore'),
(9, 'KIMS', 'kims', 'kims', '714748364', 'kims@gmail.com', 'Bangalore'),
(10, 'Fortis', 'fortis', 'fortis', '984748364', 'fortis@gmail.com', 'Bangalore'),
(11, 'Apollo', 'apollo', 'apollo', '954748364', 'jala2807@gmail.com', 'Bangalore'),
(12, 'Baptist', 'baptist', 'baptist', '874748347', 'meghanachandar87@gmail.com', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation_slot_timings`
--

CREATE TABLE `blood_donation_slot_timings` (
  `Blood_Bank_ID` int(3) NOT NULL,
  `Day` varchar(15) NOT NULL,
  `Slots` varchar(8) NOT NULL,
  `Max_patients` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donation_slot_timings`
--

INSERT INTO `blood_donation_slot_timings` (`Blood_Bank_ID`, `Day`, `Slots`, `Max_patients`) VALUES
(1, 'Monday', '9:00', 1),
(1, 'Monday', '10:00', 1),
(1, 'Monday', '12:00', 1),
(1, 'Monday', '15:30', 1),
(1, 'Wednesday', '15:00', 1),
(1, 'Wednesday', '17:00', 1),
(1, 'Friday', '9:00', 1),
(1, 'Friday', '17:00', 1),
(2, 'Monday', '13:30', 2),
(2, 'Monday', '10:30', 2),
(2, 'Monday', '17:30', 2),
(2, 'Monday', '18:30', 2),
(2, 'Monday', '9:30', 2),
(2, 'Tuesday', '14:30', 2),
(2, 'wednesay', '11:30', 2),
(2, 'Thursday', '10:30', 2),
(3, 'Monday', '12:30', 2),
(3, 'Monday', '9:30', 2),
(3, 'Tuesday', '12:30', 2),
(3, 'Tuesday', '14:30', 2),
(3, 'Wednesday', '16:30', 2),
(3, 'Wednesday', '11:30', 2),
(3, 'Thursday', '15:30', 2),
(3, 'Thursday', '14:30', 2),
(3, 'Friday', '12:30', 2),
(3, 'Friday', '11:30', 2),
(3, 'Saturday', '12:30', 2),
(3, 'Saturday', '9:30', 2),
(4, 'Monday', '12:30', 2),
(4, 'Monday', '11:30', 2),
(4, 'Tuesday', '12:30', 2),
(4, 'Tuesday', '14:30', 2),
(4, 'Wednesday', '12:30', 2),
(4, 'Wednesday', '11:30', 2),
(4, 'Thursday', '12:30', 2),
(4, 'Thursday', '14:30', 2),
(4, 'Friday', '12:30', 2),
(4, 'Friday', '11:30', 2),
(4, 'Saturday', '12:30', 2),
(4, 'Saturday', '14:30', 2),
(5, 'Monday', '12:30', 2),
(5, 'Wednesday', '11:30', 2),
(5, 'Tuesday', '12:30', 2),
(5, 'Thursday', '14:30', 2),
(5, 'Friday', '12:30', 2),
(5, 'Saturday', '11:30', 2),
(5, 'Tuesday', '10:30', 2),
(5, 'Tuesday', '17:30', 2),
(6, 'Monday', '12:30', 2),
(6, 'Wednesday', '11:30', 2),
(6, 'Tuesday', '12:30', 2),
(6, 'Thursday', '14:30', 2),
(6, 'Friday', '12:30', 2),
(6, 'Saturday', '11:30', 2),
(6, 'Tuesday', '10:30', 2),
(6, 'Tuesday', '17:30', 2),
(7, 'Monday', '12:30', 2),
(7, 'Wednesday', '11:30', 2),
(7, 'Tuesday', '12:30', 2),
(7, 'Thursday', '14:30', 2),
(7, 'Friday', '12:30', 2),
(7, 'Saturday', '11:30', 2),
(7, 'Tuesday', '10:30', 2),
(7, 'Tuesday', '17:30', 2),
(8, 'Monday', '12:30', 2),
(8, 'Wednesday', '11:30', 2),
(8, 'Tuesday', '12:30', 2),
(8, 'Thursday', '14:30', 2),
(8, 'Friday', '12:30', 2),
(8, 'Saturday', '11:30', 2),
(8, 'Tuesday', '10:30', 2),
(8, 'Tuesday', '17:30', 2),
(9, 'Monday', '12:30', 2),
(9, 'Wednesday', '11:30', 2),
(9, 'Tuesday', '12:30', 2),
(9, 'Thursday', '14:30', 2),
(9, 'Friday', '12:30', 2),
(9, 'Saturday', '11:30', 2),
(9, 'Tuesday', '10:30', 2),
(9, 'Tuesday', '17:30', 2),
(10, 'Monday', '12:30', 2),
(10, 'Wednesday', '11:30', 2),
(10, 'Tuesday', '12:30', 2),
(10, 'Thursday', '14:30', 2),
(10, 'Friday', '12:30', 2),
(10, 'Saturday', '11:30', 2),
(10, 'Tuesday', '10:30', 2),
(10, 'Tuesday', '17:30', 2),
(11, 'Monday', '12:30', 2),
(11, 'Wednesday', '11:30', 2),
(11, 'Tuesday', '12:30', 2),
(11, 'Thursday', '14:30', 2),
(11, 'Friday', '12:30', 2),
(11, 'Saturday', '11:30', 2),
(11, 'Tuesday', '10:30', 2),
(11, 'Tuesday', '17:30', 2),
(12, 'Monday', '12:30', 2),
(12, 'Wednesday', '11:30', 2),
(12, 'Tuesday', '12:30', 2),
(12, 'Thursday', '14:30', 2),
(12, 'Friday', '12:30', 2),
(12, 'Saturday', '11:30', 2),
(12, 'Tuesday', '10:30', 2),
(12, 'Tuesday', '17:30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donate_blood`
--

CREATE TABLE `donate_blood` (
  `Donor_ID` int(3) NOT NULL,
  `Blood_Bank_ID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donors_per_slot`
--

CREATE TABLE `donors_per_slot` (
  `Blood_Bank_ID` int(3) NOT NULL,
  `Donor_ID` int(3) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Day` varchar(15) NOT NULL,
  `Slot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors_per_slot`
--

INSERT INTO `donors_per_slot` (`Blood_Bank_ID`, `Donor_ID`, `Date`, `Day`, `Slot`) VALUES
(1, 1, '28-12-2020', 'Monday', '9:00'),
(1, 1, '28-12-2020', 'Monday', '10:00'),
(1, 1, '28-12-2020', 'Monday', '15:30'),
(1, 1, '28-12-2020', 'Monday', '12:00'),
(1, 1, '18-01-2021', 'Monday', '10:00'),
(1, 3, '11-01-2021', 'Monday', '10:00'),
(1, 1, '18-01-2021', 'Monday', '15:30'),
(1, 1, '20-01-2021', 'Wednesday', '15:00'),
(1, 2, '03-02-2021', 'Wednesday', '15:00'),
(2, 1, '01-02-2021', 'Monday', '12:30'),
(8, 2, '02-02-2021', 'Tuesday', '17:30'),
(8, 2, '02-02-2021', 'Tuesday', '17:30'),
(8, 2, '02-02-2021', 'Tuesday', '17:30'),
(8, 2, '02-02-2021', 'Tuesday', '17:30'),
(8, 2, '02-02-2021', 'Tuesday', '17:30'),
(8, 2, '02-02-2021', 'Tuesday', '17:30'),
(8, 2, '02-02-2021', 'Tuesday', '17:30'),
(8, 2, '02-02-2021', 'Tuesday', '17:30');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `Donor_ID` int(3) NOT NULL,
  `Donor_Name` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `Donor_Age` int(2) NOT NULL,
  `Donor_PhoneNo` varchar(20) NOT NULL,
  `Donor_Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`Donor_ID`, `Donor_Name`, `username`, `password`, `Donor_Age`, `Donor_PhoneNo`, `Donor_Email`) VALUES
(1, 'Mala', 'mala', 'mala', 18, '8147483647', 'mala@gmail.com'),
(2, 'Meghana', 'meghana', 'meghana', 18, '8745126310', 'meghanachandar87@gmail.com'),
(3, 'jalaja', 'jalaja', 'jalaja', 20, '8965125321', 'jala2807@gmail.com'),
(4, 'kala', 'kala', 'kala', 20, '8745632415', 'kala@gmail.com'),
(5, 'vikas', 'vikas', 'vikas', 19, '8660296508', 'meghanachanar87@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('lionclub', 'lionclub'),
('deltabloodbank', 'deltabloodbank'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('redbank', 'redbank'),
('mala', 'mala'),
('mala', 'mala'),
('lionclub', 'lionclub'),
('mala', 'mala'),
('mala', 'mala'),
('mala', 'mala'),
('mala', 'mala'),
('mala', 'mala'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('mala', 'mala'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('red', 'red'),
('red', 'red'),
('red', 'red'),
('red', 'red'),
('mala', 'mala'),
('mala', 'mala'),
('mala', 'mala'),
('mala', 'mala'),
('lionclub', 'lionclub'),
('jalaja', 'jalaja'),
('meghana', 'meghana'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('lionclub', 'lionclub'),
('redcross', 'redcross'),
('jalaja', 'jalaja'),
('redcross', 'redcross'),
('redcross', 'redcross'),
('redcross', 'redcross'),
('redcross', 'redcross'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('jalaja', 'jalaja'),
('meghana', 'meghana'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('meghana', 'meghana'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('lionclub', 'lionclub'),
('jalaja', 'jalaja'),
('lionclub', 'lionclub'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('lionclub', 'lionclub'),
('lionclub', 'lionclub'),
('jalaja', 'jalaja'),
('redcross', 'redcross'),
('jalaja', 'jalaja'),
('meghana', 'meghana'),
('jalaja', 'jalaja'),
('meghana', 'meghana'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('meghana', 'meghana'),
('jalaja', 'jalaja'),
('meghana', 'meghana'),
('jalaja', 'jalaja'),
('jalaja', 'jalaja'),
('baptist', 'baptist'),
('baptist', 'baptist'),
('jalaja', 'jalaja'),
('mala', 'mala'),
('mala', 'mala'),
('lionclub', 'lionclub'),
('mala', 'mala'),
('lionclub', 'lionclub'),
('baptist', 'baptist'),
('meghana', 'meghana'),
('mala', 'mala'),
('baptist', 'baptist'),
('meghana', 'meghana'),
('vikas', 'vikas'),
('lionclub', 'lionclub'),
('mala', 'mala'),
('vikas', 'vikas');

-- --------------------------------------------------------

--
-- Table structure for table `stock_cost`
--

CREATE TABLE `stock_cost` (
  `Blood_Bank_ID` int(3) NOT NULL,
  `Stock` int(3) NOT NULL,
  `Cost` int(3) NOT NULL,
  `Blood_Group` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_cost`
--

INSERT INTO `stock_cost` (`Blood_Bank_ID`, `Stock`, `Cost`, `Blood_Group`) VALUES
(1, 10, 250, 'A+'),
(1, 12, 250, 'B+'),
(1, 18, 250, 'O+'),
(1, 16, 250, 'AB+'),
(1, 15, 250, 'A-'),
(1, 10, 250, 'B-'),
(1, 13, 250, 'O-'),
(1, 12, 250, 'AB-'),
(2, 15, 400, 'A+'),
(2, 12, 420, 'B+'),
(2, 20, 430, 'O+'),
(2, 16, 450, 'AB+'),
(2, 18, 350, 'A-'),
(2, 10, 310, 'B-'),
(2, 13, 380, 'O-'),
(2, 12, 400, 'AB-'),
(3, 15, 600, 'A+'),
(3, 16, 420, 'B+'),
(3, 30, 630, 'O+'),
(3, 16, 350, 'AB+'),
(3, 18, 250, 'A-'),
(3, 8, 310, 'B-'),
(3, 10, 280, 'O-'),
(3, 12, 300, 'AB-'),
(4, 20, 500, 'A+'),
(4, 12, 420, 'B+'),
(4, 14, 530, 'O+'),
(4, 16, 350, 'AB+'),
(4, 18, 250, 'A-'),
(4, 10, 410, 'B-'),
(4, 13, 380, 'O-'),
(4, 12, 300, 'AB-'),
(5, 8, 250, 'A+'),
(5, 12, 320, 'B+'),
(5, 14, 430, 'O+'),
(5, 16, 350, 'AB+'),
(5, 18, 250, 'A-'),
(5, 10, 310, 'B-'),
(5, 13, 280, 'O-'),
(5, 12, 300, 'AB-'),
(6, 25, 700, 'A+'),
(6, 15, 650, 'B+'),
(6, 20, 600, 'O+'),
(6, 18, 500, 'AB+'),
(6, 10, 620, 'A-'),
(6, 12, 550, 'B-'),
(6, 35, 480, 'O-'),
(6, 5, 400, 'AB-'),
(7, 14, 500, 'A+'),
(7, 15, 450, 'B+'),
(7, 50, 600, 'O+'),
(7, 18, 500, 'AB+'),
(7, 10, 620, 'A-'),
(7, 12, 550, 'B-'),
(7, 35, 480, 'O-'),
(7, 5, 450, 'AB-'),
(8, 30, 650, 'A+'),
(8, 15, 650, 'B+'),
(8, 76, 700, 'O+'),
(8, 18, 500, 'AB+'),
(8, 20, 620, 'A-'),
(8, 12, 550, 'B-'),
(8, 35, 480, 'O-'),
(8, 5, 500, 'AB-'),
(9, 16, 400, 'A+'),
(9, 25, 450, 'B+'),
(9, 20, 500, 'O+'),
(9, 18, 500, 'AB+'),
(9, 16, 320, 'A-'),
(9, 32, 350, 'B-'),
(9, 15, 480, 'O-'),
(9, 10, 400, 'AB-'),
(10, 40, 700, 'A+'),
(10, 35, 650, 'B+'),
(10, 60, 600, 'O+'),
(10, 28, 500, 'AB+'),
(10, 10, 620, 'A-'),
(10, 12, 550, 'B-'),
(10, 35, 680, 'O-'),
(10, 100, 500, 'AB-'),
(11, 18, 450, 'A+'),
(11, 45, 650, 'B+'),
(11, 100, 580, 'O+'),
(11, 28, 500, 'AB+'),
(11, 15, 620, 'A-'),
(11, 18, 550, 'B-'),
(11, 35, 480, 'O-'),
(11, 20, 400, 'AB-'),
(12, 25, 210, 'A+'),
(12, 20, 230, 'B+'),
(12, 28, 250, 'O+'),
(12, 30, 200, 'AB+'),
(12, 18, 300, 'A-'),
(12, 12, 360, 'B-'),
(12, 25, 350, 'O-'),
(12, 50, 380, 'AB-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank_registration`
--
ALTER TABLE `blood_bank_registration`
  ADD PRIMARY KEY (`Blood_Bank_ID`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`Donor_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_bank_registration`
--
ALTER TABLE `blood_bank_registration`
  MODIFY `Blood_Bank_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `Donor_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
