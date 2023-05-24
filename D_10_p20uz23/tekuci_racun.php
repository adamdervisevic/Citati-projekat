<?php

    class TekuciRacun {
        
        private $BrojRacuna;
        private $Stanje;
        private $Kurs;
        
        public function getBrojRacuna(){
            return $this->BrojRacuna;
        }
        
        public function getStanje() {
            return $this->Stanje;
        }

        public function getKurs() {
            return $this->Kurs;
        }

        public function setBrojRacuna($br) {
            $this->BrojRacuna = $br;
        }

        public function setStanje($s) {
            $this->Stanje = round($s, 2);
        }

        public function setKurs($k) {
            $this->Kurs = round($k, 4);
        }

        public function uplati($iznos, $valuta) {
            if($valuta == "RSD") {
                $this->Stanje = round(($this->Stanje + $iznos),2);
                return $this->Stanje;
            } elseif($valuta == "EUR") {
                $this->Stanje = round(($this->Stanje + $iznos * $this->Kurs),2);
                return $this->Stanje;
            } else {
                return "Datu valutu ne mozemo prihvatiti, pokusajte ponovo!";
            }
        }   

        public function isplati($iznos, $valuta) {
            if ($valuta == "RSD") {
                if ($iznos <= $this->Stanje) {
                    $this->Stanje = round(($this->Stanje - $iznos), 2);
                    return true;
                } else {
                    echo "Nemate dovoljno sredstava na računu za isplatu.";
                    return false;
                }
            } elseif ($valuta == "EUR") {
                if ($iznos <= ($this->Stanje / $this->Kurs)) {
                    $this->Stanje = round(($this->Stanje - ($iznos * $this->Kurs)), 2);
                    return true;
                } else {
                    echo "Nemate dovoljno sredstava na računu za isplatu.";
                    return false;
                }
            } else {
                echo "Datu valutu ne možemo prihvatiti, pokušajte ponovo!";
                return false;
            }
        } // ispravljen je deo za euro

        public function stanje() {
            $day = date("Y/m/d");
            $vreme = date("H:i:s");
            $ukupnostanje = round($this->Stanje, 2);
            return "Stanje na racunu, " .$this->BrojRacuna . " na dan " . $day ." ". $vreme . " je " . $this->Stanje . ".";
        }
    }

    $a1 = new TekuciRacun();
    $a1->setKurs(117.28);
    $a1->uplati(200, "EUR") . "<br>";
    echo $a1->stanje() . "<br>";
    echo "<hr>";

    $b = new TekuciRacun();
    $b->setKurs(117.28);
    $b->setStanje(3000);
    echo $b->isplati(10, "EUR") . "<br>";
    echo $b->stanje() . "<br>";
    echo "<hr>";

    $c = new TekuciRacun();
    $c->setKurs(117.28);
    $c->uplati(100, "RSD");
    echo $c->isplati(10, "EUR") . "<br>";
    echo $c->stanje() . "<br>";










    
?>