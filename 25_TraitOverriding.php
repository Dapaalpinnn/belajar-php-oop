<?php 

require_once "24_Trait.php";

use myTraits\hasName;

// Trait abstract function.
trait canRun {
    public abstract function run(): void ;
}

class myPerson {
    // Trait abstract function wajib di override.
    public function run() :void {
        echo "The person is running" . PHP_EOL;
    }
}

$run = new myPerson();
$run->run();


// Di parent akan ter-overide oleh traits
// Si trait akan ter-overide oleh class

?>