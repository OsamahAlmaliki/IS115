<?php
    class Billy { //Forelder
        var $farge;

        function finn_farge() {
            return $this->farge . "<br>";
        }
    }

    class Suvvy extends Billy { //Første generasjon

    }

    class Sport extends Suvvy { //Andre generasjon
        var $rekkevidde;

        function finn_rekkevidde() {
            return $this->rekkevidde . "<br>";
        }
    }

    var_dump(get_parent_class("Suvvy")); //Returnerer navnet på forelder til Suvvy-klassen

    var_dump(is_subclass_of("Suvvy", "Billy")); //Første parameter ("Suvvy") tar klassen vi ønsker å sjekke tilknytning til i den andre parameteren ("Billy") og returnerer boolsk

    var_dump(class_parents("Sport")); //Returnerer alle foreldreklasser til parameteret ("Sport")
?>