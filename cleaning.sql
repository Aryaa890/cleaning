-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 03:36 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaning`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_handphone` int(15) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `komen` varchar(512) NOT NULL,
  `nama_pekerja` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tanggal`, `id_layanan`, `nama`, `no_handphone`, `alamat`, `komen`, `nama_pekerja`) VALUES
(3, '2024-05-31', 0, 'aa', 123123, 'aaa', 'dasdasd', 'a'),
(4, '2024-06-02', 1, 'a', 12121212, 'korea', 'aa', 'Aziz'),
(5, '', 1, 'Joko Anwar', 888888, 'Jl jalun ', 'Ekstra Bersih!!!', 'Asep'),
(6, '2024-06-03', 3, 'Arya', 888888, 'korea', 'AAAAAAAA', 'Asep');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `harga`) VALUES
(1, 'rumah', 310000),
(2, 'apartemen', 200000),
(3, 'kantor', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `order_diambil`
--

CREATE TABLE `order_diambil` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_handphone` int(15) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `komen` varchar(512) NOT NULL,
  `nama_pekerja` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_diambil`
--

INSERT INTO `order_diambil` (`id`, `tanggal`, `id_layanan`, `nama`, `no_handphone`, `alamat`, `komen`, `nama_pekerja`) VALUES
(2, '2024-05-31', 0, 'a', 12121212, 'korea', 'asdasd', 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `order_masuk`
--

CREATE TABLE `order_masuk` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_handphone` int(15) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `komen` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_masuk`
--

INSERT INTO `order_masuk` (`id`, `tanggal`, `id_layanan`, `nama`, `no_handphone`, `alamat`, `komen`) VALUES
(1, '2024-05-31', 0, 'Joko', 12121212, 'korea', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `order_pending`
--

CREATE TABLE `order_pending` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_handphone` int(15) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `komen` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_pending`
--

INSERT INTO `order_pending` (`id`, `tanggal`, `id_layanan`, `nama`, `no_handphone`, `alamat`, `komen`) VALUES
(7, '2024-06-03', 1, 'aaaa', 54564654, 'aaa', 'adad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`) VALUES
(1, 'Arya', 'arya7ghufron@gmail.com', 'default.jpg', '123', 1, 1),
(2, 'Joko', 'aryaghufron76@gmail.com', 'Screenshot 2023-11-30 084657.png', '123', 2, 1),
(3, 'Joko', '19220149@bsi.ac.id', 'medium-shot-woman-cleaning-railing.jpg', '123', 1, 1),
(4, 'Arya', 'admin@gmail.com', 'medium-shot-woman-cleaning-railing.jpg', '123', 1, 1),
(9, 'Arya', 'arya7ghufron@gmail.com', 'default.jpg', '123', 1, 1),
(13, 'Alpha', 'alpha@gmail.com', '', '$2y$10$i19uCB/Nd.6xlDz7hG0Q7O8eO/b85i7b6gfm/42N3sq5.fKaKsWxS', 3, 1),
(14, 'Sambp', 'arya7ghufron@gmail.com', '', '$2y$10$0HldxHAWF3wQiM5qS4J5I./oZRBrmucsiiVaatrZV8anhJIkPi4c6', 1, 1),
(15, 'Arya Omes', 'arya7ghufron@gmail.com', '', '$2y$10$3D47.K6xQHP0bIJtGSwhI./kf8z52yWZwfVCCKhbEHAhlmAciOWL.', 1, 1),
(16, 'Arya Omes', 'arya7ghufron@gmail.com', '', '$2y$10$no7Cn8pZA3AHOLk5H/UqQempJ44PxYl8PkilpIcw8XcSa75mVYXEW', 1, 1),
(17, 'Arya', 'arya7ghufron@gmail.com', '', '$2y$10$u98z6z0r5i0uoawnBvbKb.KdR74/hPInil8pVhZWN8g4pLR0No0uG', 1, 1),
(18, 'Arya Mesoem', 'arya7ghufron@gmail.com', '', '$2y$10$8BeNs4tYFXRrU2zWE.Gs6.4DAFTQMe3NSM3iTKRifL0TNafj9t.De', 1, 1),
(19, 'Arya Meesyum', 'arya7ghufron@gmail.com', '', '$2y$10$2PuxVPc3t8GW2UXsgqRYuO7Ej.Ht.e5LuQhr34/M5x1uuwrxZfqv2', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(6, 2, 5),
(7, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Order'),
(5, 'Order'),
(6, 'Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Staff'),
(3, 'Member');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fatachometer-alt', 1),
(2, 2, 'Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 3, 'Menu  Managment', 'menu', 'fa-solid fa-fw fa-folder', 1),
(4, 3, 'Sub Menu Management', 'menu/submenu', 'fas faw-fw fa-skull-crossbones', 1),
(5, 1, 'Data User', 'admin/data_user', 'fa-solid fa-fw fa-user-gear', 1),
(6, 4, 'Orderan Aktif', 'order', 'fa-solid fa-fw fa-clipboard', 1),
(7, 5, 'Orderan Aktif', 'order_pekerja', 'fa-solid fa-fw fa-user-nurse', 1),
(8, 5, 'Orderan Dikerjakan', 'order_pekerja/dikerjakan', 'fa-solid fa-fw fa-user-nurse', 1),
(9, 6, 'Laporan Orderan', 'laporan', 'fa-solid fa-fw fa-clipboard-list', 1),
(10, 1, 'Kontolodon', 'management', 'fa-solid fa-wallet', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_diambil`
--
ALTER TABLE `order_diambil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_masuk`
--
ALTER TABLE `order_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_pending`
--
ALTER TABLE `order_pending`
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
-- AUTO_INCREMENT for table `order_masuk`
--
ALTER TABLE `order_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
