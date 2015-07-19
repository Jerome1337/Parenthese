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
                    <h2>Loves wins</h2>
                </div>
            </section>
            <section class="row refContainer">
                <div class="large-6 medium-6 small-12 columns">
                    <img src="../img/references/reference-12.jpg" alt="reference 12">            
                </div>
                <div class="large-6 medium-6 small-12 columns">
                    <div class="texte">
                        <h3>Loves wins</h3>
                        <p>Commandé par les fleuristes Fleur Bleu à l’occasion du 14 fevrier, l’oeuvre couvre l’intégralité de la face avant du magasin. Il aura fallu moins de 5h pour réaliser l’oeuvre.</p>
                    </div>
                </div>
            </section>
            <section class="row">
                <div class="large-4 medium-4 small-12 columns">
                    <p>Vous êtes un artiste, et vous êtes rempli de talents. Vous souhaitez vivre de votre art et gagner en notorité ? Bicravart peut vous aider.</p>
                    <a href="http://www.bicravart.com/artistes"><button type="submit" class="formSubmit">INSCRIPTION</button></a>
                </div>
                <div class="large-4 medium-4 small-12 columns">
                    <p>Vous êtes une entreprise et vous souhaitez bénéfier de nos plus grand artistes pour vos projets ? <br>Estimer votre projet :</p>
                    <a href="http://www.bicravart.com/entreprises"><button type="submit" class="formSubmit">DEMANDER UN DEVIS</button></a>
                </div>
                <div class="large-4 medium-4 small-12 columns">
                </div>
            </section>
        </section>
        <?php include('../includes/footer.php'); ?>
    </body>
</html>