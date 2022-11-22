
<form action="index.php" method="post"><br>
    <div>
        <label for="nom">username :</label><br>
        <input type="text" id="name" name="username"><br>
    </div>
    <div>
        <label for="prenom">password :</label><br>
        <input type="password" id="pass" name="password"><br><br>
    </div>
    <button type="submit">Submit</button><br>
</form>
<?php


    if (($_POST["username"]=="John") && $_POST["password"]=="Rambo"){
        echo "C’est pas ma guerre";
        
    }else {
        echo "Votre pire cauchemar";
    }

?>