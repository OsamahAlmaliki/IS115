<?php
    function areal($r) {
        echo pi() * $r * $r;
    }

    echo areal(5);



    $str = "Reven rasker over isen";
    echo strlen($str);
    //Hvis vi ønsker å bruke lengden over et annet sted i teksten kan vi lage en variabel for det som under
    $len = strlen($str);


    $str = strtolower($str);
    echo $str . "<br>";

    $str = ucwords($str);
    echo $str . "<br>";

    $str = strtoupper($str);
    echo $str . "<br>";

    $setning = "Web Database Applications with PHP and MySQL: Building Effective Database-Driven Web Sites";
    echo strlen($setning);

    $setning = strtolower($setning);

    $setning = ucfirst($setning);

    echo "<br>" . $setning;

    //En enklere løsning, funksjoner kjører kode innerst i parenteser og utover

    echo ucfirst(strtolower($setning));


    $crypto = md5($str);
    echo "K1" . substr($crypto, rand(0, 10), 10);
    echo chr(90);

?>