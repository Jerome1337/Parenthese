<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <?php
    /* Connexion à une base ODBC avec l'invocation de pilote */
    // $dsn = 'mysql:dbname=doyouclixubicrav;host=doyouclixubicrav.mysql.db';
    // $user = 'doyouclixubicrav';
    // $password = '5aGHC6aRJNbe';
    // try {
    //     $dbh = new PDO($dsn, $user, $password);
    // } catch (PDOException $e) {
    //     echo 'Connexion échouée : ' . $e->getMessage();
    // }
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Bicrav'art est un système permettant la mise en relation des graffeurs et clients.">
        <meta name="keywords" content="bicravart, bricrav'art, graffeur, galerie, bicrave, art, graff, decoration, agence, artiste, artistes">
        <meta name="viewport" content="width=device-width, initial-scale=yes">
        <meta name="HandheldFriendly" content="true">
        <meta property="og:title" content="Bicrav'Art">
        <meta property="og:site_name" content="Bicrav'Art">
        <meta property="og:url" content="http://bicravart.com/">
        <meta property="og:description" content="Bicrav'art est un système permettant la mise en relation des graffeurs et clients.">
        <meta property="fb:app_id" content="696716717101760">
        <meta property="og:type" content="website">
        <meta property="og:image" content="http://www.bicravart.com/img/ImgShare.png">
        <meta property="og:image:width" content="1280">
        <meta property="og:image:height" content="673">
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/favicons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="img/favicons/manifest.json">
        <link rel="shortcut icon" href="img/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <title>Contacts - Bicrav'Art</title>
        <link rel="stylesheet" type="text/css" href="css/style.min.css" title="Style de base" media="all">
    </head>
<body></body>
<section class="row fullWidth">
    <nav class="top-bar navBar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">Bicravart</a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Artistes</a></li>
                <li><a href="#">Entreprises</a></li>
                <li><a href="#">Références</a></li>
                <li><a href="contact.php">Contacts</a></li>
            </ul>
        </section>
    </nav>
</section>
<section class="contactContainer">
    <section class="row fullWidth">
        <h2>Nous contacter</h2>
        <div class="large-8  medium-6 small-12 columns descPart">
            <h3>Faites de vos projets des réussites !</h3>
            <p>Imaginons ensemble de nouvelles solutions à vos projets.</p>
            <h3>Vous avez une question ? Nous avons la réponse !</h3>
            <p>Simple question ou envie d'en savoir un peu plus sur nous ? N'hésitez pas à nous contacter...</p>
            <p>Des conseillers à l'écoute,</p>
            <p>Bicravart s'est vraiment occupé de moi. Elle a vraiment pensé à mes objectifs professionels et elle m'a permis de décrocher un CDI chez Toy'R Us en tant que dessinateur pour enfant.</p>
            <p>Bicravart s'est vraiment occupé de moi. Elle a vraiment pensé à mes objectifs professionels et elle m'a permis de décrocher un CDI chez Toy'R Us en tant que dessinateur pour enfant.</p>
        </div>
        <div class="large-4 medium-6 small-12 columns contactPart">
            <form method="post" id="formContact">
                <fieldset>
                    <legend>Formulaire contact de Bicrav'art</legend>
                    <div>
                        <input type="text" placeholder="Nom Prénom" name="name" id="formName">
                        <input type="tel" placeholder="Téléphone" name="tel" id="formTel">
                        <input type="email" placeholder="Email" name="email" id="formEmail">
                        <input type="text" placeholder="Objet" name="subject" id="formSubject">
                    </div>
                    <textarea cols="30" rows="10" placeholder="Message" name="message" id="formMessage"></textarea>
                    <button type="submit" id="formSubmit">Envoyer</button>
                </fieldset>
            </form>
        </div>
    </section>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>