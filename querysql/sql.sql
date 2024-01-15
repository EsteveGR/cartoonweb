-----ESTRUCTURA------------------------------------------------------

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

-----QUERYS------------------------------------------------------

USE cartoondb;
INSERT INTO cartoonist (name, familyname, country)
VALUES ("Akira Toriyama", "Manga", "Japo");

USE cartoondb;
INSERT INTO film (name, year, country, genre)
VALUES ("Bola de drac", "1984", "Japo", "Aventures");

USE cartoondb;
INSERT INTO cartoon (name, cartoonistID, img, filmID)
VALUES 
("Goku", "1", "", "1"),
("Son Goan", "1", "", "1"),
("Vegeta", "1", "", "1"),
("Satanas Cor Petit", "1", "", "1");


USE cartoondb;
SELECT *
FROM cartoonist;

USE cartoondb;
SELECT *
FROM film;

USE cartoondb;
SELECT *
FROM cartoon;

DROP DATABASE cartoondb;