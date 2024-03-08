<?php include " ../commun/header.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>

<body>

    <div class="row">
        <div class="col-6 p-3 m-auto">
            <h1>cree un script PHP pour afficher une variable</h1>
            <form action="index.php" method="post">
                <label for=""> Choisir un nombre pour afficher sa table :</label>
                <input type="number" name="number" id="nulber">
                <input type="submit" value="envoyer">
            </form>
        </div>
    </div>

    
    <?php 
if(isset($_POST['table'])){
    echo"<br>Voici la tale de multiplication par" .$name.":<br>";
    for($i=1;$i<=10;$i++){
        echo"<br>$name * $i = ".$name*$i;
    }
}
?>
    




</body>

</html>

