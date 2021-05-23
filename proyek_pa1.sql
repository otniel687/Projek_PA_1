-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 08:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_pa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_web`
--

CREATE TABLE `data_web` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_web`
--

INSERT INTO `data_web` (`id`, `nama`, `informasi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Pembuat Ulos ', '<div class=\"read-more\">\r\n    Tenun ulos Desa Lumban Suhi-Suhi adalah salah satu tenun ulos tradisonal yang menjadi penghasil / produsen ulos terbesar di Samosir. Tenun ulos di Desa Lumban Suhi-Suhi adalah sebuah kegiatan bertenun yang dilakukan nenek moyang hingga dapat terjaga sampai sekarang. Dalam proses pembuatan Ulos, para pengrajin menggunakan bahan-bahan pewarna alami yang berasal dari tumbuh-tumbuhan. Gunanya untuk menjaga kualitas kain tenun ulos agar tetap awet dan tidak mudah luntur. Ulos yang dihasilkan dari Desa ini sudah sangat terkenal kualitasnya, sehingga menarik para wisatawan untuk datang ke Desa Suhisuhi, Para wisatawan yang datang bukan hanya dari daerah sumatera saja namun juga sudah sampai terdengar ke luar negeri.\r\n</div>', 'desa1.jpeg', '2021-05-07 17:00:00', NULL),
(2, 'Desa Suhisuhi', '<div class=\"read-mori\">\r\nHuta Raja Desa Lumban Suhi Suhi Toruan ini terletak di Kecamatan Pangururan Kabupaten Samosir yang jaraknya hanya 40 Menit dari Tomok. Ketika memasuki pedesaan kreatif penghasil ulos ini, wisatawan akan disuguhi dengan pemandangan indah Danau Toba yang jaraknya hanya beberapa puluh meter dari jalan utama. Pemandangan Gunung Pusuk Buhit ikut mewarnai panorama yang memamerkan keindahan alam tanah Batak ini. Di sepanjang jalan di sisi kiri dan kanan Anda, perkampungan Batak dengan kekhasan rumah adat Batak “Jabu Bolon” pun mengiringi wisata Anda di desa ini. Anda juga dapat menemukan sebuah tugu atau makam Batak yang khas dengan bangunan bertingkat dan bermotif gorga.\r\n </div>', 'desa2.jpg', '2021-05-07 17:00:00', NULL),
(3, 'Fashion Show', '<div class=\"read-moro\">\r\n   Design ulos juga dapat dibuat menjadi gaya terkini, dan dengan dibuat event ini kita tahu bahwa ulos juga dapat kita gunakan dalam kegiatan sehari. Ulos juga dapat membuat kita menjadi fashionabel dan dapat kita gunakan dalam kegiatan lainnya.Ulos adalah salah satu karya yang luar biasa dari para penenun di Hutaraja ini. Jelas dengan adanya event dapat membantu mengembangkan bakat anak muda dalam mengasah bakat mereka. \r\n</div>', 'desa3.jpeg', '2021-05-07 17:00:00', NULL),
(4, 'Martonun Sadari', '<div class=\"read-moru\">\r\n    \"Martonun Sadari\" Sebuah kegiatan kearifan lokal Desa Lumban Suhi-suhi Toruan dalam upaya memperkenalkan kampung Ulos Hutaraja. <a href=\"https://www.instagram.com/p/CFin6BLBod5/igshid=1jy2wpsm8cq69\">@batak_com</a><br><br>Para pengrajin melakukan kegiatan ini para pengerajin akan menenun di halaman rumah mereka dengan memamerkan ulos yang telah di buat mereka. Bertenun menggambarkan berapa kuat dan tangguhnya seorang perempuan batak toba yang sering dijuluki dengan Boru Ni Raja karena bertenun bukanlah hal yang mudah. \r\n</div>', 'desa4.jpeg', '2021-05-07 17:00:00', NULL),
(5, 'Proses Pembuatan Ulos', 'Ulos yang dari bahasa asalnya adalah kain, merupakan salah satu bahan busana asli Indonesia. Kain Ulos merupakan Kain khas yang berasal dari Indonesia khususnya Sumatera Utara yang ditenun dengan dominasi warna merah, hitam, dan putih yang dihiasi oleh tenunan benang emas, perak, atau main-manik berwarna. Dibalik warnanya yang bervariasi, pembuatan ulos membutuhkan proses yang panjang. Berikut tahap-tahap dalam pembuatan ulos:', NULL, '2021-05-15 17:00:00', NULL),
(6, 'Something Special About The Batak Culture.', 'Ulos adalah barang yang sangat penting bagi suku batak, kain ulos adalah salah satu busana khas Indonesia. Dari bahasa asalnya, ulos berarti kain. Ulos secara turun temurun dikembangkan oleh masyarakat Batak, Sumatra Utara.', NULL, '2021-05-16 04:38:10', NULL),
(7, 'Some important things about Ulos Batak Toba.', '', NULL, '2021-05-16 04:38:26', NULL),
(8, 'Ulos Batak Toba', 'Kain ulos adalah kain tenun tangan khas dari suku Batak Toba yang sering juga dijadikan oleh-oleh khas dari Toba. Ulos sering digunakan baik dalam kehidupan sehari-hari. Ulos juga dipakai dalam ritus atau upacara adat Batak, baik dalam suka maupun duka. Ulos juga tidak bisa sembarangan dipakai karena beda jenis, maka beda pula maknanya. Pemberian ulos kepada orang Non-Batak ini biasanya dapat berarti sebagai sebuah simbol kasih sayang atau penghormatan. Sama seperti dengan kain di seluruh Indonesia, pembuatan kain ulos tidak mudah. Membutuhkan waktu berhari-hari atau bahkan berbulan-bulan untuk menyelesaikan satu kain. masyarakat dari luar suku Batak mengenal kain yang berasal dari kawasan Toba hanya ada satu jenis ulos. Namun, sebenarnya ulos terdiri dari berbagai jenis.', 'ulos_batak.jpg', '2021-05-15 17:00:00', NULL),
(9, 'Some important things about Ulos Batak Karo.', '', NULL, '2021-05-16 04:38:43', NULL),
(10, 'Ulos Batak Karo', 'Dalam budaya masyarakat Karo, sejak tahun 1960-an, kegiatan menenun ulos (uis), sudah tidak begitu berdensitas padat lagi, seperti masa-masa sebelumnya. Menurut penjelasan para informan, karena umumnya masyarakat Karo sangat menggantungkan dan mengutamakan kegiatan bertani (terutama sayur mayur dan buah-buahan), yang dianggap lebih menjanjikan secara ekonomis. Untuk memiliki uis mereka dapat membelinya di daerah Batak Toba dengan harga yang relatif terjangkau. Namun demikian di antara masyarakat Karo ini, ada juga yang tergerak hati dan minatnya untuk meneruskan tradisi tenunan uis. Salah satu di antaranya adalah Bapak Saha tambun, S.Teks., sarjana tekstil lulusan Institut Teknologi Tekstil Bandung tahun 1989, yang membuka usahanya di Kota Kabanjahe.', 'ulos_karo.jpg', '2021-05-15 17:00:00', NULL),
(11, '', 'Kain adat tradisional Karo (uis adat Karo) merupakan pakaian adat yang digunakan dalam kegiatan budaya suku karo maupun dalam kehidupan sehari-hari. Uis Karo memiliki warna dan motif yang berhubungan dengan penggunaannya atau dengan pelaksanaan kegiatan budaya. Pada umumnya uis adat Karo dibuat dari bahan kapas, dipintal dan ditenun secara manual dan menggunakan zat pewarna alami (tidak menggunakan bahan kimia pabrik). Namun ada juga beberapa diantaranya menggunakan bahan kain pabrikan yang dicelup (diwarnai) dengan pewarna alami dan dijadikan kain adat Karo.Beberapa di antara uis adat Karo tersebut sudah langka karena tidak lagi digunakan dalam kehidupan sehari-hari, atau hanya digunakan dalam kegiatan ritual budaya yang berhubungan dengan kepercayaan animisme dan saat ini tidak dilakukan lagi.', '', '2021-05-15 17:00:00', NULL),
(12, 'Dashboard', '<h1>Horas ! Welcome to  <span> Website Desa Suhisuhi</span></h1>\r\n<h2>Beautiful Ulos From A Great Village </h2>', NULL, '2021-05-16 17:00:00', NULL),
(13, 'Footer home', ' <p>Hello,<br>We are from group 01, Project End 1 (PA 1) ; The Development Team manages UMKM Websites. This website is used to promote and publish about Ulos UMKM from this village. For you, this may be a source of inspiration for a new project or something else that helps you. <br>Enjoy!</p>\r\n', NULL, '2021-05-16 17:00:00', NULL),
(14, 'Footer Web', 'UMKM website of Lumban Suhi-Suhi Village', NULL, '2021-05-16 17:00:00', NULL),
(15, 'Logo Web', '', 'logo2.png', '2021-05-16 17:00:00', NULL),
(16, 'Produk', '<p class=\"text-center\">Dengan Keahlian para pengrajin dalam menenun menjadikan Ulos tenun dari Desa Lumban Suhi-suhi <br>\r\nmenjadi salah satu ciri khas dari desa tersebut. Tenunan dari para pengrajin memberikan kesan tradisional dan khas <br> untuk ulos yang dihasilakan</p>', NULL, '2021-05-18 17:00:00', NULL),
(17, 'Pembuat Yang Handal Dengan Hasil Yang Spesial.', 'Pembuatan ulos tidak di buat dengan asal asalan, perlu skill yang cukup bagus dan memiliki ketelitian dalam pembuatannya. Maka perlunya pengerajin yang handal untuk membuat dalam pembuatan ulos. Beberapa pengerajin yang ada di Desa Suhisuhi dapat membantu anda memilih produk yang tepat untuk anda.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_gambar` bigint(20) NOT NULL,
  `id_galery` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_gambar`, `id_galery`, `created_at`, `updated_at`) VALUES
(21, 51, '2021-05-15 17:00:00', NULL),
(22, 52, '2021-05-15 17:00:00', NULL),
(23, 53, '2021-05-15 17:00:00', NULL),
(24, 54, '2021-05-15 17:00:00', NULL),
(25, 55, '2021-05-15 17:00:00', NULL),
(26, 56, '2021-05-15 17:00:00', NULL),
(27, 57, '2021-05-15 17:00:00', NULL),
(28, 58, '2021-05-15 17:00:00', NULL),
(29, 59, '2021-05-15 17:00:00', NULL),
(30, 60, '2021-05-15 17:00:00', NULL),
(31, 61, '2021-05-15 17:00:00', NULL),
(32, 62, '2021-05-15 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ulos`
--

CREATE TABLE `jenis_ulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_ulos`
--

INSERT INTO `jenis_ulos` (`id`, `id_jenis`, `nama`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'U1', 'Ragi Hidup', '\" Ulos ragi idup adalah ulos yang paling tinggi derajatnya.Ulos ini terdiri atas tiga bahagian, yaitu dua sisi yang ditenun sekaligus, dan satu bahagian tengah yang ditenum tersendiri dengan sangat rumit. Bahagian tengahnya terdiri ata tiga unsur, yaitu bahagian tengah atau badan, dan duabahagian lainnya sebagai ujung tempat pigura lelaki (pinarhalak hana) dan ujung tempat piguraperempuan (pinarhalak boru-boru).\"', 'Rp 2 - 20.000.000', '1620281388.jpg', NULL, '2021-05-22 21:24:00'),
(2, 'U2', 'Sibolang', '\"Ulos sibolang digolongkan sebagai ulos berderajat tinggi, sekalipun cara pembuatannya lebih sederhana.Penggunaan ulos ini biasanya dilakukan pada waktu upacara berkabung.\"\r\n', 'Rp 5-20.000.000\r\n', '1620281346.jpg', NULL, '2021-05-05 23:09:48'),
(3, 'U3', 'Mangiring', 'Ulos ini dipakai sebagai selendang,tali-tali, dan juga ulos ini diberikan kepada anak cucu yang baru lahir terutama anak pertama yang memiliki maksud dan tujuan sekaligus sebagai simbol besarnya keinginan agar si anak yang lahir baru kelak diiringi kelahiran anak seterusnya.', 'Rp 5-5.000.000', '1620281516.jpg', NULL, '2021-05-05 23:11:10'),
(4, 'U4', 'Sadum', '\"Ulos Sadum sangat identik dengan warna dasar merah serta mempunya motif bunga dan gorga yang sangat ramai. Ciri khas dari ulos sadum selalu memiliki frame atau bingkai bergaris gelap di setiap kedua sisinya. Ulos Sadum dimaknai oleh suku Batak sebagai simbol suka cita sebagai pertanda motifasi penyemangat dalam suatu keluarga agar tetap bersuka cita melakukan segala aktifitas sehari-hari. \"\r\n', 'Rp 5-1.000.000\r\n', '1620281470.jpg', NULL, '2021-05-05 23:11:27'),
(5, 'U5', 'Ragi Hotang', '\"Ulos ragihotang, termasuk berkedudukan dan berderajat tinggi, namun cara pembuatannya tidak serumit ulos ragi idup. Terminologi hotang artinya adalah rotan, dan ulos ini mempunyai keistimewaan yang dapat dilihat dari fungsi sosialnya. Ulos ini digunakan untuk mengulosi seseorang dengan harapanagar Tuhan akan memberikannya hasil yang baik, dan orang yang rajin berkerja.\"\r\n', 'Rp 5-1.500.000', '1620281487.jpg', NULL, '2021-05-05 23:11:56'),
(6, 'U6', 'Ragi Huting\r\n', 'Ulos ini sudah sangat langka ditemukan, sesuai dengan perkembangan zaman. Dahulu kala ulos ini digunakan oleh gadis Batak, dililitkan dibagian dada. Selain itu digunakan juga oleh orang tua apabila bepergian.\r\n', 'Rp 5-1.500.000\r\n', '1620281617.jpg\r\n', NULL, '2021-05-05 23:13:01'),
(7, 'U7', 'Bintang Maratur', 'Ulos ini sebagai perantara ucapan suka cita atau berita gembira yang diberikan kepada orang-orang tertentu yang mendapat berkat atau rezeki agar semua orang disekitarnya juga turut merasakan kebahagian.', 'Rp 3-5.000.000', '1620281597.jpg', NULL, '2021-05-05 23:13:17'),
(8, 'U8', 'Simarinjam Sisi', 'Ulos ini digunakan sebagai kain dan juga di lengkapi dengan Ulos Pinunca yang di sandang dengan perlengkapan adat Batak sebagai Panjoloani (mendahului di depan). Yang memakai ulos ini adalah satu orang yang berada paling depan.\r\n', 'Rp 1-2.000.000\r\n', '1620281581.jpg', NULL, '2021-05-05 23:13:37'),
(9, 'U9', 'Uis Beka Buluh', 'Uis beka buluh, ukurannya 166 x 86 cm. Uis beka buluh mengekspresikan perasaan gembira. Kain adat ini merupakan lambang kewibawaan dan tanda kebesaran bagi pemakainya', 'Rp 5-1.000.000', '1620281837.jpg', NULL, '2021-05-05 23:17:17'),
(10, 'U10', 'Uis Perembah', '\"Uis Perembah, ukuran: 160 x 67 cm, penggunaannya untuk menggendong bayi dan untuk anakpertama, perembah diberikan oleh kalimbubu seiring doa dan berkat agar anak tersebut sehat-sehat, cepat besar dan menjadi orang sukses dalam hidupnya kelak.\"', 'Rp 3-700.000', '1620281856.jpg', NULL, '2021-05-05 23:17:36'),
(11, 'U11', 'Uis Arinteneng', '\"Uis arinteneng, ukurannya 140 x 84 cm,terbuat dari kapas atau kembayat yang ditenun,warnanya hitam pekat hasil pencelupan yang disebut ipelabuhken.Penggunaan untuk alas pinggan pasu yang dipakai pada waktu penyerehan mas kawin.\"', 'Rp 2-700.000', '1620281874.jpg', NULL, '2021-05-05 23:17:54'),
(12, 'U12', 'Uis Julu Berjongkit', '\"Uis julu berjongkit dilaki, ukurannya 172 x 96 cm.  Uis ini memakai benang emas dengan motif melintang pada bagian tengah kain tersebut, hingga warna dan bentuknya lebih cerah.Uis ini menunjukkan karakter kuat dan perkasa. Penggunaannya adalah sebagai pakaian luar bagian bawah untuk laki-laki yang disebut gonje (sebagai kain sarung)\"', 'Rp 3-700.000', '1620281891.jpg', NULL, '2021-05-05 23:18:11'),
(13, 'U13', 'Uis Gatip', 'Uis Gatip, ukurannya 164 x 96 Cm.Uis Gatip ini berwarna hitam dan berbintik-bintik putih di tengah, tepian kain warnanya hitam pekat dan ujungnya terjalin dan berumbai. Jenis kainnya lebih tebal sehingga sering disebut dengan Uis kapal (kain tebal). Uis gatip menunjukkan karakter teguh dan ulet. Penggunaannya  sebagai penutup kepala (tudung) wanita Karo baik pada pesta maupun dalam kesehariannya.', 'Rp 3-1.000.000', '1620281908.jpg', NULL, '2021-05-05 23:18:28'),
(14, 'U14', 'Uis Pementing', 'Uis pementing, ukuran 168 x 72 cm. Penggunaan kain ini dipakai Pria Karo sebagai ikat pinggang (benting) pada saat berpakaian adat lengkap dengan menggunakan uis julu sebagai kain sarung.', 'Rp 3-600.000', '1620281922.jpg', NULL, '2021-05-17 03:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_28_084404_add_column_to_users_table', 1),
(5, '2021_04_28_090829_create_pengrajin_table', 1),
(6, '2021_04_28_090948_create_admin_table', 1),
(7, '2021_04_30_003639_create_data_web_table', 1),
(8, '2021_05_06_055544_create_jenis_ulos_table', 1),
(9, '2021_05_08_024934_create_galery_table', 1),
(10, '2021_05_15_054813_create_video_table', 1),
(11, '2021_05_16_050829_create_picture_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kritik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengrajin`
--

CREATE TABLE `pengrajin` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `kerajinan` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengrajin`
--

INSERT INTO `pengrajin` (`id`, `nama`, `alamat`, `kontak`, `kerajinan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Rohani Silalahi', 'Desa Lumban Suhi Toruan, Hutaraja', '083131923316', 'Ulos Batak Toba dan Batak Karo  (pewarna alami)', '1621236337.jpg', '2021-05-22 17:00:00', NULL),
(2, 'Efriana Simarmata', 'Desa Lumban Suhi Toruan, Hutaraja', '087869159927', 'Ulos Batak Karo', '1621236346.jpg', '2021-05-22 17:00:00', NULL),
(3, 'Desnita Simarmata', 'Desa Lumban Suhi Toruan, Hutaraja', '083131923316', 'Ulos Batak Karo', '1621236357.jpg', '2021-05-22 17:00:00', NULL),
(4, 'Ratna Sijabat', 'Desa Lumban Suhi Toruan, Hutaraja', '-', 'Ulos Batak Toba dan Batak Karo  (pewarna sintesis)', '1621236368.jpg', '2021-05-22 17:00:00', NULL),
(5, 'Linda Sinurat', 'Desa Lumban Suhi Toruan, Hutaraja', '-', 'Ulos Batak Toba dan Batak Karo  (pewarna sintesis)', '1621236377.jpg', '2021-05-22 17:00:00', NULL),
(6, 'Sostiwuana Sinaga', 'Desa Lumban Suhi Toruan, Hutaraja', '082370594016', 'Ulos Batak Toba dan Batak Karo  (pewarna alami)', '1621236554.jpg', '2021-05-22 17:00:00', NULL),
(7, 'Masita Simarmata', 'Desa Lumban Suhi Toruan, Hutaraja', '-', 'Ulos Batak Toba dan Batak Karo  (pewarna alami)', '1621236599.jpg', '2021-05-22 17:00:00', NULL),
(8, 'Sonta Situmorang', 'Desa Lumban Suhi Toruan, Hutaraja', '082167411136', 'Ulos Batak Toba dan Batak Karo  (pewarna sintesis)', '1621236608.jpg', '2021-05-22 17:00:00', NULL),
(9, 'Romula Situmorang', 'Desa Lumban Suhi Toruan, Hutaraja', '081919931339', 'Ulos Batak Karo', '1621236732.jpg', '2021-05-22 17:00:00', NULL),
(10, 'Monika Situmorang', 'Desa Lumban Suhi Toruan, Hutaraja', '087893728571', 'Ulos Batak Karo', '1621243502.jpg', '2021-05-22 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` bigint(20) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(21, 'galeri1.jpg', '2021-05-15 17:00:00', NULL),
(22, 'galeri2.jpeg', '2021-05-15 17:00:00', NULL),
(23, 'galeri3.jpeg', '2021-05-15 17:00:00', NULL),
(24, 'galeri4.jpg', '2021-05-15 17:00:00', NULL),
(25, 'galeri5.jpeg', '2021-05-15 17:00:00', NULL),
(26, 'galeri6.jpeg', '2021-05-15 17:00:00', NULL),
(27, 'galeri7.jpeg', '2021-05-15 17:00:00', NULL),
(28, 'galeri8.jpeg', '2021-05-15 17:00:00', NULL),
(29, 'galeri9.jpeg', '2021-05-15 17:00:00', NULL),
(30, 'galeri10.jpeg', '2021-05-15 17:00:00', NULL),
(31, 'galeri11.jpeg', '2021-05-15 17:00:00', NULL),
(32, 'galeri12.jpeg', '2021-05-15 17:00:00', NULL),
(71, 'produk1.jpeg', '2021-05-15 17:00:00', NULL),
(72, 'produk2.jpeg', '2021-05-15 17:00:00', NULL),
(73, 'produk3.jpeg', '2021-05-15 17:00:00', NULL),
(74, 'produk4.jpeg', '2021-05-15 17:00:00', NULL),
(75, 'produk5.jpeg', '2021-05-15 17:00:00', NULL),
(76, 'produk6.jpeg', '2021-05-15 17:00:00', NULL),
(77, 'produk7.jpeg', '2021-05-15 17:00:00', NULL),
(78, 'produk8.jpeg', '2021-05-15 17:00:00', NULL),
(79, 'produk9.jpeg', '2021-05-15 17:00:00', NULL),
(80, 'produk10.jpeg', '2021-05-15 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `kontak1` varchar(250) NOT NULL,
  `kontak2` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `kontak1`, `kontak2`, `gambar`) VALUES
(1, 'Ulos Sadum', 'Rp. 500.000-1.000.000', 'Rohani Silalahi : 083131923316', 'Romula Situmorang : 081919931339', 'produk1.jpeg'),
(2, 'Ulos Ragi Hotang', 'Rp. 500.000-1.500.000', 'Sostiwuana Sinaga : 082370594016', 'Monika Situmorang : 087893728571', 'produk2.jpeg'),
(3, 'Ulos Sibolang', 'Rp. 5-20.000.000', 'Sonta Situmorang : 082167411136', 'Rohani Silalahi	: 083131923316', 'produk3.jpeg'),
(4, 'Ulos Bintang Maratur', 'Rp 300.000-5.000.000', 'Sostiwuana Sinaga : 082370594016', 'Romula Situmorang : 081919931339', 'produk4.jpeg'),
(5, 'Ulos Mangiring', 'Rp 500.000-5.000.000', 'Monika Situmorang : 087893728571', 'Desnita Novita Sari Simarmata : 083131923316', 'produk5.jpeg'),
(6, 'Ulos Sibolang', 'Rp. 5-20.000.000', 'Sonta Situmorang : 082167411136', 'Rohani Silalahi	: 083131923316', 'produk6.jpeg'),
(7, 'Uis Nipes', 'Rp. 500.000', 'Efriana Ayu Lestari Simarmata : 087869159927', 'Desnita Novita Sari Simarmata : 083131923316', 'produk7.jpeg'),
(8, 'Uis Julu Diberu', 'Rp. 550.000', 'Rohani Silalahi	: 083131923316', 'Efriana Ayu Lestari Simarmata : 087869159927', 'produk8.jpeg'),
(9, 'Beka Buluh Karo', 'Rp.500.000', 'Efriana Ayu Lestari Simarmata : 087869159927', 'Desnita Novita Sari Simarmata : 083131923316', 'produk9.jpeg'),
(10, 'Ulos Ragi Hotang', 'Rp 500.000-1.500.000', 'Sostiwuana Sinaga : 082370594016', 'Monika Situmorang : 087893728571', 'produk10.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proses`
--

INSERT INTO `proses` (`id`, `judul`, `informasi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '1. Pembuatan benang', 'Pada tahap awal, Kapas yang telah diperoleh kemudian digulung (dalam masyarakat batak dulu disebut \"bebe\") agar kapas mengembang dan mempermudah pemintalan. Lalu Pemintalan kapas (dalam masyarakat batak dulu disebut \"mampis\") dengan nama bernama \"sorha\"', 'proses1.jpeg', '2021-05-18 17:00:00', NULL),
(2, '2. Pewarnaan benang', 'Selanjutnya benang diwarnai untuk memperoleh warna merah (manubar) dan hitam (mansop). Bahan pewarna yang digunakan terbuat dari daun-daunan berbagai jenis yang sebelumnya telah difermentasi untuk menghasilkan warna yang diinginkan.\r\n\r\n', 'proses2.jpeg', '2021-05-18 17:00:00', NULL),
(3, '3. Gatip (Pengikatan)', 'Sebelum pembuatan ulos dimulai, motif khusus pada ulos dibuat terlebih dahulu menggunakan benang standar yang belum berwarna (putih) yang diikat dengan bahan pengikat terdiri atas serat dan daun serai.', 'proses3.jpg', '2021-05-18 17:00:00', NULL),
(4, '4. Unggas (Pencerahan Benang)', 'Benang yang baru selesai ditubar atau disop biasanya berwarna kusam sehingga perlu diunggas untuk memberi kesan yang lebih cemerlang. kemudian benang dilumuri nasi yang dilumerkan kemudian digosok dengan kuas bulat dari ijuk. Biasanya benang yang sudah di', 'proses4.jpg', '2021-05-18 17:00:00', NULL),
(5, '5. Ani (penguntaian)', 'Benang yang telah diunggas kemudian diuntai. sebelum diuntai, benang digulung berbentuk bola agar mempermudah enguntaian. alat yang digunakan adalah \"anian\" yang terdiri atas sepotong balok kayu yang diatasnya ditancapkan tongkat pendek sesuai ukuran ulos', 'proses5.jpeg', '2021-05-18 17:00:00', NULL),
(6, '6. Tonun', 'Setelah benang diuntai, maka selanjutnya benang pun ditenun untuk membentuk sehelai ulos. Tonun (tenun) adalah proses pembentukan benang yang sudah “diani” menjadi sehelai ulos. Mereka ini yang lajim disebut “partonun”.', 'proses6.jpeg', '2021-05-18 17:00:00', NULL),
(7, '7. Sirat', 'Proses terakhir menjadi ulos yang memberi hiasan pengikat rambu ulos (sirat) yang biasanya dibentuk dengan motif gorga. Orang yang melakukan pekerjaan ini disebut “panirat”. Sirat adalah hiasan pengikat rambu ulos. Biasanya dibentuk dengan motif gorga.\r\n\r', 'proses7.jpeg', '2021-05-18 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raja', 'KepalaDesa', 'Raja@gmail.com', NULL, '$2y$10$MLLC2H0xpUidPcxYoQ1jt.Tb3/jLk2xUKlv2wgZSIAhTv194NspRa', 'mAePyQTW0wFV5ErSJtetpsneW6cqawZKVz0x6tn1eTkybYIlTD', '2021-05-19 03:02:48', '2021-05-19 03:02:48'),
(2, 'Noel', 'Noel', 'Noel@gmail.com', NULL, '$2y$10$7QTiH8MACDpoe2h5nzWq9.rMThaP3Aw5iEWIiGMT.cTl4fT8BcaIW', 'pUDOJZWxRLs0tbxzesMzJKz4VVJiEAhcIaUNsziOnwIjrJXqq3', '2021-05-19 03:04:43', '2021-05-19 03:04:43'),
(3, 'Otniel', 'Otniel', 'Otniel@gmail.com', NULL, '$2y$10$QabNtj1YwvDdWRC.ATw7y.sDU29wNoqDxEnuge5ywvIlyn6LqOLZG', 'YFcYTBWBhqiQazHKFaLXm9O8DEgy8UeMH4UCKAgEUXlfWMG5hp8KzNolXRyV', '2021-05-19 03:07:10', '2021-05-19 03:07:10'),
(4, 'Sopiana', 'Sopiana', 'Sopiana@gmail.com', NULL, '$2y$10$DiuQT2huemoCb2J8zHGa7u00N04Bt0osls9cOpnl7ZQPXdZL6FY7.', 'KXXN3VAChKekh1DDqds6KPOoxf5YkTzqtizhY6EBFT0kzsKtEY', '2021-05-19 03:09:01', '2021-05-19 03:09:01'),
(5, 'Srinesia', 'Srinesia', 'Srinesia@gmail.com', NULL, '$2y$10$B/3iSW4iQQLNYt3k3/Z8cuLEeYAAfiznc8STzxLHF1uk/GdlMO.Ly', 'Icas9c4u00qhwELdTHL6hWU0EthE6ILueTbDmyCoLABEydIJVO', '2021-05-19 03:10:47', '2021-05-19 03:10:47'),
(6, 'Debi', 'Debi', 'Debi@gmail.com', NULL, '$2y$10$jH56Nq18/KIfyL7HvaITkOGKb9mRUSTL6OKpBv7itA0GIcZNzZEfC', 'eDhsjzx0oPFAKerpERjeBziTgZtlDbSVltXNV7xLmU8dxmSqF7', '2021-05-19 03:12:07', '2021-05-19 03:12:07'),
(7, 'Polin', 'Polin', 'Polin@gmail.com', NULL, '$2y$10$hL9XboB/DwqUrIE7YdIju.spugrDoILCweLhtNptpN/2RR0HcUezC', 'iXnDb9vKgPmMSnH3bfmctgaYSHkEiTieziYu3X44ATCO972j9M', '2021-05-19 03:13:15', '2021-05-19 03:13:15'),
(8, 'Lydwina', 'Lydwina', 'Lydwina@gmail.com', NULL, '$2y$10$c3J.ma16XZEVUX8ajGLiZu1jP9dXeeVU4tqzR.REu/xPJ5IrG5mZm', 'X4FzlndF1mce1XwPytKSBmAudT6r0G3ErhCvfcHdQ3qOgAQhxZ', '2021-05-19 03:18:17', '2021-05-19 03:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_video` int(11) NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_display` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `id_video`, `video`, `id_display`, `created_at`, `updated_at`) VALUES
(1, 71, 'desa.mp4', '81', '2021-05-15 17:00:00', NULL),
(2, 72, 'ulos.mp4', '82', '2021-05-15 17:00:00', NULL),
(3, 73, 'ulos_batak.mp4', '83', '2021-05-15 17:00:00', NULL),
(4, 74, 'ulos_karo.mp4', '84', '2021-05-15 17:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_web`
--
ALTER TABLE `data_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_gambar`,`id_galery`);

--
-- Indexes for table `jenis_ulos`
--
ALTER TABLE `jenis_ulos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengrajin`
--
ALTER TABLE `pengrajin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_web`
--
ALTER TABLE `data_web`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_ulos`
--
ALTER TABLE `jenis_ulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengrajin`
--
ALTER TABLE `pengrajin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proses`
--
ALTER TABLE `proses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `picture` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
