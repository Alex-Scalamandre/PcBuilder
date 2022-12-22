-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2022 at 05:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpus`
--

CREATE TABLE `cpus` (
  `Name` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Link` varchar(120) NOT NULL,
  `Brand` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cpus`
--

INSERT INTO `cpus` (`Name`, `Price`, `Link`, `Brand`) VALUES
('Ryzen 5600', 399.99, 'www.google.com', 'AMD'),
('Core i5-13600K', 309.99, 'https://www.bhphotovideo.com/c/product/1721752-REG/intel_bx8071513600k_core_i5_13600k_3_5_ghz.html', 'Intel'),
('Ryzen 9 7950X', 603.99, 'https://a.co/d/ab0Mnj6', 'AMD'),
('Intel Core i9-13900K', 659.99, 'https://a.co/d/17zaGFQ', 'Intel');

-- --------------------------------------------------------

--
-- Table structure for table `gpus`
--

CREATE TABLE `gpus` (
  `Name` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gpus`
--

INSERT INTO `gpus` (`Name`, `Price`, `Link`) VALUES
('GeForce RTX 3060', 349.99, 'https://www.amazon.com/dp/B08WTFG5BX?tag=pcpapi-20&linkCode=ogi&th=1&psc=1'),
('NVIDIA GeForce RTX 3090 Ti 24G Graphics Card ', 1389, 'https://stockx.com/nvidia-geforce-rtx-3090-ti-24g-graphics-card-9001g1362505000?country=US&currencyCode=USD&srsltid=AYJSbActgKVbNdWeObl3NqX8_rhQdi4236_O6KyiReivb_y4H5u-w5DFJKI&utm_source=web&utm_medium=nativeshare&utm_campaign=productpage '),
('MSI - NVIDIA GeForce GTX 1660 Super Ventus XS OC 6GB GDDR6 PCI Express 3.0 Graphics Car', 249.99, 'https://www.bestbuy.com/site/msi-nvidia-geforce-gtx-1660-super-ventus-xs-oc-6gb-gddr6-pci-express-3-0-graphics-card/6518174.p?skuId=6518174&ref=212&loc=1&extStoreId=1467'),
('AMD Radeon RX 6800', 731.4, 'https://a.co/d/88d98Jw'),
('GeForce RTX 4080', 1309.99, 'https://www.newegg.com/msi-geforce-rtx-4080-rtx-4080-16gb-gaming-x-trio/p/N82E16814137766?item=N82E16814137766&source=region&nm_mc=knc-googleadwords-pc&cm_mmc=knc-googleadwords-pc-_-pla-_-video+card+-+nvidia-_-N82E16814137766&utm_source=google&utm_medium=paid+shopping&utm_campaign=knc-googleadwords-pc-_-pla-_-video+card+-+nvidia-_-N82E16814137766&id0=Google&id1=2084536037&id2=78315435298&id3=&id4=&id5=pla-1930165399861&id6=&id7=9004441&id8=&id9=g&id10=c&id11=&id12=Cj0KCQiA7bucBhCeARIsAIOwr-9JXhtkT3_w1Vorth05VhF7emrc3TGpOSWWCcatDKQVKOx700XqGg4aAsr7EALw_wcB&id13=&id14=Y&id15=&id16=375254745053&id17=&id18=&id19=&id20=&id21=pla&id22=8438988&id23=online&id24=N82E16814137766&id25=US&id26=1930165399861&id27=Y&id28=&id29=&id30=17532019928042944216&id31=en&id32=&id33=&id34=&gclid=Cj0KCQiA7bucBhCeARIsAIOwr-9JXhtkT3_w1Vorth05VhF7emrc3TGpOSWWCcatDKQVKOx700XqGg4aAsr7EALw_wcB&gclsrc=aw.ds');

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `person` varchar(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `link` varchar(1000) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `cpu_compat` varchar(10) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `websitename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`person`, `name`, `price`, `link`, `brand`, `cpu_compat`, `size`, `type`, `websitename`) VALUES
('Joel', 'Ryzen 9 7950X', 603.99, 'https://a.co/d/ab0Mnj6', 'AMD', NULL, NULL, 'CPU', 'Link'),
('Joel', 'AMD Radeon RX 6800', 731.4, 'https://a.co/d/88d98Jw', NULL, NULL, NULL, 'GPU', 'Link'),
('Joel', 'ASUS ROG STRIX B550-F GAMING', 204.99, 'https://a.co/d/dujmRlE', NULL, 'AMD', 'ATX', 'Motherboard', 'Link'),
('Alex', 'ARESGAME AGT Series 1000W Power Supply', 129.99, 'https://a.co/d/gdtX65Y', NULL, NULL, NULL, 'PSU', 'Link'),
('Alex', 'Intel Core i9-13900K', 659.99, 'https://a.co/d/17zaGFQ', 'Intel', NULL, NULL, 'CPU', 'Link'),
('Alex', 'GeForce RTX 4080', 1309.99, 'https://www.newegg.com/msi-geforce-rtx-4080-rtx-4080-16gb-gaming-x-trio/p/N82E16814137766?item=N82E16814137766&source=region&nm_mc=knc-googleadwords-pc&cm_mmc=knc-googleadwords-pc-_-pla-_-video+card+-+nvidia-_-N82E16814137766&utm_source=google&utm_medium=paid+shopping&utm_campaign=knc-googleadwords-pc-_-pla-_-video+card+-+nvidia-_-N82E16814137766&id0=Google&id1=2084536037&id2=78315435298&id3=&id4=&id5=pla-1930165399861&id6=&id7=9004441&id8=&id9=g&id10=c&id11=&id12=Cj0KCQiA7bucBhCeARIsAIOwr-9JXhtkT3_w1Vorth05VhF7emrc3TGpOSWWCcatDKQVKOx700XqGg4aAsr7EALw_wcB&id13=&id14=Y&id15=&id16=375254745053&id17=&id18=&id19=&id20=&id21=pla&id22=8438988&id23=online&id24=N82E16814137766&id25=US&id26=1930165399861&id27=Y&id28=&id29=&id30=17532019928042944216&id31=en&id32=&id33=&id34=&gclid=Cj0KCQiA7bucBhCeARIsAIOwr-9JXhtkT3_w1Vorth05VhF7emrc3TGpOSWWCcatDKQVKOx700XqGg4aAsr7EALw_wcB&gclsrc=aw.ds', NULL, NULL, NULL, 'GPU', 'Link'),
('Alex', 'Asus ROG STRIX Z690-A', 279, 'https://www.amazon.com/dp/B09J1RM86X?tag=pcpapi-20&linkCode=ogi&th=1&psc=1', NULL, 'INTEL', 'ATX', 'Motherboard', 'Link'),
('Alex', 'ARESGAME AGT Series 1000W Power Supply', 129.99, 'https://a.co/d/gdtX65Y', NULL, NULL, NULL, 'PSU', 'Link');

-- --------------------------------------------------------

--
-- Table structure for table `motherboards`
--

CREATE TABLE `motherboards` (
  `Name` varchar(40) NOT NULL,
  `Price` float NOT NULL,
  `Link` varchar(300) NOT NULL,
  `cpu_compat` varchar(10) NOT NULL,
  `Size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motherboards`
--

INSERT INTO `motherboards` (`Name`, `Price`, `Link`, `cpu_compat`, `Size`) VALUES
('Asus ROG STRIX Z690-A', 279, 'https://www.amazon.com/dp/B09J1RM86X?tag=pcpapi-20&linkCode=ogi&th=1&psc=1', 'INTEL', 'ATX'),
('ASUS Rog Strix B450-F', 198.68, 'https://www.amazon.com/dp/B07FKTZC4M?tag=pcpapi-20&linkCode=ogi&th=1', 'AMD', 'ATX'),
('Gigabyte Z690 Aorus Pro', 299.98, 'https://a.co/d/iqpPmkH', 'AMD', 'ATX'),
('ASUS ROG STRIX B550-F GAMING', 204.99, 'https://a.co/d/dujmRlE', 'AMD', 'ATX');

-- --------------------------------------------------------

--
-- Table structure for table `psus`
--

CREATE TABLE `psus` (
  `Name` varchar(200) NOT NULL,
  `Price` float NOT NULL,
  `Link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psus`
--

INSERT INTO `psus` (`Name`, `Price`, `Link`) VALUES
('Corsair RM850x', 119.98, 'https://www.newegg.com/corsair-rmx-series-rm850x-cp-9020200-na-850w/p/N82E16817139272?Item=N82E16817139272&nm_mc=AFC-RAN-COM&cm_mmc=afc-ran-com-_-PCPartPicker&utm_medium=affiliate&utm_campaign=afc-ran-com-_-PCPartPicker&utm_source=afc-PCPartPicker&AFFID=2558510&AFFNAME=PCPartPicker&ACRID=1&ASID=https%3a%2f%2fpcpartpicker.com%2f&ranMID=44583&ranEAID=2558510&ranSiteID=8BacdVP0GFs-s3Eto.8tiaOlHie2a8AtDg'),
('ARESGAME AGT Series 1000W Power Supply', 129.99, 'https://a.co/d/gdtX65Y'),
('EVGA SuperNOVA 650 GT, 80 Plus Gold 650W', 109.99, 'https://a.co/d/5DAGL4e'),
('CORSAIR - RMx Series RM1000x', 189.99, 'https://www.bestbuy.com/site/corsair-rmx-series-rm1000x-80-plus-gold-fully-modular-atx-power-supply-black/6459246.p?skuId=6459246&ref=212&loc=1&ref=212&loc=1&gclid=Cj0KCQiA7bucBhCeARIsAIOwr--QicEmVf2Xi8cyLYbJO50BzaONC8ga2e34VrDMpTI3FuIZyF-psooaAprzEALw_wcB&gclsrc=aw.ds');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('alexscal', 'momdad24'),
('Billy', 'bob1234'),
('alexscal', 'momdad24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
