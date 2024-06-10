<?php 

// Destructor adalah function yang akan dipanggil ketika program selesai.

class myData {
    const AUTHOR = "Michael";
    var string $name;
    var ?string $addres;
    var string $country = "Indonesia";
    function __construct(string $name, ?string $addres){
        $this->name = $name;
        $this->addres = $addres;
    }
    // Membuat Destructor
    function __destruct(){
        echo "Object My Data {$this->name} is Destroyed" . PHP_EOL;
    }
}

$user1 = new myData("Rudi Hidayat","Surabaya");
$user2 = new myData("Adi Setiawan",null);

echo "Program selesai" . PHP_EOL;



?>
