-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 09:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusreg`
--

CREATE TABLE `cusreg` (
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NID` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nationality` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateofBirth` date NOT NULL,
  `Picture` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ConfirmPassword` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cusreg`
--

INSERT INTO `cusreg` (`Username`, `Email`, `PhoneNumber`, `NID`, `Nationality`, `DateofBirth`, `Picture`, `Gender`, `Address`, `Password`, `ConfirmPassword`) VALUES
('Mimmoy', 'mimmoy@gmail.com', '01982837350', '1934455667', 'bangladeshi', '2001-10-15', '../upload/fox.jpg', 'male', 'Dhaka', 'MIMmoy@22', 'MIMmoy@22'),
('Safin', 'safin@gmail.com', '01844716783', '9300478957', 'Bangladeshi', '2000-01-01', '../upload/safin.jpg', 'male', 'Niketo', 'MIMmoy@22', 'MIMmoy@22'),
('Remo', 'galibremo@gmail.com', '01744716387', '1934455667', 'bangladeshi', '2001-01-01', '../upload/remo.jpg', 'male', 'Dinajpur', 'MIMmoy@22', 'MIMmoy@22');

-- --------------------------------------------------------

--
-- Table structure for table `myad`
--

CREATE TABLE `myad` (
  `Category` varchar(100) NOT NULL,
  `Tittle` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Rent` int(100) NOT NULL,
  `File` varchar(2555) NOT NULL,
  `Number` varchar(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myad`
--

INSERT INTO `myad` (`Category`, `Tittle`, `Description`, `Rent`, `File`, `Number`, `Email`) VALUES
('Bus', 'greenline', '3000cc volvo engine\r\nac bus', 12000, '../upload/maxresdefault.jpg.jpg', '01864285696', 'shafinislam23@gmail.com'),
('Car', 'Toyota Alion', '1500cc\r\n2 wheel drive\r\nFull leather seats', 5000, '../upload/Toyota-Allion-02.jpg.jpg', '01445874595', 'niloy@gmail.com'),
('Bike', 'yamaha fzs v3', '149cc engine\r\n137kg weight', 2000, '../upload/fzs-fi-v3-bs663ea1f6177ab5.jpg.jpg', '01784596255', 'mimmoy@gmail.com'),
('Bike', 'Hero hunk 150R', '150cc engine \r\nred colour', 1500, '../upload/hero honda.jpg.jpg', '01974596354', 'remo@gmail.com'),
('Flat', 'Apartment', 'dhanmondi 27\r\n1200sft', 25000, '../upload/1565937-800x600.jpg.jpg', '01925644826', 'abcdf@yahoo.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
