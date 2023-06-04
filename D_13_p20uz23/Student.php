<?php

    abstract class Student {
        protected $ime;
        protected $osvojeniESPB;
        protected $prosecnaOcena;

        public function getIme(){
            return $this->ime;
        }
        public function setIme($i){
            $this->ime = $i;
        }
        
        public function getOsvojeniESPB(){
            return $this->osvojeniESPB;
        }
        public function setOsvojeniESPB($oe){
            $this->osvojeniESPB = $oe;
        }
    
        public function getProsecnaOcena(){
            return $this->prosecnaOcena;
        }
        public function setProsecnaOcena($p){
            $this->prosecnaOcena = $p;
        }

        public function __construct($i, $oe, $p){
            $this->setIme($i);
            $this->setOsvojeniESPB($oe);
            $this->setProsecnaOcena($p);
        }

        public function ispis(){
            echo "<p>Ime: " .$this->ime . "</p>";
            echo "<p>Broj ESPB: " . $this->osvojeniESPB. "</p>";
            echo "<p>Prosek: " .$this->prosecnaOcena. "</p>";
        }

        abstract public function skolarina();
        abstract public function cenaPrijaveIspita();
    }

    

?>