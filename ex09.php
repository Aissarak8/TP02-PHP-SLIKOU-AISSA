<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>
<body>
    <?php
        $notes = [
            "Amine" => 12,
            "Sara" => 16,
            "Youssef" => 8,
            "Lina" => 14,
            "Adam" => 10
        ];
    ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>
        <?php foreach ($notes as $nom => $note): ?>
            <tr>
                <td><?php echo $nom; ?></td>
                <td><?php echo $note; ?></td>
                <td>
                    <?php if ($note >= 10): ?>
                        Valide
                    <?php else: ?>
                        Non Valide
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Statistiques</h3>

    <?php
        $totalNotes = 0;
        $nbValide = 0;
        $maxNote = -1;
        $meilleurEtudiant = "";

        foreach ($notes as $nom => $note) {

            $totalNotes += $note;

            if ($note >= 10) {
                $nbValide++;
            }

            if ($note > $maxNote) {
                $maxNote = $note;
                $meilleurEtudiant = $nom;
            }
        }

        $nombreEtudiants = count($notes);
        $moyenne = $totalNotes / $nombreEtudiants;

        echo "Somme des notes : " . $totalNotes . "<br>";
        echo "Moyenne de la classe : " . $moyenne . "<br>";
        echo "Nombre d'étudiants validés : " . $nbValide . "<br>";
        echo "Meilleure note : " . $maxNote . " obtenue par " . $meilleurEtudiant . "<br>";
    ?>
</body>
</html>