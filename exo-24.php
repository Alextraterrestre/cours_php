<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1> Exercice sur la manipulation de données avec intégrité </H1>
    <?php


    $villes=array('Drôme'=>'Valence','Portes-lès-Valences','Bourg-les-Valences','Romantique'=>array('Venise','Baléares','Madère'));
        foreach($villes as $indice=>$valeur){
            echo$valeur."<br/>"
        }
    ?>
</body>
</html>