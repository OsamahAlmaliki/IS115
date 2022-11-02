<?php
    //Barneklasser kan overstyre metoder som blir definert i foreldreklassene
    class Bruker {
        var $fnavn;
        var $enavn;
        var $bnavn;

        function fullt_navn() {
            return $this->fnavn . " " . $this->enavn;
        }

        function bruker_navn() {
            return $this->bnavn;
        }
    }

    class Medlem extends Bruker {

    }

    class Leder extends Bruker { //Her overstyrer "Leder" klassen "fullt_navn()" metoden
        function fullt_navn() {
            return $this->fnavn . " " . $this->enavn . " (leder) <br>";
        }
    }

    $b = new Bruker;
    $b->fnavn = "Osamah";
    $b->enavn = "Al-maliki";
    $b->bnavn = "osme";

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
    echo $n->fullt_navn() . "<br>"; //Når metoden blir kalt her så blir den overstyrt av den i Leder-klassen
?>