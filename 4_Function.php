<?php 

class User{
    var string $name;
    var int $telephone;
    var ?string $addres;
    var string $email;
    // Membuat function.
    function sayHello(string $name){
        echo "Welcome $name, Your data infomation: " . PHP_EOL;
    }
}

$userData = new User();
$userData -> name = "John Doe";
$userData -> telephone = 321345231;
$userData -> addres = null;
$userData -> email = "jhd@example.com";
$userData -> sayHello("John Doe");

var_dump($userData);

?>