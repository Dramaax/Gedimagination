<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css” rel=”nofollow” integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/style.css">
    <title>Gedimagination</title>
</head>
<body>
    <!-- Formulaire d'inscription -->
    <form method="post" class="form" enctype="multipart/form-data" action="<?php echo e(url('participation')); ?>">
        <?php echo e(csrf_field()); ?>

        <p>
        <b><label for='titre'>Titre :</label></b><br>
        <input type='text' name='titre' size="43" id='titre' placeholder='Entrez votre titre ici...entre 3 et 50 caractères' required minlength="3" maxlength="50">
        </p>
        <p>
        <b><label for='descriptif'>Description :</label></b><br>
        <textarea id="descriptif" name="descriptif" rows="5" cols="52" placeholder="Décrivez-nous précisément votre réalisation...en maximum 250 caractères" required maxlength="250"></textarea>
        </p>
        <p><label for='dateDebut'> Du </label>
        <input type='date' name='dateDebut' id='debutTravaux' required>
        <label for='finTravaux'> au </label>
        <input type='date' name='dateFin' id='finTravaux' required></p>
        <p><input type='file' id="photo" name="photo" accept="image/png, image/jpeg" required></p>

        <input type='submit' value='Valider'>
        <form>
    </form>
</body>
</html><?php /**PATH C:\laragon\www\gedimagination\resources\views/participation.blade.php ENDPATH**/ ?>