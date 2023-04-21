<?php

    $p = 2500;
    $m = 2500;
    $k = 500;
    $dz = ($p + $m - $k) / 2;
    $k_p = $p - $dz;
    $k_m = $m- $dz;

    echo "<hr>";
    echo "Kusur koji Pera dobije je " . $k_p;
    echo "<hr>";

    echo "<hr>";
    echo "Kusur koji Mika dobije je " . $k_m;
    echo "<hr>"
?>