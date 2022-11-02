<?php
    
    $dato1 = new DateTime("2000-12-05");
    $dato2 = new DateTime("2021-12-05");
    $diff = $dato1->diff($dato2);

    $dato3 = new DateTime("now");
    $diffe = $dato2->diff($dato3);

    echo $diff->format("%y") . " år og " . $diffe->format("%a") . " dager.";

    //Telle fra siste års 05.12.XXXX(må finne en måte å gjøre årstall dynamisk) til nåværende dag

    //if ($diffe->format("%a") > 365) {
    //    $dato2 = ++1;
    //}

?>