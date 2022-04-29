<?php
    echo "A que coucou 1 les Devs!<br>"
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>   
    <!-- <meta charset="UTF-8">  ENCODAGE HTML QUI COMPREND LES 255 CARACTÈRES LATIN -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MA première page PHP </title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <p>
        <?php
            echo("Bonjour les Geeks")
        ?>
        <br>
        <?php
            echo("Bonjour les Newbees!!")
        ?>
        <br>
        <?='J\'aime la rando<br>'; ?> <!-- le "\" est un opérateur d'échappement de caractère -->
        <?='J\'aime \'la\' rando<br>'; ?>
        <?="J'aime l'astro<br>"; ?> <!-- On peut injecter des balises HTML dans une chaine de caractère-->
        <?="J'aime l'astro"."<br>"; ?> <!-- le "." est l'opérateur de concaténation-->

    </p>
    <?php
    echo "A que coucou 2 les Devs!"
?>
</body>
</html>