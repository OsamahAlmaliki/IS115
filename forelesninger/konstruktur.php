<?php
    class Bruker {
        public static $ant_brukere = 0;
        public function __construct() {
        self::$ant_brukere++;
        }
    }

    $b1 = new Bruker;

    echo Bruker::$ant_brukere;

    $b2 = new Bruker;

    echo Bruker::$ant_brukere;
?>