-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Jan 2020 pada 11.26
-- Versi server: 10.3.21-MariaDB-cll-lve
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikmpurwo_epi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `gambar`) VALUES
(13, 'Tips Mengelola IKM', '<p>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM)Manajemen keuangan merupakan salah satu aspek paling penting bagi setiap pelaku bisnis, tak terkecuali pemilik Usaha Kecil dan Menengah (UKM) yang baru saja merintis dan ingin mengembangkan bisnisnya. Pemilik UKM perlu strategi yang tepat dalam mengelola keuangan bisnisnya, sebab tanpa pengelolaan yang benar, maka UKM dapat mengalami kerugian dan lebih parahnya, kebangkrutan. Kunci kesuksesan dalam bisnis bukan hanya pada cara menghasilkan dan melipatgandakan keuntungannya, tetapi juga bagaimana perusahaan dapat menggunakan atau mengendalikan uang yang dihasilkan.<br><br>Jika Anda masih berpikir bahwa pengelolaan keuangan akan berjalan secara otomatis berbarengan dengan keuntungan yang Anda raih dalam bisnis Anda, sebaiknya Anda ubah pemikiran tersebut dan mulai menaruh perhatian lebih pada manajemen keuangan Anda sekarang. Nah, jika Anda sedang mencari strategi yang tepat untuk mengatur keuangan UKM Anda, maka Anda membaca artikel yang tepat. Berikut ini adalah beberapa cara yang bisa Anda lakukan dalam mengelola keuangan UKM Anda.<br><br>Pisahkan Uang Pribadi dari Uang Bisnis<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: strategi5.com<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: strategi5.com<br>Jangan berpikir bahwa karena bisnis Anda masih kecil, jadi tidak masalah bila Anda menggabungkan uang pribadi dengan uang bisnis Anda. Jika hal ini dilakukan, maka Anda akan mengalami kesulitan dalam membedakan pengeluaran pribadi dengan pengeluaran UKM Anda. Bahkan, bukan hal yang mustahil bila uang bisnis Anda malah terpakai untuk kebutuhan pribadi Anda.<br>Oleh karena itu, sebaiknya Anda menyimpan uang pribadi dan uang bisnis Anda secara terpisah. Buka rekening yang berbeda untuk menyimpan uang pribadi dan uang penghasilan UKM Anda di bank, bahkan kalau perlu buka kedua rekening tersebut di bank yang berbeda pula, agar memudahkan Anda menjalani komitmen pemisahan uang ini secara disiplin.<br><br>Atur Anggaran Pengeluaran dengan Bijak<br><br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: https://www.pymnts.com<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: https://www.pymnts.com<br>Anda perlu membuat perencanaan untuk penggunaan uang bisnis Anda, bahkan di saat Anda merasa memiliki banyak modal. Tanpa perencanaan yang baik, Anda akan kesulitan mengatur pengeluaran Anda sehingga ini bisa berdampak pada kelangsungan bisnis Anda. Sesuaikan target penjualan dan pemasukan kas dengan pengeluaran Anda. Hindari menghambur-hamburkan uang untuk hal-hal yang tidak akan meningkatkan pendapatan atau menguntungkan Anda.<br>Buat Catatan Keuangan<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: http://www.modulkuche.me<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: http://www.modulkuche.me<br>Anda tidak akan sanggup mengingat seluruh transaksi bisnis Anda. Oleh karena itu, Anda perlu membuat catatan lengkap mengenai keuangan bisnis Anda. Catatan keuangan ini disebut juga dengan buku kas. Catat setiap pemasukan dan pengeluaran yang terjadi dan cocokkan saldo dengan jumlah uang yang Anda catat setiap harinya untuk memastikan bahwa tidak ada uang yang terselip. Buku kas ini juga bisa menjadi acuan bila ada suatu kesalahan dalam transaksi bisnis Anda.<br><br>Catat juga setiap hutang dan biaya yang dikeluarkan untuk perawatan aset-aset bisnis Anda. Jika penggunaan kertas tidak cukup efisien dan aman bagi Anda, sebaiknya gunakanlah sistem komputer untuk mencatat pergerakan uang bisnis Anda. Menggunakan software manajemen keuangan atau akuntansi akan sangat membantu Anda menyimpan dan mengelola seluruh informasi mengenai keuangan Anda.<br><br>Kontrol Arus Kas<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: https://www.rezzaid.com<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: https://www.rezzaid.com<br>Agar perputaran kas UKM Anda lancar, maka Anda perlu memerhatikan pengelolaan utang dan persediaan produk yang Anda jual. Utang yang belum terbayar dan persediaan produk yang menumpuk akan membuat perputaran kas Anda terhambat. Oleh karena itu, Anda harus pandai mengontrol pengeluaran Anda. Jika pendapatan Anda menurun, maka Anda harus mengurangi pengeluaran Anda untuk menanggulanginya. Pastikan juga tidak ada penumpukan stok barang di gudang Anda dengan mengontrol pembelian barang dan menjalankan strategi penjualan yang membuat produk Anda menjadi laku.<br>Gunakan Keuntungan dengan Sebaik Mungkin<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: https://www.huffingtonpost.com.au<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: https://www.huffingtonpost.com.au<br>Anda tentu saja boleh menikmati keuntungan yang Anda raih. Namun, sebaiknya Anda menggunakannya secara bijaksana, tentunya dengan tidak menghamburkannya. Justru Anda perlu menyisakan sebagian keuntungan Anda untuk mengembangkan usaha Anda. Anda bisa mencoba berinvestasi atau menanam modal di perusahaan yang lebih besar, menggunakan sebagian keuntungan Anda untuk berinovasi pada produk-produk Anda, dan lain-lain. Lakukan hal-hal yang mendukung perkembangan bisnis Anda sehingga bisnis Anda bisa survive atau bahkan menang di tengah persaingan pasar global.<br><br>Siapkan Dana Cadangan<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: republika.co.id<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: republika.co.id<br>Tentu saja Anda harus berpikir positif mengenai masa depan UKM Anda. Namun, Anda juga perlu melakukan antisipasi untuk hal-hal yang tidak diinginkan yang mungkin bisa terjadi pada bisnis Anda. Salah satunya adalah dengan menyiapkan dana cadangan. Dana cadangan ini hanya boleh digunakan dalam keadaan darurat, misalnya ketika terjadi bencana yang mengakibatkan kerusakan pada properti kantor atau ketika omzet bisnis Anda sedang menurun.<br>Gunakan Solusi Otomatis untuk Mengelola Keuangan<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: https://opaqnetworks.com<br>7 Tips Mengelola Keuangan bagi Usaha Kecil dan Menengah (UKM). Sumber: https://opaqnetworks.com<br>Di era teknologi seperti saat ini, sudah bukan waktunya pekerjaan kantor dilakukan secara manual, apalagi pekerjaan yang beresiko tinggi seperti mengelola keuangan. Kesalahan pada manajemen akuntansi Anda bisa menghambat kelancaran bisnis Anda. Oleh karena itu, sebaiknya Anda mulai menerapkan bantuan solusi otomatis dalam manajemen akuntansi UKM Anda. Dengan bantuan software manajemen akuntansi, Anda tidak perlu lagi mencatat pengeluaran dan pemasukan Anda secara manual, karena semuanya dicatat secara otomatis dan akurat melalui sistem. Anda juga bisa membuat laporan keuangan lengkap yang menunjukkan laba dan rugi Anda, utang, transaksi dengan kilen, pajak, dan lainnya secara real-time.</p>', 'kelolaikm.jpg'),
(15, 'Industri Kecil dan Menengah jadi Tulang Punggung Ekonomi Nasional', '<p>Industri kecil dan menengah (IKM) berperan menjadi tulang punggung terhadap perekonomian nasional.<br><br>Sebab, IKM sebagai sektor mayoritas dari populasi industri di Indonesia, aktivitasnya dinilai membawa efek berganda yang positif untuk mendorong pemerataan kesejahteraan masyarakat.<br><br>“IKM konsisten sebagai penopang perekonomian Indonesia, bahkan menjadi salah satu sektor industri yang mampu berdiri tegak pada saat krisis moneter global,” kata Direktur Jenderal IKM Kemenperin Gati Wibawaningsih dalam siaran persnya, kemarin.<br>Berdasarkan catatan Kemenperin, industri kecil pada tahun 2014 sebanyak 3,52 juta unit usaha, naik menjadi 4,49 juta unit usaha di semester I tahun 2018.<br><br>Artinya, ada penambahan hingga 970 ribu industri kecil selama empat tahun belakangan ini.<br><br><br></p>', 'ikm.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `gambar`) VALUES
(5, 'Launching Si-EPI Online', 'Tahapan pembangunan SI-EPI\r\n\r\n1.	Perencanaan\r\nDalam tahap ini dilakukan diskusi dan konsultasi guna mendapatkan data dengan para pelaku IKM mengenai fitur sistem yang akan dibangun. Dari hasil diskusi dan konsultasi di tahap ini diperoleh kesimpulan bahwa sistem akan dibangun berbasis web dan memiliki fitur utama berupa database IKM Purworejo\r\n2.	Pembuatan desain\r\nDalam tahap ini ditentukan desain sistem yang terdiri dari dua buah desain yaitu desain frontend dan backend. Desain frontend merupakan halaman utama yang dapat diakses seluruh pengguna, sementara halaman backend merupakan halaman khusus yang dibuat bagi administrator sistem\r\n3.	Implementasi\r\nTahapan ini meliputi:\r\na.	Implementasi basis data\r\nMerupakan tahapan pembuatan basis data untuk menyimpan data yang diperlukan oleh sistem. Adapun basis data yang digunakan adalah MySQL Database\r\nb.	Implementasi program/pembuatan script\r\nDalam tahap ini dibangun masing-masing fungsi menggunakan bahasa pemrograman PHP Hypertext Pre Processor (Script PHP) versi 7.35. Pembuatan script ini terfokus pada modul edukasi, modul promosi dan modul informasi IKM\r\nc.	Implementasi tampilan \r\nDalam tahap ini dibuat desain tampilan menggunakan CSS dari segi script, menggunakan perangkat lunak Adobe Photoshop dari segi desain gambar bitmap\r\nd.	Instalasi sistem\r\nDalam tahap instalasi diperlukan dua macam layanan yaitu layanan domain dan layanan hosting mengingat sistem merupakan sisitem informasi berbasis web. Untuk layanan domain dengan melakukan registrasi domain dengan alamat URL ikmpurworejo.com dan layanan hosting dengan kapasitas penyimpanan 2 GB. \r\nTahap dalam proses instalasi adalah memindahkan file-file yang telah dibuat pada tahap a, b dan c ke layanan hosting \r\n\r\n4.	Pengujian\r\nDalam tahap ini dilakukan pengujian dengan teknik blackbox testing yaitu menguji semua input dan output apakah sudah sesuai dengan yang diharapkan. Dari proses pengujian yang dilakukan, bahwa semua proses telah berjalan sesuai dengan yang diharapkan\r\n\r\n5.	Training\r\nDalam tahap ini dilakukan pendampingan bagi administrator sistem \r\n', 'brand.jpg'),
(6, 'Hari Batik, Jazid Kenalkan Motif Antik', '<p>\r\n\r\n<!--StartFragment--><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">PURWOREJO –</strong><span>&nbsp;</span>Jazid&nbsp;Bastomi, seorang desainer dan seniman batik ternama asal Kabupaten Purworejo, menambah koleksi karyanya dengan menciptakan batik tulis bermotif antik. Meski belum dikenalkan secara luas, hasil garapan Jazid yang satu ini telah mulai mendapat permintaan konsumen dari luar daerah.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Adanya motif baru itu pun menjadi persembahan istimewa pada Hari Batik Nasional yang diperingati setiap tanggal 2 Oktober.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">“Yang spesial bagi saya untuk hari batik tahun ini ya ini, Batik Antik,” kata Jazid saat ditemui di Kantor Dewan Kerajinan Nasional Daerah (Dekranasda) Purworejo, Rabu (2/10).</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Batik antik mengangkat cerita rakyat lokal Kabupaten Purworejo, khususnya Bagelenan yang diberi nama Rama-Rama Bagelen. Motifnya beragam, tetapi lebih mengeksplorasi dari sisi seni tentang sosok perempuan tempo dulu.</p><p style=\"\" class=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\">“Motif cerita rakyat memang sudah mulai saya garap sejak beberapa tahun ini. Tapi kali ini saya lebih mengangkat sosok perempuan dalam berbagai aktivitasnya atau perannya zaman dahulu,” ujarnya.</span><br></p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Menurut jazid, batik antik mulai dikerjakan sejak sekitar 6 bulan terakhir sehingga secara kuantitas belum banyak jumlahnya. Baru ada sekitar 25 motif yang berbeda versi, sepeti dalam hal busana atau jenis ativitas perempuan.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">“Ini baru saja selesai dan baru kemarin saya kirim ke Jogjakarta dan Jakarta. Harganya mulai ratusan ribu hingga Rp9 juta per lembar,” sebutnya.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Jazid mengaku terciptanya batik antik muncul dari keinginannya untuk mengangkat kembali sejarah Purworejo yang terancam tenggelam oleh zaman. Sementara ide-ide motifnya ia dapatkan dari mendengarkan cerita-cerita orang-orang zaman dahulu dan observasi dengan membaca literasi terkait.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">“Kebetulan saya suka sejarah. Kalau untuk motif wayang kan sudah banyak, nah motif cerita rakyat ini murni ide saya,” imbuhnya.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Proses pengerjaan batik antik tidak dapat kilat seperti pengerjaan motif lainnya. Dalam hal desain, Jazid melakukannya sendiri. Namun, untuk urusan pewarnaan, ia melibatkan para perajin batik binaannya yang tersebar di sejumlah desa di Kabupaten Purworejo.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">“Kita pakai warna alam dan menyesuaikan motif. Untuk kainnya sendiri pakai kualitas yang paling bagus,” jelasnya.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Rencananya, batik antik akan terus diproduksi dalam jumlah lebih banyak dan dipasarkan secara luas. Tidak hanya di Indonesia, melainkan juga di sejumlah Negara yang telah menjadi pelanggan batik produksi Jazid.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">“Prospek pemasaran sangat bagus, apalagi mancanegara karena mereka memang suka motif-motif seperti ini. Batik antic ini bisa untuk dekorasi di dalam rumah atau busana. Jadi fleksibel,” ungkapnya.</p><p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Jazid mengaku bahwa motif batik antik melengkapi koleksi karyanya yang saat ini sudah mencapai 600 lebih. Dirinya berharap karya baru yang dikenalkannya bertepatan dengan hari batik ini mampu menjaga kelestarian batik sekaligus sejarah Purworejo.<span>&nbsp;<br><br>Source:&nbsp;https://magelangekspres.com/2019/10/03/hari-batik-jazid-kenalkan-motif-antik/</span></p></p><p class=\"sceditor-nlf\"><br></p>', 'Hari-Batik-Jazid-Kenalkan-Motif-Antik-696x504.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailikm`
--

CREATE TABLE `detailikm` (
  `id` int(10) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pengusaha` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `wa` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailikm`
--

INSERT INTO `detailikm` (`id`, `jenis`, `alamat`, `pengusaha`, `email`, `hp`, `wa`, `foto`) VALUES
(16, 'Handycraft (Bros, Kerajinan Perca)', 'Krajan Rt 03 Rw 01, Kroyo Lor, Kemiri, Purworejo', 'Erni Setiyaningrum', '', '0857 2925 2575', '0857 2925 2575', 'brand.jpg'),
(17, 'Handycraft (Aksesoris Kerajinan Perca)', 'Bandung Kidul, Rt 01 Rw 03 Bayan, Kutoarjo , Purworejo', 'Iis Merdiana', 'iismerdiana5@gmail.com', '+6281327995459', '+6281327995459', 'brand.jpg'),
(18, 'seserahan & mahar, bros pita satin & kain perca, kerajinan kain flanel (topiary,hoop art,bouquet,bando,jepit rambut, hangingdoor, bantal unik, gantungan kunci)', 'Desa Gedong Rt 01 Rw 02, Kemiri, Purworejo', 'Hirmawati', 'heruprasetyo587@gmail.com', '+6285868928782', '+6285868928782', 'brand.jpg'),
(19, 'Membuat Bunga Sabun, Jual Rak Bunga Besi, Pot Bunga, Dan Daun Daun Plastik', 'Tambakrejo, Purworejo', 'Arah Saarah', '', '0858 8362 6101', '0858 8362 6101', 'brand.jpg'),
(20, 'Handmade Bros, Gantungan Kunci, (Kain Perca, Satin & Flanel)', 'Jurang Jero Rt 01 Rw 03,  Sidorejo, Purworejo', 'Rochanti Pramoni', 'Sarika631982@gmail.com', '+6282199966272', '+6282199966272', 'brand.jpg'),
(21, 'Boneka Flanel, Mahar, Sovenir', 'Sambeng Rt 01 Rw 06, Bayan, Purworejo', 'Feri Kusuma Wardani', '', '0896 3655 0004', '0896 3655 0004', 'brand.jpg'),
(22, 'Aneka Kerajinan Berbahan Flanel (Busybook/Mainan Edukasi, Boneka Jari, Boneka Tangan, Boneka Wisusa, Hangingdoor, Bantal Pengantin,/Karakter, Gantungan Kunci)', 'Desa Bayan, RT 01/RW 01 Kec. Bayan,Purworejo', 'Misgi Arum Ratri', 'misgriarum18@gmail.com', '+628562987065', '+628562987065', 'brand.jpg'),
(23, 'Rajutan & Handycraft', 'Ngampel, Pituruh', 'Sriani Wigati', '', '0856 4360 9389', '0856 4360 9389', 'brand.jpg'),
(24, 'Handycraft (Aplikasi Bunga Dan Bros)', 'Brengkelan Rt 03  Rw 01, Purworejo', 'Nuniek Mediawati', '', '0812 2697 1515', '0812 2697 1515', 'brand.jpg'),
(25, 'Handycraft (Sovenir, Bros , Aplikasi Bunga Pita & Perca, Dan Kerajinan Flanel)', 'Senepo Krajan 1 Rt 3 Rw 4 Kutoarjo, Purworejo', 'Desty Arum Sugiyanto', 'destycraftkutoarjo@gmail.', '+628996291309 ', '+628996291309 ', 'brand.jpg'),
(26, 'Handycraft (Aksesoris Kain Perca Dan Bros)', 'Jl. Mayjend Sutoyo Kepatihan, Ruko Pasar Suronegaran, Purworejo', 'Tsaniatu Zakia', '', '0821 1858 5299', '0821 1858 5299', 'brand.jpg'),
(27, 'Kreasi Mahar, Hantaran, Boneka Flanel Dan Sovenir', 'Perum. Wonoroto Purworejo No 13', 'Fajariani Wihartini', '', '', '0858 2347 4323', 'brand.jpg'),
(28, 'Kreasi Bouqet', 'Alamat (Rumah) : Dusun II  Rt 02 Rw 05 Tepus Kulon, Kutoarjo, Purworejo\r\nAlamat (Usaha) : Jl. Raya Kebumen Kutoarjo Km 2 Katerban\r\n', 'Herry Indra Wijayanti', '', '+6285725966866', '+6285725966866', 'brand.jpg'),
(29, 'Pembuatan Bingkai, Mahar Dan Seserahan', 'Jl. Bogowonto No 01, Rt 03 Rw 02, Pangenrejo, Purworejo', 'Puji Rahmawati', 'raseco.1984@gmail.com', '+6281329993390', '+6281329993390', 'brand.jpg'),
(30, 'Bros, Sovenir, Kerajinan Flanel', 'Simpu RT 02 RW 01, Ketosari, Bener', 'Rike novitasari', '', '+6285292433639', '+6285292433639', 'brand.jpg'),
(31, 'Talikur', 'Lingkungan 03 rt 02 rw 05 semawung kembaran, kutoarjo, Purworejo', 'Indah lestari F', '', '+6285868465618', '+6285868465618', 'brand.jpg'),
(32, 'krajinan kayu kaki toples ikan hias,kaki quci,kaki ', 'jln jogja km 9,5 . Rt 2 ,rw 5,  jenar wetan , purwodadi , purworejo.', 'Paijan ', '', '+6285228810754', '+6285228810754', 'brand.jpg'),
(34, 'Jualan Sabun', '3279 Tibbs Avenue', 'Nuniek Mediawati', 'raseco.1984@gmail.com', '4067913540', '08121212121', 'kalungbatik.jpg'),
(35, 'Produk dan Jasa Desain', 'Jln. Ir. H. Juanda, RT 1 RW 3, Kelurahan Mranti, Kecamatan Purworejo, Kabupaten Purworejo 54112', 'Ari Teguh Santoso', 'aritdotijo@gmail.com', '+6282219822101', '+628986939065', 'WhatsApp Image 2019-10-02 at 10.52.41.jpeg'),
(36, 'kain batik cipratan', 'Sebelikbrt 2/1,B  Kembaran,  kec Loano,  Purworejo', 'Ngadirin/Darminah', 'ddarminah69@gmail.com', '+6281392005455', '+6281392005455', 'WhatsApp Image 2019-10-08 at 12.55.45.jpeg'),
(37, 'Produk rumah tangga', 'Alamat ds pakisrejo\r\nRt1rw1 banyuurip\r\nPurworejo', '', '', '+62 821-3614-1771', '+62 821-3614-1771', 'WhatsApp Image 2019-10-18 at 12.32.29.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `isi`, `gambar`) VALUES
(8, 'Lomba Desain Batik', '<p>Lomba Desain Batik<br></p>', 'WhatsApp Image 2019-10-03 at 20.15.26.jpeg'),
(9, 'Lomba Desain Batik', '<p>Lomba Desain Batik<br></p>', 'WhatsApp Image 2019-10-03 at 20.15.26 (1).jpeg'),
(10, 'Si EPI Online', '<p><br></p>', 'WhatsApp Image 2019-10-13 at 14.10.42.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanya` text NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jawaban` text NOT NULL,
  `penjawab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `nama`, `email`, `tanya`, `tanggal`, `jawaban`, `penjawab`) VALUES
(11, 'Mawar', 'mawar@gmail.com', 'Kapan akan diadakan Purworejo Expo ya?', '28 September 2019', 'Tanggal 30 Oktober s.d 3 November 2019', 'Fahrudin'),
(14, 'RINA PUSPITOSARI', 'rina.puspitosari@bni.co.id', 'Siepi sangat membantu Purworejo menuju city smart atau kota berbasis teknologi..semoga aplikasi ini dapat tetap dipakai dan tidak hilang seiring dengan berjalannya waktu..\r\nSebelumnya Purworejo juga sudah memiliki Purworejomall semoga aplikasi tersebut juga dapat diaktifkan kembali untuk mendukung para pelancong membawa hasil IKM kita..\r\nSukses IKM purworejo', '02 Oktober 2019', 'Terimakasih atas apresiasi yang diberikan kepada kami. Semoga sistem ini dapat terus digunakan dan akan selalu kami kembangkan dengan berbagai fitur lainnya untuk kemajuan IKM Purworejo. Purworejo Mulyo.', 'admin'),
(15, 'Bakul iwak', 'bakuliwak19@gmail.com', 'Kalau mau ikut pasang produk, bisa? ', '24 Oktober 2019', 'Bisa kak, silahkan japri admin di 081212418055', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `description` text NOT NULL,
  `location_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `description`, `location_status`) VALUES
(16, -7.683723, 109.875664, 'Erni\'s Collection', 1),
(17, -7.737053, 109.907425, 'Hai Craft', 1),
(18, -7.700990, 109.890770, 'Foyo Craft', 1),
(19, -7.726209, 110.025139, 'Arah Flower', 1),
(20, -7.724848, 110.027969, 'Sarika Aksesoris', 1),
(21, -7.716343, 109.934669, 'Flanela MyShop', 1),
(22, -7.720085, 109.939735, 'Nadia craft', 1),
(23, -7.679726, 109.852402, 'Wigati Handmade', 1),
(24, -7.702515, 110.011185, 'Triyanieks Craft', 1),
(25, -7.741256, 109.896126, 'Desty Craft Kutoarjo', 1),
(26, -7.708568, 110.011253, 'Tsania craft', 1),
(27, -7.772976, 110.014313, 'Kiya craft', 1),
(28, -7.696112, 109.870270, 'Galery Kembang', 1),
(29, -7.715681, 110.002350, 'Dori Art Frame', 1),
(30, -7.695603, 110.025581, 'Ridelva craft', 1),
(31, -7.745522, 109.910477, 'Agha craft', 1),
(32, -7.802220, 109.996643, 'Rahayu Mandiri', 1),
(35, -7.697343, 110.002007, 'DJO Design', 1),
(36, -7.883723, 109.775665, 'PerDIRI', 1),
(37, -7.734701, 109.984818, 'Danida', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `idikm` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `idikm`, `nama`, `harga`, `ket`, `foto`) VALUES
(13, 27, 'Boneka Flanel', '65000', 'Boneka Flanel', 'flanel.jpg'),
(15, 19, 'Hiasan Bunga', '100000', 'Hiasan Bunga', 'hiasanbunga.jpg'),
(16, 27, 'Mahar boneka baju adat', '400000', 'Mahar boneka baju adat.', 'WhatsApp Image 2019-09-25 at 17.39.26.jpeg'),
(17, 27, 'Jasa Hias Seserahan', '800000', 'Jasa hias seserahan Box mika 800rb/10box', 'WhatsApp Image 2019-09-25 at 17.42.08.jpeg'),
(18, 26, 'Headpiece pengantin', '180000', 'Headpiece pengantin 180k', 'WhatsApp Image 2019-09-25 at 18.09.53.jpeg'),
(19, 26, '', '160000', 'Buqet pengantin 160k', 'WhatsApp Image 2019-09-25 at 18.11.18.jpeg'),
(20, 26, 'Bros handmade', '15000', 'Bros handmade harga mulai 15-35k', 'WhatsApp Image 2019-09-25 at 18.12.30.jpeg'),
(21, 22, 'Bantal flanel', '70000', 'Bantal flanel 70rb', 'WhatsApp Image 2019-09-25 at 18.22.57.jpeg'),
(22, 22, 'Boneka wisuda in frame', '120000', 'Boneka wisuda in frame.. 120rb', 'WhatsApp Image 2019-09-25 at 18.24.30.jpeg'),
(23, 22, 'Busybook', '120000', 'Busybook 120rb', 'WhatsApp Image 2019-09-25 at 18.27.04.jpeg'),
(24, 22, 'Hangingdoor', '80000', 'Hangingdoor 80rb', 'WhatsApp Image 2019-09-25 at 18.28.01.jpeg'),
(25, 22, 'Gantungan kunci', '7000', 'Gantungan kunci 7000', 'WhatsApp Image 2019-09-25 at 18.29.31.jpeg'),
(26, 22, 'Boneka jari', '5000', 'Boneka jari 5000/ pcs', 'WhatsApp Image 2019-09-25 at 18.30.14.jpeg'),
(27, 22, 'Boneka tangan', '30000', 'Boneka tangan  30.000/pcs', 'WhatsApp Image 2019-09-25 at 18.33.13.jpeg'),
(28, 20, 'Souvenir', '2000', 'souvenir', 'WhatsApp Image 2019-09-25 at 18.34.12.jpeg'),
(29, 20, 'Souvenir', '5000', 'Souvenir', 'WhatsApp Image 2019-09-25 at 18.36.30.jpeg'),
(30, 20, 'Headpiece ', '50000', 'Headpiece ', 'WhatsApp Image 2019-09-25 at 18.36.44.jpeg'),
(31, 20, 'Gantungan kunci', '5000', 'Gantungan kunci 5000', 'WhatsApp Image 2019-09-25 at 18.39.16 (1).jpeg'),
(32, 18, 'Hanging door', '50000', 'Hanging door 50.000', 'WhatsApp Image 2019-09-25 at 18.47.47.jpeg'),
(33, 18, 'Bros kain satin', '20000', 'Bros kain satin 20.000', 'WhatsApp Image 2019-09-25 at 18.48.23.jpeg'),
(34, 18, 'Hoop art', '40000', 'Hoop art 40.000', 'WhatsApp Image 2019-09-25 at 18.49.17.jpeg'),
(35, 18, 'Hanging door + frame', '45000', 'Hanging door + frame 45000', 'WhatsApp Image 2019-09-25 at 18.49.49.jpeg'),
(36, 18, 'Topiary', '30000', 'Topiary 15000-30000', 'WhatsApp Image 2019-09-25 at 18.50.20.jpeg'),
(37, 18, 'Gantungan kunci', '5000', 'Gantungan kunci 5000', 'WhatsApp Image 2019-09-25 at 18.51.04.jpeg'),
(38, 18, 'Mahar siluet', '850000', 'Mahar siluet 850.000', 'WhatsApp Image 2019-09-25 at 18.51.44.jpeg'),
(39, 18, 'Box seserahan', '87500', 'Box seserahan 875.000 /10box', 'WhatsApp Image 2019-09-25 at 18.52.31.jpeg'),
(40, 25, 'Kotak tisu hias flanel', '65000', 'Kotak tisu hias flanel @65.000', 'WhatsApp Image 2019-09-25 at 20.11.00.jpeg'),
(41, 25, 'Sovenir bunga dari bahan pita', '1500', 'Sovenir bunga dari bahan pita @1.500 (dgn minimal order)', 'WhatsApp Image 2019-09-25 at 20.12.40.jpeg'),
(42, 32, 'Kaki Toples dll', '15000', 'Harga berfariasi menurut ukuran.ukrn terkecil rp 15,000.', 'WhatsApp Image 2019-09-26 at 07.30.38.jpeg'),
(43, 17, 'Headpiece', '75000', 'Headpiece.. idr 75k', 'WhatsApp Image 2019-09-26 at 08.23.41.jpeg'),
(44, 17, 'Bros kalung', '65000', 'Bros kalung .. idr 65k', 'WhatsApp Image 2019-09-26 at 08.24.58.jpeg'),
(45, 17, 'Bros huruf', '35000', 'Bros huruf.. idr 35k', 'WhatsApp Image 2019-09-26 at 08.30.08.jpeg'),
(46, 17, 'Bros simple bow', '10000', 'Bros simple bow .. idr 10K/3pcs', 'WhatsApp Image 2019-09-26 at 08.33.44.jpeg'),
(47, 17, 'Bros bunga kriwil', '5000', 'Bros bunga kriwil.. idr 5k', 'WhatsApp Image 2019-09-26 at 08.34.16.jpeg'),
(48, 24, 'Aplikasi Bloomyrose', '30000', 'Aplikasi Bloomyrose 4cm idr 30rb/lusin', 'WhatsApp Image 2019-09-26 at 09.47.31.jpeg'),
(49, 24, 'Bros mawar juntai', '15000', 'Bros mawar juntai idr 15rb', 'WhatsApp Image 2019-09-26 at 09.52.28.jpeg'),
(50, 28, 'Flowerbox size L', '100000', 'Flowerbox size L harga 100rb', 'WhatsApp Image 2019-09-26 at 11.13.16.jpeg'),
(51, 28, 'Bouquet bunga satin size L', '85000', 'Bouquet bunga satin size L 85rb', 'WhatsApp Image 2019-09-26 at 11.14.08.jpeg'),
(52, 28, 'Bouquet flanel', '95000', 'Bouquet flanel 95rb', 'WhatsApp Image 2019-09-26 at 11.19.14.jpeg'),
(53, 28, 'Bouquet flanel', '250000', 'Bouquet flanel 250rb', 'WhatsApp Image 2019-09-26 at 11.19.56.jpeg'),
(54, 28, 'Bouquet flanel', '60000', 'Bouquet flanel 60rb', 'WhatsApp Image 2019-09-26 at 11.21.22.jpeg'),
(56, 35, 'Souvenir Pernikahan', '2000', 'Souvenir', 'WhatsApp Image 2019-10-02 at 10.55.43.jpeg'),
(57, 35, 'Souvenir Pernikahan', '2000', 'Souvenir pernikahan, desain suka-suka', 'WhatsApp Image 2019-10-02 at 10.57.03.jpeg'),
(58, 36, 'Batik Ciprat', '165000', 'Harga165k , ukuran p 2m l 115', 'WhatsApp Image 2019-10-08 at 12.55.45.jpeg'),
(59, 36, 'Batik Ciprat', '160000', 'Ukuran standar 2m ,lebar 115 harga 160k', 'WhatsApp Image 2019-10-08 at 12.55.46.jpeg'),
(60, 36, 'Batik Ciprat', '165000', 'Batik Ciprat', 'WhatsApp Image 2019-10-08 at 12.55.49.jpeg'),
(61, 36, 'Batik Ciprat', '165000', 'Motif bervariasi', 'WhatsApp Image 2019-10-08 at 12.55.50.jpeg'),
(62, 37, 'Telur Asin', '2500', 'Kapasitas  150butir / 3hari\r\nHarga 2500\r\nAlamat ds pakisrejo\r\nRt1rw1 banyuurip\r\nPurworejo', 'WhatsApp Image 2019-10-18 at 12.32.29.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `youtube`
--

CREATE TABLE `youtube` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `youtube`
--

INSERT INTO `youtube` (`id`, `judul`, `link`) VALUES
(10, 'Fasilitas KITE IKM', 'PJagmOdzFa0'),
(11, 'Info KITE IKM', '4toOPnxUVN0'),
(12, 'Digitalisasi Industri di Era Teknologi 4.0', 'Y6agMeArfsI'),
(14, 'Workshop Batik', 'L4DquzG2Olw'),
(15, 'Video Promosi Si-EPI', 'YnFtZqr2djE'),
(16, 'Si EPI Introduction (Launching Video)', 'W1lRSp6uMGE');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detailikm`
--
ALTER TABLE `detailikm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
