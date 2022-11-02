<?php
    class Bruker {
        var $fnavn;
        var $enavn;
        var $bnavn;

        final function fullt_navn() { //Her tillater vi ikke overstyring av metoden "fullt_navn()" ved å bruke "final"
            return $this->fnavn . " " . $this->enavn;
        }

        function bruker_navn() {
            return $this->bnavn;
        }
    }

    class Medlem extends Bruker {

    }

    class Leder extends Bruker {

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
    echo $n->fullt_navn() . ", brukernavnet til Maha er: " . $n->bruker_navn() . "<br>";

?>