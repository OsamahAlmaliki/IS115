<?php
    if (isset($_REQUEST["registrer"])) {
        echo "Følgende informasjon er sendt gjennom skjemaet: <br>";
        foreach($_REQUEST as $felt => $skjemadata) {
            echo "Skjemaelement " . $felt . " inneholder " . $skjemadata . " <br>";
        }
    }

    //Dette er en funksjon for å vaske skjemadata
    function vask($var) {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }

    $fornavn = vask($_REQUEST["fnavn"]);

    if(filter_var($_REQUEST["epost"], FILTER_VALIDATE_EMAIL)) {
        echo $_REQUEST["epost"] . " har gyldig e-postadresse-format.";
    } else {
        echo $_REQUEST["epost"] . " har ikke gyldig e-postadresse-format.";
    }
?>

<html>
    <head>
        <title>Registrering av medlem</title>
    </head>
    <body>
        <pre>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                Fornavn: <input type="text" name="fnavn" placeholder="Fornavn"><br>
                Etternavn: <input type="text" name="enavn" placeholder="Etternavn"><br>
                E-post: <input type="email" name="epost" placeholder="E-post"><br>
                Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer"><br>
                Fødselsdato: <input type="date" name="fdato" value="<?php echo date("now"); ?>"><br>
                <input type="submit" name="registrer" value="Registrer">
            </form>
        </pre>
    </body>
</html>