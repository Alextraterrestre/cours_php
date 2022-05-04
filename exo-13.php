<?php

$nombre = 6;

?>



<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Do While </title>
    <link rel="stylesheet" href="css/main2.css">
</head>
<!-- je charge ma page
            veuillez ajouter le nombre de compétences que vous souhaitez ajouter
            une fenêtre s'ouvre pour entrez les compétences, le tout bien présenter
            je saisi dans les input, les résultats doivent apparaîtrent en-dessous dans un tableau
                                          -->

<body>
    <section>
        <div>
            <h1> Mes compétences </h1>
        </div>
        <form action="exo-13.php" method="POST">
            <label for=""> Indiquez le nombre de compétences que vous souhaitez ajouter à votre CV :
            </label>
            <input type="text" name="choix" />
            <input type="submit" value="Soumettre" name="envoyer" />
        </form>
    </section>

    <section>
        <h1>Ajouter vos compétences</h1>
        <form action="exo-13.php" method="POST">
            <?php
            if (isset($_POST['envoyer'])) {
                $nb = $_POST['choix'];
                for ($i = 1; $i <= $nb; $i++) {
                    echo ("<input type='text' name='choix[]'><br/>");
                }
            }

            ?>
            <input type="submit" value="Soumettre" name="soumettre" />
        </form>
    </section>
    <section>


        <table>
            <?php
            if (isset($_POST['soumettre'])) {
                /*print_r($_POST['choix']);*/
                $nb = count($_POST['choix']);
                //Structure de contrôle "For"
                    /*for ($i = 0; $i < $nb; $i++) {
                    echo("<tr><td>".$_POST['choix'][$i] . "</td></tr>");
                }
                //
                /* tableau séquantiel tab=['titi','tata','toto]
                                             0       1      2     */
                //

                // Stucture de contrôle While
                $i=0;
                while($i<$nb)
                    echo("<tr><td>".$_POST['choix'][$i]."</td></tr>");
                    $i++;
            
            $i=0;
            do{
                echo("<tr><td>".$_POST['choix'][$i]."</td></tr>");
                $i++;
            }while($i<$nb);

        

        echo("<br/>");

            // foreach($_POST['choix'] AS $indice=>$valeur){
            //     echo("<tr><td>".$indice."</td></tr>".$valeur."</td></tr>");
            // }
        }
            ?>
        </table>

    </section>

</body>

</html>