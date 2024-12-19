<?php
require_once './template/header.php';
require_once 'libs/pdo.php';
require_once 'libs/user.php';

// addUser($pdo, "test1", "test1@gmail.com", "abc123");
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
            <input class="form-control" type="text" name="password" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Enregister">
    </form>
</div>














<?php
require_once './template/footer.php';
?>