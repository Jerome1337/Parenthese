<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "contact";
    $page = "contact";
    $pageTitle = "Contacts";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="contactContainer">
            <h2>Contactez-nous</h2>
            <section class="row">
                <div class="large-4 medium-4 show-for-medium-up columns artistPart">
                    <h3>Vous êtes un artiste ?</h3>
                </div>
                <div class="large-4 medium-4 columns show-for-medium-up entreprisePart">
                    <h3>Vous êtes une entreprise ?</h3>
                </div>
                <div class="large-4 medium-4 columns show-for-medium-up coordoneesPart">
                    <h3>Coordonnées</h3>
                </div>
                <div class="small-12 columns show-for-small-only selectPart">
                    <select name="select">
                        <option>Vous êtes un artiste ?</option>
                        <option>Vous êtes une entreprise ?</option>
                        <option>Coordonnées</option>
                    </select>
                </div>
                <div class="small-12 columns contactPart">
                    <form method="post" id="artistContact">
                        <fieldset>
                            <legend>Formulaire contact de Bicravart</legend>
                            <div>
                                <label for="formName">Nom* :</label>
                                <input type="text" placeholder="Nom" name="name" id="formName">
                            </div>
                            <div>
                                <label for="formEmail">E-mail* :</label>
                                <input type="email" placeholder="Email" name="email" id="formEmail">
                            </div>
                            <div>
                                <label for="formTel">Téléphone* :</label>
                                <input type="tel" placeholder="Téléphone" name="tel" id="formTel">
                            </div>
                            <div>
                                <label for="formMessage">Message* :</label>
                                <textarea cols="30" rows="10" placeholder="Message" name="message" id="formMessage"></textarea>
                            </div>
                            <button type="submit" id="formSubmit">Envoyer</button>
                        </fieldset>
                        <span>*Champs obligatoires</span>
                    </form>
                    <form method="post" id="entrepriseContact">
                        <fieldset>
                            <legend>Formulaire contact de Bicravart</legend>
                            <div>
                                <label for="formName">Nom* :</label>
                                <input type="text" placeholder="Nom" name="name" id="formName">
                            </div>
                            <div>
                                <label for="formEmail">E-mail* :</label>
                                <input type="email" placeholder="Email" name="email" id="formEmail">
                            </div>
                            <div>
                                <label for="formTel">Téléphone* :</label>
                                <input type="tel" placeholder="Téléphone" name="tel" id="formTel">
                            </div>
                            <div>
                                <label for="formMessage">Message* :</label>
                                <textarea cols="30" rows="10" placeholder="Message" name="message" id="formMessage"></textarea>
                            </div>
                            <button type="submit" id="formSubmit">Envoyer</button>
                        </fieldset>
                        <span>*Champs obligatoires</span>
                    </form>
                    <div class="coordonees">
                        <p>Paris</p>
                        <p>62 cours de Vincennes, 75012 Paris</p>
                        <p>Tél: 05 61 11 76 55</p>
                        <p class="email"></p>
                    </div>
                </div>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>