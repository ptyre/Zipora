-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2019 pada 02.50
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zipora`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`, `status`) VALUES
(1, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user', 'false'),
(2, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'Hardi', 'true'),
(3, 'jos1', 'caf1a3dfb505ffed0d024130f58c5cfa', 'Naufaldwimln', 'false'),
(4, 'jos', '7815696ecbf1c96e6894b779456d330e', 'opang', 'false'),
(5, 'opang', '81dc9bdb52d04dc20036dbd8313ed055', 'opang', 'false'),
(6, 'opang3', '202cb962ac59075b964b07152d234b70', 'opang', 'false'),
(7, 'opanggg', '202cb962ac59075b964b07152d234b70', 'opang23', 'false'),
(8, '123', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'opang', 'false'),
(9, '123', '123', 'Opang', 'false'),
(10, 'hardi1', 'd2ccf709d0bec544a84e2a93a93aae1f', 'Hardi', 'false');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(12) NOT NULL,
  `judul_buku` text NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun` date NOT NULL,
  `kota` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi_pendek` text NOT NULL,
  `pict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun`, `kota`, `deskripsi`, `deskripsi_pendek`, `pict`) VALUES
('11', 'Buku Hariankuu', 'Naufal Dwi Maulana', 'Airlangga', '2019-02-05', 'Bandung', 'bqbqb', 'vbqb', ''),
('112', 'Buku Harianku', 'Naufal Dwi Maulana', 'Airlangga', '2019-02-05', 'Bandung', 'bqbqb', 'vbqb', 'poltekpraktisi.jpg'),
('B1', '21 Days for most be wented employed', 'Zipora', '', '0000-00-00', 'Bandung', 'Lorem ipsum dolor ', 'asd', 'pict1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_class`
--

CREATE TABLE `tb_class` (
  `id_class` int(11) NOT NULL,
  `name_class` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_class`
--

INSERT INTO `tb_class` (`id_class`, `name_class`, `deskripsi`) VALUES
(1, 'Calling At Work', 'Lorem ipsum dolor Lorem ipsum dolor ipsum'),
(2, 'First Grad', 'untuk awal yang bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id` int(11) NOT NULL,
  `pict` text NOT NULL,
  `info` text NOT NULL,
  `tgl` date NOT NULL,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galery`
--

INSERT INTO `tb_galery` (`id`, `pict`, `info`, `tgl`, `jenis`) VALUES
(7, '/images/gallery/IMG_1568.PNG', 'Temanku namanya rafli', '2019-02-08', 1),
(8, '/images/gallery/WhatsApp Image 2019-02-07 at 07.22.18.jpeg', 'aku waktu kecil', '2004-03-09', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pict` text NOT NULL,
  `informasi` text NOT NULL,
  `id_jenisinfo` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_informasi`
--

INSERT INTO `tb_informasi` (`id`, `judul`, `pict`, `informasi`, `id_jenisinfo`, `tgl`) VALUES
(3, '4 sekawan', 'asdqw.jpg', '12dsa', 3, '2019-12-20'),
(17, 'Hardi naik kereta', 'logo_ILH_icon.ico', '<h2>WYSIWYG Editor</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>\r\n\r\n<h3>Lacinia</h3>\r\n\r\n<ul>\r\n	<li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>\r\n	<li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>\r\n	<li>Praesent non lacinia mi.</li>\r\n	<li>Mauris a ante neque.</li>\r\n	<li>Aenean ut magna lobortis nunc feugiat sagittis.</li>\r\n</ul>\r\n\r\n<h3>Pellentesque adipiscing</h3>\r\n\r\n<p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>', 1, '2019-02-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenisgallery`
--

CREATE TABLE `tb_jenisgallery` (
  `id_jenisgalery` int(11) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenisgallery`
--

INSERT INTO `tb_jenisgallery` (`id_jenisgalery`, `nama_jenis`) VALUES
(1, 'Seminar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenisinfo`
--

CREATE TABLE `tb_jenisinfo` (
  `id` int(11) NOT NULL,
  `jenisinformasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenisinfo`
--

INSERT INTO `tb_jenisinfo` (`id`, `jenisinformasi`) VALUES
(1, 'news'),
(2, 'article'),
(3, 'event');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `name`, `email`, `telp`, `alamat`, `institusi`, `tgl_masuk`, `id_class`) VALUES
(1, 'Naufal Dwi Maulana', 'naufaldwimln@gmail.com', '087822837325', 'Jln. Mekar 13 no 56', 'Politeknik Praktisi Bandung', '2019-02-08', 1),
(2, 'Faizal', 'faymitsunaga@gmail.com', '08992837472', 'Antapani', 'politeknikpraktisi', '2019-02-08', 2),
(3, 'Hardiansyah Runtuboy alsasd asd asdq wd qwd qwd', 'ptyreasawawu@gmail.com', '08992837472', 'rancaekek', 'politeknikpraktisi', '2019-02-08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `pict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`id`, `nama`, `text`, `pict`) VALUES
(1, 'hardi1', 'aasdasf', ''),
(2, 'hardi1', 'aasdasf', 'jpg.jpg'),
(3, 'Hardi', 'Good boyy', '/images/testimoni/WhatsApp Image 2019-02-07 at 07.22.18.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hardi', 'hardi@ghar.com', '$2y$10$Mi.Z50C6GTOBa6jloLKKBeuo3oy2khtVPa2ss01bkaBFhb1iz/.4S', '3vnnYDdRT2jPhe9WmGUZRwbrTqQrE7FGMPPPTzGhZyAV44VbPwXLUnlXbuql', '2019-01-28 00:37:13', '2019-01-28 00:37:13'),
(2, 'blabla', 'blabla@gmail.com', '$2y$10$ZvJSEMhC/HMHilPV97hGle5KRRZYEAUfEtRRmubNnUoJvlyIaZyK6', 'GrwKzZgITrRgpNPRFhiwsd2BYrrlgHemtDeycRYimorICN4VLm215BWvsQSN', '2019-02-06 20:50:25', '2019-02-06 20:50:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indeks untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idjenisgaleri` (`jenis`);

--
-- Indeks untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_jenis` (`id_jenisinfo`);

--
-- Indeks untuk tabel `tb_jenisgallery`
--
ALTER TABLE `tb_jenisgallery`
  ADD PRIMARY KEY (`id_jenisgalery`);

--
-- Indeks untuk tabel `tb_jenisinfo`
--
ALTER TABLE `tb_jenisinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `fk_idclass` (`id_class`);

--
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_class`
--
ALTER TABLE `tb_class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_jenisgallery`
--
ALTER TABLE `tb_jenisgallery`
  MODIFY `id_jenisgalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_jenisinfo`
--
ALTER TABLE `tb_jenisinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD CONSTRAINT `fk_idjenisgaleri` FOREIGN KEY (`jenis`) REFERENCES `tb_jenisgallery` (`id_jenisgalery`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD CONSTRAINT `fk_id_jenis` FOREIGN KEY (`id_jenisinfo`) REFERENCES `tb_jenisinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD CONSTRAINT `fk_idclass` FOREIGN KEY (`id_class`) REFERENCES `tb_class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
