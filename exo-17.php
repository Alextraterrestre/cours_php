<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ma deuxième page PHP </title>
    <link rel="stylesheet" href="css/main4.css">
</head>

<body>
    <section>
        <form action="exo-17.php">
            <label for="">Saisir votre caractère : </label>
            <input type="text" name="lettre"/>
            <input type="submit" value="Soumettre" name="traiter" />
            <input type="submit" value="somettre2" name="traiter2">
        </form>
    </section>
    <?php
    if(isset($_POST['traiter1'])){
        $lettre = strtoupper($_POST['lettre']);
        switch ($lettre){
        case "a";
        case "e";
        case "i";
        case "o";
        case "u";
        case "y";
            echo ("Vous avez saisi une voyelle");
            break;
        default:
            echo ("vous avez saisi une consonne");
        }
    };

        // Traitement du caractère avec un while et un tableau

         if(isset($_POST['traiter2'])){
             $caractere=strtoupper($_POST['lettre']);
             $lettre=array('A','E','I','O','U','Y');
             $indice=0;
            
             while($indice < count($lettre)){
                 if($lettre[$indice]==$caractere){
                 echo ("vous avez saisi une voyelle");
                 break;
             }else {
                 echo("Vouas avez saisi une consonne");
                 break;
             }
             $indice++;
         }
        }
    ?>
</body>

</html>