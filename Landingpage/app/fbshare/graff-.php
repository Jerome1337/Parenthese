<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <?php
        // DB CONNECTION
        $dsn = 'mysql:dbname=doyouclixubicrav;host=doyouclixubicrav.mysql.db';
        $user = 'doyouclixubicrav';
        $password = '5aGHC6aRJNbe';

        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }

        // CURRENT URL FINDER
        $currentUrl = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        // echo $currentUrl;

        // GRAFF NUMBER
        $graffNumb = substr($currentUrl, 28, 10);
        // echo $graffNumb;
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Bicrav'art est un système permetant la mise en relation des graffeurs et clients.">
        <meta name="keywords" content="bicravart, bricrav'art, graffeur, galerie, bicrave, art, graff, decoration, agence, artiste, artistes">
        <meta name="viewport" content="width=device-width, initial-scale=yes">
        <meta name="HandheldFriendly" content="true">
        <meta property="og:title" content="Bicrav'Art">
        <meta property="og:site_name" content="Bicrav'Art">
        <meta property="og:url" content="http://bicravart.com/fbshare/graff-<?php echo $graffNumb ?>">
        <meta property="og:description" content="Bicrav'art est un système permetant la mise en relation des graffeurs et clients.">
        <meta property="fb:app_id" content="696716717101760">
        <meta property="og:type" content="website">
        <meta property="og:image" content="http://www.bicravart.com/img/ImgShare.png">
        <meta property="og:image:width" content="1280">
        <meta property="og:image:height" content="673">
        <link rel="apple-touch-icon" sizes="57x57" href="../img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../img/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="../img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="../img/favicons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="../img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="../img/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="../img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="../img/favicons/manifest.json">
        <link rel="shortcut icon" href="../img/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="i../mg/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="../img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <title>Bicrav'art arrive bientôt !</title>
        <link rel="stylesheet" type="text/css" href="../css/style.min.css" title="Style de base" media="all">
    </head>
    <body>
        <section class="fullWidth">
            <div class="leftBar">
                <div>
                    <img src="../img/bicravart_logo.png" alt="Logo bicrav'art">
                </div>
                <h1>Monnayez votre art,<br> tout en gardant votre anonymat.</h1>
                <h2 class="descText">Pour vous, un graff est une véritable oeuvre d'art et doit se vendre comme telle.</h2>
                <h2 class="descText">Avec Bicrav'art, nous vous offrons la possibilité de vous faire rémunérer pour des prestations de graff.</h2>
                <h2 class="descText">Retrouvez-nous très bientôt et venez connaître nos opportunités pour faire de vous un véritable professionnel.</h2>
                <p class="line"></p>
                <div class="blocBas">
                    <div class="socialButtons">
                        <p>Suivez-nous</p>
                        <a href="https://www.facebook.com/pages/Bicravart/1669532299949727" target="_blank" class="fbLink" title="Lien de la page Facebook de Bicrav'art" onclick="ga('send', 'event', 'Clics', 'Facebook', 'Bouton_Page_Facebook');"></a>
                        <a href="https://instagram.com/bicravart" target="_blank" class="instagramLink" title="Lien de la page Intagram de Bicrav'art" onclick="ga('send', 'event', 'Clics', 'Instagram', 'Bouton_Page_Instagram');"></a>
                    </div>
                    <div class="shareContainer">
                        <a href="http://bicravart.com" title="Lien de la palette de graff" class="button" >Venez graffez !</a>
                    </div>
                </div>
                <div class="colorbar-left"></div>
                <div class="colorbar-right"></div>
            </div>
            <div class="rightBar" id="drawerContainer">
                <img src="../img/graff/graff-<?php echo $graffNumb ?>.png" alt="Graff numéro <?php echo $graffNumb ?>" id="graffScreen">
            </div>
        </section>
        <script  type="text/javascript" src="../js/modernizr.js"></script>
        <script  type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript">
            function launchShare() {
                var lien = 'http://bicravart.com/fbshare/graff-<?php echo $graffNumb ?>';
                FB.ui({
                    method: 'share',
                    display: 'popup',
                    href: lien
                }, function(response){});
                console.log(lien);
            }
            window.onload = launchShare;

            $.ajaxSetup({
                cache: true
            });
            $.getScript('//connect.facebook.net/fr_FR/all.js', function() {
                FB.init({
                    appId: '696716717101760',
                });
                $('#loginbutton,#feedbutton').removeAttr('disabled');
                FB.getLoginStatus(function() {
                    console.log('Status updated!');
                });
            });
        </script>
    </body>
</html>