<?php
// session_start();
// var_dump($_SESSION);

include('connection.php');
/*include('traitement.php');*/

$DatabaseName = "Agence";

$NewConnection = new MaConnection($DatabaseName, "root", "", "localhost");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Roshanimmo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link effect" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link effect" href="#properties">Nos Propriétés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link effect" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="home-section">
        <div class="container text-center">
            <h1>Bienvenue chez Roshanimmo</h1>
            <p>Découvrez notre sélection exclusive de propriétés de luxe à vendre et à louer.</p>
            <a href="#properties" class="btn btn-primary">Voir les propriétés</a>
        </div>
    </section>

    <hr class="transparent-divider">

    <section id="properties" class="properties-section">
        <div class="container">
            <hr class="transparent-divider">
            <h2>Nos Propriétés</h2>
            <select class="form-select" id="property-selector">
                <option value="all">Tous les biens</option>
                <option value="sale">Biens à vendre</option>
                <option value="rent">Biens à louer</option>
            </select>
            <div class="property-list">
                <div class="property-item">
                    <h3>Villa de Luxe avec Vue sur la Mer</h3>
                    <p>Prix : 1,500,000</p>
                    <button class="btn btn-secondary property-details">Détails</button>
                </div>
                <!-- Autres propriétés ici si besoin mais pas le temps -->
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <hr class="transparent-dividera">
            <h2>Contactez-nous</h2>
            <p>Pour toute question ou demande d'information, n'hésitez pas à nous contacter :</p>
            <form id="contact-form">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone :</label>
                    <input type="tel" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea id="message" class="form-control" rows="4" required></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </form>
        </div>
    </section>

    <footer class="container text-center">
        <p>&copy; 2023 . Roshanimmo [̲̅$̲̅(̲̅ιοο̲̅)̲̅$̲̅] . Tous droits réservés.</p>
    </footer>

</body>

</html>