<?php

    class Automobil {
        protected $naziv;
        protected $tipGoriva;
        protected $predjenoKilometara;
        protected $potrosnja;

        public function __construct($n, $tg, $pk, $p){
            $this->setNaziv($n);
            $this->setTipGoriva($tg);
            $this->setPredjenoKilometara($pk);
            $this->setPotrosnja($p);
        }

        public function getNaziv(){
            return $this->naziv;
        }
        public function setNaziv($n) {
            $this->naziv = $n;
        }

        public function getTipGoriva() {
            return $this->tipGoriva;
        }
        public function setTipGoriva($tg){
            $this->tipGoriva = $tg;
        }

        public function getPredjenoKilometara() {
            return $this->predjenoKilometara;
        }
        public function setPredjenoKilometara($pk) {
            $this->predjenoKilometara = $pk;
        }

        public function getPotrosnja() {
            return $this->potrosnja;
        }
        public function setPotrosnja($p) {
            $this->potrosnja = $p;
        }

        public function ispis(){
            echo "Automobil: " . $this->getNaziv(). "<br>";
            echo "Tip goriva: " . $this->getTipGoriva() . "<br>";
            echo "Predjeno kilometara: " . $this->getPredjenoKilometara() . "<br>";
            echo "Potrosnja: " . $this->getPotrosnja() . " litara. <br>";
        }
    }


    $a = new Automobil("Skoda", "benzin", 250500, 6);
    $a->ispis();

?>