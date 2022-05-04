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
    <section>
        <form action="exo-25.php" method="POST">
            <label> Entrez un chiffre : </label>
            <input type="number" name="month" min="1" max="12">
            <input type="submit" value="Valider" name="valider">
        </form>
    </section>
    <?php

    
    $mois=array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
        if(isset($_POST['valider'])){
            $nb=$_POST['month'];
            $nb--;
            echo $mois[$nb]."<br/>";

        /* Boucle Foreach */
        foreach($mois as $indice=>$valeur){
            if($indice==$nb){
                echo $indice."=>".$valeur."<br/>";
            }
        }
    
        /* Boucle FOR */
        $longueur=count($mois);
        for($i=0;$i<=$longueur;$i++){

            if($i==$nb){
                echo $mois[$nb]."<br/>";
            }
        }
        /* fin du for*/

        /* Boucle while*/
        $i=0;
        while($i<$longueur){
            if($i==$nb){
                echo $mois[$nb]."<br/>";
            }
            $i++;
        }
         /* Fin Boucle while */

        /* Boucle do while */
        $i=0;
        do{
            if($i==$nb){
                echo $mois[$nb]."<br/>";
            }
            $i++;
        }while($i<=$longueur);
    }
        // foreach($mois as $indice=>$valeur){
        //     echo $indice."=>".$valeur."<br/>";
        //};

    ?>
</body>
</html>