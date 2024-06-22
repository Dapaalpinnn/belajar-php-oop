<?php 

namespace MyAnimal;
require_once "Animal.php";
use MyAnimal\{Animal, Cat, Dog};

interface AnimalShelter {
    function adopt(string $name):Animal;
}

// Covariance => Mengembalikan data (return value) menjadi yang lebih spesifik. 

class CatShelter implements AnimalShelter {
    function adopt(string $name): Cat {
        $cat = new Cat();
        $cat -> name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter {
    function adopt(string $name): Dog {
        $dog = new Dog();
        $dog -> name = $name;
        return $dog;
    }
}

?>