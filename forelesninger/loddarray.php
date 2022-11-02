<?php
    $minelodd = array(1, 7, 77, 99, 100);

    if (array_search(rand(1, 100), $minelodd)) {
        echo "Gratulerer, du har vunnet med dette loddet!" . $minelodd[""];
    }
    else {
        echo "Lykke til neste gang.";
    }
?>