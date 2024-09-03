<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../assets/img/the_district_brand/favicon.png"
      type="image/x-icon"
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

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    />

    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/contact.css" />
    <script src="../assets/js/script.js" defer></script>
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/maps.js" defer></script>
    <title>The District : Contact</title>
  </head>
  <body>
    <div class="container">
     
    <?php require_once(__DIR__ . '/../assets/php/header.php'); ?>

      <section id="contact_section_page">
        <div id="info_contact" class="text-center">
          <h2>Adresse</h2>
          <p class="font_text">30 Rue de Poulainville, 80000 Amiens</p>
          <h2>Téléphone :</h2>
          <p class="font_text">09 72 72 39 36</p>
        </div>
        <div id="OSM-map" style="height: 500px"></div>
      </section>

      <section id="contact_form_section">
        <h2 class="text-center">Contact</h2>
        <div id="form_contact" class="container"></div>

        <form
          id="contactForm"
          action="../assets/php/contact_form/contact_script.php"
          method="get"
        >
          <div class="row mb-3 mt-3">
            <div class="col-md-6">
              <label class="form-label" for="nom">Nom</label>
              <input
                type="text"
                class="form-control"
                id="nom"
                name="nom"
                required
              />
              <span id="error-nom" class="text-danger"></span>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="prenom">Prenom</label>
              <input
                type="text"
                class="form-control"
                id="prenom"
                name="prenom"
                required
              />
              <span id="error-prenom" class="text-danger"></span>
            </div>
          </div>

          <div class="row mb-3 mt-3">
            <div class="col-md-6">
              <label class="form-label" for="email">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                required
              />
              <span id="error-email" class="text-danger"></span>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="telephone">Téléphone</label>
              <input
                type="text"
                class="form-control"
                id="telephone"
                name="telephone"
                required
              />
              <span id="error-telephone" class="text-danger"></span>
            </div>
          </div>

          <div class="mt-3">
            <label class="form-label" for="demande">Votre demande</label>
            <textarea
              class="form-control"
              id="demande"
              cols="30"
              rows="10"
              name="demande"
              required
              style="height: 100%"
            ></textarea>
            <span id="error-demande" class="text-danger"></span>
          </div>
          <div class="d-flex justify-content-center m-5">
            <input
              class="btn btn-lg btn-info m-2"
              type="submit"
              value="Envoyer"
            />
          </div>
        </form>
      </section>

     
    </div>

    

    <?php require_once(__DIR__ . '/../assets/php/footer.php'); ?>

    

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  </body>
</html>
