<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "artistes";
    $page = "artistes";
    $pageTitle = "Artistes";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="contactContainer">
            <section class="row">
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
            </section>
            <button type="submit" id="formSubmit">INSCRIVEZ-VOUS</button>
            <section class="row">
                <h2>Ils travaillent avec nous !</h2>
                <section>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                </section>
                <section>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
                        <p>Tasr</p>
                    </div>
                    <div class="large-3 medium-6 small-12 columns">
                        <img src="#" alt="#">
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
                                <input type="text" placeholder="Prénom ou Pseudo" name="name" id="formName">
                            </div>
                            <div>
                                <label for="formAge">Age :</label>
                                <input type="number" placeholder="Age" name="age" id="formAge">
                            </div>
                            <div>
                                <label for="formTel">Téléphone* :</label>
                                <input type="tel" placeholder="Téléphone" name="tel" id="formTel">
                            </div>
                            <div>
                                <label for="formEmail">E-Mail :</label>
                                <input type="email" placeholder="E-mail" name="email" id="formEmail">
                            </div>
                            <div>
                                <label for="formWebsite">Site Internet :</label>
                                <input type="url" placeholder="Site internet" value="http://" name="website" id="formWebsite">
                            </div>
                            <div>
                                <label for="formComp">Compétences :</label>
                                <input type="text" placeholder="Compétences" name="competences" id="formComp">
                            </div>
                            <div>
                                <label for="formSal">Taux horaire :</label>
                                <input type="number" placeholder="Taux Horaire" name="Sal" id="formSal">
                            </div>
                            <button type="submit" id="formSubmit">Envoyer</button>
                        </fieldset>
                    </form>
                </div>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>