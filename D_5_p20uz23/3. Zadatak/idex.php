<?php

    $pera = 1000;
    $mika = 500;
    $kusur = 200;
    $dzemper = ($pera + $mika + $kusur) / 2;
    $kusurPera = $pera - $dzemper;
    $kusurMika = $mika - $dzemper;

    echo "<hr>";
    echo "Kusur koji Pera dobije je " . $kusurPera;
    echo "<hr>";

    echo "<hr>";
    echo "Kusur koji Mika dobije je " . $kusurMika;
    echo "<hr>"
?>