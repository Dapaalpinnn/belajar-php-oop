<?php 

// Secara dinamis membuat properties atau function (Dinamic Property).

class Zero {
    private array $properties = [];
    
    // Dieksekusi ketika mengakses properties yang tidak tersedia.
    public function __get($name){
        return $this->properties[$name];
    }
    
    // DIeksekusi ketika mengubah properties yang tidak tersedia.
    public function __set($name, $value){
        return $this->properties[$name] = $value;
    }
    
    // DIeksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia. 
    public function __isset($name) :bool {
        return isset($this->properties[$name]);
    }
    
    // Dieksekusi ketika menggunakn unset() properties yang tidak tersedia.
    public function __unset($name){
        unset($this->properties[$name]);
    }
}

// Memanfaatkan magic function diatas.
$zero = new Zero();
$zero -> firstName = "Samuel";
$zero -> middleName = "Alvin";
$zero -> lastName = "Colombus";

echo "Nama depan: $zero->firstName" . PHP_EOL;
echo "Nama tengah: $zero->middleName" . PHP_EOL;
echo "Nama belakang: $zero->lastName" . PHP_EOL;

?>