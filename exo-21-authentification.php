<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/authentification.css">
    <title> LOG - IN </title>
</head>

<body>
    <section>
        <form>
            <legend> Authentifiez-vous </legend>
            <label for="Login"> Login : </label>
            <input type="text" name="login" />
            <label for="password"> Mot de passe : </label>
            <input type="password" name="mdp">
            <div>
                <input type="submit" value="Valider" />
                <input type="reset" value="Annuler" />
            </div>
            <?php
    if(isset($_POST["envoyer"])){
        $login="jedi";
        $mdp="toor";
        echo ('bravo!'.$login. 'super'.$mdp);
    }
    while($login=false)($mdp=false);{
        echo ("Vous n'avez pas saisi les bons identifants");
    
      do{
        $login=true && $mdp=true;
        echo ("Vous avez saisi les bons identifants");
     }
};
?>
            <!-- Création de retour lors de la page authentification 
                <button onClick="history.back()"> Retour </button> 
            -->

        </form>
    </section>
</body>
</html>
