<h2>Partie 1 : Nombres pairs</h2>
<?php
    
    $a = 0;
    while ($a <= 20) {
            if ($a == 10) {
                echo "<strong>$a</strong><br>";
            } else {
                echo "$a<br>";
            }
        
        
        $a += 2;
    }
?>

<h2>Partie 2 : Comparaison de while et do-while</h2>

<?php
$compteur = 5;
$nbWhile = 0;

while ($compteur < 5) {
    $nbWhile++;
    $compteur++;
}

echo "Nombre d'exécutions de while : $nbWhile<br>";

$compteur = 5;
$nbDoWhile = 0;

do {
    $nbDoWhile++;
    $compteur++;
} while ($compteur < 5);

echo "Nombre d'exécutions de do-while : $nbDoWhile<br>";
?>

<h2>Partie 3 : continue & break</h2>

<?php
echo "<h3>Ignorer les multiples de 3</h3>";

$a = 1;

while ($a <= 20) {

    if ($a == 16) {
        break;
    }

    if ($a % 3 == 0) {
        $a++;
        continue;
    }

    echo "$a<br>";
    $a++;
}
?>