-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2022 pada 17.26
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `ID_DEPARTEMEN` int(11) NOT NULL,
  `NAMA_DEPARTEMEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`ID_DEPARTEMEN`, `NAMA_DEPARTEMEN`) VALUES
(1, 'Poli Gigi'),
(2, 'Poli Jantung'),
(3, 'Ruang IGD'),
(4, 'Poli Radiologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `ID_INVENTORY` int(11) NOT NULL,
  `ID_DEPARTEMEN` int(11) DEFAULT NULL,
  `NAMA_INVENTORY` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`ID_INVENTORY`, `ID_DEPARTEMEN`, `NAMA_INVENTORY`) VALUES
(101, 1, 'Komputer Acer'),
(201, 2, 'Komputer Lenovo'),
(301, 3, 'Komputer Asus'),
(401, 4, 'Printer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `ID_LEVEL` int(11) NOT NULL,
  `NAMA_LEVEL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`ID_LEVEL`, `NAMA_LEVEL`) VALUES
(1, 'Administrator'),
(2, 'Pengguna'),
(3, 'IT Support');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `ID_TIKET` int(255) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_INVENTORY` int(11) DEFAULT NULL,
  `NAMA_TIKET` varchar(255) DEFAULT NULL,
  `MASALAH` text DEFAULT NULL,
  `TANGGAL` datetime DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `SOLUSI` text DEFAULT NULL,
  `NO_TIKET` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`ID_TIKET`, `ID_USER`, `ID_INVENTORY`, `NAMA_TIKET`, `MASALAH`, `TANGGAL`, `STATUS`, `SOLUSI`, `NO_TIKET`) VALUES
(25, 1212131, NULL, 'keluar', 'mboh', '2022-12-06 00:00:00', NULL, NULL, ''),
(27, 121212, NULL, 'ota', 'yo', '2023-01-06 00:00:00', NULL, NULL, ''),
(28, 121212, NULL, 'cascaccasc', 'ncsdncdww', '2022-12-29 00:00:00', NULL, NULL, ''),
(29, 1212131, NULL, 'pokok e jalan', 'karepe', '2022-12-29 00:00:00', NULL, NULL, ''),
(30, 121212, NULL, 'baru neh', 'yoii menn', '2022-12-30 00:00:00', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_departemen` int(11) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `password_user` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_level`, `id_departemen`, `nama_user`, `password_user`, `email`, `no_telp`, `user_status`) VALUES
(121212, 2, 4, 'okta', 'f1de1bfb4f6690948073250a91d62bc7', 'okta123@gmail.com', '086251621', 1),
(1212131, 2, 1, 'Kim jong unch', '2948b05fa08f9747418f1d26d7f5cef8', 'kimjongunch123@gmail.com', '0816181271', 1),
(12345678, 2, 4, 'Ardi Pratama', 'ardi123', 'ardi123@gmail.com', '081245435234', 1),
(119000020, 3, 1, 'Gede Ardi Pratama', 'pengguna', 'gede122@gmail.com', '081090909090', 1),
(319000020, 1, 3, 'Aufa Ardilla', 'admin1234', 'aufalalala@gmail.com', '0876767676767', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`ID_DEPARTEMEN`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ID_INVENTORY`),
  ADD KEY `ID_DEPARTEMEN` (`ID_DEPARTEMEN`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`ID_LEVEL`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`ID_TIKET`),
  ADD KEY `ID_INVENTORY` (`ID_INVENTORY`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `ID_DEPARTEMEN` (`id_departemen`),
  ADD KEY `ID_LEVEL` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `ID_TIKET` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`ID_DEPARTEMEN`) REFERENCES `departemen` (`ID_DEPARTEMEN`);

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`ID_INVENTORY`) REFERENCES `inventory` (`ID_INVENTORY`),
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `departemen` (`ID_DEPARTEMEN`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_level`) REFERENCES `level` (`ID_LEVEL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
