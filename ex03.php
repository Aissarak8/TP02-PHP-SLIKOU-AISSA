<?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");
    $prix_unitaire = 60;
    $quantite = 3;

    $total_HT = $prix_unitaire * $quantite;
    $total_TVA = $total_HT * TAUX_TVA / 100;
    $total_TTC = $total_HT + $total_TVA;
    $montant_final = $total_TTC;
    $montant_final += 15;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 03</title>
</head>
<body>
    <h1>Bienvenue dans mon TP PHP - EXERCICE 03</h1>
    <h2>Vérification :</h2>
    <p>Prix unitaire : <?= $prix_unitaire ?> <?=DEVISE ?></p>
    <p>Quantité : <?= $quantite ?></p>
    <p>Total HT : <?= $total_HT ?> <?=DEVISE ?></p>
    <p>Total TVA : <?= $total_TVA ?> <?=DEVISE ?></p>
    <p>Total TTC : <?= $total_TTC ?> <?=DEVISE ?></p>
    <p>Montant final : <?= $montant_final ?> <?=DEVISE ?></p>
    <p>
        TAUX_TVA existe:
        <?php
        if (defined("TAUX_TVA")){
            echo "Oui";
        } else{
            echo "Non";
        }
        ?>
    </p>
</body>
</html>