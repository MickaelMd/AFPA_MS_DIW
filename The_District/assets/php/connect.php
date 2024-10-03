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
