<?php require_once __DIR__.'/../assets/php/connect.php';

$sqlQuery = "SELECT * FROM `categorie` WHERE active = 'Yes' ORDER BY libelle";
$categorieStatement = $mysqlClient->prepare($sqlQuery);
$categorieStatement->execute();
$categorie = $categorieStatement->fetchAll();

?>
<?php require_once __DIR__.'/../assets/php/head.php'; ?>

<body>
    <div class="container">
        <?php require_once __DIR__.'/../assets/php/header.php'; ?>
        <section id="pres_cat_pl-p" class="container">
            <?php

foreach ($categorie as $categories) {
    echo '
                            
                            <div class="cards_cat_mp" id="img_card1">
                        <img class="img_card_cat" src="'.$ip_link.'/assets/img/category/'.$categories['image'].'" alt="'.$categories['libelle'].'">
                        <a href="'.$ip_link.'/html/foodlist.php?categorie='.preg_replace('#\s+#', '', $categories['id']).'">'.$categories['libelle'].'</a>
                    </div>';
}
?>
        </section>
    </div>
    <?php require_once __DIR__.'/../assets/php/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>