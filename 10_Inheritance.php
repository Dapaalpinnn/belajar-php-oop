<?php 

class Manager {
    var string $name;
    function sayHello(string $name) : void {
        echo "Hi $name, My name is {$this -> name}" . PHP_EOL;
    }
}

class VicePresident extends Manager{
    // Class VicePresident sebagai turunan dari class Manager menggunakan kata kunci extends.
    // Artinya apa yang dimiliki Class Manager akan dimiliki oleh class VicePresident.
}

$manager = new Manager();
$manager -> name = "John Smith";
$manager -> sayHello("Budi");

$vp = new VicePresident();
$vp -> name = "Ahmad Setiawan";
$vp -> sayHello("Budi")

?>