<?php
    $var1 = 42;
    $var2 = "42";
    $var3 = 15.8;
    $var4 = true;
    $var5 = false;
    $var6 = null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 04</title>
</head>
<body>
    <h1>Exercice 04 : Les types de variables en PHP</h1>

    <h3>Affichage des variables avec `var_dump()` :<br></h3>
    <pre>var1: <?php var_dump($var1); ?></pre>
    <pre>var2: <?php var_dump($var2); ?></pre>
    <pre>var3: <?php var_dump($var3); ?></pre>
    <pre>var4: <?php var_dump($var4); ?></pre>
    <pre>var5: <?php var_dump($var5); ?></pre>
    <pre>var6: <?php var_dump($var6); ?></pre>
    <?php
        $converted_var2 = (int)$var2;
        $converted_var3 = (int)$var3;
        $converted_var1 = (string)$var1;

    ?>

    <h3>Affichage des variables converties :<br></h3>
    <pre>la conversion de "<?php echo $var2; ?>" en entier donne <?php echo $converted_var2; ?></pre>
    <pre>la conversion de <?php echo $var3; ?> en entier donne <?php echo $converted_var3; ?></pre>
    <pre>la conversion de <?php echo $var1; ?> en chaîne de caractères donne "<?php echo $converted_var1; ?>"</pre>

    <pre><?php var_dump($converted_var2); ?></pre>
    <pre><?php var_dump($converted_var3); ?></pre>
    <pre><?php var_dump($converted_var1); ?></pre>

    <h3>Affichage de `true` et `false` avec echo :<br></h3>
    <?php
        echo "Affichage de `true` : " . $var4 . "<br>";
        echo "Affichage de `false` : " . $var5 . "<br>";
    ?>

    <h3>Affichage de `true` et `false` avec `var_dump()` :<br></h3>
    <pre>var4: <?php var_dump($var4); ?></pre>
    <pre>var5: <?php var_dump($var5); ?></pre>

    <h3>Conversion en booléens :</h3>

    <pre>0 : <?php var_dump((bool) 0); ?></pre>
    <pre>"0" : <?php var_dump((bool) "0"); ?></pre>
    <pre>"PHP" : <?php var_dump((bool) "PHP"); ?></pre>
    <pre>Tableau vide [] : <?php var_dump((bool) []); ?></pre>

</body>
</html>