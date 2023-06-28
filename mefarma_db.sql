-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 04:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mefarma_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_apotek`
--

CREATE TABLE `tb_apotek` (
  `id_apotek` int(11) NOT NULL,
  `nama_apotek` varchar(30) NOT NULL,
  `alamat_apotek` text NOT NULL,
  `hari_buka` varchar(100) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_apotek`
--

INSERT INTO `tb_apotek` (`id_apotek`, `nama_apotek`, `alamat_apotek`, `hari_buka`, `jam_buka`, `jam_tutup`, `no_telp`) VALUES
(1, 'Kimia Farma', 'Gendol', 'Senin', '06:15:29', '08:15:29', '098765');

-- --------------------------------------------------------

--
-- Table structure for table `tb_katakunci`
--

CREATE TABLE `tb_katakunci` (
  `katakunci` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login_user`
--

CREATE TABLE `tb_login_user` (
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login_user`
--

INSERT INTO `tb_login_user` (`email`, `password`, `id_user`, `hak_akses`) VALUES
('azzuraf12@gmail.com', 'azzura', 4, ''),
('cahya@gmail.com', 'gumilang', 9, 'admin'),
('faasf', 'addsa', 3, ''),
('kemendi1k@gmail.com', 'koko', 5, ''),
('kemendik@gmail.com', 'korsel', 2, ''),
('kemendikbud@gmail.com', 'tegar', 1, ''),
('risty@gmail.com', 'korsel', 7, ''),
('ristyadfe@gmail.com', 'ipin', 8, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `takaran` varchar(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `komposisi` varchar(50) NOT NULL,
  `indikasi` varchar(100) NOT NULL,
  `dosis` varchar(255) NOT NULL,
  `penyajian` varchar(100) NOT NULL,
  `cara_penyimpanan` varchar(100) NOT NULL,
  `perhatian` text NOT NULL,
  `efek_samping` text NOT NULL,
  `kemasan` varchar(100) NOT NULL,
  `pabrik` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `id_apotek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `takaran`, `deskripsi`, `komposisi`, `indikasi`, `dosis`, `penyajian`, `cara_penyimpanan`, `perhatian`, `efek_samping`, `kemasan`, `pabrik`, `harga`, `jenis_obat`, `id_apotek`) VALUES
(1, 'Paracetamol', '1-2 tablet', 'Obat pereda sakit', 'serbuk', 'bla', '1/hari', 'ter', 'suhu', 'sias', 'ojkndas', 'tablet', 'PT', 5000, 'K', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama_pembeli` int(11) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `alamat` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `no_telp`, `tgl_lahir`, `jk`, `email`, `password`, `hak_akses`) VALUES
(1, 'Tegar', '034567654343', '2020-01-14', 'L', 'kemendikbud@gmail.com', 'tegar', 'admin'),
(2, 'Minatozaki Sana', '085860013073', '2020-01-14', 'P', 'kemendik@gmail.com', 'korsel', 'admin'),
(3, 'Tegar', '09876', '2002-02-01', 'L', 'faasf', 'addsa', 'admin'),
(4, 'Azzura', '07546494', '2020-01-24', 'F', 'azzuraf12@gmail.com', 'azzura', 'admin'),
(5, 'Yuri Putri Salsabilaa', '098765', '2020-01-01', 'L', 'kemendi1k@gmail.com', 'koko', 'admin'),
(7, 'Risty', '0879', '2020-01-01', 'P', 'risty@gmail.com', 'korsel', 'admin'),
(8, 'Ipin', '04849948', '2020-02-19', 'F', 'ristyadfe@gmail.com', 'ipin', 'user'),
(9, 'Cahya Gumilang', '6756453', '2020-04-02', 'L', 'cahya@gmail.com', 'gumilang', 'admin');

--
-- Triggers `tb_user`
--
DELIMITER $$
CREATE TRIGGER `delete_login_user` BEFORE DELETE ON `tb_user` FOR EACH ROW DELETE FROM tb_login_user WHERE id_user = OLD.id_user
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_login_user` AFTER INSERT ON `tb_user` FOR EACH ROW INSERT INTO tb_login_user VALUES (NEW.email, NEW.password, NEW.id_user, NEW.hak_akses)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_login_user` AFTER UPDATE ON `tb_user` FOR EACH ROW UPDATE tb_login_user SET email = NEW.email, password = NEW.password WHERE id_user = NEW.id_user
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_apotek`
--
ALTER TABLE `tb_apotek`
  ADD PRIMARY KEY (`id_apotek`);

--
-- Indexes for table `tb_katakunci`
--
ALTER TABLE `tb_katakunci`
  ADD PRIMARY KEY (`katakunci`);

--
-- Indexes for table `tb_login_user`
--
ALTER TABLE `tb_login_user`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_apotek` (`id_apotek`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD KEY `id` (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_apotek`
--
ALTER TABLE `tb_apotek`
  MODIFY `id_apotek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_login_user`
--
ALTER TABLE `tb_login_user`
  ADD CONSTRAINT `tb_login_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD CONSTRAINT `tb_obat_ibfk_1` FOREIGN KEY (`id_apotek`) REFERENCES `tb_apotek` (`id_apotek`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
