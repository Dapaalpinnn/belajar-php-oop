<?php 

class MyManager {
    var string $name;
    var string $tittle;
    public function __construct(string $name = "", $tittle = "Manager"){
        $this -> name = $name;
        $this -> tittle = $tittle;
    }
    public function sayHello($name){
        echo "Hello $name, my name is Manager {$this->name}" . PHP_EOL;  
    }
}

class MyVicePresident extends MyManager {
    public function __construct(string $name = ""){
        // Direkomendasikan memanggil constructor yang ada di parent class-nya.
        parent::__construct($name, "VP");
    }
    public function sayHello($name) :void {
        echo "Hello $name, my name is VP {$this->name}" . PHP_EOL;  
    }
}
 
$manager = new MyManager();
$manager -> name = "Rudi";
$manager -> tittle = "Manager";
$manager -> sayHello("Rudi");

$vp = new MyVicePresident();
$vp -> name = "Ahmad";
$vp -> sayHello("Ahmad Setiawan");

?>