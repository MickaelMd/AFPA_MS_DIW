<!-- ------TEST ------ -->



<!-- ----------------- -->
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="shortcut icon"
      href="assets/img/the_district_brand/favicon.png"
      type="image/x-icon"
      t
    />
    <meta name="description" content="Site du restaurant The District" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/script.js" defer></script>
    <title>The District : Accueil</title>
  </head>
  <body>
    <div class="container">

   

    <?php require_once(__DIR__ . '/assets/php/header.php'); ?>

     

      <section id="pres_cat_pl" class="container">
        <div class="list_cat_mp">
          <div class="cards_cat_mp" id="img_card1">
            <a href="">Asiatique</a>
          </div>

          <div class="cards_cat_mp" id="img_card2">
            <a href="">Burger</a>
          </div>
          <div class="cards_cat_mp" id="img_card3">
            <a href="">Pâtes</a>
          </div>
          <div class="cards_cat_mp" id="img_card4">
            <a href="">Pizza</a>
          </div>
          <div class="cards_cat_mp" id="img_card5">
            <a href="">Salade</a>
          </div>
          <div class="cards_cat_mp" id="img_card6">
            <a href="">Sandwich</a>
          </div>
         
        </div>
 <a class="d-flex text-decoration-none" href="html/categorie.php">
            <button type="button" class="btn btn-lg btn-info mt-3">
              TOUTES LES CATÉGORIES
            </button>
          </a>
        <br />

        <div class="mt-5 list_cat_mp">
          <div class="cards_pl_mp" id="img_card_plat1">
            <a href="">Spaghetti Legumes</a>
          </div>
          <div class="cards_pl_mp" id="img_card_plat2">
            <a href="">Pizza Margherita</a>
          </div>
          <div class="cards_pl_mp" id="img_card_plat3">
            <a href="">Cheesburger</a>
          </div>
        
        </div>  <a class="d-flex text-decoration-none" href="html/plats.php">
            <button type="button" class="btn btn-info mt-3">
              TOUTS LES PLATS
            </button></a
          >
      </section>
    </div>

    <!-- ---------------- -->

    <?php require_once(__DIR__ . '/assets/php/footer.php'); ?>

    <!-- ---------- -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
