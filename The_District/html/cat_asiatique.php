<?php require_once(__DIR__ . '/../assets/php/connect.php'); ?>
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
    <title>The District : Asiatique</title>
</head>

<body>
    <div class="container">

        <?php require_once(__DIR__ . '/../assets/php/header.php'); ?>

        <section id="sec_cards_plat_cat">
            <h1 id="title_section_cat_plat">Catégorie : Asiatique</h1>

            <div id="cards_section_p_c">
                <div class="card mb-3" id="cards_plat_all" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../assets/img/category/asian_food_cat.jpg" class="img-fluid rounded-start"
                                alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Luctus Ppsum Elit.</h4>
                                <p class="card-text font_text">
                                    Mar consequat est. Ut luctus ipsum elit, non hendrerit velit
                                    tincidunt vel.
                                </p>
                                <p class="font_text show_price">00,00€</p>
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

                <!-- -------------- -->

                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../assets/img/food/poulet_legume_asiatique.jpg" class="img-fluid rounded-start"
                                alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Luctus Ppsum Elit.</h4>
                                <p class="card-text font_text">
                                    Mar consequat est. Ut luctus ipsum elit, non hendrerit velit
                                    tincidunt vel.
                                </p>
                                <p class="font_text show_price">00,00€</p>
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

                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../assets/img/food/Nouilles_riz_poulet.jpg" class="img-fluid rounded-start"
                                alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Luctus Ppsum Elit.</h4>
                                <p class="card-text font_text">
                                    Mar consequat est. Ut luctus ipsum elit, non hendrerit velit
                                    tincidunt vel.
                                </p>
                                <p class="font_text show_price">00,00€</p>
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
                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../assets/img/food/sushi.jpg" class="img-fluid rounded-start" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Luctus Ppsum Elit.</h4>
                                <p class="card-text font_text">
                                    Mar consequat est. Ut luctus ipsum elit, non hendrerit velit
                                    tincidunt vel.
                                </p>
                                <p class="font_text show_price">00,00€</p>
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

                <!-- ---------- -->
            </div>
            <div id="btn_section" class="d-flex justify-content-center">
                <div class="d-grid gap-2 d-md-block btn_section_cat_menu">
                    <button class="btn btn-primary btn_suiv_prec" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg>
                        PRÉCÉDENT
                    </button>
                    <button class="btn btn-primary btn_suiv_prec" type="button">
                        SUIVANT
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    </div>



    <?php require_once(__DIR__ . '/../assets/php/footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>