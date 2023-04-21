<?php
    $farenhajt = 100;
    $celzijus = ($farenhajt - 32) * 5 / 9;
    $kelvin = $celzijus + 273.15;
    
    echo "<hr>";
    echo "Temperatura u Kelvinima je: " . $kelvin;
    echo "<hr>"; 

    $kelvin = 100;
    $farenhajt = ($kelvin - 273.15) * 9/5 + 32;
    
    echo "<hr>";
    echo "Temperatura u Fatanhajtima je: " . $farenhajt;
    echo "<hr>";

?>