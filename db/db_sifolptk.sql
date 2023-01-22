-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 06:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sifolptk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id` int(11) NOT NULL,
  `layanan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id`, `layanan`) VALUES
(2, 'Layanan 1'),
(3, 'Layanan 2'),
(4, 'Layanan 3'),
(5, 'Layanan 4'),
(6, 'Layanan 5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `tempat_lahir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nama`, `nik`, `no_hp`, `alamat`, `jabatan`, `tgl_lahir`, `tempat_lahir`) VALUES
(1, 'Denni Oktarina Siregar', '1111111111111111', '089603351280', 'Bengkulu', 'WKS', '26 January, 2023', 'MEDAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `no_hp` varchar(128) DEFAULT NULL,
  `no_reg` varchar(128) DEFAULT NULL,
  `tanggal_registrasi` date DEFAULT NULL,
  `sts_app` varchar(128) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id`, `id_pegawai`, `id_layanan`, `nama`, `no_hp`, `no_reg`, `tanggal_registrasi`, `sts_app`, `keterangan`) VALUES
(1, 1, 2, 'apa aja', '089603351280', 'PTK22012023', '2023-01-22', '1', 'Permohonan telah di approve');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_layanan` int(11) DEFAULT NULL,
  `no_reg` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_riwayat`
--

INSERT INTO `tb_riwayat` (`id`, `id_pegawai`, `id_layanan`, `no_reg`, `keterangan`, `time`) VALUES
(1, 8, 2, 'PTK17012023', 'Menunggu approval pimpinan', '00:00:00'),
(2, 9, 4, 'PTK117012023', 'Menunggu approval pimpinan', NULL),
(3, 9, 4, 'PTK217012023', 'Menunggu approval pimpinan', NULL),
(4, 10, 2, 'PTK317012023', 'Menunggu approval pimpinan', NULL),
(5, 9, 2, 'PTK017012023', 'Menunggu approval pimpinan', NULL),
(6, 8, 2, 'PTK518012023', 'Menunggu approval pimpinan', NULL),
(7, 8, 2, 'PTK17012023', 'Permohonan telah di approve', NULL),
(8, 9, 4, 'PTK117012023', 'Permohonan telah di approve', NULL),
(9, 9, 4, 'PTK217012023', 'Permohonan telah di approve', NULL),
(10, 0, 0, 'PTK17012023', 'Permohonan telah di approve', NULL),
(11, 0, 0, 'PTK17012023', 'Permohonan telah di approve', NULL),
(12, 9, 4, 'PTK117012023', 'Permohonan telah di approve', NULL),
(13, 9, 4, 'PTK117012023', 'Permohonan telah di approve', NULL),
(14, 9, 4, 'PTK117012023', 'Permohonan telah di approve', NULL),
(15, 9, 4, 'PTK117012023', 'TAHAP 3', NULL),
(16, 9, 4, 'PTK117012023', 'Selesai', NULL),
(17, 10, 2, 'PTK317012023', 'Permohonan telah di approve', NULL),
(18, 9, 2, 'PTK017012023', 'Permohonan telah di approve', NULL),
(19, 9, 2, 'PTK017012023', 'Selesai', NULL),
(20, 10, 2, 'PTK317012023', 'Selesai', NULL),
(21, 8, 2, 'PTK518012023', 'Permohonan telah di approve', NULL),
(22, 8, 2, 'PTK518012023', 'Selesai', NULL),
(23, 9, 2, 'PTK618012023', 'Menunggu approval pimpinan', NULL),
(24, 10, 2, 'PTK719012023', 'Menunggu approval pimpinan', '00:00:00'),
(25, 9, 2, 'PTK618012023', 'Permohonan telah di approve', '00:00:00'),
(26, 10, 2, 'PTK819012023', 'Menunggu approval pimpinan', '1674138257'),
(27, 10, 2, 'PTK819012023', 'Permohonan telah di approve', '1674138268'),
(28, 10, 2, 'PTK819012023', 'Permohonan telah di approve ', '1674138858'),
(29, 9, 4, 'PTK217012023', 'Permohonan telah di approve', '1674139657'),
(30, 9, 4, 'PTK217012023', 'Permohonan telah di approve 4', '1674139698'),
(31, 9, 4, 'PTK217012023', 'Permohonan telah di approve 4', '1674139762'),
(32, 9, 4, 'PTK217012023', 'Permohonan telah di approve 6', '1674139773'),
(33, 9, 4, 'PTK217012023', 'Selesai', '1674139783'),
(34, 1, 2, 'PTK22012023', 'Menunggu approval pimpinan', '1674364958'),
(35, 1, 2, 'PTK22012023', 'Permohonan telah di approve', '1674364971');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `id_pegawai`) VALUES
(5, 'tengku', 'asd@gmail.com', 'default.jpg', '$2y$10$B9Njxs4CE6bax5Qs3Uy32O7WSA.yhUtNijWE4kOCLOrpiehTPJELu', 1, 1, 1674053997, 2),
(6, 'Denni Oktarina Siregar', 'deni@mail.com', 'default.jpg', '$2y$10$oART0gl9N4MKdlrkz8eymucPgUGR0O8jMNgm9U6rteB8unPesW5qK', 1, 1, 1674364458, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon_menu` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon_menu`) VALUES
(1, 'Master', 'icon-check-square'),
(2, 'Approval', 'icon-check-square'),
(3, 'Data Harian', 'icon-check-square');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'User', 'user/', 'icon-user', 1),
(2, 1, 'Role Akses', 'user/role', 'icon-users', 1),
(3, 1, 'Data Pegawai', 'pegawai/', 'icon-users', 1),
(4, 3, 'Cek Data Harian', 'harian/', 'icon-users', 1),
(5, 2, 'Approval', 'approval/', 'icon-users', 1),
(6, 1, 'Layanan', 'layanan/', '\r\nicon-file-minus', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
