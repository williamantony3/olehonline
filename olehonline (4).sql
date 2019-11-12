-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 03:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olehonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `CartId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerId` int(11) UNSIGNED NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerId`, `Username`, `Password`, `Email`, `Name`, `Address`, `Status`, `updated_at`, `created_at`) VALUES
(1, 'a', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 'aaa', 'asd', 0, '2019-11-06 03:00:45', '2019-11-06 03:00:45'),
(2, 'williamantony@ymail.com', '0fdca9a022911cf540a3f17574dd05cd', 'antony.william30@gmail.com', 'Aldo', 'saddas', 0, '2019-11-06 03:11:23', '2019-11-06 03:11:23'),
(3, 'williamantony@ymail.com', '0fdca9a022911cf540a3f17574dd05cd', 'antony.william30@gmail.com', 'Aldo', 'saddas', 0, '2019-11-06 03:11:25', '2019-11-06 03:11:25'),
(4, 'williamantony@ymail.com', '0aa1ea9a5a04b78d4581dd6d17742627', 'antony.william30@gmail.com', 'Wennie', 'asddada', 0, '2019-11-06 03:12:33', '2019-11-06 03:12:33'),
(5, 'williamantony@ymail.com', '0aa1ea9a5a04b78d4581dd6d17742627', 'antony.william30@gmail.com', 'Wennie', 'asddada', 0, '2019-11-06 03:12:45', '2019-11-06 03:12:45'),
(6, 'wil323', '60b57e31a267674fd14605e553018116', 'williamantony@ymail.com', 'William Antony', 'Jl. Angkasa', 0, '2019-11-06 03:25:02', '2019-11-06 03:25:02'),
(7, 'aldo', 'b104ab9a0e58c861b9628208b3fecd58', 'aldo@gmail.com', 'Aldo', 'jalanin aja dulu', 0, '2019-11-06 19:52:42', '2019-11-06 19:52:42'),
(8, 'chandra', 'ad845a24a47deecbfa8396e90db75c6a', 'chandra@gmail.com', 'Chandra Halim', 'fasdf', 0, '2019-11-07 01:46:57', '2019-11-07 01:46:57'),
(9, 'david', '172522ec1028ab781d9dfd17eaca4427', 'david@gmail.com', 'David', 'jalan', 0, '2019-11-07 01:49:54', '2019-11-07 01:49:54'),
(10, 'deka', '57ef16a773d505292b52918bcd6d8d29', 'deka@gmail.com', 'Deka Thomas', 'dasda', 0, '2019-11-07 08:22:48', '2019-11-07 01:52:15'),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@olehonline.com', 'Admin', 'Admin', 1, '2019-11-08 03:06:44', '2019-11-07 20:06:12'),
(12, 'marcel', '24dde05168c24253ce9fec0fddd1e48d', 'marcel@gmail.com', 'Marcel Julian', 'fasdf', 0, '2019-11-11 02:32:35', '2019-11-11 02:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) UNSIGNED NOT NULL,
  `ProvinceId` int(11) UNSIGNED NOT NULL,
  `CustomerId` int(11) UNSIGNED NOT NULL,
  `ProductTypeId` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductPrice` int(12) UNSIGNED NOT NULL,
  `Description` varchar(500) NOT NULL,
  `ProductStock` int(11) UNSIGNED NOT NULL,
  `ProductImage` varchar(500) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `ProvinceId`, `CustomerId`, `ProductTypeId`, `ProductName`, `ProductPrice`, `Description`, `ProductStock`, `ProductImage`, `updated_at`, `created_at`) VALUES
(1, 12, 11, 1, 'Kue Cucur', 1000, 'Kue cucur dijadikan sesajen oleh mereka yang berkeyakinan kaharingan. Namun kini, kue ini bisa dikonsumsi oleh masyarakat secara umum tidak hanya pada waktu ritual. Kue cucur terbuat dari tepung beras, gula pasir dan tambahan bahan lainnya.', 1001, '1.jpg', '2019-11-12 14:32:58', NULL),
(2, 13, 11, 1, 'Onde-onde Ubi Ungu', 1500, 'Onde-onde ubi ungu merupakan panganan khas Balikpapan yang terbuat dari ubi ungu sebagai isiannya. Sementara luarannya tidak jauh berbeda dengan onde-onde pada umumnya, terbuat dari beras ketan dan taburan wijen.', 100, '2.jpg', '2019-11-11 07:24:04', NULL),
(3, 5, 11, 1, 'Bir Pletok', 10000, 'Salah satu minuman khas Jakarta yang terkenal hingga ke pelosok Indonesia bahkan mancanegara. Bir pletok sebenarnya merupakan minuman penyegar yang dibuat dengan campuran beberapa jenis rempah, meliputi jahe, daun pandan wangi, dan juga serai.', 100, '3.jpg', '2019-11-11 07:29:54', NULL),
(4, 21, 11, 1, 'Pie Susu', 35000, 'Banyaknya orang yang memburu jajanan ini membuatnya sulit untuk dicari. Makanan ini sendiri berbentuk bulat dan pipih dan layaknya pie pada umumnya yang berkulit garing daan tengahnya susu, pie ini sangatlah enak.', 100, '4.jpg', '2019-11-11 07:24:10', NULL),
(5, 34, 11, 1, 'Bakpia', 3500, 'Makanan yang terbuat dari campuran kacang hijau dengan gula, yang dibungkus dengan tepung, lalu dipanggang', 100, '5.jpg', '2019-11-10 16:10:57', NULL),
(6, 28, 11, 2, 'Jam Dinding', 150000, 'Kerajinan kayu hitam', 20, '6.jpg', '2019-11-10 16:10:57', NULL),
(7, 29, 11, 2, 'Kain Tenun', 80000, 'Memiliki ciri khas tersendiri asal Kendari ', 30, '7.jpg', '2019-11-10 16:10:57', NULL),
(8, 31, 11, 2, 'Mukena', 400000, 'Dibuat dengan seni Kerancang yaitu seni menyulam dari Sumbar dengan membentuk kain halus dengan ciri lubang kecil ', 30, '8.jpg', '2019-11-10 16:10:57', NULL),
(9, 33, 11, 2, 'Kain Ulos', 1200000, 'Kain Ulos adalah salah satu kain khas Indonesia yang dilestarikan oleh suku Batak, Sumatera Utara. Proses pembuatannya ditenun bukan dengan menggunakan mesin. Kain ini didominasi dengan warna putih, hitam, dan merah yang juga dihiasi dengan benang emas dan perak yang membuat kain ini semakin indah. Kain Ulos biasa digunakan saat upacara Adat Batak sebagai sarung atau selendang, juga bisa digunakan sebagai souvenir.', 30, '9.jpg', '2019-11-10 16:10:57', NULL),
(13, 16, 11, 2, 'HeadsetLagi', 1233, 'das', 16, '13.jpg', '2019-11-12 14:40:56', '2019-11-12 14:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `producttypes`
--

CREATE TABLE `producttypes` (
  `ProductTypeId` int(11) UNSIGNED NOT NULL,
  `ProductTypeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttypes`
--

INSERT INTO `producttypes` (`ProductTypeId`, `ProductTypeName`) VALUES
(1, 'Makanan'),
(2, 'Cinderamata');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `ProvinceId` int(3) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`ProvinceId`, `Name`, `Description`) VALUES
(1, 'Aceh', 'sebuah provinsi di Indonesia yang ibu kotanya berada di Banda Aceh. Aceh merupakan salah satu provinsi di Indonesia yang diberi status sebagai daerah istimewa dan juga diberi kewenangan otonomi khusus. Aceh terletak di ujung utara pulau Sumatra dan merupakan provinsi paling barat di Indonesia. Menurut hasil sensus Badan Pusat Statistik tahun 2019, jumlah penduduk provinsi ini sekitar 5.281.891Jiwa.[10] Letaknya dekat dengan Kepulauan Andaman dan Nikobar di India dan terpisahkan oleh Laut Andaman. Aceh berbatasan dengan Teluk Benggala di sebelah utara, Samudra Hindia di sebelah barat, Selat Malaka di sebelah timur, dan Sumatra Utara di sebelah tenggara dan selatan.'),
(2, 'Banten', 'sebuah provinsi ,wilayah paling barat di Pulau Jawa, Indonesia. Provinsi ini pernah menjadi bagian dari Provinsi Jawa Barat, tetapi menjadi wilayah pemekaran sejak tahun 2000, dengan keputusan Undang-Undang Nomor 23 Tahun 2000. Pusat pemerintahannya berada di Kota Serang'),
(3, 'Bengkulu', 'sebuah provinsi di Indonesia. Ibu kotanya berada di Kota Bengkulu. Provinsi ini terletak di bagian barat daya Pulau Sumatra.'),
(4, 'Gorontalo', 'salah satu Provinsi di Indonesia yang lahir pada tanggal 5 Desember, 2000 dan memiliki Ibu kota provinsi bernama sama yaitu, Kota Gorontalo. Sama halnya dengan ibu kotanya, Provinsi Gorontalo terkenal dengan julukan \"Serambi Madinah\". Dalam catatan sejarah Indonesia, satu-satunya Presiden RI yang berasal dari Suku Gorontalo adalah Presiden Republik Indonesia ke-3, Prof. DR. Ing. B.J. Habibie, dari garis keturunan ayahnya yang memiliki marga Habibie, yaitu Alwi Abdul Jalil Habibie. '),
(5, 'Jakarta', 'ibu kota negara dan kota terbesar di Indonesia. Jakarta merupakan satu-satunya kota di Indonesia yang memiliki status setingkat provinsi. Jakarta terletak di pesisir bagian barat laut Pulau Jawa. Dahulu pernah dikenal dengan beberapa nama di antaranya Sunda Kelapa, Jayakarta, dan Batavia. Di dunia internasional Jakarta juga mempunyai julukan J-Town, atau lebih populer lagi The Big Durian karena dianggap kota yang sebanding New York City (Big Apple) di Indonesia. '),
(6, 'Jambi', 'sebuah Provinsi Indonesia yang terletak di pesisir timur di bagian tengah Pulau Sumatra. Jambi adalah satu dari tiga provinsi di Indonesia yang ibu kotanya bernama sama dengan nama provinsinya, selain Bengkulu, Daerah Khusus Ibukota Jakarta, dan Gorontalo.'),
(7, 'Jawa Barat', 'sebuah provinsi di Indonesia, ibu kotanya berada di Bandung.'),
(8, 'Jawa Tengah', 'sebuah provinsi Indonesia yang terletak di bagian tengah Pulau Jawa. Ibu kotanya adalah Semarang. Provinsi ini berbatasan dengan Provinsi Jawa Barat di sebelah barat, Samudra Hindia dan Daerah Istimewa Yogyakarta di sebelah selatan, Jawa Timur di sebelah timur, dan Laut Jawa di sebelah utara. Luas wilayahnya 32.548 km², atau sekitar 28,94% dari luas pulau Jawa. Provinsi Jawa Tengah juga meliputi Pulau Nusakambangan di sebelah selatan (dekat dengan perbatasan Jawa Barat), serta Kepulauan Karimun Jawa di Laut Jawa.'),
(9, 'Jawa Timur', 'sebuah provinsi di bagian timur Pulau Jawa, Indonesia. Ibu kotanya terletak di Surabaya. Luas wilayahnya 47.922 km², dan jumlah penduduknya 42.030.633 jiwa (sensus 2017). Jawa Timur memiliki wilayah terluas di antara 6 provinsi di Pulau Jawa, dan memiliki jumlah penduduk terbanyak kedua di Indonesia setelah Jawa Barat. Jawa Timur berbatasan dengan Laut Jawa di utara, Selat Bali di timur, Samudra Hindia di selatan, serta Provinsi Jawa Tengah di barat. Wilayah Jawa Timur juga meliputi Pulau Madura, Pulau Bawean, Pulau Kangean serta sejumlah pulau-pulau kecil di Laut Jawa (Kepulauan Masalembu), dan Samudera Hindia (Pulau Sempu, dan Nusa Barung).'),
(10, 'Kalimantan Barat', 'sebuah provinsi di Indonesia yang terletak di Pulau Kalimantan dengan ibu kota Provinsi Kota Pontianak. Luas wilayah Provinsi Kalimantan Barat adalah 146.807 km² (7,53% luas Indonesia). Merupakan provinsi terluas keempat setelah Papua, Kalimantan Timur dan Kalimantan Tengah.'),
(11, 'Kalimantan Selatan', 'salah satu provinsi di Indonesia yang terletak di pulau Kalimantan. Ibu kotanya adalah Banjarmasin. Provinsi Kalimantan Selatan memiliki luas 37.530,52 km² dengan populasi hampir 3,7 juta jiwa.'),
(12, 'Kalimantan Tengah ', 'salah satu provinsi di Indonesia yang terletak di Pulau Kalimantan. Ibu kotanya adalah Kota Palangka Raya. Kalimantan Tengah memiliki luas 157.983 km². Berdasarkan sensus tahun 2010, provinsi ini memiliki populasi 2.202.599 jiwa, yang terdiri atas 1.147.878 laki-laki dan 1.054.721 perempuan. Data BPS Kalimantan Tengah tahun 2018 menunjukkan penduduk provinsi ini tahun 2017 bertambah menjadi 2.605.274 (Laki-laki 1.361.715 jiwa dan perempuan 1.243.559 jiwa). Kalimantan Tengah mempunyai 13 kabupaten dan 1 kota.'),
(13, 'Kalimantan Timur', 'sebuah provinsi Indonesia di Pulau Kalimantan bagian ujung timur yang berbatasan dengan Malaysia, Kalimantan Utara, Kalimantan Tengah, Kalimantan Selatan, Kalimantan Barat, dan Sulawesi. Luas total Kaltim adalah 127.346,92 km² dan populasi sebesar 3.575.449 jiwa (2017). Kaltim merupakan wilayah dengan kepadatan penduduk terendah keempat di nusantara. Ibu kota provinsi ini adalah kota Samarinda.'),
(14, 'Kalimantan Utara', 'sebuah provinsi di Indonesia yang terletak di bagian utara Pulau Kalimantan. Provinsi ini berbatasan langsung dengan negara tetangga Malaysia, yaitu Negara Bagian Sabah dan Sarawak. Pusat pemerintahan Kalimantan Utara saat ini berada di kota Tanjung Selor, bersama dengan pusat pemerintahan Kabupaten Bulungan. Saat ini Kalimantan Utara merupakan provinsi termuda Indonesia yang resmi disahkan menjadi provinsi dalam rapat paripurna DPR pada tanggal 25 Oktober 2012 berdasarkan Undang-undang Nomor 20 Tahun 2012.'),
(15, 'Kepulauan Bangka Belitung', 'sebuah provinsi di Indonesia yang terdiri dari dua pulau utama yaitu Pulau Bangka dan Pulau Belitung serta ratusan pulau-pulau kecil, total pulau yang telah bernama berjumlah 470 buah dan yang berpenghuni hanya 50 pulau. Bangka Belitung terletak di bagian timur Pulau Sumatra, dekat dengan Provinsi Sumatra Selatan. Bangka Belitung dikenal sebagai daerah penghasil timah, memiliki pantai yang indah dan kerukunan antar etnis. Ibu kota provinsi ini ialah Pangkalpinang. Pemerintahan provinsi ini disahkan pada tanggal 9 Februari 2001.'),
(16, 'Riau', 'sebuah provinsi di Indonesia yang terletak di bagian tengah pulau Sumatra. Provinsi ini terletak di bagian tengah pantai timur Pulau Sumatra, yaitu di sepanjang pesisir Selat Melaka. Hingga tahun 2004, provinsi ini juga meliputi Kepulauan Riau, sekelompok besar pulau-pulau kecil (pulau-pulau utamanya antara lain Pulau Batam dan Pulau Bintan) yang terletak di sebelah timur Sumatra dan sebelah selatan Singapura. Kepulauan ini dimekarkan menjadi provinsi tersendiri pada Juli 2004. Ibu kota dan kota terbesar Riau adalah Pekanbaru.'),
(17, 'Kepulauan Riau', 'Kepulauan Riau berbatasan dengan Vietnam dan Kamboja di sebelah utara; Malaysia dan provinsi Kalimantan Barat di timur; provinsi Kepulauan Bangka Belitung dan Jambi di selatan; Negara Singapura, Malaysia dan provinsi Riau di sebelah barat. Provinsi ini termasuk provinsi kepulauan di Indonesia. Secara keseluruhan wilayah Kepulauan Riau terdiri dari 5 kabupaten, dan 2 kota, 52 kecamatan serta 299 kelurahan/desa dengan jumlah 2.408 pulau besar, dan kecil yang 30% belum bernama, dan berpenduduk. Adapun luas wilayahnya sebesar 8.201,72 km², sekitar 95% merupakan lautan, dan hanya sekitar 5% daratan.'),
(18, 'Lampung', 'sebuah provinsi paling selatan di Pulau Sumatra, Indonesia, dengan ibu kota Bandar Lampung. Provinsi ini memiliki dua kota yaitu Kota Bandar Lampung dan Kota Metro serta 13 kabupaten. Posisi Lampung secara geografis berada di sebelah barat berbatasan dengan Samudra Hindia, di sebelah timur dengan Laut Jawa, di sebelah utara berbatasan dengan provinsi Sumatra Selatan, dan di sebelah selatan berbatasan dengan Selat Sunda.'),
(19, 'Maluku', 'Sebuah provinsi yang meliputi bagian selatan Kepulauan Maluku, Indonesia. Ibu kota Maluku adalah Ambon yang bergelar atau memiliki julukan sebagai Ambon Manise, kota Ambon berdiri di bagian selatan dari Pulau Ambon yaitu di jazirah Leitimur. Jumlah penduduk provinsi ini tahun 2010 dalam hasil sensus berjumlah 1.533.506 jiwa. Maluku terletak di Indonesia Bagian Timur. Berbatasan langsung dengan Maluku Utara dan Papua Barat di sebelah utara, Laut Maluku, Sulawesi Tengah, dan Sulawesi Tenggara di sebelah barat, Laut Banda, Timor Leste, dan Nusa Tenggara Timur di sebelah selatan serta Laut Aru dan Papua di sebelah timur.'),
(20, 'Maluku Utara', 'Salah satu provinsi di Indonesia. Maluku Utara resmi terbentuk pada tanggal 4 Oktober 1999, melalui UU RI Nomor 46 Tahun 1999 dan UU RI Nomor 6 Tahun 2003. Sebelum resmi menjadi sebuah provinsi, Maluku Utara merupakan bagian dari Provinsi Maluku, yaitu Kabupaten Maluku Utara dan Kabupaten Halmahera Tengah. Pada awal pendiriannya, Provinsi Maluku Utara beribu kota di Ternate yang berlokasi di kaki Gunung Gamalama, selama 11 tahun. Tepatnya sampai dengan 4 Agustus 2010, setelah 11 tahun masa transisi dan persiapan infrastruktur, ibu kota Provinsi Maluku Utara dipindahkan ke Kota Sofifi yang terletak di Pulau Halmahera yang merupakan pulau terbesarnya.'),
(21, 'Bali', 'Sebuah provinsi di Indonesia yang ibu kota provinsinya bernama Denpasar. Bali juga merupakan salah satu pulau di Kepulauan Nusa Tenggara. Di awal kemerdekaan Indonesia, pulau ini termasuk dalam Provinsi Sunda Kecil yang beribu kota di Singaraja, dan kini terbagi menjadi 3 provinsi: Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur. Di dunia, Bali terkenal sebagai tujuan pariwisata dengan keunikan berbagai hasil seni-budayanya, khususnya bagi para wisatawan Jepang dan Australia. Bali juga dikenal dengan julukan Pulau Dewata dan Pulau Seribu Pura.'),
(22, 'Nusa Tenggara Barat(NTB)', 'Sebuah provinsi di Indonesia yang berada pada bagian barat Kepulauan Nusa Tenggara. Provinsi ini beribu kota di Mataram dan memiliki 10 Kabupaten dan Kota. Pada awal kemerdekaan Indonesia, wilayah ini termasuk dalam wilayah Provinsi Sunda Kecil yang beribu kota di Singaraja. Kemudian, wilayah Provinsi Sunda Kecil dibagi menjadi 3 provinsi: Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur. Sebagian besar dari penduduk Lombok berasal dari suku Sasak, sementara masyarakat Bima (suku Mbojo) dan Sumbawa merupakan kelompok etnis terbesar di Pulau Sumbawa. Mayoritas penduduk Nusa Tenggara Barat beragama Islam, yaitu sekitar (94%).'),
(23, 'Nusa Tenggara Timur(NTT)', 'Sebuah provinsi di Indonesia yang meliputi bagian timur Kepulauan Nusa Tenggara. Provinsi ini beribu kota di Kupang dan memiliki 22 Kabupaten/Kota. Di awal kemerdekaan Indonesia, kepulauan ini merupakan wilayah Provinsi Sunda Kecil. yang beribu kota di kota Singaraja, kini terdiri atas 3 provinsi (berturut-turut dari barat): Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur. Provinsi ini terdiri dari kurang lebih 550 pulau, tiga pulau utama di Nusa Tenggara Timur adalah Pulau Flores, Pulau Sumba dan Pulau Timor Barat (biasadipanggil Timor). Provinsi ini menempati bagian barat pulau Timor. Sementara bagian timur pulau tersebut adalah bekas provinsi Indonesia yang ke-27, yaitu Timor Timur yang merdeka menjadi negara Timor Leste pada tahun 2002.'),
(24, 'Papua', 'Provinsi terluas Indonesia yang terletak di bagian tengah Pulau Papua atau bagian paling timur wilayah Papua milik Indonesia. Belahan timurnya merupakan negara Papua Nugini. Provinsi Papua sebelumnya bernama Irian Jaya yang mencakup seluruh wilayah Papua Bagian barat. Sejak tahun 2003, dibagi menjadi dua provinsi dengan bagian timur tetap memakai nama Papua sedangkan bagian baratnya memakai nama Papua Barat. Papua memiliki luas 808.105 km persegi dan merupakan pulau terbesar kedua di dunia dan terbesar pertama di Indonesia.'),
(25, 'Papua Barat (Pabar)', 'Sebuah provinsi Indonesia yang terletak di ujung barat Pulau Papua. Ibu kotanya adalah Manokwari. Nama provinsi ini sebelumnya adalah Irian Jaya Barat yang ditetapkan dalam Undang-Undang Nomor 45 Tahun 1999. Berdasarkan Peraturan Pemerintah Nomor 24 Tahun 2007 tanggal 18 April 2007, nama provinsi ini diubah menjadi Papua Barat. Papua Barat dan Papua merupakan provinsi yang memperoleh status otonomi khusus. Provinsi Papua Barat, meski telah menjadi provinsi tersendiri, tetap mendapat perlakuan khusus sebagaimana provinsi induknya. Provinsi ini juga mempunyai KPUD sendiri dan menyelenggarakan pemilu untuk pertama kalinya pada tanggal 5 April 2004.'),
(26, 'Sulawesi Barat (Sulbar)', 'Sebuah provinsi di Indonesia yang terletak di bagian barat Sulawesi. Pembentukan Provinsi Sulawesi Barat telah diperjuangkan sejak tahun 1960. Pada masa itu pulau Sulawesi terdapat 3 (tiga) Provinsi yakni Provinsi Sulawesi Selatan, Provinsi Sulawesi Tengah dan Provinsi Sulawesi Utara. Namun, pada tahun 1963 Pemekaran Provinsi di pulau Sulawesi oleh pemerintah pusat adalah pembentukan Provinsi Sulawesi Tenggara. Usulan pembentukan Provinsi Sulawesi Barat tidak disetujui oleh Pemerintah Pusat.'),
(27, 'Sulawesi Selatan (Sulsel)', 'Sebuah provinsi di Indonesia yang terletak di bagian selatan Sulawesi. Ibu kotanya adalah Makassar.'),
(28, 'Sulawesi Tengah', 'Sebuah provinsi di bagian tengah Pulau Sulawesi, Indonesia. Ibu kota provinsi ini adalah Kota Palu. Luas wilayahnya 61.841,29 km², dan jumlah penduduknya 3.222.241 jiwa (2015). Sulawesi Tengah memiliki wilayah terluas di antara semua provinsi di Pulau Sulawesi, dan memiliki jumlah penduduk terbanyak kedua di Pulau Sulawesi setelah provinsi Sulawesi Selatan. Gubernur yang menjabat sekarang adalah Drs. H. Longki Djanggola, M.Si. bersama dengan (Alm) Sudarto untuk periode kedua.'),
(29, 'Sulawesi Tenggara', 'Sebuah provinsi di Indonesia yang terletak bagian tenggara pulau Sulawesi dengan ibu kota Kendari.'),
(30, 'Sulawesi Utara (Sulut)', 'Salah satu provinsi yang terletak di ujung utara Pulau Sulawesi dengan ibu kota terletak di kota Manado. Sulawesi Utara atau Sulut berbatasan dengan Laut Maluku dan Samudera Pasifik di sebelah timur, Laut Maluku dan Teluk Tomini di sebelah selatan, Laut Sulawesi dan provinsi Gorontalo di sebelah barat, dan provinsi Davao del Sur (Filipina) di sebelah utara.'),
(31, 'Sumatera Barat', 'Sebuah provinsi di Indonesia yang terletak di Pulau Sumatra dengan Padang sebagai ibu kotanya. Provinsi Sumatra Barat terletak sepanjang pesisir barat Sumatra bagian tengah, dataran tinggi Bukit Barisan di sebelah timur, dan sejumlah pulau di lepas pantainya seperti Kepulauan Mentawai. Dari utara ke selatan, provinsi dengan wilayah seluas 42.297,30 km² ini berbatasan dengan empat provinsi, yakni Sumatra Utara, Riau, Jambi, dan Bengkulu.'),
(32, 'Sumatera Selatan (Sumsel)', 'Provinsi di Indonesia yang terletak di bagian selatan Pulau Sumatra. Provinsi ini beribukota di Palembang. Secara geografis, Sumatra Selatan berbatasan dengan provinsi Jambi di utara, provinsi Kep. Bangka-Belitung di timur, provinsi Lampung di selatan dan Provinsi Bengkulu di barat. Provinsi ini kaya akan sumber daya alam, seperti minyak bumi, gas alam dan batu bara. Selain itu ibu kota provinsi Sumatra Selatan, Palembang, telah terkenal sejak dahulu karena menjadi pusat Kerajaan Sriwijaya.'),
(33, 'Sumatera Utara', 'Sebuah provinsi di Indonesia yang terletak di bagian utara Pulau Sumatra. Provinsi ini beribu kota di Medan.'),
(34, 'Daerah Istimewa Yogyakarta', 'Daerah Istimewa setingkat provinsi di Indonesia yang merupakan peleburan Negara Kesultanan Yogyakarta dan Negara Kadipaten Paku Alaman. Daerah Istimewa Yogyakarta terletak di bagian selatan Pulau Jawa, dan berbatasan dengan Provinsi Jawa Tengah dan Samudera Hindia.');

-- --------------------------------------------------------

--
-- Table structure for table `transactiondetails`
--

CREATE TABLE `transactiondetails` (
  `TransactionDetailId` int(11) NOT NULL,
  `TransactionId` int(10) UNSIGNED NOT NULL,
  `ProductId` int(10) UNSIGNED NOT NULL,
  `Quantity` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactiondetails`
--

INSERT INTO `transactiondetails` (`TransactionDetailId`, `TransactionId`, `ProductId`, `Quantity`, `updated_at`, `created_at`) VALUES
(12, 16, 3, 3, '2019-11-11 07:25:23', '2019-11-11 07:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `transactionheaders`
--

CREATE TABLE `transactionheaders` (
  `TransactionId` int(11) UNSIGNED NOT NULL,
  `CustomerId` int(11) UNSIGNED NOT NULL,
  `ShippingAddress` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL,
  `PaidReceipt` varchar(255) DEFAULT NULL COMMENT 'Waktu dibayar baru masukin datetimenya',
  `CourierReceiptNumber` varchar(255) DEFAULT NULL,
  `CourierOption` varchar(255) NOT NULL,
  `CourierCost` int(11) NOT NULL,
  `PaymentMethod` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `transactionheaders`
--

INSERT INTO `transactionheaders` (`TransactionId`, `CustomerId`, `ShippingAddress`, `Status`, `PaidReceipt`, `CourierReceiptNumber`, `CourierOption`, `CourierCost`, `PaymentMethod`, `updated_at`, `created_at`) VALUES
(16, 10, 'Jl. Sentosa', 0, '16.jpg', NULL, 'OlehOnline Express', 10000, 'Transfer Bank', '2019-11-11 07:29:53', '2019-11-11 07:25:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `producttypes`
--
ALTER TABLE `producttypes`
  ADD PRIMARY KEY (`ProductTypeId`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`ProvinceId`);

--
-- Indexes for table `transactiondetails`
--
ALTER TABLE `transactiondetails`
  ADD PRIMARY KEY (`TransactionDetailId`);

--
-- Indexes for table `transactionheaders`
--
ALTER TABLE `transactionheaders`
  ADD PRIMARY KEY (`TransactionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `producttypes`
--
ALTER TABLE `producttypes`
  MODIFY `ProductTypeId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `ProvinceId` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `transactiondetails`
--
ALTER TABLE `transactiondetails`
  MODIFY `TransactionDetailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transactionheaders`
--
ALTER TABLE `transactionheaders`
  MODIFY `TransactionId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
