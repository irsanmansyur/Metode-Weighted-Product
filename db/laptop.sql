-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2021 pada 09.54
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no_admin`, `nama`, `email`, `password`, `no_hp`, `foto`) VALUES
(1, 'Vieri Satria Ardiansyah', 'vierisatriaa08@gmail.com', 'vieri123', '0895336769180', '34-vieri.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `bobot` int(11) NOT NULL,
  `bobot_harga` varchar(50) NOT NULL,
  `bobot_gaming` varchar(50) NOT NULL,
  `bobot_desain` varchar(50) NOT NULL,
  `bobot_coding` varchar(50) NOT NULL,
  `bobot_office` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp(),
  `no_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`bobot`, `bobot_harga`, `bobot_gaming`, `bobot_desain`, `bobot_coding`, `bobot_office`, `create_date`, `update_date`, `no_admin`) VALUES
(1, '20000000', 'Game 3D', 'Desain 3D', 'Coding Game', 'Pekerjaan Kantor', '2021-08-08 09:54:57', '2021-08-08 09:54:57', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_produk`
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
-- Dumping data untuk tabel `bobot_produk`
--

INSERT INTO `bobot_produk` (`no_laptop`, `merk`, `nama_alternatif`, `bobot_harga`, `bobot_gaming`, `bobot_desain`, `bobot_coding`, `bobot_office`, `create_date`, `update_date`, `no_admin`) VALUES
(1, 'Asus', 'A1', '15499000', 'Game Kompetisi', 'Desain Grafis', 'Coding Web', 'Pengerjaan Tugas Kuliah', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'HP', 'A2', '6500000', 'Game 3D', 'Desain UI/UX', 'Coding Anak - anak', 'Pekerjaan Kantor', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Dell', 'A3', '10000000', 'Game Anak', 'Desain Autocad', 'Coding Desktop', 'Pengerjaan Tugas Sekolah/Kuliah', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'Lenovo', 'A4', '125000000', 'Game Dewasa', 'Desain 2D', 'Coding Game', 'Pekerjaan Kantor', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'Mac', 'A5', '15000000', 'Game bawaan laptop', 'Desain 3D', 'Coding Android', 'Pekerjaan tugas sekolah/kuliah', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `no_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `jenis_kriteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`no_kriteria`, `nama_kriteria`, `jenis_kriteria`) VALUES
(1, 'Harga', 'Cost'),
(2, 'Gaming', 'Benefit'),
(3, 'Desain', 'Benefit'),
(4, 'Coding', 'Benefit'),
(5, 'Office', 'Benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
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
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status_laptop` varchar(50) NOT NULL,
  `no_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`no_laptop`, `merk_laptop`, `harga_laptop`, `gaming_laptop`, `desain_laptop`, `coding_laptop`, `office_laptop`, `foto_laptop`, `link_laptop`, `deskripsi_laptop`, `create_date`, `update_date`, `status_laptop`, `no_admin`) VALUES
(1, 'Asus ROG G513QC-R535B6T-O Strix-G', 15499000, 'Game Kompetisi', 'Desain Grafis', 'Coding Web', 'Pengerjaan Tugas Sekolah/Kuliah', '329-asus_asus_rog_g513qc-r535b6t-o_strix-g_gaming_laptop_-r5-5600h-rtx_3050_4gb-512gb_ssd-8gb_ram-win10-ohs_2019-slim_fhd_ips_144hz-_-_free_backpack_--_full02_miy6zfnp.jpg', 'https://www.blibli.com/p/asus-rog-g513qc-r535b6t-o-strix-g-gaming-laptop-r5-5600h-rtx-3050-4gb-512gb-ssd-8gb-ram-win10-ohs-2019-slim-fhd-ips-144hz-free-backpack/ps--BLG-60035-01867?ds=BLG-60035-01867-00001&source=SEARCH&sid=e5baf0410b11d44f&cnc=false&pickupPointCode=PP-3055768&pid=BLG-60035-01867&tag=trending', '<p>Spesifikasi : &bull; &quot;Processor: AMD Ryzen 5 5600H Processor &bull;Memory: 8 GB DDR4 3200MHz &bull;Storage: 512GB M.2 NVMe&trade; PCIe&reg; SSD &bull;Graphic: NVIDIA GeForce RTX 3050 4GB GDDR6 &bull;Operating System: Windows 10 Home + OHS 2019 Preinstalled&quot;</p>\r\n', '2021-08-07 23:59:12', '2021-08-07 23:59:12', 'Laptop Tersedia', 1),
(2, 'HP 3410', 10000000, 'Game 3D', 'Desain UI/UX', 'Coding Android', 'Pekerjaan Kantor', '242-', 'link1', '<p>Keterangan : Laptop yang sangat dibutuhkan oleh pengguna</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Laptop Tersedia', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
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
-- Struktur dari tabel `search`
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
-- Struktur dari tabel `top_search`
--

CREATE TABLE `top_search` (
  `no_topsearch` int(11) NOT NULL,
  `no_laptop` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_admin`);

--
-- Indeks untuk tabel `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD PRIMARY KEY (`bobot`);

--
-- Indeks untuk tabel `bobot_produk`
--
ALTER TABLE `bobot_produk`
  ADD PRIMARY KEY (`no_laptop`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`no_kriteria`);

--
-- Indeks untuk tabel `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`no_laptop`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`no_riwayat`);

--
-- Indeks untuk tabel `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`no_topsearch`),
  ADD KEY `no_laptop` (`no_laptop`);

--
-- Indeks untuk tabel `top_search`
--
ALTER TABLE `top_search`
  ADD KEY `no_topsearch` (`no_topsearch`,`no_laptop`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `no_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bobot_produk`
--
ALTER TABLE `bobot_produk`
  MODIFY `no_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `no_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `laptop`
--
ALTER TABLE `laptop`
  MODIFY `no_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `no_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `search`
--
ALTER TABLE `search`
  MODIFY `no_topsearch` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
