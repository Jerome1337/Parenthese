<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <!-- INCLUDE DB CONNECTION + HEAD -->
    <?php include('includes/dbconnect.php');
    
    $onglet_actif = "entreprises";
    $page = "entreprises";
    $pageTitle = "Entreprises";
    $modalMessage = "Merci, votre demande de devis a bien été prise en compte.";
    include('includes/head.php');
    ?>
    <body>
        <section class="row fullWidth">
            <!-- INCLUDE NAV BAR -->
            <?php include('includes/nav.php'); ?>
        </section>
        <section class="entrepriseContainer underNav">
            <section class="row fullWidth titleContainer">
                <h2><img src="img/entreprises/espace-entreprise.png" alt="Image du titre de la page entreprises"></h2>
            </section>
<<<<<<< Updated upstream
            <section class="firstContainer">
=======
            <section>
>>>>>>> Stashed changes
                <section class="row">
                    <h3>Pourquoi nous faire confiance ?</h3>
                    <div class="large-6 medium-6 small-12 columns leftText">
                        <h4>Des artistes de qualités</h4>
                        <p>Nos artistes sont minutieusement selectionné par nos soins. Nous plaçons les artistes en fonction de vos projets. Chaque projet étant unique, nous mettons un point d'honneur à vous offrir ce qu'il y'a de mieux.</p>
                    </div>
<<<<<<< Updated upstream
                    <div class="large-6 medium-6 small-12 columns pictoWrap">
                        <p class="pictos"></p>
=======
                    <div class="large-6 medium-6 small-12 columns">
                        <div  class="pictos">
                            <!-- <img src="img/badge.svg" alt="Badge"> -->
                        </div>
>>>>>>> Stashed changes
                    </div>
                </section>
            </section>
            <section class="secondContainer">
                <section class="row">
<<<<<<< Updated upstream
                    <div class="large-6 medium-6 small-12 columns pictoWrap">
                        <p class="pictos"></p>
                    </div>
                    <div class="large-6 medium-6 small-12 columns rightText">
                        <h4>Des experts à votre écoute</h4>
                        <p>Nos agents sont des experts reconnus dans le monde de l'art. Avec eux, vos projets deviennent réalités.Chaque projet est géré par un expert qui vous accompagne tout au long de votre projet.</p>
                    </div>
=======
                    <div class="large-6 medium-6 small-12 columns">
                        <div  class="pictos2">
                            <!-- <img src="img/main.svg" alt="Mains"> -->
                        </div>
                    </div>
                    <div class="large-6 medium-6 small-12 columns">
                        <h3 class="text-left">Des experts à votre écoute</h3>
                        <p class="text-left">Nos agents sont des experts reconnus dans le monde de l'art. Avec eux, vos projets deviennent réalités.Chaque projet est géré par un expert qui vous accompagne tout au long de votre projet.</p>
                    </div>
>>>>>>> Stashed changes
                </section>
            </section>
            <section class="thirdContainer">
                <section class="row">
                    <div class="large-6 medium-6 small-12 columns leftText">
                        <h4>Des prestations adaptées</h4>
                        <p>Chaque projet étant unique, nous adptons notre offre à votre demande. Nous pouvons réaliser de grand projet comme de petit projet.</p>
                    </div>
<<<<<<< Updated upstream
                    <div class="large-6 medium-6 small-12 columns pictoWrap">
                        <p class="pictos"></p>
=======
                    <div class="large-6 medium-6 small-12 columns">
                        <div class="pictos">
                            <!-- <img class="reglage" src="img/reglage.svg" alt="reglage"> -->
                        </div>
>>>>>>> Stashed changes
                    </div>
                </section>
            </section>
            <section class="row">
                <h2>Votre projet nous intéresse</h2>
                <p>Décrivez votre projet pour que nous puissions vous trouvez le meilleur graffeur.</p>
                <div class="small-12 columns contactPart">
                    <form method="post" id="formDevis" class="forms">
                        <fieldset>
                            <legend>Formulaire d'envoie de devis de Bicravart</legend>
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Entreprise*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="text" id="right-label" name="name" class="required devisChamp formName">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">E-mail*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="email" id="right-label" name="email" class="required devisChamp formEmail">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Date du projet*</label>
                                        </div>
                                        <div class="small-12 medium-6 large-4 columns champContainer">
                                            <input type="date" id="right-label" name="date" class="required devisChamp telInput formDate">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Lieu de création*</label>
                                        </div>
                                        <div class="small-12 medium-8 large-6 columns champContainer">
                                            <input type="text" name="lieu" id="right-label" placeholder="Ex : Paris, 5 rue Saint Augustin"  class="required devisChamp formLieu">
                                        </div>
                                    </div>
                                    <div class="row fieldContainer">
                                        <div class="small-12 medium-3 large-3 columns labelContainer">
                                            <label for="right-label" class="right inline">Description du projet*</label>
                                        </div>
                                        <div class="small-12 medium-8 large-6 columns champContainer">
                                            <textarea cols="30" rows="10"  name="description" placeholder="Décrivez-nous votre projet, vos envies, vos attentes." id="right-label" class="required devisChamp formDesc"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="formSubmit">Soumettez votre projet</button>
                        <p class="obg">*Champs obligatoires</p>
                    </form>
                </div>
                <?php include('includes/modals.php'); ?>
            </section>
        </section>
        <?php include('includes/footer.php'); ?>
    </body>
</html>