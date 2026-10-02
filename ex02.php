    <?php
    echo "Bienvenue dans mon TP PHP - EXERCICE 02<br><br>";

    $nom = "SLIKOU";
    $prenom = "AISSA";
    $age = 19;
    $formation = "Informatique";

    $message = "je m'appelle " . $prenom. " " . $nom . " j'ai " . $age . " ans et je suis en formation " . $formation. ".";
    echo "$message<br>";

    $message .= " J'apprends PHP.";
    echo "$message";

    $note = 12;
    $Note = 16;
    echo "<br>la note1 est : " .$note. "<br>";
    echo "la note2 est : " .$Note. "<br>";
?>