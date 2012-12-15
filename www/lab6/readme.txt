--- lab6 ---

Creating DB and table in MySQL:

CREATE DATABASE lab6;

USE lab6;

CREATE TABLE users (
  id INT(5) NOT NULL AUTO_INCREMENT,
  login VARCHAR(15) DEFAULT '0' ,
  password VARCHAR(15) DEFAULT '0' ,
  PRIMARY KEY (id)
);

INSERT INTO `users` (`login`, `password`) values ('username', 'password')
;
