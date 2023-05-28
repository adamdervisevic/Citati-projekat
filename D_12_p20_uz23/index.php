    <?php

    require_once "Automobil.php";
    require_once "DizelAuto.php";
    require_once "BenzinAuto.php";

    $automobili = [
        $d1 = new DizelAuto("Audi", 150000, 5.5, 1.2),
        $d2 = new DizelAuto("BMW", 200000, 6.2, 1.1),
        $d3 = new DizelAuto("Mercedes", 180000, 5.8, 1.3),
        $b1 = new BenzinAuto("Toyota", 120000, 7.5, 1.5),
        $b2 = new BenzinAuto("Honda", 160000, 8.2, 1.4),
        $b3 = new BenzinAuto("Ford", 140000, 7.8, 1.3)
    ];

    function maksUlozeno($automobili) {
        $maxUlozeno = 0;
        $maxAuto = 0;

        foreach ($automobili as $auto) {
            $ulozeno = $auto->ulozenoPara();
            if ($ulozeno > $maxUlozeno) {
                $maxUlozeno = $ulozeno;
                $maxAuto = $auto;
            }
        }

        if ($maxAuto) {
            echo "<p>Automobil s najviše uloženih para:</p>";
            $maxAuto->ispis();
            echo "Uloženo para: " . $maxUlozeno . "<br>";
        } else {
            echo "<p>Nema dostupnih automobila.</p>";
        }
    }

    function boljiTip($automobili) {
        $prosecnaUlaganjaDizel = 0;
        $prosecnaUlaganjaBenzin = 0;
        $brojDizel = 0;
        $brojBenzin = 0;
    
        foreach ($automobili as $auto) {
            if (isDizelAuto($auto)) {
                $prosecnaUlaganjaDizel += $auto->ulozenoPara();
                $brojDizel++;
            } elseif (isBenzinAuto($auto)) {
                $prosecnaUlaganjaBenzin += $auto->ulozenoPara();
                $brojBenzin++;
            }
        }
    
        if ($brojDizel > 0) {
            $prosecnaUlaganjaDizel = $prosecnaUlaganjaDizel / $brojDizel;
        } else {
            $prosecnaUlaganjaDizel = 0;
        }
        
        if ($brojBenzin > 0) {
            $prosecnaUlaganjaBenzin = $prosecnaUlaganjaBenzin / $brojBenzin;
        } else {
            $prosecnaUlaganjaBenzin = 0;
        }
    
        if ($prosecnaUlaganjaDizel < $prosecnaUlaganjaBenzin) {
            $tip = "DIZEL";
        } elseif ($prosecnaUlaganjaBenzin < $prosecnaUlaganjaDizel) {
            $tip = "BENZIN";
        } else {
            $tip = "Jednako";
        }
    
        return $tip;
    }
    
    function isDizelAuto($auto) {
        return get_class($auto) === 'DizelAuto';
    }
    
    function isBenzinAuto($auto) {
        return get_class($auto) === 'BenzinAuto';
    }
    
    maksUlozeno($automobili);
    echo "<br>";
    echo "<p>Tip automobila s manjim ulaganjem na kupovinu goriva: " . boljiTip($automobili) . "</p>";
    ?>