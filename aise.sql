-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2018 at 10:48 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aise`
--

-- --------------------------------------------------------

--
-- Table structure for table `participans`
--

CREATE TABLE `participans` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `pas_foto` text,
  `foto_ktp` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_teams` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participans`
--

INSERT INTO `participans` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `pas_foto`, `foto_ktp`, `updated_at`, `created_at`, `id_teams`) VALUES
(1, 'asjakls', 'ajsklas', '2004-06-16', 'asjakls', '192021', NULL, NULL, '2018-06-10 07:35:09', '2018-06-10 07:35:09', 7),
(2, 'askjaskl', 'asasklj', '2019-12-09', 'ajsklajs', '9102912', NULL, NULL, '2018-06-10 07:35:09', '2018-06-10 07:35:09', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(320) NOT NULL,
  `token` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ogivano06@gmail.com', '$2y$10$cAwSVRFUJT3hkg5auhELpeN8pa5gE.lvNso0zZY5flnO546U5JAoO', '2018-06-10 02:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_aiss`
--

CREATE TABLE `peserta_aiss` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `email` varchar(320) NOT NULL,
  `token` text,
  `no_telp` varchar(13) NOT NULL,
  `asal_institusi` text NOT NULL,
  `bukti_pembayaran` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id_teams` int(11) NOT NULL,
  `nama_team` varchar(20) NOT NULL,
  `kota` text NOT NULL,
  `asal_sekolah` text NOT NULL,
  `nama_pembina` varchar(20) DEFAULT NULL,
  `no_telp_pembina` varchar(13) DEFAULT NULL,
  `bukti_pembayaran` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id_teams`, `nama_team`, `kota`, `asal_sekolah`, `nama_pembina`, `no_telp_pembina`, `bukti_pembayaran`, `status`, `updated_at`, `created_at`, `id_users`) VALUES
(7, 'asjkals', 'ajsklasj', 'jaslkasj', NULL, NULL, NULL, 0, '2018-06-10 07:35:08', '2018-06-10 07:35:08', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` text NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` text,
  `remember_token` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `confirmed`, `confirmation_code`, `remember_token`, `updated_at`, `created_at`) VALUES
(15, 'ogivano06@gmail.com', '$2y$10$3YQ027//nTL6cI7239smDutl08F1Yg2CZNUOMR3UqFqVVw/0s8zeS', 1, 'L0OUzEjZL62qePpfTmOhbVlOysD4HS', 'xoWZAr3cuwMaS0iCcECQPT7R9O5ujPqZoFa2AI2ecKNoGMREGgNMgaao1bxG', '2018-06-10 14:37:08', '2018-06-09 23:45:50'),
(16, 'hogivano@gmail.com', '$2y$10$0gFoUaLHCvqUJKQjzX7/gekkq/PVwgSvFsCAwrzlYhHVCcqp.iIp.', 1, 'GGPBuMkSzBmngrdJiBGEeIfyyCJjzK', 'e5i8SPiAumCzbEOiuTr3YRFJnlHHpcZ7AxPffu07GkVyXYtqN5XypFq6HOxO', '2018-06-10 14:58:49', '2018-06-09 23:54:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participans`
--
ALTER TABLE `participans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_team` (`id_teams`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `email` (`email`);

--
-- Indexes for table `peserta_aiss`
--
ALTER TABLE `peserta_aiss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id_teams`),
  ADD UNIQUE KEY `id_users` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participans`
--
ALTER TABLE `participans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `peserta_aiss`
--
ALTER TABLE `peserta_aiss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id_teams` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `participans`
--
ALTER TABLE `participans`
  ADD CONSTRAINT `anggota_team` FOREIGN KEY (`id_teams`) REFERENCES `teams` (`id_teams`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `team_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
