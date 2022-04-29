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
    <?php
        $nom="Sandrine";
        $nb=strlen($nom);
        $cpt=0;
        do{
            echo ($nom[$cpt]."");
            $cpt++;
        }while($cpt<$nb);
    ?>
</body>

</html>