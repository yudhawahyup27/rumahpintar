/*
SQLyog Professional
MySQL - 10.4.19-MariaDB : Database - smbd04_2d_042
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`smbd04_2d_042` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `smbd04_2d_042`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `angid` varchar(12) NOT NULL,
  `angnama` varchar(40) DEFAULT NULL,
  `angalamat` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`angid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `anggota` */

insert  into `anggota`(`angid`,`angnama`,`angalamat`) values 
('035417010801','Rakhiel Dita','Jl. Melon 121'),
('035417010802','Santia Rukmana','Jl. Mangga 45'),
('035417010803','Samuel Santana','Jl. Pepaya 65'),
('035417010804','Hyuga Andhika','Jl. Anggur 41'),
('035417010805','Percival Nanda','Jl. Anggrek 2'),
('035417010901','Julian Kusuma','Jl. Melati 77'),
('035417010902','Aditya Sukmana','Jl. Anggrek 6'),
('035417010903','Rangga Diviya','Jl. Jerapah 8'),
('035417010904','Sakti Sinaga','Jl. Melati 65'),
('035417010905','Vika Silviana','Jl. Anggur 87');

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `bukuid` varchar(8) NOT NULL,
  `bukujudul` longtext DEFAULT NULL,
  `bukupengarang` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`bukuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `buku` */

insert  into `buku`(`bukuid`,`bukujudul`,`bukupengarang`) values 
('B-901','Sistem Manajemen Data','Palamedes'),
('B-914','Virus dan Penanggulangannya','Gaheris'),
('B-975','Matahari Sebagai Pusat Tata Surya','Agravain');

/*Table structure for table `pinjam` */

DROP TABLE IF EXISTS `pinjam`;

CREATE TABLE `pinjam` (
  `pjmid` int(4) NOT NULL,
  `pjmtgl` date DEFAULT NULL,
  `bukuid` varchar(8) COLLATE utf8mb4_general_nopad_ci DEFAULT NULL,
  `angid` varchar(12) COLLATE utf8mb4_general_nopad_ci DEFAULT NULL,
  PRIMARY KEY (`pjmid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_nopad_ci;

/*Data for the table `pinjam` */

insert  into `pinjam`(`pjmid`,`pjmtgl`,`bukuid`,`angid`) values 
(1,'2021-04-17','B-901','035417010905'),
(2,'2021-04-18','B-914','035417010803'),
(3,'2021-04-18','B-901','035417010802'),
(4,'2021-04-20','B-975','035417010901'),
(5,'2021-04-20','B-914','035417010804');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
