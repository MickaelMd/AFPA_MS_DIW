<?php require_once __DIR__.'/../assets/php/connect.php';

$sqlQuery = "SELECT * FROM `plat` WHERE active = 'Yes' ORDER BY libelle";
$platLStatement = $mysqlClient->prepare($sqlQuery);
$platLStatement->execute();
$platL = $platLStatement->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/img/the_district_brand/favicon.png" type="image/x-icon" />
    <meta name="description" content="Site du restaurant The District" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/cat_plat.css" />
    <script src="../assets/js/script.js" defer></script>
    <title>The District : Liste des plats</title>
</head>

<body>
    <div class="container">

        <?php require_once __DIR__.'/../assets/php/header.php'; ?>

        <section id="sec_cards_plat_cat">
            <h1 id="title_section_cat_plat" class="text-center">Tout les plats</h1>
            <div id="cards_section_p_c">


                <?php

foreach ($platL as $plats) {
    $description = $plats['description'];
    if (strlen($description) > 100) {
        $description = substr($description, 0, 200).'...';
    }

    echo '
                    <div class="card mb-3" id="cards_plat_all" style="max-width: 540px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="'.$ip_link.'/assets/img/food/'.$plats['image'].'" class="img-fluid rounded-start" alt="Image du plat" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title"> '.$plats['libelle'].' </h4>
                                    <p class="card-text font_text">
                                        '.$description.'
                                    </p>
                                    <p class="font_text show_price">'.$plats['prix'].' €</p>
                                    <div class="d-grid gap-2 d-md-flex">
                                        <a href="#">
                                            <button type="button" class="btn btn-info mt-3 btn_com">
                                                COMMANDER
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
}

?>

            </div>
        </section>
    </div>

    <?php require_once __DIR__.'/../assets/php/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>