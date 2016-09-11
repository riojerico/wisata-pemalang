/*
SQLyog Enterprise - MySQL GUI v7.12 
MySQL - 5.6.16 : Database - rod_pariwisata
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`rod_pariwisata` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rod_pariwisata`;

/*Table structure for table `detail_objek` */

DROP TABLE IF EXISTS `detail_objek`;

CREATE TABLE `detail_objek` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_objek` int(5) DEFAULT NULL,
  `detail_objek` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `detail_objek` */

insert  into `detail_objek`(`id`,`id_objek`,`detail_objek`) values (1,1,'Tiket masuk Widuri Water Park : <br>\nRp.13.000 (Senin-Jumat) untuk dewasa dan Rp.8.000 untuk anak-anak (Senin-Minggu),<br> Rp.15.000 untuk dewasa (Sabtu-Minggu)');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_objek` int(5) DEFAULT NULL,
  `foto` text,
  `title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `gallery`(`id`,`id_objek`,`foto`,`title`) values (1,1,'images/gallery/widuriwaterpark1.jpg',NULL),(2,1,'images/gallery/widuriwaterpark2.jpg',NULL),(3,1,'images/gallery/widuriwaterpark3.jpg',NULL);

/*Table structure for table `wisata` */

DROP TABLE IF EXISTS `wisata`;

CREATE TABLE `wisata` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_objek` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `gambar` text,
  `alamat` text,
  `lat` text,
  `long` text,
  `id_jenis` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `wisata` */

insert  into `wisata`(`id`,`nama_objek`,`deskripsi`,`gambar`,`alamat`,`lat`,`long`,`id_jenis`) values (1,'Pantai Widuri(Widuri WaterPark)','Salah satu obyek wisata yang telah dibangun/dikembangan dan layak menjadi ikon pariwisata kabupaten pemalang adalah “WIDURI WATERPARK” letaknya sangat strategis, hanya berjarak 2km dari alun-alun kota Pemalang dengan insfrastruktur jalan dan tempat parker yang dpat dilalui dan menampung jenis kendaraan termasuk bus umum besar.Luas Lahan milik Pemerintah Kabupaten Pemalang di Obyek Wisata pantai Widuri ini seluruhnya = 23,7Ha, yang terdiri dari : Widuri WaterPark, Kantor, Ventura River, Kolam Renang dan Open Space : 6,5 Ha. sirkuit/Road Race : 12,1 Ha.Tanah Kosong (Perluasan) : 5,1 Ha.Tiket masuk Widuri Water Park : Rp.13.000 (Senin-Jumat) untuk dewasa dan Rp.8.000 untuk anak-anak (Senin-Minggu), Rp.15.000 untuk dewasa (Sabtu-Minggu)','images/gambar/widuriwaterpark1.jpg',NULL,'-6.8616539','109.3792951',2),(2,'Zatobay WaterBoom','Fasilitas yang ditawarkan di Zatobay Waterboom meliputi : kolam arus dengan panjang 120 meter, PalyGround Pool dan Ember Tumpah yang setiap 3 menit ember dengan ukuran cukup besar itu akan menumpahkan airnya kebawah, Kids Pool dan Air mancur yang bisa dimanfaatkan untuk berhujan hujan membasahi sekujur tubuh. Olympic Pool yaitu kolam renang dengan 5 lintasan bebas yang dapat digunakan sebagai wahana pendidikan bagi pemula untuk berenang maupun berlomba Waterboom dengan ketinggian 12 meter dilengkapi dengan spiral water dan racing slide  Tiket Masuk Waterboom Zatobay : Rp, 15.000(dihari kerja) Rp, 17.000(weekend)','images/gambar/zatobay3.jpg',NULL,'-6.8963264','109.3950437',2),(3,'Pemandian Alam Moga ','Merupakan pemandian (Kolam Renang) alami karena airnya berasal dari sumber mata air jernih yang memancar dari bawahnya. Pemandian alam moga ini merupakan warisan jaman penjajahan yang berhawa sejuk dan dikitari oleh panorama pegunungan yang menawan. pemandian alam moga ini juga dilengkapi dengan fasilitas Hotel, Camping Ground, dan lain-lain. Tiket Masuk : Rp, 5.000','images/gambar/Moga2.jpg',NULL,'-7.1211565','109.2433216',2),(4,'Argo Wisata Kebun Semugih ','Argo Wisata Kebuh Teh Semugih ini merupakan hamparan tanaman the, selain hawanya yang sejuk dan panorama nya yang menawan para pengunjung juga dapat melihat bagaimana cara pemetikan teh. Dilokasi tersebut juga terdapat pabrik teh tempat mengelola hasil perkebunan. Argo wisata Perkebunan the ini juga dilengkapi fasilitas : Outbond, Flying Fox, Jembatan Tali, Gasebo, Penginapan, Lapangan Tenis, Gardu Pandang, Motor ATV dan Kereta Wisata   ','images/gambar/kebun-teh-semugih-2.jpg',NULL,'-7.1211082','109.2280006',2),(5,'Wisata Pegunungan Jambe Kembar ','Jambe Kembar Argiwisata adalah tempat rekreasi keluarga dengan pegunungan dan pedesaan yang sejuk dan alami. menyediakan berbagai fasilitas :1. Rumah Makan : dengan menu special Gurami Bakar, Gurame asam manis,. tersedia juga menu lain seperti Ayam bakar/goring, bawal bakar/goring 2.penginapan. 3. waterboom mini, disediakan kolam renang berbagai ukuran dan kedalaman dengan sumber airnya langsung dari sumber air yang lebih segar dan alami. 4. aula : dengan kapasitas +/- 150 orang, yang bisa digunakan untuk berbagai acara seperti pernikahan, reuni, pertemuan, rapat dll.','images/gambar/jambekembar1.jpg',NULL,'-7.1805166','109.3239366',2),(6,'Rainbow Rafting River Pemalang ','Dinas Pariwisata kabupaten Pemalang bekerjasama dengan PT.JERAM INDAH SUNGAI COMAL menyediakan obyek wisata yang menantang adrenalin dengan route : Star Jl.Raya Randudongkal – Moga Km 5(Jembatan Kebanggan) Finish : Desa Kecepit(Diatas bendungan Mejagong) Paket harga yang disediakan ada 2 macam. yaitu : 1.Trip Pendek 5,5 Km harga Publish Rp. 165.000 2. Trip Panjang 8,5 Km harga Publish Rp. 245.000. Untuk pelajar ada harga diskon dengan syarat membawa kartu pelajar.','images/gambar/rafting2.jpg',NULL,'-7.1033514','109.2570715',1),(7,'Pantai Joko Tingkir ','Pantai joko tingkir ini terletak 12 Km arah timur laut kota Pemalang. dengan luas 1 Ha merupakan pantai yang masih alami dengan sajian panorama laut biru dan kicauan burung camar serta perahu-perahu tradisional yang menghiasi pinggir pantai. Terasa begitu romantic ketika senja telah tiba dengan panorama sunset yang begitu indah. Tersedia juga fasilitas perahu pesiar yang siap memanjakan pengunjung berwisata ketengah laut dan wahana mainan anak. ','images/gambar/pantai-joko-tingkir-2.jpg',NULL,'-6.8267158','109.4594202',1),(8,'Pantai KramatSari(Blendung)','Berupa pantai alami dengan hamparan pasir bersih yang terletak kurang lebih 32 Km timur laut kota Pemalang dengan luas lahan 2 Ha. begitu mudah untuk mencapai lokasi karena sarana jalan yang sudah memadai. Di pantai blendung ini kita akan disajikan dengan deburan ombak yang begitu indah apalagi ditmabah irama music yang sering disajikan ketika bulan purnama tiba, karena biasanya warga sekitar mengadakan ritual tersendiri di pantai blendung guna menyambut bulan purnama','images/gambar/pantai-blendung2.jpg',NULL,'-6.8239164','109.5545778',1),(9,'Telaga Silating ','Telaga Silating berlokasi disebelah selatan kota Pemalang dengan luas 2 Ha. Telaga silating ini memiliki panorama indah dengan bukit besar yang kokoh mengelilinginya. terasa begitu menyenangkan ketika kita menikmatinya bersama keluarga. Untuk menambah kesemarakan pada bulan bulan tertentu diadakan pergelaran musik dimana panggung terletak tepat diatas telaga, sehingga pengunjung dpat menikmati musik dari berbagai penjuru. Telaga Silating ini dilengkapi juga dengan wahana bermain anak. Tiket masuk telaga silating ini adalah Rp, 1.000 ','images/gambar/Telaga-silating3.jpg',NULL,'-7.1132631','109.3201745',1),(10,'Curug Bengkawah ','Curug Bengkawah merupakan curug yang elok dengan ketinggian 20m, dengan luas 0,30 Ha dimana tebing tebing menggapit disekelilingnya, dihiasi tumbuh tumbuhan disekeliling bukit. Curug Bengkawah ini terletak di Desa Sikasur Kecamatan Randudongkal Kabupaten Pemalang. kita harus berjalan kaki kira-kira 2 Km dari parkiran yang ada, pemandangan persawahan yang hijau membuat kita terbuai sehingga tidak terasa capek telah berjalan sejauh 2 Km, sesampai disana kita bisa meredam kaki disumber air yang tidak pernah kering.','images/gambar/curug-bengkawah-2.jpg',NULL,'-7.1173995','109.3256274',1),(11,'Bukit Mendelem ','Bukit Mendelem adalah sebuah bukit dengan ketinggian kurang lebih 1450m dan memiliki luas 3,5 Ha. Bukit mendelem menyajikan pemandangan yang menawan dengan medan terjal dan batuan diorite yang menghiasi sebagian besar punggung bukit sangat pas bagi mereka pecinta panjat tebing. Bukit yang tampak bagaikan pahatan pualam dari kejauhan dan mempunyai kaki bukit yang bentuknya mirip dengan sebuah paying yang dibawahnya terdapat gua yang sering dimanfaatkan untuk menyepi atau menjalankan laku meditasi.','images/gambar/bukit-mendelem3.jpg',NULL,'-7.1758456','109.3306948',1),(12,'Telaga Rengganis ','Telaga Rengganis ini terletak ditenggara kabupaten Pemalang tepatnya pada Kecamatan Watukumpul. Dengan luas 1 Hatelaga ini Nampak anggun dengan kondisi air yang masih sangat jernih. Dengan dihiasi oleh pohon pinus dan bukit bukit yang ada disampingnya memanjakan penggemar olah raga hiking dan camping dimana mereka bisa dengan mudah mendirikan tenda sambil menikmati ikan yang dipancing dari telaga sambil memanjang alam disenja hari. Telaga Rengganis ini sangat pas bagi mereka yang ingin melepas lelah.','images/gambar/telaga-rengganis1.jpg',NULL,'-7.127038','109.3682923',1),(13,'Mojo Mangrove Adventure  ','Mojo Mangrove Adventure adalah sebuah wisata eksotis yang akan membuat anda serasa berada disisi dunia yang berbeda. Wisata alam hutan Mangrove yang dilengkapi dengan wisata perahu dan 2 wisata kuliner yaitu bandeng cabut duri dan kepiting soka. Mojo Mangrove Adventure ini berlokasi di Kecamatan Ulujami Kbupaten Pemalang','images/gambar/mojomangrove2.jpg',NULL,'-6.8095866','109.4853153',1),(14,'Desa Wisata Cikendung ','You will enjoy many things that never seen before, there are many natural & traditional art attraction you will find….','images/gambar/cikendung2.jpg',NULL,'-7.1562971','109.2608153',1),(15,'Wisata Religi Makam Pangeran Benowo ','Pengeran Benowo adalah salah satu anak Raja Hadiwijaya atau Jaka Tingkir dari Pajang. Kepala Bidang Kebudayaan, Dinas Kebudayaan dan Pariwisata (Disbudpar) Kabuapten Pemalang, Drs. Sapardi, M.si mengatakan, dari cerita yang beredar di masyarakat hingga sekarang, keberadaan makam sang pangeran di Desa Penggarit itu dilatarbelakangi pencarian pusaka yaitu keris Sitapak. Pusaka tersebut dimiliki oleh salah satu tokoh masyarakat yang bermukim di dekat Pantai Widuri, tepatnya di Desa Plawangan yaitu Tunggu Wasesa.Dengan memiliki keris tersebut dipercaya Kerajaan Pajang bisa memenangi perang Konjana Papa, yaitu perang antara anak dan bapak untuk memperebutkan tahta kerajaan itu. Pangeran Benowo yang merupakan anak sah Sultan Hadiwijaya meskipun bukan anak sulung atau putra mahkota, tentu membela kedudukan ayahnya. Diuji Ia diberi tugas untuk mendapatkan pusaka keris Sitapak yang dimiliki oleh Tunggul Wasesa sehingga rela melakukan perjalanan jauh dari Pajang hingga ke Plawangan. Dia mengatakan, ketika sampai di Plawangan, Panegeran Benowo bertemu dengan orang yang dimaksud yaitu Tunggul Wasesa dan mengutarakan sebab kedatangannya. Tunggul Wasesa memberikannya dengan syarat bahwa ia bisa mengangkat pusaka tersebut dan menikahi anaknya yang bernama Dewi Urang Ayu. Ia ingin menguji apakah Pangeran Benowo betul-betul ingin mendapatkan pusaka itu dan menjalankan darma bakti pada orang tua meskipun harus menikah dengan seorang perempuan yang tidak cantik. Ternyata keris Sitapak dengan amat mudah diangkat oleh Pangeran Benowo.Pangeran Benowo berjanji akan menikahi Dewi Urang Ayu kalau ia sudah menjalankan darma bakti membela Sultan Hadiwijaya dalam peperangan. Akan tetapi Kerajaan Pajang kalah dengan Sutawijaya yang berkuasa di Kota Gedhe. Mendengar berita kekalahan itu, Pangeran Benowo kecewa. Hasil kerja kerasnya sia-sia belaka. Kini sebuah makam di Desa Penggarit, Kabupaten Pemalang dipercayai oleh masyarakat setempat sebagai Makam Pangeran Benowo, dan selalu ramai dikunjungi peziarah pada hari-hari tertentu','images/gambar/makam1.jpg',NULL,'-6.949333','109.4032949',2),(16,'Wisata Religi Makam Syech Maulana Syamsudin','Salah satu destinasi wisata religi di Pemalang yang biasa dikunjungi adalah Makam Syekh Maulana Syamsudin. Hingga sekarang sebagian masyarakat menganggap bahwa makam tersebut termasuk makam keramat yang dipercaya menyimpan berkah dan karomah seperti makam para wali yang ada di daerah lainnya. Kondisi makam Syekh Maulana Syamsudin sekarang sudah kesekian kali dipugar bahkan fasilitasnya juga kian lengkap seperti Masjid, Toilet dan bilik-bilik untuk beristirahat/bermalam bagi para peziarah yang berasal dari luar Pemalang.','images/gambar/makamm1.jpg',NULL,'-6.8625704','109.3735776',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
