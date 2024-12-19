<?php
require_once './template/header.php';
require_once 'libs/category.php';


$categories = getCategories();


?>


<h1>Ajouter une annonce </h1>
<div class="form-listing w-100 m-auto">
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label " for="title">Titre</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Prix</label>
            <input class="form-control" type="numbre" name="price" id="price">
        </div>
        <div class="mb-3">
            <label class="form-label " for="description">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label" for="category">Catégories</label>
            <select name="category" id="category" class="form-select">
                <?php foreach ($categories as $key => $category) { ?>
                    <option value="<?= $key ?>"><?= $category["name"] ?></option>

                <?php } ?>

            </select>

        </div>

        <div class="mb-3">
            <label for="formFileLg" class="form-label">Télécharger</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
        </div>

        <input class="btn btn-primary" type="submit" value="Enregister">

    </form>
</div>














<?php
require_once './template/footer.php';
?>