<div class="contain-to-grid sticky">
    <nav class="top-bar navBar" data-topbar role="navigation" data-options="sticky_on: large">
        <ul class="title-area">
            <li class="name">
                <h1><a href="index.php">Bicravart</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li <?php echo ($page == "index" ? "class=\"active\"" : "")?>><a href="index.php">Accueil</a></li>
                <li <?php echo ($page == "artistes" ? "class=\"active\"" : "")?>><a href="artistes.php">Artistes</a></li>
                <li <?php echo ($page == "entreprises" ? "class=\"active\"" : "")?>><a href="entreprises.php">Entreprises</a></li>
                <li <?php echo ($page == "references" ? "class=\"active\"" : "")?>><a href="references.php">Références</a></li>
                <li <?php echo ($page == "contact" ? "class=\"active\"" : "")?>><a href="contact.php">Contact</a></li>
            </ul>
        </section>
    </nav>
</div>