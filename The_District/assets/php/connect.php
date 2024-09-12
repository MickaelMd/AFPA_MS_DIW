<?php 

session_start(); 
date_default_timezone_set("Europe/Paris");

try {
    $mysqlClient = new PDO(
        dsn: 'mysql:host=127.0.0.1;dbname=The_District;charset=utf8',
        username: 'root',
        password: 'root'
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if (isset($_SESSION["email"])) {
    // Connexion à la base de données
    try {
        $mysqlClient = new PDO(
            dsn: 'mysql:host=127.0.0.1;dbname=The_District;charset=utf8',
            username: 'root',
            password: 'root'
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    // Vérifier si l'utilisateur existe encore dans la base de données
    $req = $mysqlClient->prepare(query: 'SELECT id FROM clients WHERE email = :email');
    $req->execute(params: ['email' => $_SESSION["email"]]);

    $userExists = $req->fetch();

    if (!$userExists) {
        // Si l'utilisateur n'existe plus, détruire la session
        unset($_SESSION["email"]);
        unset($_SESSION["admin"]);

        if (ini_get(option: "session.use_cookies")) {
            setcookie(session_name(), '', time() - 42000);
        }

        session_destroy();

        
        
    }
};

echo '</br>' . '</br>' . '</br>' . '</br>';
echo "Session ID : " . session_id() . ' ';

if (isset($_SESSION["email"])) {
    echo 'email : ' . $_SESSION["email"] . ' ';
}

if (isset($_SESSION["admin"])) {
    echo 'Admin : ' . $_SESSION["admin"];
}
?>

<?php
// if (isset($_POST['deco'])) {
   
//     unset($_SESSION["email"]);
//     unset($_SESSION["admin"]);
//     unset($_SESSION["role"]);

   
//     if (isset($_COOKIE['login'])) {
//         setcookie('login', '', time() - 3600, '/', '', true, true); // chemin et paramètres sécurisés
//     }

    
//     if (ini_get("session.use_cookies")) {
//         setcookie(session_name(), '', time() - 42000, '/');
//     }

    
//     session_destroy();


//     echo "<meta http-equiv='refresh' content='0'>";
// } 

?>