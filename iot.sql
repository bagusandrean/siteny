-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Okt 2021 pada 08.14
-- Versi server: 5.6.38
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `id_project` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `id_project`, `token`, `username`, `nama`, `created_at`) VALUES
(21, 'PROIJYIK8RFNGWF1', 'T8253RW6C7SB888QGYWNTJRFWE6NP3JVWUR', 'Bagusok55', 'Ruang Makan', '2021-10-10 06:09:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suhu_day`
--

CREATE TABLE `suhu_day` (
  `id` bigint(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `temperature` varchar(10) NOT NULL,
  `humidity` varchar(10) NOT NULL,
  `temperature_max` varchar(10) NOT NULL,
  `temperature_min` varchar(10) NOT NULL,
  `humidity_max` varchar(10) NOT NULL,
  `humidity_min` varchar(10) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suhu_now`
--

CREATE TABLE `suhu_now` (
  `id` bigint(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `temperature` varchar(10) NOT NULL,
  `humidity` varchar(10) NOT NULL,
  `temperature_max` varchar(10) NOT NULL,
  `temperature_min` varchar(10) NOT NULL,
  `humidity_max` varchar(10) NOT NULL,
  `humidity_min` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `suhu_now`
--

INSERT INTO `suhu_now` (`id`, `token`, `temperature`, `humidity`, `temperature_max`, `temperature_min`, `humidity_max`, `humidity_min`, `updated_at`) VALUES
(1, '', '0', '0', '0', '100', '0', '100', '2021-10-08 21:34:12'),
(2, '849b807b-0e7a-4499-8091-e3c650265310', '0', '0', '0', '100', '0', '100', '2021-10-08 21:44:08'),
(3, '8c43e8c8-0870-468b-b080-37417275cd91', '0', '0', '0', '100', '0', '100', '2021-10-08 21:44:41'),
(4, '55ebb63c-901e-4019-bce7-1d8c9b630343', '0', '0', '0', '100', '0', '100', '2021-10-10 09:10:38'),
(5, '832cc944-5b79-4352-beca-dda32c912614', '0', '0', '0', '100', '0', '100', '2021-10-10 09:40:36'),
(6, '1cd2d56c-d738-4e8f-9bed-504307fd23cc', '0', '0', '0', '100', '0', '100', '2021-10-10 09:42:30'),
(7, '920f6a6a-9e50-4943-b416-df07b5dfa7eb', '0', '0', '0', '100', '0', '100', '2021-10-10 09:43:02'),
(8, '4aa0daa3-c21f-4471-8aee-ea7abb52a429', '0', '0', '0', '100', '0', '100', '2021-10-10 09:46:10'),
(9, '3070e0f0-4e85-4066-96c7-da861ff47591', '0', '0', '0', '100', '0', '100', '2021-10-10 09:47:04'),
(10, '5aaeb843-4941-40a2-a425-78e59b93725e', '0', '0', '0', '100', '0', '100', '2021-10-10 09:47:58'),
(11, 'ba138a17-27dc-45ab-aaa6-bfe623743735', '0', '0', '0', '100', '0', '100', '2021-10-10 09:48:32'),
(12, 'b2757f07-3512-41ff-a803-c96531dc16c3', '0', '0', '0', '100', '0', '100', '2021-10-10 09:49:12'),
(13, '86119f4c-820e-4606-9c16-6964633bb339', '0', '0', '0', '100', '0', '100', '2021-10-10 09:50:24'),
(14, '3034e85d-e004-48a0-bfa5-34d3fc81e1f1', '0', '0', '0', '100', '0', '100', '2021-10-10 09:50:35'),
(15, 'b984aee2-67dc-4d62-9985-3454c1b9e95d', '0', '0', '0', '100', '0', '100', '2021-10-10 10:25:25'),
(16, '61608159-8351-42a5-a39d-8e44fa0a6cfd', '0', '0', '0', '100', '0', '100', '2021-10-10 11:52:22'),
(17, '9df10bc6-18c2-4770-af93-d29409c3c38e', '0', '0', '0', '100', '0', '100', '2021-10-10 11:52:34'),
(18, '2b48147a-f179-48e6-882a-d0dd3ee9f86f', '0', '0', '0', '100', '0', '100', '2021-10-10 11:57:46'),
(19, '744f7ac6-990a-495e-893d-a5e96f1a7c10', '0', '0', '0', '100', '0', '100', '2021-10-10 11:57:48'),
(20, '2ES3RQ2AFYOV3EMKESEWHA7SZ', '0', '0', '0', '100', '0', '100', '2021-10-10 13:08:32'),
(21, 'T8253RW6C7SB888QGYWNTJRFWE6NP3JVWUR', '0', '0', '0', '100', '0', '100', '2021-10-10 13:09:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `status` enum('AKTIF','NONAKTIF','UNVERIFIED') NOT NULL DEFAULT 'AKTIF',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Username`, `Password`, `email`, `nohp`, `status`, `created_at`) VALUES
(1, 'Bagusok55', 'bc7af09f7154c51994c99698ef559120', 'bagusok@gmail.com', '082301278360', 'AKTIF', '2021-10-08 04:40:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_project` (`id_project`);

--
-- Indeks untuk tabel `suhu_day`
--
ALTER TABLE `suhu_day`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suhu_now`
--
ALTER TABLE `suhu_now`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `suhu_day`
--
ALTER TABLE `suhu_day`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suhu_now`
--
ALTER TABLE `suhu_now`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
