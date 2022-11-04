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
    echo $b->admin; //Ikke tillatt
    echo $b->admin = true; //Ikke tillatt
    //echo $b->admin(); //Ikke tillatt
    echo $b->fullt_navn(); //Tillatt

    $m = new Medlem;
    $m->fnavn = "Arjela";
    $m->enavn = "Hamiti";
    $m->bnavn = "arjole";

    $n = new Leder;
    $n->fnavn = "Maha";
    $n->enavn = "Haseeb";
    $n->bnavn = "Maha78";

    echo $b->fullt_navn() . "<br>";
    echo $m->fullt_navn() . "<br>";
    echo $n->fullt_navn() . "<br>";
?>