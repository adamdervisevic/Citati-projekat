<?php

require_once "create.php";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Neuspela konekcija sa bazom podataka: " . $conn->connect_error);
}

// Unos podataka
$sql = "
    INSERT INTO filmovi (naziv, reziser, zanr)
    VALUES ('Film 1', 'Režiser 1', 'Žanr 1'),
           ('Film 2', 'Režiser 2', 'Žanr 2'),
           ('Film 3', 'Režiser 3', 'Žanr 3');

    INSERT INTO reziseri (ime)
    VALUES ('Režiser 1'),
           ('Režiser 2'),
           ('Režiser 3');

    INSERT INTO zanrovi (naziv)
    VALUES ('Žanr 1'),
           ('Žanr 2'),
           ('Žanr 3');
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Podaci su uspešno uneti.";
} else {
    echo "Greška prilikom unosa podataka: " . $conn->error;
}


?>