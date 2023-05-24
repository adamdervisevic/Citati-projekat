<?php

    class Autobus {
        private $registarskiBroj;
        private $brojSedista;


        public function __construct($registarskiBroj, $brojSedista) {
            $this->setRegistarskiBroj($registarskiBroj);
            $this->setBrojSedista($brojSedista);
        }

        public function getRegistarskiBroj() {
            return $this->registarskiBroj;
        }
        public function getBrojSedista() {
            return $this->brojSedista;
        }

        public function setRegistarskiBroj($registarskiBroj) {
            $this->registarskiBroj = $registarskiBroj;
        }
        public function setBrojSedista($brojSedista) {
            $this->brojSedista = $brojSedista;
        }

        public function ispis(){
            echo "<p>Registarski broj: " . $this->registarskiBroj . ", Broj sedista: " .$this->brojSedista . "</p>";
        }

        
    }

    $autobusi = [
        $a1 = new Autobus ("NI099PE", 48),
        $a2 = new Autobus ("BO944RT", 30),
        $a3 = new Autobus ("NI654EE", 52)
    ];

    function ukupnoSedista($autobusi) {
        $ukupno = 0;
        foreach($autobusi as $autobus) {
            $ukupno += $autobus->getBrojSedista();
        } return $ukupno;
    }

    function maksSedista($autobusi) {
        $maxBroj = 0;
        $autobusMax = 0;
        
        foreach($autobusi as $autobus) {
            if($autobus->getBrojSedista() > $maxBroj) {
                $maxBroj = $autobus->getBrojSedista();
                $autobusMax = $autobus;
            }
        }
        if($autobusMax) {
            echo "<p>Autobus sa najviše sedišta: Registarski broj: " . $autobusMax->getRegistarskiBroj() . ", Broj sedišta: " . $autobusMax->getBrojSedista() . "</p>";
        } else {
            echo "Greska";
        }
    }

    function ljudi($brojLjudi, $autobusi) {
        $ukupnoSedista = ukupnoSedista($autobusi);
        if($brojLjudi <= $ukupnoSedista) {
            return true;
        } else {
            return false;
        }
    }

    echo ukupnoSedista($autobusi);
    echo maksSedista($autobusi);
    
    $brojLjudi = 80;
    if (ljudi($brojLjudi, $autobusi)) {
    echo "Moguće je smestiti " . $brojLjudi . " ljudi u autobuse.";
    } else {
    echo "Nije moguće smestiti " . $brojLjudi . " ljudi u autobuse.";
}













?>