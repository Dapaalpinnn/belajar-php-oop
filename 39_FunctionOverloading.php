<?php 

class myFunctionOverloading {
    // Dieksekusi ketika memanggil function yang tidak ada.
    public function __call($name, $arguments){
        $join = join(",", $arguments);
        echo "Call function $name with arguments join $join" . PHP_EOL;
    }
    // Akan dipanggil ketika static function yang akan diakses tidak ada
    public static function __callStatic($name, $arguments){
        $join = join(",", $arguments);
        echo "Call static function $name with argument $join" . PHP_EOL;
        
    }
}

$functionOverloading = new myFunctionOverloading();

echo "__CALL" . PHP_EOL;
$functionOverloading -> sayGoodMorning("Good Morning", "Welcome");

echo "__CALLSTATIC" . PHP_EOL;
myFunctionOverloading :: goodMorning("Good Evening", "See You");
?>