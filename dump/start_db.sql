CREATE DATABASE IF NOT EXISTS db;
USE db;

CREATE TABLE `Users` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `name` varchar(20) NOT NULL,
                          PRIMARY KEY(`id`)) ENGINE = InnoDB DEFAULT CHARSET = latin1;
INSERT INTO `Users` (`name`)
VALUES
('Ivanov'),
('Smith'),
('Sidorov');