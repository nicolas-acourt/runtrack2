<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


for ($i = 0; $i <= 100; $i++) {
    if($i % 2 ==0){
        $lettre = $str[$i];
        echo $lettre;
    }
}

?>