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

         //BOUCLE WHILE 
            // le while tourne jusqu'à que sa condition soit vrai
            
            // synthax
            // while(condition){
            //     instruction;
            //     incrémentation;
            // };


            //Création d'une boucle qu iva compter jusqu'à 10
            $ligne=1;
            echo("<table>");
            while($ligne<11){
                echo("<tr><td>");
                echo $ligne;
                echo("</td></tr>");

                $ligne++;
            }
            echo("</table>");
 
        ?>
    </p>
</body>
</html>