<?php


$servername = "localhost";
$username = "korisnik";
$password = "lozinka";
$dbname = "videoteka2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Neuspela konekcija sa bazom podataka: " . $conn->connect_error);
}


$sql = "
    CREATE TABLE IF NOT EXISTS filmovi (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        naziv VARCHAR(255) NOT NULL,
        reziser VARCHAR(255) NOT NULL,
        zanr VARCHAR(255) NOT NULL
    ) ENGINE = InnoDB;

    CREATE TABLE IF NOT EXISTS reziseri (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ime VARCHAR(255) NOT NULL
    ) ENGINE = InnoDB;

    CREATE TABLE IF NOT EXISTS zanrovi (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        naziv VARCHAR(255) NOT NULL
    ) ENGINE = InnoDB;
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabele su uspešno kreirane.";
} else {
    echo "Greška prilikom kreiranja tabela: " . $conn->error;
}


?>