<?php
    require_once "Student.php";
    require_once "SamofinansirajuciStudent.php";
    require_once "BudzetskiStudent.php";

    $studenti = [
        $student1 = new SamofinansirajuciStudent("Dusan", 50, 8, 40),
        $student2 = new SamofinansirajuciStudent("Ana", 120, 7, 55),
        $student3 = new BudzetskiStudent("Mirko", 180, 8),
        $student4 = new BudzetskiStudent("Jovana", 200, 9)
    ];
    $studenti = [$student1, $student2, $student3, $student4];

    function najvecaSkolarina($studenti) {
        $max = 0;
        $studentMax = null;

        foreach ($studenti as $student) {
            $skolarina = $student->skolarina();
            if ($skolarina > $max) {
                $max = $skolarina;
                $studentMax = $student;
            }
        }

        if ($studentMax != null) {
            echo "<p>Student sa najvećom školarinom je: " . $studentMax->getIme() . "</p>";
            echo "<p>Školarina: " . $studentMax->skolarina() . "</p>";
        }
    }

    function prosecnaSkolarina($studenti) {
        $zbir = 0;
        foreach ($studenti as $student) {
            $zbir += $student->skolarina();
        }

        $prosek = $zbir / count($studenti);
        echo "Prosečna školarina svih studenata: " . $prosek . "<br>";
    }

    function prosecanOdnos($studenti) {
        $ukupanOdnos = 0;

        foreach($studenti as $student) {
            $skolarina = $student->skolarina();
            $espb = $student->getOsvojeniESPB();
            $odnos = $skolarina / $espb;
            $ukupanOdnos += $odnos;
        } $prosecanOdnos = $ukupanOdnos / count($studenti);
        echo "Prosečan odnos visine školarine i broja osvojenih ESPB bodova: " . $prosecanOdnos;
    }


    function minimalniBrojESPB($studenti) {
        $min = $studenti[0]->getOsvojeniESPB();
        $studentMin = $studenti[0];
    
        foreach($studenti as $student) {
            $osvojeni = $student->getOsvojeniESPB();
            if($osvojeni < $min) {
                $min = $osvojeni;
                $studentMin = $student;
            } elseif($osvojeni == $min && $student->skolarina() > $studentMin->skolarina()) {
                $studentMin = $student;
            }
        }
    
        return $studentMin;
    }


    //Ispisivanja
    echo "<h2>Informacije o svim studentima:</h2>";

    foreach ($studenti as $student) {
        echo "<h3>Student: " . $student->getIme() . "</h3>";
        echo "<p>Broj ESPB: " . $student->getOsvojeniESPB() . "</p>";
        echo "<p>Prosek: " . $student->getProsecnaOcena() . "</p>";
        echo "<p>Školarina: " . $student->skolarina() . "</p>";
        echo "<p>Cena prijave ispita: " . $student->cenaPrijaveIspita() . "</p>";
        echo "<hr>";
    }

    echo "<p>". najvecaSkolarina($studenti). "</p>";
    echo "<hr>";
    echo "<p>".prosecnaSkolarina($studenti)."</p>";
    echo "<hr>";
    echo "<p>".prosecanOdnos($studenti)."</p>";
    echo "<hr>";

    $studentSaMinimalnimESPB = minimalniBrojESPB($studenti);
    
    if ($studentSaMinimalnimESPB != null) {
        echo "<p>Student sa minimalnim brojem osvojenih ESPB bodova je: " . $studentSaMinimalnimESPB->getIme() . "</p>";
        echo "<p>Broj osvojenih ESPB bodova: " . $studentSaMinimalnimESPB->getOsvojeniESPB() . "</p>";
        echo "<p>Školarina: " . $studentSaMinimalnimESPB->skolarina() . "</p>";
    } else {
        echo "<p>Nema studenata.</p>";
    }

?>