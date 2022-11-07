<?php
    class Bruker {
        protected $fnavn;
        protected $enavn;
        protected $email;
        static $brukere = array(); 

        public function __construct($fnavn, $enavn, $email) {
            $this->fnavn = $fnavn;
            $this->enavn = $enavn;
            $this->email = $email;
        }
    }

    class Chat extends Bruker {
        protected $rom;

        function hentChat() {
            $chatRom = array(
                    "Navn" => $this->fnavn . $this->enavn,
                    "Melding" => $this->innhold
            );

            foreach($chatRom as $nøkkel => $verdi) {
                echo "$nøkkel: $verdi <br>";
            }
        }
    }

    class Melding {
        protected $tilBruker;
        protected $fraBruker;
        protected $innhold;
        protected $tidsPunkt;

        public function __construct($fraBruker, $innhold) {
        }

        function sendMelding($tilBruker, $innhold) {

        }

        function seMelding() {
            return $this->fraBruker;
            return $this->innhold;
            return $this->tidsPunkt;
        }

    }


?>