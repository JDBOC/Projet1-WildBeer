CREATE DATABASE PWB;
USE PWB;

create table categorie (
id INT auto_increment,
beerName VARCHAR(50) NOT NULL,
beerDesc VARCHAR(255) NOT NULL,
beerTaste VARCHAR(10) NOT NULL,
beerThirsty VARCHAR(10) NOT NULL,
beerBitterness VARCHAR(10) NOT NULL,
beerAlcohol VARCHAR(10) NOT NULL,
beerFermentation VARCHAR(10) NOT NULL,
beerPrice INT NOT NULL,
sixPackPrice INT NOT NULL,
kegPrice INT NOT NULL,
imgName VARCHAR(50) NOT NULL,
catName VARCHAR(20),
primary key (id)
)ENGINE=InnoDB;
