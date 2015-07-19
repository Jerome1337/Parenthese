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
        <section class="artistContainer underNav">
            <section class="coinWrap">
                <section class="row fullWidth titleContainer">
                    <h2><img src="img/artists/coin-des-artistes.png" alt="Image du titre de la page artistes"></h2>
                </section>
                <section class="row fullWidth explications">
                    <div class="large-4 medium-4 small-12 columns part1">
                        <div class="backgroundPa"></div>
                        <div class="textArt">
                            <h3>Monnayez votre art</h3>
                            <p>Votre talent et votre<br>créativité mérite salaire.<br>Les futurs contrats vous attendent.</p>
                        </div>
                    </div>
                    <div class="large-4 medium-4 small-12 columns part2">
                        <div class="backgroundPa"></div>
                        <div class="textArt">
                            <h3>Gagnez en visibilité</h3>
                            <p>Travaillez pour les plus<br>grandes entreprises avec<br>votre identité graphique.</p>
                        </div>
                    </div>
                    <div class="large-4 medium-4 small-12 columns part3">
                        <div class="backgroundPa"></div>
                        <div class="textArt">
                            <h3>Changez de vie</h3>
                            <p>La vie d'artiste est a porté<br>de bras. Il ne tiens qu'à<br>vous vivre de votre passion.</p>
                        </div>
                    </div>
                    <button class="scrollTo">INSCRIVEZ-VOUS</button>
                </section>
            </section>
            <section class="row artistWrap">
                <h2>Ils travaillent avec nous !</h2>
                <section>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne1Photo1.png" alt="Ligne 1 Photo 1">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne1Photo2.png" alt="Ligne 1 Photo 2">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne1Photo3.png" alt="Ligne 1 Photo 3">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne1Photo4.png" alt="Ligne 1 Photo 4">
                        <p class="artistName">Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne2Photo1.png" alt="Ligne 2 Photo 1">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne2Photo2.png" alt="Ligne 2 Photo 2">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne2Photo3.png" alt="Ligne 2 Photo 3">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne2Photo4.png" alt="Ligne 2 Photo 4">
                        <p class="artistName">Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne3Photo1.png" alt="Ligne 3 Photo 1">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne3Photo2.png" alt="Ligne 3 Photo 2">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne3Photo3.png" alt="Ligne 3 Photo 3">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne3Photo4.png" alt="Ligne 3 Photo 4">
                        <p class="artistName">Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne4Photo1.png" alt="Ligne 4 Photo 1">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne4Photo2.png" alt="Ligne 4 Photo 2">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne4Photo3.png" alt="Ligne 4 Photo 3">
                        <p class="artistName">Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns artistPictures">
                        <img src="img/artists/Ligne4Photo4.png" alt="Ligne 4 Photo 4">
                        <p class="artistName">Tasr</p>
                    </div>
                </section>
            </section>
            <section class="artistForm">
                <section class="row">
                    <h2>Devenez un artiste</h2>
                    <h3>Pour participer à de grand projets, remplissez le formulaire.</h3>
                    <div class="large-8 medium-8 small-12 columns small-centered contactPart">
                        <form method="post" id="formGraffeur" class="forms">
                            <fieldset>
                                <legend>Formulaire d'envoie de devis de Bicravart</legend>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="row fieldContainer">
                                            <div class="small-12 medium-3 large-3 columns labelContainer">
                                                <label for="right-label" class="right inline">Prénom ou Pseudo*</label>
                                            </div>
                                            <div class="small-12 medium-9 large-9 columns champContainer">
                                                <input type="text" id="right-label" name="name" class="required graffeurChamp formName">
                                            </div>
                                        </div>
                                        <div class="row fieldContainer">
                                            <div class="small-12 medium-3 large-3 columns labelContainer">
                                                <label for="right-label" class="right inline">Age</label>
                                            </div>
                                            <div class="small-12 medium-9 large-9 columns champContainer">
                                                <input type="number" id="right-label" name="age" class="required formAge">
                                            </div>
                                        </div>
                                        <div class="row fieldContainer">
                                            <div class="small-12 medium-3 large-3 columns labelContainer">
                                                <label for="right-label" class="right inline">Téléphone*</label>
                                            </div>
                                            <div class="small-12 medium-9 large-9 columns champContainer">
                                                <input type="tel" name="tel" id="right-label" class="required graffeurChamp telInput formTel">
                                            </div>
                                        </div>
                                        <div class="row fieldContainer">
                                            <div class="small-12 medium-3 large-3 columns labelContainer">
                                                <label for="right-label" class="right inline">E-mail*</label>
                                            </div>
                                            <div class="small-12 medium-9 large-9 columns champContainer">
                                                <input type="email" id="right-label" name="email" class="required graffeurChamp formEmail">
                                            </div>
                                        </div>
                                        <div class="row fieldContainer">
                                            <div class="small-12 medium-3 large-3 columns labelContainer">
                                                <label for="right-label" class="right inline">Site Internet</label>
                                            </div>
                                            <div class="small-12 medium-9 large-9 columns champContainer">
                                                <input type="url" name="website" id="right-label" value="http://" class="required formWebsite">
                                            </div>
                                        </div>
                                        <div class="row fieldContainer">
                                            <div class="small-12 medium-3 large-3 columns labelContainer">
                                                <label for="right-label" class="right inline">Compétences</label>
                                            </div>
                                            <div class="small-12 medium-9 large-9 columns champContainer">
                                                <input type="text" name="competences" id="right-label" class="required formComp">
                                            </div>
                                        </div>
                                        <div class="row fieldContainer">
                                            <div class="small-12 medium-3 large-3 columns labelContainer">
                                                <label for="right-label" class="right inline">Description du projet</label>
                                            </div>
                                            <div class="small-12 medium-9 large-9 columns champContainer">
                                                <input type="number" name="sal" id="right-label" class="required formSal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="formSubmit">Rejoignez-nous</button>
                            <p class="obg">*Champs obligatoires</p>
                        </form>
                    </div>
                    <?php include('includes/modals.php'); ?>
                </section>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>