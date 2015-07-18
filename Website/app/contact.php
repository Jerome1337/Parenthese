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
            <section class="row fullWidth titleContainer">
               <h2>Contactez-nous</h2>
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
                    <form method="post" id="artistContact">
                        <fieldset>
                            <legend>Formulaire contact de Bicravart</legend>
                            <div>
                                <label for="formName">Nom* :</label>
                                <input type="text" name="name" id="formArtistName" class="required artistChamp">
                            </div>
                            <div>
                                <label for="formEmail">E-mail* :</label>
                                <input type="email" name="email" id="formArtistEmail" class="required artistChamp">
                            </div>
                            <div>
                                <label for="formTel">Téléphone* :</label>
                                <input type="tel" name="tel" id="formArtistTel" class="required artistChamp telInput">
                            </div>
                            <div>
                                <label for="formMessage">Message* :</label>
                                <textarea cols="30" rows="10" name="message" id="formArtistMessage" class="required artistChamp"></textarea>
                            </div>
                        </fieldset>
                        <button type="submit" class="formSubmit">Envoyer</button>
                        <p class="obg">*Champs obligatoires</p>
                    </form>
                    <form method="post" id="entrepriseContact">
                        <fieldset>
                            <legend>Formulaire contact de Bicravart</legend>
                            <div>
                                <label for="formName">Entreprise* :</label>
                                <input type="text" name="name" id="formEntrepriseName" class="required entrepriseChamp">
                            </div>
                            <div>
                                <label for="formEmail">E-mail* :</label>
                                <input type="email" name="email" id="formEntrepriseEmail" class="required entrepriseChamp">
                            </div>
                            <div>
                                <label for="formTel">Téléphone* :</label>
                                <input type="tel" name="tel" id="formEntrepriseTel" class="required entrepriseChamp telInput">
                            </div>
                            <div>
                                <label for="formMessage">Message* :</label>
                                <textarea cols="30" rows="10"  name="message" id="formEntrepriseMessage" class="required entrepriseChamp"></textarea>
                            </div>
                        </fieldset>
                        <button type="submit" class="formSubmit">Envoyer</button>
                        <p class="obg">*Champs obligatoires</p>
                    </form>
                    <div class="coordoneesSec">
                        <div class="infos">
                            <p>Paris</p>
                            <p>62 cours de Vincennes, 75012 Paris</p>
                            <p>Tél: <span id="telNumb"></span></p>
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
                    <!-- MODAL -->
                    <div id="formConfirm" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                      <h2 id="modalTitle">Awesome. I have it.</h2>
                      <p class="lead">Your couch.  It is mine.</p>
                      <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
                      <button id="sendForm" data-reveal-id="formSuccess">ENVOIE</button>
                      <button class="close-reveal-modal">ENVOIE PAS</button>
                      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                    </div>
                    <div id="formSuccess" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" aria-hidden="true" role="dialog">
                      <h2 id="secondModalTitle">This is a second modal.</h2>
                      <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
                      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                    </div>
                </div>

            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>