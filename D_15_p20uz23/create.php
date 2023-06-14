<?php
/*CREATE DATABASE `videoteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE IF NOT EXISTS `reziseri`(
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `ime` VARCHAR(50) NOT NULL,
    `prezime` VARCHAR(50) NOT NULL,
    `pol` CHAR(1)
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS `filmovi` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naslov` VARCHAR(255) NOT NULL,
    `godina` SMALLINT UNSIGNED,
    `ocena` DECIMAL (6,2),
    `reziser_id` INT UNSIGNED,
    FOREIGN KEY (`reziser_id`)
    REFERENCES `reziseri`(`id`)
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS `zanrovi` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(255) NOT NULL
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS `film_zanr` (
    `film_id` INT UNSIGNED,
    `zanr_id` INT UNSIGNED,
    PRIMARY KEY (`film_id`, `zanr_id`),
    FOREIGN KEY (`film_id`)
    REFERENCES `filmovi`(`id`),
    FOREIGN KEY (`zanr_id`)
    REFERENCES `zanrovi`(`id`)
) ENGINE = INNODB;
*/

$server = "localhost";
$username = "admin";
$password = "admin123";
$database = "videoteka";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Neuspela konekcija sa bazom podataka: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS videoteka CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Baza podataka uspešno kreirana ili već postoji.<br>";
} else {
    echo "Greška prilikom kreiranja baze podataka: " . $conn->error;
    $conn->close();
    exit();
}

$conn->select_db($database);

$sql = "
    CREATE TABLE IF NOT EXISTS reziseri (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ime VARCHAR(255) NOT NULL,
        prezime VARCHAR(255) NOT NULL,
        pol CHAR(1)
    ) ENGINE = InnoDB;

    CREATE TABLE IF NOT EXISTS filmovi (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        naslov VARCHAR(255) NOT NULL,
        godina SMALLINT UNSIGNED,
        ocena DECIMAL (6,2),
        reziser_id INT UNSIGNED,
        FOREIGN KEY (reziser_id)
        REFERENCES reziseri(id)
    ) ENGINE = InnoDB;

    CREATE TABLE IF NOT EXISTS zanrovi (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        naziv VARCHAR(255) NOT NULL
    ) ENGINE = InnoDB;

    CREATE TABLE IF NOT EXISTS film_zanr (
        film_id INT UNSIGNED,
        zanr_id INT UNSIGNED,
        PRIMARY KEY (film_id, zanr_id),
        FOREIGN KEY (film_id)
        REFERENCES filmovi(id),
        FOREIGN KEY (zanr_id)
        REFERENCES zanrovi(id)
    ) ENGINE = InnoDB;
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabele su uspešno kreirane.";
} else {
    echo "Greška prilikom kreiranja tabela: " . $conn->error;
}


?>