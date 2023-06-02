<?php
    require_once "Student.php";

    class SamofinansirajuciStudent extends Student {
        protected $prijavljeniESPB;

        public function getPrijavljeniESPB() {
            return $this->prijavljeniESPB;
        }
        public function setPrijavljeniESPB($pe) {
            $this->prijavljeniESPB = $pe;
        }

        public function __construct($i, $oe, $p, $pe) {
            parent::__construct($i, $oe, $p);
            //promenio sam iz < u >= i > 60 u <= 60 i ovaj deo za 300
            // ili da je ($pe + $oe) <= 300) za ovo nisam siguran
            if($pe >= 35 && $pe <= 60 || ($pe + $oe) == 300) {
                echo "Neispravan broj ESPB bodova";
            } else {
                $this->setPrijavljeniESPB($pe);
            }
            
        }

        public function skolarina() {
            if($this->getProsecnaOcena() < 8) {
                return 1900 * $this->getPrijavljeniESPB();
            } else {
                return 1600 * $this->getPrijavljeniESPB();
            }
        }
        
        public function cenaPrijaveIspita() {
            return 400;
        }

        
    }


?>