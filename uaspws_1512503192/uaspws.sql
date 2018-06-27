# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-06-27 15:07:16
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "mahasiswas"
#

CREATE TABLE `mahasiswas` (
  `nim` varchar(10) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `fakultas` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `peminatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "mahasiswas"
#

INSERT INTO `mahasiswas` VALUES ('1512500578','2018-06-25 19:59:55','2018-06-25 20:06:58',NULL,'Anisa Mufidah Fakhri','Bintaro Jaya','Teknologi Informasi','Sistem Informasi','081081081','Islam','Enterprise System'),('1512500677','2018-06-27 14:53:28','2018-06-27 14:53:28',NULL,'Fadila Hasana','Petukangan','Teknologi Informasi','Sistem Informasi','098834561123','muslim','Technopreneurship'),('1512503192','2018-06-25 20:11:39','2018-06-25 20:12:56','2018-06-25 20:12:56','Aldis Fakhri S','San Fransisco','TI','SI','021','Islam','ES');
