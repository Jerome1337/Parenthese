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
                    <h2>"Monnayez votre art,<br> tout en gardant votre<br> annonymat"</h2>
                </div>
            </section>
        </section>
        <section class="container">
            <div class="row fullWidth">
                <p class="presentation">Bicrav’Art est un service de mise en relation entre les graffeurs et les<br>
                    entreprises pour des projets de graffes dans differents environements.
                </p>
            </div>
        </section>
        <section class="devisContainer">
            <div class="row fullWidth">
                <div class="left large-6 columns">
                    <p>Vous êtes un graffeur et vous souhaitez gagner de l'argent ? Vous souhaitez augmenter votre notoriété ? Enfin vous avez envie de vivre de votre art ? Ne perdez pas de temps, rejoignez-nous !</p>
                    <button type="submit" id="formSubmit">INSCRIVEZ-VOUS</button>
                </div>
                <div class="right large-6 columns">
                    <p>Vous êtes une entreprise et vous avez un projet artistique ? Vous ne savez par où commencer ? Vous n'avez pas d'idées précises ? Décrivez-nous votre projet, nous pouvons vous aider !</p>
                    <button type="submit" id="formSubmit">DEMANDER UN<br>DEVIS</button>
                </div>
            </div>
        </section>
        <section class="resultatContainer">
            <div class="row fullWidth">
                <div class="small-12 columns">
                    <p>Nos résultats</p>
                    <button type="submit" id="formSubmit">DECOUVREZ NOS REFERENCES</button>
                </div>               
            </div>
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
            </section>
        </section>
        <section class="feedContainer">
            <section class="row">
                <div class="row fullWidth">
                    <h3>Qui sommes-nous ?</h3>
                    <p>Des artistes aux entreprises, Bicravart mise sur son équipe d'experts pour offire le meilleur service qu'il soit, pour un accompagnement sur le long et court termes. Avec Bicravart, monnayez votre art.</p>
                    <a href="#"><button type="submit" id="formSubmit">DECOUVREZ L'AGENCE</button></a>
                </div>
            </section>
        </section>
        <!-- INCLUDES FOOTER + SCRIPT -->
        <?php include('includes/footer.php'); ?>
    </body>
</html>