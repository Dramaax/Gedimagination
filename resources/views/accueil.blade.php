<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Gedimagination</title>
</head>
<body>
    <section class="contact-us" id="contact-section">
        <form id="contact" action="{{ url('verif')}}" method="get">
            <div class='welcome-page'>
                <input type='submit' value="S'inscrire">
            </div>
            <div class='welcome-page'>
                <input type='submit' value='Participer au'>
            </div>
        </form>
    </section>
</body>