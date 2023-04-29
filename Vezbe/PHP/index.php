<?php
    // 1
    $sati = 12;
    $minuti = 40;

    $proslo_od_ponoci = $sati * 60 + $minuti;
    echo "<p>$proslo_od_ponoci</p>";

    // 2 
    date_default_timezone_set('Europe/Belgrade');
    $sati = date('G');
    $minuti = date('i');
    $proslo_od_ponoci = $sati * 60 + $minuti;
    echo "<p>$proslo_od_ponoci</p>";

    // 3 
    $cena = 500; 
    $novac = 2000;
    $kusur = $novac - $cena;
    echo "<p>$kusur</p>";

    // 4
    $evri = 200;
    $kurs = 117.28;
    $dinari = $evri * $kurs;
    $evri = $dinari / $kurs;
    echo "<p>$dinari</p>";
    echo "<p>$evri</p>";

    // 5
    $kurs_evra = 117.28;
    $kurs_dolara = 106.79;
    $dinar = 1000;
    $evri = $dinar / $kurs_evra;
    $dolari = $dinar / $kurs_dolara;
    echo "<p>$dolari</p>";
    echo "<p>$evri</p>";

    // 6 
    $cel = 20;
    $far = $cel * 1.8 + 32;
    $cel = ($far - 32) / 1.8;
    echo "<p>$cel</p>";
    echo "<p>$far</p>";

    // 7
    $cel = 30;
    $kel = $cel + 273.15;
    $cel = $kel - 273.15;
    echo "<p>$kel</p>";
    echo "<p>$cel</p>";

    // 8
    $galon = 3.785;
    $l = $galon * 3.785;
    echo "<p>$l</p>";
    $galon = $l / 3.785;
    echo "<p>$galon</p>";

    // 9 
    $god = 1994;
    $god_2 = 1998;
    $trenutna_godina = 2023;
    $decenija = floor(($trenutna_godina - $god) / 10);
    $decenija_2 = floor(($trenutna_godina - $god_2) / 10);
    echo "<p>$decenija</p>";
    echo "<p>$decenija_2</p>";

    // 10 
    $a = 5;
    $b = 8;
    $dijagonala = sqrt(pow($a, 2) + pow($b, 2));
    $obim = 2 * ($a + $b);
    $povrsina = $a * $b;
    echo "<p>$dijagonala</p>";
    echo "<p>$obim</p>";
    echo "<p>$povrsina</p>";

    // 11 
    $rec = "green";
    $rec_2 = "blue";
    echo "<p style = 'color:green;'>$rec</p>";
    echo "<p style = 'color:blue;'>$rec_2</p>";

    // 12
    $cena = 300;
    $popust = 20;
    $prava_cena = (100 * 300) / 80;
    echo "<p style = 'text-decoration: line-through 1px red;'>$prava_cena</p>";
    echo "<p style = 'color:green;'>$cena</p>";
    
    // 13
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);
    $color = "rgb($r, $g, $b)";
    echo "<p style=\"color:$color;\">Adam Dervisevic</p>";
?>