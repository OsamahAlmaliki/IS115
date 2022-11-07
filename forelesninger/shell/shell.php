<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>M9 - upload file</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Filename</th>
            <th>File type</th>
            <th>File size</th>
        </tr>

        <?php
        //$dir = "../kapittel2/"; //Other directory (example)
        $dir = "./"; //Same directory
        $fh = opendir($dir);

        //Iterate directory

        while($file = readdir($fh)) {
            echo "<tr>";
            echo "<td>" . $file . "</td>";
            echo "<td>" . filetype($dir . $file) . "</td>";
            echo "<td>" . filesize($dir . $file) . "</td>";
            echo "</tr>";
        }

        closedir($fh);
        ?>

    </table>
</body>
</html>