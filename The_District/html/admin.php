<?php require_once(__DIR__ . '/../assets/php/connect.php'); ?>

<?php
if (!isset($_SESSION["email"]) || $_SESSION["admin"] < 1) {
    echo '<br>Page refusée !';
    header('Location: ../index.php');
    exit;
}
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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="../assets/js/script.js" defer></script>
    <title>The District : Administration</title>
</head>

<body>
    <div class="container">
        <?php require_once(__DIR__ . '/../assets/php/header.php'); ?>

        <section id="section_commande_list" class="mt-5">
            <h2 class="text-center">Liste des commandes</h2>
            <div class="container mt-5">
                <!-- <div class="input-group mb-3">
                    <span class="input-group-text">?</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="recherche_commande_input" placeholder="Recherche"
                            name="recherche_commande_input">
                        <label for="recherche_commande_input">Recherche</label>
                    </div>
                </div> -->

                <form class="mt-3" method="POST" id="commande_list">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="">id</th>
                                <th scope="">id plat</th>
                                <th scope="">Quantité</th>
                                <th scope="">Total</th>
                                <th scope="">Date de commande</th>
                                <th scope="">Etat</th>
                                <th scope="">Nom du client</th>
                                <th scope="">Téléphone</th>
                                <th scope="">Email</th>
                                <th scope="">Adresse</th>
                                <th scope="">Archiver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sqlQuery = "SELECT * FROM `commande` WHERE active > 0 ORDER BY id";
                            $commandeStatement = $mysqlClient->prepare($sqlQuery);
                            $commandeStatement->execute();
                            $commande = $commandeStatement->fetchAll();

                            foreach ($commande as $commandes) {
                                $id_commande = htmlspecialchars($commandes['id']);
                                $etat_commande = htmlspecialchars($commandes['etat']);
                                
                               
                                echo '<input type="hidden" name="delete_ids_' . $id_commande . '" value="0">';

                                echo '<tr> 
                                        <td>' . $id_commande . '</td>
                                        <td>' . htmlspecialchars($commandes['id_plat']) . '</td>
                                        <td>' . htmlspecialchars($commandes['quantite']) . '</td>
                                        <td>' . htmlspecialchars($commandes['total']) . '</td>
                                        <td>' . htmlspecialchars($commandes['date_commande']) . '</td>
                                        <td>
                                        <select name="etat[' . $id_commande . ']" class="form-select">
                                            <option value="Livrée"' . ($etat_commande === 'Livrée' ? ' selected' : '') . '>Livrée</option>
                                            <option value="En cours de livraison"' . ($etat_commande === 'En cours de livraison' ? ' selected' : '') . '>En cours de livraison</option>
                                            <option value="En préparation"' . ($etat_commande === 'En préparation' ? ' selected' : '') . '>En préparation</option>
                                            <option value="Annulée"' . ($etat_commande === 'Annulée' ? ' selected' : '') . '>Annulée</option>
                                        </select>
                                        </td>
                                        <td>' . htmlspecialchars($commandes['nom_client']) . '</td>
                                        <td>' . htmlspecialchars($commandes['telephone_client']) . '</td>
                                        <td>' . htmlspecialchars($commandes['email_client']) . '</td>
                                        <td>' . htmlspecialchars($commandes['adresse_client']) . '</td>' . 
                                        '<td><input type="checkbox" class="form-check-input" name="delete_ids_' . $id_commande . '" value="1"' . ($commandes['active'] === 0 ? ' checked' : '') . '></td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit" name="submit_update">Valider les
                            changements</button>
                    </div>
                </form>

                <?php
                if (isset($_POST['submit_update'])) {
                   
                    foreach ($commande as $commandes) {
                        $id_commande = $commandes['id'];

                       
                        $archived = isset($_POST['delete_ids_' . $id_commande]) && $_POST['delete_ids_' . $id_commande] === '1' ? 0 : 1;

                        
                        $etat_commande = $_POST['etat'][$id_commande] ?? $commandes['etat'];

                        
                        $updateQuery = "UPDATE commande SET active = :archived, etat = :etat WHERE id = :id";
                        $updateStatement = $mysqlClient->prepare($updateQuery);
                        $updateStatement->execute([
                            'archived' => $archived,
                            'etat' => $etat_commande,
                            'id' => $id_commande
                        ]);
                    }

                    
                    
                        echo "<meta http-equiv='refresh' content='0'>";
                }
                ?>

        </section>


        <section id="section_cat_list" class="mt-5">
            <h2 class="text-center mt-5">Liste des catégories</h2>

            <form class="mt-5" method="POST" id="cat_list">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="">Image</th>
                            <th scope="">ID</th>
                            <th scope="">Libelle</th>
                            <th scope="">Nombre de plat</th>
                            <th scope="">Active</th>
                            <th scope="" class="text-danger">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                   
                    $sqlQuery = "SELECT * FROM `categorie` WHERE SuperActive > 0 ORDER BY libelle";
                    $categorieStatement = $mysqlClient->prepare($sqlQuery);
                    $categorieStatement->execute();
                    $categorie = $categorieStatement->fetchAll();

                    
                    foreach ($categorie as $categories) {
                        $checkcat = ($categories['active'] === 'Yes') ? 'checked="checked"' : ''; 
                        $checkSuperActive = ($categories['SuperActive'] === '1') ? 'checked="checked"' : ''; 
                        $id_categories = htmlspecialchars($categories['id']);
                        
                        
                        echo '<input type="hidden" name="valuecat_' . $id_categories . '" value="0">';
                        echo '<input type="hidden" name="valuecatDELETE_' . $id_categories . '" value="0">';
                        echo '<tr> 
                                <td><img src="' . htmlspecialchars($ip_link . '/assets/img/category/' . $categories['image']) . '" class="img_cat_list"></td>
                                <td>' . htmlspecialchars($categories['id']) . '</td>
                                <td>' . htmlspecialchars($categories['libelle']) . '</td>
                                <td>11 (test)</td>
                                <td><input type="checkbox" class="form-check-input" name="valuecat_' . $id_categories . '" value="1" ' . $checkcat . '></td>
                                <td><input type="checkbox" class="form-check-input" name="valuecatDELETE_' . $id_categories . '" value="1" ' . $checkSuperActive . '></td>' .
                            '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" name="submit_update_categorie">Valider les
                        changements</button>
                </div>
            </form>
        </section>

        <?php 


    if (isset($_POST['submit_update_categorie'])) {

    $sqlQuery = "SELECT * FROM `categorie`";
    $categorieStatement = $mysqlClient->prepare($sqlQuery);
    $categorieStatement->execute();
    $categorie = $categorieStatement->fetchAll();

    foreach ($categorie as $showcat) {
        $valueKey = 'valuecat_' . $showcat['id'];
        $valueDeleteKey = 'valuecatDELETE_' . $showcat['id'];

        $value = isset($_POST[$valueKey]) ? $_POST[$valueKey] : '0';
        $valueDelete = isset($_POST[$valueDeleteKey]) ? $_POST[$valueDeleteKey] : '0';

        $activeStatus = ($value === '1') ? 'Yes' : 'No';
        $superActiveStatus = ($valueDelete === '1') ? '0' : $showcat['SuperActive'];

        $updateQuery = "UPDATE `categorie` SET active = :active, SuperActive = :superactive WHERE id = :id";
        $updateStatement = $mysqlClient->prepare($updateQuery);
        $updateStatement->execute([
            'active' => $activeStatus,
            'superactive' => $superActiveStatus,
            'id' => $showcat['id']
        ]);
    }

    
    echo "<meta http-equiv='refresh' content='0'>";
}
?>


        <section id="add_cat" class="mt-5">

            <h2 class="text-center">Ajouter une categorie</h2>

            <form action="../assets/php/insertcat.php" method="POST" id="add_cat_form" enctype="multipart/form-data">

                <div class="form-floating mb-3 mt-5">
                    <input type="text" class="form-control" id="cat_add_name" name="cat_add_name"
                        placeholder="Nom de la catégorie">
                    <label for="cat_add_name">Nom de la catégorie (Libelle)</label>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Choisir une image</label>
                    <input class="form-control" type="file" id="cat_add_img" name="cat_add_img">
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="cat_add_active"
                        name="cat_add_active" checked>
                    <label class="form-check-label" for="cat_add_active">Activé la catégorie</label>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary mt-3" type="submit" name="submit_add_categorie">Ajouter la
                        nouvelle catégorie</button>
                </div>
            </form>

        </section>


    </div>
    <?php require_once(__DIR__ . '/../assets/php/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>