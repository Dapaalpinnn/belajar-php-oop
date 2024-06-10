<?php 

/* -------------------------------------------------------------------------- */
/*                   This (Untuk mengakses object saat ini)                   */
/* -------------------------------------------------------------------------- */

class dataPerson {
    var string $name;
    var int $telephone;
    var ?string $addres;
    var string $email;
    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
        }
    }
}

// Object data John smith
$johnSmith = new dataPerson();
$johnSmith -> name = "John Smith";
$johnSmith -> telephone = 123456 ;
$johnSmith -> addres = null;
$johnSmith -> email = "jhndoe@gmail.com";
$johnSmith -> sayHello("Budi Nugraha");

// Object data Rudi Saputra
$rudiSaputra = new dataPerson();
$rudiSaputra -> name = "Rudi Saputra";
$rudiSaputra -> telephone = 123456 ;
$rudiSaputra -> addres = null;
$rudiSaputra -> email = "jhndoe@gmail.com";
$rudiSaputra -> sayHello(null);

?>