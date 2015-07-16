<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "entreprises";
    $page = "entreprises";
    $pageTitle = "Entreprises";
    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="contactContainer">
            <section class="row">
                <div class="large-12 medium-12 small-12 columns">
                    <h2>Quand vos projets artistiques deviennent une réalité</h2>
                </div>
            </section>
            <section class="row">
                <h2>Pourquoi nous faire confiance ?</h2>
                <section>
                    <div class="large-6 medium-6 small-12 columns">
                        <h3>Des artistes de qualités</h3>
                        <p>Nos artistes sont minutieusement selectionné par nos soins. Nous plaçons les artistes en fonction de vos projets. Chaque projet étant unique, nous mettons un point d'honneur à vous offrir ce qu'il y'a de mieux.</p>
                    </div>
                    <div class="large-6 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                </section>
                <section>
                    <div class="large-6 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                    <div class="large-6 medium-6 small-12 columns">
                        <h3>Des experts à votre écoute</h3>
                        <p>Nos agents sont des experts reconnus dans le monde de l'art. Avec eux, vos projets deviennent réalités.Chaque projet est géré par un expert qui vous accompagne tout au long de votre projet.</p>
                    </div>
                </section>
                <section>
                    <div class="large-6 medium-6 small-12 columns">
                        <h3>Des prestations adaptées</h3>
                        <p>Chaque projet étant unique, nous adptons notre offre à votre demande. Nous pouvons réaliser de grand projet comme de petit projet.</p>
                    </div>
                    <div class="large-6 medium-6 small-12 columns">
                        <img src="#" alt="#">
                    </div>
                </section>
            </section>
            <section class="row">
                <h2>Demander un devis</h2>
                <div class="large-8 medium-8 small-12 columns contactPart">
                    <form method="post" id="formDevis">
                        <fieldset>
                            <legend>Formulaire d'envoie de devis de Bicrav'art</legend>
                            <div>
                                <label for="formName">Nom de l'entreprise* :</label>
                                <input type="text" placeholder="Nom de l'entreprise" name="name" id="formName">
                            </div>
                            <div>
                                <label for="formEmail">E-Mail :</label>
                                <input type="email" placeholder="E-mail" name="email" id="formEmail">
                            </div>
                            <div>
                                <label for="formDate">Date du projet* :</label>
                                <input type="date" placeholder="Date du projet" name="date" id="formDate">
                            </div>
                            <div>
                                <label for="formLieu">Lieu de création* :</label>
                                <input type="text" placeholder="Ex : Paris, 5 rue Saint Augustin" name="lieu" id="formLieu">
                            </div>
                            <div>
                                <label for="formDesc">Description du projet :</label>
                                <textarea cols="30" rows="10" placeholder="Décrivez-nous votre projet, vos envies, vos attentes." name="description" id="formDesc"></textarea>
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