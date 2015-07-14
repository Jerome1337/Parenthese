<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "references";
    $page = "references";
    $pageTitle = "Références";
    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="contactContainer">
            <section class="row">
                <div class="large-12 medium-12 small-12 columns">
                    <h2>Quand vos projets artistiques deviennent une réalité</h2>
                </div>
            </section>
            <section class="row">
                <h2>Nos références</h2>
                <section>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                </section>
                <section>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                </section>
                <section>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                    <div class="large-4 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                </section>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>