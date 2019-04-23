-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 03:18 PM
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
(45, 16, 'Sport', 'Madrid Adalah Rumah Marcelo', '<p><strong>Madrid</strong>&nbsp;- Marcelo&nbsp;angkat bicara soal rumor yang menyebutnya bakal pindah ke Juventus. Bek asal Brasil litu menegaskan bahwa Real Madrid<a href=\"https://www.detik.com/tag/real-madrid\">&nbsp;</a>adalah rumah terbaik untuknya.<br /><br />Bek kiri Brasil itu nyaris tidak tergantikan di tim inti Los Blancos sejak direkrut dari Fluminense pada 2006. Marcelo menjadi salah satu pemain kunci Madrid saat memenangi empat titel LaLiga, dua Copa del Rey, dan empat Liga Champions.<br /><br />Namun, performa Marcelo menurun di sepanjang musim ini. Alhasil, Marcelo kalah bersaing dengan pemain akademi Sergio Reguillon sehingga baru bermain di 30 pertandingan di semua kompetisi dengan torehan tiga gol dan enam assist.<br /><br />Cedera yang berulang kali menderanya musim ini jadi alasan mengapa Marcelo sulit bersaing. Pada periode itulah masa depan Marcelo lantas dispekulasikan dengan Juve disebut-sebut bakal jadi pelabuhan terbarunya.<br /><br />Apalagi dia mengaku sudah kangen dengan&nbsp;<a href=\"https://www.detik.com/tag/cristiano-ronaldo\">Cristiano Ronaldo</a>, sahabatnya di Madrid yang lebih dulu gabung Juve musim panas lalu. Rumor yang terbilang wajar mengingat Madrid berencana merombak tim musim panas nanti setelah hancur-hancuran musim ini.<br /><br />Tapi Marcelo membantah kabar tersebut seraya menegaskan bahwa masa depannya ada bersama Madrid. Los Blancos sudah jadi rumah kedua untuknya.<br /><br />&quot;Semua orang tahu saya bahagia di sini dan saya perlihatkan itu sepanjang latihan atau saat bermain, saat mengenakan seragam ini,&quot; ujar Marcelo kepada&nbsp;<em>beIN Sports.</em><br /><br />&quot;Ada banyak gosip di luar sana soal saya. Saya sih tidak memusingkan itu. Madrid adalah rumah saya dan mereka yang mengenal saya tahu yang sebenarnya terjadi,&quot; sambungnya.</p>', '2019-04-23 10:23:44', '1556015022.jpeg', '<div><p><strong>Madrid</strong>&nbsp;- Marcelo&nbsp;angkat bicara soal rumor yang menyebutnya bakal '),
(46, 16, 'Sport', 'City, Hati-Hati dengan Amukan Man United', '<p><strong>Jakarta</strong>&nbsp;- Manchester United menuju laga derby dengan membawa luka usai dihajar Everton.&nbsp;Manchester City&nbsp;pun diperingatkan akan potensi amukan Setan Merah.</p><p><br />Akhir pekan kemarin, MU babak belur saat tandang ke markas Everton di Goodison Park. Paul Pogba dkk dipermalukan Everton dengan skor telak 0-4.<br /><br />Itu jadi kekalahan terburuk MU pada musim ini. Hasil melawan Everton juga jadi kekalahan ketiga yang diterima MU dalam lima pertandingan terakhirnya di Liga Inggris.<br />&nbsp;</p><p>Usai dihajar Everton, MU akan menjamu City di Old Trafford dalam lanjutan Liga Inggris, Kamis (25/4/2019) dini hari WIB. Eks bek Liverpool yang kini jadi pundit, Jamie Carragher, menilai laga derby tersebut akan lebih sulit bagi City. Sebab, menurutnya, MU ingin menunjukkan respons dan tak mau malu di hadapan publiknya sendiri.<br /><br />&quot;Saya kira jika United menang 4-0 di Everton, kebalikan dari apa yang terjadi, menurut saya akan berbeda,&quot; ujar Carragher di&nbsp;<em>Monday Night Football</em>&nbsp;seperti dikutip&nbsp;<em>Mirror</em>.</p><p><br />&quot;Saya kira Pep Guardiola akan berpikir &#39;saya tidak menginginkannya&#39;. Mungkin kedengarannya aneh, tapi Pep Guardiola akan berpikir ini adalah pertandingan derby, mereka kalah 4-0, reaksinya, bahkan penonton.&quot;<br /><br />&quot;Orang-orang bilang mereka ingin City juara, tentu demikian --itulah sepakbola, itu fans, tapi bahkan sebagai suporter United menonton itu kemarin, mereka tidak mau pergi ke Old Trafford di hari Rabu dan menonton timnya kalah 0-3 atau 0-4 lagi,&quot; katanya.</p>', '2019-04-23 10:25:07', '1556015107.jpeg', '<div><p><strong>Jakarta</strong>&nbsp;- Manchester United menuju laga derby dengan membawa luka usai'),
(47, 16, 'Otomotif', 'Mobil Terbaik Dunia 2019', '<p><strong>New York</strong>&nbsp;- Mobil paling keren di dunia sudah diumumkan. Juri akhirnya memilih mobil ramah lingkungan&nbsp;<a href=\"https://www.detik.com/tag/jaguar-i_pace\">Jaguar I-Pace</a>&nbsp;sebagai&nbsp;<a href=\"https://www.detik.com/tag/mobil-terbaik-dunia\">mobil terbaik dunia 2019</a>. Jaguar I-Pace menonjol dan menguasai setengah dari 6 kategori mobil terbaik dunia.<br /><br />Pada kategori paling bergengsi,&nbsp;<em>World Car of The Year</em>, Jaguar I-Pace mengalahkan mobil SUV Audi e-Tron dan Volvo S60/V60. Jaguar I-Pace juga menjadi yang terbaik pada kategori&nbsp;<em>World Green Car</em>&nbsp;dan&nbsp;<em>World Car Design of The Year.</em><br />&nbsp;</p><p>Jaguar I-Pace Foto: Dok. Car of The Year<br />Untuk kategori&nbsp;<em>World Urban Car</em>, mobil Suzuki Jimny menjadi pemenangnya mengalahkan Hyundai AH2 / Santro, dan Kia Soul. Pada kategori World Performance Car jatuh pada mobil McLaren 720S dan kategori terakhir&nbsp;<em>World Luxury Car</em>&nbsp;jatuh pada Audi A7.<br /><br />&quot;Adalah sebuah kehormatan bagi kami, Jaguar I-Pace menerima penghargaan dari para juri. Kami memulai dengan visi yang ideal menuju tujuan &#39;Destination Zero&#39; kami, yaitu zero emission, zero accidents dan zero congestion. I-Pace adalah langkah pertama kami menuju hal ini,&quot; ujar CEO Jaguar Land Rover Ralf Speth.<br /><br />Dengan tambahan predikat mobil terbaik dunia, Jaguar I-Pace menguasai berbagai penghargaan bergengsi di dunia otomotif. Beberapa bulan lalu mobil juga mendapatkan penghargaan sebagai mobil terbaik di Eropa.&nbsp;<br /><br />I-Pace adalah mobil listrik murni yang menggunakan baterai ion lithium berkapasitas 90 kWh. Mobil mampu menjelajah sejauh 469 km dengan sekali ngecas penuh. Mobil juga bisa diisi cepat sampai 80 persen selama 40 menit. Jika diisi menggunakan colokan rumah, membutuhkan waktu sekitar 10 jam, jadi harus dicas semalaman.</p>', '2019-04-23 10:28:12', '1556015292.jpg', '<div><p><strong>New York</strong>&nbsp;- Mobil paling keren di dunia sudah diumumkan. Juri akhirnya '),
(48, 16, 'Travel', 'Long Weekend Ini Road Trip di Pulau Jawa, Baca Dulu 7 Tipsnya', '<p><strong>Jakarta</strong>&nbsp;- Libur long weekend asyik juga diisi dengan road trip di Jawa bareng sahabat. Sebelum mulai road trip, simak dulu sejumlah tips berikut ini.<br /><br />Berbagai destinasi wisata menarik dapat traveler nikmati di Pulau Jawa. Traveling ke sejumlah daerah di sana naik mobil pribadi maupun sewaan bisa jadi pilihan buat liburanyang seru. Tak kalah asyik dari traveling naik pesawat yang tibanya lebih cepat.<br /><br />Road trip ini tentunya dapat menyisakan memori perjalanan yang begitu terasa bersama sahabat maupun keluarga. Jika pergi beramai-ramai, biayanya juga bisa patungan agar lebih irit. Dirangkum detikTravel, Senin (15/4/2019), berikut ini 7 tips liburan ala road trip di Pulau Jawa:<br />&nbsp;</p><p><strong>1. Cek kondisi mobil</strong><br /><br />Tak ada salahnya mengecek mobil yang akan digunakan untuk road trip ke bengkel langganan untuk dilihat kesiapannya. Penting untuk pengecekan menyeluruh. Sehingga bisa meminimalisir kemungkinan tidak menyenangkan selama perjalanan.<br /><br />Selain itu bawalah ban cadangan dan sejumlah peralatan servis standar. Contohnya saja untuk mengganti ban, jika tanpa diduga ada ban kempes atau bocor di tengah perjalanan.<br /><br /><strong>2. Bawa gadget andalan</strong><br /><br />Gadget yang dirasa penting jangan sampai ketinggalan. Mulai dari ponsel, powerbank hingga kamera. Buat yang suka foto-foto, siapkan baterai cadangan pula untuk kamera. Biar tetap lancar mengambil banyak foto dan video.<br /><br /><strong>3. Memilih jalur perjalanan</strong><br /><br />Banyak pilihan jalur yang bisa traveler lewati. Kalau mau lewat utara, pilihan jalurnya seperti Tol Trans Jawa maupun jalur Pantura. Tol Trans Jawa misalnya, jalan sepanjang 760 km ini disebut mempermudah perjalanan dan menghemat waktu buat traveler yang ingin liburan ke berbagai daerah seperti Semarang hingga Surabaya.<br /><br /><strong>4. Siapkan perlengkapan untuk menghibur selama perjalanan</strong><br /><br />Road trip identik dengan perjalanan yang jauh dan panjang. Pastikan membawa barang-barang yang seru. Mulai dari gadget, buku, hingga permainan yang bisa dimainkan di dalam mobil. Siapkan daftar musik yang akan menemani selama perjalanan. Pilihlah lagu-lagu yang tepat, yang tidak membuat ngantuk pengemudi.<br /><br /><strong>5. Cari informasi objek wisata yang mudah dicapai</strong><br /><br />Berbagai provinsi di Pulau Jawa punya aneka objek wisata yang menarik dikunjungi. Carilah terlebih dahulu mana saja objek wisata yang ingin kamu datangi. Agar lebih efisien, kunjungi saja tempat-tempat yang mudah dijangkau. Waktu tempuhnya lebih singkat sehingga makin banyak objek wisata yang sempat dikunjungi.<br /><br /><strong>6. Perhatikan level bensin</strong><br /><br />Penting untuk memperhatikan level bensin selama road trip. Tentunya tidak lucu jika sampai kehabisan bensin di perjalanan yang masih jauh dari pom bensin. Sebaiknya jangan pernah membiarkan level bensin berada di garis terakhir. Jika sudah tersisa 2 bar, langsung isi kembali sampai penuh.<br /><br /><strong>7. Istirahat yang cukup</strong><br /><br />Istirahat sangatlah penting, terutama bagi pengemudi mobil. Kalau mengantuk lebih baik berhenti untuk memejamkan mata sejenak, jangan memaksa terus menyetir. Di sepanjang jalan tol sudah banyak pilihan rest area yang nyaman dengan fasilitas toilet, masjid, musala, juga warung-warung makanan.&nbsp;<strong>(rdy/aff)</strong></p>', '2019-04-23 10:31:10', '1556015470.jpg', '<div><p><strong>Jakarta</strong>&nbsp;- Libur long weekend asyik juga diisi dengan road trip di Jawa'),
(49, 16, 'Travel', 'Dilarang \'Jomblo\' dan Hal Lain yang Harus Kamu Tahu Saat Diving', '<p><strong>Jakarta</strong>&nbsp;- Sebagai negeri kepulauan, Indonesia punya banyak surga bawah laut yang harus kamu selami. Sebelum menyelam, yuk intip beberapa hal yang harus kamu tahu.<br /><br />Diving menjadi salah satu olahraga yang masuk cabang berat. Resikonya tidak main-main, keselamatan menjadi hal yang utama saat menyelam.<br /><br />Indonesia sendiri disebut-sebut sebagai surganya penyelam. Rangkaian terumbu karang cantik membingkai negeri kita tercinta. Namun sayang, banyak karang rusak karena tingkah penyelam yang bertanggung jawab.<br />&nbsp;</p><p>Untuk itu, sebelum menyelami keindahan Indonesia ada baiknya traveler tahu beberapa hal penting saat diving. Berikut seperti dirangkum detikcom, Rabu (17/4/2019):<br /><br /><strong>1. Equalizing</strong><br /><br />Equalizing adalah hal pertama yang harus kamu lakukan saat turun ke dalam laut. Ini adalah cara untuk menyeimbangkan tekanan udara di rongga telinga. Sehingga gendang telinga tidak pecah.<br /><br />Caranya cukup mudah. Saat turun ke dasar laut, coba untuk menutup hidung dan mulut. Kemudian tekan udara seperti mau dikeluarkan lewat hidung. Jangan terlalu keras, cukup pelan saja.<br /><br />Equalizing hanya diperlukan ketika terjadi perubahan kedalaman yang signifikan. Jadi jangan terus dilakukan ya..<br /><br /><strong>2. Tenang</strong><br /><br />Hal lain yang tak kalah penting saat menyelam adalah tenang. Posisikan kedua tangan di samping tubuh atau seperti melipat tangan di ke arah depan. Sehingga posisi tubuh tetap seimbang.<br /><br />Ketenangan juga berpengaruh pada pernapasan. Kamu yang panik akan membuat oksigen dalam tank scuba jadi cepat habis. Pernapasan yang tidak teratur juga akan mempersulit bouyancy atau keseimbangan di dalam air.<br /><br />Kalau kehilangan bouyancy atau grasa grusu, bisa membuat kamu menabrak karang atau membuat ikan takut lho.</p><p><br /><strong>3. Bahasa Isyarat</strong><br /><br />Karena manusia tidak bisa bicara di dalam air, kamu harus hapal beberapa bahasa isyarat penyelam. Ada beberapa bahasa isyarat yang harus kamu hapal. Ini diperlukan saat kamu berkomunikasi dengan buddy atau penyelam lain.<br /><br />Saat merasa ada masalah atau trouble dengan peralatan selam, kamu bisa memberitahu penyelam lain dengan membuat tanda dengan tangan. Caranya posisikan telapak tangan di depan tubuh dan gerakkan ke samping beberapa kali. Selanjutnya tunjuk area yang dirasa bermasalah, misalnya kuping atau kaki kram.<br /><br />Bahasa isyarat juga digunakan untuk menujukkan rute dalam menyelam. Kalau mau naik gunakan jempol dan tunjuk ke atas, sedangkan turun kebalikannya. Kamu yang mau terus melaju ke depan bisa menggunakan salah satu tangan dan tunjuk ke depan.<br /><br />Tanda ok atau tidak ada masalah juga harus kamu pahami. Setelah masalah atau trouble selesai, traveler bisa memberi tanda ok untuk melanjutkan penyelaman. Kamu bisa memberikan tanda ok dengan membuat lingkaran dari kedua tangan di atas kepala atau cukup dengan membuat huruf O dengan jari.<br /><br />Jangan berikan tanda dengan jempol, ini memberikan kode bahwa kamu ingin naik ke permukaan. Jadi jangan salah ya..<br /><br />Bukan cuma saat masalah, penyelam juga memiliki tanda untuk berhenti. Tandanya hampir sama dengan di daratan. Kamu cukup menunjukkan telapak tangan untuk memberik kode berhenti.<br /><br /><strong>4. Buddy</strong><br /><br />Penyelam memiliki istilah you never dive alone. Ini adalah peraturan bagi penyelam untuk tidak menyelam sendiri atau harus berpasangan. Traveler bisa menyelam dengan jumlah minimal 2 orang, jadi dilarang &#39;jomblo&#39; ya...<br /><br />Buddy boleh berenang berdampingan atau beriringan. Namun jaraknya tak boleh terlalu jauh sehingga bisa saling mengawasi. Lebih banyak teman akan lebih seru.<br /><br />Buddy juga berfungsi sebagai alarm untuk saling mengingatkan jumlah tabung gas atau sekedar mengecek keadaan.<br /><br /><strong>5. Hilang</strong><br /><br />Tersesat di bawah air berbeda dengan daratan. Kamu harus memiliki perjanjian dengan buddy jika nanti kehilangan arah dan tersesat. Biasanya pencarian akan dilakukan satu menit untuk saling mencari.<br /><br />Jika tidak saling menemukan dalam waktu satu menit maka semuanya harus naik ke permukaan. Semakin lama di bawah air akan membuatmu semakin bingung dan memperparah keadaan.<br /><br /><strong>6. Lisensi</strong><br /><br />Lisensi ibarat SIM bagi pengendara motor. Sebelum menyelam, ada baiknya kamu mengikuti pelatihan dan sertifikasi selam. Sehingga traveler memiliki pengetahuan dan kemampuan dasar di dalam air.<br /><br />Jadi, selamat menyelam ya!</p>', '2019-04-23 10:32:47', '1556015567.jpeg', '<div><p><strong>Jakarta</strong>&nbsp;- Sebagai negeri kepulauan, Indonesia punya banyak surga bawah'),
(50, 15, 'Teknologi', 'Tesla Mau Bikin Saingan Uber, di Armadanya Ada \'Taksi Robot\'', '<p><strong>Jakarta</strong>&nbsp;- Elon Musk&nbsp;baru saja mengumumkan proyek barunya untuk Tesla. Melalui produsen mobil listrik besutannya itu, pria berjuluk Iron Man tersebut akan membuat layanan ride hailing&nbsp;serupa Uber, Grab, dan Go-Jek.<br /><br />Tahun depan dicanangkannya menjadi waktu peluncuran dari layanan yang belum punya nama itu. Mengingat proyek ini akan berada di bawah naungan Tesla, kendaraan yang digunakan pun juga menggunakan mobil buatannya sendiri.<br /><br />Nantinya, pemilik mobil listrik itu dapat mendaftarkan kendaraannya untuk menjadi armada layanan tersebut. Dari situ, Tesla akan mengambil komisi 25%-20% dari tiap perjalanan. Elon mengaku ia sudah berbicara mengenai rencananya ini sejak 2016.<br /><br />Tunggu, bukankah pengguna Tesla belum banyak-banyak amat? Nah, di sini menariknya. Untuk memenuhi kebutuhan, perusahaan tersebut juga akan menyediakan kendaraan otonom&nbsp;yang dinamainya robotaxi atau kira-kira &quot;taksi robot&quot;.<br /><br />&quot;Saya merasa sangat percaya diri untuk memprediksi bahwa akan ada robotaxi otonom dari Tesla tahun depan,&quot; ujarnya, sebagaimana detikINET kutip dari Tech Crunch, Selasa (23/4/2019).<br /><br />Lebih lanjut, ia juga mengatakan bahwa Tesla akan memiliki 1 juta robotaxi di jalanan tahun depan. Walau demikian, seperti biasanya, ia mengingatkan bahwa dirinya bisa jadi tidak menyelesaikannya sesuai jadwal.<br /><br />&quot;Beberapa kali saya tidak tepat waktu, tapi saya tetap menyelesaikannya,&quot; ucapnya.<br /><br />Di samping itu, pria kelahiran Pretoria, Afrika Selatan itu juga memprediksi pihaknya bisa membuat mobil tanpa stir dan pedal gas pada 2022. Sekadar mengingatkan, itu hanya tiga tahun lagi dari sekarang.<br /><br />Elon tidak memberikan informasi lebih lanjut mengenai layanannya itu, seperti daerah operasional hingga harga yang bakal dipatok. Untuk saat ini, sepertinya jangan bermimpi untuk melihat taksi Tesla hilir mudik di Indonesia.<br /><br />Menarik untuk ditunggu bagaimana kiprah Tesla dan layanan ride-hailing miliknya nanti. Terlebih, Uber juga punya unit bisnis mobil otonom yang sudah bernilai USD 7,3 miliar (Rp 102,8 triliun) setelah mendapat pendanaan sebesar USD 1 miliar (Rp 14 triliun) dari sejumlah perusahaan seperti Toyota dan SoftBank.</p>', '2019-04-23 10:59:08', '1556017148.jpeg', '<div><p><strong>Jakarta</strong>&nbsp;- Elon Musk&nbsp;baru saja mengumumkan proyek barunya untuk Te'),
(51, 15, 'Finance', 'Lahan 500 Ha Disiapkan untuk Lokasi Kawasan Industri Halal', '<p><strong>Jakarta</strong>&nbsp;- Pemerintah berencana membangun Kawasan industri di Serang, Banten. Lokasinya yang disiapkan di kawasan industri Modern Cikande Industrial Estate.<br /><br />Pihak pengelola kawasan industri Modern Cikande, PT Modern Industrial Estate akan menyiapkan lahan tersebut seluas 500 hektare (ha). Direktur Utama Modern Industrial Estat, Pascall Wilson menjelaskan lahan seluas 500 ha akan digarap dalam 3 tahap.&nbsp;<br /><br />Dia menargetkan pada 2020 kawasan industri halal ini siap digunakan.<br /><br />&quot;Nanti ada tiga fase yang pertama 150 hektare, lalu 150 hektare lagi, terakhir 200 hektare. 2020 serah terimanya, nanti baru ada investor masuk,&quot; ungkap Pascall waktu dihubungi&nbsp;<strong>detikFinance</strong>, Selasa (23/4/2019).<br /><br />Untuk mengembangkan kawasan tersebut, Pascall mengatakan pihaknya telah mengucurkan dana awal senilai Rp 500 miliar.<br /><br />&quot;investasi ya keluar dari modernland sendiri, sudah ada rp 500 m, sebagai modal awal kembangkan modern halal valley. itu tahap awal untuk bebaskan tanah dan bikin infrastrukturnya, ya standar industri,&quot; terang Pascall.<br /><br />Sebelumnya, Direktur Perwilayahan Industri Direktorat Jenderal Ketahanan Perwilayahan Akses Industri Internasional (KPAII) Kemenperin, Ignatius Warsito memproyeksikan setidaknya ada empat sektor yang kemungkinan mengisi kawasan khusus industri halal ini.<br /><br />&quot;Sudah siap, (industrinya) ya itu kan bertahap ada sektor mamin (makanan dan minuman), fashion, kosmetik terus produk farmasi. Itu bertahap sesuai dengan industri yang mau ikut, saya yakin sih mereka mau ikut banyak,&quot; kata Ignatius.</p>', '2019-04-23 11:00:33', '1556017233.jpg', '<div><p><strong>Jakarta</strong>&nbsp;- Pemerintah berencana membangun Kawasan industri di Serang, B'),
(52, 15, 'Finance', 'Demi Gratiskan PBB Guru hingga Pejuang, Anies Putar Otak', '<p><strong>Jakarta</strong>&nbsp;- Pemerintah Provinsi (Pemprov) DKI Jakarta akan memperluas kebijakan pembebasan Pajak Bumi dan Bangunan (PBB) dengan Nilai Jual Objek Pajak (NJOP) di bawah Rp 1 miliar. Perluasan kebijakan yang dimaksud ialah menggratiskan PBB untuk guru hingga para pejuang.<br /><br />Penggratisan PBB akan memberi dampak pada pendapatan daerah. Sebab itu, Gubernur DKI Jakarta Anies akan mencari sumber pendapatan dari kegiatan lain.<br /><br />&quot;Tentu ada (dampaknya), itu sebabnya kita harus genjot dari kegiatan yang memiliki nilai tambah,&quot; kata Anies di Balaikota Jakarta, Selasa (23/4/2019).<br /><br />Anies mengatakan, salah satu cara untuk menggenjot penerimaan ialah melakukan pendataan kembali objek pajak. Sehingga, dengan objek pajak yang lebih akurat maka pendapatan dari pajaknya bisa meningkat.<br /><br />&quot;Kenapa kita lakukan pendataan ulang? Karena banyak objek pajak kita yang infonya nggak lengkap. Misalnya, gedung dihitung per lantai 1.000 meter, kenyataannya bisa jadi 1.200 meter nah itu yang kita sedang lakukan dengan cara seperti itu Insya Allah pendapatan pajak jadi lebih banyak,&quot; ujar Anies.<br /><br />Anies pun meluruskan kabar jika PBB untuk NJOP sampai Rp 1 miliar dihapus. Anies mengatakan, justru saat ini sedang disiapkan aturan untuk mengakomodir kebijakan gratis PBB untuk guru hingga pejuang.&nbsp;<br />&quot;Sudah, sudah, saya sebetulnya nggak mau umumin sekarang tapi karena dibalik-balik jadi diumumin sekarang. Pergubnya sudah diproses, semula saya nggak mau umumkan Anda tahu kebiasaan saya sampai selesai baru diumumkan tapi karena diplesetkan sekarang saya lempengkan dan saya tunjukkan bahwa bukan dikurangi malah justru mau ditambah, jadi guru itu semua lah,&quot; tutupnya.</p>', '2019-04-23 11:01:39', '1556017299.jpeg', '<div><p><strong>Jakarta</strong>&nbsp;- Pemerintah Provinsi (Pemprov) DKI Jakarta akan memperluas ke'),
(53, 15, 'Health', 'Nonton Avengers: Endgame Saat Dini Hari, Gimana Caranya Tahan Kantuk?', '<p><strong>Jakarta</strong>&nbsp;- Film Avengers Endgame yang dinanti-nanti akhirnya akan rilis besok. Tak tanggung-tanggung, durasinya yang memakan hampir 3 jam 1 menit membuat beberapa bioskop membuka jadwal tayang hingga dini hari.<br /><br />Dengan suasana teater bioskop yang gelap, tubuh yang lelah (kemungkinan menonton pulang kerja atau kuliah), perut yang kenyang, dan suhu yang dingin sudah tentu kita akan rentan merasa ngantuk. Bisa-bisa di tengah film malah ketiduran. Waduh!<br /><br />Psikiater dr Andreas Kurniawan, SpKJ membagikan tips yang bisa kamu ikuti untuk mencegah rasa kantuk menyerang saat kamu melihat aksi Captain America. Tips ini ia bagikan lewat akun Twitter-nya, @ndreamon.<br /><br />Ruangan gelap seperti dalam teater bioskop bisa membuat mengantuk karena terjadinya produksi melatonin. Andreas menjelaskan dalam cuitannya, melatonin adalah hormon yang mengatur tidur dan membuat mengantuk, sehingga secara umum lebih gampang merasa ngantuk di malam hari.<br /><br />&quot;Secara jalan cerita, saya yakin Avengers: Endgame akan bisa bikin melek sepanjang waktu. Tapi kalau kita milih nonton terlalu malam, ada kemungkinan biological clock kita tidak terbiasa. Mungkin aja ngantuk loh. Beberapa teater punya jadwal jam 5 pagi yang bisa jadi alternatif,&quot; tulis pria yang berpraktek di Smart Mind Center RS Gading Pluit, Jakarta Utara ini.</p><p>Ia juga menyarankan untuk cukup minum, setidaknya 2 jam sebelum menonton film. Hal ini disebabkan dehidrasi juga bisa menyebabkan ngantuk. Dan untuk menyiasati kebelet pipis di tengah menonton, kencinglah terlebih dahulu sesaat sebelum masuk ke dalam teater, bahkan sebelum merasa kebelet sekalipun.<br /><br />&quot;Suhu dingin dalam bioskop juga bisa bikin ngantuk loh. Pada suhu dingin (sekitar di bawah 20 derajat celcius) produksi melatonin meningkat. Dan seperti pada kondisi gelap, melatonin ini membuat ngantuk. Kalau kamu gampang kedinginan, siapkan hoodie (atau gandengan) biar hangat,&quot; tutupnya.</p>', '2019-04-23 11:03:07', '1556017387.jpeg', '<div><p><strong>Jakarta</strong>&nbsp;- Film Avengers Endgame yang dinanti-nanti akhirnya akan rilis'),
(54, 15, 'Teknologi', 'Tanda Solidaritas, Karyawan Microsoft Kritik Sistem Kerja 996', '<p><strong>Jakarta</strong>&nbsp;- Karyawan Microsoft&nbsp;baru saja menulis surat tanda solidaritas dengan karyawan perusahaan teknologi di China, yang diwajibkan bekerja dengan sistem 996. Surat ini diterbitkan di platform pengembangan software Github&nbsp;dan ditandatangani oleh 30 karyawan.<br /><br />Dalam sistem kerja 996, karyawan di China harus bekerja dari pukul 9 pagi hingga 9 malam selama 6 hari. Sistem itu didukung oleh beberapa tokoh ternama industri teknologi China di antaranya pendiri Alibaba,&nbsp;Jack Ma.<br /><br />Dalam suratnya, karyawan Microsoft menyerukan perusahaan teknologi China untuk menuruti undang-undang tenaga kerja yang membatasi jam kerja karyawan sebanyak 40 jam dalam seminggu, dengan jam lembur maksimal 36 jam dalam sebulan.<br /><br /><br />&quot;Isu yang sama seperti ini menyebar di seluruh pekerjaan penuh waktu dan paruh waktu di Microsoft dan juga di industri secara keseluruhan,&quot; tulis karyawan Microsoft dalam surat mereka, seperti dikutip detikINET dari The Guardian, Selasa (23/4/2019).<br /><br />Gerakan itu kali pertama merebak setelah munculnya repository 996.ICU di Github, platform yang dimiliki oleh Microsoft. Repository ini menjadi tempat beberapa karyawan sektor teknologi di China untuk menyampaikan keluh kesah soal sistem kerja.<br /><br />Dalam repository ini, karyawan China juga menuliskan daftar berisikan sejumlah perusahaan teknologi yang menerapkan sistem ini. Browser buatan perusahaan-perusahaan tersebut sudah menutup akses terhadap materi ini. Karena popularitas repository ini meningkat dan diikuti dengan kesadaran publik yang semakin tinggi terhadap gerakan protes tersebut, karyawan Microsoft sudah meminta agar Microsoft dan Github tidak menyensor atau menghapus repository itu.<br /><br /><br />&quot;Kami mendorong Microsoft dan Github untuk membuat repository 996.ICU tanpa sensor dan tersedia untuk semua orang,&quot; tulis surat tersebut.<br /><br />&quot;Untuk karyawan teknologi lainnya dan pendukung industri, kami mendesak kalian untuk bergabung dengan kami dalam dukungan kami terhadap gerakan 996.ICU,&quot; pungkasnya.&nbsp;</p>', '2019-04-23 11:04:45', '1556017485.jpg', '<div><p><strong>Jakarta</strong>&nbsp;- Karyawan Microsoft&nbsp;baru saja menulis surat tanda solida');

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
(15, 'Zoe Rahcman', 'abc@gmail.com', '123', '0000-00-00', 'Pria', 'INDONESIA', 'Aceh Barat', '82371724600', '', '', 0, '', '', ''),
(16, 'Silvi Nur Baidah', '123@gmail.com', '123', '0000-00-00', 'Wanita', 'INDONESIA', 'Ambon', '82378239232', '', '', 0, '', '', '');

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
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
