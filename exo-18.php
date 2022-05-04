<?php
//Tableaux associatif (type 'string')
    $language['PHP']=array('Très difficile', 'difficile');
    $language['HTML']=array('Très facile', 'facile','Newbee++');
    $language['JS']=array('Très difficile', 'difficile','Sénior');
    
    /* Ma réponse
    // $valeur=[''];

    // //foreach ($valeur=['']){
    //     echo ($language['PHP'],$valeur['Très difficile'])
    // };

        //exemple:
    // foreach($_POST['choix'] as $indice=>$valeur){
    //     echo ('<tr><td>'.'Compétences : [index : '.$indice.'] = '.$valeur.'<br/>'.'</td></tr>');
    // }

     */

    /* soluce internet
    foreach($ages as $clef => $valeur){
        echo $clef. ' a ' .$valeur. ' ans<br>';
    }*/

    foreach($language as $indice=>$valeur){
        foreach($valeur as $cle=>$val){
            echo $indice."=>".$val."<br/>";
        }
    }
?> 

<?php switch("en"):
    case "fr":
    ?>
    
    <!-- Code HTML -->
    <h1> Bienvenue en France </h1>
    <?php break; ?>
<?php case "en": ?>

   <!-- Code HTML -->
   <h1> Welcome in France </h1>
    <?php break; ?>
 <?php case "sp": ?>

     <!-- Code HTML -->
    <h1> Bienvenido en Francia </h1>
    <?php break; ?>
<?php default: ?>
    <h1> Pays Inconnu </h1>
<?php endswitch ?>


