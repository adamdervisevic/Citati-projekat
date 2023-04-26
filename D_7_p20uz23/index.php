<?php
// 1. Zadatak
    $sum = 0;
    $num = $br = 101;
    while($num != 0) {
        $sum += $num %10;
        $num = $num / 10;
    }
    if($sum == $br) {
        echo "<p>Zbir cifara je: <span style='border: 1px solid orange;'>$sum</span></p>";
    } elseif($sum < $br) {
        echo "<p>Zbir cifara je: <span style='border: 1px solid blue;'>$sum</span></p>";
    } else {
        echo "<p>Zbir cifara je: $sum</p>";
    }

    // 2. Zadatak
    $num = 15; 
    $count = 0;

    for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0 && $i % 3 == 0 && $i % 2 != 0) {
        $count++;
    }
}
    echo "Broj delioca koji su deljivi sa 3 i neparni:  $count";


    // 3. Zadatak 
    $n = 4;
    $prost = true;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) { 
        $prost = false;
        break;
        }
    }
    
    if ($prost) {
        echo "<p>$n je prost broj.</p>";
    } else {
        echo "<p>$n nije prost broj.</p>";
    }
?>