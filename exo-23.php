<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice sur la manipulationde données avec intégrité </h1>
    <?php
        $chaine =array('Cet été, à la plage,','le bateau violet et jaune');
        $recherche =array('été','plage','violet','jaune');
        $remplacer =array('hiver','montagne','blanc','vert');
        $traitement='';
        $avant='';
        foreach($chaine as $indice => $valeur){
            $avant.=$valeur;
            $traitement.=str_replace($recherche,$remplacer,$chaine[$indice]);
        }
        echo("Mon texte de départ : ".$avant."<br/>");
        echo("Mon texte d'arrivé : ".$traitement."<br/>");
    ?>
</body>
</html>