<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

for ($i = 0; $i <= 100; $i++) {
    $lettre = $str[$i]; 
    if ($lettre === 'a' or $lettre === 'e' or $lettre === 'i' or $lettre === 'o' or $lettre === 'u' or $lettre === 'y' or $lettre === 'A' or $lettre === 'E' or $lettre === 'I' or $lettre === 'O' or $lettre === 'U' or $lettre === 'Y'){
        echo "$lettre";
    }   
}
?>