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
                    <h2>Prestations en live au Paris Manga &amp; Sci-Fi Show</h2>
                </div>
            </section>
            <section class="row fullWidth refContainer">
                <div class="large-1 medium-6 small-6 columns arrowLink">
                    <p><a href="reference-03.php" title="Lien vers la référence précedente" class="arrowLink1"></a></p>
                </div>
                <div class="large-1 medium-6 small-6 columns arrowLink link2">
                    <p><a href="reference-05.php" title="Lien vers la référence suivante" class="arrowLink2"></a></p>
                </div>
                <div class="bgColor large-10 medium-12 small-12 columns">
                    <div class="row">
                        <div class="large-7 medium-12 small-12 columns">
                            <img src="../img/references/reference-04.jpg" alt="reference 04">
                        </div>
                        <div class="large-5 medium-12 small-12 columns">
                            <div class="texte">
                                <h3>Prestations en live au Paris Manga &amp; Sci-Fi Show</h3>
                                <p>Une équipe de 5 artistes de Bicravart ont tenu un stand de prestations en live durant le Paris Manga & Sci-Fi Show qui s’est tenu les 3 et 4 novembres 2014 à Portes de la Villette.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="large-1 medium-6 small-6 columns arrowLink link3">
                    <p><a href="reference-05.php" title="Lien vers la référence suivante" class="arrowLink2"></a></p>
                </div>
            </section>
            <section class="row linkContainer">
                <div class="large-6 medium-6 small-12 columns">
                    <p>Vous êtes un artiste, et vous êtes rempli de talents. Vous souhaitez vivre de votre art et gagner en notorité ? Bicravart peut vous aider.</p>
                    <button><a href="http://www.bicravart.com/artistes">INSCRIPTION</a></button>
                </div>
                <div class="large-6 medium-6 small-12 columns">
                    <p>Vous êtes une entreprise et vous souhaitez bénéfier de nos plus grand artistes pour vos projets ? <br>Estimez votre projet.</p>
                    <button><a href="http://www.bicravart.com/entreprises">DEMANDER UN DEVIS</a></button>
                </div>
            </section>
        </section>
        <?php include('../includes/footer.php'); ?>
    </body>
</html>