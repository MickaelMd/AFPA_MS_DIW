<?php

date_default_timezone_set("Europe/Paris");

$str = ' Nom : ' . $_GET['nom'] . '
 ' . 'Prenom : ' . $_GET['prenom'] . ' 
 ' . 'Email : ' . $_GET['email']  . ' 
 ' . 'Telephone : ' . $_GET['telephone'] . ' 
 ' . 'Demande : ' . $_GET['demande']  . PHP_EOL;
file_put_contents(date("Y-m-d-H-i-s") . ".txt", $str, FILE_APPEND);

?>

<meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
