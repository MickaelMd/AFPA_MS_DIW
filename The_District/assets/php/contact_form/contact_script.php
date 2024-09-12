<?php

date_default_timezone_set("Europe/Paris");

$str = ' Nom : ' . $_POST['nom'] . '
 ' . 'Prenom : ' . $_POST['prenom'] . ' 
 ' . 'Email : ' . $_POST['email']  . ' 
 ' . 'Telephone : ' . $_POST['telephone'] . ' 
 ' . 'Demande : ' . $_POST['demande']  . PHP_EOL;
file_put_contents(date("Y-m-d-H-i-s") . ".txt", $str, FILE_APPEND);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>