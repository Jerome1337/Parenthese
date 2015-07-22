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
    <body class="transitionNav">
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
                    <img src="img/home/souris.png" alt="souris" id="mouseIcon">
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
                <p class="baselineText">"Monnayez votre art, tout en gardant votre anonymat"</p>
                <p class="explication">Bicravart est un service de mise en relation entre les graffeurs et les<br>entreprises pour des projets de graffes dans differents environnements.</p>
            </div>
        </section>
        <section class="devisContainer">
            <div class="row fullWidth">
                <div class="large-6 medium-6 small-12 columns artistBlock">
                    <h3>Vous etes un artiste</h3>
                    <p class="iconsDevis"></p>
                    <p class="txtWrap">Le milieu du street art est très élitiste et en pleine expansion. Devenez l’un des plus célèbres graffeurs et venez conquérir de nouveaux horizons.</p>
                    <a href="artistes.php" title="Lien vers la page artistes"><button>INSCRIVEZ-VOUS</button></a>
                </div>
                <div class="rlarge-6 medium-6 small-12 columns entrepriseBlock">
                    <h3>Vous etes une entreprise</h3>
                    <p class="iconsDevis"></p>
                    <p class="txtWrap">Dans ces temps où la concurrence est de plus en plus rude, venez moderniser votre image grâce à des artistes venus d'un nouveau monde.</p>
                    <a href="entreprises.php" title="Lien vers la page entreprises"><button>DEMANDER UN<br>DEVIS</button></a>                
                </div>
            </div>
        </section>
        <section class="resultatContainer">
            <div class="row fullWidth">
                <h3>Nos références</h3>
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
            <a href="references.php" title="Lien vers la page références"><button>DECOUVREZ NOS REFERENCES</button></a>
        </section>
        <section class="feedContainer">
            <section class="row fullWidth">
                <h3>Qui sommes-nous ?</h3>
                <p>Des artistes aux entreprises, Bicravart mise sur son équipe d'experts<br> pour offrir le meilleur service qu'il soit, pour un accompagnement sur<br> le long et court terme. Avec Bicrav'art, monnayez votre art.</p>
                <a href="about.php" title="Lien vers la page à propos"><button>DECOUVREZ L'AGENCE</button></a>
            </section>
        </section>
        <section class="descContainer">
            <section class="row">
                <div class="large-6 medium-6 small-12 columns temoignagePart">
                    <h3>LES ARTISTES ONT LA PAROLE</h3>
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
                            <p class="phrase">"Des experts disponibles et à notre écoute"</p>
                            <p class="from">SNCF</p>
                        </div>
                        <img class="large-4 medium-12 small-12 columns rightPic" src="img/home/img-05.jpg" alt="">
                    </div>
                    <div class="row temoignageRight">
                        <div class="large-8 medium-12 small-12 columns temoignagesText">
                            <p class="phrase">"Très satisfait du travail fourni par les artistes."</p>
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