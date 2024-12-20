<?php
require_once 'libs/pdo.php';
require_once 'libs/user.php';
require_once './template/header.php';

$errors = null;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = verifyUserLoginPassword($pdo, $_POST["email"], $_POST["password"]);
    var_dump($user);

    if ($user) {

        session_regenerate_id(true); 
        $_SESSION["user"] = [
            "id" => $user["id"], 
            "username" => $user["username"]

        ];
        header("location: index.php"); 

    } else {
        $errors = "email ou mot de passe incorrecte ";
    }
}
?>

<div class="form-signin w-100 m-auto">

    <form method="post">

        <h1 class="h3 mb-3 fw-normal">Se connecter</h1>

        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Mot de passe</label>
        </div>
        <?php if ($errors): ?>
            <div class="alert alert-danger" role="alert">
                <?= $errors ?>
            </div>
        <?php endif; ?>


        <button class="btn btn-primary w-100 py-2 " type="submit">Connexion</button>

    </form>

</div>




<?php
require_once './template/footer.php';
?>