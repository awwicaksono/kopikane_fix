-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2023 pada 10.51
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
-- Database: `kopikane`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin'),
(2, 'anggito', 'ito@gmail.com', 'ito');

-- --------------------------------------------------------

--
-- Struktur dari tabel `causes`
--

CREATE TABLE `causes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `raised` int(11) NOT NULL,
  `goal` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `causes`
--

INSERT INTO `causes` (`id`, `title`, `raised`, `goal`, `description`, `image_path`) VALUES
(2, 'SPONSER A CHILD TODAY', 1890, 2500, ' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', 'uploads/5a0fd74b7f0d32.74204269.jpg'),
(3, 'SPONSER A CHILD TODAY', 3000, 5000, ' Hampden-Sydney College in Virginia, looked  going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from section going through the cites of the word.', 'uploads/5a0fdafe2ce460.50776407.jpg'),
(4, 'SPONSER A CHILD TODAY', 4678, 3456, 'written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'uploads/5a0fd7a3efc668.01292255.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'pooja', 'pooja@gmail.com', 426352435, 'ghfghfghdfgshfg\r\nkhfjfhsjfh\r\nhhfjfhs'),
(2, 'ito', 'ito@ito.com', 2147483647, 'websitenya bagus'),
(3, 'ito', 'ito@ito.com', 2147483647, 'websitenya bagus'),
(4, 'ito', 'ito@ito.com', 2147483647, 'websitenya bagus'),
(5, 'ito', 'ito@ito.com', 2147483647, 'websitenya bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `other_amount` int(25) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `security_code` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donation`
--

INSERT INTO `donation` (`id`, `other_amount`, `card_number`, `security_code`, `name`, `email`, `phone`, `address`, `city`) VALUES
(1, 1236, '12364', '34651', 'sytdg', 'fdjg@hvm.vom', 13264921, 'fdsduyg hgiujb', 'Thane');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `area` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `title`, `time`, `date`, `area`, `description`, `image_path`) VALUES
(5, 'Ripah Coffee', '12:00:00', '2023-11-04', 'Jl. Kaliurang, Sleman, Yogyakarta', 'Ripah Coffe adalah kafe yang sangat cocok untuk mengerjakan tugas, nongkrong, bahkan untuk kumpul keluarga karena menu-menu yang disajikan sangat menggugah selera', 'uploads/64c120ec857da0.70896642.jpg'),
(6, 'Laju Kopi', '12:00:00', '2023-02-12', 'Jl. Kaliurang, Sleman, Yogyakarta', 'Laju kopi adalah kafe yang cukup hits di kalangan remaja seperti anak sekolah atau mahasiswa karena tempatnya yang \"aesthetic\" dan kopi yang disajikan cukup enak.', 'uploads/64c12159cc5d06.04629511.jpg'),
(7, 'Kelana Loka', '12:00:00', '2023-02-10', 'Jl. Langenastran No 22, Yogyakarta', 'Kelana Loka terletak di tengah kota tepatnya di sebelah utara alun-alun selatan yogyakarta. Kafe satu ini menyajikan makanan sederhana dan minuman yang menyegarkan dengan harga yang terjangkau untuk kalngan anak muda.', 'uploads/64c1229d652b29.84884110.jpg'),
(8, 'Terraloka', '12:00:00', '2023-02-04', 'Kulonprogo, Yoyakarta', 'Terraloka adalah sebuah kafe dengan tema kekinian yang berada di daerah pegunungan kulonprogo. Makanan dan minuman yang disajikan juga kekinian dan harganya terjangkau oleh kalangan anak muda.', 'uploads/64c1619a9cf6b7.76633827.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image_path`) VALUES
(8, 'Caffe Latte', 'uploads/64c12a2f0b9773.50123292.png'),
(9, 'Americano', 'uploads/64c12ad7ad2721.75326542.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(12) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `designation` varchar(55) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `training` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `email`, `contact`, `qualification`, `designation`, `hobby`, `experience`, `training`, `description`, `image_path`) VALUES
(5, 'Ashikur Rahman', 'Ashikur@gmail.com', 6541548, 'Barista', 'Barista', '', '', 'Lorem ipsum dolor sit amet, consectetur , sed do eiusmod tempor', ' Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.', 'uploads/64c22f2e082099.58427095.jpg'),
(6, 'antony', 'antony@toni.com', 2147483647, 'barista', 'barista', 'make a coffe', 'barista starbuck, barista jco, barista kopi klotok', '2 year', 'antony adalah seorang barista yang mempunyai pengalaman 2 tahun kerja. Ia cukup mahir dalam membuat berbagai sajian kopi', 'uploads/64c22ef4a2a773.70798139.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `causes`
--
ALTER TABLE `causes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
