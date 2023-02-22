-- Adminer 4.8.1 MySQL 5.5.5-10.9.4-MariaDB-1:10.9.4+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `addedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `articles` (`id`, `date`, `name`, `content`, `addedBy`) VALUES
(1,	'2022-11-09',	'Nima Dorje lama',	'We will have the best futurestic collection of cars.',	'Claire');

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `manufacturerId` int(11) DEFAULT NULL,
  `description` longblob DEFAULT NULL,
  `archive` varchar(1) DEFAULT NULL,
  `oldPrice` varchar(20) DEFAULT NULL,
  `engineType` varchar(45) DEFAULT NULL,
  `mileage` varchar(45) DEFAULT NULL,
  `addedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cars` (`id`, `name`, `price`, `manufacturerId`, `description`, `archive`, `oldPrice`, `engineType`, `mileage`, `addedBy`) VALUES
(3,	'E-Type',	'50000',	2,	'Excellent condition used E-Type, only 20,000 miles. ',	'N',	'Was £25000',	NULL,	NULL,	NULL),
(4,	'280SL',	'35000',	2,	'Gold, in excellent condition',	'N',	'Was £40000',	NULL,	NULL,	NULL),
(6,	'DB44',	'99000',	4,	'Classic DB4. Minor scratches but otherwise flawless condition. ',	'N',	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(45) DEFAULT NULL,
  `enquiry` mediumtext DEFAULT NULL,
  `phoneNumber` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `enquiries` (`id`, `customerName`, `enquiry`, `phoneNumber`, `email`, `user`, `status`) VALUES
(1,	'Renish Shrestha',	'I need to know the opening and closing time of your office.',	'9840713865',	'nimadorje.2021210@nami.edu.np',	NULL,	'Complete'),
(2,	'Adwait Gu',	'Showroom kahila khulxa',	'9844664466',	'Gu@gmail.com',	NULL,	'Complete');

DROP TABLE IF EXISTS `manufacturers`;
CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(2,	'Jaguar'),
(3,	'Mercedes'),
(4,	'Aston Martin'),
(5,	'Ford'),
(6,	'Tesla'),
(8,	'Reniwait');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `master` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `master`) VALUES
(1,	'Claire',	'opensesame',	'Claire',	'Y'),
(2,	'Fred',	'opensesame',	'Fred',	'N');

-- 2022-11-13 12:49:28
