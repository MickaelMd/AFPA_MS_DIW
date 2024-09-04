<div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="false"
                aria-controls="collapseOne"
              >
                Exercice #1 - Initiation
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <p>Ecrire "Bonjour le monde avec php".</p>
              <p>Script qui affiche l'adresse IP du serveur et celle du client.</p>

                <?php 

$bonjour = "Bonjour le monde"; 
echo "<b>$bonjour</b> </br> </br>"; 

   echo "IP Server -> " . $_SERVER["SERVER_NAME"];
   echo "</br>";
   echo "IP Client -> " . $_SERVER["REMOTE_ADDR"];
  
  ?> 

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                Exercice #2 - Les boucles
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h2_1">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c2_1"
                      aria-expanded="false"
                      aria-controls="c2_1"
                    >
                    Les nombres impairs entre 0 et 150.
                    </button>
                  </h2>
                  <div
                    id="c2_1"
                    class="accordion-collapse collapse"
                    aria-labelledby="h2_1"
                  >
                    <div class="accordion-body">

                    <?php 

// Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...



$i = 0;
while ($i < 150) { 
    
    $i ++;
    echo ($i = $i + 1) . "</br>"; }

  ?> 

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h2_2">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c2_2"
                      aria-expanded="false"
                      aria-controls="cThree"
                    >
                    Table de multiplication pour les nombres de 1 à 9.
                    </button>
                  </h2>
                  <div
                    id="c2_2"
                    class="accordion-collapse collapse"
                    aria-labelledby="h2_2"
                  >
                    <div class="accordion-body">

                    <?php 


// Ecrire un script qui affiche la table de multiplication pour les nombres de 1 à 9 dans un tableau HTML.

    echo $table = '<table class="table">';
    
    for ($i=1; $i <= 9; $i++) {

        echo  '<tr>';

        for ($ii=1; $ii <= 9 ; $ii++) {
           echo  '<td>'.$i*$ii.'</td>';
        }
       echo  '</tr>';
       
    }

    echo  '</table>';
    

?>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h2_3">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c2_3"
                      aria-expanded="false"
                      aria-controls="c2_3"
                    >
                    Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.
                    </button>
                  </h2>
                  <div
                    id="c2_3"
                    class="accordion-collapse collapse"
                    aria-labelledby="h2_3"
                  >
                    <div class="accordion-body">

                    <?php 

// Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers


$i = 0;
while ($i < 500) { 
    
    $i ++;
    echo ($i = $i ++) . "<p>Je dois faire des sauvegardes régulières de mes fichiers. </p>"; }

  ?> 

                    </div>
                  </div>
                </div>
              </div>
              <!----  ------- -->
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                Exercice #3 - Les Tableaux
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h3_1">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c3_1"
                      aria-expanded="false"
                      aria-controls="c3_1"
                    >
                      Les capitales
                    </button>
                  </h2>
                  <div
                    id="c3_1"
                    class="accordion-collapse collapse"
                    aria-labelledby="h3_1"
                  >
                    <div class="accordion-body">

                    <?php
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

// A partir du tableau ci-dessus:

// Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
// Consultez la documentation PHP sur le tri des tableaux

// Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.

// Affichez le nombre de pays dans le tableau.

// Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.


asort($capitales);

$capitales = array_diff($capitales, []);

foreach ($capitales as $capital => $pays) {
    if (stripos($capital, 'B') !== 0) {
        unset($capitales[$capital]);
    }
}


echo "<table border='1'>";
$i = 0; 
foreach ($capitales as $key => $value) {
    echo "<tr><td>$value</td><td>$key</td></tr>";
    $i++;
    
}
echo "</table>";
echo "<h3>Il y a $i pays</h3>";
echo "<p>Il y a " . count($capitales) . " pays (avec count sur capitales)</p>";



?>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h3_2">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c3_2"
                      aria-expanded="false"
                      aria-controls="c3_2"
                    >
                    Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements et le nombre.
                    </button>
                  </h2>
                  <div
                    id="c3_2"
                    class="accordion-collapse collapse"
                    aria-labelledby="h3_2"
                  >
                    <div class="accordion-body">


                    <?php 

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);


// A partir du tableau ci-dessus:

// Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements

// Affichez la liste des régions suivie du nombre de départements


ksort($departements);

foreach ($departements as $region => $departments) {
   
    echo "<strong>$region</strong> : " . implode(", ", $departments) . "<strong> - Nombre de département : " . count($departments) . " </strong> <br/>";

}

?>


                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h3_3">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c3_3"
                      aria-expanded="false"
                      aria-controls="cFive"
                    >
                      Année bissextile.
                    </button>
                  </h2>
                  <div
                    id="c3_3"
                    class="accordion-collapse collapse"
                    aria-labelledby="h3_3"
                  >
                    <div class="accordion-body">

                    <?php

// 1. Mois de l'année non bissextile
// Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.

// Utilisez le nom des mois comme clés de votre tableau associatif.

// Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.

// Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.

$tableau = array(
    "Janvier" => "31",
    "Février" => "28",
    "Mars" => "31",
    "Avril" => "30",
    "Mai" => "31",
    "Juin" => "30",
    "Juillet" => "31",
    "Aout" => "31",
    "Septembre" => "30",
    "Octobre" => "31",
    "Novembre" => "30",
    "Décembre" => "31"
);


echo "<table border='1'>";

foreach ($tableau as $mois => $jours) {
    echo "<tr><td>$mois</td><td>$jours</td></tr>";
}
echo "</table> </br>";


asort($tableau);

echo "<table border='1'>";


foreach ($tableau as $mois => $jours) {
    echo "<tr><td>$mois</td><td>$jours</td></tr>";
}
echo "</table>";
?>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ------------------------------- -->

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFor">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFor"
                aria-expanded="false"
                aria-controls="collapseFor"
              >
                Exercice #4 - Les fonctions
              </button>
            </h2>
            <div
              id="collapseFor"
              class="accordion-collapse collapse"
              aria-labelledby="headingFor"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h4_1">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c4_1"
                      aria-expanded="false"
                      aria-controls="c4_1"
                    >
                    Ecrivez une fonction qui permette de générer un lien.
                    </button>
                  </h2>
                  <div
                    id="c4_1"
                    class="accordion-collapse collapse"
                    aria-labelledby="h4_1"
                  >
                    <div class="accordion-body">

                    <?php 

// Ecrivez une fonction qui permette de générer un lien.
// La fonction doit prendre deux paramètres, le lien et le titre

//  lien("https://www.reddit.com/", "Reddit Hug");
// Appelée de cette façon, la fonction doit générer

// <a href="https://www.reddit.com/">Reddit Hug</a>

function lien ($lien, $titre) {

    echo "<a href=$lien > $titre </a>" ;

};


lien("https://www.reddit.com/", "Reddit Hug");



?>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h4_2">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c4_2"
                      aria-expanded="false"
                      aria-controls="c4_2"
                    >
                    Créer une fonction qui vérifie le niveau de complexité d'un mot de passe
                    </button>
                  </h2>
                  <div
                    id="c4_2"
                    class="accordion-collapse collapse"
                    aria-labelledby="h4_2"
                  >
                    <div class="accordion-body">

                    <?php 

// Créer une fonction qui vérifie le niveau de complexité d'un mot de passe
// Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :

// Faire au moins 8 caractères de long
// Avoir au moins 1 chiffre
// Avoir au moins une majuscule et une minuscule
// $resultat = complex_password("TopSecret42");
// $resultat doit contenir true.

function verif($mdp) {

    $text_mdp = "</br> Le mot de passe doit";
    global $resultat;

    
    if (strlen($mdp) < 8) {
        echo "$text_mdp faire au moins 8 caractères de long";
       
    }

   
    if (!preg_match('/[0-9]/', $mdp)) {
        echo "$text_mdp avoir au moins 1 chiffre";
       
    }

    
    if (!preg_match('/[a-z]/', $mdp) || !preg_match('/[A-Z]/', $mdp)) {
        echo "$text_mdp avoir au moins une majuscule et une minuscule";
      
    }

    else {
        echo "Le mot de passe est bon !";
        $resultat = true;
        
    }
}


verif("TopSecret42");

if ($resultat === true) {

    echo "</br> Variable résultat : $resultat";
}

?>

                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h4_3">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c4_3"
                      aria-expanded="false"
                      aria-controls="cFive"
                    >
                    Ecrivez une fonction qui calcul la somme des valeurs d'un tableau.
                    </button>
                  </h2>
                  <div
                    id="c4_3"
                    class="accordion-collapse collapse"
                    aria-labelledby="h4_3"
                  >
                    <div class="accordion-body">

                    <?php 

// Ecrivez une fonction qui calcul la somme des valeurs d'un tableau
// La fonction doit prendre un paramètre de type tableau

//  $tab = array(4, 3, 8, 2);
//  $resultat = somme($tab);
// $resultat doit contenir 17


function calcul ($tab) {

    
    global $resultat;
    $resultat = array_sum($tab);
    
};

calcul($tab =  array(4, 3, 8, 2));

echo $resultat;
?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFive"
                aria-expanded="false"
                aria-controls="collapseFive"
              >
                Exercice #5 - Date et heure
              </button>
            </h2>
            <div
              id="collapseFive"
              class="accordion-collapse collapse"
              aria-labelledby="headingFive"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                

                <?php 

// Utilisez l'objet DateTime, sauf mention contraire.

// Trouvez le numéro de semaine de la date suivante : 14/07/2019.

// Combien reste-t-il de jours avant la fin de votre formation.

// Comment déterminer si une année est bissextile ?

// Montrez que la date du 32/17/2019 est erronée.

// Affichez l'heure courante sous cette forme : 11h25.

// Ajoutez 1 mois à la date courante.

// Que s'est-il passé le 1000200000

date_default_timezone_set("Europe/Paris");
$today_timestamp = time();
$today = date("d/m/Y");

// -----------

echo '<strong>Trouvez le numéro de semaine de la date suivante : 14/07/2019.</strong>';

$semaine = "2019-07-14";
$format=strtotime ($semaine);
echo "<p>Numéro de semaine de la date suivante : 14/07/2019 :" . date(' W' , $format) . "</p>";

echo "<hr></br>";

// -----------

echo '<strong>Combien reste-t-il de jours avant la fin de votre formation.</strong></br>';

$fin_form = strtotime('2024-10-11');
$difference = $today_timestamp - $fin_form;
echo "Il reste " . floor($difference / 86400) . " Jour de formation.";

echo "</br></br><hr>";

// -----------

echo '<strong>Comment déterminer si une année est bissextile ?</strong>';

function est_bissextile($annee)
{
    if ( date("m-d", strtotime("$annee-02-29")) == "02-29")
    {
        echo "<p>$annee est bissextile.</p>";
    } 
    else {
        echo "<p>$annee est pas bissextile.</p>";
    };
}

est_bissextile(2024);
est_bissextile(2025);

echo "<hr>";

// -----------
echo '<strong>Montrez que la date du 32/17/2019 est erronée.</strong>';

echo "</br>";

$date_erronee = "32/17/2019";

if (checkdate(17, 32, 2019) === true) {
echo "La date $date_erronee est valide";
}
else {
    echo "La date $date_erronee est invalide";
};

echo "</br></br> <hr> </br>";

// -----------
echo "<strong> Affichez l'heure courante sous cette forme : 11h25. </strong></br>";

$heure_actuelle = date("H \h\ i");

echo "Heure actuelle : $heure_actuelle";


echo "</br></br> <hr> </br>";

// -----------
echo '<strong>Ajoutez 1 mois à la date courante.</strong></br>';

$date = new DateTime();

$date->modify('+1 month');

echo "Dans un mois on sera le " . $date->format('d/m/Y');

echo "</br></br> <hr> </br>";

// -----------
echo "<strong>Que s'est-il passé le 1000200000.</strong> </br>";

$timestamp = 1000200000;


echo "Le " . date('d/m/Y', $timestamp) . " Correspond aux les Attentats du 11 septembre 2001.";


?>

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSix"
                aria-expanded="false"
                aria-controls="collapseSix"
              >
                Exercice #6 - Les fichiers 
              </button>
            </h2>
            <div
              id="collapseSix"
              class="accordion-collapse collapse"
              aria-labelledby="headingSix"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h6_1">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c6_1"
                      aria-expanded="false"
                      aria-controls="c6_1"
                    >
                    Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.
                    </button>
                  </h2>
                  <div
                    id="c6_1"
                    class="accordion-collapse collapse"
                    aria-labelledby="h6_1"
                  >
                    <div class="accordion-body">


                    <?php
$lienlien = file("lien.txt");

echo  '<table>';

$iilien = 0;
for ($i = 0; $i < count($lienlien); $i++) {
   
   echo 
   
    " <tr><th> <a href=>$lienlien[$iilien]</a>  </th></tr>" ;

   $iilien ++;
};

echo " </table>";

?>

                
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h6_2">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c6_2"
                      aria-expanded="false"
                      aria-controls="c6_2"
                    >
                      Récupération et Manipulation de fichier CSV.
                    </button>
                  </h2>
                  <div
                    id="c6_2"
                    class="accordion-collapse collapse"
                    aria-labelledby="h6_2"
                  >
                    <div class="accordion-body">

                    <?php


// Un site partenaire met à votre disposition une liste des nouveaux utilisateurs inscrits.

// Cette liste est disponible à cette adresse https://ncode.amorce.org/customers.csv.

// Il s'agit d'un fichier CSV où chaque ligne représente un nouvel utilisateur. Les différents champs sont Surname, Firstname, Email, Phone, City, State, ils sont séparés par une virgule ,.

// Utilisez la fonction file() pour récupérer le contenu de ce fichier.

// Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()

// Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau.

$fichier =  file("https://ncode.amorce.org/customers.csv");



echo '<table class="table">' . '<thead>
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Ville</th>
      <th scope="col">Etat</th>
    </tr>
  </thead>
  <tbody>';


$ii = 0;
for ($i = 0; $i < count($fichier); $i++) {
    
    $personne = preg_split("/,/", $fichier[ $ii ]);

    echo '  <tr>
      <td>' . $personne[0] . '</td>
      <td>' . $personne[1] . '</td>
      <td>' . $personne[2] . '</td>
      <td>' . $personne[3] . '</td>
      <td>' . $personne[4] . '</td>
      <td>' . $personne[5] . '</td>
    </tr>';

    $ii++;
}

echo '</tbody></table>';

?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSeven"
                aria-expanded="false"
                aria-controls="collapseSeven"
              >
                Exercice #7
              </button>
            </h2>
            <div
              id="collapseSeven"
              class="accordion-collapse collapse"
              aria-labelledby="headingSeven"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h7_1">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c7_1"
                      aria-expanded="false"
                      aria-controls="c7_1"
                    >
                      Exercice #7.1
                    </button>
                  </h2>
                  <div
                    id="c7_1"
                    class="accordion-collapse collapse"
                    aria-labelledby="h7_1"
                  >
                    <div class="accordion-body">CIAO</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h7_2">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c7_2"
                      aria-expanded="false"
                      aria-controls="c7_2"
                    >
                      Exercice #7.2
                    </button>
                  </h2>
                  <div
                    id="c7_2"
                    class="accordion-collapse collapse"
                    aria-labelledby="h7_2"
                  >
                    <div class="accordion-body">CIAO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseEight"
                aria-expanded="false"
                aria-controls="collapseEight"
              >
                Exercice #8
              </button>
            </h2>
            <div
              id="collapseEight"
              class="accordion-collapse collapse"
              aria-labelledby="headingEight"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h8_1">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c8_1"
                      aria-expanded="false"
                      aria-controls="c8_1"
                    >
                      Exercice #8.1
                    </button>
                  </h2>
                  <div
                    id="c8_1"
                    class="accordion-collapse collapse"
                    aria-labelledby="h8_1"
                  >
                    <div class="accordion-body">CIAO</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="h8_2">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#c8_2"
                      aria-expanded="false"
                      aria-controls="c8_2"
                    >
                      Exercice #8.2
                    </button>
                  </h2>
                  <div
                    id="c8_2"
                    class="accordion-collapse collapse"
                    aria-labelledby="h8_2"
                  >
                    <div class="accordion-body">CIAO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>