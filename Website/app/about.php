<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "about";
    $page = "about";
    $pageTitle = "À propos";

    $path = "";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
			<section class="aboutContainer underNav">
                <section class="coinWrap">
            		<div class="row fullWidth titleContainer">
            			<h3><img class="pictopropos" src="img/A-Propos.svg" alt="A Propos"></h3>
                    </div>
                </section>
                <section class="row">
                    <div>
                        <h4>Notre agence</h4>
                        <p>Créée en 2015 à Paris, la société Bicravart a pour but de mettre en relation les artistes, 
						en particuliers les graffeurs, avec des entreprises pour leur permettre d’accroitre leur notoriété 
						ainsi que de vivre de leur art.
						Parce que nous sommes soucieux de votre image, 
						nous vous accompagnons dans vos recherches et vous aidons à concrétiser vos projets.
						</p>
                    </div>
            		<div class="large-3 medium-3 small-12 columns">
                        <img src="img/like.svg" alt="">
            			<p>L'exigence des compétences <br>et du professionnalisme<br> auprès des graffeurs</p>
            		</div>
            		<div class="large-3 medium-3 small-12 columns">
            			<img src="img/tel.svg" alt="telephone">
            			<p>Nous mettons à votre <br>disposition notre large <br>carnet d'adresse</p>
            		</div>
            		<div class="large-3 medium-3 small-12 columns">
            			<img src="img/graphic.svg" alt="graphic">
            			<p>Répondre au-delà de vos <br>attentes et penser <br>toujours plus loin</p>
            		</div>
            		<div class="large-3 medium-3 small-12 columns">
            			<img src="img/photo.svg" alt="photo">
            			<p>Travailler à vos côtés pour <br>que votre notoriété décolle</p>
            		</div>
            		<div class="large-12 medium-12 small-12 columns">
						<h4>Notre équipe</h4>
	                    <p>Découvrez notre équipe talentueuse</p>
            		</div>
                </section>  
                <section class="coinWrap">
                    <div class="row fullWidth photosContainer">
                        <section>
                            <div class="Hadrien large-3 medium-6 small-12 columns">
                                <p class="Name">Hadrien <br> Chef de projet</p>
                            </div>
                            <div class="Laura large-3 medium-6 small-12 columns">
                                <p class="Name">Laura <br> Motion Designer</p>
                            </div>
                            <div class="Marie large-3 medium-6 small-12 columns">
                                <p class="Name">Marie <br> UX Designer</p>
                            </div>
                            <div class="Stephane large-3 medium-6 small-12 columns">
                                <p class="Name">Stephane <br> UX Designer</p>
                            </div>
                        </section>
                        <section>
                            <div class="Lisa large-3 medium-6 small-12 columns">
                                <p class="Name">Lisa <br>Graffiste</p>
                            </div>
                            <div class="Pascal large-3 medium-6 small-12 columns">
                                <p class="Name">Pascal <br>Graffiste</p>
                            </div>
                            <div class="Elvis large-3 medium-6 small-12 columns">
                                <p class="Name">Elvis  <br>Développeur</p>
                            </div>
                            <div class="Jerome large-3 medium-6 small-12 columns">
                                <p class="Name">Jérome <br>Développeur</p>
                            </div>
                        </section>
                    </div>
                </section>
            </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>