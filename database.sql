-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 02:59 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(10) NOT NULL,
  `IRSNumber` varchar(10) NOT NULL,
  `SocialSecurityNumber` varchar(10) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `DriverLicense` varchar(10) NOT NULL,
  `FirstRegistration` date NOT NULL,
  `City` varchar(20) NOT NULL,
  `PostalCode` int(5) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `StreetNumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `IRSNumber`, `SocialSecurityNumber`, `LastName`, `FirstName`, `DriverLicense`, `FirstRegistration`, `City`, `PostalCode`, `Street`, `StreetNumber`) VALUES
(1, '12BHD352I8', 'GH67891096', 'Nakou', 'Christy', '124G6778', '2017-10-24', 'KALLITHEA', 17676, 'KREMOY', '12'),
(2, '123456789A', '95423GDS4', 'MELA', 'ANASTASIA', '518282R89', '2017-05-05', 'CHALANDRI', 15234, 'IVIS', '33'),
(3, '12BHD902I8', 'DJQ36434FD', 'XANTHAKOU', 'PANAGIOTA', '1ADLS9890C', '2018-01-01', 'NEA SMIRNI', 17654, 'MANHS', '78'),
(4, '4428492DDA', 'CASCCA4883', 'MANIKOS', 'GRIGORIS', '810398910', '2017-04-16', 'MAROUSI', 12786, 'ALIKH', '23'),
(5, '5S54F5SC8', 'H47851209', 'GRIGORAKOS', 'JOHN', '47852KL5', '2015-10-14', 'METAMORFOSI', 14451, 'AGIAS VARVARAS', '39'),
(6, '5854F51323', 'G673920127', 'PAPADAKIS', 'GEORGE', '785672367', '2017-10-23', 'PANORMOU', 12378, 'ASTRA', '67'),
(7, '72AD192893', '30482UDS29', 'DELOUXIOTIS', 'MARKOS', '79378SDN', '2014-11-27', 'BRILISIA', 19547, 'IONIS', '198'),
(8, '1212FKF103', '103SVV3880', 'PAPADOPOULOS', 'DINOS', '1038105FW', '2017-11-14', 'ILISIA', 13985, 'XAROKOPOU', '69'),
(9, '313JKSK183', '9082VFF318', 'MARKISIOS', 'BASILIS', '1848JSK44', '2016-08-24', 'ATHENS', 10401, 'FILLIPOU', '176'),
(10, '123456789K', '58608NKS92', 'ARGIRIOU', 'IOANNA', '3713JSN90', '2016-05-31', 'DIONISOS', 11878, 'DIOIRANIS', '58'),
(11, '58D4586F42', '478DH52B48', 'MENEGAKH', 'ELENH', '4545896255', '2015-03-17', 'ATHENS', 15678, 'AIOLOU', '1'),
(12, '785D4521F4', '89D5D45478', 'DIMITRIOU', 'STEFANOS', '854712C891', '2017-04-19', 'SERRES', 19030, 'PTOLEMAIOU', '15'),
(13, '120C908423', 'A95874D583', 'KERAMMIDA', 'IRENE', '85D4789632', '2015-08-12', 'PATRA', 12390, 'DELAKOU', '90'),
(14, '458741236S', '582169DF4G', 'PROKOPIOU ', 'STELLA', '514XD584E5', '2015-11-24', 'PANORAMA', 87096, 'PAVLOU MELA', '128'),
(15, '7854F5G458', '12DER45963', 'FILIOU', 'REA', '147896LO52', '2017-11-01', 'ATHENS', 15000, 'PANEPISTIMIOU', '176A'),
(16, '4185245F85', '6589EDJNKO', 'KOUTSOURADIS', 'NIKOLAOS', '4158DF6284', '2017-11-16', 'GERAKAS', 12367, 'STAVRIANOU', '9'),
(100, '1111111111', '1111111111', 'AAAAAA', 'AAAAAA', 'aaaaaaa', '2018-01-09', 'AAAAAAA', 11111, 'AAAAAAA', '56'),
(101, '12345ASKJL', '123JKLOIUH', 'DIMAKIS', 'MAKIS', '1234567KJH', '2017-12-31', 'GLYFADA', 12399, 'KALAVRITON', '23');

-- --------------------------------------------------------

--
-- Table structure for table `emailaddress`
--

CREATE TABLE `emailaddress` (
  `StoreID` int(5) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emailaddress`
--

INSERT INTO `emailaddress` (`StoreID`, `EmailAddress`) VALUES
(1, 'athens1@gmail.com'),
(1, 'athens2@gmail.com'),
(1, 'athens4life@gmail.com'),
(1, 'loveathens@gmail.com'),
(1, 'sivitanidou@gmail.com'),
(2, 'rent_aristotelous@gmail.com'),
(2, 'rent_thes@gmail.com'),
(2, 'thessaloniki@gmail.com'),
(3, 'patra@gmail.com'),
(3, 'patra_car_rent@gmail.com'),
(3, 'patra_rent@gmail.com'),
(4, 'rodos@gmail.com'),
(4, 'rodos_car_rent@gmail.com'),
(4, 'rodos_rent@gmail.com'),
(5, 'irakleio2@gmail.com'),
(5, 'irakleio@gmail.com'),
(5, 'irakleio_rent@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `IRSNumber` varchar(10) NOT NULL,
  `SocialSecurityNumber` varchar(10) NOT NULL,
  `DriverLicense` varchar(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `StreetNumber` varchar(10) NOT NULL,
  `PostalCode` int(5) NOT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`IRSNumber`, `SocialSecurityNumber`, `DriverLicense`, `FirstName`, `LastName`, `Street`, `StreetNumber`, `PostalCode`, `City`) VALUES
('123456789A', 'ASF0923JKL', '12JFKSL09O', 'ARETH', 'PLESSA', 'KIFISSIAS', '56B', 13345, 'XOLARGOS'),
('123456789K', 'ASDF890762', 'GHJFKLOIP0', 'MAKIS', 'EYTHIMIADIS', 'KALAMOU', '26', 12340, 'THESSALONIKI'),
('123456789M', 'KJHGFR5678', 'MNKO09I8U7', 'MIXALIS', 'MPARAKOS', 'KOLOSAIOU', '9', 67890, 'PATRA'),
('12345KLOIJ', 'ASXCMKGLO0', '123ASDFGHJ', 'GIORGOS', 'NIKOLAOU', 'YDRAS', '14', 11223, 'PANORAMA'),
('204202FE99', '905FMF5353', '393FS9590K', 'FOTAKIS', 'NIKOLAOS', 'STATRIARXOU', '8', 19349, 'METAMORFOSI'),
('204802JG00', '94694XZ906', '6094CN942', 'ANTONIA', 'KAPETANOU', 'NIKIS', '2', 12423, 'RODOS'),
('295903G904', '934EGE9905', '244T949K59', 'MANOS', 'KIRKOS', 'DIMOGENIS', '192C', 19294, 'XOLARGOS'),
('42490VDI44', '9249RVI904', '395VMVI344', 'XRISTOS', 'XRISTOU', 'MPENAKH', '92', 12367, 'HRAKLEIO'),
('492490NJ49', '049R6NG905', '4949GR0994', 'BARBARA', 'PISTOLAKI', 'KOLETIS', '4B', 10293, 'PATRA'),
('49905NJRI3', '7449RGO005', '599KR94969', 'FILOMENA ', 'ARABANH', 'GEORGIOU ', '45', 14908, 'THESSALONIKI'),
('52945MK992', '4044RTNJ43', '099324JR49', 'ANESTIS', 'TSOPLIOS', 'LIKOURGOU', '68', 10833, 'RODOS'),
('6944EOI944', '3544945RE9', '63994TT040', 'TASOS', 'LIOSIS', 'KIRIAKIS', '264', 11345, 'GLYFADA'),
('69593ISF94', '8284FER909', '2934559JC0', 'MENELAOS', 'ZOTOS', 'KORETIA', '36A', 14902, 'FILOTHEI'),
('824482MR9', '53194J9IO8', '53913I4IGG', 'FOTIS', 'DIONISOU', 'FANEROMENIS', '95', 18244, 'PATRA'),
('82948FGBM', '42949RI409', '94894434RT', 'ELENH', 'MARATOU', 'THRASIVOULOU', '57', 19238, 'AIGIO'),
('842424RJ93', '3385PAOK35', '2959M50O94', 'BOULA', 'THEONAKI', 'BASILEOS', '124', 16924, 'THESSALONIKI'),
('84924FJK53', '24204EFO94', '39139SD939', 'KONSTANTINOS', 'KOUTSANTIOS', 'PAPAGOU', '84A', 18009, 'RODOS'),
('92955D93RF', '6784NFRE89', '59595FKE5', 'KOSTAS', 'KERKIRAIOS', 'ARISTEIDOU', '49', 13559, 'OMONOIA'),
('I90I2904G0', '2294DGM09', '34I4KVE245', 'DOMETIOS', 'SARRIS', 'IFASIOU', '100', 15535, 'HRAKLEIO');

-- --------------------------------------------------------

--
-- Stand-in structure for view `exp_date`
-- (See below for the actual view)
--
CREATE TABLE `exp_date` (
`LicensePlate` varchar(8)
,`Model` varchar(20)
,`Type` varchar(20)
,`Make` varchar(20)
,`EXP_Date` date
,`Store` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `fueltype`
--

CREATE TABLE `fueltype` (
  `LicensePlate` varchar(8) NOT NULL,
  `FuelType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fueltype`
--

INSERT INTO `fueltype` (`LicensePlate`, `FuelType`) VALUES
('AAA-5984', 'DIESEL'),
('AHK-2189', 'PETROL'),
('AMK-4590', 'GAS'),
('AZO-2345', 'BIOFUELS'),
('BKO-0986', 'DIESEL'),
('EEK-1299', 'PETROL'),
('EKO-2974', 'DIESEL'),
('ETK-1234', 'BIOFUELS'),
('HTI-0960', 'PETROL'),
('KAE-9887', 'PETROL'),
('KOT-1236', 'PETROL'),
('KXO-3456', 'GAS'),
('MNO-0433', 'DIESEL'),
('OOK-1098', 'PETROL'),
('ZKO-7654', 'DIESEL');

-- --------------------------------------------------------

--
-- Stand-in structure for view `not_up`
-- (See below for the actual view)
--
CREATE TABLE `not_up` (
`IRSNumber` varchar(10)
,`FirstName` varchar(20)
,`LastName` varchar(20)
,`LicensePlate` varchar(8)
,`PaymentAmount` int(10)
,`PaymentMethod` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `paymenttransaction`
--

CREATE TABLE `paymenttransaction` (
  `StartDate` date NOT NULL,
  `LicensePlate` varchar(8) NOT NULL,
  `PaymentAmount` int(10) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paymenttransaction`
--

INSERT INTO `paymenttransaction` (`StartDate`, `LicensePlate`, `PaymentAmount`, `PaymentMethod`) VALUES
('2017-11-26', 'ETK-1234', 6000, 'CREDIT CARD'),
('2017-11-26', 'ZKO-7654', 8500, 'CASH'),
('2017-11-27', 'EEK-1299', 3000, 'CASH'),
('2017-12-06', 'AHK-2189', 600, 'CREDIT CARD'),
('2017-12-07', 'KOT-1236', 7000, 'CASH'),
('2018-01-02', 'AMK-4590', 200, 'LEASING'),
('2018-01-03', 'KXO-3456', 600, 'LEASING'),
('2018-01-12', 'AAA-5984', 500, 'CASH'),
('2018-01-31', 'AZO-2345', 300, 'CASH'),
('2018-02-01', 'AAA-5984', 150, 'CARD'),
('2018-03-01', 'BKO-0986', 1000, 'CREDIT CARD'),
('2018-03-07', 'KAE-9887', 705, 'CASH'),
('2018-03-07', 'MNO-0433', 1205, 'CREDIT CARD'),
('2018-04-04', 'EKO-2974', 820, 'CASH'),
('2018-04-20', 'AAA-5984', 390, 'CASH');

-- --------------------------------------------------------

--
-- Table structure for table `phonenumber`
--

CREATE TABLE `phonenumber` (
  `StoreID` int(5) NOT NULL,
  `PhoneNumber` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phonenumber`
--

INSERT INTO `phonenumber` (`StoreID`, `PhoneNumber`) VALUES
(1, 2102845348),
(1, 2106859132),
(1, 6941440800),
(2, 2610270353),
(2, 2610312345),
(2, 6976780900),
(3, 2310595033),
(3, 2310595034),
(3, 6945676891),
(4, 2241064944),
(4, 2241065410),
(4, 6987889067),
(5, 2810253113),
(5, 2810253114),
(5, 6934356789);

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `LicensePlate` varchar(8) NOT NULL,
  `StartDate` date NOT NULL,
  `StartLocation` int(5) NOT NULL,
  `FinishLocation` int(5) NOT NULL,
  `FinishDate` date NOT NULL,
  `ReturnState` text NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `IRSNumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`LicensePlate`, `StartDate`, `StartLocation`, `FinishLocation`, `FinishDate`, `ReturnState`, `CustomerID`, `IRSNumber`) VALUES
('AAA-5984', '2018-01-12', 2, 2, '2018-01-31', 'ok', 2, '49905NJRI3'),
('AAA-5984', '2018-02-01', 2, 2, '2018-02-07', 'ok', 3, '842424RJ93'),
('AAA-5984', '2018-04-20', 2, 2, '2018-05-11', 'ok', 11, '842424RJ93'),
('AHK-2189', '2017-12-06', 1, 1, '2017-12-31', 'ok', 2, '92955D93RF'),
('AMK-4590', '2018-01-02', 2, 3, '2018-01-24', 'BROKEN TAILIGHT', 5, '123456789M'),
('AZO-2345', '2018-01-31', 5, 5, '2018-02-09', 'ok', 9, '42490VDI44'),
('BKO-0986', '2018-03-01', 1, 1, '2018-03-09', 'ok', 1, '295903G904'),
('EEK-1299', '2017-11-27', 4, 4, '2018-02-28', 'ok', 10, '52945MK992'),
('EKO-2974', '2018-04-04', 4, 4, '2018-04-18', 'BROKEN MIRRORS', 13, '204802JG00'),
('ETK-1234', '2017-11-26', 3, 3, '2018-06-30', 'ok', 7, '123456789M'),
('KAE-9887', '2018-03-07', 4, 4, '2018-03-29', 'ok', 13, '84924FJK53'),
('KOT-1236', '2017-12-07', 1, 1, '2018-04-19', 'ok', 14, '123456789A'),
('KXO-3456', '2018-01-03', 3, 3, '2018-01-26', 'ok', 8, '824482MR9'),
('MNO-0433', '2018-03-07', 5, 5, '2018-04-12', 'BROKEN WINDSHIELD', 9, '42490VDI44'),
('ZKO-7654', '2017-11-26', 2, 3, '2018-08-17', 'ok', 4, '49905NJRI3');

--
-- Triggers `rents`
--
DELIMITER $$
CREATE TRIGGER `ghost_customer` AFTER DELETE ON `rents` FOR EACH ROW BEGIN DELETE FROM  `customer` WHERE  `customer`.`CustomerID` =  `OLD`.`CustomerID` AND NOT EXISTS (SELECT * FROM `rents` WHERE `rents`.`CustomerID` = `OLD`.`CustomerID`) AND NOT EXISTS (SELECT * FROM `reserves` WHERE `reserves`.`CustomerID` = `OLD`.`CustomerID`) ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `LicensePlate` varchar(8) NOT NULL,
  `StartDate` date NOT NULL,
  `StartLocation` int(5) NOT NULL,
  `FinishLocation` int(5) NOT NULL,
  `FinishDate` date NOT NULL,
  `Paid` varchar(5) NOT NULL,
  `CustomerID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`LicensePlate`, `StartDate`, `StartLocation`, `FinishLocation`, `FinishDate`, `Paid`, `CustomerID`) VALUES
('AAA-5984', '2017-11-29', 2, 2, '2018-02-01', 'No', 3),
('AAA-5984', '2018-01-03', 4, 4, '2018-01-18', 'No', 7),
('AAA-5984', '2018-02-15', 2, 2, '2018-02-27', 'Yes', 4),
('AZO-2345', '2018-01-25', 4, 2, '2018-04-20', 'Yes', 14),
('BKO-0986', '2018-02-13', 5, 2, '2019-01-17', 'Yes', 9),
('EEK-1299', '2018-02-28', 3, 1, '2019-03-13', 'Yes', 2),
('ETK-1234', '2018-04-18', 4, 1, '2019-05-15', 'No', 5),
('HTI-0960', '2018-01-03', 2, 3, '2018-03-15', 'No', 6),
('HTI-0960', '2018-01-31', 4, 4, '2018-02-03', 'Yes', 8),
('KAE-9887', '2018-01-27', 4, 2, '2018-08-16', 'No', 11),
('KAE-9887', '2018-01-31', 3, 3, '2018-04-12', 'No', 8),
('KOT-1236', '2018-02-28', 4, 1, '2019-03-13', 'Yes', 7),
('KXO-3456', '2018-07-18', 3, 1, '2018-10-23', 'No', 2),
('MNO-0433', '2018-01-16', 1, 5, '2018-05-01', 'No', 15),
('OOK-1098', '2018-01-27', 2, 3, '2018-05-17', 'Yes', 10),
('ZKO-7654', '2018-05-23', 3, 5, '2019-06-13', 'No', 6);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `StoreID` int(5) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `StreetNumber` varchar(10) NOT NULL,
  `PostalCode` int(5) NOT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`StoreID`, `Street`, `StreetNumber`, `PostalCode`, `City`) VALUES
(1, 'SIBITANIDOU', '12', 17676, 'ATHENS'),
(2, 'ARISTOTELOUS', '57', 17893, 'THESSALONIKI'),
(3, 'AGIAS SOFIAS', '37', 26500, 'PATRA'),
(4, 'SOKRATOUS', '27', 85100, 'RODOS'),
(5, 'ADRIANOU', '9', 71202, 'HRAKLEIO');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `LicensePlate` varchar(8) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Make` varchar(20) NOT NULL,
  `Year` int(4) NOT NULL,
  `Kilometers` int(10) NOT NULL,
  `CylinderCapacity` int(5) NOT NULL,
  `Horsepower` int(5) NOT NULL,
  `Damages` text NOT NULL,
  `Malfunctions` text NOT NULL,
  `NextService` date NOT NULL,
  `InsuranceExpDate` date NOT NULL,
  `LastService` date NOT NULL,
  `StoreID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`LicensePlate`, `Model`, `Type`, `Make`, `Year`, `Kilometers`, `CylinderCapacity`, `Horsepower`, `Damages`, `Malfunctions`, `NextService`, `InsuranceExpDate`, `LastService`, `StoreID`) VALUES
('AAA-5984', 'ATOS', 'CAR', 'HYUNDAI', 2000, 123560, 1000, 100, 'None', 'None', '2018-02-15', '2018-05-11', '2017-10-30', 2),
('AHK-2189', 'ATOS', 'CAR', 'HYUNDAI', 2000, 125000, 1000, 100, 'None', 'None', '2018-01-31', '2018-01-01', '2017-09-03', 1),
('AMK-4590', 'Z', 'MOTORCYCLE', 'KAWASAKI', 2008, 7000, 125, 50, 'RIGHT MIRROR', 'None', '2018-01-11', '2018-05-11', '2018-01-01', 2),
('AZO-2345', 'PIGLET', 'ATV', 'HONDA', 2005, 3000, 600, 60, 'None', 'RIGHT BRAKE PAD', '2018-04-11', '2018-04-20', '2017-10-18', 5),
('BKO-0986', 'POWER', 'TRUCK', 'MAN', 2012, 900000, 3000, 200, 'None', 'None', '2018-06-09', '2018-09-05', '2017-11-15', 1),
('EEK-1299', 'CLAY', 'ATV', 'HONDA', 2012, 34290, 800, 89, 'None', 'None', '2018-10-10', '2018-08-29', '2017-11-14', 4),
('EKO-2974', 'ASTREA', 'MOTORCYCLE', 'HONDA', 2000, 20090, 250, 66, 'None', 'None', '2018-06-08', '2018-10-17', '2018-01-10', 4),
('ETK-1234', 'IMPREZA', 'CAR', 'SUBARU', 2009, 200000, 2000, 250, 'CRACKED WINDSHIELD', 'None', '2018-05-11', '2018-01-31', '2017-08-03', 3),
('HTI-0960', 'KAPPA', 'MOTORCYCLE', 'KTM', 2011, 23300, 1000, 110, 'None', 'None', '2018-10-20', '2019-01-25', '2018-01-07', 5),
('KAE-9887', 'CORSA', 'CAR', 'OPEL', 2016, 5000, 1600, 180, 'DIPPED RIGHT HEADLIGHT', 'None', '2018-05-25', '2018-02-06', '2017-07-06', 4),
('KOT-1236', 'SLK 200', 'CAR', 'MERCEDES', 2006, 300450, 3000, 290, 'TORN SEAT', 'None', '2018-09-14', '2018-09-02', '2018-01-01', 1),
('KXO-3456', 'YARIS', 'CAR', 'TOYOTA', 2009, 7000, 1200, 120, 'None', 'None', '2018-04-28', '2018-03-07', '2017-11-09', 3),
('MNO-0433', 'KIRBI', 'MINI VAN', 'NISSAN', 2010, 563982, 1500, 104, 'None', 'None', '2018-03-14', '2018-05-22', '2017-12-06', 5),
('OOK-1098', 'BRUTE', 'TRUCK', 'MAN', 1998, 500045, 2000, 178, 'MISSING DOOR HANDLE', 'None', '2018-02-04', '2018-02-28', '2017-01-03', 3),
('ZKO-7654', 'VANNO', 'MINI VAN', 'SUNNY', 1999, 765432, 1400, 97, 'None', 'BURNS OILS', '2018-01-18', '2018-01-29', '2017-06-06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `IRSNumber` varchar(10) NOT NULL,
  `StoreID` int(5) NOT NULL,
  `StartDate` date NOT NULL,
  `FinishDate` date DEFAULT NULL,
  `Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`IRSNumber`, `StoreID`, `StartDate`, `FinishDate`, `Position`) VALUES
('123456789A', 1, '2012-03-13', '0000-00-00', 'MANAGER'),
('123456789K', 2, '2014-03-22', '0000-00-00', 'MANAGER'),
('123456789M', 3, '2014-04-04', '0000-00-00', 'MANAGER'),
('12345KLOIJ', 2, '2014-03-12', '0000-00-00', 'ASSOCIATE'),
('204202FE99', 1, '2014-03-12', '2015-02-03', 'ASSOCIATE'),
('204802JG00', 4, '2015-03-19', '2015-02-03', 'MANAGER'),
('295903G904', 1, '2015-03-11', '0000-00-00', 'MECHANIC'),
('42490VDI44', 5, '2015-03-04', '0000-00-00', 'MANAGER'),
('492490NJ49', 3, '2015-03-04', '0000-00-00', 'ASSOCIATE'),
('49905NJRI3', 2, '2014-10-23', '2018-01-03', 'MECHANIC'),
('52945MK992', 4, '2014-10-28', '0000-00-00', 'MECHANIC'),
('6944EOI944', 1, '2014-10-01', '2018-01-08', 'FINANCIAL MANAGER'),
('69593ISF94', 1, '2016-09-11', '2018-01-28', 'SECURITY'),
('824482MR9', 3, '2016-09-22', '0000-00-00', 'FINANCIAL MANAGER'),
('82948FGBM', 3, '2018-01-01', '0000-00-00', 'CASHIER'),
('842424RJ93', 2, '2018-01-01', '0000-00-00', 'CASHIER'),
('84924FJK53', 4, '2018-01-01', '0000-00-00', 'CASHIER'),
('92955D93RF', 1, '2017-12-10', '0000-00-00', 'CASHIER'),
('I90I2904G0', 5, '2017-12-24', '0000-00-00', 'CASHIER');

--
-- Triggers `works`
--
DELIMITER $$
CREATE TRIGGER `ghost_employee` AFTER DELETE ON `works` FOR EACH ROW BEGIN 
DELETE FROM `employee` 
WHERE `employee`.`IRSNumber` = `OLD`.`IRSNumber` AND NOT EXISTS (SELECT * FROM `works` WHERE `works`.`IRSNumber` = `OLD`.`IRSNumber`);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `exp_date`
--
DROP TABLE IF EXISTS `exp_date`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `exp_date`  AS  select `vehicle`.`LicensePlate` AS `LicensePlate`,`vehicle`.`Model` AS `Model`,`vehicle`.`Type` AS `Type`,`vehicle`.`Make` AS `Make`,`vehicle`.`InsuranceExpDate` AS `EXP_Date`,`vehicle`.`StoreID` AS `Store` from `vehicle` where (`vehicle`.`InsuranceExpDate` < '2018-12-30') ;

-- --------------------------------------------------------

--
-- Structure for view `not_up`
--
DROP TABLE IF EXISTS `not_up`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `not_up`  AS  select `employee`.`IRSNumber` AS `IRSNumber`,`employee`.`FirstName` AS `FirstName`,`employee`.`LastName` AS `LastName`,`rents`.`LicensePlate` AS `LicensePlate`,`paymenttransaction`.`PaymentAmount` AS `PaymentAmount`,`paymenttransaction`.`PaymentMethod` AS `PaymentMethod` from ((`employee` join `rents`) join `paymenttransaction`) where ((`employee`.`IRSNumber` = `rents`.`IRSNumber`) and (`rents`.`LicensePlate` = `paymenttransaction`.`LicensePlate`) and (`rents`.`StartDate` = `paymenttransaction`.`StartDate`)) group by `employee`.`IRSNumber` order by `employee`.`LastName` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `emailaddress`
--
ALTER TABLE `emailaddress`
  ADD PRIMARY KEY (`StoreID`,`EmailAddress`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`IRSNumber`);

--
-- Indexes for table `fueltype`
--
ALTER TABLE `fueltype`
  ADD PRIMARY KEY (`LicensePlate`);

--
-- Indexes for table `paymenttransaction`
--
ALTER TABLE `paymenttransaction`
  ADD PRIMARY KEY (`StartDate`,`LicensePlate`);

--
-- Indexes for table `phonenumber`
--
ALTER TABLE `phonenumber`
  ADD PRIMARY KEY (`StoreID`,`PhoneNumber`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`LicensePlate`,`StartDate`),
  ADD KEY `StartLocation` (`StartLocation`),
  ADD KEY `FinishLocation` (`FinishLocation`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `IRSNumber` (`IRSNumber`),
  ADD KEY `rents_ibfk_1` (`StartDate`,`LicensePlate`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`LicensePlate`,`StartDate`),
  ADD KEY `StartLocation` (`StartLocation`),
  ADD KEY `FinishLocation` (`FinishLocation`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`StoreID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`LicensePlate`),
  ADD KEY `StoreID` (`StoreID`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`IRSNumber`,`StoreID`,`StartDate`),
  ADD KEY `StoreID` (`StoreID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `StoreID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emailaddress`
--
ALTER TABLE `emailaddress`
  ADD CONSTRAINT `emailaddress_ibfk_1` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`) ON DELETE CASCADE;

--
-- Constraints for table `fueltype`
--
ALTER TABLE `fueltype`
  ADD CONSTRAINT `fueltype_ibfk_1` FOREIGN KEY (`LicensePlate`) REFERENCES `vehicle` (`LicensePlate`) ON DELETE CASCADE;

--
-- Constraints for table `paymenttransaction`
--
ALTER TABLE `paymenttransaction`
  ADD CONSTRAINT `paymenttransaction_ibfk_1` FOREIGN KEY (`StartDate`,`LicensePlate`) REFERENCES `rents` (`StartDate`, `LicensePlate`);

--
-- Constraints for table `phonenumber`
--
ALTER TABLE `phonenumber`
  ADD CONSTRAINT `phonenumber_ibfk_1` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`) ON DELETE CASCADE;

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE,
  ADD CONSTRAINT `rents_ibfk_3` FOREIGN KEY (`LicensePlate`) REFERENCES `vehicle` (`LicensePlate`) ON DELETE CASCADE,
  ADD CONSTRAINT `rents_ibfk_4` FOREIGN KEY (`IRSNumber`) REFERENCES `employee` (`IRSNumber`) ON DELETE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`LicensePlate`) REFERENCES `vehicle` (`LicensePlate`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserves_ibfk_3` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`) ON DELETE CASCADE;

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_ibfk_2` FOREIGN KEY (`IRSNumber`) REFERENCES `employee` (`IRSNumber`) ON DELETE CASCADE,
  ADD CONSTRAINT `works_ibfk_3` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
