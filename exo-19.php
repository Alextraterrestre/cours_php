<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="exo-19.php">
        <label> Veuillez saisir le premier caractère de votre choix </label>
        <input type="text" name="caractere" />
        <input type="submit" name="soumettre" value="Traitement">
    </form>

    <?php
    $tableau[0] = 'Ain';
    $tableau[1] = 'Drôme';
    $tableau[2] = 'Ardèche';
    $tableau[3] = 'Hte-Savoie';
    $tableau[4] = 'Savoie';

    if (isset($_POST['soumettre'])){
        $caractere = strtoupper($_POST['caractere']);

        foreach ($tableau as $indice=>$valeur) {
            if($tableau[$indice][0] == $caractere) {
                continue;
            }
            echo ("<hr/>");
            echo $valeur . "<br/>";
        }
    }
        // for ($i = 1; $i <= 20; $i++) {
        //     if ($i % 5 == 0) {
        //         continue;
        //     }
        //     echo $i . ",";
        // }
    
    ?>
</body>

</html>