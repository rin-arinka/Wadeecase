-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2021 pada 00.45
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wadeecase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `tentang_merk` text NOT NULL,
  `foto_merk` varchar(200) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id_merk`, `merk`, `tentang_merk`, `foto_merk`, `author`) VALUES
(44, 'Oppo', '<p>Menyediakan semua type merk hp oppo</p>\r\n', '76400_Oppo.png', ''),
(46, 'Samsung', '<p>Tersedia untuk semua type merk hp samsung</p>\r\n', 'samsung.jpeg', 'Aldino'),
(47, 'iphone', '<p>Menyediakan semua type merk hp oppo</p>\r\n', 'iph.jpeg', 'Aldino'),
(48, 'Vivo', '<p>Menyediakan semua type merk hp vivo</p>\r\n', '93955_vivo.png', ''),
(49, 'Realmi', '<p>Menyediakan semua type merk hp realmi</p>\r\n', '18388_realmi.jpg', ''),
(50, 'Xiaomi', '<p>Tersedia untuk semua type merk hp xiaomi</p>\r\n', '72033_mi.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `kode_pembayaran` varchar(255) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `bank_user` varchar(255) NOT NULL,
  `norek_user` int(11) NOT NULL,
  `an_user` varchar(255) NOT NULL,
  `bank_penerima` varchar(255) NOT NULL,
  `nomial` int(11) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_user`, `kode_pembayaran`, `tanggal_bayar`, `bank_user`, `norek_user`, `an_user`, `bank_penerima`, `nomial`, `bukti`) VALUES
(19, '', 'QVDKH7SRZDEX0936', '2021-05-09', 'MANDIRI', 1323456798, 'wade', 'MANDIRI', 11234567, '58228_after.PNG'),
(20, '', 'WSQUWTUQBGON0324', '2021-07-07', 'MANDIRI', 1323456798, 'Arifasiwi', 'MANDIRI', 2000000, '6550_ASUS.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pemesanan` int(11) NOT NULL,
  `kode_pembayaran` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemesan` varchar(200) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `typehp` varchar(225) DEFAULT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `batas_bayar` date NOT NULL,
  `jasa` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `status_pemesanan` varchar(255) NOT NULL,
  `acc_admin` varchar(255) NOT NULL,
  `resi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pemesanan`, `kode_pembayaran`, `id_user`, `nama_pemesan`, `alamat`, `no_hp`, `nama`, `merk`, `typehp`, `tanggal_pemesanan`, `batas_bayar`, `jasa`, `foto`, `total_harga`, `status_pemesanan`, `acc_admin`, `resi`) VALUES
(49, 'QVDKH7SRZDEX0936', 18, 'wade ', 'jl. mangga', '', 'Softcase', 'Samsung', 'j7', '2021-05-09', '0000-00-00', '110000 TIKI', 'arifasiwi.jpg', '', 'Lunas', '', ''),
(54, 'WSQUWTUQBGON0324', 19, 'siwi ', 'karangkates', '', 'Softcase', 'Samsung', 'a5', '2021-06-08', '0000-00-00', '112000 JNT', 'arifasiwi.jpg', '', 'Lunas', '', ''),
(55, 'F0ZWYZNSS4OR0322', 19, 'siwi ', 'jl. mangga', '', 'Softcase', 'Softcase', 'a71', '2021-07-01', '0000-00-00', '110000 SiCepat', 'uas.JPG', '', 'Belum Terbayar', '', ''),
(56, 'ML1DGNMCKYNM0351', 19, 'siwi ', 'jl. markisa', '', 'Softcase', 'Softcase', 'qw', '2021-07-08', '0000-00-00', '110000 TIKI', 'ASUS.png', '', 'Belum Terbayar', '', ''),
(57, 'KHKH0KEJ2KWP0357', 19, 'siwi ', 'jl. markisa', '', 'Softcase', 'Softcase', 'qw', '2021-07-01', '0000-00-00', '112000 JNT', 'ASUS.png', '', 'Belum Terbayar', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg`
--

CREATE TABLE `reg` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nomorhp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reg`
--

INSERT INTO `reg` (`id_user`, `nama`, `password`, `nomorhp`, `email`) VALUES
(1, 'aldino2', 'aldino', '082353003354', 'aldinowildhan1@gmail.com'),
(2, 'wildhanku', 'wildhan', '081349325324', 'wildhan1@gmail.com'),
(3, 'Kurniawan', 'kurniawan', '08234123451', 'kurniawan@gmail.com'),
(4, 'thomas', 'thomass', '08213421525', 'thomas@gmail.com'),
(5, 'Dewi', 'Dewi', '0823412543', 'dewi@gmail.com'),
(7, 'dandan', 'aswda', '087813728', 'mana@gmail.com'),
(8, '', '', '0', ''),
(9, 'tes', 'tes123', '021313213213', 'tes@gmail.com'),
(10, 'Mega', 'MEga', '08234232144', 'mega@gmail.com'),
(12, 'Alif', 'karbala1798', '081545198365', 'aliftawakkal98@gmail.com'),
(13, 'putri', 'putri', '748253738', 'putri@gmail.com'),
(14, 'arinka', '123', '085830781344', 'arinka.arethusa@gmail.com'),
(15, 'fatim', 'fatim', '087787575723', 'fatim@gmail.com'),
(16, 'jijah', 'jijah', '08766464878', 'jijah@gmail.com'),
(18, 'wade', 'wade', '7234678854', 'siwi@gmail.com'),
(19, 'siwi', 'siwi', '12345678910', 'siwi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id_register` varchar(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `repassword` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id_register`, `nama`, `email`, `username`, `password`, `repassword`, `level`) VALUES
('', 'Milanda Putri', 'milandaputri05@gmail.com', 'mila', '$2y$10$XuaoZ0D.VTPmSN.JQVRoleIUbkq9CPgfFGXpPrJjF618rZz.8v7qW', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`, `Email`, `hak_akses`) VALUES
(3, 'admin', '8af76fa697224e045927164dc9a1cd06', 'Admin', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `typecase`
--

CREATE TABLE `typecase` (
  `id_typecase` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `typecase`
--

INSERT INTO `typecase` (`id_typecase`, `nama`, `foto`) VALUES
(2, 'Softcase', '19363_Beranda3.jpeg'),
(3, 'Hardcase', '45139_Beranda1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pemesanan`);

--
-- Indeks untuk tabel `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`),
  ADD KEY `username` (`username`(191));

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `typecase`
--
ALTER TABLE `typecase`
  ADD PRIMARY KEY (`id_typecase`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kode_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `reg`
--
ALTER TABLE `reg`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `typecase`
--
ALTER TABLE `typecase`
  MODIFY `id_typecase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
