<?php 

// Traits biasa digunakan sebagai kontrak.

namespace Data\Traits;

trait sayGoodBye{
    public function sayGoodBye(?string $name) :void {  
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}
trait sayHello{
    public function hello(?string $name) :void {  
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

/* -------------------------------------------------------------------------- */
/*                              Trait Properties                              */
/* -------------------------------------------------------------------------- */

// Membuat Trait berisikan properties.
trait hasName {
    // Membuat properties pada Trait.
    public string $name;
}

class Person {
    use sayGoodBye, sayHello, hasName; 
    // Properti hasName akan dimiliki oleh Class Person. 
}

$person = new Person();
$person->sayGoodBye("Joe Smith");
$person->hello("Samuel");
// Mengakses properties
$person->name = "Dafa Alvin";
var_dump($person);

?>