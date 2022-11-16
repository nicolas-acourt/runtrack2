<?php 
$boolean=true; 
$entier=10;
$chaîne="salut";
$nombre=4.5;
?>
<!DOCTYPE html>
<html lang="en">
<style>
    table{padding:2%;}
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: red;
    color: #fff;
}

</style>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $boolean; ?></th>
                <th><?php echo $entier; ?></th>
                <th><?php echo $chaîne; ?></th>
                <th><?php echo $nombre; ?></th>
            </tr>
        </tbody>
    </table>
</html>