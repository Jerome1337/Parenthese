<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "faq";
    $page = "faq";
    $pageTitle = "F.A.Q";

    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="faqContainer">
            <section class="row">
                <h2>F.A.Q</h2>
                <div class="large-6  medium-6 small-12 columns leftFaq">
                    <h3>Questions courantes des artistes</h3>
                    <div>
                        <h4>Comment puis-je être contacter pour un projet ?</h4>
                        <p>Si vous avez des compétences dans le graff, que vous êtes créatifs et motivés pour travailler avec des entreprises qui vous font confiance, il vous suffit d’aller sur la page «artistes» et de déposer votre candidature.</p>
                    </div>
                    <div>
                        <h4>Sous quelles conditions je peux participer à un projet ?</h4>
                        <p>Pour mener à bien les projets qui vous seront confiés, il faudra savoir pratiquer le graff, ne pas utiliser d’identité célèbre (ex : Bansky) et vivez votre passion !</p>
                    </div>
                    <div>
                        <h4>Comment fonctionne les contrats avec les entreprises ?</h4>
                        <p>Nous vous aidons à être mis en relation avec des entreprises désireuses d’utiliser votre don. Une fois la relation établie, c’est à vous de convenir avec l’entreprise des modalités de recrutement. Toute fois nous restons disponible si vous avez des questions.</p>
                    </div>
                    <div>
                        <h4>J’ai un style graphique propre à moi-même, cela posera-t-il un problème ?</h4>
                        <p>Il vous faudra bien communiquer avec votre futur entreprise pour lui dire que vous voulez garder votre style tout en gardant l’identité de la marque. C’est à vous de négocier votre travail.</p>
                    </div>
                    <div>
                        <h4>J’ai un blaze pour mes graffes personnels mais je ne souhaite pas l’utiliser, que faire ?</h4>
                        <p>Nous vous donnons la possibilité de rester anonyme en donnant un pseudo de votre choix ou votre prénom.</p>
                    </div>
                </div>
                <div class="large-6 medium-6 small-12 columns rightFaq">
                    <h3>Questions courantes des entreprises</h3>
                    <div>
                        <h4>Comment puis-je trouver un graffeur ?</h4>
                        <p>Pour trouvez un graffeur il vous suffit de nous soumettre votre projet dans la page «entreprises». Dans un premier temps, la mise en relation se fera uniquement par Bicravart et vous sera facturé.</p>
                    </div>
                    <div>
                        <h4>Comment sont fait les recrutements d’artistes ?</h4>
                        <p>Nous recevons les candidatures des graffeurs, nous prenons contact avec eux pour convenir d’un entretien afin de nous assurer des motivations et des compétences.</p>
                    </div>
                    <div>
                        <h4>Si le graffeur employé ne respecte pas ses engagements, puis-je vous contacter ?</h4>
                        <p>Une fois que nous vous avons mis en relation avec nos graffeurs, nous n’avons plus la charge de gérer les conflits. Pour d’avantages d’informations veuillez lire les «conditions générales d’utilisation».</p>
                    </div>
                </div>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>