-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2020 pada 09.27
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

CREATE DATABASE ducoto;
USE ducoto;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ducoto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(4, 'ducoto', 'ducoto', 'ducoto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kurir`, `tarif`) VALUES
(1, 'JNE', 1000000),
(2, 'JNT', 500000),
(3, 'EXPRESS', 700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` varchar(255) NOT NULL,
  `kota_pelanggan` varchar(100) NOT NULL,
  `kode_pelanggan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`, `kota_pelanggan`, `kode_pelanggan`) VALUES
(2, 'ducoto@gmail.com', 'ducoto', 'Hyperx', '011010982', 'Indonesia, Jawa Timur, Tulungagung, Boyolangu, Serut ', 'Kediri', '55222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` varchar(100) NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'purchased',
  `nama_kurir` varchar(255) NOT NULL,
  `tarif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `subharga` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kategori_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `brand_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `power_produk` varchar(100) NOT NULL,
  `torque_produk` varchar(100) NOT NULL,
  `silinder_produk` varchar(100) NOT NULL,
  `bensinrata_produk` varchar(100) NOT NULL,
  `bensinfull_produk` varchar(100) NOT NULL,
  `tinggi_produk` varchar(100) NOT NULL,
  `berat_produk` varchar(100) NOT NULL,
  `cc_produk` varchar(100) NOT NULL,
  `mesin_produk` varchar(100) NOT NULL,
  `topspeed_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori_produk`, `nama_produk`, `brand_produk`, `harga_produk`, `power_produk`, `torque_produk`, `silinder_produk`, `bensinrata_produk`, `bensinfull_produk`, `tinggi_produk`, `berat_produk`, `cc_produk`, `mesin_produk`, `topspeed_produk`, `deskripsi_produk`, `foto_produk`) VALUES
(0, 'Retro', 'DUCATI SCRAMBLER 1100', 'Ducati', '280000000', '86 HP', '88 Nm', '2 L-Twin', '19 km/l', '15 litres', '180 mm', '189 kg', '1,079 CC', 'L-Twin', '209 kmh', 'just PROs', 'DUCATI SCRAMBLE 1100.png'),
(1, 'Sport', 'DUCATI PANIGALE V2', 'Ducati', '272000000', '155 HP', '104 Nm', '4 L-Twin', '20 km/l', '17 litres', '840 mm', '176 kg', '955 CC', 'L-Twin', '271 kmh', 'The Red Essence', 'PANIGALE V2.png'),
(2, 'Sport', 'DUCATI PANIGALE V4', 'Ducati', '878000000', '214 HP ', '124 Nm ', '4 V-Twin', '14,5 km/l', '16  litres', '835  mm', '175  kg', '1,103  CC', 'V-Twin', '299  kmh', 'The Science of Speed                        ', 'PANIGALE V4 1.png'),
(3, 'Sport', 'DUCATI PANIGALE V4R', 'Ducati', '2100000000', '221 HP ', '112 Nm ', '4 V-Twin', '14,5 km/l', '16 litres', '830 mm', '172 kg', '998 CC', 'V-Twin', '330 kmh', 'The Sound of Excellence                        ', 'PANIGALE V4 R 1.png'),
(4, 'Sport', 'DUCATI PANIGALE 1299R', 'Ducati', '533000000', '209 HP', '142 Nm', '2 L-Twin', '16 km/l', '17 liters', '830 mm', '168 kg', '1,286 CC', 'L-Twin', '312 kmh', 'Ducati most powerful twin cylinder ever                                                                                                          ', 'PANIGALE 1299 1.png'),
(5, 'Sport', 'DUCATI SUPERLEGGERA V4', 'Ducati', '4100000000', '234 HP', '119 Nm', '4 V4 Engine', '12,5 km/l', '16 litres', '835 mm', '152 kg', '998 CC', 'V4 Engine', '300 kmh', 'Dreams Matter                       ', 'SUPERLEGGERA V4 1.png'),
(6, 'Naked', 'DUCATI STREETFIGHTER V4', 'Ducati', '311000000', '208HP', '123Nm ', '4 V-Twin', '17 km/l', '16 litres', '845 mm', '180 kg', '1,103 CC', 'V-Twin', '270 kmh', 'The Fight Formula            ', 'STREETFIGHTER V4 1.png'),
(7, 'Naked', 'DUCATI MONSTER 797', 'Ducati', '309000000', '73 HP', '67 Nm', '2 L-Twin', '18 km/l', '16,5 litres', '805 mm', '175 kg', '803 CC', 'L-Twin', '210 kmh', 'Fresh vibes. Sporty Soul', 'MONSTER 797 1.png'),
(8, 'Naked', 'DUCATI MONSTER 821', 'Ducati', '440000000', '109 HP', '86 Nm', '2 L-Twin', '18,5 km/l', '16 litres', '785 - 810 mm', '180 kg', '821 CC', '            L-Twin', '225 kmh', 'Thats why we love Monster', 'MONSTER 821 1.png'),
(9, 'Naked', 'DUCATI MONSTER 1200', 'Ducati', '455000000', '147 HP', '124 Nm', '4 L-Twin', '19,2 km/l', '16,5 litres', '795 - 820 mm', '187 kg', '1,198 CC', 'L-Twin', '260 kmh', 'I am a Monster', 'MONSTER 1200 1.png'),
(10, 'Enduro', 'DUCATI HYPERMOTARD 950', 'Ducati', '480000000', '114 HP', '96 Nm', '4 L-Twin', '\r\n            20 km/l', '14,5 litres', '870 mm', '178 kg', '937 CC', '\r\n            L-Twin', '283 kmh', 'Game On!', 'HYPERMOTARD 950.png'),
(11, 'Cruiser', 'DUCATI DIAVEL 1260', 'Ducati', '535000000', '159 HP', '129 Nm', '4 L-Twin', '18,5 km/l', '17 litres', '780 mm', '218 kg', '1,262 CC', 'L-Twin', '272 kmh', 'So Good to be Bad', 'DIAVEL 1260.png'),
(13, 'Sport', 'KAWASAKI NINJA 250SL', 'Kawasaki', '40600000', '28 HP', '22,6 Nm', '1 Inline', '30 km/l', '11 litres', '780 mm', '151 kg', '249 CC', 'Inline', '144 kmh', 'Legendary Performance', 'NINJA 250 SL.png'),
(14, 'Sport', 'KAWASAKI NINJA 250', 'Kawasaki', '64100000', '28,5 HP', '23,5 Nm', '2 Inline', '21 km/l', '14 litres', '780 mm', '164 kg', '249 CC', 'Inline', '180 kmh', 'Legendary Performance', 'NINJA 250.png'),
(15, 'Sport', 'KAWASAKI NINJA ZX6R', 'Kawasaki', '315700000', '136 HP', '70,8 Nm', '4 Inline', '20 km/l', '17 litres', '780 mm', '196 kg', '636 CC', 'Inline', '210 kmh', 'The Thunder Thor ', 'NINJA ZX6R V2.png'),
(16, 'Sport', 'KAWASAKI NINJA ZX10R', 'Kawasaki', '492000000', '158,8 HP', '114,9 Nm', '4 Inline', '16,5 km/l', '17 litres', '780 mm', '206 kg', '998 CC', 'Inline', '300 kmh', 'The Ninja', 'NINJA ZX10R.png'),
(17, 'Sport', 'KAWASAKI NINJA H2R', 'Kawasaki', '1000000000', '296 HP', '150 Nm', '4 Inline Supercharger', '14 km/l', '17 litres', '--- mm', '216 kg', '988 CC', 'Inline Supercharger', '400 kmh', 'The Beast', 'NINJA H2R.png'),
(18, 'Naked', 'KAWASAKI Z125', 'Kawasaki', '34100000', '9,4 HP', '9,5 Nm', '1 Inline', '\r\n            30 km/l', '7,4 litres', '780 mm', '101 kg', '125 CC', '\r\n            Inline', '102 kmh', 'Mini Beast', 'Z125.png'),
(19, 'Naked', 'KAWASAKI Z250SL', 'Kawasaki', '41000000', '28 HP', '22 Nm', '1 Inline', '            30 km/l', '11 litres', '785 mm', '148 kg', '249 CC', '            Inline', '153 kmh', 'Launcherssss', 'Z250SL.png'),
(20, 'Naked', 'KAWASAKI Z250', 'Kawasaki', '54700000', '32 HP', '21 Nm', '2 Inline', '\r\n            26 km/l', '17 litres', '785 mm', '168 kg', '249 CC', '\r\n            Inline', '165 kmh', 'an easy body handling', 'Z250.png'),
(21, 'Naked', 'KAWASAKI Z650', 'Kawasaki', '163000000', '68 HP', '65 Nm', '2 Inline', '            18 km/l', '15 litres', '780 mm', '190 kg', '649 CC', '            Inline', '212 kmh', 'Beginner Superbike', 'Z650.png'),
(22, 'Naked', 'KAWASAKI Z800', 'Kawasaki', '212000000', '115 HP', '83 Nm', '4 Inline', '\r\n            13 km/l', '17 litres', '830 mm', '234 kg', '806 CC', '\r\n            Inline', '250 kmh', 'Comfortable Superbike', 'Z800.png'),
(23, 'Naked', 'KAWASAKI Z900', 'Kawasaki', '235000000', '125 HP', '98 Nm', '4 Inline', '\r\n            15 km/l', '17 litres', '790 mm', '210 kg', '948 CC', '\r\n            Inline', '253 kmh', 'New Design', 'Z900.png'),
(24, 'Naked', 'KAWASAKI Z1000', 'Kawasaki', '332000000', '142 HP', '111 Nm', '4 Inline', '\r\n            9 km/l', '17 litres', '815 mm', '221 kg', '1043 CC', '\r\n            Inline', '260 kmh', 'SUGOMI', 'Z1000.png'),
(25, 'Tour', 'KAWASAKI NINJA 650', 'Kawasaki', '168000000', '67 HP', '66 Nm', '2 Inline', '25 km/l', '16 litres', '780 mm', '211 kg', '649 CC', 'Inline', '212 kmh', 'Touring Time', 'NINJA 650.png'),
(26, 'Tour', 'KAWASAKI NINJA 1000', 'Kawasaki', '299000000', '140 HP', '111 Nm', '4 Inline', '\r\n            17 km/l', '19 litres', '815 mm', '239 kg', '1043 CC', '\r\n            Inline', '245 kmh', 'Sport Touring', 'NINJA 1000.png'),
(27, 'Tour', 'KAWASAKI ZX14R', 'Kawasaki', '342900000', '192 HP', '162 Nm', '4 Inline', '\r\n            14 km/l', '17 litres', '800 mm', '268 kg', '1,441 CC', '\r\n            Inline', '300 kmh', 'Most Comfortable Sport Touring', 'ZX14R.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
