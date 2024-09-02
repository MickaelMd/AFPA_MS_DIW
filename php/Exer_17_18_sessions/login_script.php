<?php
session_start();

// Initialisation du tableau global des utilisateurs si nécessaire
if (!isset($GLOBALS['users'])) {
    $GLOBALS['users'] = [];
}

// Vérification si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire de connexion
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    // Vérification des champs vides
    if (empty($login) || empty($password)) {
        echo "Le champ login ou mot de passe est vide. <a href='login_form.php'>Réessayez</a>.";
        exit;
    }

    // Vérifier le login et le mot de passe dans le tableau en mémoire
    if (isset($GLOBALS['users'][$login])) {
        $user = $GLOBALS['users'][$login];
        if (password_verify($password, $user['password'])) {
            $_SESSION['auth'] = 'ok';
            $_SESSION['user_login'] = $login;
            header('Location: test.php');
            exit;
        }
    }

    // Authentification échouée
    session_destroy();
    echo "Identifiants incorrects. <a href='login_form.php'>Réessayez</a>.";
    exit;
} else {
    echo "Accès non autorisé.";
    exit;
}
?>
