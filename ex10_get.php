<?php

if (isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {

    $nom = trim($_GET["nom"]);
    $prenom = trim($_GET["prenom"]);
    $groupe = trim($_GET["groupe"]);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "Veuillez remplir tous les champs.";
    } else {
        $nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, "UTF-8");

        echo "Bienvenue, " . $prenom . " " . $nom . " du groupe " . $groupe;
    }

} else {
    echo "Veuillez remplir le formulaire GET.";
}

?>