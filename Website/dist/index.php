<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    
    <!-- INCLUDE DB CONNECTION -->
    <?php include('includes/dbconnect.php'); ?>
    
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
        <title>Accueil - Bicrav'Art</title>
        <link rel="stylesheet" type="text/css" href="css/style.min.css" title="Style de base" media="all">
    </head>
<body></body>
<section class="row fullWidth videoHeight">
    <div class="js-video widescreen">
        <div id="player1" class="youtube-player"></div>
        <div id="player2" class="youtube-player"></div>
        
        <!-- INCLUDE NAV BAR -->
        <?php include('includes/nav.php'); ?>

        <div class="large-12 columns baseline">
            <h2>"Monnayez votre art, tout en gardant votre annonymat"</h2>
        </div>
    </div>
</section>
<section class="descContainer">
    <section class="row fullWidth whoAre">
            <div class="large-12 columns descPart">
                <h3>Qui sommes-nous ?</h3>
                <p>BicravArt est un service de mise en relation entre les graffeurs<br> et les entreprises pour des projets de graffes dans différents environnements.</p>
            </div>
            <div class="large-6 medium-6 small-12 columns linkPart">
                <p>Les graffeurs nous vous proposons de vous inscrire sur le site BicravArt dans la rubrique “Artistes”. Ainsi, nous récupérons des informations essentielles sur vous afin de mieux répondre aux demandes de votre futur employeur et de respecter au mieux votre univers.</p>
                <a href="#">Inscrivez-vous</a>
            </div>
            <div class="large-6 medium-6 small-12 columns linkPart">
                <p>Les entreprises sont invitées à remplir des informations pour la création de devis dans la rubrique “Entreprises”. Ces informations nous permettrons de comprendre votre projet et de cibler au mieux nos graffeurs pour un service de qualité.</p>
                <a href="#">Demander un devis</a>
            </div>
    </section>
</section>

<!-- INCLUDES FOOTER + SCRIPT -->
<?php include('includes/footer.php'); ?>
</body>
</html>