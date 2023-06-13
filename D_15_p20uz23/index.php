<?php

require_once "create.php";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Neuspela konekcija sa bazom podataka: " . $conn->connect_error);
}

// Prikaz svih filmova sa režiserima i žanrovima, abecedno po nazivu filma
$sql = "
    SELECT filmovi.naziv AS film, filmovi.reziser, GROUP_CONCAT(zanrovi.naziv SEPARATOR ', ') AS zanrovi
    FROM filmovi
    INNER JOIN zanrovi ON FIND_IN_SET(zanrovi.id, filmovi.zanr)
    GROUP BY filmovi.id
    ORDER BY filmovi.naziv ASC
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Film</th><th>Režiser</th><th>Žanrovi</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["film"] . "</td>";
        echo "<td>" . $row["reziser"] . "</td>";
        echo "<td>" . $row["zanrovi"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nema rezultata.";
}

$conn->close();
?>