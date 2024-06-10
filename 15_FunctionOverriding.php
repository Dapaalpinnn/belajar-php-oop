<?php 

/* -------------------------------------------------------------------------- */
/*                    Overeriding (Membuat ulang / menimpa)                   */
/* -------------------------------------------------------------------------- */

class TheManager {
    var string $name;
    public function sayHello(string $name) : void {
        echo "Hi $name, My name is Manager {$this -> name}" . PHP_EOL;
    }
}

class VicePresident extends TheManager{
    public function sayHello(string $name) : void {
        echo "Hi $name, My name is VP {$this -> name}" . PHP_EOL;
    }
}

$manager = new TheManager();
$manager -> name = "John Smith";
$manager -> sayHello("Budi");

$vp = new VicePresident();
$vp -> name = "Ahmad Setiawan";
$vp -> sayHello("Budi")


?>