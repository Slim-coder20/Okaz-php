<div class="col-md-4 d-flex justify-content-center">
    <div class="card w-100">
        <img src="./uploads/listing/<?= $listing["image"] ?> " class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?= $listing["title"] ?></h5>
            <p class="card-text"><?= $listing["price"] ?>€</p>
            <a href="annonce.php?id=<?= $key ?>" class="btn btn-primary  stretched-link w-100">Voir l'annonce</a>
        </div>
    </div>
</div>