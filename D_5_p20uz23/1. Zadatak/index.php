<?php
    $farenhajt = 100;
    $celzijus = floor(($farenhajt - 32) * 5 / 9);
    $kelvin = $celzijus + 273.15;
    
    echo "<hr>";
    echo "Temperatura u Celzijusima je: " . $celzijus;
    echo "<hr>"; 

    echo "<hr>";
    echo "Temperatura u Kelvinima je: " . $kelvin;
    echo "<hr>";   
?>