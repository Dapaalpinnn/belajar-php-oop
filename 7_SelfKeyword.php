<?php 

class selfKeyword{
    const AUTHOR = "Pramoedya Ananta Toer";
    var string $name;
    var ?string $book;
    function firstName(?string $firstName){
        if(is_null($firstName)){
            echo "Hi {$this -> name }, Please insert your first name !" . PHP_EOL;
        } else {
            echo "Hi, Welcome to the Library $firstName!" . PHP_EOL;
            echo "Book Tittle: {$this -> book }" . PHP_EOL;
            // Memanggil constant di dalam class sendiri menggunakan "self"
            echo "Author : " . self::AUTHOR . PHP_EOL;
        }
    }
}

$user1 = new selfKeyword();
$user1 -> name = "Steven Kurniawan";
$user1 -> book = "Bumi Manusia";
$user1 -> firstName(null);

$user2 = new selfKeyword();
$user2 -> name = "Rudi Hidayat";
$user2 -> book = "Anak Semua Bangsa";
$user2 -> firstName("Rudi");

?>