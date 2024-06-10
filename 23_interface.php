<?php 

// Interface mirip seperti abstract class, yang membedakan adalah semua method otomatis abstract dan tidak memiliki block.

namespace Data;

interface hasBrand {
    function getBrand() : void ;
}

interface isMaintenance {
    function isMaintenance() : bool ;
}

interface Car extends hasBrand{
    function drive() : void ;
    function getTire() : int ;
}

class Avanza implements Car, isMaintenance {
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