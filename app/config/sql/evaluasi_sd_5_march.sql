-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2015 at 07:37 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evaluasi_sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(32) NOT NULL,
  `details` text NOT NULL,
  `true` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` VALUES(1, 1, 'Jawaban salah', 0, '2011-12-06 19:50:39', '2011-12-06 19:50:39');
INSERT INTO `answers` VALUES(2, 1, 'Jawaban salah', 0, '2011-12-06 19:50:39', '2011-12-06 19:50:39');
INSERT INTO `answers` VALUES(3, 1, 'Jawaban salah', 1, '2011-12-06 19:50:39', '2012-04-08 18:10:04');
INSERT INTO `answers` VALUES(4, 1, 'Jawaban Betul', 0, '2011-12-06 19:50:39', '2012-04-08 18:09:56');
INSERT INTO `answers` VALUES(5, 2, 'Jawaban Salah', 0, '2011-12-06 19:53:00', '2011-12-06 19:53:00');
INSERT INTO `answers` VALUES(6, 2, 'Jawaban Salah', 0, '2011-12-06 19:53:00', '2011-12-06 19:53:00');
INSERT INTO `answers` VALUES(7, 2, 'Jawaban Betul', 1, '2011-12-06 19:53:00', '2011-12-06 19:53:00');
INSERT INTO `answers` VALUES(8, 2, 'Jawaban Salah', 0, '2011-12-06 19:53:00', '2011-12-06 19:53:00');
INSERT INTO `answers` VALUES(9, 3, 'Jawaban Salah', 0, '2011-12-06 19:53:35', '2011-12-06 19:53:35');
INSERT INTO `answers` VALUES(10, 3, 'Jawaban Salah', 0, '2011-12-06 19:53:35', '2011-12-06 19:53:35');
INSERT INTO `answers` VALUES(11, 3, 'Jawaban Betul', 1, '2011-12-06 19:53:35', '2011-12-06 19:53:35');
INSERT INTO `answers` VALUES(12, 3, 'Jawaban Salah', 0, '2011-12-06 19:53:35', '2011-12-06 19:53:35');
INSERT INTO `answers` VALUES(13, 4, 'Ini salah', 0, '2012-07-30 22:24:57', '2012-07-30 22:24:57');
INSERT INTO `answers` VALUES(14, 4, 'Ini salah', 0, '2012-07-30 22:24:57', '2012-07-30 22:24:57');
INSERT INTO `answers` VALUES(15, 4, 'Ini salah', 0, '2012-07-30 22:24:57', '2012-07-30 22:24:57');
INSERT INTO `answers` VALUES(16, 4, 'Ini betul', 1, '2012-07-30 22:24:57', '2012-07-30 22:24:57');
INSERT INTO `answers` VALUES(17, 5, 'Ini jawaban', 0, '2012-07-30 22:43:19', '2012-07-30 22:43:19');
INSERT INTO `answers` VALUES(18, 5, 'Ini jawaban2', 1, '2012-07-30 22:43:19', '2012-07-30 22:43:19');
INSERT INTO `answers` VALUES(19, 5, 'Ini jawaban', 0, '2012-07-30 22:43:19', '2012-07-30 22:43:19');
INSERT INTO `answers` VALUES(20, 5, 'Ini jawaban', 0, '2012-07-30 22:43:19', '2012-07-30 22:43:19');
INSERT INTO `answers` VALUES(21, 6, 'jawaban 1', 0, '2012-07-30 22:51:48', '2012-07-30 22:51:48');
INSERT INTO `answers` VALUES(22, 6, 'jawaban 1', 0, '2012-07-30 22:51:48', '2012-07-30 22:51:48');
INSERT INTO `answers` VALUES(23, 6, 'jawaban 1', 0, '2012-07-30 22:51:48', '2012-07-30 22:51:48');
INSERT INTO `answers` VALUES(24, 6, 'jawaban 1', 1, '2012-07-30 22:51:48', '2012-07-30 22:51:48');
INSERT INTO `answers` VALUES(25, 7, 'jh', 0, '2012-07-31 20:16:58', '2012-07-31 20:16:58');
INSERT INTO `answers` VALUES(26, 7, 'jk', 0, '2012-07-31 20:16:58', '2012-07-31 20:16:58');
INSERT INTO `answers` VALUES(27, 7, 'k', 0, '2012-07-31 20:16:58', '2012-07-31 20:16:58');
INSERT INTO `answers` VALUES(28, 7, 'kl', 1, '2012-07-31 20:16:58', '2012-07-31 20:16:58');
INSERT INTO `answers` VALUES(29, 8, 'sdf', 0, '2012-07-31 20:25:37', '2012-07-31 20:25:37');
INSERT INTO `answers` VALUES(30, 8, 'sdf', 0, '2012-07-31 20:25:37', '2012-07-31 20:25:37');
INSERT INTO `answers` VALUES(31, 8, 'sdf', 0, '2012-07-31 20:25:37', '2012-07-31 20:25:37');
INSERT INTO `answers` VALUES(32, 8, 'sdf', 1, '2012-07-31 20:25:37', '2012-07-31 20:25:37');
INSERT INTO `answers` VALUES(33, 9, 'Jawab', 0, '2012-07-31 20:26:47', '2012-07-31 20:26:47');
INSERT INTO `answers` VALUES(34, 9, 'jawab', 0, '2012-07-31 20:26:47', '2012-07-31 20:26:47');
INSERT INTO `answers` VALUES(35, 9, 'jawab', 0, '2012-07-31 20:26:47', '2012-07-31 20:26:47');
INSERT INTO `answers` VALUES(36, 9, 'jawab', 1, '2012-07-31 20:26:47', '2012-07-31 20:26:47');
INSERT INTO `answers` VALUES(37, 10, 'sfd', 0, '2012-07-31 20:34:20', '2012-07-31 20:34:20');
INSERT INTO `answers` VALUES(38, 10, 'sfd', 0, '2012-07-31 20:34:20', '2012-07-31 20:34:20');
INSERT INTO `answers` VALUES(39, 10, 'sdf', 0, '2012-07-31 20:34:20', '2012-07-31 20:34:20');
INSERT INTO `answers` VALUES(40, 10, 'fsd', 1, '2012-07-31 20:34:20', '2012-07-31 20:34:20');
INSERT INTO `answers` VALUES(41, 11, 'asf', 0, '2012-07-31 20:36:38', '2012-07-31 20:36:38');
INSERT INTO `answers` VALUES(42, 11, 'sdf', 0, '2012-07-31 20:36:38', '2012-07-31 20:36:38');
INSERT INTO `answers` VALUES(43, 11, 'sdf', 1, '2012-07-31 20:36:38', '2012-07-31 20:36:38');
INSERT INTO `answers` VALUES(44, 11, 'sdf', 0, '2012-07-31 20:36:38', '2012-07-31 20:36:38');
INSERT INTO `answers` VALUES(53, 14, 'Jaawab a', 0, '2012-07-31 22:16:35', '2012-07-31 22:16:35');
INSERT INTO `answers` VALUES(54, 14, 'Jaawab a', 0, '2012-07-31 22:16:35', '2012-07-31 22:16:35');
INSERT INTO `answers` VALUES(55, 14, 'Jaawab a', 0, '2012-07-31 22:16:35', '2012-07-31 22:16:35');
INSERT INTO `answers` VALUES(56, 14, 'Jaawab a', 1, '2012-07-31 22:16:35', '2012-07-31 22:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` VALUES(1, 'BSE(Buku Sekolah Elektronik)', NULL, NULL, NULL, 1, '2014-04-03', '2014-04-03');
INSERT INTO `categories` VALUES(2, 'BSE Non Kemendiknas', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(3, 'Character Building', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(4, 'Life Skill', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(5, 'Komputer', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(6, 'Fiksi', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(7, 'Dokumenter Sejarah Indonesia', NULL, 'Dokumenter Sejarah Indonesia', NULL, 2, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(8, 'IPTEK', NULL, 'IPTEK', NULL, 2, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(9, 'Life Skill', NULL, 'Life Skill', NULL, 2, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(10, 'Carachter Building', NULL, 'Carachter Building', NULL, 2, '0000-00-00', '0000-00-00');
INSERT INTO `categories` VALUES(40, 'Mata Pelajaran', NULL, NULL, NULL, 2, '2014-05-12', '2014-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `pelajarans`
--

CREATE TABLE `pelajarans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pelajarans`
--

INSERT INTO `pelajarans` VALUES(1, 'Matematika', 'matematika', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(4, 'Bahasa Indonesia', 'bahasa-indonesia', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(5, 'Bahasa Inggris', 'bahasa-inggris	', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(6, 'PPKN', 'ppkn', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(8, 'Kimia', 'kimia', '2012-06-11 04:57:13', '2012-06-11 04:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(32) DEFAULT NULL,
  `tgl_berdiri` year(4) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `license_key` varchar(100) DEFAULT NULL,
  `val_sync` varchar(100) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `time_ganda_mudah` int(12) NOT NULL,
  `time_ganda_sedang` int(12) NOT NULL,
  `time_ganda_sulit` int(12) NOT NULL,
  `time_essay_mudah` int(12) NOT NULL,
  `time_essay_sedang` int(12) NOT NULL,
  `time_essay_sulit` int(12) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` VALUES(1, 'SDN 15 pagi', 'ASDFSDFDSAFASDF', '45556456456', 1987, 1, 'taufiq.ridha@gmail.com', '', '', 'img/2011-09-01-200407tut-wuri-handayani.png', 1, 2, 3, 1, 2, 3, '2012-06-25 08:34:46', '2014-03-26 00:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `tipe` tinyint(2) NOT NULL,
  `level` int(3) NOT NULL,
  `kelas` int(3) NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `answer2` text,
  `answer_a` text NOT NULL,
  `answer_b` text NOT NULL,
  `answer_c` text NOT NULL,
  `answer_d` text NOT NULL,
  `answer_true` tinyint(2) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=239 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` VALUES(118, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 6, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, 'files/quizz/download_(2).jpg', '', '2014-03-26 12:36:13', '2014-05-13 04:25:34');
INSERT INTO `questions` VALUES(117, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(116, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(115, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(114, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(113, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(112, 'Ini soal baru sekali', 1, 1, 1, 0, NULL, 'ini jawaban a', 'ini jawaban b', 'ini jawaban c', 'ini jawaban d', 2, 'files/quizz/film_ss.png', 'files/quizz/bloodcare_tvc1.flv', '2014-03-26 12:30:57', '2014-05-13 04:55:30');
INSERT INTO `questions` VALUES(59, 'entrybaru', 1, 2, 1, 0, NULL, 'sdf', 'sdf', 'sf', 'dsf', 3, NULL, NULL, '2012-08-11 01:48:31', '2012-08-11 01:48:31');
INSERT INTO `questions` VALUES(111, 'Latar belakang lahirnya pemerintahan reformasi adalah ....', 1, 1, 1, 0, NULL, 'adanya penyimpangan-penyimpangan pemerintah Orde Baru', 'utang luar negeri yang amat besar samliai tidak terbayar', 'para mahasiswa sudah bosan dengan gaya pemerintahan Pak Harto', 'untuk menciptakan pemerintahan yang terbuka, jujur, dan demokratis', 4, NULL, NULL, '2014-03-26 00:34:11', '2014-03-26 00:34:11');
INSERT INTO `questions` VALUES(109, 'Contoh soal essay', 2, 1, 1, 0, 'Ini adalah jawaban essay', '', '', '', '', 0, NULL, NULL, '2014-03-25 22:28:16', '2014-03-25 22:28:26');
INSERT INTO `questions` VALUES(110, 'Perubahan suatu bangsa menuju kearah kondisi yang lebih baik atau buruk pada\r\nhakikatnya', 1, 1, 1, 0, NULL, 'ditentukan dalam kerjsama regional', 'sangat dipengaruhi oleh situasi dunia', 'ditentukan oleh situasi negara-negara tetangga', 'tergantung dari usaha bangsa itu sendiri', 4, NULL, NULL, '2014-03-26 00:33:26', '2014-03-26 00:33:26');
INSERT INTO `questions` VALUES(108, 'Keadilan sosial dalam good governance (kebijakan pemerintah yang baik) terimplementasi \r\ndalam:', 1, 1, 1, 0, NULL, 'pemerataan pembangunan dan hasil-hasilnya', 'pertumbuhan ekonomi yang cukup tinggi', 'stabilitas nasional yang sehat dan dinamis', 'program Inpres Desa Tertinggal (IDT)', 3, NULL, NULL, '2014-03-25 22:21:18', '2014-03-26 00:29:47');
INSERT INTO `questions` VALUES(98, 'Dalam mencapai tujuan politik bebas aktif, Indonesia pada dasarnya menjalankan politik ....', 1, 1, 1, 0, NULL, 'netral', 'damai', 'isolasi', 'terpadu', 1, NULL, NULL, '2014-03-25 21:59:37', '2014-03-25 21:59:37');
INSERT INTO `questions` VALUES(99, 'Segala kebijakan pemerintah yang berkaitan dengan negara lain atau subjek hukum\r\ninternasional lain guna mewujudkan tujuan nasional, disebut ....', 1, 1, 1, 0, NULL, 'kerja sama intemasional', 'perjanjian internasional', 'hubungan diplomatik', 'hubungan luar negeri', 2, NULL, NULL, '2014-03-25 22:00:23', '2014-03-25 22:00:23');
INSERT INTO `questions` VALUES(100, 'Pada dasarnya politik yang dijalankan dalam kebijakan pemerintah Indonesia mengabdi pada kepentingan ....', 1, 1, 1, 0, NULL, 'nasional', 'internasional', 'manusia', 'dunia', 3, NULL, NULL, '2014-03-25 22:01:16', '2014-03-25 22:01:16');
INSERT INTO `questions` VALUES(101, 'Menurut ketentuan hukum yang berlaku, lembaga yang mewakili pelaksanaan politik luar \r\nnegeri di negeri asing adalah ...', 1, 1, 1, 0, NULL, 'Presiden Indonesia', 'Menteri Luar Negeri', 'Dubes Luar Biasa', 'Corp Consulat', 2, NULL, NULL, '2014-03-25 22:01:59', '2014-03-25 22:01:59');
INSERT INTO `questions` VALUES(102, 'Arah politik luar negeri bebas aktif berorientasi dan menitikberatkan pada hal', 1, 1, 1, 0, NULL, 'solidaritas antara negara-negara persernakmuran', 'peningkatan kemandirian bangsa lain', 'upaya menjadikan Indonesia dikenal dunia', 'kerja sama internasional bagi kesejahteraan pejabat', 3, NULL, NULL, '2014-03-25 22:02:46', '2014-03-25 22:02:46');
INSERT INTO `questions` VALUES(103, 'Dalam penjelasan Pasal 32 UUD 1945 yang dimaksud kebudayaan bangsa adalah ....', 1, 1, 1, 0, NULL, 'kebudayaan yang timbul sebagai usaha budi daya rakyat', 'seluruh kebudayaan yang Aa di Indonesia', 'kebudayaan daerah yang masih terpelihara', 'perpaduan unsur budaya daerah dengan budaya asing', 3, NULL, NULL, '2014-03-25 22:03:38', '2014-03-25 22:03:38');
INSERT INTO `questions` VALUES(104, 'Pelaksanaan Pembangunan Nasional sebagai pengamalan Pancasila, khususnya\r\nKetuhanan Yang Maha Esa Indonesia bertujuan ....', 1, 1, 1, 0, NULL, 'meningkatkan martabat serta hak dan kewajiban asasi manusia warga negara', 'peningkatan pembinaan bangsa di semua bidang kehidupan', 'mewujudkan masyarakat adil dan makmur', 'memajukan kesejahteraan umum', 3, NULL, NULL, '2014-03-25 22:04:17', '2014-03-25 22:04:17');
INSERT INTO `questions` VALUES(105, 'Cita-cita ekonomi nasional yang berdasarkan ekonmi kerakyatan mengutamakan ....', 1, 1, 1, 0, NULL, 'pemenuhan kesejahteraan seluruh rakyat Indonesia', 'tiap-tiap warga negara memperolch apa yang dituntutnya', 'tidak pilih kasih atau tidak berat sebelah', 'dapat menikmati hidup terhormat dan tercukupi kebutuhan-kebutuhan hidupnya', 4, NULL, NULL, '2014-03-25 22:05:06', '2014-03-25 22:05:06');
INSERT INTO `questions` VALUES(106, 'Berikut ini merupakan masalah yang rawan yang perlu mendapat perhatian, kecuali ....', 1, 1, 1, 0, NULL, 'masalah kesenjangan sosial', 'tingkat pendidikan yang rendah', 'budaya korupsi, kolusi, dan nepotisme', 'ketersediaan lapangan pekerjaan yang telah memadai', 3, NULL, NULL, '2014-03-25 22:05:47', '2014-03-25 22:05:47');
INSERT INTO `questions` VALUES(107, 'Berikut ini adalah kebijaksanaan pemerintah yang sesuai dengan usaha mewujudkan \r\nkeadilan sosial, kecuali...', 1, 1, 1, 0, NULL, 'tiap-tiap orang memperoleh haknya ', 'pemenuhan kebutuhan materiil bagi seluruh rakyat ', 'unsur pernimpin perusahaan yang bertanggung jawab', 'unsur pengendalian usaha dari negara', 3, NULL, NULL, '2014-03-25 22:06:30', '2014-03-26 00:30:08');
INSERT INTO `questions` VALUES(121, 'Contoh soal baru', 1, 1, 1, 0, NULL, 'ini jawaban A', 'ini jawaban B', 'ini jawaban C', 'ini jawaban D', 1, 'files/quizz/cover_kelas1_matematika_irwan.jpg', NULL, '2014-05-10 10:27:25', '2014-05-10 10:27:25');
INSERT INTO `questions` VALUES(120, 'Tambah soal', 1, 1, 1, 0, NULL, 'Jawaban a', 'jaban b', 'jawaban c', 'jawaban d', 1, 'files/quizz/2014-03-26-070038film_ss.png', NULL, '2014-03-26 07:00:38', '2014-03-26 07:00:38');
INSERT INTO `questions` VALUES(122, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-10 10:30:34', '2014-05-10 10:30:34');
INSERT INTO `questions` VALUES(123, 'Ini pertanyaan baru taufiq', 1, 1, 1, 0, NULL, 'jawaban a', 'jawaban b', 'jawaban c', 'jawaban d', 1, 'files/quizz/PAs_Poto_by_sastroart.jpg', NULL, '2014-05-10 11:12:25', '2014-05-10 11:12:25');
INSERT INTO `questions` VALUES(124, 'sdsddssddsds', 1, 1, 1, 0, NULL, 'as', 'as', 'asas', 'as', 1, 'files/quizz/Screen_Shot_2014-03-26_at_4.40.18_AM.png', NULL, '2014-05-12 08:26:55', '2014-05-12 08:26:55');
INSERT INTO `questions` VALUES(125, 'sdf', 1, 1, 1, 0, NULL, 'sdf', 'sdf', 'fsfsdf', 'ghgghgghghghg', 1, NULL, 'files/quizz/Dokumenter_Earth_Hour_Indonesia_2014.mp4', '2014-05-12 08:57:14', '2014-05-13 03:57:17');
INSERT INTO `questions` VALUES(126, 'sdf', 1, 1, 1, 0, NULL, 'sdf', 'sdf', 'sdf', 'sdf', 3, NULL, NULL, '2014-05-12 08:58:41', '2014-05-13 02:16:20');
INSERT INTO `questions` VALUES(127, 'apa sdfhsdhfsdf\r\n', 1, 1, 1, 0, NULL, 'iya', 'apa', 'kenapa', 'zzz', 1, 'files/quizz/uut.png', NULL, '2014-05-12 08:59:34', '2014-05-13 04:14:01');
INSERT INTO `questions` VALUES(145, 'sdfsdffdsdf', 2, 1, 1, 0, 'sdfdsfsfsdf', '', '', '', '', 0, 'files/quizz/cover_kelas1_matematika_irwan.jpg', 'files/quizz/2014-05-12-235703Dokumenter_Earth_Hour_Indonesia_2014.mp4', '2014-05-12 10:07:47', '2014-05-12 23:57:03');
INSERT INTO `questions` VALUES(149, 'Windows 8 hangs on welcome screen when I log in for a few minutes with my netgear USB WNDA3100v2 wireless adapter plugged in. I have the latest driver installed ?', 1, 1, 1, 0, NULL, 'a', 'c', 'b', 'd', 3, 'files/quizz/Screen_Shot_2014-03-26_at_4.02.59_AM.png', 'files/quizz/bloodcare_tvc.flv', '2014-05-13 04:55:49', '2014-07-03 06:59:18');
INSERT INTO `questions` VALUES(150, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 06:58:05', '2014-05-13 06:58:05');
INSERT INTO `questions` VALUES(146, 'asfagfaf', 1, 1, 1, 0, NULL, 'avgagF', 'agdgadg', 'agadga', 'adgvadg', 2, 'files/quizz/download_(5).jpg', NULL, '2014-05-13 04:26:05', '2014-05-13 04:26:59');
INSERT INTO `questions` VALUES(147, 'yujyejuj', 1, 1, 1, 0, NULL, 'ihihih', 'ihihioh', 'hilhih', 'ihilhil', 3, 'files/quizz/3196931-2170304494-22850.jpg', NULL, '2014-05-13 04:29:12', '2014-05-13 04:29:30');
INSERT INTO `questions` VALUES(148, 'apa pak?', 2, 2, 1, 0, 'tak apaasd', '', '', '', '', 0, NULL, NULL, '2014-05-13 04:36:03', '2014-05-13 04:43:37');
INSERT INTO `questions` VALUES(151, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:01:31', '2014-05-13 07:01:31');
INSERT INTO `questions` VALUES(158, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:18:30', '2014-05-13 07:18:30');
INSERT INTO `questions` VALUES(143, 'sdfsdff', 1, 1, 1, 0, NULL, 'sf', 'dsf', 'sdf', 'sdf', 1, NULL, 'files/quizz/2014-05-12-033238DAILY_ENGLISH_CONVERSATION_VOLUME_3_(_1_BOOK__1_VCD_).flv', '2014-05-12 03:32:38', '2014-05-12 03:32:38');
INSERT INTO `questions` VALUES(153, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:03:54', '2014-05-13 07:03:54');
INSERT INTO `questions` VALUES(159, 'Contoh Soal', 1, 1, 2, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:18:56', '2014-05-13 07:18:56');
INSERT INTO `questions` VALUES(157, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:17:08', '2014-05-13 07:17:08');
INSERT INTO `questions` VALUES(160, 'Contoh Soal', 1, 2, 3, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:22:21', '2014-05-13 07:22:21');
INSERT INTO `questions` VALUES(161, 'Contoh Soal', 1, 1, 3, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:23:47', '2014-05-13 07:23:47');
INSERT INTO `questions` VALUES(162, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(163, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(164, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(165, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(166, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(167, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(168, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(169, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(170, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(171, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(172, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(173, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(174, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(175, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(176, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(177, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(178, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(179, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(180, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(181, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(182, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(183, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(184, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(185, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(186, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(187, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(188, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(189, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(190, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(191, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(192, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(193, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(194, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(195, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(196, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(197, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(198, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(199, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(200, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(201, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(202, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(203, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(204, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(205, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(206, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(207, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(208, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(209, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(210, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(211, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(212, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(213, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(214, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(215, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(216, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(217, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(218, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(219, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(220, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(221, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(222, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(223, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(224, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(225, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(226, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(227, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(228, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(229, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(230, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(231, 'Contoh Soal', 1, 1, 1, 0, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(232, 'tambah ujian baru', 1, 1, 1, 0, NULL, 'sdf', 'dsf', 'sdf', 'dsf', 1, NULL, NULL, '2014-05-28 13:01:13', '2014-05-28 13:01:13');
INSERT INTO `questions` VALUES(233, 'soal ujian baru', 1, 1, 1, 0, NULL, 'jawaban s', 'asdfjsdf', 'sdfdfsdf', 'sdfsdfsdf', 2, 'files/quizz/icon-user-default.png', 'files/quizz/-eteaching_sd-files-videosDAILY_ENGLISH_CONVERSATION_VOLUME_2_1_BOOK_1_VCD.flv', '2014-06-12 11:23:26', '2014-06-12 11:23:26');
INSERT INTO `questions` VALUES(234, 'hdhjzhjdzhchzjxch', 1, 1, 1, 0, NULL, 'jzjncznczmnxc', 'zxczxczx', 'zxczxc', 'zxczxczxc', 1, 'files/quizz/2014-06-18-113420icon-user-default.png', 'files/quizz/profile.flv', '2014-06-18 11:34:20', '2014-06-18 11:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `quizzs`
--

CREATE TABLE `quizzs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) NOT NULL,
  `user_id` int(32) NOT NULL,
  `title` mediumtext NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `type` smallint(2) DEFAULT NULL,
  `time` varchar(32) DEFAULT NULL,
  `details` text NOT NULL,
  `published` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `quizzs`
--

INSERT INTO `quizzs` VALUES(9, 'borobudur', 1, 'Try out', 1, 1, 1, '50', '', NULL, '2014-05-10 11:14:42', '2014-06-08 04:37:53');
INSERT INTO `quizzs` VALUES(8, 'PG2', 1, 'Try out', 1, 1, 2, '46', '', NULL, '2014-03-25 22:34:24', '2014-03-26 00:30:33');
INSERT INTO `quizzs` VALUES(10, 'sdf', 1, 'Try out', 1, 1, NULL, '45', '', NULL, '2014-05-13 09:17:08', '2014-05-13 09:17:08');
INSERT INTO `quizzs` VALUES(11, 'sdfsdfdsf', 1, 'Try out', 2, 1, NULL, '46', '', NULL, '2014-05-13 11:01:50', '2014-05-28 12:55:09');
INSERT INTO `quizzs` VALUES(12, 'sdfsdfsdfsdf', 1, 'Try out', 3, 2, NULL, '47', '', NULL, '2014-05-13 11:03:51', '2014-05-28 13:01:53');
INSERT INTO `quizzs` VALUES(13, 'hhhh', 1, 'Try out', 1, 1, NULL, '46', '', NULL, '2014-05-28 10:18:55', '2014-05-28 12:32:32');
INSERT INTO `quizzs` VALUES(14, 'test', 1, 'Try out', 6, 1, NULL, '47', '', NULL, '2014-06-12 11:24:55', '2014-06-12 11:25:27');
INSERT INTO `quizzs` VALUES(15, 'kalibata', 1, 'Try out', 1, 1, NULL, '47', '', NULL, '2014-06-23 12:14:10', '2014-06-23 12:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `quizzs_questions`
--

CREATE TABLE `quizzs_questions` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `quizz_id` bigint(50) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `quizzs_questions`
--

INSERT INTO `quizzs_questions` VALUES(5, 3, 3);
INSERT INTO `quizzs_questions` VALUES(10, 1, 12);
INSERT INTO `quizzs_questions` VALUES(3, 2, 3);
INSERT INTO `quizzs_questions` VALUES(9, 1, 12);
INSERT INTO `quizzs_questions` VALUES(8, 4, 14);
INSERT INTO `quizzs_questions` VALUES(7, 4, 3);
INSERT INTO `quizzs_questions` VALUES(11, 1, 12);
INSERT INTO `quizzs_questions` VALUES(12, 1, 12);
INSERT INTO `quizzs_questions` VALUES(13, 1, 12);
INSERT INTO `quizzs_questions` VALUES(14, 1, 12);
INSERT INTO `quizzs_questions` VALUES(15, 1, 12);
INSERT INTO `quizzs_questions` VALUES(16, 1, 12);
INSERT INTO `quizzs_questions` VALUES(17, 1, 11);
INSERT INTO `quizzs_questions` VALUES(18, 1, 12);
INSERT INTO `quizzs_questions` VALUES(19, 1, 11);
INSERT INTO `quizzs_questions` VALUES(20, 1, 12);
INSERT INTO `quizzs_questions` VALUES(21, 1, 11);
INSERT INTO `quizzs_questions` VALUES(22, 1, 11);
INSERT INTO `quizzs_questions` VALUES(23, 1, 12);
INSERT INTO `quizzs_questions` VALUES(24, 1, 11);
INSERT INTO `quizzs_questions` VALUES(25, 1, 12);
INSERT INTO `quizzs_questions` VALUES(26, 5, 16);
INSERT INTO `quizzs_questions` VALUES(27, 1, 12);
INSERT INTO `quizzs_questions` VALUES(28, 1, 11);
INSERT INTO `quizzs_questions` VALUES(29, 0, 12);
INSERT INTO `quizzs_questions` VALUES(30, 1, 12);
INSERT INTO `quizzs_questions` VALUES(31, 1, 11);
INSERT INTO `quizzs_questions` VALUES(32, 4, 12);
INSERT INTO `quizzs_questions` VALUES(33, 7, 16);
INSERT INTO `quizzs_questions` VALUES(34, 1, 14);
INSERT INTO `quizzs_questions` VALUES(35, 1, 13);
INSERT INTO `quizzs_questions` VALUES(36, 2, 17);
INSERT INTO `quizzs_questions` VALUES(37, 3, 14);
INSERT INTO `quizzs_questions` VALUES(38, 2, 14);
INSERT INTO `quizzs_questions` VALUES(39, 2, 13);
INSERT INTO `quizzs_questions` VALUES(40, 2, 11);
INSERT INTO `quizzs_questions` VALUES(41, 4, 11);
INSERT INTO `quizzs_questions` VALUES(42, 2, 12);
INSERT INTO `quizzs_questions` VALUES(43, 1, 20);
INSERT INTO `quizzs_questions` VALUES(44, 7, 20);
INSERT INTO `quizzs_questions` VALUES(45, 2, 20);
INSERT INTO `quizzs_questions` VALUES(46, 2, 94);
INSERT INTO `quizzs_questions` VALUES(48, 7, 95);
INSERT INTO `quizzs_questions` VALUES(49, 8, 108);
INSERT INTO `quizzs_questions` VALUES(50, 9, 110);
INSERT INTO `quizzs_questions` VALUES(51, 9, 108);
INSERT INTO `quizzs_questions` VALUES(52, 9, 111);
INSERT INTO `quizzs_questions` VALUES(53, 13, 149);
INSERT INTO `quizzs_questions` VALUES(54, 12, 149);
INSERT INTO `quizzs_questions` VALUES(55, 11, 149);
INSERT INTO `quizzs_questions` VALUES(56, 12, 232);
INSERT INTO `quizzs_questions` VALUES(57, 9, 149);
INSERT INTO `quizzs_questions` VALUES(58, 9, 232);
INSERT INTO `quizzs_questions` VALUES(59, 14, 149);
INSERT INTO `quizzs_questions` VALUES(60, 14, 232);
INSERT INTO `quizzs_questions` VALUES(61, 15, 232);
INSERT INTO `quizzs_questions` VALUES(62, 15, 149);

-- --------------------------------------------------------

--
-- Table structure for table `uraian_answers`
--

CREATE TABLE `uraian_answers` (
  `id` bigint(60) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(40) NOT NULL,
  `question_id` bigint(40) NOT NULL,
  `quizz_id` bigint(40) NOT NULL,
  `jawaban_uraian` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uraian_answers`
--

INSERT INTO `uraian_answers` VALUES(1, 18, 3, 2, 'Jawaban saya bu', '2011-12-06 20:05:41', '2012-06-11 05:45:51');
