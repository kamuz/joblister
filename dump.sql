-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `joblister`;
CREATE DATABASE `joblister` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `joblister`;

DROP TABLE IF EXISTS `categories`;
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

DROP TABLE IF EXISTS `jobs`;
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
  `post_date` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

TRUNCATE `jobs`;
INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(1,	1,	'Google',	'Senior Investor',	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia mollitia perferendis maiores minus voluptatibus atque quaerat neque tempore. Illo, impedit reprehenderit quia maiores vitae corrupti commodi tenetur labore sit quaerat!',	'90k',	'Boston',	'Vladimir Kamuz',	'v.kamuz@gmail.com',	'2022-09-20 14:05:05'),
(2,	2,	'Facebook',	'Senior PHP Developer',	'Obcaecati illum explicabo quasi a excepturi ducimus non praesentium. Magnam consequuntur excepturi, temporibus commodi architecto, facere.',	'100k',	'London',	'Alex Kamuz',	'a.kamuz@gmail.com',	'2022-09-20 14:05:11'),
(3,	2,	'Amazon',	'Middle Django Developer',	'Natus ad voluptates eaque, aliquid repellat at dolores suscipit, deserunt voluptatibus totam qui deleniti et, atque repudiandae sequi nobis impedit vitae, tenetur vel temporibus voluptatum ipsam! Molestias debitis officia illum fuga totam aut quae ipsam u',	'20k',	'New York',	'Igor Kamuz',	'i.kamuz@gmail.com',	'2022-09-20 14:09:23'),
(4,	3,	'Upwork',	'Project Manager',	'Impedit eligendi nostrum sequi corporis id quaerat aliquam adipisci necessitatibus officia, odio maiores, autem in incidunt quibusdam porro officiis',	'30k',	'Kiev',	'Nadia Kamuz',	'n.kamuz@gmail.com',	'2022-09-20 14:09:05');

-- 2022-09-20 14:15:20
