<?php
    $raw = '05.12.2000';
    $dateStatic = DateTime::createFromFormat('d. m. Y', $raw);
    echo 'Start date: ' . $dateStatic->format('Y-m-d') . "\n";
?>