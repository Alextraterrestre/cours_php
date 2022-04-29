<?php

    $nombre=6;

?>



<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ma deuxième page PHP </title>
    <link rel="stylesheet" href="css/main3.css">
</head>

<body>

    <section>
        <form action="exo-10-boucle_while.php" method="POST" enctype="multipart/form-data">
            <label for=""> Chaîne de caractère </label>
            <input type="text" name="chaine" placeholder="Saisie de votre texte" maxlength="25" required>
            <br>
            <label for=""> caractères à comptabiliser </label>
            <input type="text" name="trouver" maxlength="1" required>
            <br>
            <label for=""> caractères à remplacer </label>
            <input type="text" name="remplacer" maxlength="1" required>
            <br>
            <input type="submit" value="soumettre" name="envoyer">
            <input type="reset" value="Effacer" name="annuler">

        </form>

    </section>
                                <!-- je charge ma page
            veuillez ajouter le nombre de compétences que vous souhaitez ajouter
            une fenêtre s'ouvre pour entrez les compétences, le tout bien présenter
            je saisi dans les input, les résultats doivent apparaîtrent en-dessous dans un tableau
                                                    -->

    <form action="">
        <div>
            indiquer vos 5 compétences principales : <br/>
        
    <?php for($compteur=1; $compteur<$nombre; $compteur++):?>
        <input type="text" /><br/>
        <?php endfor ?>
        <input type="submit" value="soumettre"/>


        <?php
            for($compteur=1; $compteur<$nombre; $compteur++){
                echo("<input type='text' name='compétences' />");
            }
        ?>



    

        </div>
    </form>
</body>

</html>