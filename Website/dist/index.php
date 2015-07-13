<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    
    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');

    $onglet_actif = "index";
    $page = "index";
    $pageTitle = "Accueil";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth videoHeight">
        <!-- INCLUDE NAV BAR -->
        <?php include('includes/nav.php'); ?>
            <div class="js-video widescreen">
                <div id="player1" class="youtube-player"></div>
                <div id="player2" class="youtube-player"></div>
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