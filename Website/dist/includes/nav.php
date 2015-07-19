<!-- <div class="contain-to-grid sticky"> -->
    <nav class="top-bar navBar <?php echo ($navclass == "transparentNav" ? "transparentNav" : "")?>" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="index.php"><img src="img/bicravart-blanc.png" alt="Logo Bicravart"></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li><a class="accueil <?php echo ($page == "index" ? "active" : "")?>" href="index.php">Accueil</a></li>
                <li><a class="artistes <?php echo ($page == "artistes" ? "active" : "")?>" href="artistes.php">Coin des artistes</a></li>
                <li><a class="entreprises <?php echo ($page == "entreprises" ? "active" : "")?>" href="entreprises.php">Espace entreprise</a></li>
                <li><a class="references <?php echo ($page == "references" ? "active" : "")?>" href="references.php">Nos références</a></li>
                <li><a class="contact <?php echo ($page == "contact" ? "active" : "")?>" href="contact.php">Contactez-nous</a></li>
            </ul>
        </section>
    </nav>
<!-- </div> -->