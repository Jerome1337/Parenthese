<!-- <div class="contain-to-grid sticky"> -->
    <nav class="top-bar navBar <?php echo ($navclass == "transparentNav" ? "transparentNav" : "")?>" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo ($path == "../" ? "../" : "")?>index.php"><img src="<?php echo ($path == "../" ? "../" : "")?>img/bicravart-blanc.png" alt="Logo Bicravart"></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li><a class="accueil <?php echo ($page == "index" ? "active" : "")?>" href="<?php echo ($path == "../" ? "../" : "")?>index.php">Accueil</a></li>
                <li><a class="artistes <?php echo ($page == "artistes" ? "active" : "")?>" href="<?php echo ($path == "../" ? "../" : "")?>artistes.php">Coin des artistes</a></li>
                <li><a class="entreprises <?php echo ($page == "entreprises" ? "active" : "")?>" href="<?php echo ($path == "../" ? "../" : "")?>entreprises.php">Espace entreprise</a></li>
                <li><a class="references <?php echo ($page == "references" ? "active" : "")?>" href="<?php echo ($path == "../" ? "../" : "")?>references.php">Nos références</a></li>
                <li><a class="contact <?php echo ($page == "contact" ? "active" : "")?>" href="<?php echo ($path == "../" ? "../" : "")?>contact.php">Contactez-nous</a></li>
            </ul>
        </section>
    </nav>
<!-- </div> -->