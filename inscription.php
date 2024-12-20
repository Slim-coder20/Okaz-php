<?php
require_once './template/header.php';
require_once 'libs/pdo.php';
require_once 'libs/user.php';



$errors = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // @todo ajouter la vérification sur tout les champs du formulaire d'inscription 
    $verif = verifyUser($_POST);
    if ($verif === true) {
        $resAdd = addUser($pdo, $_POST["username"], $_POST["email"], $_POST["password"]);
        // @todo rediréger vers login 
    } else {
        $errors = $verif;
    }
    //var_dump($res);
}








?>


<h1>Inscriptio</h1>
<div class="form-signin w-100 m-auto">
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label " for="username">Nom d'utilisateur</label>
            <input class="form-control" type="text" name="username" id="username">
            <?php if (isset($errors["username"])) { ?>

                <div class="alert alert-danger" role="alert">
                    <?= $errors["username"] ?>
                </div>


            <?php } ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email">
            <?php if (isset($errors["email"])) { ?>

                <div class="alert alert-danger" role="alert">
                    <?= $errors["email"] ?>
                </div>


            <?php } ?>
        </div>
        <div class="mb-3">
            <label class="form-label " for="email">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Enregister" name="add_user">
    </form>
</div>














<?php
require_once './template/footer.php';
?>