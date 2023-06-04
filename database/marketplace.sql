/*
SQLyog Ultimate
MySQL - 10.4.25-MariaDB : Database - marketplace
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`marketplace` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `marketplace`;

/*Table structure for table `petugas` */

CREATE TABLE `petugas`
(
  `id_petugas` int
(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar
(255) NOT NULL,
  `telp_petugas` varchar
(15) NOT NULL,
  `email_petugas` varchar
(100) NOT NULL,
  PRIMARY KEY
(`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `produk` */

CREATE TABLE `produk`
(
  `id_produk` bigint
(20) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar
(100) NOT NULL,
  `kategori_produk` varchar
(100) NOT NULL,
  `harga` float NOT NULL,
  `isDeleted` tinyint
(4) DEFAULT NULL,
  `stok` float NOT NULL,
  PRIMARY KEY
(`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
