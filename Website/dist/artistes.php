<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "artistes";
    $page = "artistes";
    $pageTitle = "Artistes";
    $modalMessage = "Merci, votre inscription à bien été prise en compte.";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="contactContainer">
            <section class="row part1">
                <h2>Coins des artistes</h2>
                <div class="large-4 medium-4 small-12 columns">
                    <p>Monnayez votre art</p>
                    <p>Votre talent et votre créativité mérite salaire. Les futurs contrats vous attendent.</p> 
                </div>
                <div class="large-4 medium-4 small-12 columns">
                    <p>Gagnez en visibilité</p>
                    <p>Travaillez pour les plus grandes entreprises avec votre identité graphique.</p>
                </div>
                <div class="large-4 medium-4 small-12 columns">
                    <p>Changez de vie</p>
                    <p>La vie d'artiste est a porté de bras. Il ne tiens qu'à vous vivre de votre passion.</p>
                </div>
                <button type="submit" id="formSubmit">INSCRIVEZ-VOUS</button>
            </section>
            <section class="row">
                <h2>Ils travaillent avec nous !</h2>
                <section>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne1Photo1.png" alt="Ligne 1 Photo 1">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne1Photo2.png" alt="Ligne 1 Photo 2">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne1Photo3.png" alt="Ligne 1 Photo 3">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne1Photo4.png" alt="Ligne 1 Photo 4">
                        <p>Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne2Photo1.png" alt="Ligne 2 Photo 1">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne2Photo2.png" alt="Ligne 2 Photo 2">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne2Photo3.png" alt="Ligne 2 Photo 3">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne2Photo4.png" alt="Ligne 2 Photo 4">
                        <p>Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne3Photo1.png" alt="Ligne 3 Photo 1">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne3Photo2.png" alt="Ligne 3 Photo 2">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne3Photo3.png" alt="Ligne 3 Photo 3">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne3Photo4.png" alt="Ligne 3 Photo 4">
                        <p>Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne4Photo1.png" alt="Ligne 4 Photo 1">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne4Photo2.png" alt="Ligne 4 Photo 2">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne4Photo3.png" alt="Ligne 4 Photo 3">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="img/Ligne4Photo4.png" alt="Ligne 4 Photo 4">
                        <p>Tasr</p>
                    </div>
                </section>
            </section>
            <section class="row">
                <h2>Devenez un artiste</h2>
                <h3>Pour participer à de grand projets, remplissez le formulaire.</h3>
                <div class="large-8 medium-8 small-12 columns contactPart">
                    <form method="post" id="formGraffeur">
                        <fieldset>
                            <legend>Formulaire d'inscription de Bicrav'art</legend>
                            <div>
                                <label for="formName">Prénom ou Pseudo* :</label>
                                <input type="text" placeholder="Prénom ou Pseudo" name="name" id="formName" class="required graffeurChamp">
                            </div>
                            <div>
                                <label for="formAge">Age :</label>
                                <input type="number" placeholder="Age" name="age" id="formAge" class="required graffeurChamp">
                            </div>
                            <div>
                                <label for="formTel">Téléphone* :</label>
                                <input type="tel" placeholder="Téléphone" name="tel" id="formTel" class="required graffeurChamp telInput">
                            </div>
                            <div>
                                <label for="formEmail">E-Mail :</label>
                                <input type="email" placeholder="E-mail" name="email" id="formEmail" class="required graffeurChamp">
                            </div>
                            <div>
                                <label for="formWebsite">Site Internet :</label>
                                <input type="url" placeholder="Site internet" value="http://" name="website" id="formWebsite" class="required graffeurChamp">
                            </div>
                            <div>
                                <label for="formComp">Compétences :</label>
                                <input type="text" placeholder="Compétences" name="competences" id="formComp" class="required graffeurChamp">
                            </div>
                            <div>
                                <label for="formSal">Taux horaire :</label>
                                <input type="number" placeholder="Taux Horaire" name="Sal" id="formSal" class="required graffeurChamp">
                            </div>
                        </fieldset>
                        <button type="submit" id="formSubmit">Envoyer</button>
                    </form>
                </div>
                <?php include('includes/modals.php'); ?>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>