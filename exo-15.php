<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ma deuxième page PHP </title>
    <link rel="stylesheet" href="css/main3.css">
</head>

<body>
    <?php
    for ($i = 0, $total = 0; $i <= 5; $total += $i, $nombre[] = $i++);
    echo implode('+', $nombre) . '=' . $total . "<br/>";

    for ($i = 0; $i <= 5; $i++) {
        $total += $i;
        $nombre[] = $i++;
        echo $nombre[$i] . "<br/>";
    }
    ?>

</body>

</html>