<?php
    $haystack = "lorem ipsum dium kium rium";
    $needle = "ipsum";
    if (str_starts_with($haystack, 'ipsum' )) {
        echo "$haystack starts with ipsum";
    } 

    else echo "$haystack does not start with ipsum";
?>