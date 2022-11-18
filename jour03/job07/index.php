<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais";
echo "$str<br><hr>";
$i=0;
$x=-1;

while (isset($str[$i])){    
    $i++;                   
}
$i --;
while ($x < $i){
    echo $str[$x];
    $x++;
}
?>