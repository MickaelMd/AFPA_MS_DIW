<?php

// if (isset($_POST['deco'])) {

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

if (isset($_COOKIE['login'])) {
    setcookie('login', '', time() - 3600, '/', '', true, true); // chemin et paramètres sécurisés
}

if (ini_get('session.use_cookies')) {
    setcookie(session_name(), '', time() - 42000, '/');
}

session_destroy();

header('Location: '.$_SERVER['HTTP_REFERER']);
// echo "<meta http-equiv='refresh' content='0'>";
// }
