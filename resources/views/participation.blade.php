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
        <section class="contact-us" id="contact-section">
            <form id="contact" action="{{ url('participation') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            
                <div class="section-heading">
                    <img src="img/btn_gedimat.png" alt=""/>
                </div>

                <div class="inputField">
                    <input type="titre" name="titre" id="titre" placeholder="Entrez votre titre ici.. entre 3 et 50 caractères" autocomplete="on" required="" minlenght="3" maxlenght="50">
                    <span class="valid_info_name"></span>
                </div>

                <div class="inputField">
                    <textarea name="descriptif" id="descriptif" placeholder="Décrivez-nous précisément votre réalisation...en maximum 250 caractères " required="" maxlength="250"></textarea>
                    <span class="valid_info_message"></span>
                </div>

                <div class="inputDate">
                    <div class="textLabel">
                        <label for="dateDebut">Du</label>
                        <input type="date" name="dateDebut" id="debutTravaux" required="">
                    </div>
                    <div class="textLabel">
                        <label for="dateFin">Au</label>
                        <input type="date" name="dateFin" id="finTravaux" required="">
                    </div>
                </div>

                <div class="file">
                    <input type='file' id="photo" name="photo" accept="image/png, image/jpeg" required="">
                </div>
                
                <div class="inputField btn">
                    <button type="submit" id="form-submit" class="main-gradient-button">Valider</button>
                </div>

            </form>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script scr="../js/main.js"></script>
    </body>
</html>