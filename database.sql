-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2021 at 12:51 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SFPyG7VYOT`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad_password` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_name`, `ad_password`) VALUES
('GivenSmile', 'helloworld');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(6) NOT NULL,
  `cat_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cat_amount` int(11) DEFAULT NULL,
  `cat_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_amount`, `cat_status`) VALUES
(1, 'Orang Asli', NULL, '1'),
(2, 'Sickness', NULL, '1'),
(3, 'Babi', NULL, '1'),
(4, 'Cina', NULL, '1'),
(5, 'Halo', NULL, '1'),
(6, 'Babicina', NULL, '1'),
(7, 'Test', NULL, '1'),
(8, 'Test1', NULL, '1'),
(9, 'Test2', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `do_id` int(11) NOT NULL,
  `do_amount` float NOT NULL,
  `do_cmmt` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `do_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_amount` decimal(10,0) NOT NULL,
  `event_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `event_img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `event_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `event_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `fb_id` int(11) NOT NULL,
  `fb_content` text COLLATE utf8_unicode_ci NOT NULL,
  `fb_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `org_category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `org_password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `org_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `org_weblink` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `org_fblink` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `org_xtralink` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `org_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `org_state` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `org_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `org_zipcode` int(5) NOT NULL,
  `org_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `org_name`, `org_category`, `user_type`, `org_password`, `org_email`, `org_weblink`, `org_fblink`, `org_xtralink`, `org_address`, `org_state`, `org_city`, `org_zipcode`, `org_contact`) VALUES
(7897781, 'sample', 'sample', 'organization', 'org_sample', 'sample5', 'sample', 'sample', 'sample', 'sample', 'Johor Bahru', 'Johor', 81111, 787878713);

-- --------------------------------------------------------

--
-- Table structure for table `state_city`
--

CREATE TABLE `state_city` (
  `id` int(11) NOT NULL,
  `state` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `state_city`
--

INSERT INTO `state_city` (`id`, `state`, `city`) VALUES
(1, 'Perlis', 'Arau'),
(2, 'Perlis', 'Kangar'),
(3, 'Perlis', 'Kuala Perlis'),
(4, 'Kedah', 'Alor Setar'),
(5, 'Kedah', 'Ayer Hitam'),
(6, 'Kedah', 'Baling'),
(7, 'Kedah', 'Bandar Baharu'),
(8, 'Kedah', 'Bedong'),
(9, 'Kedah', 'Bukit Kayu Hitam'),
(10, 'Kedah', 'Changloon'),
(11, 'Kedah', 'Gurun'),
(12, 'Kedah', 'Jeniang'),
(13, 'Kedah', 'Jitra'),
(14, 'Kedah', 'Karangan'),
(15, 'Kedah', 'Kepala Batas'),
(16, 'Kedah', 'Kodiang'),
(17, 'Kedah', 'Kota Kuala Muda'),
(18, 'Kedah', 'Kota Sarang Semut'),
(19, 'Kedah', 'Kuala Kedah'),
(20, 'Kedah', 'Kuala Ketil'),
(21, 'Kedah', 'Kuala Nerang'),
(22, 'Kedah', 'Kuala Pegang'),
(23, 'Kedah', 'Kulim'),
(24, 'Kedah', 'Kupang'),
(25, 'Kedah', 'Langgar'),
(26, 'Kedah', 'Langkawi'),
(27, 'Kedah', 'Lunas'),
(28, 'Kedah', 'Merbok'),
(29, 'Kedah', 'Padang Serai'),
(30, 'Kedah', 'Pendang'),
(31, 'Kedah', 'Pokok Sena'),
(32, 'Kedah', 'Serdang'),
(33, 'Kedah', 'Sik'),
(34, 'Kedah', 'Simpang Empat'),
(35, 'Kedah', 'Sungai Petani'),
(36, 'Kedah', 'Universiti Utara Malaysia'),
(37, 'Kedah', 'Yan'),
(38, 'Penang', 'Ayer Itam'),
(39, 'Penang', 'Balik Pulau'),
(40, 'Penang', 'Batu Ferringhi'),
(41, 'Penang', 'Batu Maung'),
(42, 'Penang', 'Bayan Lepas'),
(43, 'Penang', 'Bukit Mertajam'),
(44, 'Penang', 'Butterworth'),
(45, 'Penang', 'Gelugor'),
(46, 'Penang', 'Jelutong'),
(47, 'Penang', 'Kepala Batas'),
(48, 'Penang', 'Kubang Semang'),
(49, 'Penang', 'Nibong Tebal'),
(50, 'Penang', 'Penaga'),
(51, 'Penang', 'Penang Hill'),
(52, 'Penang', 'Perai'),
(53, 'Penang', 'Permatang Pauh'),
(54, 'Penang', 'Pulau Pinang'),
(55, 'Penang', 'Simpang Ampat'),
(56, 'Penang', 'Sungai Jawi'),
(57, 'Penang', 'Tanjong Bungah'),
(58, 'Penang', 'Tasek Gelugur'),
(59, 'Penang', 'USM Pulau Pinang'),
(60, 'Perak', 'Ayer Tawar'),
(61, 'Perak', 'Bagan Datoh'),
(62, 'Perak', 'Bagan Serai'),
(63, 'Perak', 'Bandar Seri Iskandar'),
(64, 'Perak', 'Batu Gajah'),
(65, 'Perak', 'Batu Kurau'),
(66, 'Perak', 'Behrang Stesen'),
(67, 'Perak', 'Bidor'),
(68, 'Perak', 'Bota'),
(69, 'Perak', 'Bruas'),
(70, 'Perak', 'Changkat Jering'),
(71, 'Perak', 'Chemor'),
(72, 'Perak', 'Chenderiang'),
(73, 'Perak', 'Chenderong Balai'),
(74, 'Perak', 'Chikus'),
(75, 'Perak', 'Enggor'),
(76, 'Perak', 'Gerik'),
(77, 'Perak', 'Gopeng'),
(78, 'Perak', 'Hutan Melintang'),
(79, 'Perak', 'Intan'),
(80, 'Perak', 'Ipoh'),
(81, 'Perak', 'Jeram'),
(82, 'Perak', 'Kampar'),
(83, 'Perak', 'Kampung Gajah'),
(84, 'Perak', 'Kampung Kepayang'),
(85, 'Perak', 'Kamunting'),
(86, 'Perak', 'Kuala Kangsar'),
(87, 'Perak', 'Kuala Kurau'),
(88, 'Perak', 'Kuala Sepetang'),
(89, 'Perak', 'Lambor Kanan'),
(90, 'Perak', 'Langkap'),
(91, 'Perak', 'Lenggong'),
(92, 'Perak', 'Lumut'),
(93, 'Perak', 'Malim Nawar'),
(94, 'Perak', 'Manong'),
(95, 'Perak', 'Matang'),
(96, 'Perak', 'Padang Rengas'),
(97, 'Perak', 'Pangkor'),
(98, 'Perak', 'Pantai Remis'),
(99, 'Perak', 'Parit'),
(100, 'Perak', 'Parit Buntar'),
(101, 'Perak', 'Pengkalan Hulu'),
(102, 'Perak', 'Pusing'),
(103, 'Perak', 'Rantau Panjang'),
(104, 'Perak', 'Sauk'),
(105, 'Perak', 'Selama'),
(106, 'Perak', 'Selekoh'),
(107, 'Perak', 'Seri Manjong'),
(108, 'Perak', 'Seri Manjung'),
(109, 'Perak', 'Simpang'),
(110, 'Perak', 'Simpang Ampat Semanggol'),
(111, 'Perak', 'Sitiawan'),
(112, 'Perak', 'Slim River'),
(113, 'Perak', 'Sungai Siput'),
(114, 'Perak', 'Sungai Sumun'),
(115, 'Perak', 'Sungkai'),
(116, 'Perak', 'Taiping'),
(117, 'Perak', 'Tanjong Malim'),
(118, 'Perak', 'Tanjong Piandang'),
(119, 'Perak', 'Tanjong Rambutan'),
(120, 'Perak', 'Tanjong Tualang'),
(121, 'Perak', 'Tapah'),
(122, 'Perak', 'Tapah Road'),
(123, 'Perak', 'Teluk Intan'),
(124, 'Perak', 'Temoh'),
(125, 'Perak', 'TLDM Lumut'),
(126, 'Perak', 'Trolak'),
(127, 'Perak', 'Trong'),
(128, 'Perak', 'Tronoh'),
(129, 'Perak', 'Ulu Bernam'),
(130, 'Perak', 'Ulu Kinta'),
(131, 'Selangor', 'Ampang'),
(132, 'Selangor', 'Bandar Baru Bangi'),
(133, 'Selangor', 'Bandar Puncak Alam'),
(134, 'Selangor', 'Banting'),
(135, 'Selangor', 'Batang Kali'),
(136, 'Selangor', 'Batu Arang'),
(137, 'Selangor', 'Batu Caves'),
(138, 'Selangor', 'Beranang'),
(139, 'Selangor', 'Bestari Jaya'),
(140, 'Selangor', 'Bukit Rotan'),
(141, 'Selangor', 'Cheras'),
(142, 'Selangor', 'Cyberjaya'),
(143, 'Selangor', 'Dengkil'),
(144, 'Selangor', 'Hulu Langat'),
(145, 'Selangor', 'Jenjarom'),
(146, 'Selangor', 'Jeram'),
(147, 'Selangor', 'Kajang'),
(148, 'Selangor', 'Kapar'),
(149, 'Selangor', 'Kerling'),
(150, 'Selangor', 'Klang'),
(151, 'Selangor', 'KLIA'),
(152, 'Selangor', 'Kuala Kubu Baru'),
(153, 'Selangor', 'Kuala Selangor'),
(154, 'Selangor', 'Kuang'),
(155, 'Selangor', 'Pelabuhan Klang'),
(156, 'Selangor', 'Petaling Jaya'),
(157, 'Selangor', 'Puchong'),
(158, 'Selangor', 'Pulau Carey'),
(159, 'Selangor', 'Pulau Indah'),
(160, 'Selangor', 'Pulau Ketam'),
(161, 'Selangor', 'Rasa'),
(162, 'Selangor', 'Rawang'),
(163, 'Selangor', 'Sabak Bernam'),
(164, 'Selangor', 'Sekinchan'),
(165, 'Selangor', 'Semenyih'),
(166, 'Selangor', 'Sepang'),
(167, 'Selangor', 'Serdang'),
(168, 'Selangor', 'Serendah'),
(169, 'Selangor', 'Seri Kembangan'),
(170, 'Selangor', 'Shah Alam'),
(171, 'Selangor', 'Subang Jaya'),
(172, 'Selangor', 'Sungai Ayer Tawar'),
(173, 'Selangor', 'Sungai Besar'),
(174, 'Selangor', 'Sungai Buloh'),
(175, 'Selangor', 'Sungai Pelek'),
(176, 'Selangor', 'Tanjong Karang'),
(177, 'Selangor', 'Tanjong Sepat'),
(178, 'Selangor', 'Telok Panglima Garang'),
(179, 'Negeri Sembilan', ''),
(180, 'Negeri Sembilan', 'Bahau'),
(181, 'Negeri Sembilan', 'Bandar Enstek'),
(182, 'Negeri Sembilan', 'Bandar Seri Jempol'),
(183, 'Negeri Sembilan', 'Batu Kikir'),
(184, 'Negeri Sembilan', 'Gemas'),
(185, 'Negeri Sembilan', 'Gemencheh'),
(186, 'Negeri Sembilan', 'Johol'),
(187, 'Negeri Sembilan', 'Kota'),
(188, 'Negeri Sembilan', 'Kuala Klawang'),
(189, 'Negeri Sembilan', 'Kuala Pilah'),
(190, 'Negeri Sembilan', 'Labu'),
(191, 'Negeri Sembilan', 'Linggi'),
(192, 'Negeri Sembilan', 'Mantin'),
(193, 'Negeri Sembilan', 'Niai'),
(194, 'Negeri Sembilan', 'Nilai'),
(195, 'Negeri Sembilan', 'Port Dickson'),
(196, 'Negeri Sembilan', 'Pusat Bandar Palong'),
(197, 'Negeri Sembilan', 'Rantau'),
(198, 'Negeri Sembilan', 'Rembau'),
(199, 'Negeri Sembilan', 'Rompin'),
(200, 'Negeri Sembilan', 'Seremban'),
(201, 'Negeri Sembilan', 'Si Rusa'),
(202, 'Negeri Sembilan', 'Simpang Durian'),
(203, 'Negeri Sembilan', 'Simpang Pertang'),
(204, 'Negeri Sembilan', 'Tampin'),
(205, 'Negeri Sembilan', 'Tanjong Ipoh'),
(206, 'Malacca', 'Alor Gajah'),
(207, 'Malacca', 'Asahan'),
(208, 'Malacca', 'Ayer Keroh'),
(209, 'Malacca', 'Bemban'),
(210, 'Malacca', 'Durian Tunggal'),
(211, 'Malacca', 'Jasin'),
(212, 'Malacca', 'Kem Trendak'),
(213, 'Malacca', 'Kuala Sungai Baru'),
(214, 'Malacca', 'Lubok China'),
(215, 'Malacca', 'Masjid Tanah'),
(216, 'Malacca', 'Melaka'),
(217, 'Malacca', 'Merlimau'),
(218, 'Malacca', 'Selandar'),
(219, 'Malacca', 'Sungai Rambai'),
(220, 'Malacca', 'Sungai Udang'),
(221, 'Malacca', 'Tanjong Kling'),
(222, 'Johor', 'Ayer Baloi'),
(223, 'Johor', 'Ayer Hitam'),
(224, 'Johor', 'Ayer Tawar 2'),
(225, 'Johor', 'Bandar Penawar'),
(226, 'Johor', 'Bandar Tenggara'),
(227, 'Johor', 'Batu Anam'),
(228, 'Johor', 'Batu Pahat'),
(229, 'Johor', 'Bekok'),
(230, 'Johor', 'Benut'),
(231, 'Johor', 'Bukit Gambir'),
(232, 'Johor', 'Bukit Pasir'),
(233, 'Johor', 'Chaah'),
(234, 'Johor', 'Endau'),
(235, 'Johor', 'Gelang Patah'),
(236, 'Johor', 'Gerisek'),
(237, 'Johor', 'Gugusan Taib Andak'),
(238, 'Johor', 'Jementah'),
(239, 'Johor', 'Johor Bahru'),
(240, 'Johor', 'Kahang'),
(241, 'Johor', 'Kluang'),
(242, 'Johor', 'Kota Tinggi'),
(243, 'Johor', 'Kukup'),
(244, 'Johor', 'Kulai'),
(245, 'Johor', 'Labis'),
(246, 'Johor', 'Layang-Layang'),
(247, 'Johor', 'Masai'),
(248, 'Johor', 'Mersing'),
(249, 'Johor', 'Muar'),
(250, 'Johor', 'Nusajaya'),
(251, 'Johor', 'Pagoh'),
(252, 'Johor', 'Paloh'),
(253, 'Johor', 'Panchor'),
(254, 'Johor', 'Parit Jawa'),
(255, 'Johor', 'Parit Raja'),
(256, 'Johor', 'Parit Sulong'),
(257, 'Johor', 'Pasir Gudang'),
(258, 'Johor', 'Pekan Nenas'),
(259, 'Johor', 'Pengerang'),
(260, 'Johor', 'Pontian'),
(261, 'Johor', 'Pulau Satu'),
(262, 'Johor', 'Rengam'),
(263, 'Johor', 'Rengit'),
(264, 'Johor', 'Segamat'),
(265, 'Johor', 'Semerah'),
(266, 'Johor', 'Senai'),
(267, 'Johor', 'Senggarang'),
(268, 'Johor', 'Seri Gading'),
(269, 'Johor', 'Seri Medan'),
(270, 'Johor', 'Simpang Rengam'),
(271, 'Johor', 'Sungai Mati'),
(272, 'Johor', 'Tangkak'),
(273, 'Johor', 'Ulu Tiram'),
(274, 'Johor', 'Yong Peng'),
(275, 'Pahang', 'Balok'),
(276, 'Pahang', 'Bandar Bera'),
(277, 'Pahang', 'Bandar Pusat Jengka'),
(278, 'Pahang', 'Bandar Tun Abdul Razak'),
(279, 'Pahang', 'Benta'),
(280, 'Pahang', 'Bentong'),
(281, 'Pahang', 'Brinchang'),
(282, 'Pahang', 'Bukit Fraser'),
(283, 'Pahang', 'Bukit Goh'),
(284, 'Pahang', 'Bukit Kuin'),
(285, 'Pahang', 'Chenor'),
(286, 'Pahang', 'Chini'),
(287, 'Pahang', 'Damak'),
(288, 'Pahang', 'Dong'),
(289, 'Pahang', 'Gambang'),
(290, 'Pahang', 'Genting Highlands'),
(291, 'Pahang', 'Jerantut'),
(292, 'Pahang', 'Karak'),
(293, 'Pahang', 'Kemayan'),
(294, 'Pahang', 'Kuala Krau'),
(295, 'Pahang', 'Kuala Lipis'),
(296, 'Pahang', 'Kuala Rompin'),
(297, 'Pahang', 'Kuantan'),
(298, 'Pahang', 'Lanchang'),
(299, 'Pahang', 'Lurah Bilut'),
(300, 'Pahang', 'Maran'),
(301, 'Pahang', 'Mentakab'),
(302, 'Pahang', 'Muadzam Shah'),
(303, 'Pahang', 'Padang Tengku'),
(304, 'Pahang', 'Pekan'),
(305, 'Pahang', 'Raub'),
(306, 'Pahang', 'Ringlet'),
(307, 'Pahang', 'Sega'),
(308, 'Pahang', 'Sungai Koyan'),
(309, 'Pahang', 'Sungai Lembing'),
(310, 'Pahang', 'Tanah Rata'),
(311, 'Pahang', 'Temerloh'),
(312, 'Pahang', 'Triang'),
(313, 'Terengganu', 'Ajil'),
(314, 'Terengganu', 'Al Muktatfi Billah Shah'),
(315, 'Terengganu', 'Ayer Puteh'),
(316, 'Terengganu', 'Bukit Besi'),
(317, 'Terengganu', 'Bukit Payong'),
(318, 'Terengganu', 'Ceneh'),
(319, 'Terengganu', 'Chalok'),
(320, 'Terengganu', 'Cukai'),
(321, 'Terengganu', 'Dungun'),
(322, 'Terengganu', 'Jerteh'),
(323, 'Terengganu', 'Kampung Raja'),
(324, 'Terengganu', 'Kemasek'),
(325, 'Terengganu', 'Kerteh'),
(326, 'Terengganu', 'Ketengah Jaya'),
(327, 'Terengganu', 'Kijal'),
(328, 'Terengganu', 'Kuala Berang'),
(329, 'Terengganu', 'Kuala Besut'),
(330, 'Terengganu', 'Kuala Terengganu'),
(331, 'Terengganu', 'Marang'),
(332, 'Terengganu', 'Paka'),
(333, 'Terengganu', 'Permaisuri'),
(334, 'Terengganu', 'Sungai Tong'),
(335, 'Kelantan', 'Ayer Lanas'),
(336, 'Kelantan', 'Bachok'),
(337, 'Kelantan', 'Cherang Ruku'),
(338, 'Kelantan', 'Dabong'),
(339, 'Kelantan', 'Gua Musang'),
(340, 'Kelantan', 'Jeli'),
(341, 'Kelantan', 'Kem Desa Pahlawan'),
(342, 'Kelantan', 'Ketereh'),
(343, 'Kelantan', 'Kota Bharu'),
(344, 'Kelantan', 'Kuala Balah'),
(345, 'Kelantan', 'Kuala Krai'),
(346, 'Kelantan', 'Machang'),
(347, 'Kelantan', 'Melor'),
(348, 'Kelantan', 'Pasir Mas'),
(349, 'Kelantan', 'Pasir Puteh'),
(350, 'Kelantan', 'Pulai Chondong'),
(351, 'Kelantan', 'Rantau Panjang'),
(352, 'Kelantan', 'Selising'),
(353, 'Kelantan', 'Tanah Merah'),
(354, 'Kelantan', 'Temangan'),
(355, 'Kelantan', 'Tumpat'),
(356, 'Kelantan', 'Wakaf Bharu'),
(357, 'Sabah', 'Beaufort'),
(358, 'Sabah', 'Beluran'),
(359, 'Sabah', 'Beverly'),
(360, 'Sabah', 'Bongawan'),
(361, 'Sabah', 'Inanam'),
(362, 'Sabah', 'Keningau'),
(363, 'Sabah', 'Kota Belud'),
(364, 'Sabah', 'Kota Kinabalu'),
(365, 'Sabah', 'Kota Kinabatangan'),
(366, 'Sabah', 'Kota Marudu'),
(367, 'Sabah', 'Kuala Penyu'),
(368, 'Sabah', 'Kudat'),
(369, 'Sabah', 'Kunak'),
(370, 'Sabah', 'Lahad Datu'),
(371, 'Sabah', 'Likas'),
(372, 'Sabah', 'Membakut'),
(373, 'Sabah', 'Menumbok'),
(374, 'Sabah', 'Nabawan'),
(375, 'Sabah', 'Pamol'),
(376, 'Sabah', 'Papar'),
(377, 'Sabah', 'Penampang'),
(378, 'Sabah', 'Putatan'),
(379, 'Sabah', 'Ranau'),
(380, 'Sabah', 'Sandakan'),
(381, 'Sabah', 'Semporna'),
(382, 'Sabah', 'Sipitang'),
(383, 'Sabah', 'Tambunan'),
(384, 'Sabah', 'Tamparuli'),
(385, 'Sabah', 'Tanjung Aru'),
(386, 'Sabah', 'Tawau'),
(387, 'Sabah', 'Tenghilan'),
(388, 'Sabah', 'Tenom'),
(389, 'Sabah', 'Tuaran'),
(390, 'Sarawak', 'Asajaya'),
(391, 'Sarawak', 'Balingian'),
(392, 'Sarawak', 'Baram'),
(393, 'Sarawak', 'Bau'),
(394, 'Sarawak', 'Bekenu'),
(395, 'Sarawak', 'Belaga'),
(396, 'Sarawak', 'Belawai'),
(397, 'Sarawak', 'Betong'),
(398, 'Sarawak', 'Bintangor'),
(399, 'Sarawak', 'Bintulu'),
(400, 'Sarawak', 'Dalat'),
(401, 'Sarawak', 'Daro'),
(402, 'Sarawak', 'Debak'),
(403, 'Sarawak', 'Engkilili'),
(404, 'Sarawak', 'Julau'),
(405, 'Sarawak', 'Kabong'),
(406, 'Sarawak', 'Kanowit'),
(407, 'Sarawak', 'Kapit'),
(408, 'Sarawak', 'Kota Samarahan'),
(409, 'Sarawak', 'Kuching'),
(410, 'Sarawak', 'Lawas'),
(411, 'Sarawak', 'Limbang'),
(412, 'Sarawak', 'Lingga'),
(413, 'Sarawak', 'Long Lama'),
(414, 'Sarawak', 'Lubok Antu'),
(415, 'Sarawak', 'Lundu'),
(416, 'Sarawak', 'Lutong'),
(417, 'Sarawak', 'Matu'),
(418, 'Sarawak', 'Miri'),
(419, 'Sarawak', 'Mukah'),
(420, 'Sarawak', 'Nanga Medamit'),
(421, 'Sarawak', 'Niah'),
(422, 'Sarawak', 'Pusa'),
(423, 'Sarawak', 'Roban'),
(424, 'Sarawak', 'Saratok'),
(425, 'Sarawak', 'Sarikei'),
(426, 'Sarawak', 'Sebauh'),
(427, 'Sarawak', 'Sebuyau'),
(428, 'Sarawak', 'Serian'),
(429, 'Sarawak', 'Sibu'),
(430, 'Sarawak', 'Siburan'),
(431, 'Sarawak', 'Simunjan'),
(432, 'Sarawak', 'Song'),
(433, 'Sarawak', 'Spaoh'),
(434, 'Sarawak', 'Sri Aman'),
(435, 'Sarawak', 'Sundar'),
(436, 'Sarawak', 'Tatau'),
(437, 'Kuala Lumpur', 'Ampang'),
(438, 'Kuala Lumpur', 'Batu Caves'),
(439, 'Kuala Lumpur', 'Cheras'),
(440, 'Kuala Lumpur', 'Damansara'),
(441, 'Kuala Lumpur', 'Gombak'),
(442, 'Kuala Lumpur', 'Hulu Kelang'),
(443, 'Kuala Lumpur', 'Kepong'),
(444, 'Kuala Lumpur', 'Kuala Lumpur'),
(445, 'Kuala Lumpur', 'Petaling'),
(446, 'Kuala Lumpur', 'Petaling Jaya'),
(447, 'Kuala Lumpur', 'Sentul'),
(448, 'Kuala Lumpur', 'Setapak'),
(449, 'Kuala Lumpur', 'Sungai Besi'),
(450, 'Putrajaya', 'Putrajaya'),
(451, 'Labuan', 'Batu Arang, Kampung'),
(452, 'Labuan', 'Cina, Kampung'),
(453, 'Labuan', 'Gerisik, Kampung'),
(454, 'Labuan', 'Kampung Batu Arang'),
(455, 'Labuan', 'Kampung Cina'),
(456, 'Labuan', 'Kampung Gerisik'),
(457, 'Labuan', 'Kampung Lajau'),
(458, 'Labuan', 'Kampung Membijal'),
(459, 'Labuan', 'Kampung Parit'),
(460, 'Labuan', 'Kampung Pohon Batu'),
(461, 'Labuan', 'Kampung Sawagan'),
(462, 'Labuan', 'Kampung Seguking'),
(463, 'Labuan', 'Lajau, Kampung'),
(464, 'Labuan', 'Layang-Layang'),
(465, 'Labuan', 'Membijal, Kampung'),
(466, 'Labuan', 'Miri, Sungai'),
(467, 'Labuan', 'Parit, Kampung'),
(468, 'Labuan', 'Pohon Batu, Kampung'),
(469, 'Labuan', 'Ranca-Ranca'),
(470, 'Labuan', 'Sawagan, Kampung'),
(471, 'Labuan', 'Seguking, Kampung'),
(472, 'Labuan', 'Sungai Miri');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_status` varchar(50) NOT NULL,
  `user_img` varchar(300) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`do_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `state_city`
--
ALTER TABLE `state_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `do_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7897782;

--
-- AUTO_INCREMENT for table `state_city`
--
ALTER TABLE `state_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=473;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1236543;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
