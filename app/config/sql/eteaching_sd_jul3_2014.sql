-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2014 at 07:34 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eteaching_sd`
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
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) DEFAULT NULL,
  `matapelajaran` int(11) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `produksi` varchar(200) DEFAULT NULL,
  `sutradara` varchar(200) DEFAULT NULL,
  `jumlahhalaman` int(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) DEFAULT NULL,
  `file` varchar(100) NOT NULL,
  `pdffile` varchar(255) NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=283 ;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` VALUES(173, NULL, NULL, 1, 1, 'ILMU PENGETAHUAN SOSIAL', 'Penerbit BSE', 'M. Saleh Muhammad, Ade Munajat', NULL, NULL, 110, 2008, 'ILMU\r\nPENGETAHUAN\r\nSOSIAL\r\n', 'files/ebooks/173/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/173/pdf/kelas03_ilmu-pengetahuan-sosial_saleh-muhammad.pdf', NULL, NULL, NULL, '2014-05-11 23:43:49', '2014-05-12 00:26:05');
INSERT INTO `ebooks` VALUES(171, NULL, NULL, 1, 1, 'Aku Bangga Bahasa Indonesia', 'Penerbit BSE', 'Ismoyo, Romiyatun', NULL, NULL, 109, 0000, 'Aku Bangga\r\nBahasa Indonesia\r\n', 'files/ebooks/171/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/171/pdf/kelas03_aku-bangga-bindo_ismoyo.pdf', NULL, NULL, NULL, '2014-05-11 23:38:53', '2014-05-12 00:26:41');
INSERT INTO `ebooks` VALUES(172, NULL, NULL, 1, 1, 'Ilmu Pengetahuan Alam dan Lingkunganku', 'Penerbit BSE', 'Mulyati Arifin, Mimin Nurjhani K., dan Muslim', NULL, NULL, 130, 2008, 'Ilmu Pengetahuan Alam dan Lingkunganku\r\n', 'files/ebooks/172/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/172/pdf/kelas03_ipa_mulyati.pdf', NULL, NULL, NULL, '2014-05-11 23:41:52', '2014-05-12 00:26:22');
INSERT INTO `ebooks` VALUES(165, NULL, NULL, 1, 1, 'Pendidikan Kewarganegaran', 'BSE', 'Setiati Widihastuti, Fajar Rahayuningsih', NULL, NULL, 114, 2008, 'Pendidikan Kewarganegaran', 'files/ebooks/165/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/165/pdf/kelas01_pkn_setiati.pdf', NULL, NULL, NULL, '2014-05-11 23:12:19', '2014-05-11 23:13:07');
INSERT INTO `ebooks` VALUES(166, NULL, NULL, 1, 1, 'Aku Bangga Bahasa Indonesia', 'Penerbit BSE', 'Ismoyo, Romiyatun', NULL, NULL, 92, 2008, 'Aku Bangga\r\nBahasa Indonesia', 'files/ebooks/166/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/166/pdf/kelas02_aku-bangga-bindo_ismoyo.pdf', NULL, NULL, NULL, '2014-05-11 23:14:39', '2014-05-12 00:21:04');
INSERT INTO `ebooks` VALUES(167, NULL, NULL, 1, 1, 'Ilmu Pengetahuan Alam', 'Penerbit BSE', 'Heri Sulistyanto, Edy Wiyono', NULL, NULL, 98, 2008, 'ilmu pengetahuan alam\r\n', 'files/ebooks/167/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/167/pdf/kelas02_ipa_heri-sulistyanto.pdf', NULL, NULL, NULL, '2014-05-11 23:16:54', '2014-05-12 00:24:34');
INSERT INTO `ebooks` VALUES(168, NULL, NULL, 1, 1, 'Ilmu Pengetahuan Sosial', 'Penerbit BSE', ' kuswanto, y suharjanto', NULL, NULL, 114, 2008, 'ilmu pengetahuan sosial\r\n', 'files/ebooks/168/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/168/pdf/kelas02_ips_kuswanto.pdf', NULL, NULL, NULL, '2014-05-11 23:19:34', '2014-05-12 00:24:20');
INSERT INTO `ebooks` VALUES(169, NULL, NULL, 1, 1, 'Senang Matematika 2', 'Penerbit BSE', 'Amin Mustoha, Buchori, Erna Juliatun, Isti Hidayah', NULL, NULL, 226, 2008, 'Senang Matematika 2\r\nUntuk SD/MI Kelas 2\r\n', 'files/ebooks/169/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/169/pdf/kelas02_mtk_buchori.pdf', NULL, NULL, NULL, '2014-05-11 23:22:04', '2014-05-12 00:26:56');
INSERT INTO `ebooks` VALUES(174, NULL, NULL, 1, 1, 'Cerdas Berhitung MATEMATIKA', 'Penerbit BSE', 'Nur Fajariyah, Defi Triratnawati', NULL, NULL, 220, 2008, 'Cerdas Berhitung\r\nMATEMATIKA\r\n', 'files/ebooks/174/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/174/pdf/kelas03_cerdas-berhitung-mtk_nur.pdf', NULL, NULL, NULL, '2014-05-11 23:47:42', '2014-05-12 00:23:22');
INSERT INTO `ebooks` VALUES(175, NULL, NULL, 1, 1, 'Pendidikan Kewarganegaraan: Menjadi Warga Negara yang Baik', 'Penerbit BSE', 'Prayoga Bestari, Ati Sumiati', NULL, NULL, 122, 2008, 'Pendidikan Kewarganegaraan:\r\nMenjadi Warga Negara\r\nyang Baik\r\n', 'files/ebooks/175/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/175/pdf/kelas04_pkn_prayoga.pdf', NULL, NULL, NULL, '2014-05-11 23:50:51', '2014-05-12 00:23:37');
INSERT INTO `ebooks` VALUES(176, NULL, NULL, 1, 1, 'Ayo Belajar Matematika', 'Penerbit BSE', 'Burhan Mustaqim, Ary Astuty', NULL, NULL, 252, 2008, 'Ayo Belajar\r\nMatematika\r\n', 'files/ebooks/176/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/176/pdf/kelas04_ayo-belajar-mtk_burhan.pdf', NULL, NULL, NULL, '2014-05-11 23:52:57', '2014-05-12 00:23:51');
INSERT INTO `ebooks` VALUES(177, NULL, NULL, 1, 1, 'ILMU PENGETAHUAN ALAM 4', 'Penerbit BSE', 'Budi Wahyono, Setya Nurachmandani', NULL, NULL, 148, 2008, 'ILMU\r\nPENGETAHUAN ALAM 4\r\n', 'files/ebooks/177/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/177/pdf/kelas04_ipa_budi-wahyono.pdf', NULL, NULL, NULL, '2014-05-11 23:55:58', '2014-05-12 00:24:05');
INSERT INTO `ebooks` VALUES(178, NULL, NULL, 1, 1, 'CERDAS PENGETAHUAN SOSIAL', 'Penerbit BSE', 'Retno Heny Pujiati, Umi Yuliati', NULL, NULL, 228, 2008, 'CERDAS\r\nPENGETAHUAN\r\nSOSIAL\r\n', 'files/ebooks/178/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/178/pdf/kelas04_sd_cerdas-pengetahuan-sosial_retno.pdf', NULL, NULL, NULL, '2014-05-11 23:59:33', '2014-05-12 00:27:12');
INSERT INTO `ebooks` VALUES(179, NULL, NULL, 1, 2, 'Gemar Matematika 5', 'Penerbit BSE', 'Y.D. Sumanto, Heny Kusumawati, Nur Aksin', NULL, NULL, 194, 2008, 'Gemar Matematika 5\r\nuntuk SD/MI Kelas V\r\n', 'files/ebooks/179/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/179/pdf/kelas05_gemar-mtk_sumanto.pdf', NULL, NULL, NULL, '2014-05-12 00:02:16', '2014-05-12 00:27:29');
INSERT INTO `ebooks` VALUES(180, NULL, NULL, 1, 1, 'ILMU PENGETAHUAN SOSIAL 5', 'Penerbit BSE', 'Endang Susilaningsih, Linda S. Limbong', NULL, NULL, 239, 2008, 'ILMU PENGETAHUAN SOSIAL 5\r\n', 'files/ebooks/180/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/180/pdf/kelas05_ips_endang.pdf', NULL, NULL, NULL, '2014-05-12 00:04:58', '2014-05-12 00:27:48');
INSERT INTO `ebooks` VALUES(181, NULL, NULL, 1, 1, 'IPA Salingtemas 5', 'Penerbit BSE', 'Choiril Azmiyawati, Wigati Hadi Omegawati, Rohana Kusumawati', NULL, NULL, 194, 0000, 'IPA Salingtemas 5\r\n', 'files/ebooks/181/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/181/pdf/kelas05_ipa_choiril.pdf', NULL, NULL, NULL, '2014-05-12 00:08:23', '2014-05-12 00:28:03');
INSERT INTO `ebooks` VALUES(182, NULL, NULL, 1, 1, 'Bahasa Indonesia', 'Penerbit BSE', 'Umri Nurâ€™aini, Indriyani', NULL, NULL, 147, 2008, 'Bahasa Indonesia\r\n', 'files/ebooks/182/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/182/pdf/kelas05_bahasa-indonesia_umri.pdf', NULL, NULL, NULL, '2014-05-12 00:11:15', '2014-05-12 00:28:22');
INSERT INTO `ebooks` VALUES(183, NULL, NULL, 1, 1, 'Ilmu Pengetahuan Alam1', 'Penerbit BSE', 'Heri Sulistyanto, Edy Wiyono', NULL, NULL, 160, 0000, 'Ilmu Pengetahuan Alam\r\n', 'files/ebooks/183/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/183/pdf/kelas06_ilmu-pengetahuan-alam_heri-sulistyanto.pdf', NULL, NULL, NULL, '2014-05-12 00:14:31', '2014-05-12 03:47:28');
INSERT INTO `ebooks` VALUES(184, NULL, NULL, 1, 1, 'Bahasa Indonesia Membuatku Cerdas 6', 'Penerbit BSE', 'Edi Warsidi dan Farika', NULL, NULL, 123, 2008, 'Bahasa Indonesia Membuatku Cerdas 6\r\n', 'files/ebooks/184/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/184/pdf/kelas06_bahasa-indonesia-membuatku-cerdas_edi.pdf', NULL, NULL, NULL, '2014-05-12 00:16:42', '2014-05-12 00:28:56');
INSERT INTO `ebooks` VALUES(185, NULL, NULL, 1, 1, 'Ilmu Pengetahuan Sosial', 'Penerbit BSE', 'Arif Julianto Sri Nugroho, Nur Siwi Ismawati, Westriningsih', NULL, NULL, 154, 0000, 'Ilmu Pengetahuan Sosial\r\n', 'files/ebooks/185/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/185/pdf/kelas06_ips_arif.pdf', NULL, NULL, NULL, '2014-05-12 00:18:41', '2014-05-13 01:42:10');
INSERT INTO `ebooks` VALUES(258, NULL, NULL, 1, 5, 'PAS Sekolah', 'Kemendiknas', 'Kemendiknas', NULL, NULL, 16, 2011, 'PAS Sekolah', 'files/ebooks/258/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/258/pdf/01manualinstalasipas.pdf', NULL, NULL, NULL, '2014-07-03 00:53:34', '2014-07-03 06:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `halamen`
--

CREATE TABLE `halamen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_id` int(11) NOT NULL,
  `template_type` int(11) NOT NULL,
  `content` text,
  `file` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_extension` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `halamen`
--

INSERT INTO `halamen` VALUES(79, 183, 1, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:baseline">\r\n			<div style="background:transparent; border:0px; padding:0px">\r\n			<div style="background:transparent; border:0px; padding:0px">\r\n			<p>When a user clicks on play/pause, volume, or the full-screen button, the page does a post-back. This has been seen in Chrome 23, IE 9, Safari 5, both for Windows and Mac. Firefox 17 and Opera 12 are okay. The best one probably has to be the full-screen in Safari.</p>\r\n\r\n			<p>Here&#39;s the code I&#39;m using to embed the video:</p>\r\n\r\n			<pre>\r\n<code>&lt;div id=&#39;my-video&#39;&gt;&lt;/div&gt;\r\n&lt;script type=&#39;text/javascript&#39;&gt;\r\n    jwplayer(&#39;my-video&#39;).setup({\r\n         file: &#39;/videos/Penultimate_Md.mp4&#39;,\r\n         image: &#39;/videos/penultimate_first.png&#39;,\r\n         width: &#39;480&#39;,\r\n         height: &#39;270&#39;,\r\n         });\r\n&lt;/script&gt;</code></pre>\r\n\r\n			<p>How can this be resolved? Is this just a bug that has nothing to do with me?</p>\r\n\r\n			<h2>Confirmed</h2>\r\n\r\n			<p>It&#39;s a bug in the HTML5 video player. The control bar inputs are all html buttons, which cause the ASP validators to fire (thanks to @Lando for pointing that out). Longtail says it&#39;ll be fixed in the next release. Adding&nbsp;<code>primary: flash,</code>&nbsp;will work provided the user has flash installed.</p>\r\n			</div>\r\n\r\n			<div style="background:transparent; border:0px; padding:0px"><a href="http://stackoverflow.com/questions/tagged/javascript">javascript</a>&nbsp;<a href="http://stackoverflow.com/questions/tagged/jwplayer">jwplayer</a></div>\r\n\r\n			<table style="width:665px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="vertical-align:top">\r\n						<div style="background:transparent; border:0px; padding:2px 0px 0px"><a href="http://stackoverflow.com/q/13804194">share</a>|<a href="http://stackoverflow.com/posts/13804194/edit">improve this question</a></div>\r\n						</td>\r\n						<td style="height:58px; vertical-align:top; width:175px">\r\n						<div style="background:transparent; border:0px; padding:0px">\r\n						<div style="background:transparent; border:0px; padding:0px"><a href="http://stackoverflow.com/posts/13804194/revisions">edited&nbsp;Dec 11 &#39;12 at 15:34</a></div>\r\n\r\n						<div style="background:transparent; border:0px; padding:0px">&nbsp;</div>\r\n\r\n						<div style="background:transparent; border:0px; padding:0px">&nbsp;</div>\r\n						</div>\r\n						</td>\r\n						<td style="height:58px; vertical-align:top; width:175px">\r\n						<div style="background:transparent; border:0px; padding:0px">\r\n						<div style="background:transparent; border:0px; padding:0px">asked&nbsp;Dec 10 &#39;12 at 15:43</div>\r\n\r\n						<div style="background:transparent; border:0px; padding:0px">\r\n						<div style="background:transparent; border:0px; padding:0px"><a href="http://stackoverflow.com/users/1015495/miketheliar"><img alt="" src="https://www.gravatar.com/avatar/e44fdcfb1f25aea44e160db896104d22?s=32&amp;d=identicon&amp;r=PG" style="height:32px; margin:0px auto" /></a></div>\r\n						</div>\r\n\r\n						<div style="background:transparent; border:0px; padding:0px"><a href="http://stackoverflow.com/users/1015495/miketheliar">mikeTheLiar</a><br />\r\n						<strong>2,033</strong>21535</div>\r\n						</div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top; width:60px">&nbsp;</td>\r\n			<td style="vertical-align:baseline">add comment</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><a name="tab-top"></a></p>\r\n\r\n<div style="background:transparent; border:0px; padding:0px">\r\n<h2>3 Answers</h2>\r\n\r\n<div style="background:transparent; border:0px; padding:0px">\r\n<div style="background:transparent; border:0px; padding:0px"><a href="http://stackoverflow.com/questions/13804194/jwplayer-control-bar-causing-post-backs?answertab=active#tab-top">active</a><a href="http://stackoverflow.com/questions/13804194/jwplayer-control-bar-causing-post-backs?answertab=oldest#tab-top">oldest</a><a href="http://stackoverflow.com/questions/13804194/jwplayer-control-bar-causing-post-backs?answertab=votes#tab-top">votes</a></div>\r\n</div>\r\n</div>\r\n\r\n<p><a name="15231437"></a></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td style="vertical-align:top; width:60px">\r\n			<div style="background:transparent; border:0px; padding:0px">up vote2down voteaccepted</div>\r\n			</td>\r\n			<td style="vertical-align:baseline">\r\n			<div style="background:transparent; border:0px; padding:0px">\r\n			<p>I believe Mike&#39;s issue is that the jwplayer has not finished loading. Just add it to the event after the loading of the player. This worked in my code</p>\r\n\r\n			<pre>\r\n<code>    &lt;div id=&quot;my-video&quot;&gt;Loading the player...&lt;/div&gt;\r\n    &lt;script type=&#39;text/javascript&#39;&gt;\r\n        $(document).ready(function () {\r\n            jwplayer(&#39;my-video&#39;).setup({\r\n                playlist: [{\r\n                    sources: [{ file: &#39;SampleVideo.mp4&#39; }]\r\n                }]\r\n            });\r\n            jwplayer().onReady(function (event) {\r\n                $(&#39;#my-video button&#39;).on(&#39;click&#39;, function (event) { return false; });\r\n                alert(&#39;Ready&#39;);\r\n            });\r\n        });\r\n    &lt;/script&gt;</code></pre>\r\n			</div>\r\n\r\n			<table style="width:665px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="vertical-align:top">\r\n						<div style="background:transparent; border:0px; padding:2px 0px 0px"><a href="http://stackoverflow.com/a/15231437">share</a>|<a href="http://stackoverflow.com/posts/15231437/edit">improve this answer</a></div>\r\n						</td>\r\n						<td style="height:58px; vertical-align:top; width:175px">\r\n						<div style="background:transparent; border:0px; padding:0px">\r\n						<div style="background:transparent; border:0px; padding:0px"><a href="http://stackoverflow.com/posts/15231437/revisions">edited&nbsp;Mar 6 &#39;13 at 20:40</a></div>\r\n\r\n						<div style="background:transparent; border:0px; padding:0px">&nbsp;</div>\r\n\r\n						<div style="background:transparent; border:0px; padding:0px">&nbsp;</div>\r\n						</div>\r\n						</td>\r\n						<td style="height:58px; vertical-align:top; width:175px">\r\n						<div style="background:transparent; border:0px; padding:0px">\r\n						<div style="background:transparent; border:0px; padding:0px">answered&nbsp;Mar 5 &#39;13 at 18:32</div>\r\n\r\n						<div style="background:transparent; border:0px; padding:0px">\r\n						<div style="background:transparent; border:0px; padding:0px"><a href="http://stackoverflow.com/users/60629/goodwince"><img alt="" src="https://www.gravatar.com/avatar/b958be1f3a4a9743998ab2ea51d9c945?s=32&amp;d=identicon&amp;r=PG" style="height:32px; margin:0px auto" /></a></div>\r\n						</div>\r\n\r\n						<div style="background:transparent; border:0px; padding:0px"><a href="http://stackoverflow.com/users/60629/goodwince">goodwince</a><br />\r\n						<strong>150</strong>14</div>\r\n						</div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:top; width:60px">&nbsp;</td>\r\n			<td style="vertical-align:baseline">\r\n			<table style="width:660px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="vertical-align:baseline">\r\n						<table>\r\n							<tbody>\r\n								<tr>\r\n									<td style="vertical-align:baseline">&nbsp;&nbsp;</td>\r\n									<td style="vertical-align:baseline">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n						<td style="vertical-align:text-top">\r\n						<div style="background:transparent; border:0px; padding:0px">Tried this, but the player never ended up loading...it just sat and said &quot;Loading the video player...&quot;&nbsp;&ndash;&nbsp;<a href="http://stackoverflow.com/users/1015495/miketheliar">mikeTheLiar</a>&nbsp;<span dir="ltr"><a href="http://stackoverflow.com/questions/13804194/jwplayer-control-bar-causing-post-backs#comment21476866_15231437">Mar 5 &#39;13 at 20:27</a></span></div>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="vertical-align:baseline">\r\n						<table>\r\n							<tbody>\r\n								<tr>\r\n									<td style="vertical-align:baseline">&nbsp;&nbsp;</td>\r\n									<td style="vertical-align:baseline">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n						<td style="vertical-align:text-top">\r\n						<div style="background:transparent; border:0px; padding:0px">Hey Mike.. made a mistake, added the &#39;#&#39; inside the jwplayer(&#39;my-video&#39;).. I actually came back to fix it and saw your comment. Thanks for your comment to point it out as well!&nbsp;&ndash;&nbsp;&nbsp;<a href="http://stackoverflow.com/users/60629/goodwince">goodwince</a>&nbsp;<span dir="ltr"><a href="http://stackoverflow.com/questions/13804194/jwplayer-control-bar-causing-post-backs#comment21479647_15231437">Mar 5 &#39;13 at 21:56</a></span></div>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="vertical-align:baseline">\r\n						<table>\r\n							<tbody>\r\n								<tr>\r\n									<td style="vertical-align:baseline">&nbsp;&nbsp;</td>\r\n									<td style="vertical-align:baseline">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n						<td style="vertical-align:text-top">\r\n						<div style="background:transparent; border:0px; padding:0px">Hmm....now the&nbsp;<code>div</code>&nbsp;renders and it load the video (you can see it using dev tools) but there&#39;s nothing visible - just an empty space. Hovering over it shows there&#39;s something there - but nothing happens when you click. Curiouser and curiouser....&nbsp;&ndash;&nbsp;&nbsp;<a href="http://stackoverflow.com/users/1015495/miketheliar">mikeTheLiar</a>&nbsp;<span dir="ltr"><a href="http://stackoverflow.com/questions/13804194/jwplayer-control-bar-causing-post-backs#comment21506043_15231437">Mar 6 &#39;13 at 14:48</a></span></div>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="vertical-align:baseline">\r\n						<table>\r\n							<tbody>\r\n								<tr>\r\n									<td style="vertical-align:baseline">&nbsp;&nbsp;</td>\r\n									<td style="vertical-align:baseline">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n						<td style="vertical-align:text-top">\r\n						<div style="background:transparent; border:0px; padding:0px">This code above worked perfectly for me. If you&#39;re still having trouble check the video? I changed the way the file is loaded in for JW6. This is the suitable way for multiple formats. Flash, MP4, Quicktime..&nbsp;&ndash;&nbsp;&nbsp;<a href="http://stackoverflow.com/users/60629/goodwince">goodwince</a><span dir="ltr"><a href="http://stackoverflow.com/questions/13804194/jwplayer-control-bar-causing-post-backs#comment21519188_15231437">Mar 6 &#39;13 at 20:41</a></span>&nbsp;</div>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="vertical-align:baseline">\r\n						<table>\r\n							<tbody>\r\n								<tr>\r\n									<td style="vertical-align:baseline">&nbsp;&nbsp;</td>\r\n									<td style="vertical-align:baseline">&nbsp;</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n						<td style="vertical-align:text-top">\r\n						<div style="background:transparent; border:0px; padding:0px">Ah. I haven&#39;t updated yet. I should probably get around to that.&nbsp;&ndash;&nbsp;&nbsp;<a href="http://stackoverflow.com/users/1015495/miketheliar">mikeTheLiar</a>&nbsp;<span dir="ltr"><a href="http://stackoverflow.com/questions/13804194/jwplayer-control-bar-causing-post-backs#comment21519540_15231437">Mar 6 &#39;13 at 20:52</a></span></div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', '', 5, '2014-06-14 09:15:24', '2014-06-14 09:15:24');
INSERT INTO `halamen` VALUES(78, 183, 4, '<p>RAta atas</p>\r\n', 'chain_94GjIT9y.jpg', 'image', 'jpg', 4, '2014-06-14 09:03:26', '2014-06-14 09:03:26');
INSERT INTO `halamen` VALUES(77, 183, 3, '<p>rata kanan</p>\r\n', 'easy_vUfzI7XJ.png', 'image', 'png', 3, '2014-06-14 09:01:37', '2014-06-14 09:01:37');
INSERT INTO `halamen` VALUES(76, 183, 2, '<p>RAta kiri</p>\r\n', 'eteaching_sd-files-videosDAILY_ENGLISH_CONVERSATION_VOLUME_2_1_BOOK_1_VCD.flv', 'video', 'flv', 2, '2014-06-14 09:00:26', '2014-06-14 09:00:26');
INSERT INTO `halamen` VALUES(75, 183, 1, '<p>sdfdsfdf</p>\r\n', '', '', '', 1, '2014-06-14 08:38:48', '2014-06-14 08:38:48');
INSERT INTO `halamen` VALUES(80, 184, 1, '<h1>Sample Layout Full Text</h1>\r\n\r\n<p>Creating reusable elements with requestAction is very simple. At the end, we can even cache the element using the new feature in 1.2.<br />\r\n<br />\r\nStart of with a simple controller.&nbsp;</p>\r\n\r\n<p><strong>Controller Class:</strong></p>\r\n\r\n<p><code>&lt;?php&nbsp;&nbsp;<br />\r\nclass&nbsp;PostsController&nbsp;extends&nbsp;AppController&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;$name&nbsp;=&nbsp;&#39;Posts&#39;;&nbsp;<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;index()&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$posts&nbsp;=&nbsp;$this-&gt;Post-&gt;findAll();&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset($this-&gt;params[&#39;requested&#39;]))&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$posts;&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-&gt;set(&#39;posts&#39;,&nbsp;$posts);&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />\r\n}&nbsp;<br />\r\n?&gt;</code>So, we created the Posts controller and we gave it an index action. Then we found all the posts, then if requestAction is used it will return the posts, otherwise it will set the posts for the view.<br />\r\n<br />\r\nNow we can create a reusable element that will use requestAction. We create a file in /app/elements/posts.thtml, then add the code below.</p>\r\n\r\n<p><strong>View Template:</strong></p>\r\n\r\n<p><br />\r\n<code>$posts&nbsp;=&nbsp;$this-&gt;requestAction(&#39;posts/index&#39;);&nbsp;<br />\r\nforeach($posts&nbsp;as&nbsp;$post):&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;$post[&#39;Post&#39;][&#39;title&#39;];&nbsp;<br />\r\nendforeach;&nbsp;</code><br />\r\n<br />\r\nNow we have the element we can include it in the layout, another element or a view template.</p>\r\n\r\n<p><strong>View Template:</strong></p>\r\n\r\n<p><br />\r\n<code>&lt;?php&nbsp;echo&nbsp;$this-&gt;renderElement(&#39;posts&#39;);?&gt;&nbsp;</code><br />\r\n<br />\r\nThe code above is for 1.1. If you want to get into the goodness of Cake 1.2 you can look at the updated code below.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Controller Class:</strong></p>\r\n\r\n<p><code>&lt;?php&nbsp;&nbsp;<br />\r\nclass&nbsp;PostsController&nbsp;extends&nbsp;AppController&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;$name&nbsp;=&nbsp;&#39;Posts&#39;;&nbsp;<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;index()&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$posts&nbsp;=&nbsp;$this-&gt;paginate();&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset($this-&gt;params[&#39;requested&#39;]))&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$posts;&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-&gt;set(&#39;posts&#39;,&nbsp;$posts);&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />\r\n}&nbsp;<br />\r\n?&gt;</code>Notice we changed the index action to use paginate instead.<br />\r\nIn the view we can use paginate params to control what is returned.</p>\r\n\r\n<p><strong>View Template:</strong></p>\r\n\r\n<p><br />\r\n<code>$posts&nbsp;=&nbsp;$this-&gt;requestAction(&#39;posts/index/sort:created/direction:desc/limit:10&#39;);&nbsp;<br />\r\nforeach($posts&nbsp;as&nbsp;$post):&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;$post[&#39;Post&#39;][&#39;title&#39;];&nbsp;<br />\r\nendforeach;&nbsp;</code><br />\r\nNow we are only grabbing the latest 10 posts. Whoa, we just created a latest posts element without having to change our index action or create another action.&nbsp;<br />\r\n<br />\r\nLets call this one latest posts and cache it for an hour.<br />\r\ncreate the file /app/elements/latest_posts.ctp.</p>\r\n\r\n<p><strong>View Template:</strong></p>\r\n\r\n<p><br />\r\n<code>&lt;?php&nbsp;echo&nbsp;$this-&gt;element(&#39;latest_posts&#39;,&nbsp;array(&#39;cache&#39;=&gt;&#39;+1&nbsp;hour&#39;);?&gt;&nbsp;</code><br />\r\nWe can still use this element in any other view file.&nbsp;<br />\r\n<br />\r\nThere are other ways to use requestAction, but if you are looking to create reusable elements for your site, then this is the way to go.</p>\r\n', '', '', '', 1, '2014-06-14 09:44:46', '2014-06-14 09:44:46');
INSERT INTO `halamen` VALUES(81, 184, 2, '<h1>Sample Layout Rata Kiri</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar feugiat neque, eu tincidunt nisi accumsan sed. Sed vel lorem ligula. Morbi vitae dolor aliquet, ullamcorper diam a, vulputate dui. In quis augue nibh. Integer aliquet erat purus, vel egestas ante dignissim quis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque bibendum viverra enim a ornare. Vestibulum feugiat diam eget tempus congue. Mauris metus nisi, placerat vel tristique ac, blandit vestibulum tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<p>Fusce arcu justo, venenatis et semper quis, molestie laoreet lorem. Donec euismod facilisis sem. Sed pellentesque cursus porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel libero tincidunt, pellentesque leo nec, dapibus metus. Vestibulum elementum sem nisl, sed vulputate turpis consequat ut. Duis ornare est eu urna vestibulum, id dapibus felis interdum. Curabitur a accumsan dolor, sit amet imperdiet elit. Aliquam id augue justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue ac nisi ornare adipiscing porta id risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque in gravida lorem. Sed aliquam, leo a iaculis congue, quam purus sollicitudin lorem, sit amet viverra magna tortor vitae libero. Sed non condimentum neque, et lacinia justo. Curabitur dignissim nibh ac erat scelerisque congue.</p>\r\n\r\n<p>Ut hendrerit arcu metus, sed ultricies leo tempor in. Sed tincidunt porttitor tincidunt. Vestibulum eleifend velit vitae purus convallis bibendum. Sed feugiat auctor porta. Quisque sed pharetra massa. Integer molestie vehicula neque quis lobortis. Ut a aliquet leo. Nunc neque dui, rutrum sed magna a, placerat consequat dui. Fusce vitae odio ac nunc feugiat lacinia eget quis justo. Pellentesque feugiat id nunc in consequat. Ut luctus eros in enim eleifend, non rutrum nibh ornare. Nam viverra aliquam leo. Integer orci diam, rhoncus non tellus vitae, gravida congue turpis.</p>\r\n', '1_IPA_Suara_Binatang.swf', 'animation', 'swf', 2, '2014-06-14 09:47:52', '2014-06-14 09:47:52');
INSERT INTO `halamen` VALUES(82, 184, 3, '<h2>Sample Layout Rata Kanan</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar feugiat neque, eu tincidunt nisi accumsan sed. Sed vel lorem ligula. Morbi vitae dolor aliquet, ullamcorper diam a, vulputate dui. In quis augue nibh. Integer aliquet erat purus, vel egestas ante dignissim quis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque bibendum viverra enim a ornare. Vestibulum feugiat diam eget tempus congue. Mauris metus nisi, placerat vel tristique ac, blandit vestibulum tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<p>Fusce arcu justo, venenatis et semper quis, molestie laoreet lorem. Donec euismod facilisis sem. Sed pellentesque cursus porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel libero tincidunt, pellentesque leo nec, dapibus metus. Vestibulum elementum sem nisl, sed vulputate turpis consequat ut. Duis ornare est eu urna vestibulum, id dapibus felis interdum. Curabitur a accumsan dolor, sit amet imperdiet elit. Aliquam id augue justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue ac nisi ornare adipiscing porta id risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque in gravida lorem. Sed aliquam, leo a iaculis congue, quam purus sollicitudin lorem, sit amet viverra magna tortor vitae libero. Sed non condimentum neque, et lacinia justo. Curabitur dignissim nibh ac erat scelerisque congue.</p>\r\n\r\n<p>Ut hendrerit arcu metus, sed ultricies leo tempor in. Sed tincidunt porttitor tincidunt. Vestibulum eleifend velit vitae purus convallis bibendum. Sed feugiat auctor porta. Quisque sed pharetra massa. Integer molestie vehicula neque quis lobortis. Ut a aliquet leo. Nunc neque dui, rutrum sed magna a, placerat consequat dui. Fusce vitae odio ac nunc feugiat lacinia eget quis justo. Pellentesque feugiat id nunc in consequat. Ut luctus eros in enim eleifend, non rutrum nibh ornare. Nam viverra aliquam leo. Integer orci diam, rhoncus non tellus vitae, gravida congue turpis.</p>\r\n', 'screen-shot-2014-03-26-at-5.29.02-am_dNEMiZVp.png', 'image', 'png', 3, '2014-06-14 09:49:20', '2014-06-14 09:49:20');
INSERT INTO `halamen` VALUES(83, 184, 4, '<h1>Sample Layout Media Atas</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar feugiat neque, eu tincidunt nisi accumsan sed. Sed vel lorem ligula. Morbi vitae dolor aliquet, ullamcorper diam a, vulputate dui. In quis augue nibh. Integer aliquet erat purus, vel egestas ante dignissim quis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque bibendum viverra enim a ornare. Vestibulum feugiat diam eget tempus congue. Mauris metus nisi, placerat vel tristique ac, blandit vestibulum tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<p>Fusce arcu justo, venenatis et semper quis, molestie laoreet lorem. Donec euismod facilisis sem. Sed pellentesque cursus porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel libero tincidunt, pellentesque leo nec, dapibus metus. Vestibulum elementum sem nisl, sed vulputate turpis consequat ut. Duis ornare est eu urna vestibulum, id dapibus felis interdum. Curabitur a accumsan dolor, sit amet imperdiet elit. Aliquam id augue justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue ac nisi ornare adipiscing porta id risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque in gravida lorem. Sed aliquam, leo a iaculis congue, quam purus sollicitudin lorem, sit amet viverra magna tortor vitae libero. Sed non condimentum neque, et lacinia justo. Curabitur dignissim nibh ac erat scelerisque congue.</p>\r\n\r\n<p>Ut hendrerit arcu metus, sed ultricies leo tempor in. Sed tincidunt porttitor tincidunt. Vestibulum eleifend velit vitae purus convallis bibendum. Sed feugiat auctor porta. Quisque sed pharetra massa. Integer molestie vehicula neque quis lobortis. Ut a aliquet leo. Nunc neque dui, rutrum sed magna a, placerat consequat dui. Fusce vitae odio ac nunc feugiat lacinia eget quis justo. Pellentesque feugiat id nunc in consequat. Ut luctus eros in enim eleifend, non rutrum nibh ornare. Nam viverra aliquam leo. Integer orci diam, rhoncus non tellus vitae, gravida congue turpis.</p>\r\n', 'DAILY ENGLISH CONVERSATION VOLUME 2 ( 1 BOOK  1 VCD ).flv', 'video', 'flv', 4, '2014-06-14 09:52:01', '2014-06-14 09:52:01');
INSERT INTO `halamen` VALUES(85, 185, 1, '<p>Full texts</p>\r\n', '', '', '', 1, '2014-06-14 12:06:01', '2014-06-14 12:06:01');
INSERT INTO `halamen` VALUES(84, 184, 5, NULL, 'daily-english-conversation-volume-2-(-1-book--1-vcd-)_nHn4XDz4.flv', 'video', 'flv', 5, '2014-06-14 10:30:10', '2014-06-14 10:30:10');
INSERT INTO `halamen` VALUES(86, 185, 2, '<p>Dengan foto di kiri</p>\r\n', 'cover_cd_CEXEZ4N6.jpg', 'image', 'jpg', 2, '2014-06-14 12:06:56', '2014-06-14 12:06:56');
INSERT INTO `halamen` VALUES(87, 187, 1, '<h1>ini co<span style="line-height:1.6">ntoh full teks</span></h1>\r\n\r\n<p><span style="line-height:1.6">hjgdagsdgjhsaghjdasgd</span></p>\r\n', '', '', '', 1, '2014-06-14 13:40:49', '2014-06-14 13:40:49');
INSERT INTO `halamen` VALUES(88, 187, 4, '', 'cover_cd_R805JAm0.jpg', 'image', 'jpg', 2, '2014-06-14 13:41:34', '2014-06-14 13:41:34');
INSERT INTO `halamen` VALUES(89, 188, 4, '<p>ssffdsffdfd</p>\r\n', 'daily-english-conversation-volume-2-(-1-book--1-vcd-)_HfudGL1t.flv', 'video', 'flv', 1, '2014-06-14 13:43:09', '2014-06-14 13:43:09');
INSERT INTO `halamen` VALUES(90, 188, 2, '<p>sssddsdsds</p>\r\n', 'mandiri_logo_oYLEgUVf.png', 'image', 'png', 2, '2014-06-14 13:43:48', '2014-06-14 13:43:48');
INSERT INTO `halamen` VALUES(91, 188, 4, '<p>Creating reusable elements with requestAction is very simple. At the end, we can even cache the element using the new feature in 1.2.<br />\r\n<br />\r\nStart of with a simple controller.&nbsp;</p>\r\n\r\n<p><strong>Controller Class:</strong></p>\r\n\r\n<p><code>&lt;?php&nbsp;&nbsp;<br />\r\nclass&nbsp;PostsController&nbsp;extends&nbsp;AppController&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;$name&nbsp;=&nbsp;&#39;Posts&#39;;&nbsp;<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;index()&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$posts&nbsp;=&nbsp;$this-&gt;Post-&gt;findAll();&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset($this-&gt;params[&#39;requested&#39;]))&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$posts;&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-&gt;set(&#39;posts&#39;,&nbsp;$posts);&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />\r\n}&nbsp;<br />\r\n?&gt;</code>So, we created the Posts controller and we gave it an index action. Then we found all the posts, then if requestAction is used it will return the posts, otherwise it will set the posts for the view.<br />\r\n<br />\r\nNow we can create a reusable element that will use requestAction. We create a file in /app/elements/posts.thtml, then add the code below.</p>\r\n\r\n<p><strong>View Template:</strong></p>\r\n\r\n<p><br />\r\n<code>$posts&nbsp;=&nbsp;$this-&gt;requestAction(&#39;posts/index&#39;);&nbsp;<br />\r\nforeach($posts&nbsp;as&nbsp;$post):&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;$post[&#39;Post&#39;][&#39;title&#39;];&nbsp;<br />\r\nendforeach;&nbsp;</code><br />\r\n<br />\r\nNow we have the element we can include it in the layout, another element or a view template.</p>\r\n\r\n<p><strong>View Template:</strong></p>\r\n\r\n<p><br />\r\n<code>&lt;?php&nbsp;echo&nbsp;$this-&gt;renderElement(&#39;posts&#39;);?&gt;&nbsp;</code><br />\r\n<br />\r\nThe code above is for 1.1. If you want to get into the goodness of Cake 1.2 you can look at the updated code below.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Controller Class:</strong></p>\r\n\r\n<p><code>&lt;?php&nbsp;&nbsp;<br />\r\nclass&nbsp;PostsController&nbsp;extends&nbsp;AppController&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;$name&nbsp;=&nbsp;&#39;Posts&#39;;&nbsp;<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;index()&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$posts&nbsp;=&nbsp;$this-&gt;paginate();&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset($this-&gt;params[&#39;requested&#39;]))&nbsp;{&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$posts;&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-&gt;set(&#39;posts&#39;,&nbsp;$posts);&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />\r\n}&nbsp;<br />\r\n?&gt;</code>Notice we changed the index action to use paginate instead.<br />\r\nIn the view we can use paginate params to control what is returned.</p>\r\n\r\n<p><strong>View Template:</strong></p>\r\n\r\n<p><br />\r\n<code>$posts&nbsp;=&nbsp;$this-&gt;requestAction(&#39;posts/index/sort:created/direction:desc/limit:10&#39;);&nbsp;<br />\r\nforeach($posts&nbsp;as&nbsp;$post):&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;$post[&#39;Post&#39;][&#39;title&#39;];&nbsp;<br />\r\nendforeach;&nbsp;</code><br />\r\nNow we are only grabbing the latest 10 posts. Whoa, we just created a latest posts element without having to change our index action or create another action.&nbsp;<br />\r\n<br />\r\nLets call this one latest posts and cache it for an hour.<br />\r\ncreate the file /app/elements/latest_posts.ctp.</p>\r\n\r\n<p><strong>View Template:</strong></p>\r\n\r\n<p><br />\r\n<code>&lt;?php&nbsp;echo&nbsp;$this-&gt;element(&#39;latest_posts&#39;,&nbsp;array(&#39;cache&#39;=&gt;&#39;+1&nbsp;hour&#39;);?&gt;&nbsp;</code><br />\r\nWe can still use this element in any other view file.&nbsp;<br />\r\n<br />\r\nThere are other ways to use requestAction, but if you are looking to create reusable elements for your site, then this is the way to go.</p>\r\n', 'icon-user-default_WROoGocS.png', 'image', 'png', 3, '2014-06-14 13:45:30', '2014-06-14 13:45:30');
INSERT INTO `halamen` VALUES(92, 188, 5, NULL, '0006-abc-km1_Djs3wU3A.swf', 'animation', 'swf', 4, '2014-06-14 13:46:28', '2014-06-14 13:46:28');
INSERT INTO `halamen` VALUES(93, 188, 5, NULL, 'profile_QwvwLK77.flv', 'video', 'flv', 5, '2014-06-14 13:47:18', '2014-06-14 13:47:18');
INSERT INTO `halamen` VALUES(94, 188, 1, '<h1>LOREM IPASU</h1>\r\n\r\n<p>Lorem ip<em>sum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar feugiat neque, eu tincidunt nisi accumsan sed. Sed vel lorem ligula. Morbi vitae dolor aliquet, ullamcorper diam a, vulputate dui. In quis augue nibh. Integer aliquet erat purus, vel egestas ante dignissim quis. Cum sociis natoque penatibus et magnis dis part</em>u<span class="marker">rient montes, nascetur ridiculus mus. Quisque bibendum viverra enim a ornare. Vestibulum feugiat diam eget tempus congue. Mauris metus nisi, placerat vel tristique ac, blandit vestibulum tellus. Vestibulum ant</span>e ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<ol>\r\n	<li>sadfhsdhfksdf</li>\r\n	<li>sadfhshdfkhkjsadf</li>\r\n	<li>asdfkjhsdfajk</li>\r\n	<li>sdf</li>\r\n</ol>\r\n\r\n<p>Fusce arcu justo, venenatis et semper quis, molestie laoreet lorem. Donec euismod facilisis sem. Sed pellentesque cursus porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel libero tincidunt, pellentesque leo nec, dapibus metus. Vestibulum elementum sem nisl, sed vulputate turpis consequat ut. Duis ornare est eu urna vestibulum, id dapibus felis interdum. Curabitur a accumsan dolor, sit amet imperdiet elit. Aliquam id augue justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et augue ac nisi ornare adipiscing porta id risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque in gravida lorem. Sed aliquam, leo a iaculis congue, quam purus sollicitudin lorem, sit amet viverra magna tortor vitae libero. Sed non condimentum neque, et lacinia justo. Curabitur dignissim nibh ac erat scelerisque congue.</p>\r\n\r\n<p>Ut hendrerit arcu metus, sed ultricies leo tempor in. Sed tincidunt porttitor tincidunt. Vestibulum eleifend velit vitae purus convallis bibendum. Sed feugiat auctor porta. Quisque sed pharetra massa. Integer molestie vehicula neque quis lobortis. Ut a aliquet leo. Nunc neque dui, rutrum sed magna a, placerat consequat dui. Fusce vitae odio ac nunc feugiat lacinia eget quis justo. Pellentesque feugiat id nunc in consequat. Ut luctus eros in enim eleifend, non rutrum nibh ornare. Nam viverra aliquam leo. Integer orci diam, rhoncus non tellus vitae, gravida congue turpis.</p>\r\n', '', '', '', 6, '2014-06-14 13:51:40', '2014-06-14 13:51:40');
INSERT INTO `halamen` VALUES(95, 189, 1, '<p><strong>A. Perkembangan Provinsi di Indonesia </strong></p>\r\n\r\n<p>Indonesia adalah negara kepulauan yang terdiri atas ribuan pulau. Jumlah pulau di Indonesia adalah 17.506. Pulau-pulau tersebut menyebar di sekitar khatulistiwa. Pulau-pulau besar yang ada di Indonesia antara lain Jawa, Sumatra, Kalimantan, Sulawesi, dan Irian.</p>\r\n\r\n<p>Secara administrasi wilayah Indonesia terdiri atas pemerintah pusat dan pemerintah daerah. Pemerintah daerah terdiri atas pemerintah provinsi, kabupaten/kota, kecamatan, dan kelurahan/desa. Jumlah provinsi di Indonesia pada saat ini adalah 33 provinsi.</p>\r\n\r\n<p>Provinsi yang ada di Indonesia mengalami perkembangan dari tahun ke tahun. Pada saat Indonesia mem- proklamasikan kemerdekaan pada tanggal 17 Agustus 1945 jumlah provinsi di Indonesia ada delapan. Provinsi yang ada pada saat itu adalah Provinsi Sumatra, Jawa Barat, Jawa Tengah, Jawa Timur, Borneo (Kalimantan), Sulawesi, Sunda Kecil (Nusa Tenggara), dan Maluku.</p>\r\n\r\n<p><strong>Sumber: </strong><em>Sejarah Nasional Indonesia</em><br />\r\nâ–¼ <strong>Gambar 1.2</strong><br />\r\n<em>Sidang PPKI saat membentuk delapan provinsi. </em></p>\r\n\r\n<p>Pada tahun 1945&ndash;1949 Indonesia mengalami perkembangan wilayah. Hal ini disebabkan masuknya kembali Belanda untuk menguasai Indonesia. Berdasarkan hasil Konferensi Meja Bundar di Den Haag, Belanda tahun 1949, Belanda mengakui Indonesia dalam bentuk serikat. Pada saat itu Indonesia terdiri atas lima belas negara bagian. Republik Indonesia adalah bagian dari Republik Indonesia Serikat. Pada tahun 1950 kita kembali menjadi Negara Kesatuan Republik Indonesia.</p>\r\n\r\n<p>Pada kurun waktu 1950&ndash;1966 di Indonesia telah terjadi pemekaran beberapa provinsi sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Pada tahun 1950 Provinsi Sumatra dipecah menjadi Provinsi Sumatra</p>\r\n\r\n	<p>Utara, Sumatra Tengah, dan Sumatra Selatan. Pada tahun ini Yogyakarta</p>\r\n\r\n	<p>mendapatkan status daerah istimewa.</p>\r\n	</li>\r\n	<li>\r\n	<p>Padatahun1956ProvinsiKalimantandipecahmenjadiProvinsiKalimantan</p>\r\n\r\n	<p>Barat, Kalimantan Selatan, dan Kalimantan Timur.</p>\r\n	</li>\r\n	<li>\r\n	<p>Pada tahun 1957 Provinsi Sumatra Tengah dipecah menjadi Provinsi</p>\r\n\r\n	<p>Jambi, Riau, dan Sumatra Barat. Pada tahun ini Jakarta mendapatkan status sebagai daerah khusus ibu kota. Selain itu, Aceh menjadi provinsi tersendiri lepas dari Sumatra Utara.</p>\r\n	</li>\r\n	<li>\r\n	<p>Pada tahun 1959 Provinsi Sunda kecil dipecah menjadi Provinsi Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur. Pada tahun ini juga dibentuk Provinsi Kalimantan Tengah dari Kalimantan Selatan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Pada tahun 1960 Provinsi Sulawesi dipecah menjadi Provinsi Sulawesi Utara dan Selatan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Pada tahun 1963 PBB menyerahkan Irian Barat ke Indonesia.&nbsp;</p>\r\n	</li>\r\n</ol>\r\n', '', '', '', 1, '2014-06-16 21:14:42', '2014-06-16 21:14:42');
INSERT INTO `halamen` VALUES(96, 189, 1, '<p>Pada tahun 1964 dibentuk Provinsi Lampung dari pemekaran Provinsi Sumatra Selatan. Selain itu, dibentuk pula Provinsi Sulawesi Tengah (pemekaran dari Sulawesi Utara) dan Provinsi Sulawesi Tenggara (pemekaran dari Provinsi Sulawesi Selatan).</p>\r\n\r\n<p>Jumlah provinsi di Indonesia bertambah ketika Irian Barat resmi kembali menjadi bagian dari NKRI pada tanggal 19 November 1969 dan menjadi provinsi ke-26. Irian Barat kemudian namanya berubah menjadi Irian Jaya. Selanjutnya, Timor Timur berintegrasi atau bergabung dengan Negara Kesatuan Republik Indonesia (NKRI) pada tanggal 17 Juli 1976. Timor Timur menjadi provinsi ke-27. Pada tanggal 19 Oktober 1999 Timor Timur melepas- kan diri dari NKRI. Timor Timur menjadi negara baru, yaitu Timor Leste.</p>\r\n\r\n<p>Selanjutnya di Indonesia terbentuk beberapa provinsi baru. Provinsi baru yang terbentuk sejak tahun 1999 di Indonesia sebagai berikut.</p>\r\n\r\n<p><strong>Tabel 1.1 Provinsi </strong></p>\r\n\r\n<p><strong>Baru di Indonesia Sejak Tahun 1999 </strong></p>\r\n\r\n<p><strong>No. </strong></p>\r\n\r\n<p>1. 2. 3.</p>\r\n\r\n<p>4. 5. 6. 7.</p>\r\n\r\n<p><strong>Provinsi </strong></p>\r\n\r\n<p>Maluku Utara Banten</p>\r\n\r\n<p>Kepulauan Bangka Belitung</p>\r\n\r\n<p>Gorontalo Papua Barat Kepulauan Riau Sulawesi Barat</p>\r\n\r\n<p><strong>Ibu Kota </strong></p>\r\n\r\n<p>Sofifi-Ternate Serang Pangkal Pinang</p>\r\n\r\n<p>Gorontalo Manokwari Tanjung Pinang Mamuju</p>\r\n\r\n<p><strong>Dimekarkan dari </strong></p>\r\n\r\n<p>Provinsi Maluku Provinsi Jawa Barat Provinsi Riau</p>\r\n\r\n<p>Sulawesi Utara Papua<br />\r\nRiau<br />\r\nSulawesi Selatan</p>\r\n\r\n<p><strong>Tanggal </strong></p>\r\n\r\n<p>4 Oktober 1999 17 Oktober 1999 4 Desember 2000</p>\r\n\r\n<p>22 Desember 2000 21 November 2001 25 Oktober 2002 5 Oktober 2004</p>\r\n\r\n<p><strong>Provinsi </strong></p>\r\n\r\n<p>ke-27 ke-28 ke-29</p>\r\n\r\n<p>ke-30 ke-31 ke-32 ke-33</p>\r\n\r\n<p>ô°—ô°Šô°—ô°…ô°Šô°ô°¬ô°…ô°­ô°Œô°¬ô°Œ</p>\r\n\r\n<p>ô°Œ</p>\r\n\r\n<p>Provinsi baru tersebut menambah jumlah provinsi di Indonesia menjadi 33. Persebaran dan letak provinsi di Indonesia dapat dilihat pada peta di bawah ini.&nbsp;</p>\r\n', '', '', '', 2, '2014-06-16 21:18:16', '2014-06-16 21:18:16');
INSERT INTO `halamen` VALUES(97, 189, 2, '<p><strong>B. Perkembangan Wilayah Laut Indonesia </strong></p>\r\n\r\n<p>Indonesia merupakan negara kepulauan terbesar di dunia. Garis pantai- nya sekitar 81.000 km. Wilayah lautnya meliputi 5,8 juta km2 atau sekitar 70% dari luas total wilayah Indonesia. Luas wilayah laut Indonesia terdiri atas 3,1 juta km2 luas laut kedaulatan dan 2,7 juta km2 wilayah Zona Ekonomi Eksklusif Indonesia (ZEEI).</p>\r\n\r\n<p>Wilayah laut Indonesia mengalami perkembangan yang cukup panjang. Wilayah laut Indonesia pertama kali ditentukan dengan <em>Territoriale Zee en Maritime Kringen Ordonantie </em>(TZMKO) tahun 1939. Berdasarkan konsepsi TZMKO tahun 1939, lebar laut wilayah perairan Indonesia hanya meliputi jalur-jalur laut yang mengelilingi setiap pulau atau bagian pulau Indonesia. Lebar laut hanya 3 mil laut. Artinya, antarpulau di Indonesia terdapat laut internasional yang memisahkan satu pulau dengan pulau lainnya. Hal ini dapat mengancam persatuan dan kesatuan bangsa.</p>\r\n\r\n<p>Pada tanggal 13 Desember 1957 pemerintah Indonesia mengumumkan <em>Deklarasi Djoeanda. </em>Pemerintah mengumumkan bahwa lebar laut Indonesia adalah 12 mil. Selanjutnya, dengan Undang-Undang No. 4/Prp Tahun 1960 tentang Wilayah Perairan Indonesia ditetapkan tentang laut wilayah Indonesia selebar 12 mil laut dari garis pangkal lurus. Perairan Indonesia dikelilingi oleh garis pangkal yang menghubungkan titik-titik terluar dari pulau terluar Indonesia.</p>\r\n\r\n<p>Pada tahun 1982 Konvensi Hukum Laut PBB memberikan dasar hukum bagi negara-negara kepulauan untuk menentukan batasan lautan sampai zona ekonomi eksklusif dan landas kontinen. Dengan dasar ini suatu negara memiliki wewenang untuk mengeksploitasi sumber daya alam yang ada di zona tersebut. Berbagai sumber daya alam seperti perikanan, gas bumi, minyak bumi, dan bahan tambang lainnya dapat dimanfaatkan oleh negara yang bersangkutan. Berikut ini adalah gambar pembagian wilayah laut menurut Konvensi Hukum Laut PBB.&nbsp;</p>\r\n', 'screenshot-6:16:14-9:22-pm_GLM667Rp.jpeg', 'image', 'jpeg', 3, '2014-06-16 21:22:21', '2014-06-16 21:22:21');
INSERT INTO `halamen` VALUES(98, 189, 5, NULL, 'profile_G37x6uto.flv', 'video', 'flv', 4, '2014-06-16 21:24:59', '2014-06-16 21:24:59');
INSERT INTO `halamen` VALUES(99, 184, 1, '<p>sdssdhjsdhshdhds</p>\r\n', '', '', '', 1, '2014-06-22 21:38:42', '2014-06-22 21:38:42');
INSERT INTO `halamen` VALUES(100, 184, 1, '<p>sdssdds</p>\r\n', '', '', '', 1, '2014-06-22 21:39:11', '2014-06-22 21:39:11');
INSERT INTO `halamen` VALUES(101, 184, 1, '<p>sdfdsf</p>\r\n', '', '', '', 9, '2014-06-22 21:41:50', '2014-06-22 21:41:50');
INSERT INTO `halamen` VALUES(102, 184, 1, '<p>sdfsdf</p>\r\n', '', '', '', 9, '2014-06-22 21:42:23', '2014-06-22 21:42:23');
INSERT INTO `halamen` VALUES(103, 184, 1, '<p>bjhhjhjhjhjhjhgjjhjghjg</p>\r\n', '', '', '', 10, '2014-06-22 21:45:27', '2014-06-22 21:45:27');
INSERT INTO `halamen` VALUES(104, 184, 1, '<h2>Ini Adalah Judul</h2>\r\n\r\n<p>edit halaman ini sesuai dengan kemauan anda.....</p>\r\n\r\n<p>silahkan gunakan formatiing tools yang ada diatas,</p>\r\n\r\n<p>anda juga dapat menggunakan <span class="marker">warna,&nbsp;</span><strong>tebal</strong> dan format format lainnya&nbsp;</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------</p>\r\n', '', '', '', 11, '2014-06-23 00:22:33', '2014-06-23 00:22:33');
INSERT INTO `halamen` VALUES(105, 192, 2, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', 'screen-shot-2014-06-17-at-4.22.21-am_7NmJyE6b.png', 'image', 'png', 1, '2014-06-23 01:02:11', '2014-06-23 01:02:11');
INSERT INTO `halamen` VALUES(106, 192, 1, '<div style="background:transparent; border:0px; padding:0px">\r\n<div style="background:transparent; border:0px; padding:0px">\r\n<div style="background:transparent; border:0px; padding:0px">\r\n<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti&nbsp;<span class="marker">marker&nbsp;</span>&nbsp;<strong>Tebal&nbsp;</strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', 2, '2014-06-23 01:13:54', '2014-06-23 01:13:54');
INSERT INTO `halamen` VALUES(107, 192, 1, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', '', '', '', 3, '2014-06-23 01:18:01', '2014-06-23 01:18:01');
INSERT INTO `halamen` VALUES(108, 192, 3, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Lesson juga support dengan video</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', 'media_pembelajaran_sd_sistem_peredaran_darah_manusia_mp4_Xzltt7py.flv', 'video', 'flv', 4, '2014-06-23 01:25:31', '2014-06-23 01:25:31');
INSERT INTO `halamen` VALUES(109, 192, 5, NULL, 'daily_english_conversation_volume_2_1_book_1_vcd_tTWr65VQ.flv', 'video', 'flv', 5, '2014-06-23 01:40:44', '2014-06-23 01:40:44');
INSERT INTO `halamen` VALUES(110, 192, 1, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', '', '', '', 6, '2014-06-23 01:41:04', '2014-06-23 01:41:04');
INSERT INTO `halamen` VALUES(111, 192, 1, '<h1>&nbsp;</h1>\r\n\r\n<h1>&nbsp;</h1>\r\n\r\n<h1>SELAMAT MEMBUAT BAHAN AJAR</h1>\r\n\r\n<p>proudly sponsored by ETeaching</p>\r\n', '', '', '', 7, '2014-06-23 01:50:46', '2014-06-23 01:50:46');
INSERT INTO `halamen` VALUES(112, 193, 1, '<h1>Contoh silabus</h1>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0" style="width:100.0%">\r\n	<thead>\r\n		<tr>\r\n			<th style="height:44px; width:16.76%">\r\n			<p><strong>KOMPETENSI DASAR</strong></p>\r\n			</th>\r\n			<th style="height:44px; width:20.0%">\r\n			<p><strong>INDIKATOR</strong></p>\r\n			</th>\r\n			<th style="height:44px; width:34.34%">\r\n			<p><strong>KEGIATAN PEMBELAJARAN DAN PENILAIAN</strong></p>\r\n			</th>\r\n			<th style="height:44px; width:12.64%">\r\n			<p><strong>ALOKASI WAKTU</strong></p>\r\n			</th>\r\n			<th style="height:44px; width:16.26%">\r\n			<p><strong>SUMBER BELAJAR</strong></p>\r\n			</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:97px; width:16.76%">\r\n			<ul style="list-style-type:square">\r\n				<li>&nbsp;</li>\r\n				<li>Menunjukkan perilaku baik (jujur, disiplin, tanggung jawab, santun, peduli/kasih sayang, dan percaya diri) dalam berinteraksi dengan keluarga, teman, dan guru, sebagai perwujudan nilai dan moral Pancasila. (KI-2,KD-1)</li>\r\n			</ul>\r\n			</td>\r\n			<td style="height:97px; width:20.0%">\r\n			<p>&middot; Bersikap &nbsp;baik (jujur, disiplin, tanggung jawab dan percaya diri) dalam berinteraksi dengan keluarga</p>\r\n\r\n			<p>&middot; Bersikap&nbsp; baik (jujur, disiplin, tanggung jawab, dan percaya diri) dalam berinteraksi dengan teman</p>\r\n\r\n			<p>&middot; Bersikap&nbsp; baik (jujur, disiplin, tanggung jawab dan percaya diri) dalam berinteraksi dengan guru</p>\r\n\r\n			<p>&middot; Menjelaskan perilaku yang harus dilakukan ketika terlambat tiba di sekolah</p>\r\n\r\n			<p>&middot; Menyebutkan kedisiplinan yang dilakukan dirumah dan sekolah</p>\r\n\r\n			<p>&middot; Menceritakan kegiatan sehari-hari dengan menggunakan bahasa yang santun</p>\r\n\r\n			<p>&middot; Menunjukkan perilaku percaya diri dalam kegiatan-kegiatan termasuk ketika membantu ibu di rumah&nbsp;</p>\r\n			</td>\r\n			<td style="height:97px; width:34.34%">\r\n			<p><strong>Pada Tema ini pembelajaran dilaksanakan 4 minggu</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Kegiatan Minggu Pertama</strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Membiasakan berdoa sebelum dan sesudah belajar sesuai dengan agama yang dianutnya</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Mendengarkan doa yang ucapkan oleh guru</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik secara bersama-sama menyebut yel-yel semangat dengan lafal yang jelas kata-kata seperti rajin membaca dijawab secara bersama-sama bermanfaat sekali&hellip;.! Rajin berolahraga jawab peserta didik secara bersama-sama sangat menyehatkan&hellip;.! Dan seterusnya</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik menceritakan tentang kegemarannya masing-masing kepada teman sebangkunya, kemudian menceritakannya kepada teman-teman di kelasnya</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Berdasarkan cerita peserta didik, kemudian peserta didik mendengarkan pengembangan dari guru mengenai alasan peserta didik menyukai hal tersebut, seberapa sering ia melakukannya, apa manfaat dari kegemarannya itu.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Mendengarkan cerita yang berhubungan&nbsp; dengan kegemaran, kemudian peserta didik mengenali perilaku&nbsp; terpuji dari cerita tersebut</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Dari pengamatan gambar di atas peserta didik mewarnai gambar yang berhubungan dengan kegemaran tokoh dalam cerita tersebut, kemudian gambar tersebut ditempel di mading kelas (sebaiknya bukan hanya gambar yang bagus-bagus ssaja)</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Di dalam kelompok peserta didik menyebutkan tentang &nbsp;perilaku disiplin di rumah dan sekolah, serta saling bercerita tentang kegemaran yang dilakukan sehari-hari&nbsp; dengan bahasa yang santun</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Melalui pengamatan gambar peserta didik menceritakan perilaku-perilaku yang harus dilakukan di sekolah untuk menunjukkan sikap disiplin</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik menceritakan tentang makanan kegemaran yang dijual di kantin atau sekitar sekolah.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik menceritakan tentang makanan kegemaran yang dibawa dari rumah untuk bekal di sekolah</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Menunjukkan sikap disiplin pada waktu belajar, istirahat, dan bermain di sekolah dan di rumah, dengan mengucapkan sapaan, terima kasih, dan mengucapkan maaf.</li>\r\n				<li>Mengamati lingkungan sekolah (kantin sekolah) untuk mengetahui jajanan yang sehat dan memilih jajanan yang sehat.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Menceritakan perilaku jujur yang sebaiknya ditunjukkan ketika terlambat tiba di sekolah, ketika tidak membuat PR, atau ketinggalan buku di rumah,</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik mendengarkan puisi yang berhubungan dengan kegemaran, kemudian peserta didik mengenali perilaku terpuji dari puisi tersebut</li>\r\n				<li>Mengenali salah satu&nbsp; perilaku bertanggungjawab yaitu memelihara tanaman, kemudian mengenali dampak dari perilaku tersebut bagi diri sendiri, orang lain dan lingkungan.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Menunjukkan tanggung jawab dengan melakukan kegiatan&nbsp; merawat dan memelihara tanaman yang ada di dekat kelasnya dan di lingkungan sekolahnya</li>\r\n			</ol>\r\n\r\n			<p>Penilaian</p>\r\n\r\n			<ol>\r\n				<li>Tertulis</li>\r\n				<li>Lisan</li>\r\n				<li>Unjuk kerja</li>\r\n				<li>portofolio</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Minggu Kedua </strong></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Membiasakan berdoa sebelum dan sesudah belajar sesuai dengan agama yang dianutnya</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Mendengarkan doa yang ucapkan oleh guru</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik secara bersama-sama menyebut yel-yel semangat dengan lafal yang jelas kata-kata seperti rajin belajar&nbsp; dijawab secara bersama-sama pasti pintar&hellip;.! Rajin bernyanyi jawab peserta didik secara bersama-sama sangat menyenangkan &hellip;.! Dan seterusnya</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik mendengarkan &nbsp;cerita tentang&nbsp; tokoh dengan satu kegemarannya, kemudian peserta didik menceritakan dengan bahasanya sendiri mengenai tokoh, dan hal-hal yang berkaitan dengan kegemaran tokoh tersebut berdasarkan &nbsp;cerita</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Di dalam kelompok peserta didik memilih gerakan yang paling disukainya dari gerakan-gerakan &nbsp;dasar jalan,&nbsp; berlari, dan melompat. &nbsp;</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik diminta untuk memikirkan gerakan binatang yang memiliki kemiripan dengan gerakan jalan, berlari dan melompat, kemudian mempraktikkannya.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Di dalam kelompok peserta didik saling bercerita tentang &nbsp;manfaat&nbsp; peduli terhadap sesama,&nbsp; dan bertanya jawab tentang manfaat berteman dengan semua orang.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik secara bergiliran mengamati benda-benda yang ada di sekitar dan menentukan bahan alam untuk lipat gunting, dan tempel yang disukainya (bahan alam misalnya berbagai jenis dedaunan, kelopak bunga, pelepah pisang, ranting-ranting dan sebagainya)</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik memilih karya apa yang akan di buat berdasarkan pilihan-pilihan yang diberikan guru.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik membuat karya dari bahan alam dengan teknik gunting dan tempel</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>&nbsp;Peserta didik menceritakan secara bergantian mengenai perilaku membantu ibu di rumah.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik menceritakan tentang kegiatan kegemarannya dalam perilaku membantu ibu di rumah</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Di dalam kelompok peserta didik menceritakan tentang perilaku percaya diri ketika membantu ibu di rumah dan mempraktekkannya.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Melalui bermain peran peserta didik mempraktekkan aktivitas positif untuk belajar&nbsp; secara disiplin, misalnya dengan mengumpulkan tugas tepat waktu.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Penilaian </strong></p>\r\n\r\n			<ol>\r\n				<li>Tertulis</li>\r\n				<li>Lisan</li>\r\n				<li>Unjuk kerja</li>\r\n				<li>portofolio</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Minggu Ketiga</strong></p>\r\n\r\n			<ol>\r\n				<li>Membiasakan berdoa sebelum dan sesudah belajar sesuai dengan agama yang dianutnya</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Mendengarkan doa yang ucapkan oleh guru</li>\r\n				<li>Peserta didik bernyanyi bersama lagu &ldquo;Garuda Pancasila&rdquo;</li>\r\n				<li>Peserta didik mengamati gambar Garuda Pancasila dan mendiskusikan bersama guru mengenai bagian-bagian dari gambar tersebut.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik di dalam kelompok menyusun gambar bagian-bagian lambang Garuda Pancasila , kemudian secara bergiliran wakil dari kelompok menunjuk bulu sayap, bulu ekor, dan bulu leher pada burung garuda</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik dalam kelompok&nbsp; secara bergiliran menjelaskan bagian-bagian&nbsp; tubuh pada lambang Garuda pancasila, serta peserta didik menjelaskan arti gambar bintang, rantai, pohon beringin, kepala banteng, padi dan kapas</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik secara bergiliran&nbsp; melafalkan kalimat yang tertulis pada pita burung garuda</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Secara individu peserta didik menjiplak huruf tulisan yang ada dalam pita burung garuda serta membaca&nbsp; kalimat Bhinneka Tunggal Ika dengan tata cara membaca yang baik dan benar</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Mendengarkan cerita dari guru mengenai arti kata Bhinneka Tunggal Ika</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Menunjukkan empat&nbsp; pasang orang dengan pakaian daerah di Indonesia</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Melalui permainan memasangkan gambar pakaian laki dan perempuan serta gambar pakaian daerah berdasarkan tabel yang telah disediakan &nbsp;</li>\r\n				<li>Bertanya jawab dengan teman sekitarnya mengenai suku darimana mereka&nbsp; berasal</li>\r\n				<li>Menceritakan tentang&nbsp; suku teman disebelahnya</li>\r\n				<li>Menjelaskan beberapa suku&nbsp; teman-teman yang ada dalam kelasnya</li>\r\n				<li>Peserta didik dipimpin guru mempraktekkan pola irama rata, kemudian&nbsp; membedakan pola irama rata</li>\r\n				<li>Peserta didik secara bersama-sama mempraktekkan pola irama rata dengan lagu</li>\r\n				<li>Peserta didik mengamati gambar alat musik &nbsp;ritmis yang berasal dari Indonesia berjumlah tiga buah kemudian menyebutkannya</li>\r\n				<li>Menyebutkan alat musik&nbsp; ritmis sesuai dengan gambar yang ditunjukkan guru</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik mempraktekkan cara membaca dengan posisi duduk yang benar, memegang teks bacaan yang tepat, membalikkan halaman buku dengan benar</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Secara individu peserta didik membilang sampai 20 dan menunjuk&nbsp; bilangan secara urut,</li>\r\n				<li>Para siswa memegang kartu angka bertuliskan angka 1 &ndash; 20.&nbsp; Secara berkelompok peserta didik bermain mencari pasangan sesuai dengan perintah guru</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Peserta didik bermain &nbsp;pasangan bilangan sampai 20 (misalnya meminta sepasang siswa masing-masing menyebut angka yang kalau dijumlah jumlahnya 9, atau 18; Anak diminta berpasang-pasangan dengan memegang kartu angka yang bertuliskan 1-10, setelah itu mereka diminta menjumlahkan angka-angka tersebut)</li>\r\n			</ol>\r\n\r\n			<p><strong>Penilaian </strong></p>\r\n\r\n			<ol>\r\n				<li>Tertulis</li>\r\n				<li>Lisan</li>\r\n				<li>Unjuk kerja</li>\r\n				<li>portofolio</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Minggu Keempat</strong></p>\r\n\r\n			<ol>\r\n				<li>Membiasakan berdoa sebelum dan sesudah belajar sesuai dengan agama yang dianutnya</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Mendengarkan doa yang ucapkan oleh guru</li>\r\n				<li>Peserta didik menceritakan lagu anak-anak kegemarannya dan membahas mengenai satu atau dua lagu yang disebutkan oleh peserta didik</li>\r\n				<li>Peserta didik secara bersama-sama membaca syair lagu yang berhubungan dengan lagu kegemaran</li>\r\n				<li>Peserta didik memilih lagu kegemarannya dan menyanyikan lagu tersebut.</li>\r\n				<li>Peserta didik menyanyikan lagi dengan diiringi pola&nbsp; irama ritmis</li>\r\n				<li>Peserta didik secara individu mempraktekkan teknik menulis dari mulai posisi duduk, memegang alat tulis, memilih tempat menulis dengan cahaya yang terang</li>\r\n				<li>Peserta didik menjiplak huruf-huruf dan kata-kata sederhana dari lembar kerja, berkaitan dengan bacaan kegemaran sebelumnya</li>\r\n				<li>Peserta didik melakukan gerakan manipulasi untuk menunjukkan kerja sama, seperti ketika guru berbicara garis lurus peserta didik melompat dan seterusnya</li>\r\n				<li>Peserta didik memilih karya menempel kertas dari 3 pilihan yang diberikan oleh guru, dan menceritakan alasan pemilihannya.</li>\r\n				<li>Peserta didik melihat berbagai warna dan menceritakannya&nbsp; untuk menentukan hasil karya, kemudian peserta didik menentukan karya&nbsp; melipat menggunting dan menempel</li>\r\n				<li>Peserta didik membuat hasil karya melipat, memotong dan menempel dari bahan kertas berwarna</li>\r\n				<li>Peserta didik memberi bingkai dari hasil karyanya</li>\r\n				<li>Peserta didik bermain&nbsp; pengurangan, dengan cara: Guru menyebutkan angka tertentu yang merupakan hasil pengurangan, kemudian anak diminta menyebutkan angka-angka&nbsp; yang dapat menjadi kemungkinan. Misalnya, guru menyebutkan 3, kemudian anak&nbsp; menyebut 7 dan 4, atau 9 dan 6, atau 12 dan 9.</li>\r\n				<li>Peserta didik diberikan kartu bertuliskan angka 1-20 kemudian mereka berpasang-pasangan dan mengurangi bilangan yang lebih besar dengan yang lebih kecil. Melalui lembar kerja peserta didik menuliskan hasilnya.</li>\r\n			</ol>\r\n\r\n			<p>Penilaian</p>\r\n\r\n			<ol>\r\n				<li>Tertulis</li>\r\n				<li>Lisan</li>\r\n				<li>Unjuk kerja</li>\r\n				<li>portofolio</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ol>\r\n				<li>Siswa menunjuk gambar dan &nbsp;melakukan &nbsp;tanya jawab tentang tempat ibadah yang ada di sekitarnya dengan artikulasi yang tepat.</li>\r\n			</ol>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="height:97px; width:12.64%">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>35 menit X 30 JP X 4 minggu</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>30 JP X 35 menit</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>30 JP X 35 menit</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="height:97px; width:16.26%">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>1.&nbsp;&nbsp;&nbsp; Diri Anak</p>\r\n\r\n			<p>2.&nbsp;&nbsp;&nbsp; Teks cerita dan puisi yang berhubungan dengan kegemaran</p>\r\n\r\n			<p>3.&nbsp;&nbsp;&nbsp; Lingkungan</p>\r\n\r\n			<p>4.&nbsp;&nbsp;&nbsp; Media Gambar perilaku baik</p>\r\n\r\n			<p>5.&nbsp;&nbsp;&nbsp; Gambar untuk mewarnai</p>\r\n\r\n			<p>6.&nbsp;&nbsp;&nbsp; Benda di sekitar siswa</p>\r\n\r\n			<p>7.&nbsp;&nbsp;&nbsp; Gambar tentang perilaku disiplin</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', '', 1, '2014-06-23 12:20:26', '2014-06-23 12:20:26');
INSERT INTO `halamen` VALUES(113, 193, 2, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', 'screen-shot-2014-06-23-at-3.02.31-am_uMW1zckR.png', 'image', 'png', 2, '2014-06-23 12:21:21', '2014-06-23 12:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL DEFAULT 'blue',
  `description` text NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=194 ;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` VALUES(192, 'Menghitung Bilangan Bulat', 'Taufiq Ridha', 'blue', 'Ini adalah contoh bahan ajar yang sudah dibuat', 1, 2, '2014-06-23 00:58:17', '2014-06-23 02:45:38');
INSERT INTO `lessons` VALUES(193, 'Kalibata lesson', 'Taufiq', 'orange', 'Ini deskriosi', 1, 1, '2014-06-23 12:19:17', '2014-07-03 05:49:20');

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
INSERT INTO `pelajarans` VALUES(2, 'Fisika', 'fisika', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(3, 'Biologi', 'biologi', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(4, 'Bahasa Indonesia', 'bahasa-indonesia', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(5, 'Bahasa Inggris', 'bahasa-inggris	', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(6, 'PPKN', 'ppkn', '2011-11-26 02:10:08', '2011-11-26 02:10:08');
INSERT INTO `pelajarans` VALUES(8, 'Kimia', 'kimia', '2012-06-11 04:57:13', '2012-06-11 04:57:13');
INSERT INTO `pelajarans` VALUES(9, 'TIK', 'tik', '2012-06-11 04:57:27', '2012-06-11 04:57:27');
INSERT INTO `pelajarans` VALUES(10, 'Sosiologi', 'sosiologi', '2012-06-11 04:57:38', '2012-06-11 04:57:38');
INSERT INTO `pelajarans` VALUES(11, 'Sejarah', 'sejarah', '2012-06-11 04:58:09', '2012-06-11 04:58:09');
INSERT INTO `pelajarans` VALUES(12, 'Geografi', 'geografi', '2012-06-11 04:58:20', '2012-06-11 04:58:20');
INSERT INTO `pelajarans` VALUES(13, 'Ekonomi', 'ekonomi', '2012-06-11 04:58:27', '2012-06-11 04:58:27');

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
  `target` tinyint(2) NOT NULL,
  `point_nilai` int(11) DEFAULT NULL,
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

INSERT INTO `questions` VALUES(118, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, 'files/quizz/download_(2).jpg', '', '2014-03-26 12:36:13', '2014-05-13 04:25:34');
INSERT INTO `questions` VALUES(117, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(116, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(115, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(114, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(113, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13');
INSERT INTO `questions` VALUES(112, 0, 'Ini soal baru sekali', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'ini jawaban a', 'ini jawaban b', 'ini jawaban c', 'ini jawaban d', 2, 'files/quizz/film_ss.png', 'files/quizz/bloodcare_tvc1.flv', '2014-03-26 12:30:57', '2014-05-13 04:55:30');
INSERT INTO `questions` VALUES(59, 0, 'entrybaru', 1, 2, 1, 0, 'pkn', 1, NULL, NULL, 'sdf', 'sdf', 'sf', 'dsf', 3, NULL, NULL, '2012-08-11 01:48:31', '2012-08-11 01:48:31');
INSERT INTO `questions` VALUES(111, 0, 'Latar belakang lahirnya pemerintahan reformasi adalah ....', 1, 1, 1, 0, 'pkn', 2, NULL, NULL, 'adanya penyimpangan-penyimpangan pemerintah Orde Baru', 'utang luar negeri yang amat besar samliai tidak terbayar', 'para mahasiswa sudah bosan dengan gaya pemerintahan Pak Harto', 'untuk menciptakan pemerintahan yang terbuka, jujur, dan demokratis', 4, NULL, NULL, '2014-03-26 00:34:11', '2014-03-26 00:34:11');
INSERT INTO `questions` VALUES(109, 0, 'Contoh soal essay', 2, 1, 1, 0, 'pkn', 1, NULL, 'Ini adalah jawaban essay', '', '', '', '', 0, NULL, NULL, '2014-03-25 22:28:16', '2014-03-25 22:28:26');
INSERT INTO `questions` VALUES(110, 0, 'Perubahan suatu bangsa menuju kearah kondisi yang lebih baik atau buruk pada\r\nhakikatnya', 1, 1, 1, 0, 'pkn', 2, NULL, NULL, 'ditentukan dalam kerjsama regional', 'sangat dipengaruhi oleh situasi dunia', 'ditentukan oleh situasi negara-negara tetangga', 'tergantung dari usaha bangsa itu sendiri', 4, NULL, NULL, '2014-03-26 00:33:26', '2014-03-26 00:33:26');
INSERT INTO `questions` VALUES(108, 0, 'Keadilan sosial dalam good governance (kebijakan pemerintah yang baik) terimplementasi \r\ndalam:', 1, 1, 1, 0, 'pkn', 2, NULL, NULL, 'pemerataan pembangunan dan hasil-hasilnya', 'pertumbuhan ekonomi yang cukup tinggi', 'stabilitas nasional yang sehat dan dinamis', 'program Inpres Desa Tertinggal (IDT)', 3, NULL, NULL, '2014-03-25 22:21:18', '2014-03-26 00:29:47');
INSERT INTO `questions` VALUES(98, 0, 'Dalam mencapai tujuan politik bebas aktif, Indonesia pada dasarnya menjalankan politik ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'netral', 'damai', 'isolasi', 'terpadu', 1, NULL, NULL, '2014-03-25 21:59:37', '2014-03-25 21:59:37');
INSERT INTO `questions` VALUES(99, 0, 'Segala kebijakan pemerintah yang berkaitan dengan negara lain atau subjek hukum\r\ninternasional lain guna mewujudkan tujuan nasional, disebut ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'kerja sama intemasional', 'perjanjian internasional', 'hubungan diplomatik', 'hubungan luar negeri', 2, NULL, NULL, '2014-03-25 22:00:23', '2014-03-25 22:00:23');
INSERT INTO `questions` VALUES(100, 0, 'Pada dasarnya politik yang dijalankan dalam kebijakan pemerintah Indonesia mengabdi pada kepentingan ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'nasional', 'internasional', 'manusia', 'dunia', 3, NULL, NULL, '2014-03-25 22:01:16', '2014-03-25 22:01:16');
INSERT INTO `questions` VALUES(101, 0, 'Menurut ketentuan hukum yang berlaku, lembaga yang mewakili pelaksanaan politik luar \r\nnegeri di negeri asing adalah ...', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Presiden Indonesia', 'Menteri Luar Negeri', 'Dubes Luar Biasa', 'Corp Consulat', 2, NULL, NULL, '2014-03-25 22:01:59', '2014-03-25 22:01:59');
INSERT INTO `questions` VALUES(102, 0, 'Arah politik luar negeri bebas aktif berorientasi dan menitikberatkan pada hal', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'solidaritas antara negara-negara persernakmuran', 'peningkatan kemandirian bangsa lain', 'upaya menjadikan Indonesia dikenal dunia', 'kerja sama internasional bagi kesejahteraan pejabat', 3, NULL, NULL, '2014-03-25 22:02:46', '2014-03-25 22:02:46');
INSERT INTO `questions` VALUES(103, 0, 'Dalam penjelasan Pasal 32 UUD 1945 yang dimaksud kebudayaan bangsa adalah ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'kebudayaan yang timbul sebagai usaha budi daya rakyat', 'seluruh kebudayaan yang Aa di Indonesia', 'kebudayaan daerah yang masih terpelihara', 'perpaduan unsur budaya daerah dengan budaya asing', 3, NULL, NULL, '2014-03-25 22:03:38', '2014-03-25 22:03:38');
INSERT INTO `questions` VALUES(104, 0, 'Pelaksanaan Pembangunan Nasional sebagai pengamalan Pancasila, khususnya\r\nKetuhanan Yang Maha Esa Indonesia bertujuan ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'meningkatkan martabat serta hak dan kewajiban asasi manusia warga negara', 'peningkatan pembinaan bangsa di semua bidang kehidupan', 'mewujudkan masyarakat adil dan makmur', 'memajukan kesejahteraan umum', 3, NULL, NULL, '2014-03-25 22:04:17', '2014-03-25 22:04:17');
INSERT INTO `questions` VALUES(105, 0, 'Cita-cita ekonomi nasional yang berdasarkan ekonmi kerakyatan mengutamakan ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'pemenuhan kesejahteraan seluruh rakyat Indonesia', 'tiap-tiap warga negara memperolch apa yang dituntutnya', 'tidak pilih kasih atau tidak berat sebelah', 'dapat menikmati hidup terhormat dan tercukupi kebutuhan-kebutuhan hidupnya', 4, NULL, NULL, '2014-03-25 22:05:06', '2014-03-25 22:05:06');
INSERT INTO `questions` VALUES(106, 0, 'Berikut ini merupakan masalah yang rawan yang perlu mendapat perhatian, kecuali ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'masalah kesenjangan sosial', 'tingkat pendidikan yang rendah', 'budaya korupsi, kolusi, dan nepotisme', 'ketersediaan lapangan pekerjaan yang telah memadai', 3, NULL, NULL, '2014-03-25 22:05:47', '2014-03-25 22:05:47');
INSERT INTO `questions` VALUES(107, 0, 'Berikut ini adalah kebijaksanaan pemerintah yang sesuai dengan usaha mewujudkan \r\nkeadilan sosial, kecuali...', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'tiap-tiap orang memperoleh haknya ', 'pemenuhan kebutuhan materiil bagi seluruh rakyat ', 'unsur pernimpin perusahaan yang bertanggung jawab', 'unsur pengendalian usaha dari negara', 3, NULL, NULL, '2014-03-25 22:06:30', '2014-03-26 00:30:08');
INSERT INTO `questions` VALUES(121, 0, 'Contoh soal baru', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'ini jawaban A', 'ini jawaban B', 'ini jawaban C', 'ini jawaban D', 1, 'files/quizz/cover_kelas1_matematika_irwan.jpg', NULL, '2014-05-10 10:27:25', '2014-05-10 10:27:25');
INSERT INTO `questions` VALUES(120, 0, 'Tambah soal', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban a', 'jaban b', 'jawaban c', 'jawaban d', 1, 'files/quizz/2014-03-26-070038film_ss.png', NULL, '2014-03-26 07:00:38', '2014-03-26 07:00:38');
INSERT INTO `questions` VALUES(122, 0, 'Contoh Soal', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-10 10:30:34', '2014-05-10 10:30:34');
INSERT INTO `questions` VALUES(123, 0, 'Ini pertanyaan baru taufiq', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'jawaban a', 'jawaban b', 'jawaban c', 'jawaban d', 1, 'files/quizz/PAs_Poto_by_sastroart.jpg', NULL, '2014-05-10 11:12:25', '2014-05-10 11:12:25');
INSERT INTO `questions` VALUES(124, 0, 'sdsddssddsds', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'as', 'as', 'asas', 'as', 1, 'files/quizz/Screen_Shot_2014-03-26_at_4.40.18_AM.png', NULL, '2014-05-12 08:26:55', '2014-05-12 08:26:55');
INSERT INTO `questions` VALUES(125, 0, 'sdf', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'sdf', 'sdf', 'fsfsdf', 'ghgghgghghghg', 1, NULL, 'files/quizz/Dokumenter_Earth_Hour_Indonesia_2014.mp4', '2014-05-12 08:57:14', '2014-05-13 03:57:17');
INSERT INTO `questions` VALUES(126, 0, 'sdf', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'sdf', 'sdf', 'sdf', 'sdf', 3, NULL, NULL, '2014-05-12 08:58:41', '2014-05-13 02:16:20');
INSERT INTO `questions` VALUES(127, 0, 'apa sdfhsdhfsdf\r\n', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'iya', 'apa', 'kenapa', 'zzz', 1, 'files/quizz/uut.png', NULL, '2014-05-12 08:59:34', '2014-05-13 04:14:01');
INSERT INTO `questions` VALUES(145, 0, 'sdfsdffdsdf', 2, 1, 1, 0, 'ppkn', 2, NULL, 'sdfdsfsfsdf', '', '', '', '', 0, 'files/quizz/cover_kelas1_matematika_irwan.jpg', 'files/quizz/2014-05-12-235703Dokumenter_Earth_Hour_Indonesia_2014.mp4', '2014-05-12 10:07:47', '2014-05-12 23:57:03');
INSERT INTO `questions` VALUES(149, 0, 'Windows 8 hangs on welcome screen when I log in for a few minutes with my netgear USB WNDA3100v2 wireless adapter plugged in. I have the latest driver installed ?', 1, 1, 1, 0, 'ppkn', 2, NULL, NULL, 'a', 'c', 'b', 'd', 3, 'files/quizz/Screen_Shot_2014-03-26_at_4.02.59_AM.png', 'files/quizz/bloodcare_tvc.flv', '2014-05-13 04:55:49', '2014-07-03 06:59:18');
INSERT INTO `questions` VALUES(150, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-indonesia', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 06:58:05', '2014-05-13 06:58:05');
INSERT INTO `questions` VALUES(146, 0, 'asfagfaf', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'avgagF', 'agdgadg', 'agadga', 'adgvadg', 2, 'files/quizz/download_(5).jpg', NULL, '2014-05-13 04:26:05', '2014-05-13 04:26:59');
INSERT INTO `questions` VALUES(147, 0, 'yujyejuj', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'ihihih', 'ihihioh', 'hilhih', 'ihilhil', 3, 'files/quizz/3196931-2170304494-22850.jpg', NULL, '2014-05-13 04:29:12', '2014-05-13 04:29:30');
INSERT INTO `questions` VALUES(148, 0, 'apa pak?', 2, 2, 1, 0, 'ppkn', 2, NULL, 'tak apaasd', '', '', '', '', 0, NULL, NULL, '2014-05-13 04:36:03', '2014-05-13 04:43:37');
INSERT INTO `questions` VALUES(151, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-inggris	', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:01:31', '2014-05-13 07:01:31');
INSERT INTO `questions` VALUES(158, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-indonesia', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:18:30', '2014-05-13 07:18:30');
INSERT INTO `questions` VALUES(143, 0, 'sdfsdff', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'sf', 'dsf', 'sdf', 'sdf', 1, NULL, 'files/quizz/2014-05-12-033238DAILY_ENGLISH_CONVERSATION_VOLUME_3_(_1_BOOK__1_VCD_).flv', '2014-05-12 03:32:38', '2014-05-12 03:32:38');
INSERT INTO `questions` VALUES(153, 0, 'Contoh Soal', 1, 1, 1, 0, 'fisika', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:03:54', '2014-05-13 07:03:54');
INSERT INTO `questions` VALUES(159, 0, 'Contoh Soal', 1, 1, 2, 0, 'biologi', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:18:56', '2014-05-13 07:18:56');
INSERT INTO `questions` VALUES(157, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:17:08', '2014-05-13 07:17:08');
INSERT INTO `questions` VALUES(160, 0, 'Contoh Soal', 1, 2, 3, 0, 'sejarah', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:22:21', '2014-05-13 07:22:21');
INSERT INTO `questions` VALUES(161, 0, 'Contoh Soal', 1, 1, 3, 0, 'ekonomi', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:23:47', '2014-05-13 07:23:47');
INSERT INTO `questions` VALUES(162, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(163, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(164, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(165, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(166, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(167, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(168, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(169, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(170, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(171, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(172, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(173, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(174, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(175, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(176, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(177, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(178, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(179, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(180, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(181, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(182, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(183, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(184, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(185, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(186, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(187, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(188, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(189, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(190, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(191, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(192, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(193, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(194, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(195, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(196, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(197, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(198, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(199, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(200, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(201, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(202, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(203, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(204, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(205, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(206, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(207, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(208, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(209, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(210, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(211, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(212, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(213, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(214, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(215, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(216, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(217, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(218, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(219, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(220, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(221, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(222, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(223, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(224, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(225, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(226, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(227, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(228, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(229, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(230, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(231, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48');
INSERT INTO `questions` VALUES(232, 0, 'tambah ujian baru', 1, 1, 1, 0, 'ppkn', 2, NULL, NULL, 'sdf', 'dsf', 'sdf', 'dsf', 1, NULL, NULL, '2014-05-28 13:01:13', '2014-05-28 13:01:13');
INSERT INTO `questions` VALUES(233, 0, 'soal ujian baru', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'jawaban s', 'asdfjsdf', 'sdfdfsdf', 'sdfsdfsdf', 2, 'files/quizz/icon-user-default.png', 'files/quizz/-eteaching_sd-files-videosDAILY_ENGLISH_CONVERSATION_VOLUME_2_1_BOOK_1_VCD.flv', '2014-06-12 11:23:26', '2014-06-12 11:23:26');
INSERT INTO `questions` VALUES(234, 0, 'hdhjzhjdzhchzjxch', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'jzjncznczmnxc', 'zxczxczx', 'zxczxc', 'zxczxczxc', 1, 'files/quizz/2014-06-18-113420icon-user-default.png', 'files/quizz/profile.flv', '2014-06-18 11:34:20', '2014-06-18 11:34:20');

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

INSERT INTO `quizzs` VALUES(9, 'borobudur', 1, 'Try out', 1, 2, '50', '', NULL, '2014-05-10 11:14:42', '2014-06-08 04:37:53');
INSERT INTO `quizzs` VALUES(8, 'PG2', 1, 'Try out', 6, 1, '46', '', NULL, '2014-03-25 22:34:24', '2014-03-26 00:30:33');
INSERT INTO `quizzs` VALUES(10, 'sdf', 1, 'Try out', 1, 1, '45', '', NULL, '2014-05-13 09:17:08', '2014-05-13 09:17:08');
INSERT INTO `quizzs` VALUES(11, 'sdfsdfdsf', 1, 'Try out', 2, 1, '46', '', NULL, '2014-05-13 11:01:50', '2014-05-28 12:55:09');
INSERT INTO `quizzs` VALUES(12, 'sdfsdfsdfsdf', 1, 'Try out', 3, 2, '47', '', NULL, '2014-05-13 11:03:51', '2014-05-28 13:01:53');
INSERT INTO `quizzs` VALUES(13, 'hhhh', 1, 'Try out', 1, 1, '46', '', NULL, '2014-05-28 10:18:55', '2014-05-28 12:32:32');
INSERT INTO `quizzs` VALUES(14, 'test', 1, 'Try out', 6, 1, '47', '', NULL, '2014-06-12 11:24:55', '2014-06-12 11:25:27');
INSERT INTO `quizzs` VALUES(15, 'kalibata', 1, 'Try out', 1, 1, '47', '', NULL, '2014-06-23 12:14:10', '2014-06-23 12:14:35');

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

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) DEFAULT NULL,
  `matapelajaran` int(11) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `produksi` varchar(200) DEFAULT NULL,
  `sutradara` varchar(200) DEFAULT NULL,
  `jumlahhalaman` int(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) NOT NULL,
  `file` varchar(100) NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` VALUES(5, NULL, NULL, 1, 7, 'Ini test video yang panjang judulnya ya mungkin	', NULL, NULL, 'ini produksi', 'Ini test video yang panjang judulnya ya mungkin	', NULL, 2011, 'ini resensiyang panjang judulnya ya mungkin	ini resensiyang panjang judulnya ya mungkin	', 'img/2014-04-12-185516film_ss.png', 1, 'Dokumenter_Earth_Hour_Indonesia_20142.mp4', 'files/videos', 'video/mp4', 20469737, '2014-04-12 00:00:00', '2014-04-12 00:00:00');
INSERT INTO `videos` VALUES(24, NULL, NULL, 1, 40, 'Kerajaan Hindu Budha di Indonesia', NULL, NULL, 'Courtesy Youtube', 'kelompok 3', NULL, 2011, 'Kerajaan Hindu Budha di Indonesia', 'img/2.png', 1, 'Video_Kerajaan_HINDU_dan_Budha_di_Indonesia.flv', 'files/videos', 'video/x-flv', 24506433, '2014-05-12 01:20:12', '2014-05-12 01:20:12');
INSERT INTO `videos` VALUES(22, NULL, NULL, 1, 40, 'Traditional Food and Drink', NULL, NULL, 'Courtesy Youtube', 'Komang Roy Prismayudi', NULL, 2011, 'Traditional Food and Drink', 'img/6.png', 1, 'Animasi_untuk_mengajar_bahasa_Inggris_Animation_for_teaching_english.flv', 'files/videos', 'video/x-flv', 30244369, '2014-05-12 01:14:54', '2014-05-12 01:14:54');
INSERT INTO `videos` VALUES(8, NULL, NULL, 1, 7, 'Ini test video', NULL, NULL, 'Produksi Test', 'Sutradara Test', NULL, 2011, 'Test Video', 'img/2014-04-12-190417Screen_Shot_2014-03-26_at_4.46.47_AM.png', 1, 'Dokumenter_Earth_Hour_Indonesia_20145.mp4', 'files/videos', 'video/mp4', 20469737, '2014-04-12 00:00:00', '2014-05-12 01:31:03');
INSERT INTO `videos` VALUES(9, NULL, NULL, 1, 7, 'Tambahan lagi ', NULL, NULL, 'ini adalah tambahan', 'Ini adalah tambahan', NULL, 0000, 'ini resensi', 'img/2014-04-12-190907Screen_Shot_2014-03-26_at_4.34.44_AM.png', 1, 'Dokumenter_Earth_Hour_Indonesia_20146.mp4', 'files/videos', 'video/mp4', 20469737, '2014-04-12 00:00:00', '2014-04-13 03:50:39');
INSERT INTO `videos` VALUES(10, NULL, NULL, 1, 8, 'Ini iptek kita', NULL, NULL, 'Test Produksi', 'insafhi', NULL, 0000, 'Ini adalah resensi', 'img/2014-04-12-191037Screen_Shot_2014-03-26_at_4.25.56_AM.png', 1, 'Dokumenter_Earth_Hour_Indonesia_20147.mp4', 'files/videos', 'video/mp4', 20469737, '2014-04-12 00:00:00', '2014-05-12 03:35:56');
INSERT INTO `videos` VALUES(25, NULL, NULL, 1, 40, 'Sejarah Uang dan Sejarah Bank Sentral', NULL, NULL, 'Courtesy Youtube', 'Museum Bank Indonesia', NULL, 2011, 'Sejarah Uang dan Sejarah Bank Sentral', 'img/3.png', 1, 'Sejarah_Uang_dan_Sejarah_Bank_Sentral.flv', 'files/videos', 'video/x-flv', 39124179, '2014-05-12 01:22:29', '2014-05-12 01:22:29');
INSERT INTO `videos` VALUES(26, NULL, NULL, 1, 40, 'Rantai Makanan dan Jaring-jaring Makanan', NULL, NULL, 'Courtesy Youtube', 'Ayatullah Hidayat', NULL, 2011, 'Rantai Makanan dan Jaring-jaring Makanan', 'img/4.png', 1, 'Video_Interaktif_Rantai_Makanan_dan_Jaring_Jaring_Makanan_Untuk_Kelas_IV_SD.flv', 'files/videos', 'video/x-flv', 9646544, '2014-05-12 01:28:15', '2014-05-12 01:28:15');
INSERT INTO `videos` VALUES(13, NULL, NULL, 1, 7, 'Tambah Lagi Ya', NULL, NULL, 'produksi', 'Ini sutradara', NULL, 2011, 'ini resensi', 'img/2014-04-12-191825Screen_Shot_2014-03-26_at_4.40.18_AM.png', 1, 'Dokumenter_Earth_Hour_Indonesia_201410.mp4', 'files/videos', 'video/mp4', 20469737, '2014-04-12 00:00:00', '2014-04-12 00:00:00');
INSERT INTO `videos` VALUES(27, NULL, NULL, 1, 40, 'Sistem Peredaran Darah Manusia', NULL, NULL, 'Courtesy Youtube', 'Abdul Kholiq, S.Pd', NULL, 2011, 'Sistem Peredaran Darah Manusia', 'img/5.png', 1, 'Media_Pembelajaran_SD_SISTEM_PEREDARAN_DARAH_MANUSIA_mp4.flv', 'files/videos', 'video/x-flv', 9673208, '2014-05-12 01:30:03', '2014-05-12 01:30:03');
INSERT INTO `videos` VALUES(23, NULL, NULL, 1, 40, 'Mari Belajar Matematika', NULL, NULL, 'Courtesy Youtube', 'Reza324', NULL, 2011, 'Mari Belajar Matematika', 'img/1.png', 1, 'animasi_pembelajaran_matematika_1.flv', 'files/videos', 'video/x-flv', 1818477, '2014-05-12 01:18:21', '2014-05-12 01:18:21');
INSERT INTO `videos` VALUES(30, NULL, NULL, 1, 9, 'adf', NULL, NULL, 'BSM', 'sutradara', NULL, 2011, 'fasffa', 'img/2014-05-14-065053Screen_Shot_2014-03-26_at_4.25.56_AM.png', 1, 'Dokumenter_Earth_Hour_Indonesia_20143.mp4', 'files/videos', 'video/mp4', 20469737, '2014-05-14 06:50:53', '2014-05-14 06:50:53');
INSERT INTO `videos` VALUES(31, NULL, NULL, 1, 7, 'banjir', NULL, NULL, 'jokowi', 'jokowi', NULL, 2011, 'Resnesni', 'img/2014-06-07-095030PAs_Poto_by_sastroart.jpg', 1, 'DAILY_ENGLISH_CONVERSATION_VOLUME_2_1_BOOK_1_VCD.flv', 'files/videos', 'video/x-flv', 1162571, '2014-06-07 09:50:30', '2014-06-07 09:50:30');
INSERT INTO `videos` VALUES(32, NULL, NULL, 1, 7, 'Ini test baru', NULL, NULL, 'test', 'test', NULL, 2011, 'asdasd', 'img/Screen_Shot_2014-06-23_at_3.02.31_AM.png', 1, 'Dokumenter_Earth_Hour_Indonesia_20144.mp4', 'files/videos', 'video/mp4', 20469737, '2014-06-23 12:05:24', '2014-06-23 12:05:24');
