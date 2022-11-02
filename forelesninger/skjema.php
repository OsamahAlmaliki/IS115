<?php
    if(isset($_REQUEST["registrer"])) {
        echo "Innhold i skjemaet fra bruker er: <br>";
        echo "Navn: " . $_REQUEST["fnavn"] . " " . $_REQUEST["enavn"] . "<br>";
        echo "E-post: " . $_REQUEST["epost"] . "<br>";
        echo "Tlf: " . $_REQUEST["tlf"] . "<br>";
        echo "Fødselsdato: " . $_REQUEST["fdato"] . "<br>";

        foreach($_REQUEST as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
    }
?>
<html>
    <head>
        <title>Registrering av bruker</title>
    </head>
    <body>
        <pre>
            <form method="post" action="">
            Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" required><br>
            <?php require_once("include.inc.php") ?>
            Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
            E-post: <input type="email" name="epost" placeholder="E-post"><br>
            Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" value="<?php if(isset($_REQUEST["tlf"])) echo $_REQUEST["tlf"]; ?>"><br>
            Fødselsdato: <input type="date" name="fdato" value="<?php date("now"); ?>"><br>
            <input type="submit" name="registrer" value="Registrér">
            </form>
        </pre>
    </body>
</html>