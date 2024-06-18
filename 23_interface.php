<?php 

/**   Interface mirip seperti abstract class, yang membedakan: 
 * semua method/method otomatis abstract dan tidak memiliki block.
 * Tidak boleh memiliki properties
 * Mewarikan menggunakan kata kunci implements
**/

namespace Data;

// Membuat interface
interface hasBrand {
    function getBrand() : void ;
}
interface isMaintenance {
    function isMaintenance() : bool ;
}

// Jika mewarisi sesama interface menggunakan kata kunci extends.
interface Car extends hasBrand{ 
    function drive() : void ;
    function getTire() : int ;
}

// Bisa implements lebih dari satu interface.
class Avanza implements Car, isMaintenance {
    // Override method
    public function drive() : void {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(): int {
        return 4;
    }
    public function getBrand(): void {
        echo "Brand: Avanza" . PHP_EOL;
    }
    function isMaintenance() : bool {
        return False;
    }
}

$car = new Avanza();
$car->drive();
$car->getBrand();
$car->isMaintenance();

?>