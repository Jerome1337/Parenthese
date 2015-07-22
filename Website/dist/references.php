<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "references";
    $page = "references";
    $pageTitle = "Références";

    $path = "";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="referencesContainer underNav">
            <section class="row fullWidth titleContainer">
                <div class="large-12 medium-12 small-12 columns">
                    <h2><img src="img/references/nos-references.png" alt="Nos références image"></h2>
                </div>
            </section>
            <section class="row referencesImages">
                <section>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-01.php" title="Lien faire la page référence 01">
                            <img src="img/references/reference-01.jpg" alt="Image référence 01">
                            <p class="referenceDesc">Fresque Supers Héros</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-02.php" title="Lien faire la page référence 02">
                            <img src="img/references/reference-02.jpg" alt="Image référence 02">
                            <p class="referenceDesc">Habillage de facade</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-03.php" title="Lien faire la page référence 03">
                            <img src="img/references/reference-03.jpg" alt="Image référence 03">
                            <p class="referenceDesc">Graffs au Parc des félins de Nels</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                </section>
                <section>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-04.php" title="Lien faire la page référence 04">
                            <img src="img/references/reference-04.jpg" alt="Image référence 04">
                            <p class="referenceDesc">Prestations en live au Paris Manga & Sci-Fi Show</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-05.php" title="Lien faire la page référence 05">
                            <img src="img/references/reference-05.jpg" alt="Image référence 05">
                            <p class="referenceDesc">Décoration pour la SPA</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-06.php" title="Lien faire la page référence 06">
                            <img src="img/references/reference-06.jpg" alt="Image référence 06">
                            <p class="referenceDesc">Le Brésil dans la ville</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                </section>
                <section>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-07.php" title="Lien faire la page référence 07">
                            <img src="img/references/reference-07.jpg" alt="Image référence 07">
                            <p class="referenceDesc">Habillage d’intérieur</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-08.php" title="Lien faire la page référence 08">
                            <img src="img/references/reference-08.jpg" alt="Image référence 08">
                            <p class="referenceDesc">Autoportrait</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-09.php" title="Lien faire la page référence 09">
                            <img src="img/references/reference-09.jpg" alt="Image référence 09">
                            <p class="referenceDesc">La blessure</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                </section>
                <section>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-10.php" title="Lien faire la page référence 10">
                            <img src="img/references/reference-10.jpg" alt="Image référence 10">
                            <p class="referenceDesc">Le gardien</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-11.php" title="Lien faire la page référence 11">
                            <img src="img/references/reference-11.jpg" alt="Image référence 11">
                            <p class="referenceDesc">Big Daddy</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-12.php" title="Lien faire la page référence 12">
                            <img src="img/references/reference-12.jpg" alt="Image référence 12">
                            <p class="referenceDesc">Loves wins</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                </section>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>