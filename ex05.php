<?php
    $moyenne = 21;
    if ($moyenne >= 0 && $moyenne <= 20) {
        if ($moyenne < 10) {
            echo "Non validé.";
        } else if ($moyenne >= 10 && $moyenne < 12) {
            echo "Passable.";
        } else if ($moyenne >= 12 && $moyenne < 14) {
            echo "Assez bien.";
        } else if ($moyenne >= 14 && $moyenne < 16) {
            echo "bien.";
        } else if ($moyenne >= 16 && $moyenne <= 20) {
            echo "Très bien.";
        }
    } else {
        echo "Note invalide.";
    }
?>
