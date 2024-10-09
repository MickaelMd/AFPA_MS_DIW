<?php

session_start();
date_default_timezone_set('Europe/Paris');

$ip_link = 'http://localhost:3000/The_District';

// define('BASE_URL', 'http://localhost:3000/The_District'); ??

try {
    $mysqlClient = new PDO(
        dsn: 'mysql:host=127.0.0.1;dbname=The_District;charset=utf8',
        username: 'root',
        password: 'root'
    );
} catch (Exception $e) {
    exit('Erreur : '.$e->getMessage());
}

if (isset($_SESSION['email'])) {
    $req = $mysqlClient->prepare(query: 'SELECT id FROM clients WHERE email = :email');
    $req->execute(params: ['email' => $_SESSION['email']]);

    $userExists = $req->fetch();

    if (!$userExists) {
        unset($_SESSION['email']);
        unset($_SESSION['nom']);
        unset($_SESSION['prenom']);
        unset($_SESSION['telephone']);
        unset($_SESSION['adresse']);
        unset($_SESSION['admin']);
        unset($_SESSION['role']);
        unset($_SESSION['lostmail']);
        unset($_SESSION['nom_client']);
        unset($_SESSION['uuid']);
        unset($_SESSION['csrf']);
        // unset($_SESSION['shopping_list_count']);

        if (ini_get(option: 'session.use_cookies')) {
            setcookie(session_name(), '', time() - 42000);
        }

        session_destroy();
    }
}

// ------ index.php, categorie.php, plats.php, header.php <=

function index_categorie_list($limit)
{
    global $mysqlClient;
    $sqlQuery = "SELECT * FROM `categorie` WHERE active = 'Yes' ORDER BY libelle LIMIT $limit";
    $categorieStatement = $mysqlClient->prepare($sqlQuery);
    $categorieStatement->execute();
    $categorie = $categorieStatement->fetchAll();

    return $categorie;
}

function plat_index_list($limit)
{
    global $mysqlClient;
    $sqlQueryy = "SELECT * FROM `plat` WHERE active = 'Yes' ORDER BY libelle LIMIT $limit";
    $platStatement = $mysqlClient->prepare($sqlQueryy);
    $platStatement->execute();
    $platindex = $platStatement->fetchAll();

    return $platindex;
}

// ------ foodlist.php <=

function foodlist($id)
{
    global $mysqlClient;
    $req = $mysqlClient->prepare('SELECT id, libelle, active FROM categorie WHERE id = :id');
    $req->execute([
        'id' => (int) $id,
    ]);
    $resultat = $req->fetch();

    return $resultat;
}

function foodlistpl($id)
{
    global $mysqlClient;
    $sqlQuery = "SELECT * FROM `plat` WHERE active = 'Yes' AND id_categorie = :id_categorie ORDER BY libelle";
    $platLStatement = $mysqlClient->prepare($sqlQuery);
    $platLStatement->execute([
        'id_categorie' => (int) $id,
    ]);

    return $platLStatement;
}

function btn_left($id)
{
    global $mysqlClient;
    $req = $mysqlClient->prepare(query: 'SELECT id, libelle, active FROM categorie WHERE id = :id');
    $req->execute(params: [
        'id' => $id - 1]);

    $resultatL = $req->fetch();

    return $resultatL;
}

function btn_right($id)
{
    global $mysqlClient;
    $req = $mysqlClient->prepare(query: 'SELECT id, libelle, active FROM categorie WHERE id = :id');
    $req->execute(params: [
        'id' => $id + 1]);

    $resultatR = $req->fetch();

    return $resultatR;
}

// ------ platunique.php <=

function pl_unique_verif($id)
{
    global $mysqlClient;
    $req = $mysqlClient->prepare('SELECT id, libelle, active FROM plat WHERE id = :id');
    $req->execute(['id' => (int) $id]);

    $resultat = $req->fetch();

    return $resultat;
}

function pl_list($id)
{
    global $mysqlClient;
    $sqlQuery = 'SELECT * FROM plat WHERE id = :id ORDER BY libelle';
    $platLStatement = $mysqlClient->prepare($sqlQuery);
    $platLStatement->execute(['id' => (int) $id]);
    $platL = $platLStatement->fetchAll(PDO::FETCH_ASSOC);

    return $platL;
}
