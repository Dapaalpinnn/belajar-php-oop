<?php 

// constructor adalah function yang akan dipanggil saat pertama kali object dibuat.
// Digunakan untuk mengatur nilai awal dari variabel-variabel dalam objek, sehingga objek siap digunakan sejak awal.

class Data {
    const AUTHOR = "Pramoedya Ananta Toer";
    var string $name;
    var ?string $addres;
    var string $country = "Indonesia";
    // Membuat Constructor
    function __construct(string $name, ?string $addres){
        $this->name = $name;
        $this->addres = $addres;
    }
}

$user1 = new Data("Rudi","Surabaya");
$user1 -> name = "Rudi Ahmad Saputra";
// $user1 -> addres = null;

var_dump($user1)

?>
