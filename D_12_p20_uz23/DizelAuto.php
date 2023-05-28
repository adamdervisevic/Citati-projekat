    <?php

    require_once "Automobil.php";

    class DizelAuto extends Automobil {
        protected $cenaDizela;

        public function __construct($n, $pk, $p, $cd) {
            parent::__construct($n, "DIZEL", $pk, $p);
            $this->setCenaDizela($cd);
        }

        public function getCenaDizela() {
            return $this->cenaDizela;
        }
        public function setCenaDizela($cd) {
            $this->cenaDizela = $cd;
        }

        public function ulozenoPara() {
            $potrosenoGorivo = ($this->getPredjenoKilometara() / 100) * $this->getPotrosnja();
            return $potrosenoGorivo * $this->getCenaDizela();
        }
        
    }
    ?>