-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2015 at 02:39 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

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
INSERT INTO `answers` VALUES(57, 239, 'ard a', 0, '2015-03-25 15:54:16', '2015-03-25 15:54:16');
INSERT INTO `answers` VALUES(58, 239, 'ard b', 0, '2015-03-25 15:54:16', '2015-03-25 15:54:16');
INSERT INTO `answers` VALUES(59, 239, 'ard c', 0, '2015-03-25 15:54:16', '2015-03-25 15:54:16');
INSERT INTO `answers` VALUES(60, 239, 'ard d', 1, '2015-03-25 15:54:16', '2015-03-25 15:54:16');
INSERT INTO `answers` VALUES(61, 240, 'ard a', 0, '2015-03-25 15:59:32', '2015-03-25 15:59:32');
INSERT INTO `answers` VALUES(62, 240, 'ard b', 0, '2015-03-25 15:59:32', '2015-03-25 15:59:32');
INSERT INTO `answers` VALUES(63, 240, 'ard c', 0, '2015-03-25 15:59:32', '2015-03-25 15:59:32');
INSERT INTO `answers` VALUES(64, 240, 'ard d', 1, '2015-03-25 15:59:32', '2015-03-25 15:59:32');
INSERT INTO `answers` VALUES(65, 241, 'ard a', 0, '2015-03-25 16:02:11', '2015-03-25 16:02:11');
INSERT INTO `answers` VALUES(66, 241, 'ard b', 0, '2015-03-25 16:02:11', '2015-03-25 16:02:11');
INSERT INTO `answers` VALUES(67, 241, 'ard c', 0, '2015-03-25 16:02:11', '2015-03-25 16:02:11');
INSERT INTO `answers` VALUES(68, 241, 'ard d', 1, '2015-03-25 16:02:11', '2015-03-25 16:02:11');
INSERT INTO `answers` VALUES(69, 242, 'dasdasd', 1, '2015-03-25 16:12:02', '2015-03-25 16:12:02');
INSERT INTO `answers` VALUES(70, 242, 'asdasdasd', 0, '2015-03-25 16:12:02', '2015-03-25 16:12:02');
INSERT INTO `answers` VALUES(71, 242, 'asdasdasd', 0, '2015-03-25 16:12:02', '2015-03-25 16:12:02');
INSERT INTO `answers` VALUES(72, 242, 'asdasdasd', 0, '2015-03-25 16:12:02', '2015-03-25 16:12:02');
INSERT INTO `answers` VALUES(73, 243, 'aasd a', 0, '2015-03-25 16:14:23', '2015-03-25 16:14:23');
INSERT INTO `answers` VALUES(74, 243, 'asd b', 0, '2015-03-25 16:14:23', '2015-03-25 16:14:23');
INSERT INTO `answers` VALUES(75, 243, 'asd c', 0, '2015-03-25 16:14:23', '2015-03-25 16:14:23');
INSERT INTO `answers` VALUES(76, 243, 'asd d', 1, '2015-03-25 16:14:23', '2015-03-25 16:14:23');

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
  `image` varchar(255) NOT NULL DEFAULT 'bg-pelajaran-1.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pelajarans`
--

INSERT INTO `pelajarans` VALUES(1, 'Matematika', 'matematika', '2011-11-26 02:10:08', '2011-11-26 02:10:08', 'bg-pelajaran-1.png');
INSERT INTO `pelajarans` VALUES(4, 'Bahasa Indonesia', 'bahasa-indonesia', '2011-11-26 02:10:08', '2011-11-26 02:10:08', 'bg-pelajaran-4.png');
INSERT INTO `pelajarans` VALUES(5, 'Bahasa Inggris', 'bahasa-inggris	', '2011-11-26 02:10:08', '2011-11-26 02:10:08', 'bg-pelajaran-2.png');
INSERT INTO `pelajarans` VALUES(6, 'PPKN', 'ppkn', '2011-11-26 02:10:08', '2011-11-26 02:10:08', 'bg-pelajaran-3.png');
INSERT INTO `pelajarans` VALUES(8, 'Kimia', 'kimia', '2012-06-11 04:57:13', '2012-06-11 04:57:13', 'bg-pelajaran-1.png');

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
  `quizz_id` int(32) NOT NULL,
  `question` text NOT NULL,
  `tipe` tinyint(2) NOT NULL,
  `level` int(3) NOT NULL,
  `kelas` int(3) NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `penjelasan` text,
  `point_nilai` int(11) DEFAULT NULL,
  `answer2` text,
  `answer_a` text NOT NULL,
  `answer_b` text NOT NULL,
  `answer_c` text NOT NULL,
  `answer_d` text NOT NULL,
  `answer_e` text NOT NULL,
  `answer_true` tinyint(2) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=266 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` VALUES(118, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 6, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, 'files/quizz/download_(2).jpg', '', '2014-03-26 12:36:13', '2014-05-13 04:25:34');
INSERT INTO `questions` VALUES(117, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(116, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(115, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(114, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(113, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(112, 0, 'Ini soal baru sekali', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'ini jawaban a', 'ini jawaban b', 'ini jawaban c', 'ini jawaban d', '', 2, 'files/quizz/film_ss.png', 'files/quizz/bloodcare_tvc1.flv', '2014-03-26 12:30:57', '2014-05-13 04:55:30');
INSERT INTO `questions` VALUES(59, 0, 'entrybaru', 1, 2, 1, 0, 'pkn', '1', NULL, NULL, 'sdf', 'sdf', 'sf', 'dsf', '', 3, NULL, NULL, '2012-08-11 01:48:31', '2012-08-11 01:48:31');
INSERT INTO `questions` VALUES(111, 0, 'Latar belakang lahirnya pemerintahan reformasi adalah ....', 1, 1, 1, 0, 'pkn', '2', NULL, NULL, 'adanya penyimpangan-penyimpangan pemerintah Orde Baru', 'utang luar negeri yang amat besar samliai tidak terbayar', 'para mahasiswa sudah bosan dengan gaya pemerintahan Pak Harto', 'untuk menciptakan pemerintahan yang terbuka, jujur, dan demokratis', '', 4, NULL, NULL, '2014-03-26 00:34:11', '2014-03-26 00:34:11');
INSERT INTO `questions` VALUES(109, 0, 'Contoh soal essay', 2, 1, 1, 0, 'pkn', '1', NULL, 'Ini adalah jawaban essay', '', '', '', '', '', 0, NULL, NULL, '2014-03-25 22:28:16', '2014-03-25 22:28:26');
INSERT INTO `questions` VALUES(110, 0, 'Perubahan suatu bangsa menuju kearah kondisi yang lebih baik atau buruk pada\r\nhakikatnya', 1, 1, 1, 0, 'pkn', '2', NULL, NULL, 'ditentukan dalam kerjsama regional', 'sangat dipengaruhi oleh situasi dunia', 'ditentukan oleh situasi negara-negara tetangga', 'tergantung dari usaha bangsa itu sendiri', '', 4, NULL, NULL, '2014-03-26 00:33:26', '2014-03-26 00:33:26');
INSERT INTO `questions` VALUES(108, 0, 'Keadilan sosial dalam good governance (kebijakan pemerintah yang baik) terimplementasi \r\ndalam:', 1, 1, 1, 0, 'pkn', '2', NULL, NULL, 'pemerataan pembangunan dan hasil-hasilnya', 'pertumbuhan ekonomi yang cukup tinggi', 'stabilitas nasional yang sehat dan dinamis', 'program Inpres Desa Tertinggal (IDT)', '', 3, NULL, NULL, '2014-03-25 22:21:18', '2014-03-26 00:29:47');
INSERT INTO `questions` VALUES(98, 0, 'Dalam mencapai tujuan politik bebas aktif, Indonesia pada dasarnya menjalankan politik ....', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'netral', 'damai', 'isolasi', 'terpadu', '', 1, NULL, NULL, '2014-03-25 21:59:37', '2014-03-25 21:59:37');
INSERT INTO `questions` VALUES(99, 0, 'Segala kebijakan pemerintah yang berkaitan dengan negara lain atau subjek hukum\r\ninternasional lain guna mewujudkan tujuan nasional, disebut ....', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'kerja sama intemasional', 'perjanjian internasional', 'hubungan diplomatik', 'hubungan luar negeri', '', 2, NULL, NULL, '2014-03-25 22:00:23', '2014-03-25 22:00:23');
INSERT INTO `questions` VALUES(100, 0, 'Pada dasarnya politik yang dijalankan dalam kebijakan pemerintah Indonesia mengabdi pada kepentingan ....', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'nasional', 'internasional', 'manusia', 'dunia', '', 3, NULL, NULL, '2014-03-25 22:01:16', '2014-03-25 22:01:16');
INSERT INTO `questions` VALUES(101, 0, 'Menurut ketentuan hukum yang berlaku, lembaga yang mewakili pelaksanaan politik luar \r\nnegeri di negeri asing adalah ...', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'Presiden Indonesia', 'Menteri Luar Negeri', 'Dubes Luar Biasa', 'Corp Consulat', '', 2, NULL, NULL, '2014-03-25 22:01:59', '2014-03-25 22:01:59');
INSERT INTO `questions` VALUES(102, 0, 'Arah politik luar negeri bebas aktif berorientasi dan menitikberatkan pada hal', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'solidaritas antara negara-negara persernakmuran', 'peningkatan kemandirian bangsa lain', 'upaya menjadikan Indonesia dikenal dunia', 'kerja sama internasional bagi kesejahteraan pejabat', '', 3, NULL, NULL, '2014-03-25 22:02:46', '2014-03-25 22:02:46');
INSERT INTO `questions` VALUES(103, 0, 'Dalam penjelasan Pasal 32 UUD 1945 yang dimaksud kebudayaan bangsa adalah ....', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'kebudayaan yang timbul sebagai usaha budi daya rakyat', 'seluruh kebudayaan yang Aa di Indonesia', 'kebudayaan daerah yang masih terpelihara', 'perpaduan unsur budaya daerah dengan budaya asing', '', 3, NULL, NULL, '2014-03-25 22:03:38', '2014-03-25 22:03:38');
INSERT INTO `questions` VALUES(104, 0, 'Pelaksanaan Pembangunan Nasional sebagai pengamalan Pancasila, khususnya\r\nKetuhanan Yang Maha Esa Indonesia bertujuan ....', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'meningkatkan martabat serta hak dan kewajiban asasi manusia warga negara', 'peningkatan pembinaan bangsa di semua bidang kehidupan', 'mewujudkan masyarakat adil dan makmur', 'memajukan kesejahteraan umum', '', 3, NULL, NULL, '2014-03-25 22:04:17', '2014-03-25 22:04:17');
INSERT INTO `questions` VALUES(105, 0, 'Cita-cita ekonomi nasional yang berdasarkan ekonmi kerakyatan mengutamakan ....', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'pemenuhan kesejahteraan seluruh rakyat Indonesia', 'tiap-tiap warga negara memperolch apa yang dituntutnya', 'tidak pilih kasih atau tidak berat sebelah', 'dapat menikmati hidup terhormat dan tercukupi kebutuhan-kebutuhan hidupnya', '', 4, NULL, NULL, '2014-03-25 22:05:06', '2014-03-25 22:05:06');
INSERT INTO `questions` VALUES(106, 0, 'Berikut ini merupakan masalah yang rawan yang perlu mendapat perhatian, kecuali ....', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'masalah kesenjangan sosial', 'tingkat pendidikan yang rendah', 'budaya korupsi, kolusi, dan nepotisme', 'ketersediaan lapangan pekerjaan yang telah memadai', '', 3, NULL, NULL, '2014-03-25 22:05:47', '2014-03-25 22:05:47');
INSERT INTO `questions` VALUES(107, 0, 'Berikut ini adalah kebijaksanaan pemerintah yang sesuai dengan usaha mewujudkan \r\nkeadilan sosial, kecuali...', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'tiap-tiap orang memperoleh haknya ', 'pemenuhan kebutuhan materiil bagi seluruh rakyat ', 'unsur pernimpin perusahaan yang bertanggung jawab', 'unsur pengendalian usaha dari negara', '', 3, NULL, NULL, '2014-03-25 22:06:30', '2014-03-26 00:30:08');
INSERT INTO `questions` VALUES(121, 0, 'Contoh soal baru', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'ini jawaban A', 'ini jawaban B', 'ini jawaban C', 'ini jawaban D', '', 1, 'files/quizz/cover_kelas1_matematika_irwan.jpg', NULL, '2014-05-10 10:27:25', '2014-05-10 10:27:25');
INSERT INTO `questions` VALUES(120, 0, 'Tambah soal', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'Jawaban a', 'jaban b', 'jawaban c', 'jawaban d', '', 1, 'files/quizz/2014-03-26-070038film_ss.png', NULL, '2014-03-26 07:00:38', '2014-03-26 07:00:38');
INSERT INTO `questions` VALUES(122, 0, 'Contoh Soal', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-10 10:30:34', '2014-05-10 10:30:34');
INSERT INTO `questions` VALUES(123, 0, 'Ini pertanyaan baru taufiq', 1, 1, 1, 0, 'pkn', '1', NULL, NULL, 'jawaban a', 'jawaban b', 'jawaban c', 'jawaban d', '', 1, 'files/quizz/PAs_Poto_by_sastroart.jpg', NULL, '2014-05-10 11:12:25', '2014-05-10 11:12:25');
INSERT INTO `questions` VALUES(124, 0, 'sdsddssddsds', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'as', 'as', 'asas', 'as', '', 1, 'files/quizz/Screen_Shot_2014-03-26_at_4.40.18_AM.png', NULL, '2014-05-12 08:26:55', '2014-05-12 08:26:55');
INSERT INTO `questions` VALUES(125, 0, 'sdf', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'sdf', 'sdf', 'fsfsdf', 'ghgghgghghghg', '', 1, NULL, 'files/quizz/Dokumenter_Earth_Hour_Indonesia_2014.mp4', '2014-05-12 08:57:14', '2014-05-13 03:57:17');
INSERT INTO `questions` VALUES(126, 0, 'sdf', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'sdf', 'sdf', 'sdf', 'sdf', '', 3, NULL, NULL, '2014-05-12 08:58:41', '2014-05-13 02:16:20');
INSERT INTO `questions` VALUES(127, 0, 'apa sdfhsdhfsdf\r\n', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'iya', 'apa', 'kenapa', 'zzz', '', 1, 'files/quizz/uut.png', NULL, '2014-05-12 08:59:34', '2014-05-13 04:14:01');
INSERT INTO `questions` VALUES(145, 0, 'sdfsdffdsdf', 2, 1, 1, 0, 'ppkn', '2', NULL, 'sdfdsfsfsdf', '', '', '', '', '', 0, 'files/quizz/cover_kelas1_matematika_irwan.jpg', 'files/quizz/2014-05-12-235703Dokumenter_Earth_Hour_Indonesia_2014.mp4', '2014-05-12 10:07:47', '2014-05-12 23:57:03');
INSERT INTO `questions` VALUES(149, 0, 'Windows 8 hangs on welcome screen when I log in for a few minutes with my netgear USB WNDA3100v2 wireless adapter plugged in. I have the latest driver installed ?', 1, 1, 1, 0, 'ppkn', '2', NULL, NULL, 'a', 'c', 'b', 'd', '', 3, 'files/quizz/Screen_Shot_2014-03-26_at_4.02.59_AM.png', 'files/quizz/bloodcare_tvc.flv', '2014-05-13 04:55:49', '2014-07-03 06:59:18');
INSERT INTO `questions` VALUES(150, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-indonesia', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-13 06:58:05', '2014-05-13 06:58:05');
INSERT INTO `questions` VALUES(146, 0, 'asfagfaf', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'avgagF', 'agdgadg', 'agadga', 'adgvadg', '', 2, 'files/quizz/download_(5).jpg', NULL, '2014-05-13 04:26:05', '2014-05-13 04:26:59');
INSERT INTO `questions` VALUES(147, 0, 'yujyejuj', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'ihihih', 'ihihioh', 'hilhih', 'ihilhil', '', 3, 'files/quizz/3196931-2170304494-22850.jpg', NULL, '2014-05-13 04:29:12', '2014-05-13 04:29:30');
INSERT INTO `questions` VALUES(148, 0, 'apa pak?', 2, 2, 1, 0, 'ppkn', '2', NULL, 'tak apaasd', '', '', '', '', '', 0, NULL, NULL, '2014-05-13 04:36:03', '2014-05-13 04:43:37');
INSERT INTO `questions` VALUES(151, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-inggris	', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-13 07:01:31', '2014-05-13 07:01:31');
INSERT INTO `questions` VALUES(158, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-indonesia', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-13 07:18:30', '2014-05-13 07:18:30');
INSERT INTO `questions` VALUES(143, 0, 'sdfsdff', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'sf', 'dsf', 'sdf', 'sdf', '', 1, NULL, 'files/quizz/2014-05-12-033238DAILY_ENGLISH_CONVERSATION_VOLUME_3_(_1_BOOK__1_VCD_).flv', '2014-05-12 03:32:38', '2014-05-12 03:32:38');
INSERT INTO `questions` VALUES(153, 0, 'Contoh Soal', 1, 1, 1, 0, 'fisika', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-13 07:03:54', '2014-05-13 07:03:54');
INSERT INTO `questions` VALUES(159, 0, 'Contoh Soal', 1, 1, 2, 0, 'biologi', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-13 07:18:56', '2014-05-13 07:18:56');
INSERT INTO `questions` VALUES(157, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-13 07:17:08', '2014-05-13 07:17:08');
INSERT INTO `questions` VALUES(160, 0, 'Contoh Soal', 1, 2, 3, 0, 'sejarah', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-13 07:22:21', '2014-05-13 07:22:21');
INSERT INTO `questions` VALUES(161, 0, 'Contoh Soal', 1, 1, 3, 0, 'ekonomi', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-13 07:23:47', '2014-05-13 07:23:47');
INSERT INTO `questions` VALUES(162, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(163, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(164, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(165, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(166, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(167, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(168, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(169, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(170, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(171, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(172, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(173, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(174, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(175, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(176, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(177, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(178, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(179, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(180, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(181, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(182, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(183, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(184, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(185, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(186, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(187, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(188, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(189, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(190, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(191, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(192, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(193, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(194, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(195, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(196, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(197, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(198, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(199, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(200, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(201, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(202, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(203, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(204, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(205, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(206, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(207, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(208, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(209, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(210, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(211, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(212, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(213, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(214, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(215, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(216, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(217, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(218, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(219, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(220, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(221, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(222, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(223, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(224, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(225, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(226, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(227, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(228, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(229, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(230, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(231, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', '', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(232, 0, 'tambah ujian baru', 1, 1, 1, 0, 'ppkn', '2', NULL, NULL, 'sdf', 'dsf', 'sdf', 'dsf', '', 1, NULL, NULL, '2014-05-28 13:01:13', '2014-05-28 13:01:13');
INSERT INTO `questions` VALUES(233, 0, 'soal ujian baru', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'jawaban s', 'asdfjsdf', 'sdfdfsdf', 'sdfsdfsdf', '', 2, 'files/quizz/icon-user-default.png', 'files/quizz/-eteaching_sd-files-videosDAILY_ENGLISH_CONVERSATION_VOLUME_2_1_BOOK_1_VCD.flv', '2014-06-12 11:23:26', '2014-06-12 11:23:26');
INSERT INTO `questions` VALUES(234, 0, 'hdhjzhjdzhchzjxch', 1, 1, 1, 0, 'ppkn', '1', NULL, NULL, 'jzjncznczmnxc', 'zxczxczx', 'zxczxc', 'zxczxczxc', '', 1, 'files/quizz/2014-06-18-113420icon-user-default.png', 'files/quizz/profile.flv', '2014-06-18 11:34:20', '2014-06-18 11:34:20');
INSERT INTO `questions` VALUES(247, 0, 'ard 21', 1, 1, 1, 0, '', '0', NULL, '', 'ard A', 'ard B', 'ard C', 'ard D', '', 1, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `questions` VALUES(246, 0, 'kjasdfhkjkjh 1', 1, 1, 1, 0, '', '0', NULL, '', 'ard a', 'ard b', 'ard c', 'ard d', '', 1, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `questions` VALUES(248, 0, 'asdasdasdas pertanyaan', 1, 3, 1, 0, '', '0', NULL, '', 'lalalal A', 'lalalal B', 'lalalal C', 'lalalal D', '', 4, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `questions` VALUES(249, 0, 'asdasdas', 1, 1, 1, 0, '', '0', NULL, '', 'jawaban', 'jawaban', 'jawaban', 'jawaban', '', 4, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `questions` VALUES(258, 0, 'pertanyaan essay 1', 2, 2, 1, 1, '1', '0', NULL, 'sdlfkjsldkafjlsadjflkjklsadfjl', '', '', '', '', '', 0, 'files/quizz/Screenshot_from_2015-03-05_11:37:29.png', 'files/quizz/DAILY_ENGLISH_CONVERSATION_VOLUME_2_(_1_BOOK__1_VCD_).flv', '0000-00-00 00:00:00', '2015-03-31 16:29:23');
INSERT INTO `questions` VALUES(257, 0, 'pertanyaan ardian 1', 1, 2, 1, 1, '', '0', NULL, '', 'jawab 1', 'jawab 2', 'jawab 3', 'jawab 4', '', 2, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `questions` VALUES(255, 0, 'sdflkjasldkfjklsdjflkasjlfkjlksdajf', 2, 2, 1, 1, '', '0', NULL, 'asdklfsldkfjlsdjflksdajf', '', '', '', '', '', 0, 'files/quizz/2015-03-27-034957Screenshot_from_2015-03-05_13:34:28.png', NULL, '0000-00-00 00:00:00', '2015-03-31 12:42:58');
INSERT INTO `questions` VALUES(256, 0, 'pertanyaan test', 2, 2, 1, 4, '', '0', NULL, 'asdasdasda', '', '', '', '', '', 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `questions` VALUES(259, 0, 'test soal pg', 1, 2, 1, 1, '', '0', NULL, '', 'jawaba', 'b', 'c', 'd', '', 3, NULL, NULL, '0000-00-00 00:00:00', '2015-03-31 12:33:34');
INSERT INTO `questions` VALUES(260, 0, 'tes esai 2', 2, 1, 1, 1, '', '0', NULL, 'juga', '', '', '', '', '', 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `questions` VALUES(261, 0, 'dsa', 1, 3, 1, 1, '1', '0', NULL, '', '1', '23', '3', '5', '', 4, 'files/quizz/skate.gif', NULL, '0000-00-00 00:00:00', '2015-04-07 14:43:10');
INSERT INTO `questions` VALUES(262, 0, 'asd;lk;alksd;', 2, 2, 1, 1, '1', '0', NULL, 'ardian', '', '', '', '', '', 0, 'files/quizz/cow.png', NULL, '0000-00-00 00:00:00', '2015-04-01 11:14:51');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `quizzs`
--

INSERT INTO `quizzs` VALUES(8, 'PG2', 1, 'Try out', 6, 1, NULL, '46', '', NULL, '2014-03-25 22:34:24', '2014-03-26 00:30:33');
INSERT INTO `quizzs` VALUES(10, 'sdf', 1, 'Try out', 1, 1, NULL, '45', '', NULL, '2014-05-13 09:17:08', '2014-05-13 09:17:08');
INSERT INTO `quizzs` VALUES(11, 'sdfsdfdsf', 1, 'Try out', 2, 1, NULL, '46', '', NULL, '2014-05-13 11:01:50', '2014-05-28 12:55:09');
INSERT INTO `quizzs` VALUES(12, '', 1, 'Undefined', 1, 1, NULL, '', '', NULL, '2014-05-13 11:03:51', '2015-04-12 21:38:31');
INSERT INTO `quizzs` VALUES(13, 'hhhh', 1, 'Undefined', 1, 1, NULL, '46', '', NULL, '2014-05-28 10:18:55', '2015-04-12 22:23:19');
INSERT INTO `quizzs` VALUES(15, 'kalibatax', 1, 'Undefined', 1, 1, NULL, '41', '', NULL, '2014-06-23 12:14:10', '2015-04-12 22:02:42');
INSERT INTO `quizzs` VALUES(16, 'test_tryouy', 1, 'Try out', 1, 1, NULL, '45', '', NULL, '2015-03-13 12:02:03', '2015-03-13 12:02:03');
INSERT INTO `quizzs` VALUES(17, 'ardian ferdianto', 1, 'Try Out', 0, 0, NULL, NULL, '', NULL, '2015-04-08 17:49:21', '2015-04-08 17:49:21');
INSERT INTO `quizzs` VALUES(18, 'test tryout 2', 1, 'Try Out', 0, 0, NULL, NULL, '', NULL, '2015-04-08 17:52:49', '2015-04-08 17:52:49');
INSERT INTO `quizzs` VALUES(19, 'test tryout 2', 1, 'Try Out', 0, 0, NULL, NULL, '', NULL, '2015-04-09 11:42:59', '2015-04-09 11:42:59');
INSERT INTO `quizzs` VALUES(20, 'test ardian 4', 1, 'Try Out', 0, 0, NULL, NULL, '', NULL, '2015-04-09 11:46:21', '2015-04-09 11:46:21');
INSERT INTO `quizzs` VALUES(21, 'zxcv', 1, 'Try Out', 0, 0, NULL, NULL, '', NULL, '2015-04-09 11:48:56', '2015-04-09 11:48:56');
INSERT INTO `quizzs` VALUES(22, 'test last', 1, 'Try Out', 0, 0, NULL, NULL, '', NULL, '2015-04-09 12:00:06', '2015-04-09 12:00:06');
INSERT INTO `quizzs` VALUES(39, 'kuis soal lg', 1, 'Kuis', 1, 1, 2, '5', '', NULL, '2015-04-16 10:53:56', '2015-04-16 10:53:56');
INSERT INTO `quizzs` VALUES(29, 'test2', 1, 'Try Out', 1, 1, 1, '31', '', NULL, '2015-04-12 22:56:19', '2015-04-13 00:25:29');
INSERT INTO `quizzs` VALUES(38, 'Kuis coba', 1, 'Kuis', 1, 1, NULL, '10', '', NULL, '2015-04-16 10:52:04', '2015-04-16 10:52:04');
INSERT INTO `quizzs` VALUES(37, 'Test Soal Interaktif', 1, 'Try Out', 1, 1, 1, '60', '', NULL, '2015-04-14 00:00:01', '2015-04-14 00:00:01');
INSERT INTO `quizzs` VALUES(36, 'tambah lagi', 1, 'Try Out', 1, 1, 1, '12', '', NULL, '2015-04-13 18:05:13', '2015-04-17 15:58:14');
INSERT INTO `quizzs` VALUES(35, 'tester 123', 1, 'Try Out', 1, 1, 1, '31', '', NULL, '2015-04-13 12:28:35', '2015-04-13 17:27:50');
INSERT INTO `quizzs` VALUES(40, 'soal_test', 1, 'Try Out', 1, 1, 1, '5', '', NULL, '2015-05-13 16:48:27', '2015-05-13 20:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `quizzs_questions`
--

CREATE TABLE `quizzs_questions` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `quizz_id` bigint(50) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `order` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=278 ;

--
-- Dumping data for table `quizzs_questions`
--

INSERT INTO `quizzs_questions` VALUES(267, 36, 101, 0);
INSERT INTO `quizzs_questions` VALUES(266, 37, 153, 0);
INSERT INTO `quizzs_questions` VALUES(265, 37, 100, 0);
INSERT INTO `quizzs_questions` VALUES(264, 39, 261, 4);
INSERT INTO `quizzs_questions` VALUES(263, 39, 259, 3);
INSERT INTO `quizzs_questions` VALUES(262, 39, 257, 2);
INSERT INTO `quizzs_questions` VALUES(260, 38, 257, 4);
INSERT INTO `quizzs_questions` VALUES(251, 37, 259, 3);
INSERT INTO `quizzs_questions` VALUES(253, 37, 258, 5);
INSERT INTO `quizzs_questions` VALUES(250, 37, 257, 2);
INSERT INTO `quizzs_questions` VALUES(257, 38, 259, 1);
INSERT INTO `quizzs_questions` VALUES(256, 37, 262, 8);
INSERT INTO `quizzs_questions` VALUES(258, 38, 260, 2);
INSERT INTO `quizzs_questions` VALUES(255, 37, 260, 7);
INSERT INTO `quizzs_questions` VALUES(254, 37, 255, 6);
INSERT INTO `quizzs_questions` VALUES(252, 37, 261, 4);
INSERT INTO `quizzs_questions` VALUES(259, 38, 261, 3);
INSERT INTO `quizzs_questions` VALUES(271, 36, 143, 0);
INSERT INTO `quizzs_questions` VALUES(244, 35, 104, 0);
INSERT INTO `quizzs_questions` VALUES(272, 40, 261, 1);
INSERT INTO `quizzs_questions` VALUES(198, 32, 99, 3);
INSERT INTO `quizzs_questions` VALUES(240, 35, 59, 1);
INSERT INTO `quizzs_questions` VALUES(247, 36, 261, 2);
INSERT INTO `quizzs_questions` VALUES(195, 31, 101, 2);
INSERT INTO `quizzs_questions` VALUES(245, 35, 102, 0);
INSERT INTO `quizzs_questions` VALUES(193, 29, 99, 2);
INSERT INTO `quizzs_questions` VALUES(268, 36, 249, 0);
INSERT INTO `quizzs_questions` VALUES(269, 36, 107, 0);
INSERT INTO `quizzs_questions` VALUES(270, 36, 198, 0);
INSERT INTO `quizzs_questions` VALUES(274, 40, 59, 0);
INSERT INTO `quizzs_questions` VALUES(275, 40, 99, 0);
INSERT INTO `quizzs_questions` VALUES(276, 40, 99, 0);
INSERT INTO `quizzs_questions` VALUES(277, 40, 108, 0);

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
