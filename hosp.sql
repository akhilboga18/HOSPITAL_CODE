/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 5.5.42 : Database - unt
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`unt` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `unt`;

/*Table structure for table `bills` */

DROP TABLE IF EXISTS `bills`;

CREATE TABLE `bills` (
  `billnum` int(11) NOT NULL AUTO_INCREMENT,
  `b_pid` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `paymentmode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`billnum`),
  KEY `b_pid` (`b_pid`),
  CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`b_pid`) REFERENCES `patient` (`pid`)
);

/*Data for the table `bills` */

insert  into `bills`(`billnum`,`b_pid`,`cost`,`paymentmode`) values 
(2,8,101,'Cash'),
(3,9,30,'Debit Card');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phoneno` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ;

/*Data for the table `employee` */

insert  into `employee`(`eid`,`ename`,`gender`,`dob`,`salary`,`address`,`phoneno`) values 
(205,'raj','m','1970-10-10',7777,'1-9-252/9/145 hyderabad','09014126122'),
(206,'raj','M','2022-05-04',10000,'1-9-252/9/145 hyderabad','09014126122');

/*Table structure for table `patient` */

DROP TABLE IF EXISTS `patient`;

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(25) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ;

/*Data for the table `patient` */

insert  into `patient`(`pid`,`pname`,`gender`,`dob`,`age`) values 
(8,'rajashekar dyavari Shetty','M','2022-05-05',11),
(9,'Rajashekar D S','M','2022-05-02',33);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
