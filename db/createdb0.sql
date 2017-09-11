CREATE DATABASE mensajesdb
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE mensajesdb;

CREATE TABLE tb_cform (
  ID INT(11) NOT NULL AUTO_INCREMENT KEY,
  u_name TEXT,
  u_email TEXT,
  subj TEXT,
  message TEXT
);
