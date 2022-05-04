<?php
    error_reporting(0); //Évite l'affichage des messages de type warning
    echo 1, 2, 3, "up";
    print("123 up");

    echo ("<br/>");
    /* Afficher la valeur en base 10 avec deux décimales */
    $nombre = 89;
    printf("%1.2f €", $nombre);
    echo ("<hr/>");
    /* Affiche la valeur en base 2*/
    printf("%b", $nombre);
    echo ("<hr/>");

    printf("%X", $nombre);
    echo ("<hr/>");

    /* Affiche la valeur en base 16*/
    $nombre = 200;
    printf("%X", $nombre);
    echo ("<hr/>");


    echo ("<br/>");
    $nombre = 89;
    printf("%b", $nombre);

    //Normaliastion du traitement des caractères

    echo ("<br/>");
    $nom = "MudaT";
    $prenom = "AlbeRT";
    $adresse = "25, Rue du Ha hA";
    $ville = "26000 VAlence";
    $mail = "GEEK@gmail.com";

    $nom = strtoupper($nom);
    $prenom = ucfirst(strtolower($prenom));
    $adresse = ucwords(strtolower($adresse));
    $ville = strtoupper($ville);
    $mail = strtolower($mail);

    echo $nom . "" . $prenom . "<br/>" . $adresse . "<br/>" . $ville . "<br/>" . $mail . "<br/>";

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br/>
    <marquee behavior="" direction="right"> j'adore le PHP </marquee>
    <br/>
    <form method="POST" action="exo-20.php">
        <label> Entrez un nombre en base 10 </label>
        <input type="text" name="nombre" />
        <input type="submit" name="valider" value="Convertir en base 2"/>
    </form>
    <?php

        if(isset($_POST['valider'])){
             if(is_numeric($_POST['nombre'])){
            $base2=$_POST['nombre'];
            printf('%b',$base2);
        }
    }
    ?>
</body>

</html>