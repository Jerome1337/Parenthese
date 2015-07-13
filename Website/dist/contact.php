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
            <section class="row fullWidth">
                <h2>Nous contacter</h2>
                <div class="large-8  medium-6 small-12 columns descPart">
                    <h3>Faites de vos projets des réussites !</h3>
                    <p>Imaginons ensemble de nouvelles solutions à vos projets.</p>
                    <h3>Vous avez une question ? Nous avons la réponse !</h3>
                    <p>Simple question ou envie d'en savoir un peu plus sur nous ? N'hésitez pas à nous contacter...</p>
                    <p>Des conseillers à l'écoute,</p>
                    <p>Bicravart s'est vraiment occupé de moi. Elle a vraiment pensé à mes objectifs professionels et elle m'a permis de décrocher un CDI chez Toy'R Us en tant que dessinateur pour enfant.</p>
                    <p>Bicravart s'est vraiment occupé de moi. Elle a vraiment pensé à mes objectifs professionels et elle m'a permis de décrocher un CDI chez Toy'R Us en tant que dessinateur pour enfant.</p>
                </div>
                <div class="large-4 medium-6 small-12 columns contactPart">
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