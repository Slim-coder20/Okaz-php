
<?php

function getListings(): array

{
    return [

        ["title" => "Rocket league PS4", "price" => 30, "image" => "rocket-league.jpg", "description" => "test description"],
        ["title" => "test2", "price" => 25, "image" => "jeu-zelda.jpg", "description" => "test description"],
        ["title" => "test3", "price" => 15, "image" => "t-shirt-mario.jpg", "description" => "test description"],

    ];
}


function getListingById(int $id): array
{
    $listings = getListings();
    return $listings[$id];
}

?>