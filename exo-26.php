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
        <form action="exo-26.php" method="POST">
            <label> Choissisez un mois : </label>
            <select name="mois">
                <option value='0'>Jan</option>
                <option value='1'>Fév</option>
                <option value='2'>'Ma</option>
                <option value='3'>Avr</option>
                <option value='4'>M</option>
                <option value='5'>Ju</option>
                <option value='6'>Jui</option>
                <option value='7'>Ao</option>
                <option value='8'>Sep</option>
                <option value='9'>Oct</option>
                <option value='10'>Nov</option>
                <option value='11'>Déc</option>
            </select>
            <input type="submit" value="Valider" name="soumettre">
        </form>
    </section>
    <?php
    if(isset($_POST['soumettre'])){
       echo $_POST['mois'];
        $mois=array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
        // echo $mois['$recuperation'];
    } 
    
    // j'ai un champ "valeure début" et un champ "valeur de fin" => faire une boucle pour afficher les valeur entre chaqu'unes de schamps


    ?>
</body>
</html>