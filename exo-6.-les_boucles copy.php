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

        // BOUCLE FOR

        // Le for est un compteur qui tourne de 1 à x (boucle séquentielle)
        
            // for(variable,condition,incrmentation){
            //    instruction
            //}; */


            //for($valeur = 1; $valeur<11; $valeur++){
            //    echo $valeur."<br/>";
           // };

            //BOUCLE WHILE 
            // le while tourne jusqu'à que sa condition soit vrai
            
            // synthax
            // while(condition){
            //     instruction;
            //     incrémentation;
            // };


            //Création d'une boucle qu iva compter jusqu'à 10
            echo ("<table>");
                for($compteur=1;$compteur<11;$compteur++){
                    echo("<tr><td>");
                    echo $compteur."<br>";
                    echo ("</td></tr>");
                }
                echo("</table>");
        ?>
    </p>
</body>
</html>