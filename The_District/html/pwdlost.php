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

            <h3 class="text-center">Mot de passe perdu</h3>

            <form action="" method="POST">

                <div class="row">
                    <div class="mb-3 mt-5 text-center">
                        <label for="reset_email" class="form-label text-center">Adresse email</label>
                        <input type="email" class="form-control" id="reset_email" name="reset_email">

                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50 mt-3"
                            name="reset_submit">Réinitialiser</button>


                    </div>
<a href="resetpass.php" class="text-center mt-2">Vous avez un code ?</a>
                </div>
            </form>

        </section>
    </div>


 '; }
                
            

            ?>


        <?php 

    
if (isset($_POST['reset_submit'])) {

    $lostemail = $_POST['reset_email'];
    

    $req = $mysqlClient->prepare(query: 'SELECT id, nom, prenom, email, telephone, adresse, pass, active, admin FROM clients WHERE email = :email');
                   $req-> execute(params: array(
                       'email' => $lostemail));

                   $resultat = $req->fetch();

                    if (!$resultat) {
                        // Si aucun utilisateur n'a été trouvé avec cet email
                        echo ' </br><h3 class="text-center">Aucun utilisateur trouvé avec cet email.</h3><br/>';
                        
                    } else {
                        // Si un utilisateur est trouvé, vous pouvez afficher ou traiter les informations
                        
                        $resetcode = rand(10000000, 99999999);
                          
                        
                        $updateQuery = "UPDATE `clients` SET resetcode = :resetcode WHERE email = :email";
                        $updateStatement = $mysqlClient->prepare($updateQuery);
                        $updateStatement->execute([
                            'resetcode' => $resetcode,
                            'email' => $lostemail
                        ]);

                        echo '<h3 class="text-center mt-4 text-danger">Code de réinitialisation : ' . $resetcode . '</h3>' . 
                        '</br> <p class="text-center">(a envoyer par mail)</p>';
                        

                        // ------------
                        // $newpwd = 'pass' . rand(10000000, 99999999);
                        
                        // $newhash = password_hash($newpwd, PASSWORD_DEFAULT);
                        
                        // echo '</br> </br>' . $newhash . '</br> Nouveau mot de passe : ' . $newpwd;

                        // $updateQuery = "UPDATE `clients` SET pass = :pass WHERE email = :email";
                        // $updateStatement = $mysqlClient->prepare($updateQuery);
                        // $updateStatement->execute([
                        //     'pass' => $newhash,
                        //     'email' => $lostemail
                        // ]);
                        // ------------
                        
                
                        
                    }


}

?>



        <!-- ---------------------------------------------- -->
    </div>
    <?php require_once(__DIR__ . '/../assets/php/footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>