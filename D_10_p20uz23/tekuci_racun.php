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
            if($iznos <= $this->Stanje && $valuta == "RSD") {
                $this->Stanje = round(($this->Stanje - $iznos),2);
                return true;
            } elseif($iznos < $this->Stanje && $valuta == "EUR") {
                $this->Stanje= round((($this->Stanje - ($iznos * $this->Kurs))),2);
                return false;
            } else {
                return "Nemate dovoljno sredstava na racunu za isplatu.";
            }
        }

        public function stanje() {
            $day = date("Y/m/d");
            $vreme = date("H:i:s");
            $ukupnostanje = round($this->Stanje, 2);
            return "Stanje na racunu, " .$this->BrojRacuna . " na dan " . $day ." ". $vreme . " je " . $this->Stanje . ".";
        }
    }

    $a1 = new TekuciRacun();
    $a1->setKurs(117.28) . "<br>";
    echo $a1->uplati(200, "EUR") . "<br>";
    echo $a1->stanje() . "<br>";

    $b = new TekuciRacun();
    $b->setKurs(117.28) . "<br>";
    $b->setStanje(3000) . "<br>";
    echo $b->isplati(300, "RSD") . "<br>";
    echo $b->stanje();
    

    $c = new TekuciRacun();
    $c->setKurs(117.28) . "<br>";
    $c->uplati(300, "RSD") . "<br>";
    echo $c->isplati(4000, "RSD") . "<br>";
    $c->stanje() . "<br>";










    
?>