<!doctype html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>M9 - read file</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Filename</th>
            <th>File type</th>
            <th>File size</th>
        </tr>

        <?php
            $dir = "../m1/";
            $fh = opendir($dir); // fh = file handle or "pointer"

            /* Iterate file directory */
            while($file = readdir($fh)) 
            {
                echo "<tr>";
                echo "<td><a href=\"" . $dir . $file . "\">" . $file . "</a></td>";
                echo "<td>" . filetype($dir . $file) . "</td>";
                echo "<td>" . filesize($dir . $file) . "</td>";
                echo "</tr>";
            }
            
            closedir($fh);
        ?>

    </table>
</body>

</html>