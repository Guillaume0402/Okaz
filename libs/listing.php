<?php



function getListings(): array
{
    return 
    [
        ["title" => "Rocket League", "price" => 30, "image" => "uploads/listing/rocket-league.jpg", "description" => "Jeu de voiture et de foot"],
        ["title" => "Zelda", "price" => 40, "image" => "uploads/listing/jeu-zelda.jpg", "description" => "Jeu d'aventure"],
        ["title" => "Super Mario Wonder", "price" => 25, "image" => "uploads/listing/jeu-super-mario-wonder.jpg", "description" => "Jeu de plateforme"],    
    ];

}




function getListingById(int $id) : array
{
    $listings = getListings();
    return $listings[$id];
}