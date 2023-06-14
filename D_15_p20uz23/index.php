<?php
require_once "create.php";
$conn = new mysqli("localhost", "admin", "admin123", "videoteka");

if ($conn->connect_error) {
    die("Greška prilikom povezivanja s bazom podataka: " . $conn->connect_error);
}

// Prikazuje sve informacije o filmovima, zajedno sa režiserom i žanrovima, abecedno po nazivu filma
$sql = "
    SELECT f.naslov, r.ime, r.prezime, z.naziv
    FROM filmovi AS f
    INNER JOIN reziseri AS r ON f.reziser_id = r.id
    INNER JOIN film_zanr AS fz ON f.id = fz.film_id
    INNER JOIN zanrovi AS z ON fz.zanr_id = z.id
    ORDER BY f.naslov ASC
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Informacije o filmovima:</h2>";
    echo "<table>";
    echo "<tr><th>Naslov filma</th><th>Režiser</th><th>Žanr</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["naslov"] . "</td>";
        echo "<td>" . $row["ime"] . " " . $row["prezime"] . "</td>";
        echo "<td>" . $row["naziv"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nema rezultata za prikaz.";
}

// Prikazuje filmove po godinama i režiserima
$sql = "
    SELECT DISTINCT(f.godina) AS godina
    FROM filmovi AS f
    ORDER BY f.godina ASC
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Filmovi po godinama:</h2>";

    while ($row = $result->fetch_assoc()) {
        $godina = $row["godina"];
        echo "<h3>Filmovi iz $godina:</h3>";

        $sql = "
            SELECT f.naslov, r.ime, r.prezime
            FROM filmovi AS f
            INNER JOIN reziseri AS r ON f.reziser_id = r.id
            WHERE f.godina = $godina
            ORDER BY r.ime ASC
        ";

        $subResult = $conn->query($sql);

        if ($subResult->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Naslov filma</th><th>Režiser</th></tr>";

            while ($subRow = $subResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $subRow["naslov"] . "</td>";
                echo "<td>" . $subRow["ime"] . " " . $subRow["prezime"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Nema rezultata za prikaz.";
        }
    }
} else {
    echo "Nema rezultata za prikaz.";
}

$conn->close();
?>