-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2020 pada 03.57
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrestoranci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblidentitas`
--

CREATE TABLE `tblidentitas` (
  `idrestoran` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `sejarah` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblidentitas`
--

INSERT INTO `tblidentitas` (`idrestoran`, `title`, `slogan`, `logo`, `favicon`, `deskripsi`, `sejarah`, `alamat`, `telepon`, `facebook`, `twitter`, `instagram`, `email`) VALUES
(1, 'Obaju Wings', 'Rasa sayap terbaik ada disetiap pucuknya', 'logo.png', 'favicon.png', 'test', 'test', 'Jl. Adi Jainuri Rt. 21 Rw. 5 Kecamatan Ologbakalan', '08218032323', 'fb', 'twt', 'igs', 'email@email.email');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkategori`
--

CREATE TABLE `tblkategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblkategori`
--

INSERT INTO `tblkategori` (`idkategori`, `kategori`, `keterangan`) VALUES
(30, 'Wing', ''),
(31, 'Appetizer', ''),
(32, 'Burger', ''),
(33, 'Wrap', ''),
(34, 'Dessert', ''),
(35, 'Drink', ''),
(36, 'Extras', ''),
(40, 'Asinan', '1 Set'),
(41, 'sosis', 'essss'),
(42, 'Es T', 'Manis'),
(43, 'Elektron', '1 Set Bola Bekel Lengkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmenu`
--

CREATE TABLE `tblmenu` (
  `idmenu` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblmenu`
--

INSERT INTO `tblmenu` (`idmenu`, `idkategori`, `menu`, `gambar`, `harga`) VALUES
(24, 30, 'Boneless Wing', 'bww_bonelesswings_sauce2.jpg', 55000),
(25, 30, 'Traditional Wings', 'bww_traditionalwings_sauce2.jpg', 35000),
(27, 30, 'Naked Tenders', '10240001-naked-tenders--.jpg', 35000),
(28, 30, 'Beer-Battered Tenders', '10240002_hand_breaded_chicken_tenders_5ct.jpg', 70000),
(29, 31, 'Ultimate Nachos', 'bww_ultimatenachos.jpg', 25000),
(32, 31, 'Mini Corn-Dogs', '10120008-mini-corn-dogs.jpg', 12000),
(33, 32, 'All-American Cheeseburger', 'bww_burger_allamericancheese.jpg', 60000),
(34, 32, 'Krabby Patty', 'bww_burger_cheesecurdbacon_2.jpg', 60000),
(35, 33, 'Taco El Buffalitos', '10230004-grilled-chicken-buffalitos.jpg', 40000),
(36, 34, 'Choco Fudge Cake', '10510001-chocolate-fudge-cake.jpg', 15000),
(37, 35, 'Red Bull', '10410033-red-bull.jpg', 21000),
(38, 35, 'Fresh Brewed Ice Tea', '10410029-ice-tea-drink_2.jpg', 12000),
(40, 36, 'Chili', '10040003-chili.jpg', 9000),
(41, 36, 'Pico De Gallo', '10040004-pico-de-gallo.jpg', 11000),
(42, 36, 'Salsa', '10040005-salsa.jpg', 6000),
(45, 30, 'Traditional Boneless Combo', 'bww_traditionalwingscombo_low22.jpg', 70000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblorder`
--

CREATE TABLE `tblorder` (
  `idorder` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tglorder` date NOT NULL,
  `total` float NOT NULL DEFAULT 0,
  `bayar` float NOT NULL DEFAULT 0,
  `kembali` float NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblorder`
--

INSERT INTO `tblorder` (`idorder`, `idpelanggan`, `tglorder`, `total`, `bayar`, `kembali`, `status`) VALUES
(36, 8, '2020-11-23', 258000, 300000, 42000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblorderdetail`
--

CREATE TABLE `tblorderdetail` (
  `idorderdetail` int(11) NOT NULL,
  `idordermenu` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargajual` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblorderdetail`
--

INSERT INTO `tblorderdetail` (`idorderdetail`, `idordermenu`, `idmenu`, `jumlah`, `hargajual`) VALUES
(49, 36, 36, 2, 15000),
(50, 36, 42, 2, 6000),
(51, 36, 33, 3, 60000),
(52, 36, 38, 3, 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpelanggan`
--

CREATE TABLE `tblpelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblpelanggan`
--

INSERT INTO `tblpelanggan` (`idpelanggan`, `pelanggan`, `alamat`, `telp`, `email`, `password`, `aktif`) VALUES
(1, 'Joni', 'Surabaya', '0812374373', 'jonirambo@gmail.com', '1234', 1),
(4, 'Rambo', 'Kalengsari', '333', 'rambomambo@gmail.com', '11', 1),
(8, 'Bayu', 'Surabaya', '082132212147', 'nashr.bayu77@gmail.com', '7', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblslider`
--

CREATE TABLE `tblslider` (
  `idslider` int(11) NOT NULL,
  `slider` varchar(100) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblslider`
--

INSERT INTO `tblslider` (`idslider`, `slider`, `tipe`) VALUES
(13, 'slide1.jpg', 'image/jpeg'),
(14, 'slide2.jpg', 'image/jpeg'),
(15, 'slide3.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE `tbluser` (
  `iduser` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `aktif` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`iduser`, `user`, `email`, `password`, `level`, `aktif`) VALUES
(19, 'admin', 'admin@admin.admin', '$2y$10$nwf2koySz07VYGB8hcqAe.RaX90qEp8BGHUPr2h6gHwGVdw/cUuwW', 'Admin', 1),
(20, 'koki', 'koki@koki.koki', '$2y$10$Zp1BOn3ZzhocdKhdKFtflea1FKPcr6mu0dFGJPU8xqaM.btVj02qW', 'Koki', 1),
(21, 'kasir', 'kasir@kasir.kasir', '$2y$10$EJ7W5oouIoB6nQgUuJZySeHws0Hfz8LG5FDkauOw0Pv2mzxuOO83e', 'Kasir', 1),
(22, 'ikok', 'ikok@ikok.ikok', '$2y$10$aj.7RtmS2fjLDv5tNoH8YeaeeWGgICRQEr/E9jQkdg2Ecn8FFRwPu', 'Koki', 1);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vorder`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vorder` (
`idorder` int(11)
,`idpelanggan` int(11)
,`tglorder` date
,`total` float
,`bayar` float
,`kembali` float
,`status` int(11)
,`pelanggan` varchar(100)
,`alamat` varchar(200)
,`telp` varchar(100)
,`email` varchar(150)
,`password` varchar(255)
,`aktif` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vorderdetail`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vorderdetail` (
`idorderdetail` int(11)
,`idordermenu` int(11)
,`idmenu` int(11)
,`jumlah` int(11)
,`hargajual` float
,`idkategori` int(11)
,`menu` varchar(100)
,`gambar` varchar(200)
,`harga` float
,`kategori` varchar(100)
,`idpelanggan` int(11)
,`tglorder` date
,`total` float
,`bayar` float
,`kembali` float
,`status` int(11)
,`pelanggan` varchar(100)
,`alamat` varchar(200)
,`telp` varchar(100)
,`email` varchar(150)
,`password` varchar(255)
,`aktif` int(11)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vorder`
--
DROP TABLE IF EXISTS `vorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vorder`  AS SELECT `tblorder`.`idorder` AS `idorder`, `tblorder`.`idpelanggan` AS `idpelanggan`, `tblorder`.`tglorder` AS `tglorder`, `tblorder`.`total` AS `total`, `tblorder`.`bayar` AS `bayar`, `tblorder`.`kembali` AS `kembali`, `tblorder`.`status` AS `status`, `tblpelanggan`.`pelanggan` AS `pelanggan`, `tblpelanggan`.`alamat` AS `alamat`, `tblpelanggan`.`telp` AS `telp`, `tblpelanggan`.`email` AS `email`, `tblpelanggan`.`password` AS `password`, `tblpelanggan`.`aktif` AS `aktif` FROM (`tblpelanggan` join `tblorder` on(`tblpelanggan`.`idpelanggan` = `tblorder`.`idpelanggan`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vorderdetail`
--
DROP TABLE IF EXISTS `vorderdetail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vorderdetail`  AS SELECT `tblorderdetail`.`idorderdetail` AS `idorderdetail`, `tblorderdetail`.`idordermenu` AS `idordermenu`, `tblorderdetail`.`idmenu` AS `idmenu`, `tblorderdetail`.`jumlah` AS `jumlah`, `tblorderdetail`.`hargajual` AS `hargajual`, `tblmenu`.`idkategori` AS `idkategori`, `tblmenu`.`menu` AS `menu`, `tblmenu`.`gambar` AS `gambar`, `tblmenu`.`harga` AS `harga`, `tblkategori`.`kategori` AS `kategori`, `tblorder`.`idpelanggan` AS `idpelanggan`, `tblorder`.`tglorder` AS `tglorder`, `tblorder`.`total` AS `total`, `tblorder`.`bayar` AS `bayar`, `tblorder`.`kembali` AS `kembali`, `tblorder`.`status` AS `status`, `tblpelanggan`.`pelanggan` AS `pelanggan`, `tblpelanggan`.`alamat` AS `alamat`, `tblpelanggan`.`telp` AS `telp`, `tblpelanggan`.`email` AS `email`, `tblpelanggan`.`password` AS `password`, `tblpelanggan`.`aktif` AS `aktif` FROM (((`tblkategori` join `tblmenu` on(`tblkategori`.`idkategori` = `tblmenu`.`idkategori`)) join `tblorderdetail` on(`tblmenu`.`idmenu` = `tblorderdetail`.`idmenu`)) join (`tblorder` join `tblpelanggan` on(`tblorder`.`idpelanggan` = `tblpelanggan`.`idpelanggan`)) on(`tblorderdetail`.`idordermenu` = `tblorder`.`idorder`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblidentitas`
--
ALTER TABLE `tblidentitas`
  ADD PRIMARY KEY (`idrestoran`);

--
-- Indeks untuk tabel `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indeks untuk tabel `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`idorder`);

--
-- Indeks untuk tabel `tblorderdetail`
--
ALTER TABLE `tblorderdetail`
  ADD PRIMARY KEY (`idorderdetail`);

--
-- Indeks untuk tabel `tblpelanggan`
--
ALTER TABLE `tblpelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indeks untuk tabel `tblslider`
--
ALTER TABLE `tblslider`
  ADD PRIMARY KEY (`idslider`);

--
-- Indeks untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblidentitas`
--
ALTER TABLE `tblidentitas`
  MODIFY `idrestoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tblkategori`
--
ALTER TABLE `tblkategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tblorderdetail`
--
ALTER TABLE `tblorderdetail`
  MODIFY `idorderdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tblpelanggan`
--
ALTER TABLE `tblpelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tblslider`
--
ALTER TABLE `tblslider`
  MODIFY `idslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
