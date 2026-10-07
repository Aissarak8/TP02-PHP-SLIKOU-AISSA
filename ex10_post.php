<?php

if (isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {

    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "Veuillez remplir tous les champs.";
    } else {
        $nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, "UTF-8");

        echo "Bienvenue, " . $prenom . " " . $nom . " du groupe " . $groupe;
    }

} else {
    echo "Veuillez remplir le formulaire POST.";
}

?>