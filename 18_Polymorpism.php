<?php 


class Programmer {
    public string $name;
    public function __construct(string $name){
        $this -> name = $name;
    }
}

class BackendProgrammer extends Programmer{
    
}

class FrontendProgrammer extends Programmer{
    
}

 /* -------------------------------------------------------------------------- */
 /*                                Polymorphism                                */
 /* -------------------------------------------------------------------------- */

// Polymorphism => Kemampuan sebuah object berubah bentuk menjadi bentuk lain.

class company {
    public Programmer $programmer;
}

$company = new Company();
$company -> programmer = new Programmer("Programmer");
var_dump($company);

$company -> programmer = new FrontendProgrammer("FrontendProgrammer");
var_dump($company);

$company -> programmer = new BackendProgrammer("BackendProgrammer");
var_dump($company);

/* -------------------------------------------------------------------------- */
/*                       Function Argument Polymorphism                       */
/* -------------------------------------------------------------------------- */

function sayHelloProgrammer(programmer $programmer){
    echo "Hello Programmer {$programmer -> name}" . PHP_EOL;
}

// Kita bisa menggunakan turunannya.
sayHelloProgrammer(new programmer("John"));
sayHelloProgrammer(new FrontendProgrammer("John"));
sayHelloProgrammer(new BackendProgrammer("John"));

// Kemampuan sebuah properti atau data bisa berubah tipe data (Biasa di set dari tipe data parentnya)

?>