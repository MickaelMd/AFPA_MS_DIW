<?php
session_start();

$login = $_POST['login'];
$password = $_POST['password'];


// if ($login === "" | $password === "") { 
//     echo "champ vide";
//     exit;
// }

if ($login === 'admin' && $password === 'admin') {
    
    $_SESSION['auth'] = 'ok';
    header('Location: test.php');
    exit;
} else {
  
    session_destroy();
    echo "Identifiants incorrects. <a href='login_form.php'>Réessayez</a>.";
};
?>


