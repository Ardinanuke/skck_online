-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jul 2015 pada 09.56
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polresta_wp388`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ciri_fisik`
--

CREATE TABLE IF NOT EXISTS `ciri_fisik` (
  `id_ciri` int(11) NOT NULL AUTO_INCREMENT,
  `rambut` varchar(50) NOT NULL,
  `muka` varchar(50) NOT NULL,
  `kulit` varchar(50) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `tanda_istimewa` varchar(50) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_ciri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `ciri_fisik`
--

INSERT INTO `ciri_fisik` (`id_ciri`, `rambut`, `muka`, `kulit`, `tinggi`, `tanda_istimewa`, `id_pengguna`) VALUES
(2, 'Hitam', 'Oval', 'Sawo Matang', 170, 'Ada tahi lalat di bibir', 4),
(3, 'Pirang', 'Bulat', 'Hitam', 210, 'Ada Tahi lalat di hidung', 5),
(4, 'Hijau', 'Kotak', 'Hitam', 250, 'rambut tegak lurus', 7),
(5, 'Okaosd', 'okaosdk', 'okaoskd', 123, 'kasodkaosd', 12),
(6, 'OPaksodpk', 'oKAPsdk', 'POAksd', 10, 'paoksdp', 13),
(7, 'PIRANG', 'ganteng', 'Salak', 190, 'lesung 4', 20),
(8, 'Hitam', 'Bulat', 'Sawo matang', 170, 'Ada tahi lalat di bibir', 19),
(9, '', '', '', 0, '', 34),
(10, 'Hitam', 'Oval', 'sawo matang', 176, 'tidak ada', 39),
(11, 'hitam', 'ganteng', 'bule', 168, 'keren, cool, smart', 26),
(12, 'yy', 'gg', 'jj', 0, 'hhh', 42),
(13, 'hitam', 'oval', 'sawo matang', 165, 'tato', 46),
(14, 'PIRANG', 'ganteng', 'Salak', 190, 'lesung 4', 47),
(15, 'Hitam', 'Oval', 'Sawo Matang', 190, 'Tompel', 48),
(16, 'Hitam', 'Kuning', 'Hitam', 109, 'Kulit Hitam', 49),
(17, 'Hitam', 'Bulat', 'Putih', 180, 'Tompelan', 52),
(18, 'PIRANG', 'ganteng', 'Salak', 190, 'lesung 4', 53),
(19, 'hitam', 'Ganteng', 'bule', 180, 'keren, cool, smart', 55),
(20, 'Hitam', 'Bulat', 'Sawo Matang', 170, 'Ada tahi lalat di bibir', 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobi`
--

CREATE TABLE IF NOT EXISTS `hobi` (
  `id_hobi` int(11) NOT NULL AUTO_INCREMENT,
  `kegemaran` text NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_hobi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `hobi`
--

INSERT INTO `hobi` (`id_hobi`, `kegemaran`, `id_pengguna`) VALUES
(2, 'Hobi saya adalah menjadi seorang programmer yang sukses', 4),
(3, 'Lorem ipsum dolor si amet Lorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si amet', 5),
(4, 'Bermain sepakbola', 7),
(5, 'Oaksodkaoskdok', 12),
(6, 'Ooaskdokoa', 13),
(7, 'naik gunung', 20),
(8, 'Bermain sepak bola', 19),
(9, '', 34),
(10, 'musik olahraga ski nonton', 39),
(11, 'gonta ganti cewek', 26),
(12, 'ii', 42),
(13, 'makan', 46),
(14, 'makan', 47),
(15, 'Bermain Sepak Bola', 48),
(16, 'Bermain sepak bola', 49),
(17, 'Bermain bulutangkis', 52),
(18, 'Makan', 53),
(19, 'Gonta Ganti Cewek', 55),
(20, 'Bermain bola', 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hub_keluarga`
--

CREATE TABLE IF NOT EXISTS `hub_keluarga` (
  `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_keluarga` varchar(250) NOT NULL,
  `umur` int(11) NOT NULL,
  `agama_keluarga` varchar(50) NOT NULL,
  `kebangsaan_keluarga` varchar(250) NOT NULL,
  `pekerjaan_keluarga` varchar(250) NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `type_keluarga` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_keluarga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data untuk tabel `hub_keluarga`
--

INSERT INTO `hub_keluarga` (`id_keluarga`, `nama_keluarga`, `umur`, `agama_keluarga`, `kebangsaan_keluarga`, `pekerjaan_keluarga`, `alamat_keluarga`, `type_keluarga`, `id_pengguna`) VALUES
(5, 'Fatin Shidqia', 20, '1', '1', 'PNS', 'Jln. Pramuka', 1, 4),
(6, 'Hariono', 20, '1', '1', 'Wiraswasta', 'Jln. Kawung', 2, 4),
(7, 'Tutianas', 48, '1', '1', 'Wiraswasta', 'Jln. Pramuka', 3, 4),
(8, 'Dimas', 40, '1', '1', 'Pegawai Swasta', 'Jln. Puro', 4, 4),
(9, 'Siti', 20, '1', '1', 'Pelajar', 'Dolopo, Madiun', 1, 5),
(10, 'Dino', 20, '4', '1', 'Pelajar', 'Mogo, Jati', 2, 5),
(11, 'Rosi', 20, '1', '1', 'PNS', 'Porong, Jombang', 3, 5),
(12, 'Insannu', 30, '1', '3', 'Swasta', 'Ponorogo, Kota', 4, 5),
(13, 'Sutinah', 20, '1', '1', 'PNS', 'Ronowijayan Ponorogo', 1, 7),
(14, 'Sukijan', 40, '1', '2', 'Swasta', 'Ronowijayan Ponorogo 2', 2, 7),
(15, 'Suparman', 50, '1', '1', 'Swasta', 'Ronowijayan Ponorogo 3', 3, 7),
(16, 'Sumartin', 60, '1', '2', 'Swasta', 'Ronowijayan Ponorogo 4', 4, 7),
(17, 'Sutini', 30, '1', '1', 'Ponorogo', 'Jln. Let Jend Soeaprpto', 1, 12),
(18, 'Robinson', 312, '2', '1', 'Ooasdo', 'Okoadkoaskd', 2, 12),
(19, 'Ibu', 30, '1', '1', 'PNS', 'Ponorogo', 3, 12),
(20, 'Suadara', 40, '5', '1', 'PNS', 'Pnorogo', 4, 12),
(21, 'Sukijan', 20, '1', '1', 'PNS', 'Surabaya', 1, 13),
(22, 'Putro', 50, '1', '1', 'Swasta', 'Kota', 2, 13),
(23, 'Sutinah', 20, '4', '3', 'PNS', 'Kota Ponorogo', 3, 13),
(24, 'Supri', 20, '6', '3', 'PNS', 'ponorogo', 4, 13),
(25, 'Sukinah', 20, '1', '1', 'Swasta', 'Jalan Rumpuk', 1, 19),
(26, 'FENI', 25, '1', '1', 'GURU', 'BATAM', 1, 20),
(27, 'MARJUNI', 57, '1', '1', 'SWASTA', 'SULAWESI', 2, 20),
(28, 'ROHANI', 55, '1', '1', 'IRT', 'SULAWESI', 3, 20),
(29, 'Sukirma', 30, '1', '1', 'Pegawai Swasta', 'Ponorogo, Sudirman', 2, 19),
(30, 'YOUDIE', 33, '1', '1', 'SWASTA', 'SULAWESI', 4, 20),
(31, 'Sumartini', 50, '1', '1', 'PNS', 'Sultan Agung', 3, 19),
(32, 'Martono', 10, '1', '1', 'Pelajar', 'Gunung', 4, 19),
(33, '', 0, '', '', '', '', 1, 34),
(34, '', 0, '', '', '', '', 2, 34),
(35, '', 0, '', '', '', '', 3, 34),
(36, '', 0, '', '', '', '', 4, 34),
(37, 'belum ada', 24, '1', '1', 'belum ada', 'belum ada', 1, 39),
(38, 'Zainuddin', 54, '1', '1', 'Pensiunan', 'Duson Paloh Kupula, Lapang Timu, Gandapura, Bireuen, Aceh, Indonesia', 2, 39),
(39, 'Fatimah', 35, '1', '1', 'ibu rumah tangga', 'Lapang Timu ', 3, 39),
(40, 'fajjarna', 23, '1', '1', 'ibu rumah tangga', 'lapang timu', 4, 39),
(41, 'sihwanti', 26, '1', '1', 'wiraswasta', 'perum pura jaya residence cluster c blok b\\40 tanjung uncang, batu aji ,batam', 1, 40),
(42, 'suyoto', 55, '1', '1', 'wiraswasta', 'papua', 2, 40),
(43, 'supatmiati', 50, '1', '1', 'wiraswasta', 'papua', 3, 40),
(44, 'afan', 30, '1', '1', 'TNI AD', 'PAPUA', 4, 40),
(45, 'Maya Agnes', 25, '2', '1', 'Karyawan Swasta', 'Villa Kapuk Mas II Blok B7 No. 8', 1, 26),
(46, 'Ahok', 45, '4', '1', 'Karyawan Swasta', 'Apartemen Condola Kelapa Gading', 2, 26),
(47, 'Alan', 40, '2', '1', 'Karayawan Swasta', 'Villa Kapuk Mas II Blok B7 No. 8', 3, 26),
(48, ' Daniel', 35, '4', '1', 'Karyawan Swasta', ' Vikamas', 4, 26),
(49, 'ijiji', 280, '1', '1', 'iiiii', 'batam 02', 1, 42),
(50, 'juju', 555, '1', '1', '7uy', 'batam 02', 1, 42),
(51, 'ggghh', 2555, '1', '1', 'gcyc', 'batam 03', 2, 42),
(52, 'yggg', 2255, '1', '1', 'ggg', 'batam 04', 3, 42),
(53, 'hhh', 33, '1', '1', 'gg', 'batam 05', 4, 42),
(54, 'Titus Wahyu Diatmiko', 48, '3', '1', 'Wiraswasta', 'Muka Kuning Indah I Blok AM No. 6, Kelurahan Buliang, Kecamatan Batu Aji, Batam', 1, 44),
(55, 'Beni', 35, '2', '1', 'Karayawan Swasta', 'Perum Bida Ayu No, 1', 1, 46),
(56, 'Budi', 51, '2', '1', 'Karyawan Swasta', 'Perum Bida Ayu No. 1', 2, 46),
(57, 'Melly', 40, '2', '1', 'Karayawan Swasta', 'Perum Bida Ayu No. 1', 3, 46),
(58, 'Beni', 41, '2', '1', 'Karyawan Swasta', 'perum Bida Ayu No. 1', 1, 46),
(59, 'yanto', 41, '2', '1', 'Karyawan Swasta', 'Perum Bida Ayu', 2, 46),
(60, 'Melly', 41, '2', '1', 'Karyawan Swasta', 'Perum Bida Ayu', 3, 46),
(61, 'yanti', 41, '2', '1', 'Karyawan Swasta', 'Perum bida Ayu', 4, 46),
(62, 'Feni', 35, '1', '1', 'GURU', 'Batam 08', 1, 47),
(63, 'Mar', 53, '1', '1', 'SUPPORT', 'Batam01', 2, 47),
(64, 'ROH', 55, '1', '1', 'IRT', 'Batam02', 3, 47),
(65, 'doby', 33, '1', '1', 'calo', 'Btam03', 4, 47),
(66, '-', 0, '1', '1', '-', '-', 1, 48),
(67, 'Sukijo', 20, '1', '1', 'PNS', 'Ponorogo Selatan', 2, 48),
(68, 'Sujati', 20, '1', '1', 'Swasta', 'Jakarta Timur', 3, 48),
(69, 'Sukirma', 31, '2', '2', 'Swasta', 'Jakarta\r\n\r\n', 4, 48),
(70, 'istri', 20, '1', '1', 'PNS', 'Ponorogo', 1, 49),
(71, 'Bapak', 30, '1', '1', 'Swasta', 'Ponorogo', 2, 49),
(72, 'Ibu', 30, '1', '1', 'PNS', 'Ponorogo', 3, 49),
(73, 'Ibu', 30, '1', '1', 'PNS', 'Ponorogo', 3, 49),
(74, 'Saudara', 10, '1', '1', 'Pelajar', 'Ponorogo', 4, 49),
(75, 'Asep 1', 88, '1', '1', '-', 'Batam', 2, 50),
(76, 'FENI', 56, '1', '1', 'IRT', 'Batam', 3, 50),
(77, 'YOUDIE', 44, '1', '1', 'Wirausaha', 'Batam', 4, 50),
(78, 'Hartono', 50, '1', '1', 'PNS', 'Slahung, Ponorogo', 2, 52),
(79, 'Martini', 50, '1', '1', 'Wiraswasta', 'Slahung, Ponorogo', 3, 52),
(80, 'Bagus', 20, '2', '3', 'Mahasiswa', 'Slahung, Ponorogo', 4, 52),
(81, 'Istri pertama', 20, '2', '1', 'Pelajar', 'Slahung, Ponorogo', 1, 52),
(82, 'Abdullah', 77, '1', '1', 'GURU', 'Batam`', 2, 53),
(83, 'Aryati', 66, '1', '1', 'IRT', 'Batam', 3, 53),
(84, 'Nona', 35, '1', '1', 'Adadech', 'Batam', 4, 53),
(85, 'Yanto', 41, '2', '1', 'Karyawan Swasta', 'Vikamas', 2, 55),
(86, 'Fenny', 31, '2', '1', 'Karyawan Swasta', 'Vikamas', 3, 55),
(87, 'Hariono', 47, '1', '1', 'Wiraswasta', 'Jln. Let Jend Soeprapto Gg. 1 No. 8', 2, 54),
(88, 'Tutianas', 49, '1', '1', 'Wiraswasta', 'Jln. Let Jend Soeprapto Gg. 1 No. 8', 3, 54),
(89, 'Dimas', 25, '1', '1', 'Pegawai', 'Jln. Let Jend Soeprapto Gg. 1 No. 8', 4, 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hub_keluarga2`
--

CREATE TABLE IF NOT EXISTS `hub_keluarga2` (
  `id_keluarga2` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pasangan` varchar(250) NOT NULL,
  `nama_bapak` varchar(250) NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `nama_saudara` varchar(250) NOT NULL,
  `alamat_keluarga2` text NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_keluarga2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `hub_keluarga2`
--

INSERT INTO `hub_keluarga2` (`id_keluarga2`, `nama_pasangan`, `nama_bapak`, `nama_ibu`, `nama_saudara`, `alamat_keluarga2`, `id_pengguna`) VALUES
(1, 'Khotidjah', 'Koesno', 'Siti', 'Mariono', 'Sukorejo', 48),
(2, '-', '-', '-', '-', '-', 48),
(3, 'istri', 'Bapak Istri', 'Ibu Istri', 'Saudara Istri', 'Ponorogo', 49),
(4, 'Istri pertama', 'Azaria Bayu', 'Bima Ahida', 'Bayu Cakra', 'Ponorogo', 52);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `sekolah` varchar(250) NOT NULL,
  `ket_pendidikan` varchar(250) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `type_sekolah` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `sekolah`, `ket_pendidikan`, `tahun_lulus`, `type_sekolah`, `id_pengguna`) VALUES
(5, 'SDN 1 Ronowijayan', '1', 2009, 1, 4),
(6, 'SMPN 2 Ponorogo', '1', 2012, 2, 4),
(7, 'SMKN 1 Jenangan Ponorogo', '1', 2015, 3, 4),
(8, '-', '3', 0, 4, 4),
(9, 'SDN 1 Sangen', '1', 2009, 1, 5),
(10, 'SMPN 2 Sangen', '1', 2012, 2, 5),
(11, 'SMKN 1 Sangen', '1', 2015, 3, 5),
(12, 'ISI Jogja', '1', 2020, 4, 5),
(13, 'SDN 1 Ronowijayan', '1', 2001, 1, 7),
(14, 'SMPN 1 Ronowijayan', '1', 2007, 2, 7),
(15, 'SMKN 1 Ronowijayan', '1', 2011, 3, 7),
(16, 'ITB Bandung', '1', 2016, 4, 7),
(17, 'SD Ponorogo', '1', 2015, 1, 12),
(18, 'SMP Ponorogo', '1', 2016, 2, 12),
(19, 'SMK Ponorogo', '1', 2014, 3, 12),
(20, 'Oapso', '2', 2015, 4, 12),
(21, 'SDN 1 Ronowijayan', '1', 2015, 1, 13),
(22, 'SMPN 2 Ponorogo', '1', 2010, 2, 13),
(23, 'SMKN 1 Jenangan Ponorogo', '2', 0, 3, 13),
(24, 'ITB Bandung', '1', 2020, 4, 13),
(25, 'PEMBINA', '1', 1998, 1, 20),
(26, 'MTS', '1', 2002, 2, 20),
(27, 'SMA 3', '1', 2005, 3, 20),
(28, '-', '3', 0, 4, 20),
(29, 'SDN 1 Ronowijayan', '1', 2009, 1, 19),
(30, 'SMPN 2 Jakarta', '1', 2012, 2, 19),
(31, 'SMKN 1 Jakarta', '1', 2015, 3, 19),
(32, 'Oxford University', '1', 2020, 4, 19),
(33, '', '', 0, 1, 34),
(34, '', '', 0, 2, 34),
(35, '', '', 0, 3, 34),
(36, '', '', 0, 4, 34),
(37, 'MIN Gandapura', '1', 2004, 1, 39),
(38, 'MTsN Model Gandapura', '1', 2007, 2, 39),
(39, 'SMKN 1Peusangan', '2', 2010, 3, 39),
(40, 'jmc', '3', 424342, 4, 39),
(41, 'SD TUMPUK TUGU TRENGGALEK', '1', 2000, 1, 40),
(42, 'SLTPN 2 TUGU TRENGGALEK', '1', 2003, 2, 40),
(43, 'SMK QOMARUL HIDAYAH 1 TUGU TRENGGALEK', '1', 2006, 3, 40),
(44, 'SD Chandra Kusuma', '1', 1996, 1, 26),
(45, 'SMP Chandra Kusuma', '1', 1999, 2, 26),
(46, 'Chandra Kusuma', '1', 2002, 3, 26),
(47, 'Bina Nusantara', '1', 2006, 4, 26),
(48, 'tidak', '3', 0, 1, 42),
(49, '', '3', 0, 2, 42),
(50, 'bhhh', '1', 1988, 3, 42),
(51, 'tidak', '3', 0, 4, 42),
(52, 'Bunga hati Banga', '1', 1996, 1, 46),
(53, 'Bunga hati Banga', '3', 1999, 2, 46),
(54, 'Chandra Kusuma', '1', 2002, 3, 46),
(55, 'Bina Nusantara', '1', 1993, 4, 46),
(56, '-', '3', 0, 1, 47),
(57, '-', '3', 0, 2, 47),
(58, '-', '3', 0, 3, 47),
(59, '-', '3', 0, 4, 47),
(60, 'SDN 1 Ronowijayan', '1', 2009, 1, 48),
(61, 'SMPN 2 Ponorogo', '1', 2012, 2, 48),
(62, 'SMKN 1 Jenangan Ponorogo', '1', 2015, 3, 48),
(63, 'ITB Bandung', '1', 2020, 4, 48),
(64, 'SDN 1 Ronowijayan', '1', 2010, 1, 49),
(65, 'SMPN 2 Ponorogo', '1', 2015, 2, 49),
(66, 'SMKN 1 Jenangan Ponorogo', '1', 2015, 3, 49),
(67, 'ITB Bandung', '1', 2015, 4, 49),
(68, '-', '2', 1, 1, 50),
(69, 'SDN 1 Slahung', '1', 2009, 1, 52),
(70, 'SMPN 1 Slahung', '1', 2012, 2, 52),
(71, 'SMAN 1 Slahung', '1', 2015, 3, 52),
(72, 'Universitas Slahung', '2', 2017, 4, 52),
(73, 'SD Bunga Hati Bangsa', '1', 2000, 1, 55),
(74, 'Chandra Kusuma', '1', 2003, 2, 55),
(75, 'SDN 2 Ronowijayan', '1', 2009, 1, 54),
(76, 'SMPN 2 Ponorogo', '1', 2012, 2, 54),
(77, 'SMKN 1 Jenangan Ponorogo', '1', 2015, 3, 54),
(78, '-', '3', 0, 4, 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(250) NOT NULL,
  `email_pengguna` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(50) DEFAULT NULL,
  `negara` varchar(50) DEFAULT NULL,
  `alamat` text,
  `agama` varchar(50) DEFAULT NULL,
  `j_kelamin` varchar(50) DEFAULT NULL,
  `ket_kawin` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(250) DEFAULT NULL,
  `no_ktp` int(50) DEFAULT NULL,
  `no_telp` int(50) DEFAULT NULL,
  `kedudukan` varchar(50) DEFAULT NULL,
  `status_registrasi` varchar(1) NOT NULL,
  `no_registrasi` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `email_pengguna`, `password`, `tmp_lahir`, `tgl_lahir`, `negara`, `alamat`, `agama`, `j_kelamin`, `ket_kawin`, `pekerjaan`, `no_ktp`, `no_telp`, `kedudukan`, `status_registrasi`, `no_registrasi`) VALUES
(48, 'Kunto Aji', 'kunto@yahoo.com', '8d045450ae16dc81213a75b725ee2760', 'Ponorogo', '29/09/1997', '1', 'Jln. Sultan Agung No. 120', '1', '1', '2', 'Freelance', 2147483647, 2147483647, '1', '8', 'r6MdaU'),
(49, 'Sasuke Uchiha', 'sasuke@yahoo.com', '202cb962ac59075b964b07152d234b70', 'Negeri Konoha', '07/07/2003', '1', 'Desa Konoha', '1', '1', '1', 'Ninja Hatori', 2147483647, 909121, '1', '8', '4cf3zE'),
(50, 'Asep', 'Asep@gmail.com', '05c06148414f67b2fd2421da67822d20', 'Batam', '02/02/1959', '1', 'Batam', '1', '1', '1', 'SWASTA', 2147483647, 7757645, '1', '3', NULL),
(51, 'tes', 'tes@tes.net', '28b662d883b6d76fd96e4ddc5e9ba780', 'batam', '05/05/1959', '1', 'batam 01', '1', '1', '2', 'wira', 865655, 8542, '1', '2', NULL),
(52, 'Ariel Rakadewa', 'ariel@yahoo.com', '4900d0a19b6894a4a514e9ff3afcc2c0', 'Ponorogo', '11/10/2006', '1', 'Slahung, Ponorogo', '1', '1', '1', 'Pelajar', 2147483647, 2147483647, '1', '8', 'C6H9Zy'),
(53, 'Ayah edi', 'edi@gmail.com', '05c06148414f67b2fd2421da67822d20', 'Batam', '14/02/1953', '1', 'Batam', '1', '1', '1', 'SWASTA', 2147483647, 564643, '2', '8', 'An3lsw'),
(54, 'Bayu Cakra Krisna Abimanyu', 'bayucakra20@gmail.com', '427f77ce0d9a3a2caff7c2109ca36a89', 'Ponorogo', '29/09/1997', '1', 'Jln. Let Jend Soeprapto Gg. 1 No. 8 Ronowijayan Siman Ponorogo', '1', '1', '2', 'Programmer', 31291920, 9391921, '1', '8', '3TBRTD'),
(55, 'terain', 'bagopsbarelang@yahoo.com', '8411fc733e7bd513070c2a4c38cc40aa', 'medan', '08/09/1985', '1', 'Vikamas', '1', '1', '2', 'Karyawan Swasta', 2147483647, 5415194, '1', '8', 'iJ5QRj'),
(56, 'Beni', 'databasebagops.barelang@gmail.com', '8411fc733e7bd513070c2a4c38cc40aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL),
(57, 'maizura', 'polsekblp88@gmail.com', 'ab6e61f61a594f44356864412f1a9da4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL),
(58, 'intelblp', 'intelblp@gmail.com', 'ab6e61f61a594f44356864412f1a9da4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `isi_pertanyaan` varchar(250) NOT NULL,
  `jawaban` text NOT NULL,
  `type_pertanyaan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=977 ;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `isi_pertanyaan`, `jawaban`, `type_pertanyaan`, `id_pengguna`) VALUES
(797, 'Apakah saudara pernah tersangkut perkara pidana?', 'Pernah', 1, 4),
(798, 'Dalam perkara apa?', 'Bertengkar', 1, 4),
(799, 'Bagaimana putusan / Vonis hakim?', 'Dibebaskan', 1, 4),
(800, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'Iya masih', 1, 4),
(801, 'Dalam perkara / kasus apa?', 'Tidak tahu', 1, 4),
(802, 'Sampai sejauh mana proses hukumnya?', 'Rahasia', 1, 4),
(803, 'Bagaimana hasilnya / putusan akhir?', 'Bebas', 1, 4),
(804, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'Pernah', 2, 4),
(805, 'Pelanggaran hukum dan atau norma-norma apa?', 'Pelanggaran Lalu Lintas', 2, 4),
(806, 'Sampai sejauh mana proses hukumnya?', 'Dibebaskan', 2, 4),
(807, 'Apakah saudara pernah tersangkut perkara pidana?', 'Pernah', 1, 5),
(808, 'Dalam perkara apa?', 'Modus cewek', 1, 5),
(809, 'Bagaimana putusan / Vonis hakim?', 'Dinyatakan Bersalah', 1, 5),
(810, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'Iya', 1, 5),
(811, 'Dalam perkara / kasus apa?', 'Jomblo', 1, 5),
(812, 'Sampai sejauh mana proses hukumnya?', 'Sudah 20 tahun berlalu', 1, 5),
(813, 'Bagaimana hasilnya / putusan akhir?', 'Masih ngambang', 1, 5),
(814, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'Pernah', 2, 5),
(815, 'Pelanggaran hukum dan atau norma-norma apa?', 'Melanggar lalu lintas', 2, 5),
(816, 'Sampai sejauh mana proses hukumnya?', 'Sudah jauh sekali', 2, 5),
(817, 'Apakah saudara pernah tersangkut perkara pidana?', 'Pernah', 1, 7),
(818, 'Dalam perkara apa?', 'Mengadili', 1, 7),
(819, 'Bagaimana putusan / Vonis hakim?', 'Bersalah', 1, 7),
(820, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'Tidak', 1, 7),
(821, 'Dalam perkara / kasus apa?', 'Tidak', 1, 7),
(822, 'Sampai sejauh mana proses hukumnya?', 'Tidak ', 1, 7),
(823, 'Bagaimana hasilnya / putusan akhir?', 'Mbatek Tidak', 1, 7),
(824, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'Pernah', 2, 7),
(825, 'Pelanggaran hukum dan atau norma-norma apa?', 'Lalu lintas', 2, 7),
(826, 'Sampai sejauh mana proses hukumnya?', 'Sudah jauh', 2, 7),
(827, 'Apakah saudara pernah tersangkut perkara pidana?', 'Paospdo', 1, 12),
(828, 'Dalam perkara apa?', 'pOpaospdo', 1, 12),
(829, 'Bagaimana putusan / Vonis hakim?', 'poaspdopaos', 1, 12),
(830, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'poaspdo', 1, 12),
(831, 'Dalam perkara / kasus apa?', 'poapsdo', 1, 12),
(832, 'Sampai sejauh mana proses hukumnya?', 'poapsdopo', 1, 12),
(833, 'Bagaimana hasilnya / putusan akhir?', 'poapsodf', 1, 12),
(834, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'paspdoapsdo', 2, 12),
(835, 'Pelanggaran hukum dan atau norma-norma apa?', 'poaspdoapsd', 2, 12),
(836, 'Sampai sejauh mana proses hukumnya?', 'poapsdopas', 2, 12),
(837, 'Apakah saudara pernah tersangkut perkara pidana?', 'Oaskdoaksd', 1, 13),
(838, 'Dalam perkara apa?', 'okasopdkP', 1, 13),
(839, 'Bagaimana putusan / Vonis hakim?', 'pokapsdokP', 1, 13),
(840, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'pKASPdok', 1, 13),
(841, 'Dalam perkara / kasus apa?', 'pokaspdkpok', 1, 13),
(842, 'Sampai sejauh mana proses hukumnya?', 'PAOOskdpok', 1, 13),
(843, 'Bagaimana hasilnya / putusan akhir?', 'poakspdok', 1, 13),
(844, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'Poaksdoko', 2, 13),
(845, 'Pelanggaran hukum dan atau norma-norma apa?', 'opkPAsdkpo', 2, 13),
(846, 'Sampai sejauh mana proses hukumnya?', 'pOKpdokasp', 2, 13),
(847, 'Apakah saudara pernah tersangkut perkara pidana?', '-', 1, 20),
(848, 'Dalam perkara apa?', '-', 1, 20),
(849, 'Bagaimana putusan / Vonis hakim?', '-', 1, 20),
(850, 'Apakah Saudara saat ini sedang dalam perkara pidana?', '-', 1, 20),
(851, 'Dalam perkara / kasus apa?', '-', 1, 20),
(852, 'Sampai sejauh mana proses hukumnya?', '-', 1, 20),
(853, 'Bagaimana hasilnya / putusan akhir?', '-', 1, 20),
(854, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', '-', 2, 20),
(855, 'Pelanggaran hukum dan atau norma-norma apa?', '-', 2, 20),
(856, 'Sampai sejauh mana proses hukumnya?', '-', 2, 20),
(857, 'Apakah saudara pernah tersangkut perkara pidana?', 'Tidak Pernah', 1, 19),
(858, 'Dalam perkara apa?', 'Pernah Tidak', 1, 19),
(859, 'Bagaimana putusan / Vonis hakim?', 'Bersalah', 1, 19),
(860, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'Tidak', 1, 19),
(861, 'Dalam perkara / kasus apa?', 'Membeli Buku', 1, 19),
(862, 'Sampai sejauh mana proses hukumnya?', 'Sudah 5 tahun berjalan', 1, 19),
(863, 'Bagaimana hasilnya / putusan akhir?', 'Dinyatakan Bebas', 1, 19),
(864, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'Pernah', 2, 19),
(865, 'Pelanggaran hukum dan atau norma-norma apa?', 'Melanggar lalu lintas', 2, 19),
(866, 'Sampai sejauh mana proses hukumnya?', 'Dinyatakan bersalah', 2, 19),
(867, 'Apakah saudara pernah tersangkut perkara pidana?', '', 1, 34),
(868, 'Dalam perkara apa?', '', 1, 34),
(869, 'Bagaimana putusan / Vonis hakim?', '', 1, 34),
(870, 'Apakah Saudara saat ini sedang dalam perkara pidana?', '', 1, 34),
(871, 'Dalam perkara / kasus apa?', '', 1, 34),
(872, 'Sampai sejauh mana proses hukumnya?', '', 1, 34),
(873, 'Bagaimana hasilnya / putusan akhir?', '', 1, 34),
(874, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', '', 2, 34),
(875, 'Pelanggaran hukum dan atau norma-norma apa?', '', 2, 34),
(876, 'Sampai sejauh mana proses hukumnya?', '', 2, 34),
(877, 'Apakah saudara pernah tersangkut perkara pidana?', 'Pernah', 1, 39),
(878, 'Dalam perkara apa?', 'Tidak', 1, 39),
(879, 'Bagaimana putusan / Vonis hakim?', 'Tidak', 1, 39),
(880, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'Tidak', 1, 39),
(881, 'Dalam perkara / kasus apa?', 'Tidak', 1, 39),
(882, 'Sampai sejauh mana proses hukumnya?', 'Tidak', 1, 39),
(883, 'Bagaimana hasilnya / putusan akhir?', 'Tidak', 1, 39),
(884, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'Tidak', 2, 39),
(885, 'Pelanggaran hukum dan atau norma-norma apa?', 'Tidak', 2, 39),
(886, 'Sampai sejauh mana proses hukumnya?', 'Tidak', 2, 39),
(887, 'Apakah saudara pernah tersangkut perkara pidana?', 'tidak pernah', 1, 26),
(888, 'Dalam perkara apa?', 'tidak pernah', 1, 26),
(889, 'Bagaimana putusan / Vonis hakim?', 'tidak pernah', 1, 26),
(890, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'tidak pernah', 1, 26),
(891, 'Dalam perkara / kasus apa?', 'tidak pernah', 1, 26),
(892, 'Sampai sejauh mana proses hukumnya?', 'tidak pernah', 1, 26),
(893, 'Bagaimana hasilnya / putusan akhir?', 'tidak pernah', 1, 26),
(894, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'tidak pernah', 2, 26),
(895, 'Pelanggaran hukum dan atau norma-norma apa?', 'tidak pernah', 2, 26),
(896, 'Sampai sejauh mana proses hukumnya?', 'tidak pernah', 2, 26),
(897, 'Apakah saudara pernah tersangkut perkara pidana?', 'tidak', 1, 42),
(898, 'Dalam perkara apa?', 'tidak', 1, 42),
(899, 'Bagaimana putusan / Vonis hakim?', 'tidak', 1, 42),
(900, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'tidak', 1, 42),
(901, 'Dalam perkara / kasus apa?', 'tidak', 1, 42),
(902, 'Sampai sejauh mana proses hukumnya?', 'tidak', 1, 42),
(903, 'Bagaimana hasilnya / putusan akhir?', 'tidak', 1, 42),
(904, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'tidak', 2, 42),
(905, 'Pelanggaran hukum dan atau norma-norma apa?', 'tidak', 2, 42),
(906, 'Sampai sejauh mana proses hukumnya?', 'tidak', 2, 42),
(907, 'Apakah saudara pernah tersangkut perkara pidana?', 'tidak pernah', 1, 46),
(908, 'Dalam perkara apa?', 'tidak pernah', 1, 46),
(909, 'Bagaimana putusan / Vonis hakim?', 'tidak pernah', 1, 46),
(910, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'tidak pernah', 1, 46),
(911, 'Dalam perkara / kasus apa?', 'tidak pernah', 1, 46),
(912, 'Sampai sejauh mana proses hukumnya?', 'tidak pernah', 1, 46),
(913, 'Bagaimana hasilnya / putusan akhir?', 'tidak pernah', 1, 46),
(914, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'tidak pernah', 2, 46),
(915, 'Pelanggaran hukum dan atau norma-norma apa?', 'tidak pernah', 2, 46),
(916, 'Sampai sejauh mana proses hukumnya?', 'tidak pernah', 2, 46),
(917, 'Apakah saudara pernah tersangkut perkara pidana?', '-', 1, 47),
(918, 'Dalam perkara apa?', '-', 1, 47),
(919, 'Bagaimana putusan / Vonis hakim?', '-', 1, 47),
(920, 'Apakah Saudara saat ini sedang dalam perkara pidana?', '-', 1, 47),
(921, 'Dalam perkara / kasus apa?', '-', 1, 47),
(922, 'Sampai sejauh mana proses hukumnya?', '-', 1, 47),
(923, 'Bagaimana hasilnya / putusan akhir?', '-', 1, 47),
(924, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', '-', 2, 47),
(925, 'Pelanggaran hukum dan atau norma-norma apa?', '-', 2, 47),
(926, 'Sampai sejauh mana proses hukumnya?', '-', 2, 47),
(927, 'Apakah saudara pernah tersangkut perkara pidana?', '-', 1, 48),
(928, 'Dalam perkara apa?', '-', 1, 48),
(929, 'Bagaimana putusan / Vonis hakim?', '-', 1, 48),
(930, 'Apakah Saudara saat ini sedang dalam perkara pidana?', '-', 1, 48),
(931, 'Dalam perkara / kasus apa?', '-', 1, 48),
(932, 'Sampai sejauh mana proses hukumnya?', '-', 1, 48),
(933, 'Bagaimana hasilnya / putusan akhir?', '-', 1, 48),
(934, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', '-', 2, 48),
(935, 'Pelanggaran hukum dan atau norma-norma apa?', '-', 2, 48),
(936, 'Sampai sejauh mana proses hukumnya?', '-', 2, 48),
(937, 'Apakah saudara pernah tersangkut perkara pidana?', '-', 1, 49),
(938, 'Dalam perkara apa?', '-', 1, 49),
(939, 'Bagaimana putusan / Vonis hakim?', '-', 1, 49),
(940, 'Apakah Saudara saat ini sedang dalam perkara pidana?', '-', 1, 49),
(941, 'Dalam perkara / kasus apa?', '-', 1, 49),
(942, 'Sampai sejauh mana proses hukumnya?', '-', 1, 49),
(943, 'Bagaimana hasilnya / putusan akhir?', '-', 1, 49),
(944, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', '-', 2, 49),
(945, 'Pelanggaran hukum dan atau norma-norma apa?', '-', 2, 49),
(946, 'Sampai sejauh mana proses hukumnya?', '-', 2, 49),
(947, 'Apakah saudara pernah tersangkut perkara pidana?', '-', 1, 52),
(948, 'Dalam perkara apa?', '-', 1, 52),
(949, 'Bagaimana putusan / Vonis hakim?', '-', 1, 52),
(950, 'Apakah Saudara saat ini sedang dalam perkara pidana?', '-', 1, 52),
(951, 'Dalam perkara / kasus apa?', '-', 1, 52),
(952, 'Sampai sejauh mana proses hukumnya?', '-', 1, 52),
(953, 'Bagaimana hasilnya / putusan akhir?', '-', 1, 52),
(954, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', '-', 2, 52),
(955, 'Pelanggaran hukum dan atau norma-norma apa?', '-', 2, 52),
(956, 'Sampai sejauh mana proses hukumnya?', '-', 2, 52),
(957, 'Apakah saudara pernah tersangkut perkara pidana?', 'tidak pernah', 1, 55),
(958, 'Dalam perkara apa?', 'tidak pernah', 1, 55),
(959, 'Bagaimana putusan / Vonis hakim?', 'tidak pernah', 1, 55),
(960, 'Apakah Saudara saat ini sedang dalam perkara pidana?', 'tidak pernah', 1, 55),
(961, 'Dalam perkara / kasus apa?', 'tidak pernah', 1, 55),
(962, 'Sampai sejauh mana proses hukumnya?', 'tidak pernah', 1, 55),
(963, 'Bagaimana hasilnya / putusan akhir?', 'tidak pernah', 1, 55),
(964, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', 'tidak pernah', 2, 55),
(965, 'Pelanggaran hukum dan atau norma-norma apa?', 'tidak pernah', 2, 55),
(966, 'Sampai sejauh mana proses hukumnya?', 'tidak pernah', 2, 55),
(967, 'Apakah saudara pernah tersangkut perkara pidana?', '-', 1, 54),
(968, 'Dalam perkara apa?', '-', 1, 54),
(969, 'Bagaimana putusan / Vonis hakim?', '-', 1, 54),
(970, 'Apakah Saudara saat ini sedang dalam perkara pidana?', '-', 1, 54),
(971, 'Dalam perkara / kasus apa?', '-', 1, 54),
(972, 'Sampai sejauh mana proses hukumnya?', '-', 1, 54),
(973, 'Bagaimana hasilnya / putusan akhir?', '-', 1, 54),
(974, 'Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya?', '-', 2, 54),
(975, 'Pelanggaran hukum dan atau norma-norma apa?', '-', 2, 54),
(976, 'Sampai sejauh mana proses hukumnya?', '-', 2, 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan2`
--

CREATE TABLE IF NOT EXISTS `pertanyaan2` (
  `id_pertanyaan2` int(11) NOT NULL AUTO_INCREMENT,
  `isi_pertanyaan2` varchar(250) NOT NULL,
  `jawaban2` text NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_pertanyaan2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `pertanyaan2`
--

INSERT INTO `pertanyaan2` (`id_pertanyaan2`, `isi_pertanyaan2`, `jawaban2`, `id_pengguna`) VALUES
(2, 'Pernahkah Saudara pergi ke luar negeri?', 'Pernah pada tahun 2012 di Tokyo Jepang', 4),
(3, 'Pernahkah Saudara pergi ke luar negeri?', 'Pernah, ke bulan', 5),
(4, 'Pernahkah Saudara pergi ke luar negeri?', 'Pernah, ke london inggris pada acara presentasi hasil karya ke google', 7),
(5, 'Pernahkah Saudara pergi ke luar negeri?', 'Pernah', 12),
(6, 'Pernahkah Saudara pergi ke luar negeri?', 'Paoksdpoaksd', 13),
(7, 'Pernahkah Saudara pergi ke luar negeri?', 'JERMAN, NYARI RAWON', 20),
(8, 'Pernahkah Saudara pergi ke luar negeri?', 'Pernah, dalam rangka presentasi hasil karya di Microsoft', 19),
(9, 'Pernahkah Saudara pergi ke luar negeri?', '', 34),
(10, 'Pernahkah Saudara pergi ke luar negeri?', 'Pernah', 39),
(11, 'Pernahkah Saudara pergi ke luar negeri?', 'tidak pernah', 26),
(12, 'Pernahkah Saudara pergi ke luar negeri?', 'gak', 42),
(13, 'Pernahkah Saudara pergi ke luar negeri?', 'tidak pernah', 46),
(14, 'Pernahkah Saudara pergi ke luar negeri?', 'tidak', 47),
(15, 'Pernahkah Saudara pergi ke luar negeri?', 'pernah, ke dubai', 48),
(16, 'Pernahkah Saudara pergi ke luar negeri?', '-', 49),
(17, 'Pernahkah Saudara pergi ke luar negeri?', 'Pernah, ke singapura', 52),
(18, 'Pernahkah Saudara pergi ke luar negeri?', 'Tidak', 53),
(19, 'Pernahkah Saudara pergi ke luar negeri?', 'tidak pernah', 55),
(20, 'Pernahkah Saudara pergi ke luar negeri?', 'Pernah, ke Tokyo Jepang pada acara tahunan ', 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggungan_keluarga`
--

CREATE TABLE IF NOT EXISTS `tanggungan_keluarga` (
  `id_tanggungan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tanggungan` varchar(250) NOT NULL,
  `alamat_tanggungan` text NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_tanggungan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tanggungan_keluarga`
--

INSERT INTO `tanggungan_keluarga` (`id_tanggungan`, `nama_tanggungan`, `alamat_tanggungan`, `id_pengguna`) VALUES
(1, '', 'Jln. Sultan Agung', 48),
(2, 'Bayu cakra', 'Ponorogo\r\n', 48),
(3, 'Tanggungan', 'Ponorogo', 49),
(4, 'Bella', 'Singosaren, Ponorogo', 52),
(5, 'Javas Edsel', 'Jln. Krakatau', 54);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `user_name`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
