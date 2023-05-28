    <?php

    require_once "Automobil.php";

    class BenzinAuto extends Automobil {
        protected $cenaBenzina;

        public function __construct($n, $pk, $p, $cb) {
            parent::__construct($n, "BENZIN", $pk, $p);
            $this->setCenaBenzina($cb);
        }

        public function getCenaBenzina() {
            return $this->cenaBenzina;
        }
        public function setCenaBenzina($cb) {
            $this->cenaBenzina = $cb;
        }

        public function ulozenoPara() {
            $potrosenoGorivo = ($this->getPredjenoKilometara() / 100) * $this->getPotrosnja();
            return $potrosenoGorivo * $this->getCenaBenzina();
        }
    }
    ?>