<?php

function maakVierkant() {
    $vierkant = '';
    for ($i = 1; $i <= 5; $i++) {
        
        echo "<br>";

        for ($j = 1; $j <= 5; $j++) {
            $vierkant .= '+';
        }
        $vierkant .= "\n"; // voeg een nieuwe regel toe na elke rij plussen
    }
    return $vierkant;
}

echo maakVierkant();

?>