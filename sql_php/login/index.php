<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>





    <div class="container mt-5">
      <form action="" method="POST" id="mdp_form">
<h4>Connection</h4>

        <label for="login">Login</label><br />
        <input type="text" id="login" name="login" /><br /><br />

        <?php   
        
//         if (isset($_POST['submit'])) {
//         if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login'])) {

// echo 'Seuls les lettres et les chiffres sont autorisés. </br></br>';

// }
// } ?>


        <label for="mdp">Mot de passe</label><br />
        <input type="text" id="mdp" name="mdp" /><br /><br />
        <input type="submit" value="Submit" name="submit" />
      </form>

      <hr />

      <form action="" method="POST" id="sU_form">
        <h4>Inscription</h4>
        <label for="login_sU">Login</label><br />
        <input type="text" id="login_sU" name="login_sU"  /><br /><br />
        <?php   
        
//         if (isset($_POST['submit_sU'])) {
//         if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login_sU'])) {

// echo 'Seuls les lettres et les chiffres sont autorisés. </br></br>';

// }
// } ?>

        <label for="mdp_sU">Mot de passe</label><br />
        <input type="text" id="mdp_sU" name="mdp_sU" /><br /><br />
        <input type="submit" value="Submit" name="submit_sU" />

      </form>
    </div>

    <!-- ------------------------- -->

  <?php 
  // -------------
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
// -------------





  if (isset($_POST['submit'])) {

    
    $mdp = $_POST['mdp'];
   
    $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
    
    
    if (password_verify($mdp, $mdphash))
    {
      echo "</br>Mot de passe correct";
    }
    else
    {
      echo "</br>Mot de passe incorrect";
    }


  };
  
  // -------------
  
  if (isset($_POST['submit_sU'])) {

    echo $_POST['login_sU'] . '</br>';
    echo $_POST['mdp_sU'];

$mdp = $_POST['mdp_sU'];
   



  };



  
  
  
  ?>

    <!-- ------------------------- -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
