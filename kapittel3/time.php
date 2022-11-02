<!--Forskjellige formateringer på dato og tid-->
<?php
    //echo time() + 24*60*60;

    $idag = date("F j, Y, g:i a"); //March 31, 2021, 5:16 pm
    $idag = date("Y-m-d H:i:s"); //2021-03-21 17:16:00 (MYSQL tidformat)
    $idag = date("d.m.Y k\l. H:i"); //31.03.2021 kl. 17:16
    $idag = date("d.m.Y k\l. H:i", time() + 3600); //21.03.2021 kl. 18:16

    setlocale(LC_TIME, "no_NO", "nor_Nor");
    // echo strftime("%e. %B"); // 31. mars
    // Språket forblir engelsk, så vi må gjøre noe med dette dette gjøres ved å putte ', "nor_nor"' etter "no_NO"
    echo strftime("%A den %e. %B"); //Onsdag den 31. mars
?>