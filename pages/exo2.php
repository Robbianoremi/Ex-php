<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>


<?php include " ../commun/header.php" ?>


<div class="row">
        <div class="col-6 p-3 m-auto">
            <h1>Affichage d'une pyramide</h1>
            <form action="index.php" method="post">
                <label for=""> hauteur de la piramyde</label>
                <input type="number" name="number" id="nulber">
                <input type="submit" value="envoyer">
            </form>
        </div>
    </div>


<?php

if(isset($_POST['number']) && $_POST['number'] > 0){

    $chiffre = $_POST['number'];
    echo "<h2> Pyramide de hauteur " . $chiffre . "</h2>";
    $txt = "";
    for($i = 0; $i < $chiffre ; $i++ ){
        $txt .= "xx";
        echo $txt . "<br>";
    }
    for($i = 0; $i < $chiffre-1 ; $i++ ){
        $txt = substr($txt,0,-2);
        echo $txt . "<br>";
    }

   
    
}else{
    echo "<p> Merci de choisir un chiffre</p>";
}

?>

</body>
</html>