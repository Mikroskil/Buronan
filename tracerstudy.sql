-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2013 at 05:01 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tracerstudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `latar`
--

CREATE TABLE IF NOT EXISTS `latar` (
  `satu` text NOT NULL,
  `dua` text NOT NULL,
  `tiga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latar`
--

INSERT INTO `latar` (`satu`, `dua`, `tiga`) VALUES
('Studi pelacakan alumni (Tracer Study) menjadi kian diakui peran pentingnya baik secara teoretis maupun untuk aplikasi praktis. Tracer Study dapat memberikan masukan berharga bagi relevansi perguruan tinggi di tengah masyarakat baik dari segi pengelolaan akademik maupun kontribusi pendidikan tinggi bagi pembangunan bangsa secara keseluruhan. Diskursus mengenai hubungan antara perguruan tinggi dan dunia kerja juga membutuhkan dukungan data dan informasi dari Tracer Study.', 'STMIK Mikroskil adalah sebuah perguruan tinggi swasta di Kota Medan, Sumatera Utara yang penekanannya pada teknologi informasi.Tracer Study yang reguler diperlukan untuk memantau perkembangan dan tren dalam hal link-match pendidikan tinggi dan dunia kerja, evaluasi upaya peningkatan kinerja pendidikan dari segi proses, output, dan outcome serta memberikan masukan teratur dan komprehensif terhadap dunia pendidikan tinggi dan dunia kerja di Indonesia. Tracer study ini juga bertujuan agar kita masih bisa tetap menjalin hubungan satu sama lain, menjembatani bagi pihak perusahaan/instansi yang ingin mencari SDM dari mahasiswa dan alumni STMIK - Mikroskil serta mengetahui tolok ukur sejauh mana kemajuan pendidikan di STMIK - Mikroskil dalam menghasilkan lulusannya.', 'Tracer study ini dilaksanakan untuk menjaring informasi/masukan dari alumni sebagai salah satu dasar yang sangat penting bagi evaluasi dan pengembangan STMIK Mikroskil, Fakultas dan prodi dalam bidang kurikulum, proses pembelajaran, sarana prasarana, dan pelayanan. Data/informasi bersifat rahasia, sehingga tidak akan dipindah tangankan tanpa seijin yang bersangkutan dan semata-mata hanya digunakan untuk pengembangan dan memotret hubungan antara pengalaman pembelajaran di dunia pendidikan tinggi dan prasyarat serta kinerja di dunia kerja.\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
