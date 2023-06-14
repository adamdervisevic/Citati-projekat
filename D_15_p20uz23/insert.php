<?php
require_once "create.php";

$conn = new mysqli("localhost", "admin", "admin123", "videoteka");

if ($conn->connect_error) {
    die("Greška prilikom povezivanja s bazom podataka: " . $conn->connect_error);
}

$upiti = [];

$upiti[] = "
INSERT INTO reziseri (id, ime, prezime, pol)
VALUES
(null, 'Steven', 'Spielberg', 'M'),
(null, 'Christopher', 'Nolan', 'M'),
(null, 'Greta', 'Gerwig', 'Z');
";

$upiti[] = "
INSERT INTO filmovi (id, naslov, godina, ocena, reziser_id)
VALUES
(null, 'Jurassic Park', 1993, 8.1, 1),
(null, 'Inception', 2010, 8.8, 2),
(null, 'Lady Bird', 2017, 7.4, 3);
";

$upiti[] = "
INSERT INTO zanrovi (id, naziv)
VALUES
(null, 'Akcija'),
(null, 'Misterija'),
(null, 'Drama');
";

$upiti[] = "
INSERT INTO film_zanr (film_id, zanr_id)
VALUES
(1, 1),
(2, 2),
(3, 3);
";

foreach ($upiti as $upit) {
    if ($conn->query($upit)) {
        echo "<p>Upit je uspešno izvršen.</p>";
    } else {
        echo "<p>Doslo je do greske prilikom izvrsavanja upita: " . $conn->error . "</p>";
    }
}

$conn->close();
?>