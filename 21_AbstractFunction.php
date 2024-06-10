<?php 

// Tidak boleh membuat block function dan wajib di override pada class child.

namespace Data;

abstract class Animal{
    public string $name;
    public abstract function run() :void ;
}

class Cat extends Animal{
    // Overide function.
    public function run() :void {
        echo "Cat $this->name is Running" . PHP_EOL;
    }
}

class Dog extends Animal{
    public function run() :void {
        echo "Dog $this->name is Running" . PHP_EOL;
    }
}

$miaw = new Cat();
$miaw -> name = "Blackie";
$miaw -> run();

$huk = new Dog();
$huk -> name = "Luna";
$huk -> run();

?>

