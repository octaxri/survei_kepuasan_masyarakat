/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.3.16-MariaDB : Database - survei_kepuasan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`survei_kepuasan` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `survei_kepuasan`;

/*Table structure for table `t_hasil_child` */

DROP TABLE IF EXISTS `t_hasil_child`;

CREATE TABLE `t_hasil_child` (
  `id_survei` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `tgl_survei` date NOT NULL,
  KEY `id_survei` (`id_survei`),
  KEY `id_pertanyaan` (`id_survei`) USING BTREE,
  KEY `id_jawaban` (`id_survei`) USING BTREE,
  KEY `id_jawaban_2` (`id_jawaban`),
  KEY `id_pertanyaan_2` (`id_pertanyaan`),
  CONSTRAINT `t_hasil_child_ibfk_1` FOREIGN KEY (`id_survei`) REFERENCES `t_hasil_head` (`id_survei`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_hasil_child_ibfk_2` FOREIGN KEY (`id_jawaban`) REFERENCES `t_jawaban` (`id_jawaban`),
  CONSTRAINT `t_hasil_child_ibfk_3` FOREIGN KEY (`id_pertanyaan`) REFERENCES `t_pertanyaan` (`id_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `t_hasil_child` */

insert  into `t_hasil_child`(`id_survei`,`id_pertanyaan`,`id_jawaban`,`tgl_survei`) values 
(2147483647,1,2,'2019-09-05'),
(2147483647,2,8,'2019-09-05'),
(2147483647,3,12,'2019-09-05'),
(2147483647,4,16,'2019-09-05'),
(2147483647,5,20,'2019-09-05'),
(2147483647,6,24,'2019-09-05'),
(2147483647,7,28,'2019-09-05'),
(2147483647,8,32,'2019-09-05'),
(2147483647,9,36,'2019-09-05'),
(50912,1,4,'2019-09-05'),
(50912,2,9,'2019-09-05'),
(50912,3,13,'2019-09-05'),
(50912,4,17,'2019-09-05'),
(50912,5,21,'2019-09-05'),
(50912,6,25,'2019-09-05'),
(50912,7,29,'2019-09-05'),
(50912,8,33,'2019-09-05'),
(50912,9,37,'2019-09-05'),
(29,1,2,'2019-09-05'),
(29,2,7,'2019-09-05'),
(29,3,11,'2019-09-05'),
(29,4,15,'2019-09-05'),
(29,5,19,'2019-09-05'),
(29,6,23,'2019-09-05'),
(29,7,27,'2019-09-05'),
(29,8,32,'2019-09-05'),
(29,9,35,'2019-09-05'),
(70336,1,3,'2019-09-05'),
(70336,2,8,'2019-09-05'),
(70336,3,12,'2019-09-05'),
(70336,4,16,'2019-09-05'),
(70336,5,20,'2019-09-05'),
(70336,6,24,'2019-09-05'),
(70336,7,28,'2019-09-05'),
(70336,8,32,'2019-09-05'),
(70336,9,36,'2019-09-05'),
(932,1,3,'2019-09-05'),
(932,2,8,'2019-09-05'),
(932,3,12,'2019-09-05'),
(932,4,16,'2019-09-05'),
(932,5,20,'2019-09-05'),
(932,6,24,'2019-09-05'),
(932,7,28,'2019-09-05'),
(932,8,32,'2019-09-05'),
(932,9,36,'2019-09-05'),
(72,1,2,'2019-09-05'),
(72,2,8,'2019-09-05'),
(72,3,13,'2019-09-05'),
(72,4,14,'2019-09-05'),
(72,5,20,'2019-09-05'),
(72,6,24,'2019-09-05'),
(72,7,27,'2019-09-05'),
(72,8,32,'2019-09-05'),
(72,9,35,'2019-09-05');

/*Table structure for table `t_hasil_head` */

DROP TABLE IF EXISTS `t_hasil_head`;

CREATE TABLE `t_hasil_head` (
  `id_survei` int(11) NOT NULL AUTO_INCREMENT,
  `kode_wil` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pendidikan` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `pekerjaan` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `saran` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_survei`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `t_hasil_head` */

insert  into `t_hasil_head`(`id_survei`,`kode_wil`,`pendidikan`,`jenis_kelamin`,`usia`,`pekerjaan`,`saran`) values 
(29,'','SMA','pria',54,'TNI','asdasf'),
(72,'','SMP','pria',43,'TNI','qwerewr'),
(932,'','S3','pria',65,'PNS','asfdasf'),
(50912,'','D3','pria',23,'POLRI','wqerqwe'),
(70336,'','SD','pria',12,'SWASTA','asdasd'),
(2147483647,'','SD','pria',12,'PNS','asdad');

/*Table structure for table `t_jawaban` */

DROP TABLE IF EXISTS `t_jawaban`;

CREATE TABLE `t_jawaban` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `bobot` int(11) NOT NULL,
  PRIMARY KEY (`id_jawaban`),
  KEY `id_pertanyaan` (`id_pertanyaan`) USING BTREE,
  CONSTRAINT `t_jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `t_pertanyaan` (`id_pertanyaan`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `t_jawaban` */

insert  into `t_jawaban`(`id_jawaban`,`id_pertanyaan`,`jawaban`,`gambar`,`bobot`) values 
(1,1,'Tidak Sesuai','sangat_kurang.png',1),
(2,1,'Kurang Sesuai','kurang.png',2),
(3,1,'Sesuai','puas.png',3),
(4,1,'Sangat Sesuai','sangat_puas.png',4),
(6,2,'Tidak Mudah','sangat_kurang.png',1),
(7,2,'Kurang Mudah','kurang.png',2),
(8,2,'Mudah','puas.png',3),
(9,2,'Sangat Mudah','sangat_puas.png',4),
(10,3,'Tidak Cepat','sangat_kurang.png',1),
(11,3,'Kurang Cepat','kurang.png',2),
(12,3,'Cepat','puas.png',3),
(13,3,'Sangat Cepat','sangat_puas.png',4),
(14,4,'Selalu Tidak Sesuai','sangat_kurang.png',1),
(15,4,'Kadang-kadang Sesuai','kurang.png',2),
(16,4,'Banyak Sesuainya','puas.png',3),
(17,4,'Selalu Sesuai','sangat_puas.png',4),
(18,5,'Tidak Sesuai','sangat_kurang.png',1),
(19,5,'Kurang Sesuai','kurang.png',2),
(20,5,'Sesuai','puas.png',3),
(21,5,'Sangat Sesuai','sangat_puas.png',4),
(22,6,'Tidak Kompeten','sangat_kurang.png',1),
(23,6,'Kurang Kompeten','kurang.png',2),
(24,6,'Kompeten','puas.png',3),
(25,6,'Sangat Kompeten','sangat_puas.png',4),
(26,7,'TIdak Sopan dan Ramah','sangat_kurang.png',1),
(27,7,'Kurang Sopan dan Ramah','kurang.png',2),
(28,7,'Sopan dan Ramah','puas.png',3),
(29,7,'Sangat Sopan dan Ramah','sangat_puas.png',4),
(30,8,'Buruk','sangat_kurang.png',1),
(31,8,'Cukup','kurang.png',2),
(32,8,'Baik','puas.png',3),
(33,8,'Sangat Baik','sangat_puas.png',4),
(34,9,'Tidak Ada','sangat_kurang.png',1),
(35,9,'Ada tetapi Tidak Berfungsi','kurang.png',2),
(36,9,'Berfungsi Kurang Maksimal','puas.png',3),
(37,9,'Dikelola dengan Baik','sangat_puas.png',4);

/*Table structure for table `t_pertanyaan` */

DROP TABLE IF EXISTS `t_pertanyaan`;

CREATE TABLE `t_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_pertanyaan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `t_pertanyaan` */

insert  into `t_pertanyaan`(`id_pertanyaan`,`pertanyaan`,`deskripsi`) values 
(1,'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan?',''),
(2,'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?',''),
(3,'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?',''),
(4,'Bagaimana pendapat Saudara kesesuaian antara biaya yang dibayarkan dengan biaya yang ditetapkan?',''),
(5,'Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?',''),
(6,'Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan?',''),
(7,'Bagaimana pemahaman Saudara tentang perilaku tugas dalam pelayanan terkait kesopanan dan keramahan?',''),
(8,'Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?',''),
(9,'Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?','');

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_wil` int(11) NOT NULL,
  `nama_wil` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `t_user` */

insert  into `t_user`(`id_user`,`username`,`password`,`kode_wil`,`nama_wil`,`last_login`) values 
(1,'admin','admin',0,'','2019-09-05 14:52:25'),
(2,'udin','udin',0,'','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
