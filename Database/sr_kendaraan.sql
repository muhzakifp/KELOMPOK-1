-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2026 at 10:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sr_kendaraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `harga_dasar` int NOT NULL,
  `kategori_kendaraan` enum('Mobil Konvesional','Mobil Listrik','Motor Besar') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `brand`, `model`, `tahun`, `harga_dasar`, `kategori_kendaraan`) VALUES
('B 1001 TS', 'Tesla', 'Model 3 Highland', 2024, 1200000000, 'Mobil Listrik'),
('B 1234 FRC', 'Honda', 'Civic Type R', 2023, 1400000000, 'Mobil Konvesional'),
('B 1625 Leaf', 'Nissan', 'Leaf', 2022, 738000000, 'Mobil Listrik'),
('B 1903 HD', 'Harley-Davidson', 'Sportster S', 2023, 615000000, 'Motor Besar'),
('B 2026 BMW', 'BMW', 'i4 eDrive40', 2024, 2100000000, 'Mobil Listrik'),
('B 2048 ZKT', 'Suzuki', 'Ertiga Hybrid', 2023, 270000000, 'Mobil Konvesional'),
('B 2189 EV', 'Wuling', 'Air EV Long Range', 2023, 275000000, 'Mobil Listrik'),
('B 300 VSP', 'Vespa', 'GTS Super Tech 300', 2024, 165000000, 'Motor Besar'),
('B 3333 DUC', 'Ducati', 'Panigale V4', 2024, 840000000, 'Motor Besar'),
('B 3810 KLP', 'Mazda', 'CX-5', 2023, 630000000, 'Mobil Konvesional'),
('B 6000 ZX', 'Kawasaki', 'Ninja ZX-25R', 2023, 110000000, 'Motor Besar'),
('B 777 GA', 'Kia', 'EV6 GT-Line', 2023, 1300000000, 'Mobil Listrik'),
('D 1250 GS', 'BMW Motorrad', 'R 1250 GS', 2023, 850000000, 'Motor Besar'),
('D 404 EL', 'BYD', 'Atto 3', 2024, 515000000, 'Mobil Listrik'),
('D 4444 RRR', 'Yamaha', 'YZF-R6', 2021, 270000000, 'Motor Besar'),
('D 9999 SXX', 'Mitsubishi', 'Pajero Sport', 2022, 580000000, 'Mobil Konvesional'),
('F 1123 MR', 'BMW', '330i M Sport', 2024, 1080000000, 'Mobil Konvesional'),
('H 8472 YY', 'Daihatsu', 'Rocky Turbo', 2022, 245000000, 'Mobil Konvesional'),
('L 1562 AB', 'Toyota', 'Avanza Veloz', 2024, 305000000, 'Mobil Konvesional'),
('L 333 EV', 'MG', '4 EV', 2023, 430000000, 'Mobil Listrik');

-- --------------------------------------------------------

--
-- Table structure for table `mobil_konvesional`
--

CREATE TABLE `mobil_konvesional` (
  `id_kendaraan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas_mesin` int NOT NULL,
  `jenis_bbm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobil_konvesional`
--

INSERT INTO `mobil_konvesional` (`id_kendaraan`, `kapasitas_mesin`, `jenis_bbm`) VALUES
('B 1234 FRC', 2000, 'Pertamax Turbo'),
('B 2048 ZKT', 1500, 'Pertamax'),
('B 3810 KLP', 2500, 'Pertamax'),
('D 9999 SXX', 2400, 'Solar/Diesel'),
('F 1123 MR', 2000, 'Pertamax Turbo'),
('H 8472 YY', 1000, 'Pertamax'),
('L 1562 AB', 1500, 'Pertalite');

-- --------------------------------------------------------

--
-- Table structure for table `mobil_listrik`
--

CREATE TABLE `mobil_listrik` (
  `id_kendaraan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas_baterai` int NOT NULL,
  `jarak_tempuh` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobil_listrik`
--

INSERT INTO `mobil_listrik` (`id_kendaraan`, `kapasitas_baterai`, `jarak_tempuh`) VALUES
('B 1001 TS', 75, 513),
('B 1625 Leaf', 40, 311),
('B 2026 BMW', 84, 590),
('B 2189 EV', 27, 300),
('B 777 GA', 77, 506),
('D 404 EL', 60, 480),
('L 333 EV', 51, 425);

-- --------------------------------------------------------

--
-- Table structure for table `motor_besar`
--

CREATE TABLE `motor_besar` (
  `id_kendaraan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_rantai` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_berkendara` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motor_besar`
--

INSERT INTO `motor_besar` (`id_kendaraan`, `tipe_rantai`, `mode_berkendara`) VALUES
('B 1903 HD', 'Belt Drive', 'Road, Sport, Rain, Custom'),
('B 300 VSP', 'V-Belt Automatic', 'Standard, ASR Sport'),
('B 3333 DUC', 'Race-Chain 520', 'Street, Sport, Race, Dynamic'),
('B 6000 ZX', 'X-Ring Sealed', 'Eco, Full Power'),
('D 1250 GS', 'Shaft Drive', 'Rain, Road, Eco, Enduro Pro'),
('D 4444 RRR', 'O-Ring Sealed', 'Standard, Track');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `mobil_konvesional`
--
ALTER TABLE `mobil_konvesional`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `mobil_listrik`
--
ALTER TABLE `mobil_listrik`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `motor_besar`
--
ALTER TABLE `motor_besar`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobil_konvesional`
--
ALTER TABLE `mobil_konvesional`
  ADD CONSTRAINT `mobil_konvesional_ibfk_1` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE;

--
-- Constraints for table `mobil_listrik`
--
ALTER TABLE `mobil_listrik`
  ADD CONSTRAINT `mobil_listrik_ibfk_1` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE;

--
-- Constraints for table `motor_besar`
--
ALTER TABLE `motor_besar`
  ADD CONSTRAINT `motor_besar_ibfk_1` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
