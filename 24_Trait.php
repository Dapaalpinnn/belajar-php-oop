<?php 

// Traits biasa digunakan sebagai kontrak.

namespace myTraits;

trait sayGoodBye{
    public function sayGoodBye(?string $name) :void {  
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name, see you again!" . PHP_EOL;
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

trait hasName {
    public string $name; // Membuat properties pada Trait.
}

// Mengakses traits menggunakan kata kunci use
class Person {
    use sayGoodBye, sayHello, hasName; // Properti hasName akan dimiliki oleh Class Person.
}

$person = new Person();
$person->sayGoodBye("Joe Smith");
$person->hello("Samuel");
$person->name = "Dafa Alvin"; // Mengakses properties trait hasName
var_dump($person);

?>