<?php
    session_start();
    $_SESSION["user"]["id"] = 1482;
    $_SESSION["user"]["auth"] = 3;
    $_SESSION["user"]["firstname"] = "Osamah";
    $_SESSION["user"]["logged_in"] = true;

    echo $_SESSION["user"]["id"];

    unset($_SESSION["user"]["logged_in"]); 
    //session_destroy(); //Kan kjøres når bruker logger ut

    $_SESSION["user"]["brukernavn"] = "osme";

    print_r($_SESSION);
?>