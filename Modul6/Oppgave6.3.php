<?php
    class Bruker {
        var $fnavn; //Fornavn
        var $enavn; //Etternavn
        protected $bnavn; //Brukernavn
        protected $rdato; //Registreringsdato

        public function __construct($fnavn, $enavn) {
            $this->fnavn = $fnavn;
            $this->enavn = $enavn;
            $this->bnavn = self::RandomBrukernavn();
            $this->rdato = date("d.m.y H:i:s");
        }

        function RandomBrukernavn() { //Genererer tilfeldig brukernavn ved hver iterasjon
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randstring = '';
            for ($i = 0; $i < 6; $i++) {
                $randstring .= $characters[rand(0, strlen($characters))];
            }
            return $randstring;
        }

        function hentBrukernavn() { //Henter brukernavn
            return $this->bnavn;
        }

        function __destruct() {
            return $this->bnavn; //Henter direkte brukernavn
        }
    }

    class Student extends Bruker {
        var $snummer; //Studentnummer

        public function hentStudentInfo() {
            $informasjon = array(
                "Fornavn"=>$this->fnavn,
                "Etternavn"=>$this->enavn,
                "Brukernavn"=>$this->bnavn,
                "Registrert dato"=>$this->rdato
            );

            foreach($informasjon as $nøkkel => $verdi) {
                echo "$nøkkel: $verdi <br>";
            }
        }
    }
    echo "Student 1: <br>";
    $student1 = new Student("Osamah", "Al-maliki");
    $brukernavn = $student1->hentBrukernavn();
    $student1->hentStudentInfo();

    echo "<br>";

    echo "Student 2: <br>";
    $student2 = new Student("Ole", "Doffen");
    $brukernavn2 = $student2->hentBrukernavn();
    $student2->hentStudentInfo();

    echo "<br>";

    $slettet1 = $student1->__destruct();
    $slettet2 = $student2->__destruct();

    $slettet = array($slettet1, $slettet2);

    echo "De slettede brukerne er: ";
    print_r($slettet);
?>