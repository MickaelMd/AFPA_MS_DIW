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

    <script src="../assets/js/script.js" defer></script>
    <title>The District : Catégorie</title>
</head>

<body>
    <div class="container">



        <?php require_once(__DIR__ . '/../assets/php/header.php'); ?>



        <section id="pres_cat_pl-p" class="container">
            <?php 
                
                $sqlQuery = "SELECT * FROM `categorie` WHERE active = 'Yes' ORDER BY libelle";
                    $categorieStatement = $mysqlClient->prepare($sqlQuery);
                    $categorieStatement->execute();
                    $categorie = $categorieStatement->fetchAll();

                     
                    foreach ($categorie as $categories) {

                            echo '
                            
                            <div class="cards_cat_mp" id="img_card1">
                        <img class="img_card_cat" src="' . $ip_link .  '/assets/img/category/' . $categories['image'] . '" alt="' . $categories['libelle'] . '">
                        <a href="' . $ip_link . '/html/' . 'foodlist.php?categorie=' . preg_replace('#\s+#', '', $categories['id']) . '">' . $categories['libelle'] . '</a>
                    </div>';


                    };
                ?>
        </section>
    </div>



    <?php require_once(__DIR__ . '/../assets/php/footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>