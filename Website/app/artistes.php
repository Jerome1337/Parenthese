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
            <section class="row fullWidth">
                <h2>Nous contacter</h2>
                <div class="large-8  medium-6 small-12 columns descPart">
                    <p>Cette inscription vous permettra d’être mis en relation, grâce à Bicravart, avec les diverses entreprises souhaitant faire appelle à un graffeur pour leur projet.</p>
                    <p>Vos données seront gardées uniquement par la société Bicravart et dans le cadre des projets. Elles nous permettent de mieux vous connaître et ainsi répondre aux mieux à votre demande.</p>
                    <p>Les graffes seront fait en toute légalité et ne seront pas sujet à des poursuites judiciaires. Vous avez la possibilité de renseigner votre prénom ou un pseudo de votre choix pour garder l’anonymat sur votre blaze que vous utilisez dans vos graffes personnels.</p>
                    <p>Une question ? Rendez-vous sur les pages contact ou F.A.Q.</p>
                    <p>"Avec Bicravart, j'ai pu vraiment augmenter ma notoriété. Je suis passé d'un parfait inconnu à un artiste reconnu dans le monde entier. Je travaille aujourd'hui pour un constructeur automobile en tant que Graffeurs d'intérieur. Bicravart à changer ma vie."</p>
                    <p>"Avec Bicravart, j'ai pu vraiment augmenter ma notoriété. Je suis passé d'un parfait inconnu à un artiste reconnu dans le monde entier. Je travaille aujourd'hui pour un constructeur automobile en tant que Graffeurs d'intérieur. Bicravart à changer ma vie."</p>
                    <p>"Avec Bicravart, j'ai pu vraiment augmenter ma notoriété. Je suis passé d'un parfait inconnu à un artiste reconnu dans le monde entier. Je travaille aujourd'hui pour un constructeur automobile en tant que Graffeurs d'intérieur. Bicravart à changer ma vie."</p>
                </div>
                <div class="large-4 medium-6 small-12 columns contactPart">
                    <form method="post" id="formGraffeur">
                        <fieldset>
                            <legend>Formulaire d'inscription de Bicrav'art</legend>
                            <div>
                                <input type="text" placeholder="Prénom" name="name" id="formName">
                                <input type="text" placeholder="Pseudo" name="pseudo" id="formPseudo">
                                <input type="text" placeholder="Age" name="age" id="formAge">
                                <input type="tel" placeholder="Téléphone" name="tel" id="formTel">
                                <input type="email" placeholder="Email" name="email" id="formEmail">
                                <input type="text" placeholder="Objet" name="subject" id="formSubject">
                                <input type="text" placeholder="Website" name="Website" id="formWebsite">
                                <input type="text" placeholder="Compétences" name="competences" id="formComp">
                                <input type="text" placeholder="Prétention salariales" name="Sal" id="formSal">
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