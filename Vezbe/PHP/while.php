<?php
    //Zadatak 1
    $i = 20;
    $p = 1;
    while($p <= 10000 && $i >= 1) {
        $p *= $i;
        $i--;
    }
    echo "<p>Konacan rezutaltat je <span style='color: red;'>$p</span>, a poslednji pomozeni broj je <span style='color: green;'>$i</span>.</p>";

    //Zadatak 2
    $n = 200;
    $m = 100;
    
    if($n < $m) {
        while($n < $m) {
            $n *= $n;
            $n++;
        } 
    } else {
        echo "<p>GRESKA!</p>";
    }
    // Zadatak 3
    $i = 30;

    while ($i <= 100) {
        $zadnja_cifra = $i % 10;
        $zbir_cifara = array_sum(str_split($i));

        if ($zadnja_cifra % 3 == 0 || $zadnja_cifra % 5 == 0 || $zbir_cifara % 4 == 0) {
            $i++;
        } else {
            echo "$i ";
            $i++;
        }
    }
    echo "<p></p>";
    echo "<p></p>";
    // Zadatak 4
    $a = 10;
    $b = 200;
    while($a <= $b) {
        $a *= 3;
        echo "$a ";
    } $a++;
    echo "<p></p>";

    // Zadatak 5
    $proizvod = 1;
    $zbir = 0;
    $i = 1;
    while($i <= 20) {
        $proizvod *= $i;
        $i++;
    } 
    
    while($i <= 30) {
        $zbir += $i;
        $i++;
    } 
    $rezultat = $proizvod - $zbir;
    echo $rezultat;
    echo "<p></p>";

    // Zadatak 6
    $n = 2;
    $m = 3;
    $suma = 0;
    while($n <= $m) {
        $suma += ($n ** 3);
        $n++;
    } 
    echo $suma;
    echo "<p></p>";

    //Zadatak 7 je isti kao zadatak 5, tako da se sad radi zadatak 8
    $i = 1; 
    $zbir = 0;
    while($i <= 30) {
        if($i % 9 == 0) {
            $zbir += $i;
        } $i++;
    } echo "$zbir";
    echo "<p></p>";

    // Zadatak 9 
    $a = 99.6; 
    $b = 5; 

    $ceo_deo = 0; 
    $ostatak = $a; 

    while ($ostatak >= $b) {
        $ostatak -= $b; 
        $ceo_deo++; 
    }
    echo "<p>Ceo deo je: $ceo_deo</p>";
    echo "<p>Ostatak je: $ostatak</p>";
    
    // Zadatak 10
    $n = 10;
    $alpha = -1;
    $beta = 1;
    $sum = 0;
    $i = 1;
    while($i <= $n) {
        $rez = sin($n + $i/$n);
        if($rez >= $alpha && $rez <= $beta) {
            $sum += $rez;
        } $i++;
    } echo "Suma: $sum";

    //Zadatak 11
    $n = 5;
    $i = 1;
    while($i <= $n) {
        $i++;
    } 
    if($n % 2 == 0) {
        echo "<img src='../bulb.jpg';>";
    } else {
        echo "<img src='../bulb.jpg';>";
    }
?>