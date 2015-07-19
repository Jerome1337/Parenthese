<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "contact";
    $page = "contact";
    $pageTitle = "Contacts";
    $modalMessage = "Merci, votre message a bien été envoyé.";
    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="contactContainer underNav">
            <section class="row fullWidth titleContainer">
                <h2><img src="img/contactez-nous.png" alt="Contactez-nous image"></h2>
            </section>
            <section class="row fullWidth">
                <div class="large-4 medium-4 show-for-medium-up columns artistPart">
                    <h3>Vous êtes un artiste ?</h3>
                    <p></p>
                </div>
                <div class="large-4 medium-4 columns show-for-medium-up entreprisePart">
                    <h3>Vous êtes une entreprise ?</h3>
                    <p></p>
                </div>
                <div class="large-4 medium-4 columns show-for-medium-up coordoneesPart">
                    <h3>Coordonnées</h3>
                    <p></p>
                </div>
                <div class="small-12 columns show-for-small-only selectPart">
                    <select name="select" id="select">
                        <option value="artist">Vous êtes un artiste ?</option>
                        <option value="entreprise">Vous êtes une entreprise ?</option>
                        <option value="coordonees">Coordonnées</option>
                    </select>
                </div>
            </section>
            <section class="row">
                <div class="small-12 columns contactPart">
                    <form method="post" id="artistContact" class="forms">
                        <fieldset>
                            <legend>Formulaire contact artistes de Bicravart</legend>
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Nom*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="text" id="right-label" name="name" class="required artistChamp formArtistName">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">E-mail*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="email" id="right-label" name="email" class="required artistChamp formArtistEmail">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Téléphone*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="tel" id="right-label" name="tel" class="required artistChamp telInput formArtistTel">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Message*</label>
                                        </div>
                                        <div class="small-12 medium-8 large-6 columns champContainer">
                                            <textarea cols="30" rows="10"  name="message" id="right-label" class="required artistChamp formArtistMessage"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="formSubmit">Envoyer</button>
                        <p class="obg">*Champs obligatoires</p>
                    </form>
                    <form method="post" id="entrepriseContact" class="forms">
                        <fieldset>
                            <legend>Formulaire contact entreprise de Bicravart</legend>
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Entreprise*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="text" id="right-label" name="name" class="required entrepriseChamp formEntrepriseName">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">E-mail*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="email" id="right-label" name="email" class="required entrepriseChamp formEntrepriseEmail">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Téléphone*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="tel" id="right-label" name="tel" class="required entrepriseChamp telInput formEntrepriseTel">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Message*</label>
                                        </div>
                                        <div class="small-12 medium-8 large-6 columns champContainer">
                                            <textarea cols="30" rows="10"  name="message" id="right-label" class="required entrepriseChamp formEntrepriseMessage"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="formSubmit">Envoyer</button>
                        <p class="obg">*Champs obligatoires</p>
                    </form>
                    
                </div>
                <?php include('includes/modals.php'); ?>
            </section>
            <section class="row fullWidth">
                <div class="coordoneesSec">
                        <div class="infos">
                            <p>Paris</p>
                            <p>5 Rue Saint-Augustin, 75002 Paris</p>
                            <p>Tél : <span id="telNumb"></span></p>
                            <p class="email">Email : </p>
                        </div>
                        <div class="gmap">
                            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.4431060933184!2d2.3376011!3d48.8688289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3b07a8424d%3A0x1394f61585594c50!2s5+Rue+Saint-Augustin%2C+75002+Paris!5e0!3m2!1sfr!2sfr!4v1437082040931"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen>
                            </iframe>
                        </div>
                    </div>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>