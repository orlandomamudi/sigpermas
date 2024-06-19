-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2024 at 04:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigpermas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `data_masjid`
--

CREATE TABLE `data_masjid` (
  `id_masjid` int NOT NULL,
  `nama_masjid` varchar(250) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `luas_tanah` varchar(150) NOT NULL,
  `status_tanah` varchar(150) NOT NULL,
  `luas_bangunan` varchar(150) NOT NULL,
  `daya_tampung` int NOT NULL,
  `jumlah_pengurus` int NOT NULL,
  `jumlah_imam` int NOT NULL,
  `jumlah_khatib` int NOT NULL,
  `fasilitas` varchar(250) NOT NULL,
  `kegiatan` varchar(250) NOT NULL,
  `latitude` varchar(150) NOT NULL,
  `longitude` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_masjid`
--

INSERT INTO `data_masjid` (`id_masjid`, `nama_masjid`, `alamat`, `luas_tanah`, `status_tanah`, `luas_bangunan`, `daya_tampung`, `jumlah_pengurus`, `jumlah_imam`, `jumlah_khatib`, `fasilitas`, `kegiatan`, `latitude`, `longitude`) VALUES
(1, 'An-Nuur', 'Desa Dulamayo', '888 m^2', 'wakaf', '225 m^2', 150, 7, 3, 0, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir, sound system dan multimedia', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf', '0.600655', '122.867311'),
(2, 'Ar-Rayan', 'Dulamayo', '609 m^2', 'wakaf', '169 m^2', 150, 7, 2, 5, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf, menyelenggarakan kegiatan pendidikan (TPA, madrasah, pusat kegiatan belajar masyarakat)\r\n', '0.605739', '122.856919'),
(3, 'Al-Magfirah', 'Dulamayo', '698 m^2', 'wakaf', '81 m^2', 100, 7, 2, 3, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n', '0.605745', '122.855646'),
(4, 'Baitul Makmur', 'Huntulohulawa', '375 m^2', 'wakaf', '121 m^2', 100, 7, 2, 3, 'sarana ibadah, tempat wudhu, kamar mandi, tempat parkir, sound system, kipas angin, dapur umum\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf, menyelenggarakan kegiatan pendidikan (TPA, madrasah, pusat kegiatan belajar masyarakat)\r\n', '0.596098', '122.867176'),
(5, 'Al-Muttaqien', 'Huntulohulawa', '400 m^2', 'wakaf', '81 m^2', 60, 7, 2, 3, 'sarana ibadah, tempat wudhu, sound system, pendingin ruangan\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf, menyelenggarakan kegiatan pendidikan (TPA, madrasah, pusat kegiatan belajar masyarakat)\r\n', '0.592277', '122.863008'),
(6, 'Al-Ukhuwa', 'Bongohulawa', '1539 m^2', 'wakaf', '81 m^2', 60, 7, 2, 3, 'sarana ibadah, tempat wudhu, kamar mandi, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.5954621\r\n', '122.8355585'),
(7, 'Al-Ikhlas', 'Bongohulawa', '522 m^2', 'wakaf', '90 m^2', 80, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '213123123', '123123123'),
(8, 'Al-Falah', 'Bongohulawa', '398 m^2', 'wakaf', '90 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi, tempat parkir, sound system\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.5967448\r\n', '122.831544'),
(9, 'Al-Muhajirin', 'Bongohulawa', '433 m^2', 'wakaf', '64 m^2', 80, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.595639\r\n', '122.8355234'),
(10, 'Al-Kadir', 'Bongohulawa', '450 m^2', 'wakaf', '64 m^2', 90, 7, 2, 2, 'sarana ibadah, tempat wudhu, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.5956528\r\n', '122.8478219'),
(11, 'Al-Amin', 'Bongohulawa', '400 m^2', 'wakaf', '64 m^2', 90, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan sholat jumat\r\n', '0.595959\r\n', '122.8331729'),
(12, 'Fastabikul Khairat', 'Dulamayo', '617 m^2', 'wakaf', '81 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n', '0.602996', '122.851282'),
(13, 'Al-Ikhlas', 'Owalanga', '200 m^2', 'wakaf', '144 m^2', 100, 7, 3, 2, 'sarana ibadah, tempat wudhu, kamar mandi, \r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.601470', '122.819272'),
(14, 'As-Syuhada', 'Molas', '750 m^2', 'wakaf', '121', 150, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.594611', '122.800941'),
(15, 'An-Nur', 'Molopatodu', '750 m^2', 'wakaf', '225 m^2', 150, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi,', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.594257', '122.815295'),
(16, 'Nurul Iman', 'Molopatodu', '400 m^2', 'wakaf', '225m^2', 150, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.595139', '122.816299'),
(17, 'Baitul Rahman', 'Molopatodu', '1000 m^2', 'wakaf', '100 m^2', 150, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.597090', '122.819097'),
(18, 'Al-Magfirah', 'Owalanga', '625 m^2', 'wakaf', '144 m^2', 100, 7, 5, 2, 'sarana ibadah, tempat wudhu, kamar mandi, \r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.604274', '122.814436'),
(19, 'Al-Mujahidin', 'Molopatodu', '300 m^2', 'wakaf', '100m^2', 150, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.597711', '122.823149'),
(20, 'Al-Aqsa', 'Otopade', '400 m^2', 'wakaf', '64 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.601969', '122.782297'),
(21, 'Al-Magfirah', 'Otopade', '625 m^2', 'wakaf', '169 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.599275', '122.785067'),
(22, 'Al-Hidayah', 'Otopade', '500 m^2', 'wakaf', '81 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.599154', '122.788882'),
(23, 'Ar-Rahim', 'Otopade', '1000 m^2', 'wakaf', '64 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.587593', '122.774586'),
(24, 'AD-DIN', 'Liyoto', '144 m^2', 'wakaf', '64 m^2', 80, 7, 2, 2, '', '', '0.576150', '122.769616'),
(25, 'Al-Hijrah', 'Liyoto', '625 m^2', 'wakaf', '160 m^2', 100, 7, 2, 2, '', '', '0.573560', '122.765836'),
(26, 'Al-Muqarramah', 'Liyoto', '400 m^2', 'wakaf', '64 m^2', 80, 7, 2, 2, 'sarana ibadah, tempat wudhu\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan sholat jumat\r\n', '0.578801', '122.760450'),
(28, 'Nurul Iman', 'Otopade', '144 m^2', 'wakaf', '64 m^2', 80, 5, 1, 1, 'sarana ibadah', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan sholat jumat\r\n', '0.593644', '122.775908'),
(29, 'Al-Ikhlas', 'Batulayar', '400 m^2', 'wakaf', '100 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/ wc\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat,\r\n', '0.601753', '122.765796'),
(30, 'Al-Muhajirin', 'Batulayar', '144 m^2', 'wakaf', '64 m^`2', 50, 5, 2, 1, 'sarana ibadah', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan sholat jumat\r\n', '0.596762', '122.766951'),
(31, 'An-Nur', 'Tohupo', '900 m^2', 'wakaf', '224 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n', '0.568459', '122.854510'),
(32, 'Al-Mu\'jizat', 'Tohupo', '900 m^2', 'wakaf', '81 m^2', 100, 7, 3, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n', '0.564405', '122.849274'),
(33, 'Fastabiqul Khairat', 'Tohupo', '625 m^2', 'wakaf', '81 m^2', 100, 7, 3, 2, 'sarana ibadah, tempat wudhu, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n', '0.559224', '122.847050'),
(34, 'Babussalam', 'Upomela', '340 m^2', 'wakaf', '81 m^2', 80, 5, 2, 2, 'sarana ibadah, tempat wudhu, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.587265', '122.861907'),
(35, 'Az-Zikra', 'Upomela', '410 m^2', 'wakaf', '169 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n\r\n', '0.584191', '122.859122'),
(36, 'Al-Ikhlas', 'Upomela', '410 m^2', 'wakaf', '289 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n', '0.577935', '122.856066'),
(37, 'Al-Magfirah', 'Upomela', '410 m^2', 'wakaf', '280 m^2', 100, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, sound system dan multimedia\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n', '0.586184', '122.853941'),
(38, 'Al-Hayat', 'Upomela', '700 m^2', 'wakaf', '110 m^2', 90, 7, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/ wc\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.582691', '122.840917'),
(39, 'Nur Jannah 2', 'Tohupo', '289 m^2', 'wakaf', '144 m^2', 90, 7, 2, 2, 'sarana ibadah, tempat wudhu\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat, pemberdayaan zakat, infaq, shodaqoh dan wakaf\r\n', '0.563130', '122.854290'),
(40, 'Al-Rahim', 'Batuloreng', '144 m^2', 'wakaf', '64 m^2', 60, 5, 2, 2, 'sarana ibadah, tempat wudhu\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.562429', '122.838492'),
(41, 'Ar-Rahman', 'Batuloreng', '900 m^2', 'wakaf', '64 m^2', 60, 5, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.562429', '122.838492'),
(42, 'Sabilulhaq', 'Batuloreng', '288 m^2', 'wakaf', '64 m^2', 60, 5, 2, 2, 'sarana ibadah, tempat wudhu, kamar mandi/wc, tempat parkir\r\n', 'menyelenggarakan ibadah sholat fardhu, menyelenggarakan kegiatan hari besar islam, menyelenggarakan sholat jumat\r\n', '0.550493', '122.835599'),
(43, 'Al-Ikhlas', 'Batuloreng', '900 m^2', 'wakaf', '144 m^2', 140, 7, 2, 2, '', '', '0.562242', '122.831215');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_masjid`
--
ALTER TABLE `data_masjid`
  ADD PRIMARY KEY (`id_masjid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_masjid`
--
ALTER TABLE `data_masjid`
  MODIFY `id_masjid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
