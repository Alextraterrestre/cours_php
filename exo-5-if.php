<?php
    //déclaration des variables qui seront utilisées dans le second module PHP

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
        $valeur=15;
            if($valeur<13){
                echo("vous êtes mineurs, interdis les films coquins");
            }
            else
            {
                echo ("vous êtes autirisés à regarder les films drôles");
            }
        
            $valeur=15;
            if($valeur<18){
                echo("vous êtes mineurs, interdis les films coquins");
            }
            else if($valeur<18)
            {
                echo ("vous êtes autirisés à regarder les films drôles");
            }
            else
            {
                echo ("vous êtes autirisés à regarder les films de votre choix");
            }

        ?>
    </p>
</body>
</html>