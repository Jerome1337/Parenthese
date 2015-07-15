<div class="contain-to-grid sticky">
    <nav class="top-bar navBar" data-topbar role="navigation" data-options="sticky_on: large">
        <ul class="title-area">
            <li class="name">
                <h1><a href="index.php"><img src="img/bicravart-blanc.png" alt="Logo Bicravart"></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li <?php echo ($page == "index" ? "class=\"active\"" : "")?>><a class="accueil" href="index.php">Accueil</a></li>
                <li <?php echo ($page == "artistes" ? "class=\"active\"" : "")?>><a class="artistes" href="artistes.php">Artistes</a></li>
                <li <?php echo ($page == "entreprises" ? "class=\"active\"" : "")?>><a class="entreprises" href="entreprises.php">Entreprises</a></li>
                <li <?php echo ($page == "references" ? "class=\"active\"" : "")?>><a class="references" href="references.php">Références</a></li>
                <li <?php echo ($page == "contact" ? "class=\"active\"" : "")?>><a class="contact" href="contact.php">Contact</a></li>
            </ul>
        </section>
    </nav>
</div>