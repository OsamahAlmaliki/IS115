<?php
    //echo $_REQUEST["QUERY_STRING"];
    //phpinfo();

    //print_r($_GET);

    //echo $_REQUEST["fornavn"] . " " . $_REQUEST["etternavn"];

    //Cookies

    setcookie("butikk", "Nille", time() + 5184000, "/"); // 60 dager (60*60*24*60)

    echo $_COOKIE["butikk"];

    //Slette
    setcookie("butikk", "Nille", time() - 5184000, "/"); // 60 dager (60*60*24*60)
?>