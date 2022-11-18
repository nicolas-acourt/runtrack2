<?php 
$str="On n’est pas le meilleur quand on le croit mais quand on le sait";
echo "$str<br><br><hr>";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$consonnes = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Z"];

$cv = ["Consonnes" => 0,
        "Voyelles" => 0,
];

$i = 0;


while (isset($str[$i])){
        foreach ($voyelles as $voy){
            if ($voy === $str[$i]){
                $cv["Voyelles"]++;
            }
        }
        foreach ($consonnes as $cons){
            if ($cons === $str[$i]){
                $cv["Consonnes"]++;
            }
        }
    $i++;
}
?>

<table>
<thead>
    <tr>
        <td>Consonnes</td>
        <td>Voyelles</td>
    </tr>
</thead>

<tbody>
    <tr>
        <td><?php echo $cv["Consonnes"]; ?></td>
        <td><?php echo $cv["Voyelles"]; ?></td>
    </tr>
</tbody>
</table><hr>