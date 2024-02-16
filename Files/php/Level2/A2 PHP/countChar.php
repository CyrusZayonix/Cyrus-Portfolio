<?php
function countChar($string, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == $char) {
            $count++; // als het teken overeenkomt met het gezochte teken, verhoog dan de telling
        }
    }
    return $count;
}

$string = "hello world"; // voorbeeldstring
$char = "l"; // voorbeeldteken
echo countChar($string, $char); // geeft 3 weer omdat er drie keer het teken "l" in de string voorkomt
?>