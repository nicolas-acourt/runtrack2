<?php
$j = 2;
echo "Voici la liste des nombres premiers entre 1 et 100 :";
echo "<br/>";
for ($i=0;$i<=100;$i++){
if ($i==1){
echo "$i";
echo "<br/>";
}else{

while ($i%$j!=0){
$j = $j + 1;
}
if ($i = $j){
echo "$i";
echo "<br/>";
}
}
}
?> 
