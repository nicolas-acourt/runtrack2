<form action="index.php" method="get">
    <div>
        <label for="nombre">nombre :</label><br>
        <input type="number" id="number" name="nombre"><br><br>
    </div>
    <button type="submit">Submit</button>
</form>

<?php
    if ($_GET["nombre"]%2==0){
        echo $_GET["nombre"]. "est pair <br/>";
    }else{
        echo $_GET["nombre"]. "est impair <br/>";
    }
?>