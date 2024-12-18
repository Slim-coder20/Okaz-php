<? error_reporting(E_ALL);
ini_set('display_errors', 1); ?>



<?php

require_once './template/header.php';
require_once 'libs/listing.php';

$listings =  getListings();

?>

<div class="row">
    <h1>Les annonces</h1>
    <div class="col-md-3">
        <form action="" method="get">
            <h2>Filtres</h2>
            <div class="p-3 border-bottom">
                <input type="text" name="search" id="search" class="form-control" placeholder="rechercher">
            </div>
            <div class="p-3 border-bottom">
                <label for="price">Prix</label>
                <div class="input-group">
                    <input type="number" name="min_price" id="min_price" class="form-control" placeholder="prix minimum">
                    <span class="input-group-text">€</span>
                </div>

                <div class="input-group ">
                    <input type="number" name="max_price" id="max_price" class="form-control" placeholder="prix maximum">
                    <span class="input-group-text">€</span>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary w-100">Filtrer</button>
            </div>
        </form>
    </div>
    <div class="col-md-9">
        <div class="row ">

        </div>
        <div class="container">
            <div class="row">

                <div class="row justify-content-center g-4 mt-3">
                    <?php

                    foreach ($listings as $key => $listing) {
                        require './template/listing_part.php';
                    }



                    ?>
                </div>
            </div>
        </div>

    </div>

</div>



<?php require_once './template/footer.php'; ?>