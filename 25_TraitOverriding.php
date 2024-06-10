<?php 

require_once "24_Trait.php";
use Data\Traits\{sayGoodBye, sayHello, hasName};

// Trait abstract function.
trait canRun {
    public abstract function run() :void ;
}

class Person {
    use sayGoodBye, sayHello, hasName, canRun;
    // Trait abstract function wajib di override.
    public function run() :void {
        echo "Query Overide Function: Person $this->name is Good" . PHP_EOL;
    }
}

$run = new Person();
$run->name = "Muhammad Dafa";
$run->run();

?>