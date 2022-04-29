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
    if (isset($_POST['envoyer'])) {
        $texte = $_POST['chaine'];
        $compteur = 0;

        //compter le nombre de caractères avant le traitement
        $nb_avant_traitement = strlen($texte);
        echo "vous avez saisie : " . $nb_avant_traitement . "caractères avant le traitement <br/>";

        //supprimer les chaînes vides en début et fin
        $texte = trim($texte);

        //compter le nombre de caractères après le traitement
        $nb_apres_traitement = strlen($texte);
        echo "vous avez saisie : " . $nb_apres_traitement . "caractères après le traitement <br/>";

        echo ("<table>");
        while ($compteur < $nb_apres_traitement) {
            echo ("<tr><td>");
            echo ($texte[$compteur]);
            echo ("</td></tr>");
            $compteur++;
        }
        echo ("</table>");
        // compter ele nombre de caractères à remplacer suivant son choix
        $caractere = $_POST['trouver'];

        // Parcourir la chaîne de caractères
        $compteur = 0;
        $nbcar = 0;

        while ($compteur < $nb_apres_traitement) {
            if ($caractere == $texte[$compteur]) {
                $nbcar++;
            }

            $compteur++;
        }
            if ($nbcar != 0) {
                echo ("Vous avez dans votre chaîne de caractères : $nbcar caractère trouvés");
            }
            else 
            {
                echo ("Vous n'avez aucun caractères trouvés");
            }
            
    }
    ?>
</body>

</html>