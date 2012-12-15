--- lab6 ---

Creating DB and table in MySQL:

CREATE DATABASE lab6;
USE lab6;
CREATE TABLE `users` (
`id` INT( 255 ) NOT NULL AUTO_INCREMENT ,
`login` VARCHAR( 255 ) NOT NULL ,
`password` VARCHAR( 255 ) NOT NULL ,
`email` VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY ( `id` )
);