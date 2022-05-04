<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercice PHP numéro 22 </title>
</head>

<body>
    <h1> Manipuler les chaînes de caractères </h1>
    <?php

        echo("<h2> STRLEN </h2>");
        $x= "A que coucou";
        echo strlen($x)."<br/>";

        echo str_repeat("__",120);


        echo("<h2> strtolower / strtroupper / lcfirst / ucwords </h2>");
        $x='ALBERT MUDAT';
        $y='albert mudate';

        echo "strtolower ('$x') = ".strtolower($x),"<br/>";
        echo "strtoupper ('$y') = ".strtoupper($y),"<br/>";
        echo "ucfirst ('$y') = ".ucfirst($y),"<br/>";
        echo "lcfirst ('$x') = ".lcfirst($x),"<br/>";
        echo "ucwords ('$y') = ".ucwords($y),"<br/>";

        echo str_repeat("__",120);


        echo("<h2> sprintf </h2>");
        echo ("Mise en forme de la date : ");
        echo sprintf('%02d/%02d/%04d',4,5,2022)."<br/>";
        echo sprintf('%01.2f - %01.2f',1/3,12345678.9)."<br/>";

        echo str_repeat("__",120);


        echo("<h2> number_format </h2>");
        $x=1234.567;
        echo"number_format : ($x) = ".number_format($x),"<br/>"; //Affiche les entiers.
        echo"number_format : ($x) = ".number_format($x,1),"<br/>"; // Affiche les entiers avec séparateurs de millier et une décimale.
        echo"number_format : ($x) = ".number_format($x,2,',',' '),"<br/>"; // Affiche les entiers avec séparateurs de millier avec deux décimales.
        echo"number_format : ($x) = ".number_format($x,3,',',' '),"<br/>";  // Affiche les entiers avec séparateurs de millier et trois décimale.

        echo str_repeat("__",120);


        echo("<h2> ltrim / rtrim / trim </h2>");
        $chaine="    toto    ";
        echo("nombre de caractère avant traitement : ".strlen($chaine)."<br/>");
        echo("suppression en début de chaîne, nombre de caractère : ".strlen(ltrim($chaine))."<br/>");
        echo("suppression en en fin de chaine, nombre de caractère : ".strlen(rtrim($chaine))."<br/>");
        echo("suppression en début et fin de chaîne, nombre de caractère : ".strlen(trim($chaine))."<br/>");

        echo str_repeat("__",120);


        echo("<h2> substr() </h2>");
        $x="Albert Mudat";
        echo("Substr($x,3) : = ".substr($x,3)."<br/>"); // Affiche tous les caractères sauf les trois de gauche.
        echo("Substr($x,3,2) : = ".substr($x,3,2)."<br/>"); // Affiche les eux caractères après les trois caractère de gauche.
        echo("Substr($x,-4) : = ".substr($x,-4)."<br/>"); // Affiche les quatre caractères en partant de la droite.
        echo("Substr($x,-4,3) : = ".substr($x,-4,3)."<br/>"); // A partir du quatrième caractère en partant de la doite on affiche les trois caractères suivant

        echo str_repeat("__",120);


        echo("<h2> strpos </h2>");
        $mail="geek@gmail.com";

        $position=strpos($mail,"@");
        echo("La position de votre caractère @ est : ".$position."<br/>");

        $position=strpos($mail,"gmail");
        echo("La position de gmail est : ".$position."<br/>");

        $position=strpos($mail,"com");
        echo("La position de com est : ".$position."<br/>");

        echo str_repeat("__",120);


        echo("<h2> strstr </h2>");
        $mail="geeks-@geeks-gmail.com";
        $caractere=strstr($mail,'-');
        echo("la première occurence de - est : ".$caractere."<br/>");
        $reste=stristr($mail,'geeks');
        echo("La prmeière occurence de geek est : ".$reste."<br/>");
        $caractere=stristr($mail,'geeks');
        echo("La dernière occurence de - est : ".$caractere."<br/>");

        echo str_repeat("__",120);


        echo("<h2> STRLEN </h2>");
        $chaine= "A que coucou";
        $recherche="u";
        $remplacer="i";
        echo("La chaîne de départ est : ''".$chaine."'' devient : ".str_replace($recherche,$remplacer,$chaine)."<br/>");

        echo str_repeat("__",120);
    ?>
</body>

</html>