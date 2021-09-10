-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `fname_admin` varchar(255) NOT NULL,
  `lname_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id_admin`, `fname_admin`, `lname_admin`, `email_admin`, `password`, `phone_admin`) VALUES
(1,	'mba',	'dina',	'dina@admin.umn.ac.id',	'8d80b28fa63fc17e8a45d9a9d0775736',	'085959509754'),
(2,	'Wendy',	'',	'wendy@admin.umn.ac.id',	'ad931de51833f907eeee5f708a2e89d0',	'08485487542');

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `fname_dosen` varchar(255) NOT NULL,
  `lname_dosen` varchar(255) NOT NULL,
  `nomorinduk_dosen` varchar(255) NOT NULL,
  `email_dosen` varchar(255) NOT NULL,
  `foto_dosen` varchar(255) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `dosen` (`id_dosen`, `fname_dosen`, `lname_dosen`, `nomorinduk_dosen`, `email_dosen`, `foto_dosen`) VALUES
(1,	'Johannes',	'Immanuel',	'L00892',	'johannes_imanuel@umn.ac.id',	'assets/images/joim.jpg'),
(2,	'Ryan',	'Pramana',	'L12322',	'ryan.pramana@umn.ac.id',	'assets/images/ryan.jpg'),
(3,	'Agung',	'Chandranata',	'L15119',	'agung@umn.ac.id',	'assets/images/agung.jpg');

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
  `fname_mahasiswa` varchar(255) NOT NULL,
  `lname_mahasiswa` varchar(255) NOT NULL,
  `nomorinduk_mahasiswa` varchar(255) NOT NULL,
  `email_mahasiswa` varchar(255) NOT NULL,
  `tugas_mahasiswa` int(11) NOT NULL,
  `uts_mahasiswa` int(11) NOT NULL,
  `uas_mahasiswa` int(11) NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mahasiswa` (`id_mahasiswa`, `fname_mahasiswa`, `lname_mahasiswa`, `nomorinduk_mahasiswa`, `email_mahasiswa`, `tugas_mahasiswa`, `uts_mahasiswa`, `uas_mahasiswa`) VALUES
(1,	'Adrian',	'Hartanto',	'14110110037',	'adrian.hartanto@gmail.com',	100,	87,	90),
(2,	'Sintya',	'Oktaviani',	'14110110021',	'sintya.oktaviani@student.umn.ac.id',	100,	45,	58),
(3,	'Annastasya',	'Indarsin',	'14110110024',	'annastasya.indarsin@student.umn.ac.id',	85,	47,	21);

-- 2017-12-05 04:52:05
