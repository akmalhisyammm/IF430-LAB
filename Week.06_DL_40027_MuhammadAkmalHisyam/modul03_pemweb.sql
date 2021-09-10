mysql -h localhost -u root

CREATE DATABASE modul03_pemweb;
use modul03_pemweb

CREATE TABLE students (
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	student_id VARCHAR(12) NOT NULL UNIQUE,
	first_name VARCHAR(20) NOT NULL,
	last_name VARCHAR(20) NOT NULL,
	student_desc VARCHAR(255) NOT NULL
)engine=InnoDB;

CREATE TABLE user (
	email VARCHAR(64) NOT NULL,
	pass VARCHAR(256) NOT NULL,
	salt VARCHAR(32) NOT NULL
)engine=InnoDB;

INSERT INTO user VALUES
('admin@umn.ac.id', 'f6fdffe48c908deb0f4c3bd36c032e72', 'admin'),
('agung@umn.ac.id', 'a24a2a3227fab1ef5c81fc6ac31f20ff', 'coba');