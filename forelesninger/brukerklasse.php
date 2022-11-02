<?php
    class Bruker {
        var $brukerid;
        public $fnavn;
        public $enavn;
        var $epost;
        var $tlf;
        protected $adresse;
    }

    class Utleier extends Bruker {
        public $annonse;
    }

    class Student extends Bruker {
        public $studentnummer;
    }
?>