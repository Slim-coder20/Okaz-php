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
            <div>
                <input type="text" name="search" id="search" class="form-control" placeholder="rechercher">
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

                    foreach ($listings as $listing) {
                        require './template/listing_part.php';
                    }



                    ?>
                </div>
            </div>
        </div>

    </div>

</div>



<?php require_once './template/footer.php'; ?>