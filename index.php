<!-- ###### Secrtion heros -->
<?php require_once './template/header.php';

$listings = [

    ["title" => "test1", "price" => 30, "image" => "rocket-league.jpg"],
    ["title" => "test2", "price" => 25, "image" => "rocket-league.jpg"],
    ["title" => "test3", "price" => 15, "image" => "rocket-league.jpg"],

];

$categories = [
    ["name" => "Jeux videos", "icon" => "controller"],
    ["name" => "Vetements", "icon" => "tag"],
    ["name" => "Meubles", "icon" => "lamp"],

];

?>



<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="Assets/image/logo-okaz.png" class="d-block mx-lg-auto img-fluid" alt="" width="400" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Avec Okaz achetez et vendez vos objets</h1>
        <p class="lead">Trouvez ce que vous cherchez ou donnez une seconde vie à vos objets en un clic ! Okaz est la plateforme incontournable pour vendre, acheter ou échanger tout ce que vous souhaitez : vêtements, meubles, appareils électroniques, véhicules et bien plus encore !</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
    </div>
</div>
<!-- Section Annonces Cartes  -->
<div class="container">
    <div class="row">
        <h2 class="pb-2 border-bottom ">les dernières annonces</h2>
        <div class="row justify-content-center g-4 mt-3">
            <?php

            foreach ($listings as $listing) {
                require './template/listing_part.php';
            }



            ?>
        </div>
    </div>
</div>
<!-- ############ Section Category  -->
<div class="  py-5 " id="hanging-icons">
    <h2 class="pb-2 border-bottom ">les catégories</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

        <?php
        foreach ($categories as $category) {
            require './template/category_part.php';
        }

        ?>

    </div>
</div>



<?php require_once './template/footer.php'; ?>