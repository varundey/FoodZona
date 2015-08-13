-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2015 at 11:50 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vamsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `stocks_buy`
--

CREATE TABLE IF NOT EXISTS `stocks_buy` (
  `name` varchar(20) NOT NULL,
  `uid` int(2) NOT NULL,
  `qty` int(2) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks_buy`
--

INSERT INTO `stocks_buy` (`name`, `uid`, `qty`, `price`) VALUES
('surf_excel', 1001, 4, 85),
('Cavin''s', 1002, 30, 25),
('Dairymilk ', 1003, 67, 35),
('Pepsi', 1004, 50, 22),
('DermiCool', 1005, 20, 72),
('PopCorn', 1006, 40, 20),
('Dates', 1007, 18, 90),
('DettolSoap', 1008, 40, 23),
('Good_Night', 1009, 50, 65),
('KwalityWalls_Cone', 1010, 50, 30),
('Bucket', 1011, 35, 170),
('Ferroro_Rocher', 1012, 20, 350),
('TupperWare_Bottle', 1013, 20, 220),
('Vim_bar', 1014, 50, 20),
('Amul_Butter', 1015, 25, 40),
('Danone_curd', 1016, 30, 30),
('McCan''s_FrenchFries', 1017, 20, 110),
('Knife', 1018, 40, 50),
('Lay''s_potatoChips', 1019, 100, 20),
('Haldiram''s', 1020, 60, 22),
('Glucon-D', 1021, 20, 65),
('Ghee', 1022, 40, 100),
('Notebook_200p', 1023, 200, 40),
('Clean&Clear', 1024, 50, 49),
('Stylish_keychain', 1025, 10, 99),
('Milk', 1026, 40, 23),
('Bournville', 1027, 50, 35),
('5_Star-cadbury', 1028, 50, 10),
('Nestle_Munch', 1029, 100, 5),
('Nail_cutter', 1030, 25, 25),
('parle_hide&seek', 1031, 25, 30),
('dettol_Handwash', 1032, 30, 70),
('Vaseline', 1033, 50, 45),
('Brylcreem', 1034, 10, 72),
('Parachute_Oil', 1035, 60, 55),
('Coca_cola', 1036, 30, 66),
('7Up', 1037, 20, 38),
('Kellog''s_Chocos', 1038, 22, 228),
('Corn_flakes', 1039, 22, 199),
('ParkAvenue_deo', 1040, 30, 150),
('ponds_coldcream', 1041, 200, 5),
('Maggi', 1042, 100, 15),
('Ching''s_Soysauce', 1043, 30, 50),
('maggi_tomatosauce', 1044, 30, 49),
('Axe_body-spray', 1045, 90, 155),
('LunchBox', 1046, 26, 145),
('Godrej_lock', 1047, 20, 75),
('Dosa_mix', 1048, 40, 50),
('Rasgulla', 1049, 30, 60),
('Cup_cakes', 1050, 45, 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stocks_buy`
--
ALTER TABLE `stocks_buy`
 ADD PRIMARY KEY (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
