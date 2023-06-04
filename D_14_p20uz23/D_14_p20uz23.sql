CREATE DATABASE `videoteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE filmovi (
    `id` INT UNIQUE, 
    `naslov` VARCHAR(255) NOT NULL,
    `reziser` VARCHAR(255) NOT NULL, 
    `god_izdanja` YEAR NOT NULL,
    `zanr` VARCHAR(255) NOT NULL,
    `ocena` DECIMAL(10, 1)
);

INSERT INTO `filmovi`(`id`, `naslov`, `reziser`, `god_izdanja`, `zanr`, `ocena`)
VALUES 
(1, 'The Dark Knight', 'Christopher Nolan', '2008', 'Akcija', 9.0),
(2, 'Pulp Fiction', 'Quentin Tarantino', '1994', 'Krimi', 8.9),
(3, 'The Shawshank Redemption', 'Frank Darabont', '1994', 'Drama', 9.3),
(4, 'Inception', 'Christopher Nolan', '2010', 'Akcija', 8.8),
(5, 'Fight Club', 'David Fincher', '1999', 'Drama', 8.8),
(6, 'The Godfather', 'Francis Ford Coppola', '1972', 'Krimi', 9.2),
(7, 'Forrest Gump', 'Robert Zemeckis', '1994', 'Drama', 8.8),
(8, 'The Matrix', 'Lana i Lilly Wachowski', '1999', 'Akcija', 8.7),
(9, 'Interstellar', 'Christopher Nolan', '2014', 'Avantura', 8.6),
(10, 'The Silence of the Lambs', 'Jonathan Demme', '1991', 'Krimi', 8.6);

--Selektovati sve filmove gde je žanr tragedija, komedija ili drama.
SELECT* 
FROM `filmovi`
WHERE `zanr` IN ('Tragedija', 'Komedija', 'Drama');

--Selektovati sve filmove kojima je ocena između 5 i 10.
SELECT* 
FROM `filmovi`
WHERE `ocena` BETWEEN 5 AND 10;

--Selektovati režisere (bez ponavljanja) koji su režirali filmove izdate 2003. godine i poređati ih abecednim redom. 
--(nemam ni jedan film koji je izdat 2003. godine, ali mislim da je ovo ispravno)
SELECT DISTINCT `reziser`
FROM `filmovi`
WHERE `god_izdanja` = 2003
ORDER BY `reziser`;

--Selektovati sve filmove tako da im zanr nije komedija.

SELECT* 
FROM `filmovi`
WHERE `zanr` != 'Komedija';

--Prikazati sve informacije o najbojle rangiranom filmu

SELECT*
FROM `filmovi`
WHERE `ocena` = (SELECT MAX(`ocena`) FROM `filmovi`);

--Prikazati sve informacije o najbolje rangiranoj drami.

SELECT*
FROM `filmovi`
WHERE `ocena` = (SELECT MAX(`ocena`) FROM `filmovi` WHERE `zanr` = 'Drama');

--Selektovati trojicu rezisera ciji filmovi imaju najbolje ocene.

SELECT `reziser`
FROM `filmovi`
WHERE `ocena` > (SELECT AVG(`ocena`) FROM `filmovi`)
ORDER BY `ocena` DESC
LIMIT 3;

--Selektovati sve žanrove filmova, bez ponavljanja.
SELECT DISTINCT `zanr`
FROM `filmovi`;

--Selektovati sve filmove u obliku naslov (režiser) na primer Plane (Jean-François Richet)

SELECT CONCAT(`naslov`, ' (', `reziser`,')') AS film
FROM `filmovi`


--Selektovati sve filmove u obliku naslov (režiser) – godina izdanja na primer Plane (Jean-François Richet) - 2023 . Selektovane filmove sortirati rastuće prema godini izdanja.

SELECT CONCAT(`naslov`, ' (', `reziser`,') - ', `god_izdanja`) AS film
FROM `filmovi`
ORDER BY `god_izdanja` ASC;

--Odrediti prosečnu ocenu fimova koji su izdati nakon 2000 godine

SELECT AVG(`ocena`) AS 'prosecna_ocena'
FROM `filmovi`
