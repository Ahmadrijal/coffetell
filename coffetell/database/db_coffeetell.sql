-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2022 pada 08.07
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coffeetell`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(3, 'Ahmad Rijal Arifin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '+6285325297523', 'rizal.alma95@gmail.com', 'Jl. Al Amanah raya no.95F');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(11, 'Bubuk Kopi'),
(12, 'Biji Kopi'),
(13, 'Seni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `data_created`) VALUES
(23, 12, 'PAPUA WAMENA', 85000, '<p>Filter Beans<br />\r\n~ PAPUA WAMENA ~<br />\r\nWamena, Kab. Jayawijaya - Prov. Papua</p>\r\n\r\n<p>Full Wash Process<br />\r\nMix Varietas Lini S795 &amp; Typica<br />\r\nAltitude 1,700 Masl</p>\r\n\r\n<p>Kemasan : 200gr<br />\r\nHarga : 85k<br />\r\n&nbsp;</p>\r\n', 'produk1643351147.jpeg', 1, '2022-01-12 05:41:22'),
(24, 12, 'ARABICA TORAJA MIALLO', 60000, '<p>Filter Beans<br />\r\n~ ARABICA TORAJA MIALLO ~<br />\r\nDesa Miallo, Kec. Makpak - Kab. Tana Toraja</p>\r\n\r\n<p>Full Wash Process<br />\r\nFilter Roasted<br />\r\nMix Varietas Lini S795 &amp; Typica<br />\r\nAltitude 1,500 Masl</p>\r\n\r\n<p>Kemasan : 200gr<br />\r\nHarga : 60k<br />\r\n&nbsp;</p>\r\n', 'produk1643351101.jpeg', 1, '2022-01-12 05:43:27'),
(26, 13, 'Lukisan Wajah dari ampas kopi', 250000, '<p>Lukisan potret / wajah menggunakan ampas kopi sebagai media utama. Ukuran lukisan beragam yaitu A4 dan A3 Harga yang tertera hanya untuk lukisan saja, tidak menggunakan frame atau bingkai. Karena khawatir jika menggunakan bingkai bisa pecah saat pengiriman.</p>\r\n', 'produk1643351055.jpg', 1, '2022-01-12 05:55:13'),
(27, 12, 'ARABICA MALINO TOPIDI', 80000, '<p>Filter Beans<br />\r\n~ ARABICA MALINO TOPIDI ~<br />\r\nBonto Lerung, Kab. Gowa - Prov. Sulawesi Selatan</p>\r\n\r\n<p>Process Natural<br />\r\nProcessor Daeng Halim<br />\r\nVarietas Lini S795<br />\r\nAltitude 1,300 Masl</p>\r\n\r\n<p>Kemasan : 200gr<br />\r\nHarga : 80k<br />\r\n&nbsp;</p>\r\n', 'produk1643350904.jpeg', 1, '2022-01-12 06:02:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
