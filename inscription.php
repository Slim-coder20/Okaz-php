<?php
require_once './template/header.php';
require_once 'libs/pdo.php';
require_once 'libs/user.php';


// if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {

//     $res = addUser($pdo, $_POST["username"], $_POST["email"], $_POST["password"]);
//     // var_dump($res);
// }

$res = verifyUser($_POST);
var_dump($res); 




?>


<h1>Inscriptio</h1>
<div class="form-signin w-100 m-auto">
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label " for="username">Nom d'utilisateur</label>
            <input class="form-control" type="text" name="username" id="username">
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="text" name="email" id="eamil">
        </div>
        <div class="mb-3">
            <label class="form-label " for="email">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Enregister">
    </form>
</div>














<?php
require_once './template/footer.php';
?>