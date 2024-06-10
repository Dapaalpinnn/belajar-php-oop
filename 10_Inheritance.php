<?php 

class Manager {
    var string $name;
    function sayHello(string $name) : void // Function tidak mengembalikan value.
    {
        echo "Hi $name, My name is {$this -> name}" . PHP_EOL;
    }
}

// Class VicePresident sebagai turunan dari class Manager menggunakan kata kunci extends.
// Artinya apa yang dimiliki Class Manager akan dimiliki oleh class VicePresident.

class VicePresident extends Manager{

}

$manager = new Manager();
$manager -> name = "John Smith";
$manager -> sayHello("Budi");

$vp = new VicePresident();
$vp -> name = "Ahmad Setiawan";
$vp -> sayHello("Budi")

?>