<nav class="navbar bg-body-tertiary navbar-expand-md fixed-top bg-blur">
    <div class="container-fluid">
        <a class="navbar-brand nav_marg" href="<?php echo $ip_link ?>/index.php">
            <img src="<?php echo $ip_link ?>/assets/img/the_district_brand/nav_logo.svg" alt="Bootstrap" width="150"
                height="auto" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item nav_cent_res">
                    <a class="nav-link" href="<?php echo $ip_link ?>/index.php">Accueil</a>
                </li>
                <li class="nav-item nav_cent_res">
                    <a class="nav-link" aria-current="page"
                        href="<?php echo $ip_link ?>/html/categorie.php">Catégorie</a>
                </li>
                <li class="nav-item nav_cent_res">
                    <a class="nav-link" href="#">Plats</a>
                </li>
                <li class="nav-item nav_cent_res">
                    <a class="nav-link" href="<?php echo $ip_link ?>/html/contact.php">Contact</a>
                </li>

                <?php 
            
            if (isset($_SESSION['email']) && !is_null($_SESSION['email'])) {
                
                
                echo ' 
                 <li class="nav-item nav_cent_res">
                    <a class="nav-link" href="' . $ip_link . '/html/profil.php">Profil</a>
                </li>
                ';

                } else {
                    echo ' 
                    <li class="nav-item nav_cent_res">
                       <a class="nav-link" href="' . $ip_link . '/html/log_sign.php">Profil</a>
                   </li>
                   ';
                }; ?>


                <?php if (isset($_SESSION['email']) && !is_null($_SESSION['email']) && $_SESSION['admin'] > 0) {
                
                
                echo ' 
                 <li class="nav-item nav_cent_res">
                    <a class="nav-link" href="' . $ip_link . '/html/admin.php">Administration</a>
                </li>
                ';

                }; ?>


            </ul>



            <span class="navbar-text  ms-auto">

                <?php 
            
            if (isset($_SESSION['email']) && !is_null($_SESSION['email'])) {
                
                
                echo ' <a class="nav-link log_sign_nav" href=" ' . $ip_link . '/html/logout.php">Déconnexion</a>
            </span>';

            } else {
                
                echo ' <a class="nav-link log_sign_nav" href=" ' . $ip_link . '/html/log_sign.php">Connexion
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
        <img src="<?php echo $ip_link ?>/assets/img/the_district_brand/big_white_logo.svg" alt="The District Logo" />


    </div>
</div>
<header>


    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="form">
                    <input type="text" class="form-control form-input" placeholder="Recherche..." />
                    <span class="left-pan"><img src="<?php echo $ip_link ?>/assets/img/search.svg" alt="" /></span>
                </div>
            </div>
        </div>
    </div>
</header>