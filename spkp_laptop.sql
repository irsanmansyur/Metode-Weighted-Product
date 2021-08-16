-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2021 at 05:23 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkp_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no_admin`, `nama`, `email`, `password`, `no_hp`, `foto`) VALUES
(1, 'Vieri Satria Ardiansyah', 'vierisatriaa08@gmail.com', 'vieri123', '0895336769180', '34-vieri.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `id` int(11) NOT NULL,
  `bobot` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `value` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`id`, `bobot`, `name`, `value`) VALUES
(1, 1, 'bobot_game', 'Game 3D'),
(2, 2, 'bobot_game', 'Game Dewasa'),
(3, 3, 'bobot_game', 'Game anak – anak'),
(4, 4, 'bobot_game', 'Game bawaan Laptop'),
(5, 5, 'bobot_game', 'Game Kompetisi'),
(6, 1, 'bobot_desain', 'Desain 2D'),
(7, 2, 'bobot_desain', 'Desain 3D'),
(8, 3, 'bobot_desain', 'Desain Autocad'),
(9, 4, 'bobot_desain', 'Desain UI/UX'),
(10, 5, 'bobot_desain', 'Desain Grafis'),
(11, 1, 'bobot_coding', 'Coding Anak - anak'),
(12, 2, 'bobot_coding', 'Coding Game'),
(13, 3, 'bobot_coding', 'Coding Desktop'),
(14, 4, 'bobot_coding', 'Coding Android'),
(15, 5, 'bobot_coding', 'Coding Website'),
(16, 4, 'bobot_office', 'Pekerjaan Kantor'),
(17, 5, 'bobot_office', 'Pengerjaan Tugas sekolah / kuliah');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_produk`
--

CREATE TABLE `bobot_produk` (
  `no_laptop` int(11) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `nama_alternatif` varchar(20) NOT NULL,
  `bobot_harga` varchar(50) NOT NULL,
  `bobot_gaming` varchar(50) NOT NULL,
  `bobot_desain` varchar(50) NOT NULL,
  `bobot_coding` varchar(50) NOT NULL,
  `bobot_office` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `no_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot_produk`
--

INSERT INTO `bobot_produk` (`no_laptop`, `merk`, `nama_alternatif`, `bobot_harga`, `bobot_gaming`, `bobot_desain`, `bobot_coding`, `bobot_office`, `create_date`, `update_date`, `no_admin`) VALUES
(1, 'Asus', 'A1', '15499000', 'Game Kompetisi', 'Desain Grafis', 'Coding Web', 'Pengerjaan Tugas Kuliah', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'HP', 'A2', '6500000', 'Game 3D', 'Desain UI/UX', 'Coding Anak - anak', 'Pekerjaan Kantor', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Dell', 'A3', '10000000', 'Game Anak', 'Desain Autocad', 'Coding Desktop', 'Pengerjaan Tugas Sekolah/Kuliah', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'Lenovo', 'A4', '125000000', 'Game Dewasa', 'Desain 2D', 'Coding Game', 'Pekerjaan Kantor', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'Mac', 'A5', '15000000', 'Game bawaan laptop', 'Desain 3D', 'Coding Android', 'Pekerjaan tugas sekolah/kuliah', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `no_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `jenis_kriteria` varchar(30) NOT NULL,
  `bobot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`no_kriteria`, `nama_kriteria`, `jenis_kriteria`, `bobot`) VALUES
(1, 'Harga', 'Cost', 5),
(2, 'Gaming', 'Benefit', 4),
(3, 'Desain', 'Benefit', 4),
(4, 'Coding', 'Benefit', 4),
(5, 'Office', 'Benefit', 3);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `no_laptop` int(11) NOT NULL,
  `merk_laptop` varchar(50) NOT NULL,
  `harga_laptop` int(11) NOT NULL,
  `gaming_laptop` varchar(50) NOT NULL,
  `desain_laptop` varchar(50) NOT NULL,
  `coding_laptop` varchar(50) NOT NULL,
  `office_laptop` varchar(50) NOT NULL,
  `foto_laptop` text NOT NULL,
  `link_laptop` text NOT NULL,
  `deskripsi_laptop` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_laptop` varchar(50) NOT NULL,
  `no_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`no_laptop`, `merk_laptop`, `harga_laptop`, `gaming_laptop`, `desain_laptop`, `coding_laptop`, `office_laptop`, `foto_laptop`, `link_laptop`, `deskripsi_laptop`, `create_date`, `update_date`, `status_laptop`, `no_admin`) VALUES
(1, 'Asus ROG G513QC-R535B6T-O Strix-G', 15499000, 'Game Kompetisi', 'Desain Grafis', 'Coding Web', 'Pengerjaan Tugas Sekolah/Kuliah', '329-asus_asus_rog_g513qc-r535b6t-o_strix-g_gaming_laptop_-r5-5600h-rtx_3050_4gb-512gb_ssd-8gb_ram-win10-ohs_2019-slim_fhd_ips_144hz-_-_free_backpack_--_full02_miy6zfnp.jpg', 'https://www.blibli.com/p/asus-rog-g513qc-r535b6t-o-strix-g-gaming-laptop-r5-5600h-rtx-3050-4gb-512gb-ssd-8gb-ram-win10-ohs-2019-slim-fhd-ips-144hz-free-backpack/ps--BLG-60035-01867?ds=BLG-60035-01867-00001&source=SEARCH&sid=e5baf0410b11d44f&cnc=false&pickupPointCode=PP-3055768&pid=BLG-60035-01867&tag=trending', '<p>Spesifikasi : &bull; &quot;Processor: AMD Ryzen 5 5600H Processor &bull;Memory: 8 GB DDR4 3200MHz &bull;Storage: 512GB M.2 NVMe&trade; PCIe&reg; SSD &bull;Graphic: NVIDIA GeForce RTX 3050 4GB GDDR6 &bull;Operating System: Windows 10 Home + OHS 2019 Preinstalled&quot;</p>\r\n', '2021-08-07 23:59:12', '2021-08-07 23:59:12', 'Laptop Tersedia', 1),
(2, 'HP 3410', 10000000, 'Game 3D', 'Desain UI/UX', 'Coding Android', 'Pekerjaan Kantor', '242-', 'link1', '<p>Keterangan : Laptop yang sangat dibutuhkan oleh pengguna</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Laptop Tersedia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `no_riwayat` int(11) NOT NULL,
  `no_user` varchar(30) NOT NULL,
  `bobot_harga` int(11) NOT NULL,
  `bobot_gaming` varchar(50) NOT NULL,
  `bobot_desain` varchar(50) NOT NULL,
  `bobot_coding` varchar(50) NOT NULL,
  `bobot_office` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `no_topsearch` int(11) NOT NULL,
  `no_laptop` int(11) NOT NULL,
  `poin` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `top_search`
--

CREATE TABLE `top_search` (
  `no_topsearch` int(11) NOT NULL,
  `no_laptop` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_admin`);

--
-- Indexes for table `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bobot_produk`
--
ALTER TABLE `bobot_produk`
  ADD PRIMARY KEY (`no_laptop`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`no_kriteria`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`no_laptop`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`no_riwayat`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`no_topsearch`),
  ADD KEY `no_laptop` (`no_laptop`);

--
-- Indexes for table `top_search`
--
ALTER TABLE `top_search`
  ADD KEY `no_topsearch` (`no_topsearch`,`no_laptop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bobot_produk`
--
ALTER TABLE `bobot_produk`
  MODIFY `no_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `no_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `no_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `no_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `no_topsearch` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
