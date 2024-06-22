<?php 

/* -------------------------------------------------------------------------- */
/*                             Constant pada class                            */
/* -------------------------------------------------------------------------- */

class Book {
    // Membuat constant
    const AUTHOR = "John Smith";
    var string $name;
    var ?string $addres;
    var string $email;
    var string $university = "Universitas Negeri Surabaya";
    function sayHello(?string $name){
        if(is_null($name)){
            echo "Please enter your short name {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name, You'll used a {$this->name} account" . PHP_EOL;
        }
    }
}

$visitor1 = new Book();
$visitor1 -> name = "John Doe Smith";
$visitor1 -> addres = null;
$visitor1 -> email = "dafaghan@gmail.com";
$visitor1 -> sayHello("John");
// Mengakses constant menggunakan class.
echo "Author: " . Book :: AUTHOR . PHP_EOL;

$visitor2 = new Book();
$visitor2 -> name = "Ahmad Saputra Ramadhan";
$visitor2 -> addres = null;
$visitor2 -> email = "ahmd@gmail.com";
$visitor2 -> sayHello(null);
echo "Author: " . Book :: AUTHOR . PHP_EOL;

?>