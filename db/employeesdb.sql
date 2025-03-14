# Host: localhost  (Version 5.5.5-10.4.32-MariaDB)
# Date: 2025-03-03 18:46:28
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "department"
#

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# Data for table "department"
#

INSERT INTO `department` VALUES (1,'ฝ่ายไอที'),(2,'ฝ่ายบัญชี'),(3,'ฝ่ายการตลาด');

#
# Structure for table "employees"
#

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `fk_emp_depart` (`department_id`),
  CONSTRAINT `fk_emp_depart` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

#
# Data for table "employees"
#

