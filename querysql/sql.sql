CREATE DATABASE cartoondb;

USE cartoondb;
DROP TABLE IF EXISTS `cartoonist`;

USE cartoondb;
DROP TABLE IF EXISTS `cartoon`;

USE cartoondb;
DROP TABLE IF EXISTS `film`;

USE cartoondb;
CREATE TABLE cartoonist (
    id INT (11) AUTO_INCREMENT,
    name VARCHAR (30) NOT NULL,
    familyname VARCHAR (30) NOT NULL,
    country VARCHAR(30),
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

USE cartoondb;
CREATE TABLE film (
    id INT (11) AUTO_INCREMENT,
    name VARCHAR (30) NOT NULL,
    year INT (4),
    country VARCHAR(30),
    genre VARCHAR(30),
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

USE cartoondb;
CREATE TABLE cartoon (
    id INT (11) AUTO_INCREMENT,
    name VARCHAR (30) NOT NULL,
    cartoonistID INT (11) NOT NULL,
    img TEXT,
    filmID INT(11) NOT NULL, 
    PRIMARY KEY (id),
    FOREIGN KEY (cartoonistID) REFERENCES cartoonist(id),
    FOREIGN KEY (filmID) REFERENCES film(id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-----------------------------------------------------------

USE cartoondb;
INSERT INTO cartoonist (name, familyname, country)
VALUES ("Akira Toriyama", "Manga", "Japo");

USE cartoondb;
INSERT INTO film (name, year, country, genre)
VALUES ("Bola de drac", "1984", "Japo", "Aventures");

USE cartoondb;
INSERT INTO cartoon (name, cartoonistID, img, filmID)
VALUES ("Goku", "1", "", "1");

USE cartoondb;
SELECT *
FROM cartoonist;

USE cartoondb;
SELECT *
FROM film;

USE cartoondb;
SELECT *
FROM cartoon;



-----------------------------------------------------------

USE Biblioteca;
CREATE TABLE `Llibres`(
    `llibreID` INT (10) AUTO_INCREMENT,
    `llibreTitol` VARCHAR (50) NOT NULL,
    `llibreDescripcio` VARCHAR (255) NOT NULL,
    `llibreIdioma` VARCHAR (40) NOT NULL,
    `llibreAutor` VARCHAR (50) NOT NULL,
    `llibreDataLlancament` DATE,
    `llibreAnyEdicio` INT (5) NOT NULL,
    `llibreEdicio` INT (5)NOT NULL,
    `llibreEditorial` VARCHAR (50) NOT NULL,
    `llibreIsbn` VARCHAR (40) NOT NULL,
    `llibreTematicaID` INT (10),
    -- llibreCodi VARCHAR (15) NOT NULL,
    -- llibreQr 
    PRIMARY KEY (`llibreID`),
    FOREIGN KEY (llibreTematicaID) REFERENCES Tematica(tematicaID)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

USE Biblioteca;
CREATE TABLE `Users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

USE Biblioteca;
INSERT INTO Users (email, password, username)
VALUES ('admin@admin.com', 'admin', 'admin')

USE Biblioteca;
CREATE TABLE `RolsUsers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rol_name` varchar(30) NOT NULL,
  `rol_dgescription` varchar(255) NOT NULL,
  `rol_status` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rol_name` (`rol_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

USE Biblioteca;
ALTER TABLE Users
drop column rol_id;

USE Biblioteca;
ALTER TABLE Users
ADD rol_id INT unsigned;

USE Biblioteca;
ALTER TABLE Users
ADD FOREIGN KEY (rol_id) REFERENCES RolsUsers(id);


DROP DATABASE Biblioteca;



-- Querys:
USE Biblioteca;
SELECT * FROM `Biblioteca`.`Llibres` LIMIT 1000;

USE Biblioteca;
select * from Users;
