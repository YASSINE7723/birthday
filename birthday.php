<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="birthday.css">
    <title>Anniversaire</title>
</head>
<body>
    <header>
        <h1>Zerkani Yassine</h1>
        <p>Date et Heure de la fête : 20/12/2024 à 19h30</p>
        <p>Nuit Étoilée</p>
        <a  href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/">Cliquez ici pour voir le lieu de la fête</a>
    </header>
    <p id="Welcome"> 🎉Welcome to my anniversary🎉 </p>

    <section class="informations">
        <button id="en-savoir-plus" onclick=displayExplanations()>En savoir plus</button>
        <p id="description" style="display: none;">Préparez-vous à une soirée extraordinaire pour célébrer votre anniversaire à venir ! Plongez dans une ambiance féérique avec le thème "Nuit Étoilée". La décoration scintillante comprendra des guirlandes lumineuses suspendues, des étoiles brillantes, et des lumières tamisées pour créer une atmosphère magique. Les invités seront accueillis par un tapis rouge scintillant, ajoutant une touche glamour à l'événement. Préparez-vous à être émerveillé par des animations spéciales, 
            y compris un spectacle de feux d'artifice qui illuminera le ciel nocturne. Un bar à cocktails sophistiqué 
            servira des boissons raffinées, et un buffet gastronomique mettra en vedette une sélection de mets délicats et de desserts exquis. Des musiciens talentueux ou un DJ seront présents pour animer la piste de danse, créant une ambiance festive et entraînante. Avec des invitations élégantes et des souvenirs étincelants, cette soirée sous les étoiles promet d'être un moment inoubliable pour vous et vos invités.</p>
    </section>
 
    <section class="inscription">
        <h2>Confirmez votre présence</h2>
        <form action="register.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="nombre">Nombre d'invités :</label>
            <input type="number" id="nombre" name="nombre" required>

            <button type="submit">Confirmer</button>
        </form>
        <p>Total Invités: <?php include 'count_guests.php'; ?> </p>
        
    </section>

    <script src="birthday.js"></script>
</body>
</html>
