<?php
    //Vi kan lage en matrise med deltakere i en konkurranse på denne måten
    //Disse kommer automatisk til å få nøkler fra 0 og oppover med mindre noe annet er oppgitt 
    //Petra er for eksempel gitt nøkkel nummer 17 
    $deltakere = array("Silje", "Johan", "Geir", "17" => "Petra");
    print_r($deltakere);

    //Her legger vi en deltaker på slutten av matrisen
    $deltakere[] = "Hallgeir";
    echo "<br>";
    print_r($deltakere);
    echo "<br>";

    //Dette skriver vi for å hente en verdi fra en av nøklene i matrisen, vi oppgir hvilken nøkkel som vist under
    echo "Hei " . $deltakere[0];
?>