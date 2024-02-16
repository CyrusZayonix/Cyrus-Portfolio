<?php

function getPHPosInfo() {
    $info = '';
    $info .= 'Besturingssysteem: ' . PHP_OS . "\n";
    $info .= 'Servernaam: ' . $_SERVER['SERVER_NAME'] . "\n";
    $info .= 'PHP-versie: ' . phpversion() . "\n";
    $info .= 'Server-software: ' . $_SERVER['SERVER_SOFTWARE'] . "\n";
    $info .= 'IP-adres: ' . $_SERVER['SERVER_ADDR'] . "\n";
    $info .= 'Webserver-protocol: ' . $_SERVER['SERVER_PROTOCOL'] . "\n";
    return $info;
}

echo getPHPosInfo();

?>