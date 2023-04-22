<?php
    //Zadatak 1

    date_default_timezone_set('Europe/Belgrade');
    $vreme = date('H');
    $dan = date('N');

    if ($dan > 5 && $vreme < 10) {
        echo "<p>Ne radimo trenutno.</p>";
    } elseif ($dan > 5 && $vreme >= 18) {
        echo "<p>Ne radimo trenutno.</p>";
    } elseif ($dan <= 5 && $vreme < 9) {
        echo "<p>Ne radimo trenutno.</p>";
    } elseif($dan <= 5 && $vreme >= 20) {
        echo "<p>Ne radimo trenutno.</p>";
    } else {
        echo "<p>Butik je otvoren</p>";
    }

    //Zadatak 2
    $broj_stanovnika = 7000000;
    $broj_testiranih = 3000000;
    $broj_pozitivnih = 1000000;

    $dan = $broj_pozitivnih * 100 / $broj_testiranih;
    $ukupno = $broj_pozitivnih * 100 / $broj_stanovnika;

    if($dan > 30 || $ukupno > 10) {
        echo "<p>VANREDNO STANJE!</p>";
    } else {
        echo "<p>Bez sekiracije!</p>";
    }
?>