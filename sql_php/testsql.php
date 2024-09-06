<?php

try {
    $mysqlClient = new PDO(
        'mysql:host=127.0.0.1;dbname=The_District;charset=utf8',
        'root',
        'root',

        // [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
} catch (Exception $e) {
    die('Erreur'. $e->getMessage());
}

for ($i = 0; $i < 5; $i++) { 
    echo '</br>'; 
}


$sqlQuery = "SELECT * FROM `categorie` WHERE active = 'YES'";
$categorieStatement = $mysqlClient->prepare($sqlQuery);
$categorieStatement->execute();
$categorie = $categorieStatement->fetchAll();


$sqlQueryy = "SELECT * FROM `commande`";
$commandeStatementt = $mysqlClient->prepare($sqlQueryy);
$commandeStatementt->execute();
$commande = $commandeStatementt->fetchAll();



foreach ($categorie as $showcat) { 
    echo '<p>' . $showcat['libelle'] . ' ' . '<img src="assets/img/category/' . $showcat[2] . '" width="50"  /> </p>'; 
}

echo '<hr> <table border="1"> <tbody>';

foreach ($commande as $showcom) {
    echo '<tr><td>' . 
    $showcom['id'] . '</td><td>' . 
    $showcom['nom_client'] . '</td>' . '<td>' . 
    $showcom['telephone_client'] . '</td>' . '<td>' . 
    $showcom['adresse_client'] . '</td>' . '<td>' . 
    $showcom['etat'] . '</td>' 
    
    
    .  '</tr>' ;
}

echo '</tbody></table> <hr>';

?>


<!-- ----------------- -->

<form action="testinsert.php" method="POST" id="sqlform">
  <label for="libelle">Libelle</label><br>
  <input type="text" id="libelle" name="libelle" ><br><br>

  <label for="image">Image</label><br>
  <input type="text" id="image" name="image"><br><br>

  <label for="active">Active (Yes/No)</label><br>
  <input type="active" id="active" name="active"><br><br>

  <input type="submit" value="Submit">
</form> 


<!-- <form action="">

<label class="container">One
  <input type="checkbox" >
  <span class="checkmark"></span>
</label> -->


<form action="testupdate.php" method="POST">
<?php
$sqlQuery = "SELECT * FROM `categorie` ";
$categorieeStatement = $mysqlClient->prepare($sqlQuery);
$categorieeStatement->execute();
$categoriee = $categorieeStatement->fetchAll(); ?>

<?php
foreach ($categoriee as $showcate) { 

if ($showcate['active'] === 'Yes') { 
    $valueactive = 'checked="checked"';
    
}
else { $valueactive = ''; 
}; 

    echo '<label>' . $showcate['libelle'] . 
    '<input type="checkbox" ' . ' name="' . $showcate['libelle'] . '"' . $valueactive . '>' . '</br>';
}

?>
<input type="submit" value="Submit">
</form>

</br>
</br>

<?php 

for ($i = 0; $i < 10; $i++) { 
echo $i;


} 


?>