CREATE DATABASE mensajesdb
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE mensajesdb;

CREATE TABLE tb_cform (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  u_name TEXT,
  u_email TEXT,
  subj TEXT,
  message TEXT
);

mysql> CREATE TABLE pet (name VARCHAR(20), owner VARCHAR(20),
    -> species VARCHAR(20), sex CHAR(1), birth DATE, death DATE);
