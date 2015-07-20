<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    
    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    $onglet_actif = "index";
    $page = "index";
    $pageTitle = "Accueil";

    $navclass = "transparentNav";
    $path = "";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="row fullWidth videoHeight show-for-medium-up">
            <section class="js-video widescreen">
                <div id="videosOverlay"></div>
                <div id="player1" class="youtube-player"></div>
                <div id="player2" class="youtube-player"></div>
                <div class="large-12 columns baseline">
                    <h2><img src="img/home/title-home.png" alt="Image du titre de la page d'accueil"></h2>
                    <p id="interactivKey">Appuyez sur <span class="yellowZ">N</span><br>pour passer en mode nuit.</p>
                    <img src="img/home/souris.png" alt="souris">
                </div>
            </section>
        </section>
        <section class="mobileContent show-for-small-only underNav">
            <section class="row fullWidth">
                <h2><img src="img/home/title-home.png" alt="Image du titre de la page d'accueil"></h2>
            </section>
        </section>
        <section class="explainContainer">
            <div class="row fullWidth">
                <p class="explication">Bicrav’Art est un service de mise en relation entre les graffeurs et les<br>entreprises pour des projets de graffes dans differents environements.</p>
            </div>
        </section>
        <section class="devisContainer">
            <div class="row fullWidth">
                <div class="large-6 medium-6 small-12 columns artistBlock">
                    <h3>Vous etes un artiste</h3>
                    <p class="iconsDevis"></p>
                    <p class="txtWrap">Vous êtes un graffeur et vous souhaitez gagner de l'argent ? Vous souhaitez augmenter votre notoriété ? Enfin vous avez envie de vivre de votre art ? Ne perdez pas de temps, rejoignez-nous !</p>
                    <button><a href="artistes.php" title="Lien vers la page artistes">INSCRIVEZ-VOUS</a></button>
                </div>
                <div class="rlarge-6 medium-6 small-12 columns entrepriseBlock">
                    <h3>Vous etes une entreprise</h3>
                    <p class="iconsDevis"></p>
                    <p class="txtWrap">Vous êtes une entreprise et vous avez un projet artistique ? Vous ne savez par où commencer ? Vous n'avez pas d'idées précises ? Décrivez-nous votre projet, nous pouvons vous aider !</p>
                    <button><a href="entreprises.php" title="Lien vers la page entreprises">DEMANDER UN<br>DEVIS</a></button>
                </div>
            </div>
        </section>
        <section class="resultatContainer">
            <div class="row fullWidth">
                <h3>Nos résultats</h3>
                <section>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-01.php">
                            <img src="img/references/reference-01.jpg" alt="Image référence 01">
                            <p class="referenceDesc">Fresque Supers Héros</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-02.php">
                            <img src="img/references/reference-02.jpg" alt="Image référence 02">
                            <p class="referenceDesc">Habillage de facade</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns imgWrap">
                        <a href="reference/reference-03.php">
                            <img src="img/references/reference-03.jpg" alt="Image référence 03">
                            <p class="referenceDesc">Graffs au Parc des félins de Nels</p>
                            <span class="plusIcon"></span>
                        </a>
                    </div>
                </section>
            </div>
            <button><a href="references.php" title="Lien vers la page références">DECOUVREZ NOS REFERENCES</a></button>
        </section>
        <section class="feedContainer">
            <section class="row fullWidth">
                <h3>Qui sommes-nous ?</h3>
                <p>Des artistes aux entreprises, Bicravart mise sur son équipe d'experts<br> pour offire le meilleur service qu'il soit, pour un accompagnement sur<br> le long et court terme. Avec Bicrav'art, monnayez votre art.</p>
                <button><a href="about.php" title="Lien vers la page à propos">DECOUVREZ L'AGENCE</a></button>
            </section>
        </section>
        <section class="descContainer">
            <section class="row">
                <div class="large-6 medium-6 small-12 columns temoignagePart">
                    <h3>LES ARTISTES ONT LA PAROLES</h3>
                    <div class="row temoignageLeft">
                        <img class="large-4 medium-12 small-12 columns leftPic" src="img/home/img-01.jpg" alt="">
                        <div class="large-8 medium-12 small-12 columns temoignagesText">
                            <p class="phrase">"Je suis devenu un véritable artiste grace à Bicrav'art !"</p>
                            <p class="from">Tasr</p>
                        </div>
                    </div>
                    <div class="row temoignageLeft">
                        <img  class="large-4 medium-12 small-12 columns leftPic"src="img/home/img-02.jpg" alt="">
                        <div class="large-8 medium-12 small-12 columns temoignagesText">
                            <p class="phrase">"Aujourd'hui je ne vis que de mon art."</p>
                            <p class="from">Pablo P.</p>
                        </div>
                    </div>
                    <div class="row temoignageLeft">
                        <img  class="large-4 medium-12 small-12 columns leftPic"src="img/home/img-03.jpg" alt="">
                        <div class="large-8 medium-12 small-12 columns temoignagesText">
                            <p class="phrase">"Avec Bicrav'art j'ai pu prendre part à de grands projets"</p>
                            <p class="from">Serguey</p>
                        </div>
                    </div>
                </div>
                <div class="large-6 medium-6 small-12 columns temoignagePart">
                    <h3>CE QUE LES ENTREPRISES PENSENT DE NOUS</h3>
                    <div class="row temoignageRight">
                        <div class="large-8 medium-12 small-12 columns temoignagesText">
                            <p class="phrase">"Les meilleurs graffeurs sont sur Bicrav'art"</p>
                            <p class="from">Maire de Torcy</p>
                        </div>
                        <img class="large-4 medium-12 small-12 columns rightPic" src="img/home/img-04.jpg" alt="">
                    </div>
                    <div class="row temoignageRight">
                        <div class="large-8 medium-12 small-12 columns temoignagesText">
                            <p class="phrase">"Des expert disponible et à notre écoute"</p>
                            <p class="from">SNCF</p>
                        </div>
                        <img class="large-4 medium-12 small-12 columns rightPic" src="img/home/img-05.jpg" alt="">
                    </div>
                    <div class="row temoignageRight">
                        <div class="large-8 medium-12 small-12 columns temoignagesText">
                            <p class="phrase">"Très satisfait du travail fournit par les artistes."</p>
                            <p class="from">Marie de Chessy</p>
                        </div>
                        <img class="large-4 medium-12 small-12 columns rightPic" src="img/home/img-06.jpg" alt="">
                    </div>
                </div>
            </section>
        </section>
        <!-- INCLUDES FOOTER + SCRIPT -->
        <?php include('includes/footer.php'); ?>
    </body>
</html>