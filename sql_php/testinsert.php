 <?php

try
{
    $mysqlClient = new PDO(
        'mysql:host=127.0.0.1;dbname=The_District;charset=utf8',
        'root',
        'root',);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'INSERT INTO categorie(libelle, image, active) VALUES (:libelle, :image, :active)';

// Préparation
$insertRecipe = $mysqlClient->prepare($sqlQuery);

// Exécution ! 



$insertRecipe->execute([
    'libelle' => $_POST['libelle'],
    'image' => $_POST['image'],
    'active' => $_POST['active']
    
]);


?>

<!-- UPDATE categorie SET id = 20 WHERE libelle = 'libelle'; -->

<!-- UPDATE commande SET id_plat = 20 WHERE id = '20'; -->

