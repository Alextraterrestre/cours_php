<?php

$nombre = 6;

?>



<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ma deuxième page PHP </title>
    <link rel="stylesheet" href="css/main2.css">
</head>

<body>
    <section>
        <div>
            <h1> Mes compétences </h1>
        </div>
        <form action="exo-13.php" method="POST">
            <label for=""> Indiquez les compétences que vous souhaitez ajouter à votre CV :
            </label>
            <input type="text" name="competence" />
            <input type="submit" value="Valider la competence" name="valider"/>

        </form>
        <form action="POST">

        </form>
    </section>
    <!-- je charge ma page
            veuillez ajouter le nombre de compétences que vous souhaitez ajouter
            une fenêtre s'ouvre pour entrez les compétences, le tout bien présenter
            je saisi dans les input, les résultats doivent apparaîtrent en-dessous dans un tableau
                                                    -->
        <?php
        if (isset($_POST['valider'])) {
            $comp = $_POST['competence'];
            echo ("<table> vos compétences : ");
            echo ("<tr>");
            echo ('<td>' . $comp . '</td>');
            echo ("<tr>");
            echo ("</table>");
        }
        ?>
    </div>
    </form>
</body>

</html>