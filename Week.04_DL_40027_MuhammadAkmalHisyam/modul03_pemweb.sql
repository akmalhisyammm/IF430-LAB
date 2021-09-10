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