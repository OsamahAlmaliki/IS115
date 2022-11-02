<html>
    <head>
        <title>While tabell</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Multiplikand</th>
                    <th>Multiplikator</th>
                    <th>Produkt</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; while($i++ <= 9) { ?>
                    <tr>
                        <td>9</td>
                        <td><?php echo $i; ?></td>
                        <td><?= $i*9 ?></td> <!-- tegnet "?=" brukes for å korte ned PHP koden-->
                    </tr>
                <?php } ?> <!-- Dette er for å lukke parentese som ligger overordnet innholdet i tabellen-->
            </tbody>
        </table>
    </body>
</html>