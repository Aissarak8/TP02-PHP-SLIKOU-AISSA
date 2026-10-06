<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>

    <h2>Table de multiplication</h2>

    <?php
    $nombre = 7;

    for ($i = 1; $i <= 10; $i++) {
        $multiple = $nombre * $i;
        echo "$nombre x $i = $multiple <br>";
    }
    ?>

    <h2>Pyramide</h2>

    <?php
    for ($i = 1; $i <= 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>

</body>
</html>