<?php

$tableau = array (200, 204, 173, 98, 171, 404, 459);

for ($x = 1; $i <= 100; $x++) {
    $nomb = $tableau[$x-1];
    if (isset($nomb)){
        if ($nomb % 2 == 0){
            echo "$nomb est paire<br>";
        }
        else {
            echo "$nomb est impaire<br>";
        }
    }
    else{
        break;
    }
}
?>