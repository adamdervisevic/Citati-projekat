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
        $zbirUlaganjaDizel = 0;
        $zbirUlaganjaBenzin = 0;
        $brojDizel = 0;
        $brojBenzin = 0;
    
        foreach ($automobili as $auto) {
            $tip = $auto->getTipGoriva();
            $ulozeno = $auto->ulozenoPara();
            if($tip == "DIZEL") {
                $zbirUlaganjaDizel += $ulozeno;
                $brojDizel++;
            } else if($tip == "BENZIN") {
                $zbirUlaganjaBenzin += $ulozeno;
                $brojBenzin++;
            }
        }
        $prosecnaUlaganjaDizel = $zbirUlaganjaDizel / $brojDizel;
        $prosecnaUlaganjaBenzin = $zbirUlaganjaBenzin / $brojBenzin;
        
    
        if ($prosecnaUlaganjaDizel < $prosecnaUlaganjaBenzin) {
            $tip = "DIZEL";
        } else {
            $tip = "BENZIN";
        } 
        return $tip;
    }
    maksUlozeno($automobili);
    echo "<br>";
    echo "<p>Tip automobila s manjim ulaganjem na kupovinu goriva: " . boljiTip($automobili) . "</p>";
    ?>