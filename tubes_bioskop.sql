-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 02:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `genre` varchar(128) NOT NULL,
  `durasi` varchar(64) NOT NULL,
  `sinopsis` varchar(1000) DEFAULT NULL,
  `rilis` year(4) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `slug`, `genre`, `durasi`, `sinopsis`, `rilis`, `gambar`, `rating`) VALUES
(1, 'PIKACHU', 'pikachu', 'Misteri Fantasi', '104 menit', 'Ryme City, kota masa depan yang luas dan modern adalah salah satu kota unik yang pernah ada di dunia. Manusia hidup berdampingan dengan berbagai macam jenis Pokemon.\r\nNamun, hal itu tidak terjadi pada Tim Goodman (Justice Smith). Ia hidup tak berdampingan dengan Pokemon. Tim lebih banyak menghabiskan waktu untuk memecahkan misteri hilangnya sang Ayah. Namun, entah dari mana muncul satu Pokemon bernama Pikachu di apartemen Tim.', 2019, 'pikacu.jpg', '7.8'),
(2, 'DUNE', 'dune', 'Fiksi Ilmiah / Petualangan', '137 menit', 'Ada sebuah planet yang dikenal sebagai wilayah paling berbahaya dengan gurun yang gersang, yakni Planet Arrakis. Arrakis menjadi satu-satunya tempat untuk memproduksi Melange. Karena, bahan-bahan untuk membuatnya hanya ada di Arrakis.\r\nMelange adalah obat langka yang bisa memperpanjang usia seseorang dan meningkatkan kemampuan.Duke Leto Atreides (Oscar Isaac) ditugaskan untuk mengamankan lokasi penyimpanan Melange dan mengawasi proses produksinya.Leto berpikir bahwa tugas ini hanya jadi jebakan untuk dirinya. Tetapi, ia juga tidak mungkin menolak tugas tersebut.\r\n', 2018, 'dune.jpg', '5.8'),
(3, 'BLACK WIDOW', 'black-widow', 'Laga / Petualangan', '102 menit', 'Saat lahir, Black Widow diberikan kepada KGB yang membersiapkannya menjadi mata-mata utamanya.Ketika USSR bubar, pemerintah berusaha membunuhnya ketika aksi bergerak ke New York.Apalagi diketahui bahwa Black Widow adalah agen lepas.Film Black Widow ini akan menceritakan tentang Natasha Romanoff hidup di Amerika Serikat 15 tahun setelah jatuhnya Uni Soviet. ', 2018, 'blackwindow.jpg', '9.8'),
(4, 'DIGNITATE', 'dignitate', 'Drama/Romantis', '109 menit', 'ilm \'Dignitate\' berkisah tentang Alfi, seorang siswa di SMA Sanjaya. Dia terkenal sarkas, dingin, galak, bahkan sampai mendapat julukan GGS alias ganteng-ganteng seram.\r\nWalau terkenal bukan sosok cowok menyenangkan namun tidak membuat siswi-siswi di sana berhenti menyukainya. Sayangnya Alfi hanya fokus pada prestasinya saja. Sampai datang seorang siswi baru bernama Alana yang periang, baik, dan polos di sekolah Alfi.', 2020, 'dignitate.jpg', '7.0'),
(5, 'SONIC THE HEDGEHOG', 'sonic-the-hedgehog', 'Family / Comedy', '100 menit', 'Sonic merupakan landak biru luar angkasa yang bisa berlari dengan kecepatan supersonik. Sonic menyadari dirinya dicari suku Echidnas untuk kepentingan kekuasaan.\r\nSalah satu pengawal, sang burung hantu Longclaw, memberinya sekantong cincin yang bisa membuka portal ke planet lain. Cincin itu digunakan Sonic untuk pergi ke Bumi dan menyelamatkan dari Echidnas. Selama di Bumi, tepatnya di Green Hills, Sonic menikmati kehidupan rahasianya.\r\n', 2019, 'sonic.jpg', '6.8');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'pandi', 'pandi@gmail.com', '$2y$10$xwzjs9voeJl/NXBFDMMNSu87jS7.4FViP/srZbPQJNk3YIJ41B5MK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
