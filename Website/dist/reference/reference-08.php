<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('../includes/dbconnect.php');
    
    $onglet_actif = "references";
    $page = "references";
    $pageTitle = "Références";
    $modalMessage = "Merci, votre demande de devis a bien été prise en compte.";
    
    $path = "../";
    
    include('../includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('../includes/nav.php'); ?>
        </section>
        <section class="referencesPageContainer underNav">
            <section class="row fullWidth titleContainer">
                <div class="large-12 medium-12 small-12 columns">
                    <h2>Autoportrait</h2>
                </div>
            </section>
            <section class="row refContainer">
                <div class="large-7 medium-12 small-12 columns">
                    <img src="../img/references/reference-08.jpg" alt="reference 08">            
                </div>
                <div class="large-5 medium-12 small-12 columns">
                    <div class="texte">
                        <h3>Autoportrait</h3>
                        <p>A l'occasion de l’anniversaire du doyen de la ville de Torcy, la mairie à commander un portrait de de cet homme. L’oeuvre couvre actuellement le mur de la mairie.</p>
                    </div>
                </div>
            </section>
            <section class="row linkContainer">
                <div class="large-6 medium-6 small-12 columns">
                    <p>Vous êtes un artiste, et vous êtes rempli de talents. Vous souhaitez vivre de votre art et gagner en notorité ? Bicravart peut vous aider.</p>
                    <button><a href="http://www.bicravart.com/artistes">INSCRIPTION</a></button>
                </div>
                <div class="large-6 medium-6 small-12 columns">
                    <p>Vous êtes une entreprise et vous souhaitez bénéfier de nos plus grand artistes pour vos projets ? <br>Estimer votre projet :</p>
                    <button><a href="http://www.bicravart.com/entreprises">DEMANDER UN DEVIS</a></button>
                </div>
            </section>
        </section>
        <?php include('../includes/footer.php'); ?>
    </body>
</html>