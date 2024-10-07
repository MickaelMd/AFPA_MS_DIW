<?php
require_once __DIR__.'/../assets/php/connect.php';

$id = $_GET['categorie'];
if (!filter_var($id, FILTER_VALIDATE_INT)) {
    exit('ID invalide.');
}

$req = $mysqlClient->prepare('SELECT id, libelle, active FROM categorie WHERE id = :id');
$req->execute([
    'id' => (int) $id,
]);
$resultat = $req->fetch();

if (!$resultat) {
    $name = "La catégorie demandée n'existe pas.";
} else {
    $name = $resultat['libelle'];
}

$sqlQuery = "SELECT * FROM `plat` WHERE active = 'Yes' AND id_categorie = :id_categorie ORDER BY libelle";
$platLStatement = $mysqlClient->prepare($sqlQuery);
$platLStatement->execute([
    'id_categorie' => (int) $id,
]);

$platL = $platLStatement->fetchAll();
?>
<?php require_once __DIR__.'/../assets/php/head.php'; ?>

<body>
    <div class="container">

        <?php require_once __DIR__.'/../assets/php/header.php'; ?>

        <section id="sec_cards_plat_cat">
            <h1 id="title_section_cat_plat">Catégorie : <?php echo $name; ?></h1>

            <div id="cards_section_p_c">

                <?php

if (!$platL) {
    echo '<h1 class="text-danger text-center">Aucun plat dans cette catégorie !</h1>';
}

foreach ($platL as $platLs) {
    $description = $platLs['description'];
    if (strlen($description) > 100) {
        $description = substr($description, 0, 200).'...';
    }

    echo '
                        
                        <div class="card mb-3" id="cards_plat_all" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../assets/img/food/'.$platLs['image'].'" class="img-fluid rounded-start"
                                alt="'.$platLs['libelle'].'" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">'.$platLs['libelle'].'</h4>
                                <p class="card-text font_text">
                                    '.$description.'
                                </p>
                                <p class="font_text show_price">'.$platLs['prix'].'€'.'</p>
                                <div class="d-grid gap-2 d-md-flex">
                                    <a href="#">
                                        <button type="button" class="btn btn-info mt-3 btn_com">
                                            COMMANDER
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                        ';
}
?>
            </div>
            <?php

$req = $mysqlClient->prepare(query: 'SELECT id, libelle, active FROM categorie WHERE id = :id');
$req->execute(params: [
    'id' => $id - 1]);

$resultatL = $req->fetch();
$btn_link_l = $resultatL ? $ip_link.'/html/foodlist.php?categorie='.preg_replace('#\s+#', '', $resultatL['id']) : '#';

$req = $mysqlClient->prepare(query: 'SELECT id, libelle, active FROM categorie WHERE id = :id');
$req->execute(params: [
    'id' => $id + 1]);

$resultatR = $req->fetch();
$btn_link_r = $resultatR ? $ip_link.'/html/foodlist.php?categorie='.preg_replace('#\s+#', '', $resultatR['id']) : '#';

?>
            <div id="btn_section" class="d-flex justify-content-center">
                <div class="d-grid gap-2 d-md-block btn_section_cat_menu">

                    <a href="<?php echo $btn_link_l; ?>">
                        <!------------ -->

                        <button class="btn btn-primary btn_suiv_prec" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                            </svg>
                            PRÉCÉDENT
                        </button>
                    </a>

                    <a href="<?php echo $btn_link_r; ?>">
                        <!------------ -->
                        <button class="btn btn-primary btn_suiv_prec" type="button">
                            SUIVANT
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>



    <?php require_once __DIR__.'/../assets/php/footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>