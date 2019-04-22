-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 11:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detik`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `ringkasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `kategori`, `judul`, `isi`, `tgl_buat`, `image`, `ringkasan`) VALUES
(26, 11, 'Teknologi', 'Huawei P30 Pro Disiksa, Bagaimana Daya Tahannya?', '<p><strong>Jakarta</strong>&nbsp;- Sebagai jagoan anyar&nbsp;<a href=\"https://www.detik.com/tag/huawei-p30-pro\">Huawei, P30 Pro</a>&nbsp;banyak disanjung karena kemampuan fotografinya. Tapi bagaimana dengan daya tahannya? Beragam siksaan pun dijalani P30 Pro.<br /><br />Zack dari JerryRigEverything, kanal YouTube yang memang kondang dengan penyiksaan-penyiksaan lain terhadap berbagai smartphone, menjadi sosok penguji daya tahan P30 Pro varian &quot;Breathing Crystal&quot; ini.<br /><br />Siksaan pertama terhadap P30 Pro ini adalah lewat goresan benda tajam berupa cutter. Goresan baru di layar bagian depan baru nyata di intentistas level enam, sebagaimana halnya pada flagship lain. Bagian kamera belakang tak ketinggalan ikut digores pula.&nbsp;<br /><br />Siksaan secara khusus juga diarahkan ke area tempat pemindai sidik jari dalam layar P30 Pro. Goresan-goresan itu rupanya tidak mempengaruhi kinerja sensor sidik jari tersebut.<br /><br />Seperti biasa, bagian layar juga mendapat siksaan lain berupa paparan langsung dengan api dari sebuah pemantik. Dan tentu saja ada pula tes membengkokkan smartphone dengan tangan kosong, yang dilewati P30 Pro dengan baik berkat curved glass yang diusungnya.</p>', '2019-04-21 08:04:21', 'adsa.jpeg', '<div><p><strong>Jakarta</strong>&nbsp;- Sebag...</div>'),
(27, 13, 'Teknologi', 'Samsung Galaxy S10 Pakai Kemasan Bebas Plastik', '<p>Samsung menepati janjinya dalam membuat kemasan bebas plastik untuk produk-produk anyarnya. Sebagai permulaan, perusahaan asal Korea Selatan itu telah menerapkannya pada Galaxy S10.<br /><br />Melalui situs resminya, Samsung mengatakan bahwa pihaknya telah mendesain boks Galaxy S10 sehingga menjadi minimalis. Salah satunya adalah dengan menghilangkan plastik pembungkus.<br /><br />Tak cuma itu, kemasan smartphone tersebut juga terbuat dari bahan kertas daur ulang. Sedangkan bahan tintanya terbuat dari kacang kedelai sehingga membuat kemasan lebih mudah untuk didaur ulang.<br /><br />Lalu, mereka juga membuat charger ponsel tersebut memiliki warna matte. Hal tersebut lantaran warna glossy membutuhkan film plastik tambahan.<br /><br />&quot;Dari lini Galaxy S10, kami akan sangat berkomitmen untuk mengembangkan kemasan yang terbuat dari bahan ramah lingkungan,&quot; ujar Ilseob Baek, Vice President of Reliability Group, Mobile Communications Samsung Electronics dalam keterangannya.<br /><br />&quot;Kami akan terus mendukung usaha global untuk membuat planet kita berkelanjutan dengan memanfaatkan material ramah lingkungan di lebih banyak produk,&quot; tuturnya menambahkan.<br /><br />Membuat kemasan ramah lingkungan sejatinya bukan barang baru bagi perusahaan pimpinan DJ Koh itu. Mereka sudah melakukannya sejak 2013 lalu. Saat itu, Samsung memperkenalkan kemasan daur ulang untuk pertama kalinya</p>', '2019-04-21 09:37:21', 'ds.jpeg', '0'),
(28, 13, 'Sepakbola', 'sasa', '<p>sasa</p>', '2019-04-21 09:29:10', 'visual.jpg', '<div><p>sasa</p>...</div>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kota_asal` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `tentang` text NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `tgl_lahir`, `jns_kelamin`, `negara`, `kota_asal`, `telp`, `tentang`, `alamat`, `kode_pos`, `provinsi`, `website`, `status`) VALUES
(11, 'Nofal aja', 'ikancupang1221@gmail.com', '123', '0000-00-00', 'Pria', 'Indonesia', 'Jakarta', '654646645646456', 'Apa aja boleh', 'Pajar bulan', 0, 'Jakarta', 'asda', 'Lajang'),
(13, 'Hashirama', 'a@gmail.com', '111', '0000-00-00', 'Pria', 'Indonesia', 'Jakarta', '82371724600', '', '', 0, 'Jakarta', 'www.google.com', 'Lajang'),
(14, 'Fhano Dra', 'fhano@gmail.com', '123', '0000-00-00', 'Pria', 'INDONESIA', 'Banteang', '82371724600', '', '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `FK_userberita` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `FK_userberita` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
