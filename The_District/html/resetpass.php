<?php require_once __DIR__.'/../assets/php/connect.php'; ?>
<?php require_once __DIR__.'/../assets/php/head.php'; ?>



<body>
    <div class="container">

        <?php require_once __DIR__.'/../assets/php/header.php'; ?>

        <?php
        $email_value = isset($_POST['reset_email']) ? htmlspecialchars($_POST['reset_email']) : '';
if (isset($_SESSION['email']) && !is_null($_SESSION['email'])) {
    echo '<h3 class="text-center mt-5 text-success">Vous êtes connecté ! </h3>';
} else {
    echo '
            <section id="login_section_page" class="mt-5">
                <h3 class="text-center">Mot de passe perdu</h3>
                <form action="" method="POST">
                    <div class="row">
                        <div class="mb-3 mt-5 text-center">
                            <label for="reset_email" class="form-label text-center">Adresse email</label>
                            <input type="email" class="form-control" id="reset_email" name="reset_email" placeholder="'.$email_value.'">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-50 mt-3" name="reset_submit">Réinitialiser</button>
                        </div>
                    </div>
                </form>
            </section>';
}

if (isset($_POST['reset_submit'])) {
    $lostemail = $_POST['reset_email'];
    $req = $mysqlClient->prepare('SELECT id, nom, prenom, email, telephone, adresse, pass, active, resetcode, admin FROM clients WHERE email = :email');
    $req->execute(['email' => $lostemail]);
    $resultat = $req->fetch();

    if (!$resultat) {
        echo '</br><h3 class="text-center">Aucun utilisateur trouvé avec cet email, ou cet utilisateur n\'a pas demandé de code de réinitialisation.</h3><br/>';
    } elseif ($resultat['resetcode'] < 1) {
        echo '<h3 class="text-center">Aucun utilisateur trouvé avec cet email, ou cet utilisateur n\'a pas demandé de code de réinitialisation.</h3>';
    } else {
        $_SESSION['lostmail'] = $lostemail;
        echo '
                <section id="login__reset_section_page" class="mt-5">
                    <form action="" method="POST" id="reset_form">
                        <div class="row">
                            <div class="mb-3 mt-5 text-center">
                                <label for="reset_code" class="form-label text-center">Code de vérification</label>
                                <input type="text" class="form-control" id="reset_code" name="reset_code">
                                <span id="error-reset_code" class="text-danger"></span>
                            </div>
                            <div class="mb-3 mt-0 text-center">
                                <label for="reset_pass" class="form-label text-center">Nouveau mot de passe</label>
                                <input type="password" class="form-control" id="reset_pass" name="reset_pass">
                                <span id="error-reset_pass" class="text-danger"></span>
                            </div>
                            <div class="mb-3 mt-0 text-center">
                                <label for="reset_pass_confirm" class="form-label text-center">Confirmer nouveau mot de passe</label>
                                <input type="password" class="form-control" id="reset_pass_confirm" name="reset_pass_confirm">
                                <span id="error-reset_pass_confirm" class="text-danger"></span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-50 mt-3" name="reset_code_submit" id="reset_code_submit">Réinitialiser</button>
                            </div>
                        </div>
                    </form>
                </section>';
    }
}
if (isset($_POST['reset_code_submit'])) {
    $reset_code = $_POST['reset_code'];
    $reset_pass = $_POST['reset_pass'];
    $reset_pass_confirm = $_POST['reset_pass_confirm'];
    $lostmail = isset($_SESSION['lostmail']) ? $_SESSION['lostmail'] : '';

    if (!preg_match('/^\d{8}$/', $reset_code)) {
        echo '<h3 class="text-center text-danger">Le code de vérification est invalide.</h3>';
    } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $reset_pass)) {
        echo '<h3 class="text-center text-danger">Le mot de passe doit contenir au moins une lettre, un chiffre, et avoir au moins 8 caractères.</h3>';
    } elseif ($reset_pass !== $reset_pass_confirm) {
        echo '<h3 class="text-center text-danger">Les mots de passe ne correspondent pas.</h3>';
    } else {
        $checkCodeQuery = 'SELECT resetcode FROM clients WHERE email = :email';
        $checkCodeStatement = $mysqlClient->prepare($checkCodeQuery);
        $checkCodeStatement->execute(['email' => $lostmail]);
        $codeResult = $checkCodeStatement->fetch();

        if ($codeResult && $codeResult['resetcode'] == $reset_code) {
            $mdp_hash = password_hash($reset_pass, PASSWORD_DEFAULT);
            $updateQuery = 'UPDATE clients SET pass = :pass, resetcode = 0 WHERE email = :email AND resetcode = :resetcode';
            $updateStatement = $mysqlClient->prepare($updateQuery);
            $updateStatement->execute([
                'pass' => $mdp_hash,
                'email' => $lostmail,
                'resetcode' => $reset_code,
            ]);
            echo '<h3 class="text-center text-success">Votre mot de passe a été réinitialisé avec succès !</h3>';
            echo '<meta http-equiv="refresh" content="1; URL='.$ip_link.'/index.php">';
        } else {
            echo '<h3 class="text-center text-danger">Le code de vérification est incorrect.</h3>';
        }
    }
}

?>

    </div>
    <?php require_once __DIR__.'/../assets/php/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>