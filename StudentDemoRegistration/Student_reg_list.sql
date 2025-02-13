DROP DATABASE IF EXISTS StudentRegistration;

CREATE DATABASE StudentRegistration;

USE StudentRegistration;

CREATE TABLE `RegisteredStudents`
(
   PRIMARY KEY (`id`) NOT NULL,
   `id` varchar(8) DEFAULT NULL,
   `firstname` varchar(30) DEFAULT NULL,
   `lastName` varchar(30) DEFAULT NULL,
   `project` varchar(50) DEFAULT NULL,
   `email` varchar(50) DEFAULT NULL,
   `phone` varchar(15) DEFAULT NULL,
   `slot` varchar(50) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `RegisteredStudents` WRITE;

UNLOCK TABLES;