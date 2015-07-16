<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "mentions";
    $page = "mentions";
    $pageTitle = "Mentions légales";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
			<section class="aboutContainer">
            	<section class="row">
            		<div class="large-12 medium-12 small-12 columns">
            			<h3>A propos</h3>
	                    <div>
	                        <h4>Notre agence</h4>
	                        <p>Créée en 2015 à Paris, la société Bicravart a pour but de mettre en relation les artistes, 
							en particuliers les graffeurs, avec des entreprises pour leur permettre d’accroitre leur notoriété 
							ainsi que de vivre de leur art.
							Parce que nous sommes soucieux de votre image, 
							nous vous accompagnons dans vos recherches et vous aidons à concrétiser vos projets.
							</p>
	                    </div>
            		</div>
            		<div class="large-3 medium-3 small-12 columns">
            			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero beatae eius nisi reprehenderit dolores eveniet corporis, iste illo et quas soluta architecto. Eaque quasi vitae sint ipsum culpa perferendis officia!</p>
            		</div>
            		<div class="large-3 medium-3 small-12 columns">
            			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero beatae eius nisi reprehenderit dolores eveniet corporis, iste illo et quas soluta architecto. Eaque quasi vitae sint ipsum culpa perferendis officia!</p>
            		</div>
            		<div class="large-3 medium-3 small-12 columns">
            			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero beatae eius nisi reprehenderit dolores eveniet corporis, iste illo et quas soluta architecto. Eaque quasi vitae sint ipsum culpa perferendis officia!</p>
            		</div>
            		<div class="large-3 medium-3 small-12 columns">
            			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero beatae eius nisi reprehenderit dolores eveniet corporis, iste illo et quas soluta architecto. Eaque quasi vitae sint ipsum culpa perferendis officia!</p>
            		</div>
            	</section>
            </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>