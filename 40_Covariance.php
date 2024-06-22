<?php 

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use MyAnimal\{CatShelter, DogShelter};

$catshelter = new CatShelter();
$cat = $catshelter -> adopt("Blackie") ;

$dogshelter = new DogShelter();
$dog = $dogshelter -> adopt("Lunar") ;


?>