<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $filmovi = ["Avatar", "Titanic", "Star Wars", "LOTR", "Troy", "Gladiator"];
        $reziseri = ["James Cameron", "James Cameron", "Ron Howard", "Peter Jackson", "Wolfgang Petersen", "Ridley Scott"];
        $slicice = ["slike/avatar.jpg", "slike/titanic.jpg", "slike/star-wars.jpg", "slike/lotr.jpg", "slike/troy.jpg", "slike/gladiator.jpg"];
        
        echo "<table>";
        for ($i=0; $i<count($filmovi); $i++) {
            if ($i % 2 == 0) {
                echo "<tr class='parni'>";
            } else {
                echo "<tr class='neparni'>";
            }
            echo "<td><h2>".$filmovi[$i]."</h2><p>".$reziseri[$i]."</p></td>";
            echo "<td><img src='".$slicice[$i]."' alt='".$filmovi[$i]."'></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>
