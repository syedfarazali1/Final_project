-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 07:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(32) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `ID` int(11) NOT NULL,
  `Date Time` varchar(100) NOT NULL,
  `Pat_ID` int(32) NOT NULL,
  `Doctor_ID` int(11) NOT NULL,
  `Ph_Num` varchar(100) NOT NULL,
  `Address` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `ID` int(32) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`ID`, `Name`) VALUES
(1, 'Karachi'),
(2, 'Lahore'),
(5, 'Islamabad'),
(7, 'Hydrabad');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `ID` int(32) NOT NULL,
  `Dr_Name` varchar(100) NOT NULL,
  `Spe_ID` int(32) NOT NULL,
  `Timing` varchar(100) NOT NULL,
  `Days` varchar(50) NOT NULL,
  `Cit_ID` int(32) NOT NULL,
  `Avaible_Status` varchar(100) NOT NULL,
  `Pic` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`ID`, `Dr_Name`, `Spe_ID`, `Timing`, `Days`, `Cit_ID`, `Avaible_Status`, `Pic`) VALUES
(2, 'asas', 1, '16:54', 'TTS', 1, 'Deactive', 'adasda'),
(3, 'daas', 1, '16:58', 'TTS', 1, 'Active', 'asdasdasd'),
(4, 'daas', 1, '16:58', 'MWF', 2, 'on', 'asdasdasd'),
(5, 'sfds', 1, '17:02', 'TTS', 1, 'Deactive', 'sfafdsf'),
(6, 'six', 1, '17:02', 'TTS', 1, 'Deactive', 'adsad'),
(7, 'khan', 1, '19:11', 'MWF', 2, 'Active', 'khan'),
(11, 'farazs', 1, '22:54', 'TTS', 1, 'Deactive', 'Screen-Shot-2016-11-22-at-2.13.47-PM.webp'),
(12, 'faraz', 6, '22:54', 'MWF', 5, 'Active', ''),
(14, 'Faraz Ali', 6, '13:14', 'MWF', 5, 'Active', 'WhatsApp Image 2022-08-22 at 10.18.01 PM.jpeg'),
(15, 'Faraz Ali', 6, '13:14', 'MWF', 5, 'Active', 'WhatsApp Image 2022-08-22 at 10.18.01 PM.jpeg'),
(16, 'Faraz Ali', 6, '13:14', 'MWF', 5, 'Active', 'WhatsApp Image 2022-08-22 at 10.18.01 PM.jpeg'),
(17, 'faraz', 6, '00:17', 'TTS', 2, 'Active', 'Screen-Shot-2016-11-22-at-2.13.47-PM.webp'),
(18, 'faraz', 1, '11:28', 'TTS', 1, 'Deactive', 'Screenshot (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `MASSAGE` varchar(500) NOT NULL,
  `Pat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Ph_Num` varchar(100) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `CIt_Id` int(32) NOT NULL,
  `Blood Group` varchar(100) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `Name`, `Address`, `Ph_Num`, `Age`, `CIt_Id`, `Blood Group`, `Password`, `Email`) VALUES
(3, 'waqas Ali', 'malir', '03170296559', '22', 5, 'a+', 'admins', 'syedfarazali066@gmail.coms');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ID` int(11) NOT NULL,
  `REPORT_TITTLE` varchar(500) NOT NULL,
  `Pat_ID` int(11) NOT NULL,
  `DATE_TIME` varchar(500) NOT NULL,
  `DOCUMENTS` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ID`, `REPORT_TITTLE`, `Pat_ID`, `DATE_TIME`, `DOCUMENTS`) VALUES
(2, 'dad', 3, '2022-10-07T09:50', 'page1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `specialist`
--

CREATE TABLE `specialist` (
  `ID` int(32) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialist`
--

INSERT INTO `specialist` (`ID`, `Name`) VALUES
(1, 'Skin '),
(6, 'Eyes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Pat_ID` (`Pat_ID`),
  ADD KEY `Doctor_ID` (`Doctor_ID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Spe_ID` (`Spe_ID`,`Cit_ID`),
  ADD KEY `Spe_ID_2` (`Spe_ID`,`Cit_ID`),
  ADD KEY `Cit_ID` (`Cit_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Pat_ID` (`Pat_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CIt_Id` (`CIt_Id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Pat_ID` (`Pat_ID`);

--
-- Indexes for table `specialist`
--
ALTER TABLE `specialist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specialist`
--
ALTER TABLE `specialist`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`Pat_ID`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`Spe_ID`) REFERENCES `specialist` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`Cit_ID`) REFERENCES `cities` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Pat_ID`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`CIt_Id`) REFERENCES `cities` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`Pat_ID`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
