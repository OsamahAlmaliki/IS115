<?php
    //Passord med md5()
    $passord = md5("abcd");
    //echo $passord;

    $password = password_hash("abcd", PASSWORD_DEFAULT);
    echo $password;

    $db_hash = '$2y$10$5GIxusdLsX0gRb30Npvqqu3a.hBhpmyScd8XQjUzcbutenV3x4e4W'; //Kan ikke bruke "" denne apostroffen fordi da blir deler av hashen til variabler
    echo "<br>";
    if (password_verify("abcd", $db_hash)) { //Vi kan bruke denne i et innlogginsskjema
        echo "Det stemmer!";
    }
    else {
        echo "Det stemmer ikke";
        //header("Location: http://www.vg.no"); exit(); //Her skriver man exit sånn at koden som kommer videre ikke kjører
    }
?>