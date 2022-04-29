<?php
    //déclaration des variables qui seront utilisées dans le second module PHP

    $nom = "Jean Neymare";
    $titre_du_jour ="Vive les Geeks";
    $date = date("d/m/Y");
    $heure = date("H:i:s");
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ma deuxième page PHP </title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <p>
        <?php
        echo("Bonjour ".$nom."<br>");
        echo("Nous sommes le : ".$date.", il est : ".$heure."<br>");
        echo("Nous sommes le : $date, il est : $heure <br>");
        ?>
    </p>
</body>
</html>