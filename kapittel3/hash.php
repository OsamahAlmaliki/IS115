<!--printf funksjonen skrives på t
<?php
    $kode = substr(md5("en setning"), 4, 4);
    echo "$kode<br>";
    $tall = 123;
    printf("%s i titallssystemet er %b binært, %o oktalt og %X heksadesimalt. <br>", $tall, $tall, $tall, $tall);
    printf("%1\$s i titallssystemet er %1\$b binært, %1\$o oktalt og %1\$Xheksadesimalt.", $tall);
?>