<?php

function getMax($array) {
    $max = $array[0]; // neem de eerste waarde als de startwaarde voor het maximum
    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value; // als de waarde groter is dan het huidige maximum, update dan het maximum
        }
    }
    return $max;
}

$lijst = array(9, 6, 4, 23, 4); // voorbeeldlijst van integers
echo getMax($lijst); // geeft 11 weer omdat dit de grootste waarde in de lijst is

?>