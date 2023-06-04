<?php

    class BudzetskiStudent extends Student {
        public function __construct($i, $oe, $p) {
            parent::__construct($i, $oe, $p);
        }

        public function skolarina() {
            return (300 - $this->osvojeniESPB) * 2000;
        }

        public function cenaPrijaveIspita() {
            if($this->osvojeniESPB == 60 || $this->osvojeniESPB == 120 || $this->osvojeniESPB == 180 || $this->osvojeniESPB == 240 || $this->osvojeniESPB == 300) {
                return 0;
            } else {
                return 100;
            }
        }
    }


?>