<?php
    class Bruker {
        var $epost;
        public $fnavn;
        public $enavn;
        protected $bnavn;
        private $admin;

        public function fullt_navn() {
        return $this->fnavn . " " . $this->enavn;
        }

        protected function tilgang() {
        return $this->admin() ? "Admin" : "Medlem";
        }
        
        private function admin() {
        return $this->admin === true;
        }
    }

    $b = new Bruker;

    $b->navn = "Silje Johansen"; // Setter verdi til attributt

    echo $b->navn; // Skriver ut verdi

    $b->sett_leder(true); // Metodekall
?>