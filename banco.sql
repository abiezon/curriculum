CREATE DATABASE  `curriculum`.`curriculum` /*!40100 DEFAULT CHARACTER SET latin1 */


CREATE TABLE  `curriculum`.`acquirements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `candidate_acquirements` (`candidate_id`),
  CONSTRAINT `candidate_acquirements` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8

CREATE TABLE  `curriculum`.`candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `schooling` varchar(30) DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `rg` char(20) DEFAULT NULL,
  `street` varchar(80) DEFAULT NULL,
  `street_number` int(11) DEFAULT NULL,
  `complement` varchar(30) DEFAULT NULL,
  `state` char(2) DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_candidate` (`role_id`),
  CONSTRAINT `role_candidate` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8

CREATE TABLE  `curriculum`.`courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `duration` time NOT NULL,
  `name_course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `candidate_course` (`candidate_id`),
  CONSTRAINT `candidate_course` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8

CREATE TABLE  `curriculum`.`experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `function` varchar(80) NOT NULL,
  `time_worked` char(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `current_job` int(11) DEFAULT NULL,
  `job_description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `candidates` (`candidate_id`),
  CONSTRAINT `candidates` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8

CREATE TABLE  `curriculum`.`languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `language` varchar(50) NOT NULL,
  `fluency` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `candidatelanguage` (`candidate_id`),
  CONSTRAINT `candidatelanguage` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8

CREATE TABLE  `curriculum`.`roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8

CREATE TABLE  `curriculum`.`users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1