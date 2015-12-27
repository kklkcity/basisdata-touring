-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2015 at 04:30 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `ID` int(11) NOT NULL,
  `id_info` varchar(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `informasi` text NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `id_info`, `id_kategori`, `nama`, `informasi`, `alamat`) VALUES
(1, 'i001', 'k002', 'Ayam Goreng Mbok Berek Kalasan', 'Adalah Ronopawiro atau yang lebih dikenal dengan nama Djakiman, menyunting Nini Ronodikromo yang mempunyai panggilan kecil Nyi Rame. tinggal di Desa Candisari, Yogyakarta. Dari hasil perkawinannya, Nyi rame mempunyai anak putra-putri yaitu Samidjo Mangundimedjo, Saminten Pawirosudarsono, Sukinah Mulyodimejo, Tumirah Martohanggono, Saminun dan Suwarto.Sejarah Tangisan Seorang Anak  Diantara ke enam putra-putri Nyi Rame, ada salah satu diantaranya sangat rewel, suka menangis menjerit-jerit, yang istilah jawanya disebut berek-berek. Tangisan anak kecil yang berek-berek tersebut kelak bukan hanya akan merubah nama panggilan istri Ronopawiro dari Nyi Rame menjadi Mbok Berek, melainkan juga dapat mengubah nasib para keturunan Mbok Berek.        Tepatnya tidak diketahui, kapan Nyi Rame menyandang nama Mbok Berek. dan entah karena siapa pula yang memulai panggilan sehari-hari Nyi Rame Menjadi Mbok Berek. Yang pasti dengan sebutan barunya itu, Nyi Rame sangat berlapang dada juga tak menjadikan berang sang suami, Ronopawiro. justru sebalinya, panggilan Mbok Berek untuk Nyi Rame yang mempunyai nama asli Nini Ronodikromo ini sangat disukainya. Karena pada kenyataannya memang Nyi Rame adalah seorang ibu yang mempunyai anak yang suka menangis berek-berek. Akhirnya Nyi Rame yang mempunyai nama asli Nini Ronodikromo menyandang nama baru yaitu Mbok Berek. Sebuah nama julukan untuknya karena anaknya yang sering menangis berek-berek. Ternyata julukan barunya tersebut memberi kesan sangat familiar dan enak didengar. Sangat membantu Mbok Berek dalam berjualan ayam goreng. bahkan boleh dibilang "berek" yang berasal dari"tangisan anak" itu merupakan awal tangis bahagia bagi Mbok Berek. karena nama yang enak didengar tersebut kian waktu kian populer di setiap telinga pecinta ayam goreng. Bahkan kelak nama Mbok Berek akan menjadi sebuah inspirasi penerusnya untuk tetap hidup dengan menjadikan nama Mbok berek sebagai trade mark sebuah restoran ayam goreng khas Yogyakarta. Saya Mulai Usaha dari Nol  Waktu remaja saya memang mendalami pendidikan keterampilan. Saya ikut kursus kecantikan dan menjahit. Dirumah saya membuka salon. Saya juga memberikan les kepada orang lain. Waktu remaja sering membantu dan memperhatikan meracik bumbu ayam goreng di Yogyakarya. Saya juga ikut mempraktekannya. Apa saja jenis pekerjaan saya kerjakan.   Saya tak pernah memilih pekerjaan. Saya ingin menguasai semua bidang. Saya senang bekerja keras. Setelah menikah saya berada di Jakarta, tapi menganggur.    Suami saya sarjana hukum bekerja di ekspedisi muatan kapal laut. Perekonomian kami pas-pasan. Gaji bapak cukup untuk satu minggu saja. Gajinya hanya Rp. 15.000 per bulan, cukup untuk hidup senin-kamis.   Kami tinggal dirumah saudara saya. Karena tidak cukup uang belanja dari suami, saya berusaha bekerja untuk menambah pendapatan keluarga. Bermacam barang dagangan saya usahakan.    Saya pernah mengkreditkan bahan batik, baju, perabotan rumah tangga dan lain-lain. Uang untuk membeli barang-barang itu saya dapatkan dari gaji suami. Setiap awal bulan saya sudah belanja barang dagangan. Setelah itu saya tagih. Usaha itu tidak berjalan lancar, setiap saya tagih, orang tidak selalu membayar. Suatu ketika saya tidak punya uang sama sekali untuk makan. Terpaksa saya menjual beras ke tetangga. Saya coba untuk berjualan ayam goreng Mbok Berek. Saya cicitnya. Orang-orang tidak percaya dan ada juga yang percaya. Dari situ saya coba untuk berjualan ayam goreng dipasar cikini. Tempatnya kecil. saya tak punya modal. Saya mengutang dengan pedagang ayam.   Dan bumbu minta ke tetangga. Setiap hari saya hanya menggoreng tiga ekor ayam. Kadang laku kadang tidak. Kalau tidak laku saya bagikan kepada teman-teman dipasar,    karena saya sudah dekat dengan mereka. Begitu sebaliknya, mereka juga memberikan saya sayur-sayuran atau tempe.    karena sudah baik dengan sesama pedagang dipasar, maka kami saling memberi apa yang ada. Bila suami saya menanyakan tentang barang dagangan. saya katakan saja laku semua, padahal tidak. sebab kalau diberitahu bahwa ayam yang tak laku itu diberikan kepada orang lain,   maka dia akan tersinggung, karena ayam itu ngutang. Saya berjualan dengan modal kejujuran. Saya membayar hutang yang lama dan mengutang yang baru lagi. Tapi kalau saya tidak punya uang saya katakan kepada pedagang itu tentang dagangan saya yang tidak laku. Tapi saya perlu lagi tambahan. Saya berprinsip harus jujur. Tak Pernah Jera  Sedikit demi sedikit saya punya modal dan membuka usaha ditempat lain. Semuanya saya kerjakan sendiri. Saya tak pernah jera bekerja, meski usaha jatuh bangun. Pernah membuka rumah makan di kawasan Jl. Pegangsaan Timur, terus di Jl. Tanjung karang. Tapi ditutup kena gusur. Pada 1978 saya membuka lagi di Jl. Prof. Supomo yang dikontrak selama lima tahun. Disini usaha kami berkembang dan membuka lagi di Jl. Prof. Supomo No. 10, 14 dan 16 yang kini menjadi kantor pusat, sekaligus rumah saya.', 'Jl. Solo - Yogya Km.14,5, Bendan, Tirtamartan, Kalasan, Tirto Martani, Kec. Sleman, Sleman, Daerah Istimewa Yogyakarta 55571'),
(2, 'i002', 'k002', 'Gudeg Bu Yati', 'Gudeg Bu Yati ini menjual gudeg khas solo dengan beragam menu tambahan, seperti telur, ati ampela, tahu, juga menu jerohan. Jangan lupa untuk menambahkan sambal di menu gudeg pilihan anda.\nGudeg Bu Yati merupakan salah satu pilihan menu kuliner yang bisa anda kunjungi saat berada di kota Solo. Gudeg Bu Yati berada di Keprabon, tepatnya di sebelat barat kantor Suara merdeka.\n', 'Jl. Dr. Radjiman, Laweyan, Kota Surakarta, Jawa Tengah 57148'),
(3, 'i003', 'k002', 'Caesar Lounge & Cafe', 'Amplaz atau Ambarukmo Plaza menjadi satu pusat perbelanjaan yang luar biasa megah dan senantiasa ramai dikunjungi. Dengan beragam gerai yang ada membuat Ambarukmo Plaza menjadi Mall terbesar di Yogyakarta. Salah satu yang mengisi gerai adalah Caesar Lounge anda Café Yogyakarta, yang mempunyai konsep One stop Entertainment mengusung hiburan yang menyenangkan bagi warga yogya khususnya dan pengunjung pada umumnya. Plaza Ambarukmo sendiri berada tepat di sebelah pesanggrahan Ambarukmo yang menjadi bagian dari Ambarukmo Hotel yang sekarang sudah berubah nama setelah renovasi dengan nama Royal Ambarukmo Hotel. Loaksi tepatnya berada di lantai 3 Ambarukmo Plaza, Jl. Laksda Adisucipto Km. 6, Caturtunggal, Sleman, Yogyakarta Keberadaan Caesar Lounge and Café menambah kemeriahan di Ambarukmo Plaza,  dengan konsep yang diusung tersebut dapat menjadikan jawaban kebutuhan hiburan Jogja yang semakin beragam. Pengunjungnya pun beragam dari kalangan middle up keatas dan sebagian ABG (Anak Baru Gede). Untuk tempat bertemu relasi atau sekedar bersantai mengilangkan ketegangan setelah seharian bekerja tempat in sangatlah pas bagi para eksekutif muda. Keberadaan Caesar Lounge and café ini bisa anda nikmati mulai jam 11.00 WIB hingga jam 03.00 WIB, dengan pembagian jam dari pukul 11.00 WIB sampai dengan pukul 21.00 WIB tempat ini sangat cocok sebagai lounge bagi anda semua yang ingin sejenak bersantai dari kesibukan seharian. Dan ketika menginjak pukul 22.00 WIB tempat ini akan berubah menjadi satu tempat yang penuh hiasan warna biru pada setiap sudutnya yakni sebuah café yang siap menyajikan suatu hiburan malam di Yogyakarta hingga pukul 03.00 dini hari. Berbagai fasilitas dan anda nikmati ditempat ini salah satunya free hotspot yang saat ini sudah menjadi kebutuhan terlebih anda bisa mendapatkan membership. Dengan desain futuristic Caesar lounge anda café ini memberikan anda sesuatu yang beda dengan tempat tempat hiburan yang lain di kota Yogyakarta ini', 'Jl. Laksda Adi Sucipto Catur Tunggal Depok Sleman Daerah Istimewa Yogyakarta, Catur Tunggal, Kec. Depok, Sleman 55281'),
(4, 'i004', 'k002', 'Ayam Goreng Candisari Kalasan', 'Ayam goreng candisari dan kelopo gebyar merupakan rumah makan yang menyajikan menu olahan ayam goreng serta ikan, udang dan lobster air tawar segar.       Pada awalnya rumah makan kami bernama ayam goreng candisari dengan menu yang kami sajikan saat itu hanya menu ayam goreng candisari. Akan tetapi dengan bertambah majunya rumah makan kami dan banyaknya permintaan kemudian kami tambahkan menu ikan, udang dan lobster air tawar. Dengan bertambahnya menu baru maka rumah makan kami berubah nama menjadi ayam goreng candisari dan kelopo gebyar.       Candisari merupakan satu dari beberapa situs candi peninggalan sejarah bangsa Indonesia yang terdapat di Yogyakarta. Dan lokasi rumah makan kami berada dekat dengan candisari sehingga rumah makan kami banyak dikunjungi oleh para wisatawan yang berkunjung ke situs candisari. Ada yang mengatakan bahwa akan terasa kurang lengkap jika berwisata ke candisari tanpa mampir makan di rumah makan ayam goreng candisari dan kelopo gebyar.', 'JL. Solo Km. 14, Kalasan, Sleman, Taman Martani, Kalasan, Sleman, Daerah Istimewa Yogyakarta 55571'),
(5, 'i005', 'k002', 'Soto Ayam MIROSO', 'Kata Miroso kalau diartikan dalam khazanah jawa bermakna masakan yang benar-benar  nendang dan membekas rasanya. Sabagai tanda-tanda warung yang menyuguhkan hidangan miroso, sekali mencoba, pelanggan akan selalu mengingat rasa masakanya dan selalu ingin menikmatinya lagi. Soto Ayam Miroso memberikan bukti jumbuhing ngelmu lan laku (bertemunya kearifan dengan cita rasa). Nama warung soto ayam ini sungguh sesuai dengan hidangan yang disajikan. warung soto ayam ini benar-benar menghidangkan cita rasa soto yang berbeda. Rasanya Gurih, lembut, enteng tidak mboseni(membosankan). Kuahnya kuning dan bening kaldunya terasa betul-betul ayam kanpung. Maka dengan rasa yang begitu menggoda, para tamu dari paketwisatajogja75.com sering diantarkan ke warung soto ayam tersebut untuk menikmati hidangan soto yang begitu mengoyang lidah tersebut. Warung Soto ini sekarang dikelola oleh Pak Banuwirasan generasi ketiga Soto Miroso,sejak tahun 1970-an berlokasi di Jalan Laksda Adisucipto No. 168 A, tepat di timur Jembatan Gajah Wong atau Museum Affandi.  Interior dan eksterionya khas bangunan rumah modern pada tahun 1970-an. Di dinidng  bangunan warung ini pun banyak terpasang foto-foto para pejabat pegawai tinggi Indonesia. Salah satu pelanggan setia Soto Ayam Miroso adalah keluarga Mantan Presiden Susilo Bambang Yudoyono (SBY). Jauh sebelum menjabat Presiden, pada tahun 1990-an SBY pernah menjadi komandan Korem Jogja. Ketika menjadi Presiden pun SBY gemar sekali istirahat di Prambanan Jogja, tentu tidak  ketinggalan menikmati Soto Miroso. Bahkan, ketika pada acara kenegaraan di Istana Negara, SBY paling Getol  momboyong lapak Soto Miroso untuk dihidangkan buat para tamu-tamu Istana Negara. Tak jarang pula warung soto ini sering dikunjungi bagi para pengunjung wisata kota Jogja. Meskipun Soto Ayam Miroso ini sangat terkenal, namun harga yang disajikan sangat bersahabat, tidak  menguras kantong yang dalam. Bahkan paket yang ditawarkan sangat menarik untuk dicoba.', ' Jl. Laksda Adisucipto No.168A, Kec. Depok, Sleman, Daerah Istimewa Yogyakarta 55281'),
(6, 'i006', 'k002', 'Sate & Tongseng Mbah Darmo', 'Sebuah tempat makan berbahan dasar kambing muda yang kami rekomendasikan untuk Anda, keluarga atau rombongan untuk mencobanya. Bukan hanya karena cita rasa nikmat dari masakan yang telah kami coba namun juga harga yang cukup bersahabat. Untuk setiap porsi lengkap dengan nasi dan minum rata-rata harga yang diberikan adalah Rp20.000. Pengunjung datang dan pergi dari warung satu ini sepanjang kami berada di sana. Ini yang kemudian membuat kami tahu lebih banyak tentang warung “mbah Darmo” ini. Dan kami pun mendapat kesempatan untuk banyak berbincang dengan sang pemilik warung “mbak minuk” yang ternyata adalah anak dari mbah Darmo. Mbak minuk pun mengisahkan bagaimana memang semenjak dulu masakan dengan resep-resep tertentu ini dimiliki oleh mbah Darmo dalam meramu masakannya. Kisaran tahun 1956 mbah Darmo telah memulai menjajakan dagangannya dengan masih memikulnya. Bahan baku yang digunakan pun tidaklah sembarangan lantaran selalu memilih kambing dengan usia maksimal 5 bulan (malibu) dengan asumsi bahwa dalam usia kambing yang seperti ini masih sangat sehat untuk dikonsumsi. Bisa dibayangkan tentunya bagaiman usaha ini telah lama bertahan.', ''),
(7, 'i008', 'k001', 'SPBU Bandara Adisucipto', '', 'Jl. Laksda Adisucipto Km. 6, Kec. Sleman, Daerah Istimewa Yogyakarta 55282, Indonesia'),
(8, 'i009', 'k001', 'SPBU Sawit, Boyolali', '', 'JL.Raya Solo-Yogyakarta km No.15, Sawit, Kabupaten Boyolali, Jawa Tengah 57557, Indonesia'),
(9, 'i010', 'k001', 'SPBU Karang Duren, Salakan', '', 'Jl. Pandawa Puncangan Kartosuro Sidoarjo, Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
('k001', 'SPBU'),
('k002', 'Rumah Makan'),
('k003', 'Tempat Ibadah'),
('k004', 'Rest Area');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` varchar(10) NOT NULL,
  `alamat_lokasi` varchar(100) NOT NULL,
  `nama_lokasi` varchar(40) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `id_info` varchar(10) NOT NULL,
  `titik` multilinestring NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id_rute` varchar(10) NOT NULL,
  `recommended` polygon NOT NULL,
  `alternative` multilinestring NOT NULL,
  `id_lokasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`),
  ADD UNIQUE KEY `id_info` (`id_info`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kategori_2` (`id_kategori`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD UNIQUE KEY `id_lokasi` (`id_lokasi`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`),
  ADD UNIQUE KEY `id_info` (`id_info`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD UNIQUE KEY `id_lokasi` (`id_lokasi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`id_info`) REFERENCES `info` (`id_info`),
  ADD CONSTRAINT `lokasi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
