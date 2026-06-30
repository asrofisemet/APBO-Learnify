-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 05:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(64) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(0, 'admin', '$2y$10$EX0L5MeIQldpkCuTZW.mjujTaj.Yy20IW0GOluecU/c.es.9r6E5.', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_mapel` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `email`, `nama_guru`, `password`, `nama_mapel`) VALUES
(214748364, 'Dummy@gmail.com', 'Ahmad Saugi', 'dummy123', 'Pendidikan Agama Islam'),
(214748365, 'zaidanline67@gmail.com', 'Saauky', '$2y$10$3qQ2TYrtQHy44LblPMexnu4ZQrCWD.dYh20P.sOL5cyo6Z48fJQEq', 'Matematika'),
(1819107728, 'imas@gmail.com', 'Imas Kartika', '$2y$10$wCSBYTaCpSJaEX/1VUo1p.YU88vbgr7PeW.j1OkmD2xnKjIbB7SD6', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(255) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `nama_mapel` varchar(128) NOT NULL,
  `video` varchar(255) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `nama_guru`, `nama_mapel`, `video`, `deskripsi`, `kelas`) VALUES
(38, 'Saauky', 'Matematika', 'Matematika_-_Dummy_-_1.mp4', '                                        RG Squad, siapa yang pernah dengar kata aljabar? Ini merupakan satu cabang matematika dalam pemecahan masalah dengan menggunakan huruf-huruf untuk mewakili angka-angka. Berasal dari bahasa Arab, al-jabr yang artinya penyelesaian. Kamu tahu siapa penemunya? Ia merupakan cendikiawan bernama Al-Khawarizmi. Sekarang, mari kita simak lebih lanjut tentang definisi dan bentuk-bentuk aljabar secara lebih mendalam ya! s', 'X'),
(42, 'Saauky', 'Matematika', 'Matematika_-_Dummy_-_1.mp4', 'Dalam matematika dan ilmu komputer, Aljabar Boolean adalah struktur aljabar yang &quot;mencakup intisari&quot; operasi logika AND, OR, NOR, dan NAND dan juga teori himpunan untuk operasi union, interseksi dan komplemen. Penamaan Aljabar Boolean sendiri berasal dari nama seorang matematikawan asal Inggris, bernama George Boole.', 'X'),
(43, 'Saauky', 'Matematika', 'Matematika_-_Dummy_-_2.mp4', 'Aljabar linear adalah bidang studi matematika yang mempelajari sistem persamaan linear dan solusinya, vektor, serta transformasi linear. Matriks dan operasinya juga merupakan hal yang berkaitan erat dengan bidang aljabar linear.', 'XI'),
(44, 'Saauky', 'Matematika', 'Matematika_-_Dummy_3.mp4', 'Vektor merupakan kajian aljabar yang biasanya digunakan untuk memecahkan permasalahan fisika seperti gerak, gaya, dan sebagainya. ... Sebuah vektor bisa dinyatakan dalam bentuk geometri yang digambarkan sebagai sebuah ruas garis dengan arah tertentu dimana salah satunya merupakan pangkal dan satunya lagi merupakan ujung.', 'XI'),
(45, 'Saauky', 'Matematika', 'Matematika_-_Dummy_4.mp4', 'Vektor dalam matematika dan fisika adalah objek geometri yang memiliki besar dan arah. Vektor jika dilambangkan dengan tanda panah. Besar vektor proporsional dengan panjang panah dan arahnya bertepatan dengan arah panah. Vektor dapat melambangkan perpindahan dari titik A ke B. Vektor sering ditandai sebagai', 'XII'),
(46, 'Saauky', 'Matematika', 'Matematika_-_Dummy_5.mp4', 'Pecahan, atau disebut fraksi adalah istilah dalam matematika yang terdiri dari pembilang dan penyebut. Hakikat transaksi dalam bilangan pecahan adalah bagaimana cara menyederhanakan pembilang dan penyebut.', 'XII'),
(47, 'Zaaidan', 'IPA', 'IPA_-_Dummy_1.mp4', 'Fisika adalah salah satu disiplin akademik paling tua...', 'X'),
(50, 'Zaaidan', 'IPA', 'IPA_-_Dummy_2.mp4', 'Kristalisasi adalah proses...', 'X'),
(51, 'Zaaidan', 'IPA', 'IPA_-_Dummy_3.mp4', 'Peleburan adalah proses...', 'XI'),
(52, 'Zaaidan', 'IPA', 'IPA_-_Dummy_4.mp4', 'Pencairan, pelelehan...', 'XI'),
(53, 'Zaaidan', 'IPA', 'IPA_-_Dummy_5.mp4', 'Dalam ilmu fisika...', 'XII'),
(54, 'Zaaidan', 'IPA', 'IPA_-_Dummy_6.mp4', 'Teknologi pembekuan...', 'XII'),
(55, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_1.mp4', 'Bahasa Inggris adalah...', 'X'),
(56, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_2.mp4', 'Bahasa Inggris berkembang...', 'X'),
(57, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_3.mp4', 'Menurut sejarahnya...', 'XI'),
(58, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_4.mp4', 'Penaklukan Normandia...', 'XI'),
(59, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_5.mp4', 'Selain Anglo-Saxons...', 'XII'),
(60, 'Khaairan', 'Bahasa Inggris', 'Inggris_-_Dummy_6.mp4', 'Karena telah mengalami...', 'XII'),
(61, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_1.mp4', 'Bahasa Indonesia adalah...', 'X'),
(62, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_2.mp4', 'Dari sudut pandang...', 'X'),
(63, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_3.mp4', 'Meskipun dipahami...', 'XI'),
(64, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_4.mp4', 'Aksara pertama...', 'XI'),
(65, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_5.mp4', 'Istilah Melayu...', 'XII'),
(67, 'Khairi Firdaus', 'Bahasa Indonesia', 'Indonesia_-_Dummy_6.mp4', 'Ibu kota Kerajaan...', 'XII'),
(69, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_1.mp4', 'Islam adalah...', 'X'),
(70, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_2.mp4', 'Kata Islam...', 'X'),
(71, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_3.mp4', 'Islam dapat juga...', 'XI'),
(72, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_4.mp4', 'Allah, menurut...', 'XI'),
(73, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_4.mp4', 'Dalam tauhid...', 'XII'),
(76, 'Ahmad Saugi', 'Pendidikan Agama Islam', 'Agama_Islam_-_Dummy_-_6.mp4', 'Islam adalah...', 'XII'),
(77, 'Saauky', 'Matematika', 'Agama_Islam_-_Dummy_-_6.mp4', 'Test', 'X');

-- --------------------------------------------------------

-- TAMBAHAN (TIDAK MENGUBAH APAPUN)
CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_siswa` int(64) NOT NULL,
  `nama_mapel` varchar(128) NOT NULL,
  `nilai` int(3) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(64) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('hadir','izin','sakit','alpa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `password`, `email`, `image`, `is_active`, `date_created`) VALUES
(39, 'Syaauqi Zaaidan', '$2y$10$djI2M/FQH2k3H7b6tLK5X.MZG1R.wrARoR6NerH3tsScNnsNCnexa', 'zaidanline67@gmail.com', '73349393_156861225523800_2119508204152772215_n_(1)6.jpg', 1, 1586163321);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

-- --------------------------------------------------------

--
-- AUTO_INCREMENT for dumped tables
--

ALTER TABLE `admin`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT;

ALTER TABLE `kelas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

ALTER TABLE `siswa`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;