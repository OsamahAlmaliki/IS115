<?php
    class Bruker {
        public $fnavn;
        public $enavn;
        protected $bnavn;
        private $admin;

        function fullt_navn() {
            return $this->fnavn . " " . $this->enavn;
        }

        protected function tilgang() {
            return $this->admin() ? "Admin" : "Medlem";
        }

        private function admin() { //Når vi bruker en synlighetsmodifikator må vi sette dette foran "function"
            return $this->admin === true;
        }
    }

    class Medlem extends Bruker {

    }

    class Leder extends Bruker {

    }

    $b = new Bruker;
    $b->fnavn = "Osamah";
    $b->enavn = "Al-maliki";

    $m = new Medlem;
    //echo $m->admin; //Egenskapen er utilgjengelig og resulterer i feilmelding

    $m->admin = true;
    $m->fnavn = "Arjela";
    $m->enavn = "Hamiti";

    $n = new Leder;
    $n->fnavn = "Maha";
    $n->enavn = "Haseeb";

    echo $b->fullt_navn() . "<br>";
    echo $m->fullt_navn() . "<br>";
    echo $n->fullt_navn() . "<br>";

    echo $m->admin;
?>