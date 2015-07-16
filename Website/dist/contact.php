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
                <div class="large-4 medium-4 columns artistPart">
                    <h3>Vous êtes un artiste ?</h3>
                </div>
                <div class="large-4 medium-4 columns entreprisePart">
                    <h3>Vous êtes une entreprise ?</h3>
                </div>
                <div class="large-4 medium-4 columns questionPart">
                    <h3>Vous avez une question ?</h3>
                </div>
                <div class="small-12 columns contactPart">
                    <form method="post" id="formContact">
                        <fieldset>
                            <legend>Formulaire contact de Bicrav'art</legend>
                            <div>
                                <input type="text" placeholder="Nom Prénom" name="name" id="formName">
                                <input type="tel" placeholder="Téléphone" name="tel" id="formTel">
                                <input type="email" placeholder="Email" name="email" id="formEmail">
                                <input type="text" placeholder="Objet" name="subject" id="formSubject">
                            </div>
                            <textarea cols="30" rows="10" placeholder="Message" name="message" id="formMessage"></textarea>
                            <button type="submit" id="formSubmit">Envoyer</button>
                        </fieldset>
                    </form>
                </div>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>