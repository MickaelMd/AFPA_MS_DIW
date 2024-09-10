<?php 

session_start(); 


if (isset($_SESSION["login"])) {
    // Connexion à la base de données
    try {
        $mysqlClient = new PDO(
            'mysql:host=127.0.0.1;dbname=The_District;charset=utf8',
            'root',
            'root'
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    // Vérifier si l'utilisateur existe encore dans la base de données
    $req = $mysqlClient->prepare('SELECT id FROM users WHERE login = :login');
    $req->execute(['login' => $_SESSION["login"]]);

    $userExists = $req->fetch();

    if (!$userExists) {
        // Si l'utilisateur n'existe plus, détruire la session
        unset($_SESSION["login"]);
        unset($_SESSION["admin"]);

        if (ini_get("session.use_cookies")) {
            setcookie(session_name(), '', time() - 42000);
        }

        session_destroy();

        // Rediriger l'utilisateur vers la page de connexion
        // header('Location: login.php');
        
    }
};

//echo" Session ID : ".session_id();


if (isset($_SESSION["login"])) {
  echo "Session ID : " . session_id() . ' Login : ' . $_SESSION["login"];
} else {
  echo "Session ID : " . session_id() . ' Login : non défini';
}

// Exemple pour la clé 'admin'
if (isset($_SESSION["admin"])) {
  echo ' Admin : ' . $_SESSION["admin"];
} else {
  echo ' Admin : non défini';
}

