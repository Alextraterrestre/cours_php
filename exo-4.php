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
        /* Affectation par valeur*/
        $mavar1 = "Paris";
        echo $mavar1. "<br>";

        /* Affectation par valeur en ajoutant un S au pluriel */
        $fruit = "poire";
        echo "une $fruit ne coûte pas cher <br/>";
        echo "deux {$fruit}s ne coûtent pas cher <br/>";
        echo "trois ". $fruit."s ne coûtent pas cher <br/>";
        echo "quatre ${fruit}s ne coûtent pas cher <br/>";
    

        /* Affectation par valeur */
        $x=1;
        $y = $x;
        echo $y."<br/>";

        $x=2;
        echo $x."<br/>";
        echo $y."<br/>";

        /* Affectation par valeur sur trois variables */
        $x=$y=$z=0;
        echo $x."<br/>";
        echo $y."<br/>";
        echo $z."<br/>";

        /* Affectation des variable par référence*/

        $val1="Titi";

        $val2=&$val1;

        echo $val1."<br/>";
        echo $val2."<br/>";

        $val2="Grosminet";

        echo $val1."<br/>";
        echo $val2."<br/>";


        /* On a enlever le '&'  */ 
        // $val1="Titi";

        // $val2=$val1;

        // echo $val1."<br/>";
        // echo $val2."<br/>";

        // $val2="Grosminet";

        // echo $val1."<br/>";
        // echo $val2."<br/>";

        $A=10;
        $B=20;
        $A=&$B;
        $A=$B;
        echo $A."<br>";
        echo $B."<br>";
        $A=50;
        echo $B."<br>";


        /* Déclaration d'une constante*/
        define("PI",3.14952);
        $rayon=10;
        $aire=$rayon*PI;
        echo $aire;

        /* Les opérateurs arithmétiques */
        
        $x=5;
        $y=3;

        // echo "+" .$x + $y."<br/>";
        // echo "-" .$x - $y."<br/>";
        // echo "/" .$x * $y."<br/>";
        // echo "/" .$x / $y."/<br/>";
        // echo "modulo" .$x % $y." br/>"; //modulo return &
        // echo "exponantiel" .$x ** $y."<br/>"; // Exponentiel 25

        echo $x++; //on incrémente du pas de 1
        echo$x; // On visualise après sont incrémentation

        echo ++$x;

        echo $x--; //dcrémente du pas de 1
        echo $x; // on visualise après S

        echo --$x;
        /* Les opérateurs combinés */
        $val1=5;
        $val1=$val1 +1;
        echo $val1."<br/>";

        $val1=5;
        $val1+= 1;
        echo $val1."<br/>";

        $val1=5;
        $val1-= 1;
        echo $val1."<br/>";

        // $toto=5;
        // $val2="1toto";
        // $total = $toto + $val2;
        // echo $total;
        ?>
    </p>
</body>
</html>