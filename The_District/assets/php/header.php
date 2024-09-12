<?php $ip_link = 'http://localhost:3000' ?>

<nav class="navbar bg-body-tertiary navbar-expand-md fixed-top bg-blur">
    <div class="container-fluid">
        <a class="navbar-brand nav_marg" href="<?php echo $ip_link ?>/The_District/index.php">
            <img src="<?php echo $ip_link ?>/The_District/assets/img/the_district_brand/nav_logo.svg" alt="Bootstrap"
                width="150" height="auto" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item nav_cent_res">
                    <a class="nav-link" href="<?php echo $ip_link ?>/The_District/index.php">Accueil</a>
                </li>
                <li class="nav-item nav_cent_res">
                    <a class="nav-link" aria-current="page"
                        href="<?php echo $ip_link ?>/The_District/html/categorie.php">Catégorie</a>
                </li>
                <li class="nav-item nav_cent_res">
                    <a class="nav-link" href="#">Plats</a>
                </li>
                <li class="nav-item nav_cent_res">
                    <a class="nav-link" href="<?php echo $ip_link ?>/The_District/html/contact.php">Contact</a>
                </li>
            </ul>
            <span class="navbar-text  ms-auto">

                <?php 
            
            if (isset($_SESSION['email']) && !is_null($_SESSION['email'])) {
                // echo '<form action="" method="POST" id="deco">

                //  <input class="deco_btn nav-link " type="submit" value="Déconnexion" name="deco" />
            
                // </form>';

                // echo '<p>Bonjour ' . $_SESSION['prenom'] . '</p>';

                echo ' <a class="nav-link log_sign_nav" href=" ' . $ip_link . '/The_District/html/logout.php">Déconnexion</a>
            </span>';

            } else {
                // L'email n'est pas défini ou est null
                echo ' <a class="nav-link log_sign_nav" href=" ' . $ip_link . '/The_District/html/log_sign.php">Connexion
                /
                Inscription</a>
            </span>';
            }

?>





        </div>
    </div>
</nav>

<div id="ex1" class="paralaxbox">
    <div id="ex1-layer">
        <img src="<?php echo $ip_link ?>/The_District/assets/img/the_district_brand/big_white_logo.svg"
            alt="The District Logo" />


    </div>
</div>
<header>
    <!-- --------- -->

    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="form">
                    <input type="text" class="form-control form-input" placeholder="Recherche..." />
                    <span class="left-pan"><img src="<?php echo $ip_link ?>/The_District/assets/img/search.svg"
                            alt="" /></span>
                </div>
            </div>
        </div>
    </div>
</header>