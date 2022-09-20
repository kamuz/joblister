-- Adminer 4.8.1 MySQL 5.6.51 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `joblister` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `joblister`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

TRUNCATE `categories`;
INSERT INTO `categories` (`id`, `name`) VALUES
(1,	'Business'),
(2,	'Technology'),
(3,	'Retail'),
(4,	'Construction');

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

TRUNCATE `jobs`;
INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`) VALUES
(1,	1,	'Google',	'Senior Investor',	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia mollitia perferendis maiores minus voluptatibus atque quaerat neque tempore. Illo, impedit reprehenderit quia maiores vitae corrupti commodi tenetur labore sit quaerat!',	'90k',	'Boston',	'Vladimir Kamuz',	'v.kamuz@gmail.com'),
(2,	2,	'Facebook',	'Senior PHP Developer',	'Obcaecati illum explicabo quasi a excepturi ducimus non praesentium. Magnam consequuntur excepturi, temporibus commodi architecto, facere.',	'100k',	'London',	'Alex Kamuz',	'a.kamuz@gmail.com');

-- 2022-09-19 07:27:36
