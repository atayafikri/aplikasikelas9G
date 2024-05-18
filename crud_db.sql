-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 18, 2024 at 10:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `name`, `email`, `mobile`, `keterangan`) VALUES
(32, 'Selasa, 21 April 2023', '', '', 'Cuti Lebaran'),
(34, 'Jumat 10 may 2024', '', '', 'Sakit'),
(35, 'Sabtu 11 May 2024', '', '', 'Izin sakit');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `haritanggal` varchar(255) NOT NULL,
  `tugas` varchar(50) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `deadline` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `haritanggal`, `tugas`, `mapel`, `deadline`) VALUES
(10, '10 juni 2024', 'gada tugas udh lulus', 'Matematika', 'senin, 20 Mei 2027');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'ataya', 'atayafkrr', 'ataya@gmail.com', '123456'),
(2, '', 'atayafkrr', 'ataya@gmail.com', '$2y$10$vflrxCt9.SLRg6er5s2Y9.aoRWHiGLy/p0fvzeXyzysxbCvPsLRBG'),
(3, '', 'atayafkrr', 'ataya@gmail.com', '$2y$10$.6eKGdUJ445f2FkLOheqi.w2iwBjhB/z37V78tUw8OWrU9CFPxbv6'),
(4, '', 'budi', 'budiwinarno2@gmail.com', '$2y$10$YHB0zGQrBpOTmv485sWWWuJHVpTfaBO4MYymgt5KZrLeTzfti4UnC'),
(5, '', 'fikri123', 'fikriganteng@gmail.com', '$2y$10$u2opAolW/e6yOmgIv5tV/OKIEksX5pmfJi4EGOsabAgAnLXk9NqOC'),
(6, '', 'ahmadB', 'ahmadabdul@gmail.com', '$2y$10$eLeDXZagZHILNAa.Uo30YOsh5LCzr2IdYFpNq7jSQmrZIXZt7c3qy'),
(7, '', 'ahmadB', 'ahmadabdul@gmail.com', '$2y$10$qGjIYBEFSs3TdvuCfBkWLeM57/mQ6dGdWNYe9Wkd9j0uk1G.PIX06'),
(8, '', 'ahmadB', 'ahmadabdul@gmail.com', '$2y$10$XjV.5aGG1d1wFnab/ee.ruFSKN.SPdGnSto6uwFGrxs4uT/zPhA/m'),
(9, '', 'bima123', 'bima15@gmail.com', '$2y$10$p2tMbav30vwdMl5bOnaJhOE5dHbRfdpisw6T0eX5L7ViJWmrff3Mu'),
(10, '', 'cacaandika2', 'cacaandika@gmail.com', '$2y$10$q1wK8em4jCMazy2V8p6RHuzEM4wGXP6J0CQ9LTKISjRqsjV68cbzm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
