<?php
//1. Zadatak
//a) while petlja
    $n = 2;
    $m = 4;
    $proizvod_1 = 1;
    $zbir_1 = 0;
    $krajnji_proizvod = 0;

    while($n <= $m) {
        if($n % 7 == 0 && $n % 3 != 0) {
            $proizvod_1 *= $n;
        }
        if($n % 3 == 0 && $n % 7 != 0) {
            $zbir_1 += $n;
        }
        $n++;
    }
    $krajnji_proizvod = $proizvod_1 - $zbir_1;
    echo "Rezultat je $krajnji_proizvod";

echo "<hr>";
//b) for petlja
    for($i = $n; $i <= $m; $i++) {
        if($n % 7 == 0 && $n % 3 != 0) {
            $proizvod_1 *= $n;
        }
        if($n % 3 == 0 && $n % 7 != 0) {
            $zbir_1 += $n;
        }
    }
    $krajnji_proizvod = $proizvod_1 - $zbir_1;
    echo "Rezultat je $krajnji_proizvod";
    echo "<hr>";
//2. Zadatak
//a)
    $n = 2;
    $m = 4;
    $zbir = 0;
    while($n <= $m) {
        if($n % 2 != 0) {
            $zbir += pow($n, 3);
        }
        $n++;
    }
    echo "Zbir je $zbir";
    echo "<hr>";
//b)
    $n = 2;
    $m = 4;
    $zbir = 0;
    for($i = $n; $n <= $m; $n++) {
        if($n % 2 != 0) {
            $zbir += pow($n, 3);
        }
    }
    echo "Zbir je $zbir";
?>
</body>
</html>