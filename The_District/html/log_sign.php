<?php require_once(__DIR__ . '/../assets/php/connect.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/img/the_district_brand/favicon.png" type="image/x-icon" />
    <meta name="description" content="Site du restaurant The District" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />

    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/login.css" />
    <script src="../assets/js/script.js" defer></script>
    <script src="../assets/js/login.js" defer></script>
    <title>The District : Connexion / Inscription</title>
</head>

<body>
    <div class="container">

        <?php require_once(__DIR__ . '/../assets/php/header.php'); ?>



        <?php 
            
            if (isset($_SESSION['email']) && !is_null($_SESSION['email'])) {
               

                echo '<h3 class="text-center mt-5 text-success">Vous êtes connecté ! </h3>';

            } else { echo '



        <section id="login_section_page" class="mt-5">

            <h3 class="text-center">Connexion
            </h3>

            <form action="" method="POST">

                <div class="row">
                    <div class="mb-3">
                        <label for="login_email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" id="login_email" name="login_email">

                    </div>
                    <div class="mb-3">
                        <label for="login_pwd" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="login_pwd" name="login_pwd">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50 mt-3" name="login_submit">Connexion</button>


                    </div>
                    <a href="pwdlost.php" class="text-center mt-2">Mot de passe oublié</a>
                </div>
            </form>

        </section>






        <section id="signup_section_page" class="mt-5">

            <h3 class="text-center">Inscription</h3>

            <form id="sign_up_form" action="" method="POST" class="mt-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="sign_nom" class="form-label text-center">Nom</label>
                        <input type="text" class="form-control" id="sign_nom" name="sign_nom" placeholder="Smith">
                        <span id="error-sign_nom" class="text-danger"></span>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="sign_prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="sign_prenom" name="sign_prenom" placeholder="John">
                        <span id="error-sign_prenom" class="text-danger"></span>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="sign_email" class="form-label text-center">Email</label>
                        <input type="email" class="form-control" id="sign_email" name="sign_email"
                            placeholder="time.lord@tardismail.com">
                        <span id="error-sign_email" class="text-danger"></span>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="sign_telephone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" id="sign_telephone" name="sign_telephone"
                            placeholder="07 13 87 19 63">
                        <span id="error-sign_telephone" class="text-danger"></span>
                    </div>

                    <div class="mb-3">
                        <label for="sign_adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="sign_adresse" name="sign_adresse"
                            placeholder="7 Rue Des Seigneurs du Temps, 00000 Gallifrey">
                        <span id="error-sign_adresse" class="text-danger"></span>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="sign_pwd" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="sign_pwd" name="sign_pwd">
                        <span id="error-sign_pwd" class="text-danger"></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sign_pwd_confirm" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="sign_pwd_confirm" name="sign_pwd_confirm">
                        <span id="error-sign_pwd_confirm" class="text-danger"></span>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50 mt-3" name="sign_submit">Inscription</button>
                    </div>

                </div>

            </form>


            '; }
                
            

            ?>

        </section>


    </div>
    <?php 

    // ------------- Connection ---------------

if (isset($_POST['login_submit'])) {

 $login_login = $_POST['login_email'];
 $mdp_login = $_POST['login_pwd'];

 if (!preg_match(pattern: "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", subject: $_POST['login_email'])) {
       
   echo 'Error . </br></br>';
   return;
   }

 echo $login_login . ' - ' . $mdp_login . '</br>';

 
                   $req = $mysqlClient->prepare(query: 'SELECT id, nom, prenom, email, telephone, adresse, pass, active, admin FROM clients WHERE email = :email');
                   $req-> execute(params: array(
                       'email' => $login_login));

                   $resultat = $req->fetch();


           


                    
                   if (!$resultat OR !password_verify(password: $_POST['login_pwd'], hash: $resultat['pass']))
                   {
                       echo 'Identifiant ou Mot De Passe incorrect.<br/>';
                   }

                   elseif ($resultat['active'] < 1 ) {

                    echo 'Compte désactivé';

                   }

                   else
                   {
                       echo 'Vous êtes connecté !<br/>';
                    
                       $_SESSION["email"] = $login_login;
                       $_SESSION["nom"] = $resultat['nom'];
                       $_SESSION["prenom"] = $resultat['prenom'];
                       $_SESSION["telephone"] = $resultat['telephone'];
                       $_SESSION["adresse"] = $resultat['adresse'];
                       $_SESSION["admin"] = $resultat['admin'];

                       echo' ' . $_SESSION["admin"] . '</br>';
                       echo" Session ID : ".session_id(); 

                       

                       

                        

                        echo "<meta http-equiv='refresh' content='0'>";

                   }



 };
 
?>
    <!-- ------------------------------------ -->


    <?php 
  
  
  // --------  Créer un user et se connecter avec    ----- 
  
  if (isset($_POST['sign_submit'])) {


    if (!preg_match(pattern: "/^[a-zA-ZÀ-ÿ][a-zà-ÿ' -]*$/", subject: $_POST['sign_nom'])) {
        
      echo 'Le nom est obligatoire et doit comporter uniquement des lettres.</br></br>';
      return;
      }

      if (!preg_match(pattern: "/^[a-zA-ZÀ-ÿ][a-zà-ÿ' -]*$/", subject: $_POST['sign_prenom'])) {
        
        echo 'Le prénom est obligatoire et doit comporter uniquement des lettres. </br></br>';
        return;
        }
        if (!preg_match(pattern: "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", subject: $_POST['sign_email'])) {
        
            echo 'Veuillez entrer un email valide. </br></br>';
            return;
            }
            if (!preg_match(pattern: "/^(\+?\d{1,3}\s?)?([1-9](\s?\d\s?){8}|\d{10,14})$/", subject: $_POST['sign_telephone'])) {
        
                echo 'Le téléphone doit comporter uniquement des chiffres. (Le signe + est autorisé.)</br></br>';
                return;
                }
                if (!preg_match(pattern: "/^\d+\s[A-Za-zÀ-ÿ0-9\s.'-]+(?:\sAppartement\s\d+)?\s*,?\s*\d{5}\s[A-Za-zÀ-ÿ\s.'-]+$/", subject: $_POST['sign_adresse'])) {
        
                    echo 'L\'adresse est obligatoire et doit être valide.</br></br>';
                    return;
                    }
                    if (!preg_match(pattern: "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", subject: $_POST['sign_pwd'])) {
        
                        echo 'Le mot de passe doit contenir au moins une lettre, un chiffre, et avoir au moins 8 caractères.</br></br>';
                        return;
                        }
                        if ($_POST['sign_pwd_confirm']!= $_POST['sign_pwd'] ) {
                        echo 'Les mots de passe doivent être identiques.';
                        return; };



    $sign_email = $_POST['sign_email'];
    $stmt = $mysqlClient->prepare(query: "SELECT * FROM clients WHERE email=?");
    $stmt->execute(params: [$sign_email]); 
    $user = $stmt->fetch();
    if ($user) {
        echo "Le nom d'utilisateur existe déjà !";
    } else {
        // le nom d'utilisateur n'existe pas
    

echo '</br>';

$mdp_sU = $_POST['sign_pwd'];

$mdp_hash = password_hash($mdp_sU, PASSWORD_DEFAULT);

echo $mdp_hash;

echo '</br>';

if (password_verify($mdp_sU, $mdp_hash)) {
  echo 'Le mot de passe est valide !';
} else {
  echo 'Le mot de passe est invalide.';
}

$sqlQuery = 'INSERT INTO clients(nom, prenom, email, telephone, adresse, pass) VALUES (:nom, :prenom, :email, :telephone, :adresse, :pass)';

// Préparation
$insertmdp = $mysqlClient->prepare($sqlQuery);

// Exécution ! 
$insertmdp->execute([
  'nom' => $_POST['sign_nom'],
  'prenom' => $_POST['sign_prenom'],
  'email' => $_POST['sign_email'],
  'telephone' => $_POST['sign_telephone'],
  'adresse' => $_POST['sign_adresse'],
  'pass' => $mdp_hash,
  
  
]);
$req = $mysqlClient->prepare(query: 'SELECT id, nom, prenom, email, telephone, adresse, pass, active, admin FROM clients WHERE email = :email');
// $req = $mysqlClient->prepare('SELECT prenom, admin FROM clients WHERE email = :email');
                    $req-> execute(array(
                        'email' => $sign_email));
 
                    $resultat = $req->fetch();
 

$_SESSION["email"] = $sign_email;
$_SESSION["nom"] = $resultat['nom'];
$_SESSION["prenom"] = $resultat['prenom'];
$_SESSION["telephone"] = $resultat['telephone'];
$_SESSION["adresse"] = $resultat['adresse'];
$_SESSION["admin"] = $resultat['admin'];





// ----------------------------------


 echo "<meta http-equiv='refresh' content='0'>";


  };
};

  ?>



    <!-- ---------------------------------------------- -->

    <?php require_once(__DIR__ . '/../assets/php/footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>