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
            <section class="js-video widescreen">
                <div id="player1" class="youtube-player"></div>
                <div id="player2" class="youtube-player"></div>
                <div class="large-12 columns baseline">
                    <h2>"Monnayez votre art, tout en gardant votre annonymat"</h2>
                </div>
            </section>
        </section>
        <section class="descContainer">
            <section class="row">
                <h3>Qui sommes-nous ?</h3>
                <div class="large-6 medium-6 small-12 columns linkPart">
                    <a href="#" data-reveal-id="artistsModal">Ce que les artistes pensent de nous...</a>
                </div>
                <div class="large-6 medium-6 small-12 columns linkPart">
                    <a href="#" data-reveal-id="entreprisesModal">Ce que les entreprises pensent de nous...</a>
                </div>

                <!-- MODAL SECTION -->
                <div id="artistsModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                  <h2 id="modalTitle">Awesome. I have it.</h2>
                  <p class="lead">Your couch.  It is mine.</p>
                  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
                  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                </div>

                <div id="entreprisesModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                  <h2 id="modalTitle">Awesome. I have it.</h2>
                  <p class="lead">Your couch.  It is mine.</p>
                  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
                  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                </div>
            </section>
        </section>
        <section class="feedContainer">
            <section class="row">
                <div class="large-6 medium-6 small-12 columns linkPart">
                    <h3>Qui sommes-nous ?</h3>
                    <p>Des artistes aux entreprises, Bicravart mise sur son équipe d'experts pour offire le meilleur service qu'il soit, pour un accompagnement sur le long et court termes. Avec Bicravart, monnayez votre art.</p>
                    <a href="#">Découvrez l'agence</a>
                </div>
            </section>
        </section>
        <section class="">
            
        </section>
        <!-- INCLUDES FOOTER + SCRIPT -->
        <?php include('includes/footer.php'); ?>
    </body>
</html>