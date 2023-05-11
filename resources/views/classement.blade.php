<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Gedimagination</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>Titre</th>
            <th>Descriptif</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Photo</th>
            </tr>
        </thead>
    <tbody>
        <?php
        // Récupérer les réalisations de la base de données
        $realisations = DB::table('realisations')->get();
        foreach ($realisations as $realisation) {
        ?>
            <tr>
            <td><?php echo $realisation->titre; ?></td>
            <td><?php echo $realisation->descriptif; ?></td>
            <td><?php echo date('d/m/Y', strtotime($realisation->dateDebut)); ?></td>
            <td><?php echo date('d/m/Y', strtotime($realisation->dateFin)); ?></td>
            <td><?php echo $realisation->photo; ?></td>
            <td><img src="{{ asset('assets/PhotoReal/' . $realisation->photo)}}" witdh="600" height="auto"></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
</body>