<?php

function evenDag() {
    $day = date('j');
    return ($day % 2 == 0);
}

if (evenDag()) {
    echo "De huidige dag is een even getal!";
} else {
    echo "De huidige dag is een oneven getal.";
}

?>